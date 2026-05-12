@extends('layouts.app')

@section('title', 'Home | Begin360 - From Complexity to Clarity')
@section('meta_description', 'Transforming enterprise operations with glassmorphic UI and Odoo architecture.')
@section('meta_keywords', 'Transforming enterprise operations with glassmorphic UI and Odoo architecture.')
@push('styles')
<style>
    /* Container Logic */
    .floating-assets-container {
        perspective: 1000px;
    }

    .asset-wrapper {
        position: absolute;
        transition: transform 0.3s ease-out;
        z-index: 1;
    }

    /* Precise Sizing based on your PNGs */
    .asset-lg {
        width: 280px; /* Scaled from 824px for web layout */
    }

    .asset-sm {
        width: 120px; /* Scaled from 398px for web layout */
    }

    /* Glassmorphic asset effect */
    .glass-asset {
        /* filter: drop-shadow(0 15px 35px rgba(0,0,0,0.2)); */
        user-select: none;
        pointer-events: none;
    }

    /* Floating Keyframes for "Alive" feel */
    @keyframes floatY {
        0% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-15px) rotate(1deg); }
        100% { transform: translateY(0px) rotate(0deg); }
    }

    @keyframes floatX {
        0% { transform: translateX(0px); }
        50% { transform: translateX(10px); }
        100% { transform: translateX(0px); }
    }

    .floating-1 { animation: floatY 6s ease-in-out infinite; }
    .floating-2 { animation: floatY 8s ease-in-out infinite 1s; }
    .floating-3 { animation: floatX 7s ease-in-out infinite 0.5s; }

    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .floating-assets-container {
            height: 500px;
            transform: scale(0.8);
        }
    }
        /* Container Logic */
    #erpAether { perspective: 1200px; }
    .active-state { opacity: 1; transition: opacity 0.3s ease; }
    .network-assets-container { z-index: 10; opacity: 0; }

    /* Asset Base Styles */
    .endpoint-wrapper { position: absolute; }
    .endpoint-lg { width: 150px; } /* Precise sizing for web architecture */
    .endpoint-sm { width: 70px; }

    /* network asset effect */
    .network-asset {
        /* filter: drop-shadow(0 20px 50px rgba(0,0,0,0.3)); */
        transition: all 0.5s ease;
    }

    /* --- Pulse Connectors (Synchronized) --- */
    .network-connector-pulse {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
        
        opacity: 0.1;
        z-index: -1;
    }



    @keyframes syncPulse {
        0% { transform: scaleX(1); opacity: 0.4; }
        50% { transform: scaleX(1.02); opacity: 1; }
        100% { transform: scaleX(1); opacity: 0.4; }
    }
    .path-glow {
        filter: drop-shadow(0 0 8px var(--accent));
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000; /* Will be animated by GSAP */
    }

    .connector-container {
        pointer-events: none; /* Allows clicking through to cards */
    }

    /* Green Entry Dots on the Cards */
    .clarity-node::before {
        content: '';
        position: absolute;
        width: 12px;
        height: 12px;
        background: var(--accent);
        border-radius: 50%;
        left: 50%;
        transform: translateX(-50%);
        box-shadow: 0 0 10px var(--accent);
        z-index: 10;
    }

    /* Top nodes: dot on bottom | Bottom nodes: dot on top */
    .node-inventory::before, .node-orders::before, .node-finance::before { bottom: -6px; }
    .node-spreadsheet::before, .node-emails::before { top: -6px; }
    /* Ensure the container doesn't block interactions */
    .connector-container {
        pointer-events: none;
    }

    /* The Animated Path Glow */
    .path-active {
        filter: drop-shadow(0 0 5px var(--accent));
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000; /* GSAP will animate this to 0 */
    }

    /* The Dots at the connection points */
    .clarity-node::after {
        content: '';
        position: absolute;
        width: 10px;
        height: 10px;
        background: var(--accent);
        border: 2px solid #000;
        border-radius: 50%;
        left: 50%;
        transform: translateX(-50%);
        box-shadow: 0 0 10px var(--accent);
        z-index: 100;
        opacity: 0; /* Hidden until GSAP reveal */
    }

    /* Positioning dots based on row */
    /* Top Row Nodes (Orders, Inventory, Finance) */
    .node-orders::after, .node-inventory::after, .node-finance::after {
        bottom: -5px; 
    }

    /* Bottom Row Nodes (Spreadsheet, Emails) */
    .node-spreadsheet::after, .node-emails::after {
        top: -5px;
    }
    /* Ensure the container sits behind your text and layout items */
    .connector-container {
        pointer-events: none;
    }

    /* Active Flow Path Glow */
    .path-active {
        filter: drop-shadow(0 0 4px var(--accent));
        stroke-dasharray: 1200;
        stroke-dashoffset: 1200; /* Will be drawn by GSAP */
    }

    /* Dots Setup */
    .connector-dot {
        fill: var(--accent);
        filter: drop-shadow(0 0 8px var(--accent));
        transform-origin: center;
        opacity: 1; /* Hidden initially, revealed by GSAP */
        scale: 1;
    }

    /* Keyframe for Constant pulsing effect */
    @keyframes syncRadarPulse {
        0% {
            r: 6px;
            opacity: 0.8;
            filter: drop-shadow(0 0 4px var(--accent));
        }
        50% {
            r: 9px;
            opacity: 1;
            filter: drop-shadow(0 0 12px var(--accent));
        }
        100% {
            r: 6px;
            opacity: 0.8;
            filter: drop-shadow(0 0 4px var(--accent));
        }
    }

    /* Applied class post-GSAP entrance */
    .dot-pulsing-active {
        animation: syncRadarPulse 1.8s infinite ease-in-out;
    }

