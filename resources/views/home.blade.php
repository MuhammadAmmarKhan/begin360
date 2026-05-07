@extends('layouts.app')

@section('title', 'Home | Begin360 - Elite Odoo Silver Partner')
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
                'title' => 'Consumer Goods',
                'icon' => 'fa-basket-shopping',
                'description' => 'Scalable omnichannel ecosystems designed to synchronize high-volume retail flows and sovereign inventory control.',
                'url' => route('industries.show', 'consumer-goods'),
                'column_class' => 'col-12 col-lg-7', // Primary Featured Tile
                'show_cta' => true,
                'cta_text' => 'Explore Blueprint'
            ],
            [
                'title' => 'Manufacturing',
                'icon' => 'fa-industry',
                'description' => 'Precision MRP architecture and digital twin integration for autonomous, high-fidelity production environments.',
                'url' => route('industries.show', 'manufacturing'),
                'column_class' => 'col-12 col-md-6 col-lg-5', // Secondary Hero Tile
                'show_cta' => true
            ],
            [
                'title' => 'Food & Beverage',
                'icon' => 'fa-utensils',
                'description' => 'Rigid batch-track procurement and perishable inventory logic engineered for global supply chain resilience.',
                'url' => route('industries.show', 'food-beverage'),
                'column_class' => 'col-12 col-md-6 col-lg-4', // Modular Tile
                'show_cta' => true
            ],
            [
                'title' => 'Health & Beauty',
                'icon' => 'fa-capsules',
                'description' => 'Sophisticated compliance frameworks and multi-location synchronization for specialized pharmaceutical logistics.',
                'url' => route('industries.show', 'health-beauty'),
                'column_class' => 'col-12 col-md-6 col-lg-4', // Modular Tile
                'show_cta' => true
            ],
            [
                'title' => 'Distribution',
                'icon' => 'fa-truck-fast',
                'description' => 'AI-driven demand planning and logic-based freight fulfillment to optimize your global delivery footprint.',
                'url' => route('industries.show', 'distribution'),
                'column_class' => 'col-12 col-md-6 col-lg-4', // Modular Tile
                'show_cta' => true
            ],
            /* Custom Sector Logic */
            [
                'title' => 'Specialized Enterprise Architecture?',
                'icon' => 'fa-microchip',
                'description' => 'Seeking a bespoke operational framework for a unique industry vertical? We engineer sovereign ecosystems for complex corporate visions.',
                'url' => url('/contact'),
                'column_class' => 'col-12', // Full-width structural footer
                'show_cta' => true,
                'featured' => true,
                'cta_text' => 'Initiate Sector Discovery'
            ]
        ];
