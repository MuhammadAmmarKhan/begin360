import $ from 'jquery';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { TextPlugin } from 'gsap/TextPlugin';
import * as THREE from 'three';
import 'bootstrap'; // This usually handles the window.bootstrap assignment
import { Modal } from 'bootstrap';
window.bootstrap = { Modal }; // Explicitly attach it to the window object
import "@lottiefiles/lottie-player";

// Register Plugins
gsap.registerPlugin(ScrollTrigger, TextPlugin);

// Global Exposure (The "Elite" fix for ReferenceErrors)
window.$ = window.jQuery = $;
window.gsap = gsap;
window.THREE = THREE;
window.ScrollTrigger = ScrollTrigger;
window.TextPlugin = TextPlugin;

document.addEventListener("DOMContentLoaded", () => {
    initNavigation();
    initThemeToggle();
    initCookieConsent();
    initBackToTop();
    initCustomCursor();
    
    if (document.querySelector('#erp-canvas')) {
        initThreeParticles();
    }
    if (document.querySelector('.section-accent')) {
        initSectionAccentAnim();
    }
    if (document.querySelector('#about-canvas')) {
        initAboutCanvas();
    }
    if (document.querySelector('.reveal-text')) {
        initAboutCanvas();
    }
    
    // Only run Horizontal Scroll if the trigger exists
    if (document.querySelector("#operational-bottleneck-trigger")) {
        initHorizontalScroll();
    }
});

/* --- 1. Navigation & Theme Logic --- */
function initNavigation() {
    const nav = document.getElementById('mainNav');
    if (!nav) return;
    gsap.set(nav, { visibility: "visible", opacity: 0, y: -20 });
    gsap.to(nav, { opacity: 1, y: 0, duration: 0.8, ease: "power3.out" });

    if (window.innerWidth > 992) {
        document.querySelectorAll('.dropdown').forEach(item => {
            const menu = item.querySelector('.dropdown-menu');
            item.addEventListener('mouseenter', () => {
                gsap.killTweensOf(menu);
                gsap.set(menu, { display: 'block' });
                gsap.to(menu, { opacity: 1, y: 5, duration: 0.4, ease: "expo.out" });
            });
            item.addEventListener('mouseleave', () => {
                gsap.to(menu, { 
                    opacity: 0, y: 15, duration: 0.3, 
                    onComplete: () => menu.style.display = 'none' 
                });
            });
        });
    }
}

function initThemeToggle() {
    const themeBtn = document.getElementById('themeToggle');
    const html = document.documentElement;

    // 1. Function to get preferred theme
    const getStoredTheme = () => localStorage.getItem('theme');
    
    // 2. Function to get system preference
    const getSystemTheme = () => {
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    };

    // 3. Initialize Theme
    const activeTheme = getStoredTheme() || getSystemTheme();
    html.setAttribute('data-bs-theme', activeTheme);

    // 4. Toggle Logic
    if (themeBtn) {
        themeBtn.addEventListener('click', () => {
            const current = html.getAttribute('data-bs-theme');
            const newTheme = current === 'dark' ? 'light' : 'dark';
            
            html.setAttribute('data-bs-theme', newTheme);
            
            // Save to LocalStorage (Standard Practice)
            localStorage.setItem('theme', newTheme);
            
            // Save to Cookie (For Server-Side awareness / Odoo sync)
            document.cookie = `theme=${newTheme}; path=/; max-age=${60 * 60 * 24 * 365}; SameSite=Lax`;
        });
    }

    // 5. Listen for System changes in real-time
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
        if (!getStoredTheme()) {
            const systemTheme = e.matches ? 'dark' : 'light';
            html.setAttribute('data-bs-theme', systemTheme);
        }
    });
}