</style>
@push('styles')
@section('content')
    @php
        $bottlenecks = [
            [
                'title' => 'Fragmented Data Silos',
                'desc' => 'Eliminate operational friction where sales, inventory, and finance operate in isolation.',
                'image' => 'hp1.png'
            ],
            [
                'title' => 'Operational Inefficiency',
                'desc' => 'Stop wasting human capital on repetitive data entry. We transform manual bottlenecks.',
                'image' => 'hp2.png'
            ],
            [
                'title' => 'Blind Decision Making',
                'desc' => 'Gain real-time business intelligence and 360° visibility to make data-driven decisions.',
                'image' => 'hp3.png'
            ],
            [
                'title' => 'Stagnated ROI',
                'desc' => 'Optimize your cost structure by consolidating your tech stack into one platform.',
                'image' => 'hp4.png'
            ],
        ];
        $industries = [
            [
                'title' => 'Food & Beverage',
                'icon' => 'fa-utensils',
                'description' => 'Rigid batch-track procurement and perishable inventory logic engineered for global supply chain resilience and safety compliance.',
                'url' => route('industries.show', 'food-beverage'),
                'column_class' => 'col-12 col-lg-7', // Primary Featured Tile
                'show_cta' => true,
                'cta_text' => 'Explore Blueprint'
            ],
            [
                'title' => 'Retail',
                'icon' => 'fa-basket-shopping',
                'description' => 'Scalable omnichannel ecosystems designed to synchronize high-volume retail flows and sovereign inventory control.',
                'url' => route('industries.show', 'retail'),
                'column_class' => 'col-12 col-md-6 col-lg-5',
                'show_cta' => true
            ],
            [
                'title' => 'Trades',
                'icon' => 'fa-screwdriver-wrench',
                'description' => 'Mobile-first field service automation and real-time resource allocation for agile, high-performance maintenance fleets.',
                'url' => route('industries.show', 'trades'),
                'column_class' => 'col-12 col-md-6 col-lg-4',
                'show_cta' => true
            ],
            [
                'title' => 'Professional Services',
                'icon' => 'fa-briefcase',
                'description' => 'Sophisticated project-to-billing lifecycles and human capital utilization metrics for intelligence-led service delivery.',
                'url' => route('industries.show', 'professional-services'),
                'column_class' => 'col-12 col-md-6 col-lg-4',
                'show_cta' => true
            ],
            [
                'title' => 'Construction',
                'icon' => 'fa-helmet-safety',
                'description' => 'Heavy-duty MRP frameworks and project costing architecture designed for complex multi-stage site management.',
                'url' => route('industries.show', 'construction'),
                'column_class' => 'col-12 col-md-6 col-lg-4',
                'show_cta' => true
            ],
            [
                'title' => 'Custom Specialized Architecture?',
                'icon' => 'fa-microchip',
                'description' => 'Seeking a bespoke operational framework for a unique vertical? We engineer sovereign ecosystems for complex corporate visions.',
                'url' => url('/contact'),
                'column_class' => 'col-12', 
                'show_cta' => true,
                'featured' => true,
                'cta_text' => 'Initiate Sector Discovery'
            ]
        ];
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
        $processSteps = [
            [
                'title' => 'Map',
                'subtitle' => 'We understand how your business works today.',
                'description' => 'We start by mapping your people, processes, tools and data to see the full picture — across every department and system.',
                'image' => asset('assets/images/step1.png'),
                'bullets' => ['Clarity on what you have', 'Insights on whats missing', 'A Clear path forward']
            ],
            [
                'title' => 'Connect',
                'subtitle' => 'We bring everything together into one connected flow.',
                'description' => 'We connect your systems, teams, and data so information flows seamlessly across your business.',
                'image' => asset('assets/images/step2.png'),
                'bullets' => ['One source of truth', 'No silos', 'Everything in sync']
            ],
            [
                'title' => 'Automate',
                'subtitle' => 'We automate workflows and eliminate manual work.',
                'description' => 'Repetitive tasks and manual hand-offs are replaced with intelligent automated workflows that run 24/7.',
                'image' => asset('assets/images/step3.png'),
                'bullets' => ['Workflow Automated', 'Approval Streamlined', 'Zero Human Intervention']
            ],
            [
                'title' => 'Optimise',
                'subtitle' => 'Real-time insights to make better decisions.',
                'description' => 'With everything connected and automated, you get clear visibility into your business — so you can act fast and grow with confidence.',
                'image' => asset('assets/images/step4.png'),
                'bullets' => ['Live Visibility', 'Data-Driven Growth', 'Confident Decision Making']
            ]
        ];
        $sectionData = [
            'sidebar' => [
                'problem_title' => "What's actually slowing your business down?",
                'problem_subtitle' => "— THE OPERATIONAL BOTTLENECK —",
                'problem_desc' => "Siloed data architecture and manual dependencies are invisible leaks in your profitability.",
                'solution_title' => "From chaos to clarity.",
                'solution_subtitle' => "— THE SOLUTION —",
                'solution_desc' => "We unify your operations into a single, automated source of truth using Odoo ERP.",
                'cta_text' => "Let’s build your digital backbone.",
                'cta_link' => "#"
            ],
            'cards' => [
                [
                    'num' => '01',
                    'title' => 'Fragmented Data Silos',
                    'desc' => 'Eliminate operational friction where sales, inventory, and finance operate in isolation.',
                    'img' => 'assets/images/hp1.png'
                ],
                [
                    'num' => '02',
                    'title' => 'Operational Inefficiency',
                    'desc' => 'Stop wasting human capital on repetitive data entry. We transform manual bottlenecks.',
                    'img' => 'assets/images/hp2.png'
                ],
                [
                    'num' => '03',
                    'title' => 'Blind Decision Making',
                    'desc' => 'Gain real-time business intelligence and 360° visibility to make data-driven decisions.',
                    'img' => 'assets/images/hp3.png'
                ],
                [
                    'num' => '04',
                    'title' => 'Stagnated ROI',
                    'desc' => 'Optimize your cost structure by consolidating your tech stack into one platform.',
                    'img' => 'assets/images/hp4.png'
                ]
            ],
            'transformation' => [
                'before' => [
                    'badge' => 'THE STATUS QUO',
                    'title' => 'Fragmented. Fragile. <span class="text-danger">Expensive.</span>',
                    'img' => 'assets/images/disconnected.png',
                    'stats' => [
                        ['val' => 'High', 'label' => 'Human Error'],
                        ['val' => 'Delayed', 'label' => 'Information'],
                        ['val' => 'Manual', 'label' => 'Spreadsheets'],
                    ]
                ],
                'after' => [
                    'badge' => 'THE ODOO ADVANTAGE',
                    'title' => 'Unified. Scalable. <span class="text-accent">Optimized.</span>',
                    'img' => 'assets/images/clarity.png',
                    'stats' => [
                        ['val' => '100%', 'label' => 'Data Accuracy'],
                        ['val' => 'Real-Time', 'label' => 'Reporting'],
                        ['val' => 'Automated', 'label' => 'Workflows'],
                    ]
                ]
            ]
        ];
    @endphp
    <section id="hero" class="py-5 position-relative min-vh-100 d-flex align-items-center overflow-hidden bg-body">
        <canvas id="about-canvas" class="position-absolute top-0 start-0 w-100 h-100"></canvas>
        <div class="container position-relative bg-body border-accent py-5 mb-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 col-lg-5 order-1 order-md-0 text-start">
                    <div class="hero-content">
                        <div class="overflow-hidden mb-2">
                            <span class="d-block text-uppercase fw-bold ls-2 text-accent gs-reveal" style="font-size: 0.85rem; letter-spacing: 0.2em;">
                                Smarter Operations, Better Decisions.
                            </span>
                        </div>
                        
                        <h1 class="display-4 fw-bold text-body mb-4 lh-1 gs-reveal">
                            From Scattered systems to <span class="section-accent text-nowrap">complete control.</span>
                        </h1>
                        
                        <p class="fs-6 text-secondary mb-5 gs-reveal w-100 lh-base fw-light">
                            We help growing businesses unify their operations, automate workflows, and gain real-time visibility - all in one place.
                        </p>
                        <div class="d-flex flex-column flex-xxl-row align-items-center justify-content-center gap-3 gs-reveal">
                            <button class="btn btn-accent rounded-pill px-5 py-3 fw-black  shadow-sm d-inline-flex align-items-center justify-content-center w-100 w-sm-auto">
                                <i class="fa-solid fa-circle-play me-2"></i> See how it works
                            </button>
                            <button class="btn btn-outline-secondary rounded-pill px-5 py-3 fw-black d-inline-flex align-items-center justify-content-center w-100 w-sm-auto">
                                <i class="fa fa-calendar-check me-2"></i> Book a demo
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative min-vh-50 d-flex align-items-center justify-content-center" id="erpAether">
    
                    <div class="floating-assets-container w-100 position-relative active-state" id="clutteredScatter" style="height: 600px;">
                        
                        <div class="asset-wrapper asset-lg floating-1" style="top: 0%; left: 35%;">
                            <img src="{{ asset('assets/images/inventory.png') }}" alt="Inventory" class="img-fluid glass-asset">
                        </div>

                        <div class="asset-wrapper asset-lg floating-2" style="top: 25%; left: 0%;">
                            <img src="{{ asset('assets/images/order.png') }}" alt="Order" class="img-fluid glass-asset">
                        </div>

                        <div class="asset-wrapper asset-lg floating-3" style="top: 35%; right: 0%;">
                            <img src="{{ asset('assets/images/finance.png') }}" alt="Finance Update" class="img-fluid glass-asset">
                        </div>

                        <div class="asset-wrapper asset-lg floating-1" style="bottom: 0%; left: 25%;">
                            <img src="{{ asset('assets/images/expenses.png') }}" alt="Expenses" class="img-fluid glass-asset">
                        </div>

                        <div class="asset-wrapper asset-sm floating-2" style="top: 10%; left: 5%;">
                            <img src="{{ asset('assets/images/email-icon.png') }}" alt="Email" class="img-fluid glass-asset">
                        </div>

                        <div class="asset-wrapper asset-sm floating-3" style="top: 15%; right: 10%;">
                            <img src="{{ asset('assets/images/boxes-icon.png') }}" alt="Packaging" class="img-fluid glass-asset">
                        </div>

                        <div class="asset-wrapper asset-sm floating-1" style="bottom: 15%; left: 10%;">
                            <img src="{{ asset('assets/images/sync-icon.png') }}" alt="Sync" class="img-fluid glass-asset">
                        </div>

                        <div class="asset-wrapper asset-sm floating-2" style="bottom: 10%; right: 15%;">
                            <img src="{{ asset('assets/images/user-icon.png') }}" alt="User Stats" class="img-fluid glass-asset">
                        </div>

                    </div>

                    <div class="network-assets-container w-100 h-100 position-absolute d-none" id="structuredNetwork">
                        <div class="connector-container position-absolute w-100 h-100" style="top: 0; left: 0; z-index: 1;">
                            <svg viewBox="0 0 1000 500" preserveAspectRatio="none" class="w-100 h-100">
                                <path class="path-bg" d="
                                    M 150 170 V 230 
                                    M 500 170 V 230 
                                    M 850 170 V 230 
                                    M 150 230 H 850
                                    M 300 290 V 230 
                                    M 700 290 V 230" 
                                    stroke="rgba(255,255,255,0.05)" stroke-width="2" fill="none" />
                                
                                <path class="path-active" id="syncPath" d="
                                    M 150 170 V 230 
                                    M 500 170 V 230 
                                    M 850 170 V 230 
                                    M 150 230 H 850
                                    M 300 290 V 230 
                                    M 700 290 V 230" 
                                    stroke="var(--accent)" stroke-width="2" fill="none" stroke-linecap="round" />

                                <circle cx="150" cy="170" r="10" class="connector-dot dot-pulse" />
                                <circle cx="500" cy="170" r="10" class="connector-dot dot-pulse" />
                                <circle cx="850" cy="170" r="10" class="connector-dot dot-pulse" />
                                <circle cx="300" cy="290" r="10" class="connector-dot dot-pulse" />
                                <circle cx="700" cy="290" r="10" class="connector-dot dot-pulse" />
                            </svg>
                        </div>
                    <div class="network-connector-pulse"></div> <div class="endpoint-wrapper endpoint-lg" id="endpointInventory" style="top: 10%; left: 0%;">
                            <img src="{{ asset('assets/images/clarity-inventory.png') }}" alt="Inventory Sync" class="img-fluid network-asset">
                        </div>

                        <div class="endpoint-wrapper endpoint-lg" id="endpointOrder" style="top: 10%; left: 39%;">
                            <img src="{{ asset('assets/images/clarity-order.png') }}" alt="Order Sync" class="img-fluid network-asset">
                        </div>

                        <div class="endpoint-wrapper endpoint-lg" id="endpointFinance" style="top: 10%; right: 0%;">
                            <img src="{{ asset('assets/images/clarity-finances.png') }}" alt="Finance Sync" class="img-fluid network-asset">
                        </div>

                        <div class="endpoint-wrapper endpoint-lg" id="endpointSpreadsheet" style="bottom: 10%; left: 20%;">
                            <img src="{{ asset('assets/images/clarity-spreadsheet.png') }}" alt="Spreadsheet Sync" class="img-fluid network-asset">
                        </div>

                        <div class="endpoint-wrapper endpoint-lg" id="endpointEmail" style="bottom: 10%; right: 20%;">
                            <img src="{{ asset('assets/images/clarity-email.png') }}" alt="Email Sync" class="img-fluid network-asset">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute mt-5 bottom-0 start-50 translate-middle-x pb-4 text-center d-flex flex-column align-items-center gap-2" style="z-index: 100;">
            <div class="mouse-icon border border-2 border-body rounded-pill d-flex align-items-start justify-content-center" style="width: 25px; height: 45px; padding-top: 5px;">
                <div class="scroll-dot bg-secondary rounded-circle" style="width: 5px; height: 8px;"></div>
            </div>
            <span class="small text-secondary tracking-wide">Scroll to see the transformation</span>
        </div>
    </section>
    <x-bottleneck-component :sectionData="$sectionData"/>
    
    <x-process-stepper 
        subheading="How It Works"
        heading="We connect the dots.<br/>You see the <i class='text-accent section-accent'>results</i>"
        description="A proven approach to unify your business, automate operations, and give you real-time clarity."
        :steps="$processSteps"
    />
    <section id="module-introduction" class="py-5 bg-body">
        <div class="container text-center d-flex flex-column align-items-center">
            <div class="row text-start py-5 align-items-center">
                <div class="col-lg-5">
                    <span class="text-accent fw-bold text-uppercase tracking-widest mb-2 d-block ls-2">
                        Vertical Operational Sovereignty
                    </span>
                    <h2 class="display-6 fw-bold text-body mb-4">
                        Begin360 Industry <span class="text-accent">Blueprints:</span>
                    </h2>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <p class="text-secondary mb-5"> 
                        Our ecosystem represents a paradigm shift in industrial engineering—moving beyond generic ERP modules to deliver <span class="">logic-driven workflows</span> tailored for sector-specific friction. Synchronize your global procurement, autonomize your inventory logic, and deploy a digital nervous system engineered for your specific industry landscape.
                    </p>
                </div>
            </div>
        </div>

        <!-- The Bento Grid Component -->
        <x-bento-grid :items="$industries" id="module-grid" class="pt-5" />
    </section>
    <!-- <section class="py-0 border-top border-bottom border-light-subtle">
        <div class="container-fluid px-0">
            <div class="bg-black w-100 position-relative overflow-hidden">
                
                <div class="row g-0 align-items-center">
                    
                    <div class="col-xl-8 col-lg-7 p-5 p-md-5 ps-xl-5">
                        <div class="py-lg-5 ps-xl-4" style="max-width:600px">
                            <p class="text-accent fw-bold text-uppercase tracking-widest mb-3">
                                Next-Level Efficiency
                            </p>
                            <h2 class="display-6 fw-800 text-white text-uppercase mb-4" style="letter-spacing: -1px;">
                                The Future of <span class="text-accent">Business Operations</span> is Here.
                            </h2>
                            <p class="fs-6 text-secondary fw-light mb-0" style="max-width: 700px;">
                                Transition from fragmented workflows to a unified corporate ecosystem designed for scale.
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5 bg-accent p-5 p-md-5 d-flex align-items-center justify-content-center">
                        <div class="text-center text-lg-start w-100 py-lg-5">
                            <h3 class="text-white fw-black text-uppercase mb-4">Ready to Integrate?</h3>
                            <div class="d-grid gap-3">
                                <a href="#contact-form" class="btn btn-dark btn-lg rounded-pill py-3 fw-black text-uppercase shadow-lg border-0">
                                    Contact Our Team <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path d="M7 17L17 7M17 7H7M17 7V17"/>
                            </svg>
                                </a>
                                <a href="#contact-form" class="btn btn-light btn-lg rounded-pill py-3 fw-black text-uppercase border-2">
                                    Book a Demo
                                </a>
                            </div>
                            <p class="text-white-50 mt-4 small text-uppercase fw-bold mb-0">
                                <i class="fa-solid fa-lock me-2"></i> Secure Corporate API Access Included
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
    <section class="py-5 bg-body-tertiary">
        <div class="container py-lg-5">
            <div class="row g-5 align-items-center">
                <!-- Right Side: The Trendy Dashboard Mockup -->
                <div class="col-lg-7">
                    <div class="position-relative">
                        <!-- Subtle Glow Backdrop -->
                        <div class="position-absolute top-50 start-50 translate-middle bg-accent opacity-10 rounded-circle blur-3xl" style="width: 400px; height: 400px; filter: blur(80px);"></div>
                        
                        <!-- Dashboard Frame -->
                        <div class="card border-0 shadow-2xl bg-body rounded-4 overflow-hidden position-relative">
                            <div class="row g-0">
                                <!-- Sidebar Mini -->
                                <div class="col-auto bg-black border-end border-light-subtle d-none d-sm-flex flex-column p-3 gap-4">
                                    <div class="text-accent mb-2 px-1"><img src="assets/images/symbol-light.png" alt="Begin360" class="nav-logo-img" style="max-width:20px;"></div>
                                    <i class="fa-solid fa-house-chimney text-white small"></i>
                                    <i class="fa-solid fa-box text-white small"></i>
                                    <i class="fa-solid fa-users text-white small"></i>
                                    <i class="fa-solid fa-chart-pie text-accent small"></i>
                                    <div class="mt-auto"><i class="fa-solid fa-gear text-white small"></i></div>
                                </div>
                                
                                <!-- Dashboard Content -->
                                <div class="col p-4 p-md-5 bg-body">
                                    <!-- Top Stats -->
                                    <div class="row g-3 mb-4">
                                        <div class="col-6">
                                            <div class="bg-body p-3 rounded-4 shadow-sm border border-light-subtle">
                                                <span class="text-muted x-small fw-bold text-uppercase">Sales (MTD)</span>
                                                <h4 class="fw-black mb-1 text-body">$32,680</h4>
                                                <span class="text-accent small fw-bold"><i class="fa-solid fa-arrow-up me-1"></i>18%</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-body p-3 rounded-4 shadow-sm border border-light-subtle">
                                                <span class="text-muted x-small fw-bold text-uppercase">Orders</span>
                                                <h4 class="fw-black mb-1 text-body">142</h4>
                                                <span class="text-accent small fw-bold"><i class="fa-solid fa-arrow-up me-1"></i>12%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Chart Mockup Area -->
                                    <div class="bg-body p-4 rounded-4 shadow-sm border border-light-subtle">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h6 class="fw-black text-uppercase m-0 small">Cash Flow</h6>
                                            <span class="badge bg-light text-dark border rounded-pill px-3">This Month</span>
                                        </div>
                                        <div style="height: 150px; background: linear-gradient(180deg, rgba(var(--accent-rgb), 0.1) 0%, transparent 100%);" class="rounded-3 position-relative overflow-hidden">
                                            <!-- SVG Wave Line -->
                                            <svg class="position-absolute bottom-0 w-100" viewBox="0 0 400 100" preserveAspectRatio="none">
                                                <path d="M0,80 C50,70 80,40 120,50 C160,60 200,20 250,30 C300,40 350,10 400,20 L400,100 L0,100 Z" fill="rgba(var(--accent-rgb), 0.2)"></path>
                                                <path d="M0,80 C50,70 80,40 120,50 C160,60 200,20 250,30 C300,40 350,10 400,20" fill="none" stroke="currentColor" class="text-accent" stroke-width="3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Left Side: Content -->
                <div class="col-lg-5 text-center text-md-start">
                    <div class="mb-4">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-3">
                            <div class="border-top border-accent border-2" style="width: 20px;"></div>
                            <span class="text-accent fw-bold px-2 small tracking-widest text-uppercase">Let's Get Started</span>
                            <div class="border-top border-accent border-2" style="width: 20px;"></div>
                        </div>
                        <h2 class="display-6 fw-black text-body text-uppercase mb-4" style="line-height: 1.1;">
                            Ready to bring your business onto <span class="text-accent">one system?</span>
                        </h2>
                        <p class="lead text-secondary mb-5">
                            In 30 minutes, we'll understand your business, map your processes, and show how a modern ERP can bring everything together.
                        </p>
                    </div>

                    <!-- Action Button -->
                    <div class="mb-5">
                        <a href="#contact-form" class="btn btn-accent btn-lg rounded-pill px-4 py-3 fw-black text-uppercase shadow-lg d-inline-flex align-items-center transition-up">
                            <i class="fa-regular fa-calendar-check me-3 fs-4"></i>
                            Book a 30-min walkthrough
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="row g-3 justify-content-center justify-content-md-start">
                        <div class="col-auto">
                            <div class="d-flex align-items-center text-secondary small fw-bold text-uppercase">
                                <i class="fa-solid fa-circle-check text-accent me-2"></i> No Pressure
                            </div>
                        </div>
                        <div class="col-auto px-3 border-start border-light-subtle">
                            <div class="d-flex align-items-center text-secondary small fw-bold text-uppercase">
                                <i class="fa-regular fa-clock text-accent me-2"></i> 30 Minutes
                            </div>
                        </div>
                        <div class="col-auto px-3 border-start border-light-subtle">
                            <div class="d-flex align-items-center text-secondary small fw-bold text-uppercase">
                                <i class="fa-solid fa-wand-magic-sparkles text-accent me-2"></i> Tailored
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <x-customFaqs title="Still Have<br>Questions?" :faqs="$faqs" />
@endsection
@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
    
        const scatterView = document.getElementById('clutteredScatter'); // Original messy layout ID
        const structuredView = document.getElementById('structuredNetwork'); // The structured network ID

        if (scatterView && structuredView) {
            const syncTL = gsap.timeline({ paused: true });

            syncTL.set(structuredView, { opacity: 0, className: '-=d-none', className: '+=d-block' })
                .set('.endpoint-wrapper', { scale: 0.8, opacity: 0 });

            window.addEventListener('load', () => {
                setTimeout(() => {
                    
                    syncTL.play(); // Initialize the sequence

                    syncTL.to('#clutteredScatter .asset-wrapper', {
                        duration: 1.4,
                        scale: 0.7,
                        opacity: 0,
                        ease: "power4.inOut",
                        stagger: 0.12
                    })

                    .to(structuredView, {
                        duration: 1.8,
                        opacity: 1,
                        ease: "expo.out"
                    }, "-=0.6")

                    .to('.endpoint-wrapper', {
                        duration: 1,
                        scale: 1,
                        opacity: 1,
                        ease: "back.out(1.8)",
                        stagger: 0.25
                    }, "-=1")
                    .to("#syncPath", {
                        strokeDashoffset: 0,
                        duration: 2,
                        ease: "power2.inOut"
                    }, "-=0.5")

                    .set(scatterView, { display: 'none', className: '-=active-state' });

                }, 1200);
            });
            syncTL.set('.connector-dot', { scale: 0, opacity: 0 });

            window.addEventListener('load', () => {
                setTimeout(() => {
                    syncTL.play();
                    syncTL.to("#syncPath", {
                        strokeDashoffset: 0,
                        duration: 1.5,
                        ease: "none" // Linear for technical feel
                    }, "-=0.5")
                    .to(".connector-dot", {
                        scale: 1,
                        opacity: 1,
                        duration: 0.3,
                        stagger: 0.1,
                        onComplete: () => {
                            document.querySelectorAll('.connector-dot').forEach(d => d.classList.add('dot-pulsing-active'));
                        }
                    }, "-=0.2");
                }, 1200);
            });
        }
    });
</script>
@endpush