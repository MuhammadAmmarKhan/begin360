@extends('layouts.app')

@section('title', 'About Begin360 | Elite Digital Infrastructure')
@section('meta_title', 'About Us - Begin360: Engineering the Future of Enterprise Operations')
@section('meta_description', 'Discover Begin360\'s mission to transform complex business ecosystems into streamlined, glass-clear infrastructures. As an Elite Service Provider, we specialize in high-end ERP implementation and digital architecture.')
@section('meta_keywords','Enterprise Digital Infrastructure, Begin360 About, ERP Implementation Experts, Glassmorphic UI Design, Business Process Optimization, Odoo Consultancy.')
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
    .section-wrapper {
        position: relative;
        min-height: 40vh; /* Ensures enough scroll space for the stick effect */
    }

    .sticky-heading {
        position: -webkit-sticky;
        position: sticky;
        top: 120px; /* Adjust based on your nav height */
        padding-bottom: 2rem;
    }

    .text-primary-accent {
        color: #56D964; /* Your brand green */
    }

    .ls-tight {
        letter-spacing: -1px;
    }

    .narrative-content p {
        line-height: 1.8;
        font-size: 1.25rem;
    }

    /* Subtle animation as content comes into view */
    .section-wrapper {
        transition: opacity 0.6s ease-out;
    }

    @media (max-width: 767.98px) {
        .section-wrapper {
            min-height: auto;
        }
    }
    .custom-mission-list li {
        position: relative;
        padding-left: 2.5rem; /* Space for the custom icon */
    }

    .custom-mission-list li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 2px; /* Aligns circle with the first line of text */
        width: 22px;
        height: 22px;
        background-color: var(--accent); /* Your brand green */
        border-radius: 50%; /* Makes it a circle */
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1;
    }

    /* Creating the black tick mark */
    .custom-mission-list li::after {
        content: '';
        position: absolute;
        left: 7px;
        top: 9px;
        width: 8px;
        height: 4px;
        border-left: 2px solid #000; /* Black tick stroke */
        border-bottom: 2px solid #000;
        transform: rotate(-45deg); /* Forms the tick shape */
        z-index: 2;
    }

    /* Adjusting for text alignment */
    .custom-mission-list .h6 {
        line-height: 1.4;
    }
    /* 1. Large, Bold Typography */
    

    .tracking-widest {
        letter-spacing: 0.4em;
    }

    .leading-relaxed {
        line-height: 1.85;
    }

    /* 2. Image Aesthetics */
    .partner-image-wrapper {
        
    }

    .grayscale-img {
        filter: grayscale(100%) contrast(110%);
        transition: filter 0.6s ease, transform 0.6s ease;
        object-fit: cover;
        object-position:top;
        width: 100%;
        height: 500px; /* Fixed height for architectural consistency */
    }

    .partner-image-wrapper:hover .grayscale-img {
        filter: grayscale(0%) contrast(100%);
        transform: scale(1.02);
    }

    /* 3. Subtle Frame Accent */
    .accent-frame {
        transform: translate(15px, 15px);
        z-index: -1;
    }

    /* 4. Experience Box */
    .bg-white.bg-opacity-5 {
        background-color: rgba(255, 255, 255, 0.03) !important;
    }

    /* Responsive adjustments */
    @media (max-width: 991px) {
        /* .partner-name { font-size: 3.5rem; } */
        .grayscale-img { height: 500px; }
    }

    