/* --- 2. Three.js Particle System --- */
function initThreeParticles() {
    const canvas = document.querySelector('#erp-canvas');
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true });

    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);

    const particlesCount = 120;
    const posArray = new Float32Array(particlesCount * 3);
    const velocityArray = new Float32Array(particlesCount * 3);

    for(let i=0; i < particlesCount * 3; i++) {
        posArray[i] = (Math.random() - 0.5) * 10;
        velocityArray[i] = (Math.random() - 0.5) * 0.01;
    }

    const geometry = new THREE.BufferGeometry();
    geometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));

    // Particle Look (The Accent Color)
    const material = new THREE.PointsMaterial({
        size: 0.015,
        color: 0x01D409,
        transparent: true,
        opacity: 0.7
    });

    const particlesMesh = new THREE.Points(geometry, material);
    scene.add(particlesMesh);

    // Mouse Interaction
    let mouseX = 0;
    let mouseY = 0;

    window.addEventListener('mousemove', (e) => {
        mouseX = (e.clientX / window.innerWidth - 0.5) * 2;
        mouseY = (e.clientY / window.innerHeight - 0.5) * -2;
    });

    // Burst Effect on Click
    window.addEventListener('click', () => {
        gsap.to(particlesMesh.rotation, {
            duration: 2,
            y: particlesMesh.rotation.y + Math.PI,
            ease: "expo.out"
        });
    });

    camera.position.z = 3;

    function animate() {
        requestAnimationFrame(animate);

        // Subtle Auto-Rotation
        particlesMesh.rotation.y += 0.001;

        // Smooth Mouse Follow (Parallax)
        particlesMesh.position.x += (mouseX * 0.5 - particlesMesh.position.x) * 0.05;
        particlesMesh.position.y += (mouseY * 0.5 - particlesMesh.position.y) * 0.05;

        renderer.render(scene, camera);
    }

    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });

    animate();
}

/* --- 3. Horizontal Scroll & Step Logic --- */



function initCookieConsent() {
    const cookiePopup = document.getElementById('cookieConsent');
    const acceptBtn = document.getElementById('acceptCookies');
    const declineBtn = document.getElementById('declineCookies');

    if (!cookiePopup || !acceptBtn || !declineBtn) return;

    if (!localStorage.getItem('cookieConsent')) {
        setTimeout(() => {
            cookiePopup.classList.add('show');
        }, 2000);
    }

    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookieConsent', 'accepted');
        cookiePopup.classList.remove('show');
    });

    declineBtn.addEventListener('click', () => {
        cookiePopup.classList.remove('show');
    });
}

function initBackToTop() {
    const backToTop = document.getElementById('backToTop');
    if (!backToTop) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTop.classList.add('show');
        } else {
            backToTop.classList.remove('show');
        }
    });

    backToTop.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

function initCustomCursor() {
    const dot = document.querySelector(".cursor-dot");
    const glow = document.querySelector(".cursor-glow");

    if (!dot || !glow) return;

    window.addEventListener("mousemove", (e) => {
        // Dot follows instantly
        gsap.set(dot, { x: e.clientX, y: e.clientY });
        
        // Glow follows with smooth lag
        gsap.to(glow, {
            x: e.clientX,
            y: e.clientY,
            duration: 0.4,
            ease: "power2.out"
        });
    });

    // Elite Hover Interactions
    const interactables = document.querySelectorAll('a, button, .nav-link, .navbar-brand');
    
    interactables.forEach(el => {
        el.addEventListener('mouseenter', () => {
            // Expand the circle but make the background ALMOST transparent 
            // so the text underneath remains perfectly sharp.
            gsap.to(glow, { 
                width: 60, 
                height: 60, 
                backgroundColor: "rgba(86, 217, 100, 0.05)", 
                borderColor: "rgba(86, 217, 100, 0.6)",
                duration: 0.3 
            });
            gsap.to(dot, { scale: 0, duration: 0.2 }); // Hide the dot on hover for a cleaner look
        });

        el.addEventListener('mouseleave', () => {
            gsap.to(glow, { 
                width: 30, 
                height: 30, 
                backgroundColor: "rgba(86, 217, 100, 0.1)", 
                borderColor: "rgba(86, 217, 100, 0.2)",
                duration: 0.3 
            });
            gsap.to(dot, { scale: 1, duration: 0.2 });
        });
    });
}