@endphp
    <section id="hero" class="position-relative vh-100 d-flex align-items-center overflow-hidden bg-body">
        <canvas id="about-canvas" class="position-absolute top-0 start-0 w-100 h-100"></canvas>
        <div class="container position-relative">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-11 col-lg-5 text-start">
                    <div class="hero-content">
                        <div class="overflow-hidden mb-2">
                            <span class="d-block text-uppercase fw-bold ls-2 text-accent gs-reveal" style="font-size: 0.85rem; letter-spacing: 0.2em;">
                                Smarter Operations, Better Decisions.
                            </span>
                        </div>
                        
                        <h1 class="display-4 fw-bold text-body mb-4 lh-1 gs-reveal">
                            From Scattered systems to <span class="text-nowrap">complete control.</span>
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
        <div class="position-absolute bottom-0 start-50 translate-middle-x pb-4 text-center d-flex flex-column align-items-center gap-2" style="z-index: 100;">
            <div class="mouse-icon border border-2 border-body rounded-pill d-flex align-items-start justify-content-center" style="width: 25px; height: 45px; padding-top: 5px;">
                <div class="scroll-dot bg-secondary rounded-circle" style="width: 5px; height: 8px;"></div>
            </div>
            <span class="small text-secondary tracking-wide">Scroll to see the transformation</span>
        </div>
    </section>
    <section id="operational-bottleneck-trigger" class="position-relative bg-body py-5">
        <div id="master-horizontal-wrapper" class="overflow-hidden sticky-top d-flex flex-column py-5">
            
            <header class="w-100 px-5 bg-body position-relative z-1" >
                <div class="container-fluid">
                    <div class="problem-intro-wrapper row align-items-end" style="z-index:3">
                        <div class="col-lg-6">
                            <span class="text-uppercase fw-bold text-accent mb-2 d-block tracking-widest" style="font-size: 0.75rem;">— THE OPERATIONAL BOTTLENECK —</span>
                            <h2 class="fs-2 fw-800 text-body mb-0 lh-1">What's actually slowing your business down?</h2>
                        </div>
                        <div class="col-lg-4 offset-lg-2">
                            <p class="text-secondary mb-0">Siloed data architecture and manual dependencies are invisible leaks in your profitability.</p>
                        </div>
                    </div>

                    <div class="transformation-intro-wrapper row align-items-end position-absolute top-0 left-0 w-100 h-100 px-5 py-5" style="opacity: 0; visibility: hidden; transform: translateY(20px);">
                        <div class="col-lg-6">
                            <span class="text-uppercase fw-bold text-accent mb-2 d-block tracking-widest" style="font-size: 0.75rem;">— THE SOLUTION —</span>
                            <h2 class="display-6 fw-800 text-body mb-0 lh-1">From chaos to clarity.</h2>
                        </div>
                        <div class="col-lg-4 offset-lg-2">
                            <p class="text-secondary mb-0">We unify your operations into a single, automated source of truth using Odoo ERP.</p>
                        </div>
                    </div>
                </div>
            </header>

            <div id="master-horizontal-content" class="d-flex flex-nowrap align-items-center flex-grow-1">
                
                <div id="problems-section" class="d-flex align-items-center" style="padding-left: 5vw;">
                    <div class="problem-cards-container d-flex gap-4">
                        @foreach($bottlenecks as $card)
                            <div class="problem-card shadow-sm border rounded-4 p-4 flex-shrink-0 bg-body-tertiary">
                                <div class="card-icon-area">
                                    <img src="{{ asset('assets/images/' . $card['image']) }}" 
                                        alt="{{ $card['title'] }}">
                                </div>
                                <div class="card-text-area mt-4">
                                    <h3 class="h6 fw-bold text-uppercase mb-2">{{ $card['title'] }}</h3>
                                    <p class="text-secondary x-small mb-0">{{ $card['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div id="transformation-section" class="vh-100 flex-shrink-0 bg-body d-flex align-items-center justify-content-center" style="width: 100vw;">
                    <div id="transformation-section" class="vh-100 flex-shrink-0 position-relative overflow-hidden bg-body" style="width: 100vw; z-index: 2000;">
            
                        <div class="comparison-container w-100 h-100 position-relative">
                            
                            <div class="after-state position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-body-tertiary">
                                <div class="container text-center">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-8">
                                            <div class="mb-3">
                                                <span class="badge bg-accent-subtle text-accent border border-success-subtle px-3 py-2 rounded-pill fw-bold small">
                                                    <i class="fa-solid fa-check-circle me-2"></i> THE ODOO ADVANTAGE
                                                </span>
                                            </div>
                                            <h2 class="fs-2 fw-800 text-body mb-3 fs-5">Unified. Scalable. <span class="text-accent">Optimized.</span></h2>
                                            
                                            <div class="after-content-grid d-flex justify-content-center gap-4 mb-3 text-start">
                                                <div class="stat-item">
                                                    <h4 class="fw-bold mb-0 text-accent fs-5">100%</h4>
                                                    <p class="small text-secondary mb-0 fs-6">Data Accuracy</p>
                                                </div>
                                                <div class="border-start mx-2"></div>
                                                <div class="stat-item">
                                                    <h4 class="fw-bold mb-0 text-accent fs-5">Real-Time</h4>
                                                    <p class="small text-secondary mb-0 fs-6">Reporting</p>
                                                </div>
                                                <div class="border-start mx-2"></div>
                                                <div class="stat-item">
                                                    <h4 class="fw-bold mb-0 text-accent fs-5">Automated</h4>
                                                    <p class="small text-secondary mb-0 fs-6">Workflows</p>
                                                </div>
                                            </div>

                                            <img src="assets/images/clarity.png" class="img-fluid rounded-5" alt="Clarity Dashboard">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="before-state position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-body">
                                <div class="container text-center">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-8">
                                            <div class="mb-3">
                                                <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-3 py-2 rounded-pill fw-bold">
                                                    <i class="fa-solid fa-triangle-exclamation me-2"></i> THE STATUS QUO
                                                </span>
                                            </div>
                                            <h2 class="fs-2 fw-800 text-body mb-3 fs-5">Fragmented. Fragile. <span class="text-danger">Expensive.</span></h2>

                                            <div class="before-content-grid d-flex justify-content-center gap-4 mb-3 text-start">
                                                <div class="stat-item">
                                                    <h4 class="fw-bold mb-0 text-danger fs-5">High</h4>
                                                    <p class="small text-secondary mb-0 fs-6">Human Error</p>
                                                </div>
                                                <div class="border-start mx-2"></div>
                                                <div class="stat-item">
                                                    <h4 class="fw-bold mb-0 text-danger fs-5">Delayed</h4>
                                                    <p class="small text-secondary mb-0 fs-6">Information</p>
                                                </div>
                                                <div class="border-start mx-2"></div>
                                                <div class="stat-item">
                                                    <h4 class="fw-bold mb-0 text-danger fs-5">Manual</h4>
                                                    <p class="small text-secondary mb-0 fs-6">Spreadsheets</p>
                                                </div>
                                            </div>

                                            <img src="assets/images/disconnected.png" class="img-fluid" alt="Business Chaos" style="max-height: 400px; object-fit: contain;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="position-absolute bottom-0 w-100 py-4 bg-body-tertiary border-top" style="z-index: 110;">
                            <div class="container d-flex justify-content-center align-items-center gap-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="spinner-grow spinner-grow-sm text-accent" role="status"></div>
                                    <p class="mb-0 fw-bold text-body text-uppercase tracking-wider" style="font-size: 0.85rem;">Clarity brings confidence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="hiw-spacer" id="hiw-root">
        <div class="hiw-sticky py-5">
            <div class="container-xl px-3 px-lg-4">

                <div class="border-end mb-5">
                        <div class="overflow-hidden mb-2">
                            <span class="d-block text-uppercase fw-bold ls-2 text-accent gs-reveal" style="font-size: 0.85rem; letter-spacing: 0.2em;">How It Works.</span>
                        </div>
                        <h1 class="display-6 fw-800 text-body mb-4 lh-1 gs-reveal">We connect the dots. <br>You see the <span class="text-nowrap text-accent">results</span></h1>
                        <p class="fs-5 text-secondary mb-5 gs-reveal w-75 lh-base">A proven approach to unify your business, automate operations, and give you real-time clarity.</p>
                </div>
                <div class="row align-items-center g-3 g-xl-4">

                    <div class="col-12 col-lg-7">
                    <div class="diagram-box" id="diagram-box">

                        <div class="diag-panel is-first" id="diag-1">
                        <svg style="position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:1" viewBox="0 0 600 400" preserveAspectRatio="none">
                            <line x1="140" y1="72"  x2="282" y2="192" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                            <line x1="140" y1="195" x2="282" y2="197" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                            <line x1="140" y1="318" x2="282" y2="204" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                            <line x1="295" y1="58"  x2="300" y2="175" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                            <line x1="460" y1="72"  x2="322" y2="187" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                            <line x1="460" y1="195" x2="322" y2="197" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                            <line x1="460" y1="318" x2="322" y2="204" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                            <line x1="300" y1="345" x2="300" y2="218" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                        </svg>
                        <div class="m-card" style="left:1%;top:4%">
                            <div class="mc-title"><i class="bi bi-envelope me-1 text-secondary"></i>Inbox <span class="badge bg-secondary bg-opacity-25 text-secondary ms-1" style="font-size:.55rem">12</span></div>
                            <div style="color:#9ca3af;font-size:.62rem">New order from ABC Co.</div>
                            <div style="color:#9ca3af;font-size:.62rem">PO #77981</div>
                            <div style="color:#9ca3af;font-size:.62rem">Re: Invoice</div>
                        </div>
                        <div class="m-card" style="left:1%;top:41%">
                            <div class="mc-title"><i class="bi bi-people me-1 text-secondary"></i>Customers</div>
                            <div style="color:#9ca3af;font-size:.62rem">List</div>
                            <div style="height:8px;background:#f3f4f6;border-radius:3px;margin-top:4px"></div>
                            <div style="height:8px;background:#f3f4f6;border-radius:3px;margin-top:2px;width:70%"></div>
                        </div>
                        <div class="m-card" style="left:1%;top:76%">
                            <div class="mc-title"><i class="bi bi-telephone me-1 text-secondary"></i>Supplier Calls</div>
                            <div style="color:#9ca3af;font-size:.62rem">Follow up with finance team</div>
                            <div style="color:#9ca3af;font-size:.62rem">Check stock levels</div>
                        </div>
                        <div class="m-card" style="left:37%;top:1%">
                            <div class="mc-title" style="font-size:.65rem"><span class="badge bg-accent me-1" style="font-size:.52rem;padding:2px 4px">xlsx</span>Orders_Sep.xlsx</div>
                            <div style="height:6px;background:#f3f4f6;border-radius:2px;margin-top:4px"></div>
                            <div style="height:6px;background:#f3f4f6;border-radius:2px;margin-top:3px;width:75%"></div>
                            <div style="height:6px;background:#f3f4f6;border-radius:2px;margin-top:3px;width:50%"></div>
                        </div>
                        <div class="hub-card">
                            <div class="fw-black text-accent" style="font-size:2rem;line-height:1">B</div>
                            <div class="fw-bold" style="font-size:.75rem;color:#111">BEGIN360</div>
                            <div class="text-secondary" style="font-size:.58rem">Your Business, Connected</div>
                        </div>
                        <div class="m-card" style="right:1%;top:4%">
                            <div class="mc-title"><i class="bi bi-box me-1 text-secondary"></i>Inventory</div>
                            <div class="mc-row"><span>Product A</span><span>12</span></div>
                            <div class="mc-row"><span>Product B</span><span>7</span></div>
                            <div class="mc-row"><span>Product C</span><span>3</span></div>
                            <div class="mc-row"><span>Product D</span><span>25</span></div>
                        </div>
                        <div class="m-card" style="right:1%;top:41%">
                            <div class="mc-title"><i class="bi bi-file-text me-1 text-secondary"></i>Pricing List</div>
                            <div style="color:#9ca3af;font-size:.62rem">Doc…ument</div>
                            <div style="height:6px;background:#f3f4f6;border-radius:2px;margin-top:4px"></div>
                        </div>
                        <div class="m-card" style="right:1%;top:76%">
                            <div class="mc-title"><i class="bi bi-currency-dollar me-1 text-secondary"></i>Accounting</div>
                            <div style="color:#9ca3af;font-size:.62rem">Unreconciled transactions</div>
                            <div style="color:#9ca3af;font-size:.62rem">Manual entries pending</div>
                        </div>
                        <div class="m-card" style="left:37%;bottom:1%">
                            <div class="mc-title"><i class="bi bi-database me-1 text-secondary"></i>Legacy System</div>
                            <div style="height:6px;background:#f3f4f6;border-radius:2px;margin-top:4px"></div>
                            <div style="height:6px;background:#f3f4f6;border-radius:2px;margin-top:3px;width:60%"></div>
                        </div>
                        <div class="s-note" style="left:37%;bottom:20%;transform:rotate(1.8deg)">
                            No more<br>disconnected<br>systems
                            <div style="width:38px;height:2px;background:#92400e;margin-top:5px"></div>
                        </div>
                        </div>


                        <div class="diag-panel" id="diag-2">
                        <svg style="position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:1" viewBox="0 0 600 400" preserveAspectRatio="none">
                            <circle cx="140" cy="72"  r="5" fill="var(--accent)"/>
                            <circle cx="140" cy="195" r="5" fill="var(--accent)"/>
                            <circle cx="140" cy="318" r="5" fill="var(--accent)"/>
                            <circle cx="295" cy="58"  r="5" fill="var(--accent)"/>
                            <circle cx="460" cy="72"  r="5" fill="var(--accent)"/>
                            <circle cx="460" cy="195" r="5" fill="var(--accent)"/>
                            <circle cx="460" cy="318" r="5" fill="var(--accent)"/>
                            <circle cx="300" cy="345" r="5" fill="var(--accent)"/>
                            <line x1="140" y1="72"  x2="282" y2="192" stroke="var(--accent)" stroke-width="2"/>
                            <line x1="140" y1="195" x2="282" y2="197" stroke="var(--accent)" stroke-width="2"/>
                            <line x1="140" y1="318" x2="282" y2="204" stroke="var(--accent)" stroke-width="2"/>
                            <line x1="295" y1="58"  x2="300" y2="175" stroke="var(--accent)" stroke-width="2"/>
                            <line x1="460" y1="72"  x2="322" y2="187" stroke="var(--accent)" stroke-width="2"/>
                            <line x1="460" y1="195" x2="322" y2="197" stroke="var(--accent)" stroke-width="2"/>
                            <line x1="460" y1="318" x2="322" y2="204" stroke="var(--accent)" stroke-width="2"/>
                            <line x1="300" y1="345" x2="300" y2="218" stroke="var(--accent)" stroke-width="2"/>
                        </svg>
                        <div class="m-card lit" style="left:1%;top:4%">
                            <div class="mc-title"><i class="bi bi-envelope me-1 text-accent"></i>Inbox <span class="badge bg-accent-light text-accent ms-1" style="font-size:.55rem">12</span></div>
                            <div style="color:#6b7280;font-size:.62rem">New order from ABC Co.</div>
                            <div style="color:#6b7280;font-size:.62rem">PO #77981</div>
                            <div style="color:#6b7280;font-size:.62rem">Re: Invoice</div>
                        </div>
                        <div class="m-card lit" style="left:1%;top:41%">
                            <div class="mc-title"><i class="bi bi-people me-1 text-accent"></i>Customers</div>
                            <div style="color:#6b7280;font-size:.62rem">List</div>
                            <div style="height:8px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:3px;margin-top:4px"></div>
                            <div style="height:8px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:3px;margin-top:2px;width:70%"></div>
                        </div>
                        <div class="m-card lit" style="left:1%;top:76%">
                            <div class="mc-title"><i class="bi bi-telephone me-1 text-accent"></i>Supplier Calls</div>
                            <div style="color:#6b7280;font-size:.62rem">Follow up with finance team</div>
                            <div style="color:#6b7280;font-size:.62rem">Check stock levels</div>
                        </div>
                        <div class="m-card lit" style="left:37%;top:1%">
                            <div class="mc-title" style="font-size:.65rem"><span class="badge bg-accent me-1" style="font-size:.52rem;padding:2px 4px">xlsx</span>Orders_Sep.xlsx</div>
                            <div style="height:6px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:2px;margin-top:4px"></div>
                            <div style="height:6px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:2px;margin-top:3px;width:75%"></div>
                            <div style="height:6px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:2px;margin-top:3px;width:50%"></div>
                        </div>
                        <div class="hub-card">
                            <div class="fw-black text-accent" style="font-size:2rem;line-height:1">B</div>
                            <div class="fw-bold" style="font-size:.75rem;color:#111">BEGIN360</div>
                            <div class="text-secondary" style="font-size:.58rem">Your Business, Connected</div>
                        </div>
                        <div class="m-card lit" style="right:1%;top:4%">
                            <div class="mc-title"><i class="bi bi-box me-1 text-accent"></i>Inventory</div>
                            <div class="mc-row"><span>Product A</span><span class="text-accent fw-semibold">12</span></div>
                            <div class="mc-row"><span>Product B</span><span class="text-accent fw-semibold">7</span></div>
                            <div class="mc-row"><span>Product C</span><span class="text-accent fw-semibold">3</span></div>
                            <div class="mc-row"><span>Product D</span><span class="text-accent fw-semibold">25</span></div>
                        </div>
                        <div class="m-card lit" style="right:1%;top:41%">
                            <div class="mc-title"><i class="bi bi-file-text me-1 text-accent"></i>Pricing List</div>
                            <div style="color:#6b7280;font-size:.62rem">Doc…ument</div>
                            <div style="height:6px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:2px;margin-top:4px"></div>
                        </div>
                        <div class="m-card lit" style="right:1%;top:76%">
                            <div class="mc-title"><i class="bi bi-currency-dollar me-1 text-accent"></i>Accounting</div>
                            <div style="color:#6b7280;font-size:.62rem">Unreconciled transactions</div>
                            <div style="color:#6b7280;font-size:.62rem">Manual entries pending</div>
                        </div>
                        <div class="m-card lit" style="left:37%;bottom:1%">
                            <div class="mc-title"><i class="bi bi-database me-1 text-accent"></i>Legacy System</div>
                            <div style="height:6px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:2px;margin-top:4px"></div>
                            <div style="height:6px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:2px;margin-top:3px;width:60%"></div>
                        </div>
                        <div class="s-note" style="right:1%;top:22%;transform:rotate(-2deg)">
                            Now<br>everything is<br>connected in<br>one place
                            <div style="width:38px;height:2px;background:#92400e;margin-top:5px"></div>
                        </div>
                        </div>
                        <div class="diag-panel" id="diag-3">
                        <svg style="position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:1" viewBox="0 0 600 400" preserveAspectRatio="none">
                            <circle cx="140" cy="72"  r="5" fill="var(--accent)"/>
                            <circle cx="140" cy="195" r="5" fill="var(--accent)"/>
                            <circle cx="140" cy="318" r="5" fill="var(--accent)"/>
                            <circle cx="295" cy="58"  r="5" fill="var(--accent)"/>
                            <circle cx="460" cy="72"  r="5" fill="var(--accent)"/>
                            <circle cx="460" cy="195" r="5" fill="var(--accent)"/>
                            <circle cx="460" cy="318" r="5" fill="var(--accent)"/>
                            <circle cx="300" cy="345" r="5" fill="var(--accent)"/>
                            <line x1="140" y1="72"  x2="282" y2="192" stroke="var(--accent)" stroke-width="2.5"/>
                            <line x1="140" y1="195" x2="282" y2="197" stroke="var(--accent)" stroke-width="2.5"/>
                            <line x1="140" y1="318" x2="282" y2="204" stroke="var(--accent)" stroke-width="2.5"/>
                            <line x1="295" y1="58"  x2="300" y2="175" stroke="var(--accent)" stroke-width="2.5"/>
                            <line x1="460" y1="72"  x2="322" y2="187" stroke="var(--accent)" stroke-width="2.5"/>
                            <line x1="460" y1="195" x2="322" y2="197" stroke="var(--accent)" stroke-width="2.5"/>
                            <line x1="460" y1="318" x2="322" y2="204" stroke="var(--accent)" stroke-width="2.5"/>
                            <line x1="300" y1="345" x2="300" y2="218" stroke="var(--accent)" stroke-width="2.5"/>
                            <polygon points="196,162 184,154 184,170" fill="var(--accent)"/>
                            <polygon points="415,162 403,154 403,170" fill="var(--accent)"/>
                            <polygon points="300,110 292,122 308,122" fill="var(--accent)"/>
                            <polygon points="300,302 292,290 308,290" fill="var(--accent)"/>
                        </svg>
                        <div class="m-card lit" style="left:1%;top:4%">
                            <div class="mc-title"><i class="bi bi-envelope me-1 text-accent"></i>Inbox</div>
                            <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ Auto-routing active</div>
                            <div style="color:#6b7280;font-size:.6rem">0 manual sorts needed</div>
                        </div>
                        <div class="m-card lit" style="left:1%;top:41%">
                            <div class="mc-title"><i class="bi bi-people me-1 text-accent"></i>Customers</div>
                            <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ CRM sync: Live</div>
                        </div>
                        <div class="m-card lit" style="left:1%;top:76%">
                            <div class="mc-title"><i class="bi bi-telephone me-1 text-accent"></i>Supplier Calls</div>
                            <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ Scheduled automatically</div>
                        </div>
                        <div class="m-card lit" style="left:37%;top:1%">
                            <div class="mc-title" style="font-size:.65rem"><span class="badge bg-accent me-1" style="font-size:.52rem;padding:2px 4px">xlsx</span>Orders_Sep.xlsx</div>
                            <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ Auto-imported daily</div>
                        </div>
                        <div class="hub-card">
                            <div class="fw-black text-accent" style="font-size:2rem;line-height:1">B</div>
                            <div class="fw-bold" style="font-size:.75rem;color:#111">BEGIN360</div>
                            <div class="text-accent fw-semibold" style="font-size:.6rem">⚡ Workflows Running</div>
                        </div>
                        <div class="m-card lit" style="right:1%;top:4%">
                            <div class="mc-title"><i class="bi bi-box me-1 text-accent"></i>Inventory</div>
                            <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ Auto-reorder: On</div>
                            <div style="color:#6b7280;font-size:.6rem">Low stock alerts active</div>
                        </div>
                        <div class="m-card lit" style="right:1%;top:41%">
                            <div class="mc-title"><i class="bi bi-file-text me-1 text-accent"></i>Pricing List</div>
                            <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ Dynamic pricing on</div>
                        </div>
                        <div class="m-card lit" style="right:1%;top:76%">
                            <div class="mc-title"><i class="bi bi-currency-dollar me-1 text-accent"></i>Accounting</div>
                            <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ Auto-reconcile active</div>
                        </div>
                        <div class="m-card lit" style="left:37%;bottom:1%">
                            <div class="mc-title"><i class="bi bi-database me-1 text-accent"></i>Legacy System</div>
                            <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ Syncing every 5 min</div>
                        </div>
                        <div class="s-note" style="right:1%;top:22%;transform:rotate(-1.5deg)">
                            Manual work?<br>Eliminated.<br>⚡ All automated
                        </div>
                        </div>
                        <div class="diag-panel" id="diag-4">
                        <svg style="position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:1" viewBox="0 0 600 400" preserveAspectRatio="none">
                            <circle cx="140" cy="72"  r="5" fill="var(--accent)"/>
                            <circle cx="140" cy="195" r="5" fill="var(--accent)"/>
                            <circle cx="140" cy="318" r="5" fill="var(--accent)"/>
                            <circle cx="295" cy="58"  r="5" fill="var(--accent)"/>
                            <circle cx="460" cy="72"  r="5" fill="var(--accent)"/>
                            <circle cx="460" cy="195" r="5" fill="var(--accent)"/>
                            <circle cx="460" cy="318" r="5" fill="var(--accent)"/>
                            <circle cx="300" cy="345" r="5" fill="var(--accent)"/>
                            <line x1="140" y1="72"  x2="282" y2="192" stroke="var(--accent)" stroke-width="2"/>
                            <line x1="140" y1="195" x2="282" y2="197" stroke="var(--accent)" stroke-width="2"/>
                            <line x1="140" y1="318" x2="282" y2="204" stroke="var(--accent)" stroke-width="2"/>
                            <line x1="295" y1="58"  x2="300" y2="175" stroke="var(--accent)" stroke-width="2"/>
                            <line x1="460" y1="72"  x2="322" y2="187" stroke="var(--accent)" stroke-width="2"/>
                            <line x1="460" y1="195" x2="322" y2="197" stroke="var(--accent)" stroke-width="2"/>
                            <line x1="460" y1="318" x2="322" y2="204" stroke="var(--accent)" stroke-width="2"/>
                            <line x1="300" y1="345" x2="300" y2="218" stroke="var(--accent)" stroke-width="2"/>
                        </svg>
                        <div class="m-card lit" style="left:1%;top:4%">
                            <div class="mc-title"><i class="bi bi-envelope me-1 text-accent"></i>Inbox</div>
                            <div style="display:flex;align-items:center;gap:4px">
                            <span class="badge bg-accent-light text-accent" style="font-size:.58rem">+32%</span>
                            <span style="color:#6b7280;font-size:.6rem">response rate</span>
                            </div>
                        </div>
                        <div class="m-card lit" style="left:1%;top:41%">
                            <div class="mc-title"><i class="bi bi-people me-1 text-accent"></i>Customers</div>
                            <div style="display:flex;align-items:center;gap:4px">
                            <span class="badge bg-accent-light text-accent" style="font-size:.58rem">+18%</span>
                            <span style="color:#6b7280;font-size:.6rem">retention</span>
                            </div>
                        </div>
                        <div class="m-card lit" style="left:1%;top:76%">
                            <div class="mc-title"><i class="bi bi-telephone me-1 text-accent"></i>Supplier Calls</div>
                            <div class="text-accent fw-semibold" style="font-size:.62rem">−40% call time</div>
                        </div>
                        <div class="m-card lit" style="left:37%;top:1%">
                            <div class="mc-title" style="font-size:.65rem"><span class="badge bg-accent me-1" style="font-size:.52rem">xlsx</span>Orders_Sep.xlsx</div>
                            <div class="text-accent fw-semibold" style="font-size:.62rem">↑ 24% order volume</div>
                        </div>
                        <div class="hub-card">
                            <div class="fw-black text-accent" style="font-size:1.4rem;line-height:1;margin-bottom:4px">B</div>
                            <div class="fw-bold" style="font-size:.72rem;color:#111;margin-bottom:6px">BEGIN360</div>
                            <div style="display:flex;align-items:flex-end;gap:3px;justify-content:center;height:22px;margin-bottom:4px">
                            <div style="width:9px;background:#bbf7d0;border-radius:2px 2px 0 0;height:40%"></div>
                            <div style="width:9px;background:#86efac;border-radius:2px 2px 0 0;height:60%"></div>
                            <div style="width:9px;background:#4ade80;border-radius:2px 2px 0 0;height:80%"></div>
                            <div style="width:9px;background:var(--accent);border-radius:2px 2px 0 0;height:100%"></div>
                            </div>
                            <div class="text-accent fw-semibold" style="font-size:.58rem">Real-time insights ✓</div>
                        </div>
                        <div class="m-card lit" style="right:1%;top:4%">
                            <div class="mc-title"><i class="bi bi-box me-1 text-accent"></i>Inventory</div>
                            <div class="text-accent fw-semibold" style="font-size:.62rem">Zero stockouts</div>
                            <div style="color:#6b7280;font-size:.6rem">Optimised levels</div>
                        </div>
                        <div class="m-card lit" style="right:1%;top:41%">
                            <div class="mc-title"><i class="bi bi-file-text me-1 text-accent"></i>Pricing List</div>
                            <div class="text-accent fw-semibold" style="font-size:.62rem">+12% margin</div>
                        </div>
                        <div class="m-card lit" style="right:1%;top:76%">
                            <div class="mc-title"><i class="bi bi-currency-dollar me-1 text-accent"></i>Accounting</div>
                            <div class="text-accent fw-semibold" style="font-size:.62rem">100% reconciled</div>
                        </div>
                        <div class="m-card lit" style="left:37%;bottom:1%">
                            <div class="mc-title"><i class="bi bi-database me-1 text-accent"></i>Legacy System</div>
                            <div class="text-accent" style="font-size:.62rem">Fully integrated ✓</div>
                        </div>
                        <div class="s-note" style="right:1%;top:22%;transform:rotate(-1deg);background:#d1fae5">
                            Real results.<br>Real clarity.<br>Every day. 📈
                        </div>
                        </div>

                    </div>
                    </div>

                    <div class="col-12 col-lg-5">
                    <div id="steps-list">
                        <div class="step-wrap" id="step-1">
                        <div class="step-vline" id="vline-1"></div>
                        <div class="step-dot" id="dot-1">1</div>
                        <div class="step-lbl" id="lbl-1">Map</div>
                        <div class="step-body" id="body-1">
                            <h6 class="fw-bold mt-3 fs-3">We understand how your business works today.</h6>
                            <p class="text-secondary mb-3 fs-6"> We start by mapping your people, processes, tools and data to see the full picture — across every department and system.</p>
                            <div class="rounded-3 p-2 d-flex align-items-center gap-2 bg-accent-light" style="border:1px solid rgba(34,197,94,.25)">
                            <i class="fa-regular fa-lightbulb text-accent flex-shrink-0 fs-2"></i>
                            <div>
                                <div class="fw-semibold fs-5">Clarity and Insights</div>
                                <div class="text-secondary fs-6">Clarity on what you have, Insights on whats missing, A Clear path forward.</div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="step-wrap" id="step-2">
                        <div class="step-vline" id="vline-2"></div>
                        <div class="step-dot" id="dot-2">2</div>
                        <div class="step-lbl" id="lbl-2">Connect</div>
                        <div class="step-body" id="body-2">
                            <h6 class="fw-bold mt-3 fs-3">We bring everything together into one connected flow.</h6>
                            <p class="text-secondary mb-3 fs-6">We connect your systems, teams, and data so information flows seamlessly across your business.</p>
                            <div class="rounded-3 p-2 d-flex align-items-center gap-2 bg-accent-light" style="border:1px solid rgba(34,197,94,.25)">
                            <i class="fa-solid fa-paperclip  text-accent flex-shrink-0 fs-2"></i>
                            <div>
                                <div class="fw-semibold fs-5">One source of truth.</div>
                                <div class="text-secondary fs-6">No silos. No duplication. Everything in sync.</div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="step-wrap" id="step-3">
                        <div class="step-vline" id="vline-3"></div>
                        <div class="step-dot" id="dot-3">3</div>
                        <div class="step-lbl" id="lbl-3">Automate</div>
                        <div class="step-body" id="body-3">
                            <h6 class="fw-bold mt-3 fs-3">We automate workflows and eliminate manual work.</h6>
                            <p class="text-secondary mb-3 fs-6">Repetitive tasks, data entry, and manual hand-offs are replaced with intelligent automated workflows that run 24/7 — no human intervention needed.</p>
                            <div class="rounded-3 p-2 d-flex align-items-center gap-2 bg-accent-light" style="border:1px solid rgba(34,197,94,.25)">
                            <i class="fa-solid fa-gear  text-accent flex-shrink-0 fs-2"></i>
                            <div>
                                <div class="fw-semibold fs-5">Workflow Automated</div>
                                <div class="text-secondary fs-6">Approval Streamlined.</div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="step-wrap" id="step-4">
                        <div class="step-dot" id="dot-4">4</div>
                        <div class="step-lbl" id="lbl-4">Optimise</div>
                        <div class="step-body" id="body-4">
                            <h6 class="fw-bold mt-3 fs-3">You get real-time insights to make better decisions.</h6>
                            <p class="text-secondary mb-3 fs-6">With everything connected and automated, you get clear visibility into your business — so you can act fast, spot opportunities, and grow with confidence.</p>
                            <div class="rounded-3 p-2 d-flex align-items-center gap-2 bg-accent-light" style="border:1px solid rgba(34,197,94,.25)">
                            <i class="fa-solid fa-chart-column  text-accent flex-shrink-0 fs-2"></i>
                            <div>
                                <div class="fw-semibold fs-5">Workflow Automated</div>
                                <div class="text-secondary fs-6">Approval Streamlined.</div>
                            </div>
                            </div>
                        </div>
                        </div>

                    </div>
                    </div>

                </div>

                <div class="text-center mt-2">
                    <span id="scroll-hint" class="text-secondary" style="font-size:.8rem">
                    <i class="bi bi-mouse2 me-1"></i> Scroll to see the transformation
                    </span>
                </div>

                </div>
            </div>
    </section>
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
    <section class="py-5 bg-body">
        <div class="container-fluid py-lg-5">
            <div class="row g-4">
                
                <!-- Card 1: Help Me Choose (bg-body-tertiary) -->
                <div class="col-md-6">
                    <div class="card h-100 border-0 rounded-5 bg-body-tertiary p-4 p-lg-5 position-relative shadow-sm overflow-hidden min-vh-50 d-flex flex-column justify-content-between">
                        
                        <!-- Top Row: Title and Button -->
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start mb-5">
                            <h2 class="display-6 fw-black text-body text-uppercase mb-3 mb-md-0 w-75" style="letter-spacing: -1px; line-height: 1;">
                                Unsure which <br><span class="text-accent">service fits?</span>
                            </h2>
                            <a href="#contact-form" class="btn btn-accent rounded-pill px-3 py-2 fw-bold small text-uppercase shadow-sm border-0 d-flex align-items-center">
                                Help me choose <i class="fa-solid fa-arrow-up-right-from-square ms-2 x-small"></i>
                            </a>
                        </div>

                        <!-- Bottom Row: Subtext -->
                        <div class="mt-auto">
                            <p class="h5 fw-normal text-secondary  mb-0 w-75">
                                Answer three questions and we'll point you to the right starting place.
                            </p>
                        </div>

                        <!-- Decorative background element -->
                        <div class="position-absolute bottom-0 end-0 opacity-10 p-4">
                            <i class="fa-solid fa-circle-question display-1"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Business Fit (bg-accent) -->
                <div class="col-md-6">
                    <div class="card h-100 border-0 rounded-5 bg-accent p-4 p-lg-5 position-relative shadow-lg overflow-hidden min-vh-50 d-flex flex-column justify-content-between">
                        
                        <!-- Top Row: Title and Button -->
                        <div class="d-flex justify-content-between align-items-start flex-column flex-md-row mb-5">
                            <h2 class="display-6 fw-black text-white text-uppercase mb-3 mb-md-0 w-75" style="letter-spacing: -1px; line-height: 1;">
                                Take our business <br>fit assessment
                            </h2>
                            <a href="#contact-form" class="btn btn-light rounded-pill px-3 py-2 fw-bold small text-uppercase shadow-sm border-0 d-flex align-items-center">
                                Drop Us a Line <i class="fa-solid fa-arrow-up-right-from-square ms-2 x-small"></i>
                            </a>
                        </div>

                        <!-- Bottom Row: Subtext -->
                        <div class="mt-auto">
                            <p class="h5 fw-normal text-white text-uppercase mb-0 w-75">
                                Learn where your business ranks among our corporate fit models.
                            </p>
                        </div>

                        <!-- Decorative background element -->
                        <div class="position-absolute bottom-0 end-0 opacity-20 p-4">
                            <i class="fa-solid fa-chart-simple display-1 text-white"></i>
                        </div>
                    </div>
                </div>

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

    <x-customFaqs 
        title="Still Have<br>Questions?" 
        :faqs="$faqs" 
        class="my-custom-margin-class" 
    />
@endsection
@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
    
    // We target the view that was created with scattered images (previous instructions)
    const scatterView = document.getElementById('clutteredScatter'); // Original messy layout ID
    const structuredView = document.getElementById('structuredNetwork'); // The structured network ID

    if (scatterView && structuredView) {
        // High-Fidelity Sync Transformation Timeline
        const syncTL = gsap.timeline({ paused: true });

        // Step 1: Establish initial hidden state for new network
        syncTL.set(structuredView, { opacity: 0, className: '-=d-none', className: '+=d-block' })
              .set('.endpoint-wrapper', { scale: 0.8, opacity: 0 });

        window.addEventListener('load', () => {
            // Wait for Odoo Enterprise Infrastructure to lock in
            setTimeout(() => {
                
                syncTL.play(); // Initialize the sequence

                // 2. Dissolve the cluttered scatter view (Crisp Power4 Ease)
                syncTL.to('#clutteredScatter .asset-wrapper', {
                    duration: 1.4,
                    scale: 0.7,
                    opacity: 0,
                    ease: "power4.inOut",
                    stagger: 0.12
                })

                // 3. Reveal Structured "Unified Sovereignty" View (Slow Expo Fade)
                .to(structuredView, {
                    duration: 1.8,
                    opacity: 1,
                    ease: "expo.out"
                }, "-=0.6")

                // 4. Synchronize Clarity Endpoints (Technical pop into place)
                .to('.endpoint-wrapper', {
                    duration: 1,
                    scale: 1,
                    opacity: 1,
                    ease: "back.out(1.8)",
                    stagger: 0.25
                }, "-=1")
                // Inside your existing timeline
                .to("#syncPath", {
                    strokeDashoffset: 0,
                    duration: 2,
                    ease: "power2.inOut"
                }, "-=0.5")

                // 5. Finalize view
                .set(scatterView, { display: 'none', className: '-=active-state' });

            }, 1200); // Wait 1.2s after load before sync sequence
        });
        syncTL.set('.connector-dot', { scale: 0, opacity: 0 });

        window.addEventListener('load', () => {
            setTimeout(() => {
                syncTL.play();

                // 1. Explode and clear cluttered items first...
                // 2. Fade in structured view...

                // 3. Draw connection lines
                // Start the line draw
syncTL.to("#syncPath", {
    strokeDashoffset: 0,
    duration: 1.5,
    ease: "none" // Linear for technical feel
}, "-=0.5")
// Trigger pulsing dots exactly as the line touches the cards
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