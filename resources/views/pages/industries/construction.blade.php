@extends('layouts.app')
@section('title', 'Construction ERP & Project Control | High-Fidelity Systems by Begin360')
@section('meta_title', 'Construction Architecture: Real-Time Progress Claims & Margin Integrity | Begin360')
@section('meta_description', 'Engineer sovereign project logic for your construction enterprise. From multi-tier subcontractor orchestration to rigid margin integrity and variation tracking, synchronize your site-to-office workflows with Begin360’s high-fidelity Odoo architecture.')
@section('meta_keywords', 'Construction ERP Australia, Progress Claim Automation, Subcontractor Orchestration, Project Margin Integrity, Odoo Construction Solutions, Variation Tracking Systems, Digital Build Architecture, Begin360 Operations Cloud, Enterprise Construction Logic')
@push('styles')
   <style>

   </style>
@endpush
@section('content')
    @php
        $heroData = [
            'breadcrumbs' => [
                ['label' => 'Home', 'url' => route("home"), 'active' => false],
                ['label' => 'Industries', 'url' => route('industries.index'), 'active' => false],
                ['label' => 'Construction', 'url' => null, 'active' => true],
            ],
            'badge' => 'Sector-Specific Blueprint',
            'heading_start' => 'Know exactly where every project stands',
            'dynamic_word' => 'financially',
            'description' => 'Most construction businesses find out a project has lost money when it\'s already finished. Begin360 gives builders and contractors live visibility over project costs, progress claims, subcontractors, and variations—so you can act before it\'s too late.',
            'primary_btn' => [
                'text' => 'Talk to Us',
                'url' => '#sector-architecture',
                'icon' => 'fa-phone'
            ],
            'secondary_btn' => [
                'text' => 'See How It Works',
                'url' => url('/contact'),
                'icon' => 'fa-play'
            ],
            'scroll_text' => 'Scroll to see the transformation'
        ];
        $statsData = [
            [
                'target' => 1,
                'suffix' => ' place',
                'title' => 'Centralized Source',
                'description' => 'All contracts, claims, variations, and costs in a single system.',
                'is_range' => false
            ],
            [
                'target' => 100,
                'suffix' => '%',
                'title' => 'Faster Accelerated Workflows',
                'description' => 'Progress claims submitted and approved with less back-and-forth.',
                'is_range' => false
            ],
            [
                'target' => 3,
                'target_end' => 5,
                'suffix' => ' mo',
                'title' => 'Rapid Deployment',
                'description' => 'Typical time to get your digital backbone fully up and running.',
                'is_range' => true
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

        $painPoints = [
            [
                'icon' => 'fa-chart-line',
                'title' => 'We don\'t know a project is losing money until it\'s done.',
                'content' => 'Costs come in from multiple directions—labour, materials, subcontractors, plant hire. By the time everything is reconciled, the project is finished and there\'s nothing you can do about the overrun.'
            ],
            [
                'icon' => 'fa-file-invoice-dollar',
                'title' => 'Progress claims take forever and come back with disputes.',
                'content' => 'Building a progress claim manually from scratch and waiting weeks for approval is a cash flow nightmare—especially when the client pushes back on items you can\'t easily substantiate.'
            ],
            [
                'icon' => 'fa-file-signature',
                'title' => 'Variations are everywhere and we\'re not capturing them all.',
                'content' => 'Scope changes happen on every project. By the end of a job, you\'ve done thousands of dollars of extra work that never made it onto an invoice because it wasn\'t documented on-site.'
            ],
            [
                'icon' => 'fa-helmet-safety',
                'title' => 'Subcontractor management is a constant headache.',
                'content' => 'Tracking what each subbie is owed, whether their insurances and licences are current, and whether work has been signed off across multiple sites is nearly impossible without a proper system.'
            ],
            [
                'icon' => 'fa-clipboard-check',
                'title' => 'WHS documentation is all over the place.',
                'content' => 'SWMS, incident reports, and site logs are stored in folders and emails across multiple sites. If something goes wrong, finding the documentation you need quickly is incredibly stressful.'
            ],
            [
                'icon' => 'fa-layer-group',
                'title' => 'Running multiple projects at once means things get missed.',
                'content' => 'When you\'re managing five sites simultaneously, important tasks fall through the cracks—a claim not submitted on time, a subbie not followed up, or a purchase order sent without approval.'
            ]
        ];

        $constructionSolutions = [
            [
                'sub' => '01 — Control Your Project Costs',
                'title' => 'See what every project is costing you, in real time',
                'content' => 'When every cost — labour, materials, plant, subcontractors — feeds into a single project budget as it\'s committed or incurred, you can see trouble developing weeks before it becomes a problem. That\'s time to act: have the conversation with the client, adjust resourcing, or tighten up procurement.',
                'list' => [
                    'Budget vs actual cost tracking updated as costs are committed',
                    'Cost breakdown by trade, cost code, or site area',
                    'Early warning flags when a cost category is tracking over budget',
                    'Forecasted final cost so you know where the project will land before it gets there'
                ],
                'svg' => '<svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" style="padding:24px;">
                            <rect width="480" height="360" fill="#f7faf7"></rect>
                            <rect x="20" y="20" width="440" height="320" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>
                            <text x="40" y="52" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Project Cost Report — Kingsford Apartments</text>
                            <rect x="360" y="36" width="80" height="26" rx="6" fill="#fef2f2"></rect>
                            <text x="400" y="53" font-family="DM Sans,sans-serif" font-size="11" fill="#e24b4a" text-anchor="middle">⚠ At Risk</text>
                            <line x1="40" y1="68" x2="440" y2="68" stroke="#e8e8e4" stroke-width="1"></line>
                            <text x="40" y="95" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Contract value</text>
                            <text x="40" y="115" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#111110">$2.84M</text>
                            <text x="180" y="95" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Cost to date</text>
                            <text x="180" y="115" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#111110">$1.72M</text>
                            <text x="320" y="95" font-family="DM Sans,sans-serif" font-size="10" fill="#e24b4a">Forecast final cost</text>
                            <text x="320" y="115" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#e24b4a">$2.91M</text>
                            <rect x="40" y="140" width="400" height="24" fill="#f7faf7" rx="4"></rect>
                            <text x="50" y="156" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">TRADE</text>
                            <text x="220" y="156" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">BUDGET</text>
                            <text x="320" y="156" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">ACTUAL</text>
                            <text x="410" y="156" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">VAR.</text>
                            <text x="50" y="185" font-family="DM Sans,sans-serif" font-size="11" fill="#111110">Concrete & Formwork</text>
                            <text x="220" y="185" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">$480k</text>
                            <text x="320" y="185" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">$471k</text>
                            <text x="410" y="185" font-family="DM Sans,sans-serif" font-size="11" fill="#019906">+$9k</text>
                            <rect x="40" y="200" width="400" height="28" fill="#fef2f2" opacity="0.6"></rect>
                            <text x="50" y="218" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#111110">Hydraulic Services</text>
                            <text x="220" y="218" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">$210k</text>
                            <text x="320" y="218" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">$268k</text>
                            <text x="410" y="218" font-family="DM Sans,sans-serif" font-size="11" fill="#e24b4a">-$58k</text>
                            <rect x="40" y="250" width="400" height="70" rx="8" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                            <text x="55" y="275" font-family="DM Sans,sans-serif" font-size="11" font-weight="700" fill="#ba7517">⚠ Hydraulic Services 28% over budget</text>
                            <text x="55" y="295" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Scope variation logged — awaiting client approval</text>
                            <text x="55" y="308" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">for $41,000 variation claim</text>
                        </svg>'
            ],
            [
                'sub' => '02 — Claims & Variations Without the Chaos',
                'title' => 'Get your progress claims right and get paid on time',
                'content' => 'Progress claims that go out with proper documentation, tied to clear contract milestones, get approved faster and disputed less. And when variations are logged the moment they\'re instructed — not at the end of the project — you don\'t lose revenue to work that never gets billed.',
                'list' => [
                    'Progress claims built from contract schedules with supporting cost evidence',
                    'Variation register with client instruction tracking and approval status',
                    'Retention tracking — know exactly what\'s held and when it\'s due',
                    'SOPA-ready documentation so you\'re protected if a payment dispute arises'
                ],
                'svg' => '<svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" style="padding:24px;">
                            <rect width="480" height="360" fill="#f7faf7"></rect>
                            <rect x="20" y="20" width="440" height="320" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>
                            <text x="40" y="52" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Progress Claim #6 — Kingsford Apartments</text>
                            <line x1="40" y1="64" x2="440" y2="64" stroke="#e8e8e4" stroke-width="1"></line>
                            <rect x="40" y="80" width="125" height="50" rx="8" fill="#f7faf7"></rect>
                            <text x="50" y="98" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Claim value</text>
                            <text x="50" y="120" font-family="DM Sans,sans-serif" font-size="16" font-weight="700" fill="#111110">$284k</text>
                            <rect x="175" y="80" width="125" height="50" rx="8" fill="#f7faf7"></rect>
                            <text x="185" y="98" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Less retention</text>
                            <text x="185" y="120" font-family="DM Sans,sans-serif" font-size="16" font-weight="700" fill="#e24b4a">-$14.2k</text>
                            <rect x="310" y="80" width="130" height="50" rx="8" fill="#e8fde9"></rect>
                            <text x="320" y="98" font-family="DM Sans,sans-serif" font-size="10" fill="#019906">Amount due</text>
                            <text x="320" y="120" font-family="DM Sans,sans-serif" font-size="16" font-weight="700" fill="#017304">$269.8k</text>
                            <text x="40" y="155" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#111110">Contract milestones — completion % claimed</text>
                            <text x="40" y="180" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Substructure & Foundations</text>
                            <text x="410" y="180" font-family="DM Sans,sans-serif" font-size="11" font-weight="700" fill="#019906">100% ✓</text>
                            <rect x="40" y="188" width="400" height="6" rx="3" fill="#e8e8e4"></rect>
                            <rect x="40" y="188" width="400" height="6" rx="3" fill="#01C608"></rect>
                            <text x="40" y="215" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Structure — Levels 1–4</text>
                            <text x="415" y="215" font-family="DM Sans,sans-serif" font-size="11" font-weight="700" fill="#111110">80%</text>
                            <rect x="40" y="222" width="400" height="6" rx="3" fill="#e8e8e4"></rect>
                            <rect x="40" y="222" width="320" height="6" rx="3" fill="#01C608"></rect>
                            <rect x="40" y="250" width="400" height="75" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                            <text x="55" y="270" font-family="DM Sans,sans-serif" font-size="11" font-weight="700" fill="#111110">Variation register</text>
                            <text x="55" y="290" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">VO-014 · Additional hydraulic scope</text>
                            <text x="400" y="290" font-family="DM Sans,sans-serif" font-size="10" fill="#ba7517" text-anchor="end">Pending</text>
                            <text x="55" y="310" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304">6 variations logged · $118,400 total · $76,900 approved</text>
                        </svg>'
            ],
            [
                'sub' => '03 — Subcontractors & Site Compliance',
                'title' => 'Know who\'s on your sites and whether they\'re qualified to be there',
                'content' => 'Managing a panel of subcontractors across multiple active sites — tracking their scopes, payments, insurance certificates, and licence currency — is one of the most admin-heavy parts of running a construction business. We put it all in one place so nothing slips.',
                'list' => [
                    'Subcontractor register with scope, contract value, and payment history',
                    'Insurance and licence expiry tracking with automatic alerts',
                    'SWMS and induction records stored per site and per worker',
                    'Subcontractor claim and payment scheduling tied to your own progress claims'
                ],
                'svg' => '<svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" style="padding:24px;">
                            <rect width="480" height="360" fill="#f7faf7"></rect>
                            <rect x="20" y="20" width="440" height="320" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>
                            <text x="40" y="52" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Subcontractor Compliance Register</text>
                            <line x1="40" y1="64" x2="440" y2="64" stroke="#e8e8e4" stroke-width="1"></line>
                            <rect x="40" y="80" width="400" height="60" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                            <text x="55" y="105" font-family="DM Sans,sans-serif" font-size="12" font-weight="700" fill="#111110">A-1 Formwork Pty Ltd</text>
                            <text x="55" y="125" font-family="DM Sans,sans-serif" font-size="10" fill="#017304">Scope: Structure | Insurances: Current ✓ | SWMS: Active ✓</text>
                            <rect x="40" y="150" width="400" height="60" rx="8" fill="#fef2f2" stroke="#f7c1c1" stroke-width="1"></rect>
                            <text x="55" y="175" font-family="DM Sans,sans-serif" font-size="12" font-weight="700" fill="#111110">Modern Plumbing & Civil</text>
                            <text x="55" y="195" font-family="DM Sans,sans-serif" font-size="10" fill="#e24b4a">⚠ Public Liability Expired | Payment on hold</text>
                            <rect x="40" y="230" width="120" height="50" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                            <text x="100" y="255" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#111110" text-anchor="middle">24</text>
                            <text x="100" y="270" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Active Subbies</text>
                            <rect x="180" y="230" width="120" height="50" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                            <text x="240" y="255" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#019906" text-anchor="middle">112</text>
                            <text x="240" y="270" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Site Inductions</text>
                            <rect x="320" y="230" width="120" height="50" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                            <text x="380" y="255" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#111110" text-anchor="middle">100%</text>
                            <text x="380" y="270" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">SWMS Verified</text>
                            <rect x="40" y="300" width="400" height="26" rx="6" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                            <text x="240" y="317" font-family="DM Sans,sans-serif" font-size="10" fill="#017304" text-anchor="middle">✓ Automatic expiry alerts enabled for all subcontractor panel certificates</text>
                        </svg>'
            ]
        ];

        $processData = [
            'subheading' => 'The Begin360 Process',
            'heading' => 'How we get you <br/>up and <span class="text-accent fraunces section-accent fw-normal">running</span>',
            'description' => 'A structured path from discovery to a fully operational system. No surprises, no projects that drag on with no end in sight.',
            'steps' => [
                [
                    'title' => 'Free Discovery Session',
                    'icon' => 'fa-question', // Dynamic Icon 1
                    'content' => 'We sit down with you to understand how your business works, what\'s causing pain, and what a good outcome looks like. No commitment needed.'
                ],
                [
                    'title' => 'Platform & Scope',
                    'icon' => 'fa-microchip', // Dynamic Icon 2
                    'content' => 'We recommend the right ERP for your size and budget, and give you a clear scope with honest timelines and pricing before anything starts.'
                ],
                [
                    'title' => 'Build & Configure',
                    'icon' => 'fa-layer-group', // Dynamic Icon 3
                    'content' => 'We set up the system around your products, processes, and suppliers—not a generic template. Your team is involved throughout the process.'
                ],
                [
                    'title' => 'Training & Go-Live',
                    'icon' => 'fa-tower-broadcast', // Dynamic Icon 4
                    'content' => 'We train your team hands-on and stay close during go-live. Once you\'re up and running, we\'re available for support whenever you need us.'
                ]
            ]
        ];
        $ecosystemContent = [
            'kicker' => 'Ecosystem Validation',
            'heading_start' => 'We find what',
            'heading_accent' => 'fits you.',
            'description' => 'We work across leading ERP platforms used by Australian construction businesses. Our job is to recommend the platform that fits your project types, contract complexity, and budget.',
            'cta_text' => "Not sure? Let's talk",
            'cta_link' => '#contact-form'
        ];
        $testimonialData = [
            'subheading' => 'From Our Clients',
            'heading' => 'What <span class="text-accent fraunces section-accent fw-normal">Construction</span><br/>Businesses Say',
            'description' => 'Stories from Australian builders and contractors who\'ve made the switch.',
            'testimonials' => [
                [
                    'quote' => 'We finished a $3.4 million project and made almost nothing on it. We had no idea the hydraulic scope had blown out until the final account was being written. Now we get a flag the moment a cost code hits 80% of budget — while there\'s still time to do something about it.',
                    'author' => 'Director',
                    'company' => 'Commercial Construction Company, Sydney',
                    'is_featured' => true,
                    'icon' => 'fa-calculator'
                ],
                [
                    'quote' => 'We were doing variation work and just trusting it would get picked up at the end. It wasn\'t. Begin360 showed us we\'d missed over $90,000 in variations across three projects in one year. That\'s not happening anymore.',
                    'author' => 'Project Manager',
                    'company' => 'Residential Builder, Melbourne',
                    'is_featured' => false,
                    'icon' => null
                ],
                [
                    'quote' => 'The subcontractor compliance register alone justified the investment. We had a WorkSafe inspection and had every SWMS, induction record, and insurance certificate ready in minutes. The inspector was genuinely surprised.',
                    'author' => 'Operations Manager',
                    'company' => 'Civil Contractor, Queensland',
                    'is_featured' => false,
                    'icon' => null
                ],
                [
                    'quote' => 'Begin360 didn\'t just install software; they architected a digital nervous system that adapts to our growth.',
                    'author' => 'Chief Technology Officer',
                    'company' => 'Tech Infrastructure Corp',
                    'is_featured' => true,
                    'icon' => 'fa-microchip'
                ]
            ]
        ];
        $faqs = [
            [
                'question' => 'We work across residential, commercial, and civil projects. Can one system handle all of them?',
                'answer' => 'Yes. We configure the system to reflect the different contract types, cost structures, and billing arrangements across your project types. Residential fixed-price contracts, commercial progress claims, and civil lump-sum or schedule of rates contracts can all be managed in the same system — reported on separately.'
            ],
            [
                'question' => 'Does it support the Building and Construction Industry Security of Payment Act (SOPA)?',
                'answer' => 'Yes. We configure the progress claim workflow to capture the documentation required under the relevant state SOPA legislation — claim dates, supporting schedules, and response period tracking. This doesn’t replace legal advice, but it gives you a defensible paper trail if a dispute arises.'
            ],
            [
                'question' => 'We have a lot of data in spreadsheets. Can that be migrated across?',
                'answer' => 'In most cases, yes. We work with you during the configuration phase to import existing project data, cost codes, subcontractor records, and open purchase orders. We’ll be upfront about what’s practical to migrate and what’s better to start fresh.'
            ],
            [
                'question' => 'Does it integrate with Xero or MYOB?',
                'answer' => 'Yes. We integrate with both Xero and MYOB so your project accounting data flows automatically into your accounts. Subcontractor payments, progress claim receipts, and supplier invoices are all posted without double-entry.'
            ],
            [
                'question' => 'How long does implementation take for a construction business?',
                'answer' => 'Generally 3 to 5 months, depending on the number of active projects, the complexity of your contract structures, and how much historical data needs to be migrated. We’ll give you a realistic timeline before anything starts.'
            ],
            [
                'question' => 'What does it cost?',
                'answer' => 'It depends on your business size, the platform we recommend, and the scope of work. We provide a fixed-scope quote before we start — no surprises mid-project, and no ongoing fees you didn’t agree to upfront.'
            ],
            [
                'question' => 'Do you provide internal team training?',
                'answer' => 'We provide comprehensive onboarding and hands-on training sessions specifically for site managers and office administrators to ensure your team is fully equipped to manage the new ecosystem independently.'
            ]
        ];

    @endphp
    <x-about-hero :heroData="$heroData"/>
    <x-stats :statsData="$statsData"/>
    <x-industry-pain-points
    subheading="Sound Familiar?"
    heading="The <span class='section-accent fraunces text-accent fw-light'>problems</span> every construction business owner knows"
    description="Whether you're a residential builder, commercial contractor, or specialist subcontractor—these are the financial and operational problems we hear most from construction businesses across Australia."
    :points="$painPoints"
/>
    <x-industry-solutions
    heading="And how <span class='fraunces section-accent text-accent fw-light '>Begin360</span> fix it!"
    description="We implement an ERP built around how construction businesses actually run projects — from contract award through to final account. Here are the three things that make the biggest difference."
    :points="$constructionSolutions"
/>
    <x-process-flow :processData="$processData" />
    <x-platform-selection :ecosystemContent="$ecosystemContent"/>
    <x-testimonials :testimonialData="$testimonialData"/>
    <x-custom-faqs :faqs="$faqs"/>
@endsection
@push('scripts')

@endpush
