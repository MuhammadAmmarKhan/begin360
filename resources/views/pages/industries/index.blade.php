@extends('layouts.app')

@section('title', 'Architected ERP Modules | The Unified System by Begin360')
@section('meta_title', 'Operational Blueprints: Scalable ERP & Odoo Module Ecosystem | Begin360')
@section('meta_description', 'Deploy precision-engineered ERP modules. From AI-driven demand planning to automated maritime inventory, synchronize your enterprise with Begin360’s scalable Odoo-based architecture.')
@section('meta_keywords', 'Integrated ERP Modules, Odoo Enterprise Solutions, Digital Supply Chain Architecture, AI Demand Planning, Automated Warehouse Management, Maritime Inventory Systems, Begin360 Ecosystem, Business Process Autonomization')

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
@php
        $heroData = [
            'badge' => '— The Industry Blueprint Catalog —',
            'heading_start' => 'Engineered Ecosystems for',
            'dynamic_word' => 'Global Industries',
            'description' => 'Generic platforms fail to capture the nuances of complex sectors. At <span class="text-body fw-bold">Begin360</span>, we deploy a <span class="text-body fw-bold">Unified System</span>—a high-performance Odoo architecture tailored to the specific demands of your vertical. From synchronizing <span class="text-accent">Maritime Logistics</span> to autonomizing <span class="text-accent">Enterprise Supply Chains</span>, our blueprints integrate sovereign data control with AI-driven demand planning to ensure your enterprise is built for infinite scale.',
            'primary_btn' => [
                'text' => 'Explore Industries',
                'url' => '#industry-grid',
                'icon' => 'fa-industry'
            ],
            'secondary_btn' => [
                'text' => 'Request Sector Audit',
                'url' => url('/contact'),
                'icon' => 'fa-diagram-project'
            ],
            'scroll_text' => 'Scroll to see the transformation'
        ];
    @endphp    
    <x-about-hero :heroData="$heroData"/>  
    @php
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
                    Deploy engineered operational blueprints tailored for high-stakes industry verticals.
                </h1>
            </div>
        </div>
    </section>
    <section id="module-introduction" class="py-5 bg-body">
        <div class="container text-center d-flex flex-column align-items-center">
            <div class="row text-start py-5">
                <div class="col-lg-5">
                    <span class="text-accent fw-bold text-uppercase tracking-widest mb-2 d-block ls-2">
                        Vertical Operational Sovereignty
                    </span>
                    <h2 class="display-6 fw-bold text-body mb-4">
                        Begin360 Industry Blueprints: <span class="text-accent">Architecting Sector-Specific Ecosystems</span>
                    </h2>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <p class="lead text-secondary mb-5 lh-lg">
                        Whether orchestrating <span class="text-body fw-bold">Maritime Logistics</span>, optimizing complex <span class="text-body fw-bold">Manufacturing Blueprints</span>, or deploying <span class="text-body fw-bold">Omnichannel Retail Architecture</span>, the Begin360 Operations Cloud scales to the unique constraints of your vertical. 
                        
                        Our ecosystem represents a paradigm shift in industrial engineering—moving beyond generic ERP modules to deliver <span class="text-body fw-bold">logic-driven workflows</span> tailored for sector-specific friction. Synchronize your global procurement, autonomize your inventory logic, and deploy a digital nervous system engineered for your specific industry landscape.
                    </p>
                </div>
            </div>
        </div>

        <!-- The Bento Grid Component -->
        <x-bento-grid :items="$industries" id="module-grid" class="pt-5" />
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
                'answer' => 'We define specific key performance indicators (KPIs) at the onset, focusing on operational efficiency, cost reduction, and revenue growth metrics to track tangible ROI.'
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

    <x-custom-faqs title="Still Have<br>Questions?" :faqs="$faqs" />


@endsection
@push('scripts')

@endpush