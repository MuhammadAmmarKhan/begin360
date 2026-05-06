import $ from 'jquery';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { TextPlugin } from 'gsap/TextPlugin';
import * as THREE from 'three';
import 'bootstrap'; // This usually handles the window.bootstrap assignment
import { Modal } from 'bootstrap';
window.bootstrap = { Modal }; // Explicitly attach it to the window object

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
    
    // Only run Three.js if the canvas exists on the current page
    if (document.querySelector('#erp-canvas')) {
        initThreeParticles();
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
function initHorizontalScroll() {
    const trigger = document.querySelector("#operational-bottleneck-trigger");
    const wrapper = document.querySelector("#master-horizontal-wrapper");
    const content = document.querySelector("#master-horizontal-content");
    const problemIntro = document.querySelector(".problem-intro");
    const transIntro = document.querySelector(".transformation-intro");
    const beforeState = document.querySelector(".before-state");

    if (!trigger || !content) return;

    const masterTl = gsap.timeline({
        scrollTrigger: {
            trigger: trigger,
            start: "top top",
            end: () => "+=" + content.scrollWidth,
            pin: wrapper,
            scrub: 1,
            invalidateOnRefresh: true,
        }
    });

    // 1. Horizontal movement
    masterTl.to(content, {
        x: () => -(content.scrollWidth - window.innerWidth),
        ease: "none"
    });

    // 2. Sidebar Content Swap
    masterTl.to(problemIntro, {
        opacity: 0,
        y: -20,
        duration: 0.2
    }, "-=40%");

    masterTl.to(transIntro, {
        autoAlpha: 1,
        y: 0,
        duration: 0.2
    }, "-=20%");

    // 3. Transformation Wipe Effect
    if (beforeState) {
        masterTl.fromTo(beforeState, 
            { clipPath: "inset(0% 0% 0% 0%)" }, 
            { clipPath: "inset(0% 100% 0% 0%)", ease: "none" }, 
            "-=10%" 
        );
    }

    /* --- HIW Step Logic --- */
    const TOTAL = 4;
    let active = -1;

    const panels = Array.from({ length: TOTAL }, (_, i) => document.getElementById(`diag-${i+1}`));
    const dots   = Array.from({ length: TOTAL }, (_, i) => document.getElementById(`dot-${i+1}`));
    const bodies = Array.from({ length: TOTAL }, (_, i) => document.getElementById(`body-${i+1}`));
    const labels = Array.from({ length: TOTAL }, (_, i) => document.getElementById(`lbl-${i+1}`));
    const vlines = Array.from({ length: TOTAL }, (_, i) => document.getElementById(`vline-${i+1}`));

    gsap.set(panels, { opacity: 0 });
    if(panels[0]) gsap.set(panels[0], { opacity: 1 });
    gsap.set(bodies, { maxHeight: 0, opacity: 0 });

    function goTo(n) {
        if (active === n || n < 0) return;
        active = n;

        panels.forEach((p, i) => {
            if (!p) return;
            gsap.to(p, { opacity: i === n ? 1 : 0, duration: 0.55, ease: 'power2.inOut' });
        });

        for (let i = 0; i < TOTAL; i++) {
            const isActive = i === n;
            const isCompleted = i < n;

            if (dots[i]) {
                gsap.to(dots[i], {
                    backgroundColor: isActive ? '#56D964' : (isCompleted ? '#f0fdf4' : '#f9fafb'),
                    borderColor: (isActive || isCompleted) ? '#56D964' : '#d1d5db',
                    color: isActive ? '#fff' : (isCompleted ? '#166534' : '#9ca3af'),
                    scale: isActive ? 1.12 : 1,
                    duration: 0.3
                });
            }

            if (bodies[i]) {
                gsap.to(bodies[i], { maxHeight: isActive ? 260 : 0, opacity: isActive ? 1 : 0, duration: 0.45 });
            }

            if (labels[i]) {
                gsap.to(labels[i], { color: (isActive || isCompleted) ? '#56D964' : '#9ca3af', duration: 0.2 });
            }

            if (vlines[i]) {
                gsap.to(vlines[i], { backgroundColor: isCompleted ? '#56D964' : '#e5e7eb', duration: 0.3 });
            }
        }
    }

    ScrollTrigger.create({
        trigger: '#hiw-root',
        start: 'top top',
        end: 'bottom bottom',
        onUpdate(self) {
            const step = Math.min(Math.floor(self.progress * TOTAL), TOTAL - 1);
            goTo(step);
        }
    });

    goTo(0);
}

/* --- 4. Utilities --- */

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
/* resources/js/app.js */

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

// CRITICAL: Call it here!
document.addEventListener("DOMContentLoaded", () => {
    initCustomCursor();
    // ... your other init functions
});