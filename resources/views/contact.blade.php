@extends('layouts.app')

@section('title', 'Connect with Begin360 | Strategic Consultation & Enterprise Partnerships')
@section('meta_title', 'Contact Us - Begin360: Architect Your Digital Transformation')
@section('meta_description', 'Reach out to Begin360 to discuss high-end ERP architecture, Odoo implementation, or custom digital infrastructure. Engage with our specialists to engineer your enterprise\'s future.')
@section('meta_keywords', 'Contact Begin360, ERP Consultation, Odoo Implementation Partner, Business Infrastructure Inquiry, Enterprise Digital Strategy, Australia ERP Experts, Odoo Silver Partner Contact.')
@push('styles')
   <style>
     #about-hero {
        background-color: var(--bs-body-bg);
        overflow: hidden;
    }

    #about-canvas {
        z-index: 1;
        transition: opacity 0.5s ease;  
        /* Blur interaction: Center is sharp, edges are blurred */
        mask-image: radial-gradient(circle at center, black 30%, transparent 100%);
        -webkit-mask-image: radial-gradient(circle at center, black 30%, transparent 100%);
    }

    /* Edge Blur Overlay */
    .blur-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        backdrop-filter: blur(4px);
        opacity: 0.7;
        mask-image: radial-gradient(circle at center, transparent 20%, black 80%);
        -webkit-mask-image: radial-gradient(circle at center, transparent 20%, black 80%);
        z-index: 2;
    }

    .glass-hero-card {
        position: relative;
        z-index: 10;
        background: rgba(var(--bs-body-bg-rgb), 0.1);
        backdrop-filter: blur(15px);
        border: 2px solid rgba(86, 217, 100, 0.2);
    }
   </style>
@endpush
@section('content')
    <section id="about-hero" class="position-relative vh-100 w-100 overflow-hidden bg-body pt-5">
        <canvas id="about-canvas" class="position-absolute top-0 start-0 w-100 h-100"></canvas>
        <div class="blur-overlay"></div>
        <div class="container position-relative h-100 d-flex align-items-center" style="z-index: 10;">
            <div class="row w-100">
                <div class="col-lg-8 mx-auto">
                    <div class="glass-hero-card p-5 gs-reveal rounded-4">
                        <span class="text-accent fw-bold text-uppercase tracking-widest mb-3 d-block">
                            Initiate Your Architectural Transformation
                        </span>
                        <h1 class="display-3 fw-bold mb-4 text-body">
                            Let’s Engineer the Future of Your <span class="text-accent">Enterprise</span>
                        </h1>
                        <p class="lead mb-4 text-secondary">
                            Generic solutions are built for the average—rigid, fragmented, and scaling with friction. At Begin360, we believe your digital infrastructure should be as unique as your vision. We don't just implement software; we architect ecosystems that breathe with your business. Whether you are seeking a sovereign Odoo implementation or a complete overhaul of your digital operating system, our consultants are ready to translate your operational complexity into glass-clear efficiency.
                        </p>
                        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3 gs-reveal">
                            <!-- Primary Action: Leads to the Form -->
                            <a href="#contact-form" class="btn btn-accent rounded-pill px-5 py-3 fw-black text-uppercase shadow-sm d-inline-flex align-items-center justify-content-center w-100 w-sm-auto text-decoration-none">
                                <i class="fa-solid fa-paper-plane me-2"></i> Start the Conversation
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
<script type="module">
    document.addEventListener("DOMContentLoaded", () => {
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
    });
</script>
@endpush