function initSectionAccentAnim() {
    gsap.registerPlugin(ScrollTrigger);

    const targets = document.querySelectorAll(".section-accent");

    targets.forEach((target) => {
        const originalText = target.innerText;
        
        // Wrap text in a span to control visibility without losing dimensions
        // Add a secondary span for the cursor
        target.innerHTML = `
            <span class="accent-text" style="color: transparent;">${originalText}</span>
            <span class="accent-cursor" style="position: absolute; display: inline-block; width: 2px; height: 1.2em; background: #56D964; margin-left: 0px; z-index: 5;"></span>
        `;
        
        const textSpan = target.querySelector(".accent-text");
        const cursor = target.querySelector(".accent-cursor");

        gsap.set(target, { 
            display: "inline-block",
            position: "relative",
            whiteSpace: "nowrap" // Prevents text from wrapping and jumping rows
        });

        // 1. Independent Blinking Cursor Animation
        gsap.to(cursor, {
            opacity: 0,
            duration: 0.5,
            repeat: -1,
            yoyo: true,
            ease: "steps(1)"
        });

        // 2. Main Typing Timeline
        const tl = gsap.timeline({
            repeat: -1,
            repeatDelay: 2,
            scrollTrigger: {
                trigger: target,
                start: "top 95%",
            }
        });

        tl.to({}, {
            duration: originalText.length * 0.05, // Adjust speed here
            onUpdate: function() {
                // Calculate progress and determine how many characters to show
                const progress = this.progress();
                const charCount = Math.floor(progress * originalText.length);
                
                // Show typed part in black, rest stays transparent
                const typed = originalText.substring(0, charCount);
                const untyped = originalText.substring(charCount);
                
                textSpan.innerHTML = `<span class="text-accent">${typed}</span><span style="color: transparent;">${untyped}</span>`;
                
                // Position cursor at the end of the visible text
                // We do this by measuring a ghost element or simply following the text flow
                const charWidth = 1;//textSpan.offsetWidth / originalText.length;
                gsap.set(cursor, { x: charWidth * charCount });
            },
            ease: "none"
        });

        // 3. Pause at the end before loop resets
        tl.to({}, { duration: 0.1 });
    });
}

