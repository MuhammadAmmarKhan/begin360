@extends('layouts.app')
@section('title', 'Contract Management & Progress Claims | High-Fidelity Systems by Begin360')
@section('meta_title', 'Progress Claims & Retention Architecture | Begin360')
@section('meta_description', 'Stop manual calculations. Automate your progress claims, variation tracking, and retention logic with Begin360’s high-fidelity contract architecture.')
@section('meta_keywords', 'Progress Claims Software Australia, Construction ERP, Retention Tracking, Contract Variations, Subcontractor Management, Odoo Construction, Trade Cashflow')
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
                ['label' => 'Contract & Claims', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Get your claims right.<br/>Get paid',
            'dynamic_word' => 'faster.',
            'description' => 'In construction, cash flow lives or dies on progress claims. This module centralizes contracts, retentions, and variations — ensuring your claims go out with proper documentation and come back approved.',
            'hero_image' => '<svg viewBox="0 0 460 345" xmlns="http://www.w3.org/2000/svg" style="padding:20px;">
                    <rect width="460" height="345" fill="#f7faf7"></rect>
                    <rect x="16" y="16" width="428" height="313" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="36" y="46" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Progress Claim #7 — Kingsford Apartments</text>
                    <line x1="36" y1="58" x2="428" y2="58" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- KPI row -->
                    <rect x="36" y="68" width="110" height="52" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="91" y="86" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Contract value</text>
                    <text x="91" y="108" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#111110" text-anchor="middle">$2.84M</text>

                    <rect x="158" y="68" width="110" height="52" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="213" y="86" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">This claim</text>
                    <text x="213" y="108" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#111110" text-anchor="middle">$316k</text>

                    <rect x="280" y="68" width="64" height="52" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="312" y="86" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Retention</text>
                    <text x="312" y="108" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#444440" text-anchor="middle">-$16k</text>

                    <rect x="356" y="68" width="88" height="52" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="400" y="86" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">Amount due</text>
                    <text x="400" y="108" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#01C608" text-anchor="middle">$300k</text>

                    <!-- Milestone table -->
                    <text x="36" y="142" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#444440">Contract milestones — % complete</text>
                    <line x1="36" y1="148" x2="428" y2="148" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Milestones -->
                    <text x="36" y="164" font-family="DM Sans,sans-serif" font-size="11" fill="#111110">Substructure &amp; Foundations</text>
                    <rect x="260" y="155" width="100" height="12" rx="3" fill="#01C608"></rect>
                    <text x="368" y="165" font-family="DM Sans,sans-serif" font-size="11" fill="#019906">100% ✓</text>
                    <line x1="36" y1="172" x2="428" y2="172" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <text x="36" y="188" font-family="DM Sans,sans-serif" font-size="11" fill="#111110">Structure — Levels 1–6</text>
                    <rect x="260" y="179" width="80" height="12" rx="3" fill="#01C608"></rect>
                    <rect x="340" y="179" width="20" height="12" rx="3" fill="#e8e8e4"></rect>
                    <text x="368" y="189" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">80%</text>
                    <line x1="36" y1="196" x2="428" y2="196" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <text x="36" y="212" font-family="DM Sans,sans-serif" font-size="11" fill="#111110">Façade &amp; Cladding</text>
                    <rect x="260" y="203" width="36" height="12" rx="3" fill="#c2f5c3"></rect>
                    <rect x="296" y="203" width="64" height="12" rx="3" fill="#e8e8e4"></rect>
                    <text x="368" y="213" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">30%</text>
                    <line x1="36" y1="220" x2="428" y2="220" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <text x="36" y="236" font-family="DM Sans,sans-serif" font-size="11" fill="#111110">Fit-out &amp; Finishes</text>
                    <rect x="260" y="227" width="10" height="12" rx="3" fill="#e8e8e4"></rect>
                    <rect x="270" y="227" width="90" height="12" rx="3" fill="#f4f4f2"></rect>
                    <text x="368" y="237" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Not started</text>

                    <!-- Retention & SOPA -->
                    <rect x="36" y="254" width="190" height="36" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="48" y="269" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#444440">Retention held to date</text>
                    <text x="48" y="282" font-family="DM Sans,sans-serif" font-size="13" font-weight="700" fill="#111110">$89,400</text>

                    <rect x="238" y="254" width="206" height="36" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="250" y="269" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906">SOPA response deadline</text>
                    <text x="250" y="282" font-family="DM Sans,sans-serif" font-size="13" font-weight="700" fill="#017304">15 business days · 27 May</text>

                    <!-- Status bar -->
                    <rect x="36" y="304" width="392" height="16" rx="6" fill="#e8fde9"></rect>
                    <text x="232" y="316" font-family="DM Sans,sans-serif" font-size="10" fill="#017304" text-anchor="middle">✓  Claim submitted 8 May · Supporting schedule attached · Reference docs linked</text>
                </svg>',
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
            'scroll_text' => 'Explore contract logic'
        ];
        $complianceModule = [
            'intro' => [
                'badge'   => '— Contract & Progress Claims —',
                'title'   => 'Your contract, your claims, and your cash flow <span class="text-accent fraunces section-accent fw-normal">all connected</span>',
                'content' => '<p class="lead mb-4">Building a claim manually takes significant time and is easy to get wrong. This module manages your contract schedule and tracks completion at each milestone.</p>
                            <p class="small opacity-75">Produce properly documented claims automatically—so disputes are less likely and approvals come back faster.</p>'
            ],
            'features' => [
                [
                    'icon'    => 'fa-clipboard-list',
                    'title'   => 'Contract Schedule',
                    'content' => 'Your contract is entered once—milestones and values. Every claim draws directly from this schedule with no manual recalculation.'
                ],
                [
                    'icon'    => 'fa-chart-line',
                    'title'   => 'Actual Progress',
                    'content' => 'Mark milestones as completed and claims calculate automatically. See exactly what you are entitled to before you submit.'
                ],
                [
                    'icon'    => 'fa-vault',
                    'title'   => 'Retention Tracking',
                    'content' => 'Track every dollar of retention held. Know your total balance and exactly when each tranche is due for release.'
                ],
                [
                    'icon'    => 'fa-gavel',
                    'title'   => 'SOPA-Ready Docs',
                    'content' => 'Claims are timestamped and schedules attached automatically. If you need to issue a payment claim, the documentation is ready.'
                ]
            ],
            'cta' => [
                'title'    => "Ready to secure your cash flow?",
                'subtitle' => "Let's discuss how we can automate your contract claims and retention tracking.",
                'btn_text' => 'Book a Demo',
                'url'      => route('contact')
            ]
        ];
        $architectureData = [
            'bg_text' => 'CONTRACTS',
            'header' => [
                'badge_icon'  => 'fa-file-signature',
                'badge_text'  => '— SYSTEM ARCHITECTURE —',
                'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
                'description' => 'Everything you need to manage construction contracts, submit claims on time, and protect your cash flow if a payment dispute arises.'
            ],
            'features' => [
                ['title' => 'Contract schedule setup', 'icon' => 'fa-file-lines', 'desc' => 'Enter milestones, scheduled values, and payment terms once. Every claim draws from the same consistent schedule.'],
                ['title' => 'Milestone progress tracking', 'icon' => 'fa-chart-simple', 'desc' => 'Mark milestones as work progresses. The system calculates claimable amounts automatically based on actual progress.'],
                ['title' => 'Progress claim generation', 'icon' => 'fa-file-invoice-dollar', 'desc' => 'Build and submit claims in minutes. Deductions are calculated automatically and supporting documentation is attached.'],
                ['title' => 'Retention tracking', 'icon' => 'fa-vault', 'desc' => 'Retention is deducted and tracked as a running balance. Know exactly how much is held and when it is due for release.'],
                ['title' => 'SOPA payment claim support', 'icon' => 'fa-gavel', 'color' => 'danger', 'desc' => 'Claims are timestamped and reference schedules attached automatically. Response deadlines are tracked for dispute readiness.'],
                ['title' => 'Principal\'s assessment tracking', 'icon' => 'fa-magnifying-glass-chart', 'desc' => 'Record what the principal certifies. Track the difference between claimed and approved amounts across periods.'],
                ['title' => 'Supporting document storage', 'icon' => 'fa-folder-open', 'desc' => 'Attach photos and dockets directly to the claim. Everything is stored and linked—not buried in an email thread.'],
                ['title' => 'Claim history & audit trail', 'icon' => 'fa-clock-rotate-left', 'desc' => 'Every claim is stored with its full history—submitted, certified, and paid—from award to final account.'],
                ['title' => 'Linked costs & variations', 'icon' => 'fa-link', 'desc' => 'Claims connect to your cost tracker. When a variation is approved, it feeds into the next claim automatically.']
            ],
            'cta' => [
                'title'    => "Let's get connected.",
                'subtitle' => "Ready to automate your contract claims? Let's discuss your specific project requirements.",
                'btn_text' => 'Get Started',
                'url'      => route('contact')
            ]
        ];
        
        $supplierModule = [
            'intro' => [
                'badge_text' => '— CASH FLOW SECURITY —',
                'badge_icon' => 'fa-vault',
                'title'      => 'Know exactly what\'s being held and when you\'re <span class="text-accent fraunces section-accent fw-normal">getting it back</span>',
                'content'    => 'Retention is a major cash flow hurdle. Without a proper system, it\'s easy to lose track of what\'s owed or miss the tranches you\'re entitled to claim back. This module automates the deduction and tracking of every dollar held against your work.'
            ],
            'ui' => [
                'table_title' => 'Retention Ledger',
                'stats' => [
                    ['label' => 'Total Held: $42,500', 'color' => 'body'],
                    ['label' => 'Next Release: Aug 2026', 'color' => 'accent'],
                ],
                'rows' => [
                    [
                        'name' => 'Project: Northview Towers', 
                        'subtext' => 'Practical Completion Reached', 
                        'date' => '15 Aug 2026', 
                        'status' => 'Release Due', 
                        'status_color' => 'accent'
                    ],
                    [
                        'name' => 'Project: Civic Center Ph 2', 
                        'subtext' => 'Current Defects Liability Period', 
                        'date' => '22 Jan 2027', 
                        'status' => 'Held', 
                        'status_color' => 'secondary'
                    ],
                    [
                        'name' => 'Project: Industrial Wharf', 
                        'subtext' => 'Ongoing Construction', 
                        'date' => 'TBA', 
                        'status' => 'Accumulating', 
                        'status_color' => 'success'
                    ],
                ],
                'alert' => 'Notice: $15,000 Retention release eligibility for Northview Towers in 30 days.'
            ],
            'footer_features' => [
                'Automatic retention deduction calculated against each progress claim',
                'Running retention balance updated as each claim is certified',
                'Practical completion and DLP release dates tracked with automated reminders',
                'Separate retention tracking across multiple projects and subcontractors at once'
            ]
        ];

        $modulesHeader = [
            'section_class' => 'bg-body',
            'badge'          => '— Other Modules —',
            'heading_start'  => 'Explore the',
            'dynamic_word'   => 'full suite',
            'description'    => 'Contracts & Progress Claims works best alongside project management, variations, and procurement. Here\'s what else is available.',
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
            'description'    => 'Contracts & Progress Claims is built specifically for construction businesses where contract management and progress billing are central to how the business operates.',
            'primary_btn'    => [
                'text' => 'View All Industries',
                'url'  => route('industries.index'),
                'icon' => 'fa-layer-group'
            ]
        ];
        
        $industries = [
            [
                 'title' => 'Construction',
                'icon' => 'fa-helmet-safety',
                'description' => 'Manage contracts from award to final account. Submit progress claims that are properly documented and SOPA-ready, track retention across all active projects, and keep a complete claim history for every engagement.',
                'url' => route('industries.show', 'construction'),
                'column_class' => 'col-12',
                'show_cta' => true,
                'cta_text' => 'Explore Blueprint'
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