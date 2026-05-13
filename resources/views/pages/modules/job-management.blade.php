@extends('layouts.app')
@section('title', 'Job Architecture & Precision Project Management | Begin360')
@section('meta_title', 'Job Management Software & Field Service Automation | Begin360')
@section('meta_description', 'Bridge the gap between office and field. Track every job from quote to completion with Begin360’s high-fidelity management architecture featuring real-time scheduling and resource allocation.')
@section('meta_keywords', 'Job Management System Australia, Field Service Software, Project Tracking Automation, Real-time Scheduling, Resource Allocation, Service Workflow Management, Trade Job Tracking, Odoo Project Customization, Timesheet Automation')
@push('styles')
   <style>
    
   </style>
@endpush
@section('content')
    @php
        $heroData = [
            'breadcrumbs' => [
                ['label' => 'Home', 'url' => route("home"), 'active' => false],
                ['label' => 'Modules', 'url' => route("modules.index"), 'active' => false],
                ['label' => 'Job Management', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Every job tracked. Nothing left ',
            'dynamic_word' => 'behind.',
            'description' => "When jobs live in text messages, a whiteboard, and a few sticky notes, things get missed. A technician turns up without the right details or an invoice goes out late because nobody remembered to trigger it. This module tracks every job from the first phone call to the final sign-off — so your office and field team always know exactly what's happening and where.",
            'hero_image' => '<svg viewBox="0 0 460 345" xmlns="http://www.w3.org/2000/svg" style="padding:20px;">
                            <rect width="460" height="345" fill="#f7faf7"></rect>
                            <rect x="16" y="16" width="428" height="313" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                            <!-- Header -->
                            <text x="36" y="46" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Job Board — Today, 8 May</text>
                            <rect x="352" y="30" width="92" height="24" rx="6" fill="#e8fde9"></rect>
                            <text x="398" y="46" font-family="DM Sans,sans-serif" font-size="11" fill="#019906" text-anchor="middle">14 active</text>
                            <line x1="36" y1="58" x2="428" y2="58" stroke="#e8e8e4" stroke-width="1"></line>

                            <!-- Status pills -->
                            <rect x="36" y="66" width="76" height="22" rx="11" fill="#f4f4f2"></rect>
                            <text x="74" y="81" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880" text-anchor="middle">Enquiry  3</text>

                            <rect x="122" y="66" width="76" height="22" rx="11" fill="#e8fde9"></rect>
                            <text x="160" y="81" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">Scheduled  6</text>

                            <rect x="208" y="66" width="76" height="22" rx="11" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                            <text x="246" y="81" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">In Progress  4</text>

                            <rect x="294" y="66" width="76" height="22" rx="11" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                            <text x="332" y="81" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#444440" text-anchor="middle">To Invoice  1</text>

                            <!-- Job rows -->
                            <line x1="36" y1="96" x2="428" y2="96" stroke="#e8e8e4" stroke-width="0.5"></line>
                            <text x="36" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">JOB</text>
                            <text x="196" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">CLIENT</text>
                            <text x="290" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">ASSIGNED TO</text>
                            <text x="385" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">STATUS</text>
                            <line x1="36" y1="118" x2="428" y2="118" stroke="#e8e8e4" stroke-width="0.5"></line>

                            <!-- Job 1 -->
                            <text x="36" y="136" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Switchboard upgrade</text>
                            <text x="36" y="149" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">#J-2841 · 15 Maple St</text>
                            <text x="196" y="141" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">R. Thornton</text>
                            <text x="290" y="141" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Jake M.</text>
                            <rect x="375" y="129" width="56" height="20" rx="10" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                            <text x="403" y="143" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">In Progress</text>
                            <line x1="36" y1="158" x2="428" y2="158" stroke="#e8e8e4" stroke-width="0.5"></line>

                            <!-- Job 2 -->
                            <text x="36" y="176" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Safety inspection</text>
                            <text x="36" y="189" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">#J-2849 · CBD Office Park</text>
                            <text x="196" y="181" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">BlueSky Dev</text>
                            <text x="290" y="181" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Priya K.</text>
                            <rect x="374" y="169" width="58" height="20" rx="10" fill="#e8fde9"></rect>
                            <text x="403" y="183" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">Scheduled</text>
                            <line x1="36" y1="198" x2="428" y2="198" stroke="#e8e8e4" stroke-width="0.5"></line>

                            <!-- Job 3 — to invoice -->
                            <rect x="36" y="198" width="392" height="30" fill="#e8fde9" opacity="0.3"></rect>
                            <text x="36" y="216" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">New build rough-in</text>
                            <text x="36" y="229" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">#J-2836 · 42 Thornton Ave</text>
                            <text x="196" y="221" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Ridgeway Dev</text>
                            <text x="290" y="221" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Connor B.</text>
                            <rect x="367" y="209" width="68" height="20" rx="10" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                            <text x="401" y="223" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">✓ To Invoice</text>
                            <line x1="36" y1="236" x2="428" y2="236" stroke="#e8e8e4" stroke-width="0.5"></line>

                            <!-- Job 4 -->
                            <text x="36" y="254" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Emergency fault repair</text>
                            <text x="36" y="267" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">#J-2852 · Smithfield Café</text>
                            <text x="196" y="259" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Smithfield Café</text>
                            <text x="290" y="259" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Jake M.</text>
                            <rect x="374" y="247" width="58" height="20" rx="10" fill="#e8fde9"></rect>
                            <text x="403" y="261" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">Scheduled</text>

                            <!-- Footer bar -->
                            <rect x="36" y="290" width="392" height="26" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                            <text x="232" y="307" font-family="DM Sans,sans-serif" font-size="11" fill="#017304" text-anchor="middle">✓  J-2836 complete · Signed off on site · Ready to invoice — $3,420</text>
                        </svg>', // Placeholder for your job-management glassware asset
            'primary_btn' => [
                'text' => 'Book a Demo',
                'url' => route('contact'),
                'icon' => 'fa-calendar-check'
            ],
            'secondary_btn' => [
                'text' => 'See Industries',
                'url' => route('industries.index'),
                'icon' => 'fa-layer-group'
            ],
            'scroll_text' => 'Explore job architecture'
        ];
        $complianceModule = [
            'intro' => [
                'badge'   => '— Job Management Architecture —',
                'title'   => 'From first call to final invoice — every job in one <span class="text-accent fraunces section-accent fw-normal">place</span>',
                'content' => '<p class="lead mb-4">Most trade businesses run jobs across a mix of phone calls, text messages, a shared calendar, and a folder of paper job cards. It works when things are quiet. When you\'re running six jobs at once, things start to slip — a job that didn\'t get followed up, a detail the technician didn\'t get, a completed job that never made it to an invoice.</p>
                            <p class="small opacity-75">This module gives every job a single record that travels with it from start to finish. Your office team can see every job\'s status at a glance. Your field team gets all the details they need on their phone before they arrive on site. And when a job is done, generating an invoice takes a few clicks — not a half-hour of admin. It\'s not about adding complexity. It\'s about replacing the bits of paper and the phone calls with something that everyone can see and act on.</p>'
            ],
            'features' => [
                [
                    'icon'    => 'fa-clipboard',
                    'title'   => 'One record for every job, from start to finish',
                    'content' => 'Every job has a card — client details, site address, scope of work, photos, notes, parts used, and time logged. Everything in one place, accessible by your whole team.'
                ],
                [
                    'icon'    => 'fa-mobile',
                    'title'   => 'Field team gets everything they need on their phone',
                    'content' => 'Technicians see their jobs for the day, the site address, the scope, and any client notes — all on their phone. No printed job cards, no phone calls from the office to explain what needs doing.'
                ],
                [
                    'icon'    => 'fa-signature',
                    'title'   => 'Sign-off captured on site',
                    'content' => 'Technicians complete a digital job card when the work is done — notes, photos, parts used, time spent, and a customer signature. Everything is recorded before they leave the site.'
                ],
                [
                    'icon'    => 'fa-file-invoice-dollar',
                    'title'   => 'Invoice straight from the completed job card',
                    'content' => 'When a job is marked complete, the invoice is ready to generate in a few clicks. Labour, materials, and call-out fees are already there — no re-entering, no chasing timesheets.'
                ]
            ],
            'cta' => [
                'title'    => "Ready to bridge the office-field gap?",
                'subtitle' => "Let's discuss how we can digitize your job cards and streamline your project delivery lifecycle.",
                'btn_text' => 'Book a Demo',
                'url'      => route('contact')
            ]
        ];
        $architectureData = [
            'bg_text' => 'OPERATIONS',
            'header' => [
                'badge_icon'  => 'fa-screwdriver',
                'badge_text'  => '— SYSTEM ARCHITECTURE —',
                'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
                'description' => 'Everything you need to run jobs cleanly from first contact to paid invoice — without the sticky notes, the phone calls, and the things that get forgotten.'
            ],
            'features' => [
                [
                    'title' => 'Job cards with full history', 
                    'icon'  => 'fa-clipboard-list', 
                    'desc'  => 'Every job gets a digital card — client, site, scope, priority, notes, photos, and status. The complete history of a job is always there, visible to anyone who needs it.'
                ],
                [
                    'title' => 'Enquiry & quote tracking', 
                    'icon'  => 'fa-funnel-dollar', 
                    'desc'  => 'Log new enquiries as they come in and track them through to quote, approval, and job creation. Nothing falls off the end of a phone call without a record.'
                ],
                [
                    'title' => 'Job status tracking', 
                    'icon'  => 'fa-arrows-to-dot', 
                    'desc'  => 'Move jobs through your stages — Enquiry, Quoted, Scheduled, In Progress, Complete, Invoiced — so your whole team always knows what\'s happening with every job at a glance.'
                ],
                [
                    'title' => 'Mobile job card for field teams', 
                    'icon'  => 'fa-mobile-screen-button', 
                    'desc'  => 'Technicians view their scheduled jobs, site details, and scope on their phone. They update status, log time, add notes and photos, and capture customer signatures on site.'
                ],
                [
                    'title' => 'Photos & site notes', 
                    'icon'  => 'fa-camera-retro', 
                    'desc'  => 'Attach before and after photos, site condition notes, and any relevant documentation directly to the job card. Everything is stored and linked — not sitting in someone\'s camera roll.'
                ],
                [
                    'title' => 'Digital customer sign-off', 
                    'icon'  => 'fa-signature', 
                    'desc'  => 'Capture the customer\'s signature on a phone or tablet before leaving site. Proof of completion is stored against the job card — no paper forms to chase or lose.'
                ],
                [
                    'title' => 'Time & materials logging', 
                    'icon'  => 'fa-stopwatch-20', 
                    'desc'  => 'Technicians log their time and any parts used while on site. Labour and materials are recorded against the job and flow directly into the invoice when the job is complete.'
                ],
                [
                    'title' => 'One-click invoicing from job cards', 
                    'icon'  => 'fa-file-invoice-dollar', 
                    'desc'  => 'When a job is complete, the invoice is built from the job card automatically — time, materials, call-out fees, and all. Send it the same day the job is finished.'
                ],
                [
                    'title' => 'Job history & client records', 
                    'icon'  => 'fa-clock-rotate-left', 
                    'desc'  => 'Every job ever done for a client is stored in one place. When a repeat client calls, you can see their full service history, what was done, and what was charged in seconds.'
                ]
            ],
            'cta' => [
                'title'    => "Let's get connected.",
                'subtitle' => "Ready to automate your operational intelligence? Let's discuss your specific job management workflow.",
                'btn_text' => 'Get Started',
                'url'      => route('contact')
            ]
        ];
        
        $supplierModule = [
            'intro' => [
                'badge_text' => '— FIELD OPERATIONS —',
                'badge_icon' => 'fa-clipboard-user',
                'title'      => 'Everything about a job, in one place your team <span class="text-accent fraunces section-accent fw-normal">can actually use</span>',
                'content'    => 'A job card isn\'t just a record — it\'s the source of truth for everyone involved. The office team sees site logs, the technician sees historical client notes, and the owner sees exactly what is ready to invoice. When information is centralized, the need for "quick phone calls" to check details drops dramatically.'
            ],
            'ui' => [
                'table_title' => 'Job Card #J-2841',
                'stats' => [
                    ['label' => 'Total (excl. GST): $840', 'color' => 'body'],
                    ['label' => 'Status: In Progress', 'color' => 'accent'],
                ],
                'rows' => [
                    [
                        'name' => 'R. Thornton', 
                        'subtext' => '0412 345 678 · robert@thornton.com.au', 
                        'date' => '15 Maple Street', 
                        'status' => 'Surry Hills', 
                        'status_color' => 'secondary'
                    ],
                    [
                        'name' => 'Labour — 3.5 hrs @ $120/hr', 
                        'subtext' => 'Logged by Jake M.', 
                        'date' => 'Switchboard Upgrade', 
                        'status' => '$420', 
                        'status_color' => 'body'
                    ],
                    [
                        'name' => '12-circuit switchboard', 
                        'subtext' => 'Materials supplied', 
                        'date' => 'Safety Inspection', 
                        'status' => '$340', 
                        'status_color' => 'body'
                    ],
                    [
                        'name' => 'Call-out fee', 
                        'subtext' => 'Standard rate', 
                        'date' => '📸 3 photos', 
                        'status' => '✓ Signed', 
                        'status_color' => 'success'
                    ],
                ],
                'alert' => 'Job complete · Click "Generate Invoice" to send INV-0318 to robert@thornton.com.au'
            ],
            'footer_features' => [
                'Client details, site address, and job scope all on one screen',
                'Time and materials logged by the technician on site in real time',
                'Photos, notes, and customer signature attached before leaving site',
                'Invoice generated from the job card with one click — no double handling'
            ]
        ];

        $modulesHeader = [
            'section_class' => 'bg-body',
            'badge'          => '— Other Modules —',
            'heading_start'  => 'Explore the',
            'dynamic_word'   => 'full suite',
            'description'    => 'Job Management works closely with scheduling, quoting, invoicing, and parts management. Here\'s what else is available.',
            'primary_btn'    => [
                'text' => 'View All Modules',
                'url'  => route('modules.index'),
                'icon' => 'fa-layer-group'
            ]
        ];
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
                'title' => 'Need Something Specific?',
                'icon' => 'fa-microchip',
                'description' => 'Every construction business is different. Tell us about your operation and we\'ll figure out the right setup together.',
                'url' => url('/contact'),
                'column_class' => 'col-10 col-md-12 col-lg-12', // Spans full width at bottom
                'show_cta' => true,
                'featured' => true,
                'cta_text' => 'Start a Conversation'
            ]
        ];

        $industryHeader = [
            'section_class' => 'bg-body-tertiary',
            'badge'          => '— Sectors We Transform —',
            'heading_start'  => 'Which industries use this',
            'dynamic_word'   => 'module',
            'description'    => 'Job Management is built specifically for trade and field service businesses where work is delivered on site — and where managing that work efficiently is the difference between a smooth operation and a stressful one.',
            'primary_btn'    => [
                'text' => 'View All Industries',
                'url'  => route('industries.index'),
                'icon' => 'fa-layer-group'
            ]
        ];
        
        $industries = [
            [
                'title' => 'Trades',
                'icon' => 'fa-screwdriver-wrench',
                'description' => 'Mobile-first field service automation and real-time resource allocation for agile, high-performance maintenance fleets.',
                'url' => route('industries.show', 'trades'),
                'column_class' => 'col-12',
                'show_cta' => true
            ]
        ];

        
    @endphp
    <x-about-hero :heroData="$heroData"/>
    <x-traceability :data="$complianceModule" class="py-5" />   
@php
    
@endphp
<x-module-feature-timeline :data="$architectureData" />
<x-module-supplier-compliance :data="$supplierModule" />
    <x-bento-grid 
        :items="$industries" 
        :bentoData="$industryHeader" 
        id="industry-sectors" 
        class="pt-5" 
    />
    <x-bento-grid 
        :items="$modules" 
        :bentoData="$modulesHeader" 
        id="industry-sectors" 
        class="pt-5" 
    />
@endsection
@push('scripts')
    
@endpush