</style>
@endpush
@section('content')
    @php
        $heroData = [
            'badge' => '— We\'re Architecting the Operating System for Innovation —',
            'heading_start' => 'Reimagining the Blueprint of',
            'dynamic_word' => 'Operations',
            'description' => "Traditional enterprise systems were architected for a static era—defined by rigid silos and cumbersome constraints. At Begin360, we recognize that the pioneers of the next industrial evolution have moved beyond these legacy frameworks. We don't simply offer an upgrade; we provide a fundamental reimagining of digital infrastructure. Our approach engineers your environment from the ground up to mirror the fluid reality of your operations, ensuring your technology finally adapts to your business, and not the other way around.",
            'primary_btn' => [
                'text' => 'See how it works',
                'url' => '#',
                'icon' => 'fa-circle-play'
            ],
            'secondary_btn' => [
                'text' => 'Book a demo',
                'url' => url('/contact'),
                'icon' => 'fa-calendar-check'
            ],
            'scroll_text' => 'Scroll to see the transformation'
        ];
    @endphp    
    <x-about-hero :heroData="$heroData"/>
    @php
        $sections = [
            [
                'id' => 'story',
                'title' => 'Our Story',
                'sub_heading' => '— The Evolution of a Blueprint —',
                'heading' => 'From Architectural Failure to Operational Flow',
                'cta' => ['text' => 'Our Genesis', 'url' => route('industries.index')],
                'content' => '
                    <h4 class="h4 fw-bold text-body mb-4">The Pervasive Operational Friction.</h4>
                    <p class="mb-4 text-body fs-5">For years, we watched the global business landscape struggle under the weight of legacy ERP systems—rigid structures that forced visionaries to bend their operations to fit the software’s limitations. We saw pioneers stalled by outdated logic and teams slowed by complexity.</p>
                    
                    <h4 class="h4 fw-bold text-body mb-4">The Architectural Epiphany.</h4>
                    <p class="mb-4 text-body fs-5">These weren’t industry-specific problems; they were fundamental architectural failures. Software had become a bottleneck instead of an accelerator. We realized that the most innovative companies of tomorrow required a new foundation, not another patch on an old system.</p>
                    
                    <h4 class="h4 fw-bold text-body mb-4">The Return to First Principles.</h4>
                    <p class="text-body fs-5">We stripped away the legacy bloat to reveal a simpler truth: <strong>software should follow the natural flow of operations.</strong> Begin360 was built to provide that foundation—reimagining enterprise resource planning as a blueprint for speed, agility, and precision.</p>'
            ],
            [
                'id' => 'vision',
                'title' => 'Our Vision',
                'sub_heading' => '— A Future Without Friction —',
                'heading' => 'The Standard for Operational Excellence',
                'cta' => ['text' => 'Our Roadmap', 'url' => route('modules.index')],
                'content' => '
                    <div class="mb-5">
                        <h4 class="h4 fw-bold text-body mb-4">Uncompromising Velocity.</h4>
                        <p class="text-body fs-5">We envision a world where enterprise systems are the primary catalysts for expansion. We architect environments where organizations operate with absolute process clarity, ensuring that technical speed never sacrifices operational integrity.</p>
                    </div>
                    <div class="mb-5">
                        <h4 class="h4 fw-bold text-body mb-4">Scalability by Design.</h4>
                        <p class="text-body fs-5">Our vision is a future where ERPs are genuine tools for scaling, not sources of frustration. We see a landscape where technology decisions are made strategically, implemented correctly, and evolved with purpose to support the next generation of global leaders.</p>
                    </div>
                    <div>
                        <h4 class="h4 fw-bold text-body mb-4">Clarity through Strategic Alliance.</h4>
                        <p class="text-body fs-5">Begin360 exists to bridge the gap between complex data and strategic action. We transform one enterprise at a time, turning fragmented infrastructure into a cohesive, competitive advantage through a shared vision of mastery.</p>
                    </div>'
            ],
            [
                'id' => 'mission',
                'title' => 'Our Mission',
                'sub_heading' => '— The Engineering Principles —',
                'heading' => 'Execution with Surgical Precision',
                'cta' => ['text' => 'Partner With Us', 'url' => route('contact')],
                'content' => '
                    <p class="fs-5 fw-normal text-body mb-5">To deliver transformative ERP environments through a methodology of absolute integrity. We are guided by five core principles of execution:</p>
                    <ul class="list-unstyled custom-mission-list">
                        <li class="mb-4">
                            <span class="d-block h5 text-body fw-bold mb-1">Unwavering Client Centricity.</span>
                            <span class="text-body fs-6">We conduct deep-tier needs analysis to ensure every architectural recommendation is rooted in your operational reality.</span>
                        </li>
                        <li class="mb-4">
                            <span class="d-block h5 text-body fw-bold mb-1">Intellectual Honesty.</span>
                            <span class="text-body fs-6">We provide technical transparency at every stage, designing frameworks that prioritize long-term efficiency over short-term ease.</span>
                        </li>
                        <li class="mb-4">
                            <span class="d-block h5 text-body fw-bold mb-1">Radical Ownership.</span>
                            <span class="text-body fs-6">We take extreme accountability for the implementation process, delivering complex projects with surgical precision.</span>
                        </li>
                        <li class="mb-4">
                            <span class="d-block h5 text-body fw-bold mb-1">Operational Momentum.</span>
                            <span class="text-body fs-6">We recognize that in high-stakes environments, time is the only finite resource. We execute with relentless urgency and precision.</span>
                        </li>
                        <li class="mb-0">
                            <span class="d-block h5 text-body fw-bold mb-1">Continuous Baseline Elevation.</span>
                            <span class="text-body fs-6">We provide scalable support that evolves in lockstep with the shifting demands of the global markets we serve.</span>
                        </li>
                    </ul>'
            ]
        ];
        $leadership = [
            [
                'name' => 'Irfan Chaudry',
                'role' => 'Chief Executive Officer',
                'image' => asset('assets/images/team/1.png'),
                'description' => 'With over 15 years of experience in data analytics and consulting for global leaders like Ernst & Young, Aon, and IAG, Irfan recognized that the barrier to performance wasn’t a lack of data, but the absence of structured systems to harness it. At Begin360, he applies a structured, analytical lens to turn operational complexity into strategic clarity.',
                'experience_value' => 'Brings deep expertise in engineering data-driven frameworks that align technical infrastructure with executive-level decision making.'
            ],
            [
                'name' => 'Safdar Razzaq Mithani',
                'role' => 'Co-Founder and Director',
                'image' => asset('assets/images/team/3.png'),
                'description' => 'A veteran of 30 years in compliance and process technology, Safdar is one of the most accomplished enterprise experts across Australia and the GCC. He bridges the gap between technical design and regulatory governance, ensuring every Begin360 engagement is delivered with surgical integrity and measurable impact.',
                'experience_value' => 'Adds sophisticated mastery of cross-border regulatory landscapes, cultural nuances, and high-level governance expectations.'
            ],
            [
                'name' => 'Yaseer Zeni',
                'role' => 'Principal Advisor',
                'image' => asset('assets/images/team/2.png'),
                'description' => 'Yaseer treats ERP not as software, but as business reinvention. With 15 years in enterprise transformation—specializing in Dynamics 365 and Odoo—he architects systems that withstand the scrutiny of audit and the pressure of scale, turning fragmented processes into streamlined growth engines.',
                'experience_value' => 'Contributes intensive hands-on experience in large-scale rollouts, statutory reporting frameworks, and tax-compliant system design.'
            ]
        ];
        $erpConsultantPoints = [
            [
                'icon' => 'fa-pencil-ruler',
                'title' => 'Blueprint Precision',
                'text' => 'Bespoke workflows and engineered processes specifically designed to fit your unique operational blueprint.',
            ],
            [
                'icon' => 'fa-chess-king',
                'title' => 'Strategic Advisory',
                'text' => 'High-level consultancy guiding you through architectural strategy, precise implementation, and long-term ecosystem optimization.',
            ],
            [
                'icon' => 'fa-shield-alt',
                'title' => 'Integrity Guard',
                'text' => 'Seamless operational integrity from initial technical consultation through to full lifecycle post-deployment mastery.',
            ],
            [
                'icon' => 'fa-chart-simple',
                'title' => 'Scalable Foundations',
                'text' => 'Flexible, resilient ERP foundations designed to evolve with your market needs and support seamless enterprise growth.',
            ],
        ];    
    @endphp
    <section class="narrative-container bg-body py-5">
        <div class="container pt-5">
            @foreach($sections as $section)
                <div class="row mb-5 pb-5 section-wrapper">
                    <div class="col-md-5 d-none d-md-block">
                        <div class="sticky-heading">
                            <h2 class="display-6 fw-semibold text-uppercase ls-normal ls-md-tight">
                                <span class="text-primary-accent">{{ explode(' ', $section['title'])[0] }}</span> 
                                {{ explode(' ', $section['title'])[1] }}
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h2 class="d-block d-md-none fw-semibold text-uppercase mb-4 text-primary-accent text-center text-md-start">
                            {{ $section['title'] }}
                        </h2>                    
                        <div class="narrative-content">
                            <h5 class="text-accent fw-semibold text-uppercase tracking-widest mb-3 d-block">{{ $section['sub_heading']}}</h3>
                            <h3 class="fw-semibold mb-4 display-6">{{ $section['heading']}}</h3>
                            {!!$section['content'] !!}                            
                        </div>
                        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-start gap-3 gs-reveal mt-5">
                            <button class="btn btn-secondary rounded-pill px-5 py-3 fw-black text-uppercase shadow-sm d-inline-flex align-items-center justify-content-center">
                                Connect With Us <i class="fa-solid fa-arrow-right ms-1"></i>
                            </button>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="leadership-section py-5 bg-body-tertiary text-body">
        <div class="container py-5">
            <div class="row mb-md-5 pb-md-4 border-bottom border-secondary border-opacity-25">
                <div class="col-12 text-center text-md-start">
                    <span class="text-primary-accent text-uppercase small fw-bold tracking-widest d-block mb-3">— The Architecture of Experience —</span>
                    <h2 class="display-6 fw-bold text-uppercase">Leadership</h2>
                </div>
            </div>
            @foreach($leadership as $partner)
                <div class="row align-items-center mb-5 pb-5 border-bottom border-secondary border-opacity-10">
                    <!-- Content Column -->
                    <div class="col-lg-7 order-1 order-md-0">
                        <div class="header-group mb-5">
                            <h2 class="display-6 fw-bold partner-name mb-0">{{ $partner['name'] }}</h2>
                            <span class="text-primary-accent text-uppercase small fw-semibold tracking-widest d-block mt-2">
                                {{ $partner['role'] }}
                            </span>
                        </div>

                        <div class="narrative-content pe-md-5">
                            <p class="text-body mb-5 fs-5 leading-relaxed">
                                {!! $partner['description'] !!}
                            </p>
                            
                            <!-- Strategic Experience Section -->
                            <div class="experience-foot mt-5 p-4 bg-white bg-opacity-5 border-start border-accent border-4 rounded-4">
                                <p class="small text-uppercase text-accent fw-semibold tracking-widest mb-2">Strategic Value</p>
                                <p class="text-body mb-0 fw-light fst-italic">
                                    "{{ $partner['experience_value'] }}"
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="col-lg-5 mt-md-5 mb-5 mb-md-0 mt-lg-0 order-0 order-md-1">
                        <div class="partner-image-wrapper position-relative">
                            <img src="{{ $partner['image'] }}" alt="{{ $partner['name'] }}" class="img-fluid grayscale-img shadow-lg rounded-5">
                            <div class="accent-frame position-absolute top-0 start-0 w-100 h-100 border border-accent opacity-25 translate-middle-z"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section id="sovereign-presence" class="container-fluid py-5 bg-body-tertiary overflow-hidden">
        <!-- Parallax Box with Rounded Corners -->
        <div class="position-relative z-1 py-5 bg-black rounded-5 parallax-wrapper">
            <div class="container position-relative z-2">
                <div class="row align-items-center py-lg-4">
                    <div class="col-lg-5">
                        <div class="partner-image-wrapper position-relative mb-5">
                            <img src="assets/images/opera.png" alt="Operational Excellence" class="img-fluid">
                        </div>
                    </div>                    
                    <div class="col-lg-7">
                        <div class="narrative-content">
                            <span class="text-accent text-uppercase small fw-bold tracking-widest d-block">
                                — Sovereign Presence —
                            </span>
                            <h2 class="display-6 fw-semibold text-white mb-2 tracking-tighter">
                                Local <span class="text-accent fraunces section-accent fw-normal">Expertise</span>

                            </h2>
                            <p class="h5 text-accent fs-4 fw-bold mb-2">The Australian Advantage</p>
                            
                            <!-- Condensed Narrative -->
                            <div class="w-100">
                                <p class="lead fw-normal text-white mb-2">
                                    Architecture built for the Australian operational landscape.
                                </p>
                                <p class="text-secondary fs-5 mb-5" style="max-width: 800px;">
                                    We bridge the gap between global standards and local reality. By navigating the specificities of Australian compliance—from GST and FBT to regional operational rhythms—we architect natively compliant systems that act as a strategic local asset, not a foreign imposition.
                                </p>
                                
                                <div class="mt-5">
                                    <a href="/contact" class="btn btn-accent btn-lg rounded-pill px-5 py-3 text-uppercase fw-bold text-black">
                                        Engage Locally <i class="fa fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <x-cta-section 
        badge="Partner with Begin360"
        title="Ready to Architect Your Future?"
        highlight="Architect Your Future"
        description="Join the organizations already scaling with precision and clarity."
        primaryText="Start a Conversation"
        primaryLink="/contact"
        secondaryText="Our Solutions"
        secondaryLink="/solutions"
    /> -->
    <!-- Why Choose Us Section - highly creative, no image layout -->
    <section class="py-5 bg-body-tertiary text-body overflow-hidden">
    <div class="container py-lg-5 position-relative">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <div class="pe-lg-5">
                    <span class="text-accent text-uppercase small fw-bold tracking-widest d-block mb-3">
                        — The Begin360 Difference —
                    </span>
                    <h2 class="display-6 fw-semibold text-body mb-4 tracking-tighter">
                        The Architecture <br> of <span class="text-accent fraunces section-accent fw-normal">Excellence</span>
                    </h2>
                </div>
            </div>
        </div>
        
        <div class="row g-4 flex-nowrap overflow-x-auto pb-3 scrollbar-none snap-x" style="-webkit-overflow-scrolling: touch;">
            @foreach($erpConsultantPoints as $key => $point)
                <div class="col-11 col-sm-6 col-md-5 col-lg-3 pillar-item flex-shrink-0 snap-center" style="--delay: {{ $key }}">
                    <div class="custom-pillar h-100 p-4 p-sm-5 bg-body border border-secondary border-opacity-10 shadow-sm rounded-5">
                        <div class="icon-shape mb-4 mb-sm-5 d-flex align-items-center justify-content-center">
                            <i class="fa-solid {{ $point['icon'] }} fa-2x text-accent"></i>
                        </div>
                        <h4 class="h6 fw-semibold text-body mb-3 tracking-wide text-uppercase">
                            {{ $point['title'] }}
                        </h4>
                        <p class="text-secondary fw-normal mb-0 fs-6">
                            {{ $point['text'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
@push('scripts')

@endpush