function initAboutCanvas(){
    const canvas = document.querySelector('#about-canvas');
    const scene = new THREE.Scene();
    
    const aspect = window.innerWidth / window.innerHeight;
    const d = 10;
    const camera = new THREE.OrthographicCamera(-d * aspect, d * aspect, d, -d, 1, 1000);
    camera.position.set(0, 10, 0); 
    camera.lookAt(0, 0, 0);

    const renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true });
    renderer.setSize(window.innerWidth, window.innerHeight);

    const size = 40;
    const divisions = 60; 
    const step = size / divisions;
    const points = [];
    
    for (let i = 0; i <= divisions; i++) {
        for (let j = 0; j < divisions; j++) {
            points.push(-size/2 + i * step, 0, -size/2 + j * step);
            points.push(-size/2 + i * step, 0, -size/2 + (j + 1) * step);
        }
        for (let j = 0; j < divisions; j++) {
            points.push(-size/2 + j * step, 0, -size/2 + i * step);
            points.push(-size/2 + (j + 1) * step, 0, -size/2 + i * step);
        }
    }

    const geometry = new THREE.BufferGeometry();
    geometry.setAttribute('position', new THREE.Float32BufferAttribute(points, 3));
    const initialPositions = new Float32Array(points);

    const material = new THREE.LineBasicMaterial({ 
        color: 0x888888, 
        transparent: true, 
        opacity: 0.12 // Dropped from 0.18 for better text legibility
    });

    const grid = new THREE.LineSegments(geometry, material);
    scene.add(grid);

    let mouse = new THREE.Vector2(-999, -999);
    window.addEventListener('mousemove', (e) => {
        mouse.x = (e.clientX / window.innerWidth) * 2 - 1;
        mouse.y = -(e.clientY / window.innerHeight) * 2 + 1;
    });

    function animate() {
        requestAnimationFrame(animate);
        const posAttr = geometry.attributes.position;
        const time = Date.now() * 0.001;

        const mx = mouse.x * d * aspect;
        const mz = -mouse.y * d;

        for (let i = 0; i < posAttr.count; i++) {
            const ix = initialPositions[i * 3];
            const iz = initialPositions[i * 3 + 2];

            // Ambient breathing (Slowed down slightly for "Elite" feel)
            const waveX = Math.sin(time * 0.3 + ix * 0.2) * 0.03;
            const waveZ = Math.cos(time * 0.3 + iz * 0.2) * 0.03;

            const dx = ix - mx;
            const dz = iz - mz;
            const dist = Math.sqrt(dx * dx + dz * dz);

            // SNAPPY DISPERSAL
            if (dist < 3.2) {
                const force = (3.2 - dist) / 3.2;
                const angle = Math.atan2(dz, dx);
                
                // Increased force multiplier to 1.8 for snappier scuttling
                posAttr.setXYZ(
                    i, 
                    ix + Math.cos(angle) * force * 1.8 + waveX, 
                    0, 
                    iz + Math.sin(angle) * force * 1.8 + waveZ
                );
            } else {
                const cx = posAttr.getX(i);
                const cz = posAttr.getZ(i);
                
                // Increased LERP to 0.25 for a faster "spring" back
                posAttr.setXYZ(
                    i,
                    THREE.MathUtils.lerp(cx, ix + waveX, 0.25),
                    0,
                    THREE.MathUtils.lerp(cz, iz + waveZ, 0.25)
                );
            }
        }

        posAttr.needsUpdate = true;
        renderer.render(scene, camera);
        }

    animate();

    window.addEventListener('resize', () => {
        const aspect = window.innerWidth / window.innerHeight;
        camera.left = -d * aspect; camera.right = d * aspect;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
}

function initRevealText(){
    const targets = document.querySelectorAll('.reveal-text');
    
    targets.forEach((target) => {
        const triggerElement = target.closest('.intro-trigger'); // Finds the nearest parent trigger
        if (!triggerElement) return;

        const originalText = target.textContent.trim();
        const words = originalText.split(' ');
        target.textContent = '';

        const allChars = [];

        words.forEach((word, index) => {
            const wordWrapper = document.createElement('span');
            wordWrapper.style.whiteSpace = 'nowrap';
            wordWrapper.style.display = 'inline-block';

            word.split('').forEach(char => {
                const charSpan = document.createElement('span');
                charSpan.innerText = char;
                charSpan.style.display = 'inline-block';
                charSpan.style.opacity = '0.1'; 
                wordWrapper.appendChild(charSpan);
                allChars.push(charSpan);
            });

            target.appendChild(wordWrapper);

            if (index < words.length - 1) {
                const space = document.createElement('span');
                space.innerHTML = '&nbsp;';
                space.style.display = 'inline-block';
                target.appendChild(space);
            }
        });

        // Initialize unique GSAP animation for THIS specific target
        gsap.to(allChars, {
            scrollTrigger: {
                trigger: triggerElement, // Individual trigger per section
                start: 'top center',
                end: 'bottom bottom',
                scrub: 1.2,
                markers: false
            },
            opacity: 1,
            y: -40,
            
            stagger: 0.05, // Tightened stagger for smoother character reveal
            ease: "power2.out",
            color: "var(--bs-body-color)"
        });
    });

}