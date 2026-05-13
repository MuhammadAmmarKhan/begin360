@extends('layouts.app')

@section('title', 'Consumer Goods ERP Solutions | The Unified System by Begin360')
@section('meta_title', 'Consumer Goods Architecture: Scalable Omnichannel ERP Ecosystems | Begin360')
@section('meta_description', 'Deploy precision-engineered ERP modules for consumer goods. From AI-driven demand planning to sovereign inventory control, synchronize high-volume retail flows with Begin360’s scalable Odoo architecture.')
@section('meta_keywords', 'Consumer Goods ERP, Omnichannel Retail Architecture, High-Volume Inventory Management, Odoo Retail Solutions, Digital Supply Chain Synchronization, AI Demand Planning, Begin360 Ecosystem, Business Process Autonomization')

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
    .ls-2 { letter-spacing: 0.2rem; }

        /* Responsive & Interactive Logic */
        .hover-lift:hover {
            transform: translateY(-10px);
            border-color: var(--bs-accent) !important;
            box-shadow: 0 1rem 3rem rgba(0,0,0,.175);
        }

        .bg-gradient-to-t {
            background: linear-gradient(to top, rgba(26, 29, 32, 0.9) 0%, transparent 100%);
        }

        .transition-all {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        @media (max-width: 991.98px) {
            .row.g-4 > div {
                margin-bottom: 1rem;
            }
        }
   </style>
@endpush
@section('content')
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
    @endphp
    <section id="about-hero" class="position-relative vh-100 w-100 overflow-hidden bg-body pt-5">
        <canvas id="about-canvas" class="position-absolute top-0 start-0 w-100 h-100"></canvas>
        <div class="blur-overlay"></div>
        <div class="container position-relative h-100 d-flex align-items-center" style="z-index: 10;">
            <div class="row w-100 pt-5">
                <div class="col-lg-10">
                    <!-- Minimalist Breadcrumbs -->
                    <nav aria-label="breadcrumb" class="mb-4 gs-reveal">
                        <ol class="breadcrumb justify-content-start text-uppercase ls-1 small fw-bold">
                            <li class="breadcrumb-item"><a href="/" class="text-secondary text-decoration-none hover-accent transition-all">Home</a></li>
                            <li class="breadcrumb-item"><a href="/industries" class="text-secondary text-decoration-none hover-accent transition-all">Industries</a></li>
                            <li class="breadcrumb-item active text-accent" aria-current="page">Consumer Goods</li>
                        </ol>
                    </nav>

                    <div class="glass-hero-card shadow-lg p-5 gs-reveal rounded-5 text-start">
                        <span class="text-accent fw-bold text-uppercase tracking-widest mb-3 d-block ls-2">
                            Sector-Specific Blueprint
                        </span>

                        <h1 class="display-3 fw-black text-body mb-4 tracking-tighter">
                            Architecting High-Volume <span class="text-accent gradient-text">Consumer Ecosystems</span>
                        </h1>

                        <p class="mb-5 text-secondary fw-light" style="max-width: 900px;">
                            In the rapidly shifting retail landscape, fragmented data creates terminal friction. At <span class="text-body fw-bold">Begin360</span>, we deploy a <span class="text-body fw-bold">Unified System</span>—a high-performance Odoo architecture engineered for the complexities of the <span class="text-accent">Consumer Goods</span> sector. From synchronizing omnichannel retail flows to autonomizing warehouse logic through AI-driven demand planning, our blueprints ensure your enterprise maintains sovereign control at infinite scale.
                        </p>

                        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3 gs-reveal">
                            <!-- Primary Action: Leads to Sector Modules -->
                            <a href="#sector-architecture" class="btn btn-accent rounded-pill px-5 py-3 fw-800 text-uppercase tracking-wide shadow-sm d-inline-flex align-items-center justify-content-center w-100 w-sm-auto text-decoration-none">
                                <i class="fa-solid fa-layer-group me-2 small"></i> View Sector Architecture
                            </a>

                            <!-- Secondary Action: Consultation -->
                            <a href="{{ url('/contact') }}" class="btn btn-outline-secondary rounded-pill px-5 py-3 fw-800 text-uppercase tracking-wide d-inline-flex align-items-center justify-content-center w-100 w-sm-auto text-decoration-none">
                                <i class="fa-solid fa-microchip me-2 small"></i> Request Supply Chain Audit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-0 start-50 translate-middle-x pb-4 text-center d-flex flex-column align-items-center gap-2" style="z-index: 100;">
                <div class="mouse-icon border border-2 border-body rounded-pill d-flex align-items-start justify-content-center" style="width: 25px; height: 45px; padding-top: 5px;">
                    <div class="scroll-dot bg-secondary rounded-circle" style="width: 5px; height: 8px;"></div>
                </div>
                <span class="small text-secondary tracking-wide">Scroll to see the transformation</span>
            </div>
    </section>
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
                <h1 class="reveal-text text-start display-1 fw-bold pt-5 tracking-tighter text-accent">
                    Synchronizing Consumer Goods Efficiency
                </h1>
                <p class="text-start fs-4" style="max-width:900px">Transition from fragmented tools to a digital nervous system. Our ecosystems preempt production delays and autonomize complex workflows, allowing your enterprise to scale at peak performance without linear labor expansion.</p>
            </div>
        </div>
    </section>
    <x-tech-stack-scroll
        subtitle="Sector Connectivity"
        title="Consumer Goods Integration Stack"
    />
    <section class="py-5 bg-body text-body d-flex min-vh-100 align-items-center justify-content-center">
        <div class="container">
            <div class="row mb-5 gs-reveal">
                <div class="col-lg-7">
                    <span class="text-accent fw-bold text-uppercase tracking-widest mb-3 d-block ls-2">
                        Orchestration Layer
                    </span>
                    <h2 class="display-4 fw-black tracking-tighter text-uppercase">
                        Accelerate Market Entry via <br>
                        <span class="text-accent italic">Autonomous Change Management</span>
                    </h2>
                </div>
                <div class="col-lg-5 d-flex align-items-end">
                    <p class="lead text-secondary fw-medium border-start border-accent ps-4">
                        Eradicate production latency with a digital nervous system that adapts to shifting retail requirements in real-time.
                    </p>
                </div>
            </div>

            <!-- Top Visual Anchor -->
            <div class="row gs-reveal">
                <div class="col-12">
                    <div class="position-relative overflow-hidden rounded-5 border border-light-subtle shadow-lg" style="height: 800px;">
                        <!-- The Visual Placement -->
                        <img src="your-cpg-blueprint-image.jpg" class="w-100 h-100 object-fit-cover" alt="Consumer Goods Operational Architecture">

                        <!-- Overlay Branding -->
                        <div class="position-absolute bottom-0 start-0 p-5 w-100 bg-gradient-to-t">
                            <div class="col-12">
                                <span class="text-accent fw-bold text-uppercase tracking-widest mb-2 d-block ls-2">
                                    Integrity Engine
                                </span>
                                <h2 class="display-5 fw-black text-body text-uppercase mb-0">
                                    The CPG <span class="text-accent">Velocity Blueprint</span>
                                </h2>
                            </div>

                            <div class="col-12">
                                <div class="row g-2 gs-reveal">
                                    <div class="col-lg-4">
                                        <div class="h-100 p-4 rounded-4 bg-body-tertiary border border-light-subtle transition-all hover-lift">
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <span class="h2 fw-black text-accent-subtle opacity-50 mb-0">01</span>
                                                <i class="fa-solid fa-rotate text-accent h4 mb-0"></i>
                                            </div>
                                            <h4 class="text-uppercase fw-bold h5 text-body-emphasis">Automated Sync</h4>
                                            <p class="text-secondary small lh-base mb-0">
                                                Synchronize complex BOMs, change orders, and technical specs across your entire ecosystem without manual data friction.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="h-100 p-4 rounded-4 bg-body-tertiary border border-light-subtle transition-all hover-lift">
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <span class="h2 fw-black text-accent-subtle opacity-50 mb-0">02</span>
                                                <i class="fa-solid fa-satellite-dish text-accent h4 mb-0"></i>
                                            </div>
                                            <h4 class="text-uppercase fw-bold h5 text-body-emphasis">Latency Control</h4>
                                            <p class="text-secondary small lh-base mb-0">
                                                Deploy proactive alerts to neutralize production bottlenecks before they impact high-volume manufacturing timelines.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="h-100 p-4 rounded-4 bg-body-tertiary border border-light-subtle transition-all hover-lift">
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <span class="h2 fw-black text-accent-subtle opacity-50 mb-0">03</span>
                                                <i class="fa-solid fa-shield-halved text-accent h4 mb-0"></i>
                                            </div>
                                            <h4 class="text-uppercase fw-bold h5 text-body-emphasis">Data Sovereignty</h4>
                                            <p class="text-secondary small lh-base mb-0">
                                                Maintain high-fidelity audit trails and historical traceability within a unified, architected Odoo infrastructure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-body-tertiary d-flex text-body min-vh-100 align-items-center justify-content-center">
        <div class="container">
            <div class="row mb-5 gs-reveal">
                <div class="col-lg-7">
                    <span class="text-accent fw-bold text-uppercase tracking-widest mb-3 d-block ls-2">
                        Deployment Layer
                    </span>
                    <h2 class="display-4 fw-black tracking-tighter text-uppercase">
                        Scale Across Channels via <span class="text-accent italic">Composable Architecture</span>
                    </h2>
                </div>
                <div class="col-lg-5 d-flex align-items-end">
                    <p class="lead text-secondary fw-medium border-start border-accent ps-4">
                        Eradicate integration complexity with a modular ecosystem that unifies retail, wholesale, and manufacturing in a single sovereign stream.
                    </p>
                </div>
            </div>

            <!-- Top Visual Anchor: The Omnichannel Blueprint -->
            <div class="row mb-5 gs-reveal">
                <div class="col-12">
                    <div class="position-relative overflow-hidden rounded-5 border border-light-subtle shadow-lg" style="height: 420px;">
                        <!-- The Visual Placement: Optimized for a high-fidelity connectivity graphic -->
                        <img src="your-omnichannel-architecture-image.jpg" class="w-100 h-100 object-fit-cover opacity-50" alt="Omnichannel Ecosystem Architecture">

                        <!-- Overlay Branding: High-Contrast Slate/Accent -->
                        <div class="position-absolute bottom-0 start-0 p-5 w-100 bg-gradient-to-t">
                            <span class="text-accent fw-bold text-uppercase tracking-widest mb-2 d-block ls-2">
                                Deployment Layer
                            </span>
                            <h2 class="display-4 fw-black text-body text-uppercase mb-0 tracking-tighter">
                                Infinite Scale via <span class="text-accent">Composable Architecture</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Three Architectural Modules Side-by-Side -->
            <div class="row g-4 gs-reveal">

                <!-- Module 01: Channel Orchestration -->
                <div class="col-lg-4">
                    <div class="h-100 p-4 rounded-4 bg-body border border-light-subtle transition-all hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="h2 fw-black text-accent-subtle opacity-40 mb-0">01</span>
                            <i class="fa-solid fa-tower-broadcast text-accent h4 mb-0"></i>
                        </div>
                        <h4 class="text-uppercase fw-bold h5 text-body-emphasis">Channel Orchestration</h4>
                        <p class="text-secondary small lh-base mb-0">
                            Instantly synchronize marketplaces, retail hubs, and digital storefronts through high-fidelity Odoo connectors. Eradicate integration complexity with real-time data persistence.
                        </p>
                    </div>
                </div>

                <!-- Module 02: Dynamic Allocation -->
                <div class="col-lg-4">
                    <div class="h-100 p-4 rounded-4 bg-body border border-light-subtle transition-all hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="h2 fw-black text-accent-subtle opacity-40 mb-0">02</span>
                            <i class="fa-solid fa-microchip text-accent h4 mb-0"></i>
                        </div>
                        <h4 class="text-uppercase fw-bold h5 text-body-emphasis">Allocation Logic</h4>
                        <p class="text-secondary small lh-base mb-0">
                            Engineer complex demand planning and dynamic inventory allocation. Deploy serial-level tracking across promotions and warranties with mathematical precision.
                        </p>
                    </div>
                </div>

                <!-- Module 03: Ecosystem Synergy -->
                <div class="col-lg-4">
                    <div class="h-100 p-4 rounded-4 bg-body border border-light-subtle transition-all hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="h2 fw-black text-accent-subtle opacity-40 mb-0">03</span>
                            <i class="fa-solid fa-arrows-up-to-line text-accent h4 mb-0"></i>
                        </div>
                        <h4 class="text-uppercase fw-bold h5 text-body-emphasis">Composable Scale</h4>
                        <p class="text-secondary small lh-base mb-0">
                            Construct your ideal omnichannel system by unifying e-commerce, wholesale, and manufacturing via modular blocks engineered for sovereign growth.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="py-5 bg-body text-body d-flex min-vh-100 align-items-center justify-content-center">
        <div class="container">

            <!-- Top Visual Anchor: The Intelligence Matrix -->
            <div class="row mb-5 gs-reveal">
                <div class="col-lg-7">
                    <span class="text-accent fw-bold text-uppercase tracking-widest mb-3 d-block ls-2">
                        Intelligence Layer
                    </span>
                    <h2 class="display-4 fw-black tracking-tighter text-uppercase">
                        Optimize Supply Chains via <br>
                        <span class="text-accent italic">Real-Time Industrial Logic</span>
                    </h2>
                </div>
                <div class="col-lg-5 d-flex align-items-end">
                    <p class="lead text-secondary fw-medium border-start border-accent ps-4">
                        Maximize margins and eradicate stockouts with a digital nervous system that provides high-fidelity visibility across your entire global supply chain.
                    </p>
                </div>
            </div>

            <!-- Top Image Blueprint -->
            <div class="row mb-5 gs-reveal">
                <div class="col-12">
                    <div class="position-relative overflow-hidden rounded-5 border border-light-subtle shadow-lg" style="height: 420px;">
                        <img src="your-supply-chain-intelligence-image.jpg" class="w-100 h-100 object-fit-cover opacity-40" alt="Supply Chain Intelligence Matrix">

                        <div class="position-absolute bottom-0 start-0 p-5 w-100 bg-gradient-to-t">
                            <h3 class="h4 fw-black text-body text-uppercase mb-0">
                                Predictive <span class="text-accent">Data Sovereignty</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Three Architectural Intelligence Modules -->
            <div class="row g-4 gs-reveal">

                <!-- Module 01: Omnichannel Visibility -->
                <div class="col-lg-4">
                    <div class="h-100 p-4 rounded-4 bg-body-tertiary border border-light-subtle transition-all hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="h2 fw-black text-accent-subtle opacity-40 mb-0">01</span>
                            <i class="fa-solid fa-eye text-accent h4 mb-0"></i>
                        </div>
                        <h4 class="text-uppercase fw-bold h5 text-body-emphasis">Unified Visibility</h4>
                        <p class="text-secondary small lh-base mb-0">
                            Maintain 1:1 inventory persistence from digital storefronts to physical retail hubs. Orchestrate pricing and promotion logic with absolute channel synchronization.
                        </p>
                    </div>
                </div>

                <!-- Module 02: Market Dynamics -->
                <div class="col-lg-4">
                    <div class="h-100 p-4 rounded-4 bg-body-tertiary border border-light-subtle transition-all hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="h2 fw-black text-accent-subtle opacity-40 mb-0">02</span>
                            <i class="fa-solid fa-coins text-accent h4 mb-0"></i>
                        </div>
                        <h4 class="text-uppercase fw-bold h5 text-body-emphasis">Fiscal Adaptability</h4>
                        <p class="text-secondary small lh-base mb-0">
                            Execute multi-currency adjustments through demand-responsive logic. Analyze channel performance to ensure margin optimization across diverse global markets.
                        </p>
                    </div>
                </div>

                <!-- Module 03: Predictive Modeling -->
                <div class="col-lg-4">
                    <div class="h-100 p-4 rounded-4 bg-body-tertiary border border-light-subtle transition-all hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="h2 fw-black text-accent-subtle opacity-40 mb-0">03</span>
                            <i class="fa-solid fa-chart-line text-accent h4 mb-0"></i>
                        </div>
                        <h4 class="text-uppercase fw-bold h5 text-body-emphasis">Predictive Forensics</h4>
                        <p class="text-secondary small lh-base mb-0">
                            Forecast consumption patterns across seasons, regions, and product variants. Deploy AI-driven demand planning to neutralize supply chain friction before it manifests.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="module-introduction" class="py-5 bg-body">
        <div class="container text-center d-flex flex-column align-items-center">
            <div class="row text-start py-5">
                <div class="col-lg-5 gs-reveal">
                    <span class="text-accent fw-bold text-uppercase tracking-widest mb-2 d-block ls-2">
                        Sector-Specific Engineering
                    </span>
                    <h2 class="display-6 fw-black text-body mb-4 text-uppercase tracking-tighter">
                        Top Consumer Goods <br><span class="text-accent">Architectural Capabilities</span>
                    </h2>
                </div>
                <div class="col-lg-6 offset-lg-1 d-flex align-items-end gs-reveal">
                    <p class="lead text-secondary mb-5 lh-lg border-start border-accent ps-4">
                        Deploy featured modules and high-fidelity integrations engineered specifically to streamline <span class="text-body fw-bold">Consumer Goods operations</span>. From neutralizing production latency to autonomizing high-volume supply chain synchronization, our frameworks provide the digital nervous system required for total enterprise sovereignty at scale.
                    </p>
                </div>
            </div>
        </div>

        <!-- The Bento Grid Component -->
        <x-bento-grid :items="$modules" id="module-grid" class="pt-5" />
    </section>
    <section class=" d-flex align-items-center bg-body text-body py-5 overflow-hidden">
    <div class="container-fluid px-lg-5">

        <!-- Top Row: 3 Counters -->
        <div class="row g-4 mb-4 justify-content-center gs-reveal">
            @foreach(['Market Velocity' => '40%', 'Data Integrity' => '99%', 'Supply Sync' => '24/7'] as $label => $val)
            <div class="col-lg-3 col-md-4" style="max-width:300px">
                <div class="counter-card p-4 rounded-4 bg-body-tertiary border border-light-subtle text-center">
                    <div class="display-5 fw-black text-accent mb-1">{{ $val }}</div>
                    <h5 class="text-uppercase fw-bold text-body x-small ls-2 mb-0">{{ $label }}</h5>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Center Row: 2 Counters + Logo Center -->
        <div class="row g-4 mb-4 align-items-center justify-content-center gs-reveal">
            <!-- Left Counter -->
            <div class="col-lg-3 col-md-4 order-1" style="max-width:300px">
                <div class="counter-card p-4 rounded-4 bg-body-tertiary border border-light-subtle text-center">
                    <div class="display-5 fw-black text-accent mb-1">95%</div>
                    <h5 class="text-uppercase fw-bold text-body x-small ls-2 mb-0">Friction Reduction</h5>
                </div>
            </div>

            <!-- Central Logo Anchor -->
            <div class="col-lg-4 col-md-4 order-2 text-center py-4">
                <div class="logo-anchor position-relative">
                    <!-- Replace with your actual SVG/Img logo -->
                    <img src="{{asset('assets/images/logo-light.png')}}" alt="Begin360" class="img-fluid" style="max-height: 80px; filter: drop-shadow(0 0 15px rgba(var(--bs-accent-rgb), 0.3));">
                    <div class="pulse-ring"></div>
                </div>
            </div>

            <!-- Right Counter -->
            <div class="col-lg-3 col-md-4 order-3" style="max-width:300px">
                <div class="counter-card p-4 rounded-4 bg-body-tertiary border border-light-subtle text-center">
                    <div class="display-5 fw-black text-accent mb-1">10x</div>
                    <h5 class="text-uppercase fw-bold text-body x-small ls-2 mb-0">Scaling Capacity</h5>
                </div>
            </div>
        </div>

        <!-- Bottom Row: 3 Counters -->
        <div class="row g-4 justify-content-center gs-reveal">
            @foreach(['Global Reach' => '50+', 'ROI Multiplier' => '3.5x', 'Uptime Logic' => '99.9%'] as $label => $val)
            <div class="col-lg-3 col-md-4" style="max-width:300px">
                <div class="counter-card p-4 rounded-4 bg-body-tertiary border border-light-subtle text-center">
                    <div class="display-5 fw-black text-accent mb-1">{{ $val }}</div>
                    <h5 class="text-uppercase fw-bold text-body x-small ls-2 mb-0">{{ $label }}</h5>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
<section class="py-5 bg-body text-body">
    <div class="container py-5">

        <!-- Section Header -->
        <div class="row mb-5 gs-reveal">
            <div class="col-lg-7">
                <span class="text-accent fw-bold text-uppercase tracking-widest mb-2 d-block ls-2">
                    Ecosystem Validation
                </span>
                <h2 class="display-6 fw-black text-body text-uppercase tracking-tighter">
                    Strategic <span class="text-accent">Partner Perspectives</span>
                </h2>
            </div>
            <div class="col-lg-5 d-flex align-items-end">
                <p class="lead text-secondary fw-medium border-start border-accent ps-4">
                    High-fidelity feedback from enterprise leaders who have achieved total operational sovereignty through the Begin360 Operations Cloud.
                </p>
            </div>
        </div>

        <!-- Adaptive Layout: Grid on Large, Scroll on Small -->
        <div class="testimonial-wrapper">
            <div class="row g-4 testimonial-container">

                <!-- Testimonial 01: Large Bento Piece -->
                <div class="col-lg-8 col-md-12">
                    <div class="h-100 p-5 rounded-5 bg-body-tertiary border border-light-subtle d-flex flex-column justify-content-between">
                        <div>
                            <i class="fa-solid fa-quote-left text-accent display-4 mb-4 opacity-50"></i>
                            <h3 class="text-body fw-bold h4 mb-4 lh-base">
                                "The transition to a unified Odoo ecosystem via Begin360 eradicated our production latency. We now synchronize multi-country BOMs with absolute mathematical precision."
                            </h3>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar bg-accent rounded-circle" style="width: 50px; height: 50px;"></div>
                            <div>
                                <h6 class="text-body fw-black text-uppercase mb-0 small">Director of Operations</h6>
                                <span class="text-accent x-small fw-bold ls-1">Global Manufacturing Firm</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 02 -->
                <div class="col-lg-4 col-md-6">
                    <div class="h-100 p-4 rounded-5 bg-body border border-light-subtle">
                        <p class="text-secondary mb-4 italic">
                            "Managing 50+ marketplaces used to be a data nightmare. The composable architecture deployed by Begin360 gave us a single source of truth."
                        </p>
                        <h6 class="text-body fw-black text-uppercase mb-0 small">E-commerce Head</h6>
                        <span class="text-accent x-small fw-bold">Omnichannel Retailer</span>
                    </div>
                </div>

                <!-- Testimonial 03 -->
                <div class="col-lg-4 col-md-6">
                    <div class="h-100 p-4 rounded-5 bg-body border border-light-subtle">
                        <p class="text-secondary mb-4 italic">
                            "The predictive demand planning modules neutralized our stockout issues within the first fiscal quarter. Truly engineered for scale."
                        </p>
                        <h6 class="text-body fw-black text-uppercase mb-0 small">Supply Chain Lead</h6>
                        <span class="text-accent x-small fw-bold">CPG Enterprise</span>
                    </div>
                </div>

                <!-- Testimonial 04 -->
                <div class="col-lg-8 col-md-12">
                    <div class="h-100 p-5 rounded-5 bg-body-tertiary border border-light-subtle d-flex align-items-center">
                        <div class="row align-items-center">
                            <div class="col-md-3 text-center mb-3 mb-md-0">
                                <i class="fa-solid fa-microchip text-accent display-3"></i>
                            </div>
                            <div class="col-md-9 border-start-md border-light-subtle ps-md-4">
                                <p class="text-body h5 fw-medium mb-3">
                                    "Begin360 didn't just install software; they architected a digital nervous system that adapts to our growth."
                                </p>
                                <h6 class="text-body fw-black text-uppercase mb-0 small">Chief Technology Officer</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    /* Desktop Bento Grid logic */
    @media (min-width: 992px) {
        .testimonial-container {
            display: flex;
            flex-wrap: wrap;
        }
    }

    /* Mobile Horizontal Scroll logic */
    @media (max-width: 991.98px) {
        .testimonial-wrapper {
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 2rem;
            margin-right: -1.5rem; /* Allow cards to bleed off edge */
        }

        .testimonial-container {
            display: flex;
            flex-wrap: nowrap;
            gap: 1.5rem;
            width: max-content;
        }

        .testimonial-container > div {
            width: 85vw; /* Show partial next card to hint at scroll */
            flex: 0 0 auto;
        }

        .testimonial-wrapper::-webkit-scrollbar {
            display: none;
        }
        .testimonial-wrapper {
            scrollbar-width: none;
        }
    }



    .testimonial-container div {
        transition: transform 0.4s ease;
    }

    .testimonial-container .rounded-5:hover {
        border-color: var(--accent) !important;
    }

</style>

<style>

    /* Performance Counter Cards */
    .counter-card {
        transition: all 0.5s cubic-bezier(0.19, 1, 0.22, 1);
        backdrop-filter: blur(10px);
        /* background: linear-gradient(145deg, #1c2024 0%, #14171a 100%); */
    }

    .counter-card:hover {
        transform: scale(1.05);
        border-color: var(--bs-accent) !important;
        box-shadow: 0 0 30px rgba(var(--bs-accent-rgb), 0.1);
    }

    /* Central Logo Animation */
    .logo-anchor {
        z-index: 5;
    }

    .pulse-ring {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 120px;
        height: 120px;
        border: 1px solid var(--bs-accent);
        border-radius: 50%;
        opacity: 0;
        animation: pulse 3s infinite;
    }

    @keyframes pulse {
        0% { width: 80px; height: 80px; opacity: 0.5; }
        100% { width: 250px; height: 250px; opacity: 0; }
    }

</style>
    <x-customFaqs title="Still Have<br>Questions?" :faqs="$faqs" />
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
