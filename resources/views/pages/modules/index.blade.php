@extends('layouts.app')

@section('title', 'Integrated ERP Modules | High-End Digital Ecosystems by Begin360')
@section('meta_title', 'All Modules - Begin360: The Blueprint for Scalable Enterprise Operations')
@section('meta_description', 'Explore the full suite of Begin360 operational modules. From advanced inventory and procurement to AI-driven demand planning, discover engineered components designed for seamless enterprise integration.')
@section('meta_keywords', 'ERP Modules, Odoo Features, Enterprise Inventory Management, Digital Procurement Systems, Automated Warehouse Management, Demand Planning Software, Begin360 Solutions, Business Process Architecture.')
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
    .custom-stop-color-1 {
        /* Replace with your preferred gray/accent color */
        stop-color: #047b2a; 
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
                    <div class="glass-hero-card p-5 gs-reveal rounded-5">
                        <span class="text-accent fw-bold text-uppercase tracking-widest mb-3 d-block ls-2">
                            The Digital Ecosystem Catalog
                        </span>
                        <h1 class="display-3 fw-black text-body mb-4 tracking-tighter">
                            Modular Architecture for <span class="text-accent gradient-text">Infinite Scale</span>
                        </h1>
                        <p class="lead mb-5 text-secondary fw-medium lh-lg" style="max-width: 850px; margin-left: auto; margin-right: auto;">
                            Fragmented tools create operational friction. At <span class="text-body fw-bold">Begin360</span>, we’ve engineered a comprehensive suite of interoperable modules designed to serve as the building blocks of your enterprise. From AI-driven demand planning to sovereign inventory control, each component is architected to integrate seamlessly, allowing you to deploy precise functionality today while maintaining the flexibility to expand your infrastructure tomorrow.
                        </p>
                        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3 gs-reveal">
                            <!-- Primary Action: Leads to the Grid -->
                            <a href="#module-grid" class="btn btn-accent rounded-pill px-5 py-3 fw-800 text-uppercase tracking-wide shadow-sm d-inline-flex align-items-center justify-content-center w-100 w-sm-auto text-decoration-none">
                                <i class="fa-solid fa-layer-group me-2 small"></i> Explore the Suite
                            </a>
                            <!-- Secondary Action: Consultation -->
                            <a href="{{ url('/contact') }}" class="btn btn-outline-secondary rounded-pill px-5 py-3 fw-800 text-uppercase tracking-wide d-inline-flex align-items-center justify-content-center w-100 w-sm-auto text-decoration-none">
                                <i class="fa-solid fa-microchip me-2 small"></i> Request Custom Build
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="position-absolute bottom-0 start-50 translate-middle-x pb-4 text-center d-flex flex-column align-items-center gap-2" style="z-index: 100;">
        <div class="mouse-icon border border-2 border-body rounded-pill d-flex align-items-start justify-content-center" style="width: 25px; height: 45px; padding-top: 5px;">
            <div class="scroll-dot bg-secondary rounded-circle" style="width: 5px; height: 8px;"></div>
        </div>
        <span class="small text-secondary tracking-wide">Scroll to see the transformation</span>
    </div>
    @php
        $modules = [
            [
                'title' => 'Inventory Management',
                'icon' => 'fa-boxes-stacked',
                'description' => 'Sovereign control over your entire supply chain with real-time architectural visibility.',
                'url' => route('modules.show', 'inventory-management'),
                'column_class' => 'col-10 col-md-8 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Procurement',
                'icon' => 'fa-file-invoice-dollar',
                'description' => 'Automated sourcing and high-fidelity vendor synchronization.',
                'url' => route('modules.show', 'procurement'),
                'column_class' => 'col-10 col-md-4 col-lg-3',
                'show_cta' => true
            ],
            [
                'title' => 'Order Management',
                'icon' => 'fa-cart-flatbed',
                'description' => 'Seamless omnichannel orchestration for complex transaction flows.',
                'url' => route('modules.show', 'order-management'),
                'column_class' => 'col-10 col-md-4 col-lg-3',
                'show_cta' => true
            ],
            [
                'title' => 'Finance & Accounting',
                'icon' => 'fa-calculator',
                'description' => 'Integrated fiscal infrastructure with mathematical precision.',
                'url' => route('modules.show', 'finance-accounting'),
                'column_class' => 'col-10 col-md-4 col-lg-4',
                'show_cta' => true
            ],
            [
                'title' => 'Freight & Fulfillment',
                'icon' => 'fa-truck-fast',
                'description' => 'Logic-driven logistics to engineer your global delivery footprint.',
                'url' => route('modules.show', 'freight-fulfillment'),
                'column_class' => 'col-10 col-md-4 col-lg-4',
                'show_cta' => true
            ],
            [
                'title' => 'Demand Planning',
                'icon' => 'fa-chart-line',
                'description' => 'Predictive modeling and AI-driven insights for resilient scaling.',
                'url' => route('modules.show', 'demand-planning'),
                'featured' => false,
                'column_class' => 'col-10 col-md-12 col-lg-4',
                'show_cta' => true
            ],
            [
                'title' => 'Warehouse Management',
                'icon' => 'fa-warehouse',
                'description' => 'Optimizing spatial efficiency through advanced WMS architecture.',
                'url' => route('modules.show', 'warehouse-management'),
                'column_class' => 'col-10 col-md-8 col-lg-8',
                'show_cta' => true
            ],
            [
                'title' => 'Manufacturing',
                'icon' => 'fa-industry',
                'description' => 'Digital twins and MRP logic for precision production environments.',
                'url' => route('modules.show', 'manufacturing'),
                'column_class' => 'col-10 col-md-4 col-lg-4',
                'show_cta' => true
            ],
            /* New "Drop a line" Item */
            [
                'title' => 'Custom Architecture?',
                'icon' => 'fa-microchip',
                'description' => 'Seeking a specialized operational framework? We engineer bespoke solutions for complex enterprise visions.',
                'url' => url('/contact'),
                'column_class' => 'col-10 col-md-12 col-lg-12', // Spans full width at bottom
                'show_cta' => true,
                'featured' => true,
                'cta_text' => 'Start a Consultation'
            ]
        ];
    @endphp
    <section class="position-relative intro-trigger min-vh-100 d-flex align-items-center justify-content-center bg-body overflow-hidden">
        <!-- Background Wrapper -->
        <div style="position: absolute; width: 100%; height: 100vh; top: 0; left: 0; z-index: 0;">
            <svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <radialGradient id="Gradient1" cx="50%" cy="50%" fx="0.441602%" fy="50%" r=".5">
                        <animate attributeName="fx" dur="34s" values="0%;3%;0%" repeatCount="indefinite"></animate>
                        <!-- Ensure stop-color is defined via CSS or inline -->
                        <stop offset="0%" class="custom-stop-color-1" style="stop-color: var(--accent);"></stop>
                        <stop offset="100%" class="custom-stop-color-1" stop-opacity="0" style="stop-color: var(--accent);"></stop>
                    </radialGradient>
                </defs>
                <rect x="13.744%" y="1.18473%" width="100%" height="100%" fill="url(#Gradient1)" transform="rotate(334.41 50 50)">
                    <animate attributeName="x" dur="20s" values="25%;0%;25%" repeatCount="indefinite"></animate>
                    <animate attributeName="y" dur="21s" values="0%;25%;0%" repeatCount="indefinite"></animate>
                    <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="7s" repeatCount="indefinite"></animateTransform>
                </rect>
            </svg>
        </div>

        <!-- Content -->
        <div class="container" style="z-index: 1;">
            <div class="row">
                <h1 class="reveal-text text-end display-1 fw-normal py-5 tracking-tighter text-accent">
                    Synchronize, Autonomize, and Deploy through a Unified System.
                </h1>
            </div>
        </div>
    </section>
    <section id="module-introduction" class="py-5 bg-body">
        <div class="container text-center d-flex flex-column align-items-center">
            <div class="row text-start py-5">
                <div class="col-lg-5">
                    <span class="text-accent fw-bold text-uppercase tracking-widest mb-2 d-block">
                        Total Operational Sovereignty
                    </span>
                    <h2 class="display-6 fw-bold text-body mb-4 ">
                        Begin360 Operations Cloud: <span class="text-accent">Architecting Unified Ecosystems</span>
                    </h2>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <p class="lead text-secondary mb-5 lh-lg">
                        From precision production and sovereign inventory control to global procurement and omnichannel order orchestration, the 
                        <span class="text-body fw-bold">Begin360 Operations Cloud</span> represents a paradigm shift in enterprise engineering. 
                        Our modules are high-performance, flexible frameworks of data architecture and logic-driven workflows designed to be 
                        composed into a singular digital nervous system. Deploy specific modules to solve immediate operational friction 
                        or integrate the full suite for total end-to-end command.
                    </p>
                </div>
            </div>
        </div>

        <!-- The Bento Grid Component -->
        <x-bento-grid :items="$modules" id="module-grid" class="pt-5" />
    </section>
    <section class="intro-trigger min-vh-100 d-flex align-items-center  py-5 justify-content-center bg-body">
        <div class="container">
            <div class="row">
                <h1 class="reveal-text text-start display-1 fw-normal tracking-tighter text-accent">
                    Connect your data, operations, and integrations in one place
                </h1>
                <a href="#contact-form" class="rounded-pill btn btn-accent btn-lg shadow-sm text-body" style="max-width:320px;">Start Your Project <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
    @php
        $faqs = [
            [
                'question' => 'What services do you offer?',
                'answer' => 'We offer a range of services including CRM consulting, optimization, and bespoke marketing solutions. Our packages are designed to cater to various business needs, from entry-level support to comprehensive revenue operations leadership. Each service is tailored to help you achieve your growth objectives.'
            ],
            [
                'question' => 'How do engagements get started?',
                'answer' => 'Our process begins with a comprehensive audit of your existing workflows to identify bottlenecks and opportunities for automation.'
            ],
            [
                'question' => 'Do you offer ongoing support?',
                'answer' => 'Yes, we provide dedicated post-integration support and continuous optimization to ensure your systems scale with your business.'
            ],
            [
                'question' => 'Where do you typically begin?',
                'answer' => 'We usually start at the core of your data architecture to ensure the foundation is secure before layering advanced automation.'
            ],
            [
                'question' => 'What is the typical implementation timeline?',
                'answer' => 'While complexity varies, most corporate integrations are completed within 8 to 12 weeks. We provide a detailed project roadmap during the initial discovery phase to ensure full transparency.'
            ],
            [
                'question' => 'How do you handle data security and privacy?',
                'answer' => 'Security is our primary directive. We utilize enterprise-grade encryption and comply with all global data privacy standards to ensure your corporate intellectual property remains protected.'
            ],
            [
                'question' => 'Do you provide custom API development?',
                'answer' => 'Yes. Our engineering team specializes in building custom middleware and API connectors to ensure seamless data flow between your legacy systems and modern stacks.'
            ],
            [
                'question' => 'How is the success of an engagement measured?',
                'answer' => 'WE DEFINE SPECIFIC KEY PERFORMANCE INDICATORS (KPIS) AT THE ONSET, FOCUSING ON OPERATIONAL EFFICIENCY, COST REDUCTION, AND REVENUE GROWTH METRICS TO TRACK TANGIBLE ROI.'
            ],
            [
                'question' => 'What is your pricing structure?',
                'answer' => 'We offer tiered engagement models ranging from project-based consulting to ongoing retainers. Each proposal is custom-built to match your specific scale and scope.'
            ],
            [
                'question' => 'Can you support multi-national operations?',
                'answer' => 'Absolutely. Our systems are designed to handle multi-currency, multi-language, and complex global tax compliance requirements for international corporations.'
            ],
            [
                'question' => 'Do you provide internal team training?',
                'answer' => 'We provide comprehensive onboarding and hands-on training sessions to ensure your team is fully equipped to manage and operate the new ecosystem independently.'
            ],
            [
                'question' => 'How scalable are your solutions?',
                'answer' => 'All architectures we deploy are built with scalability in mind. As your transaction volume grows, our cloud-native solutions auto-adapt to ensure peak performance.'
            ],
            [
                'question' => 'Do you work with third-party vendors?',
                'answer' => 'Yes. We frequently collaborate with external vendors and internal IT departments to ensure that all integrations align with your broader corporate strategy.'
            ],
            [
                'question' => 'Do you offer change management services?',
                'answer' => 'We recognize that tools are only half the battle. We provide change management advisory to help align your company culture with new digital processes.'
            ]
        ];
    @endphp

    <x-custom-faqs 
        title="Still Have<br>Questions?" 
        :faqs="$faqs" 
        class="my-custom-margin-class" 
    />


@endsection
@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Select ALL elements with the class 'reveal-text'
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
});
</script>
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