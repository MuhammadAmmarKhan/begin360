@extends('layouts.app')
@section('title', 'Quoting & Estimating | Enterprise Calculation Engine by Begin360')
@section('meta_title', 'Quoting & Estimating Architecture: Dynamic Pricing & Margin Control | Begin360')
@section('meta_description', 'Eliminate pricing guesswork and spreadsheets. From real-time gross margin tracking to automated quote-to-job conversion, engineer accurate proposals in minutes with Begin360\'s professional estimation engine.')
@section('meta_keywords', 'Quoting Software Australia, Estimation ERP, Profit Margin Calculator, Quote to Invoice Conversion, B2B Pricing Engine, Job Costing Architecture, Enterprise Proposal Management, Professional Estimating Tool')
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
                ['label' => 'Quoting & Estimations', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Quote with confidence.<br/>Win more',
            'dynamic_word' => 'work.',
            'description' => 'Pulling a quote together from old spreadsheets, supplier lists, and memory is slow and risky. Begin360 gives you one place to build accurate quotes fast — with real costs, real margins, and a professional result you can send in minutes.',
            'hero_image' => '<svg viewBox="0 0 460 345" xmlns="http://www.w3.org/2000/svg" style="padding:16px;">
                    <rect width="460" height="345" fill="#f7faf7"></rect>
                    <rect x="16" y="16" width="428" height="313" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="36" y="44" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Quote #Q-1047 — Mango Grove Estate Pty Ltd</text>
                    <rect x="340" y="30" width="88" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="384" y="44" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">Draft</text>
                    <line x1="36" y1="56" x2="428" y2="56" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Meta row -->
                    <text x="36" y="72" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Project</text>
                    <text x="36" y="84" font-family="DM Sans,sans-serif" font-size="11" font-weight="500" fill="#444440">Winery ERP Fit-out — Stage 2</text>
                    <text x="200" y="72" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Valid Until</text>
                    <text x="200" y="84" font-family="DM Sans,sans-serif" font-size="11" font-weight="500" fill="#444440">30 Jun 2026</text>
                    <text x="340" y="72" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Contact</text>
                    <text x="340" y="84" font-family="DM Sans,sans-serif" font-size="11" font-weight="500" fill="#444440">Sarah Nguyen</text>
                    <line x1="36" y1="96" x2="428" y2="96" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Column headers -->
                    <text x="36" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">DESCRIPTION</text>
                    <text x="294" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">QTY</text>
                    <text x="340" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">RATE</text>
                    <text x="428" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880" text-anchor="end">TOTAL</text>
                    <line x1="36" y1="118" x2="428" y2="118" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Line 1 -->
                    <text x="36" y="134" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Project Management</text>
                    <text x="36" y="147" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Senior consultant, 3 days on-site</text>
                    <text x="300" y="140" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">3</text>
                    <text x="360" y="140" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">$1,800</text>
                    <text x="428" y="140" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#111110" text-anchor="end">$5,400</text>
                    <line x1="36" y1="158" x2="428" y2="158" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Line 2 -->
                    <text x="36" y="172" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">ERP Configuration</text>
                    <text x="36" y="185" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Odoo modules &amp; custom workflows</text>
                    <text x="300" y="178" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">12</text>
                    <text x="360" y="178" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">$195</text>
                    <text x="428" y="178" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#111110" text-anchor="end">$2,340</text>
                    <line x1="36" y1="196" x2="428" y2="196" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Line 3 -->
                    <text x="36" y="210" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Data Migration</text>
                    <text x="36" y="223" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Product catalogue + historical orders</text>
                    <text x="300" y="216" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">1</text>
                    <text x="360" y="216" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">$1,200</text>
                    <text x="428" y="216" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#111110" text-anchor="end">$1,200</text>
                    <line x1="36" y1="234" x2="428" y2="234" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Line 4 -->
                    <text x="36" y="248" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Staff Training</text>
                    <text x="36" y="261" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Half-day session, up to 12 users</text>
                    <text x="300" y="254" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">1</text>
                    <text x="360" y="254" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">$850</text>
                    <text x="428" y="254" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#111110" text-anchor="end">$850</text>
                    <line x1="36" y1="272" x2="428" y2="272" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Totals -->
                    <text x="340" y="288" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Subtotal</text>
                    <text x="428" y="288" font-family="DM Sans,sans-serif" font-size="11" fill="#444440" text-anchor="end">$9,790</text>
                    <text x="340" y="302" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">GST (10%)</text>
                    <text x="428" y="302" font-family="DM Sans,sans-serif" font-size="11" fill="#444440" text-anchor="end">$979</text>
                    <line x1="304" y1="308" x2="428" y2="308" stroke="#e8e8e4" stroke-width="1"></line>
                    <text x="340" y="322" font-family="DM Sans,sans-serif" font-size="13" font-weight="700" fill="#111110">Total (AUD)</text>
                    <text x="428" y="322" font-family="DM Sans,sans-serif" font-size="13" font-weight="700" fill="#01C608" text-anchor="end">$10,769</text>

                    <!-- Margin badge -->
                    <rect x="36" y="302" width="130" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="101" y="316" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">✓  Margin 38% — above minimum</text>
                </svg>', // Pass asset path here if applicable
            'primary_btn' => [
                'text' => 'Book a Demo',
                'url' => route('contact'),
                'icon' => 'fa-calendar-check'
            ],
            'secondary_btn' => [
                'text' => 'All Modules',
                'url' => route('modules.index'),
                'icon' => 'fa-th-large'
            ],
            'scroll_text' => 'Explore calculation engine'
        ];
        $complianceModule = [
            'intro' => [
                'badge'   => '— What This Module Does —',
                'title'   => 'One place to build, send, and track every quote your business  <span class="text-accent fraunces section-accent fw-normal">produces</span>',
                'content' => '<p class="fs-6 mb-4">When quoting happens in spreadsheets, old email threads, and your head, you end up guessing — at costs, at margins, at whether a client ever opened the thing you sent. And when a quote does get accepted, someone has to manually retype it into a job card or invoice, which is where errors creep in.</p>
                            <p class="fs-6 mb-4">This module gives you a single place to build quotes from live pricing data, see your margin before you send, and track what happens to every quote after it goes out. Accepted quotes convert directly into jobs and invoices — no double-entry, no information lost in the handoff.</p>
                            <p class="small opacity-75">Templates mean you\'re not rebuilding the same quote from scratch every time. Approval rules mean nothing goes out below the margin your business needs. And win/loss tracking means you can see, over time, where you\'re competitive and where you\'re not.</p>'
            ],
            'features' => [
                [
                    'icon'    => 'fa-dollar-sign', // Maps to 💰 symbol context
                    'title'   => 'Live margin, every time',
                    'content' => 'See your gross margin update in real time as you add and adjust line items. Set a minimum threshold and the system flags anything that goes below it before it\'s sent.'
                ],
                [
                    'icon'    => 'fa-bolt-lightning', // Maps to ⚡ symbol context
                    'title'   => 'Quotes built from real pricing data',
                    'content' => 'Pull from your live service catalogue and product list — no copying and pasting from old files. When prices change, your quotes reflect that automatically.'
                ],
                [
                    'icon'    => 'fa-rotate', // Maps to 🔁 symbol context
                    'title'   => 'Templates for repeat job types',
                    'content' => 'Save any quote as a reusable template. Open it, adjust the details for this client and scope, and send — what used to take an hour takes ten minutes.'
                ],
                [
                    'icon'    => 'fa-link', // Maps to 🔗 symbol context
                    'title'   => 'Connected to jobs and invoicing',
                    'content' => 'Accepted quotes convert directly into job cards and invoices. The scope, line items, and amounts are already there — no rekeying, no risk of something being lost in the handoff.'
                ]
            ],
            'cta' => [
                'title'    => "Let's get connected.",
                'subtitle' => "Ready to automate your workflows? Let's discuss your specific requirements.",
                'btn_text' => 'Get Started',
                'url'      => route('contact')
            ]
        ]; 
        $architectureData = [
            'bg_text' => 'QUOTING',
            'header' => [
                'badge_icon'  => 'fa-code-merge',
                'badge_text'  => '— SYSTEM ARCHITECTURE —',
                'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
                'description' => 'Everything you need to build, send, and track highly accurate proposals — without your team having to think about it separately from their daily work.'
            ],
            'features' => [
                [
                    'title' => 'Quote builder with live pricing', 
                    'icon'  => 'fa-list-check', // Maps to 📋
                    'desc'  => 'Build quotes from your service catalogue and product list. Every line item pulls current pricing — no manual lookups, no stale rate cards.'
                ],
                [
                    'title' => 'Quote templates', 
                    'icon'  => 'fa-bezier-curve', // Maps to 📐
                    'desc'  => 'Save any quote as a reusable template for similar jobs. Open, adjust, send. Templates can include optional and alternative line items to tailor scope quickly.'
                ],
                [
                    'title' => 'Real-time margin calculation', 
                    'icon'  => 'fa-chart-pie', // Maps to 📊
                    'desc'  => 'Every quote shows gross margin as you build it. Set minimum margin thresholds so nothing goes out below what the business needs to be viable.'
                ],
                [
                    'title' => 'Approval workflows', 
                    'icon'  => 'fa-square-check', // Maps to ✅
                    'desc'  => 'Require sign-off before quotes above a certain value — or below a margin threshold — go out. Keeps pricing decisions where they belong.'
                ],
                [
                    'title' => 'Client e-signature', 
                    'icon'  => 'fa-pen-nib', // Maps to ✍️
                    'desc'  => 'Clients can review and sign off on quotes directly from the email link — no printing, no PDFs attached to reply emails, no chasing for confirmation.'
                ],
                [
                    'title' => 'Quote-to-job conversion', 
                    'icon'  => 'fa-shuffle', // Maps to 🔀
                    'desc'  => 'When a quote is accepted, convert it to a job card in one click. Scope, team assignment, and line items carry across automatically — nothing to re-enter.'
                ],
                [
                    'title' => 'Quote-to-invoice conversion', 
                    'icon'  => 'fa-file-invoice-dollar', // Maps to 🧾
                    'desc'  => 'Generate an invoice directly from an accepted quote. The line items, amounts, and client details are already correct — ready to send immediately.'
                ],
                [
                    'title' => 'Win/loss tracking', 
                    'icon'  => 'fa-chart-line', // Maps to 📈
                    'desc'  => 'Record the outcome of every quote — won, lost, declined, or lapsed. Understand your conversion rate by job type, client type, or team member over time.'
                ],
                [
                    'title' => 'Branded quote output', 
                    'icon'  => 'fa-palette', // Maps to 🎨
                    'desc'  => 'Quotes are generated with your logo, colours, and layout — professional PDF output that looks like it came from a business that has its act together.'
                ]
            ],
            'cta' => [
                'title'    => "Let's get connected.",
                'subtitle' => "Ready to automate your quoting workflow? Let's discuss your requirements.",
                'btn_text' => 'Get Started',
                'url'      => route('contact')
            ]
        ];        
        $supplierModule = [
            'intro' => [
                'badge_text' => '— MARGIN VISIBILITY —',
                'badge_icon' => 'fa-eye',
                'title'      => 'Know your margin before you hit <span class="text-accent fraunces section-accent fw-normal">send</span>',
                'content'    => 'The most common way businesses undercharge isn\'t bad intentions — it\'s not having the cost picture in front of them when the quote goes out. Begin360 shows you gross margin in real time as you build every quote, with a clear minimum threshold so nothing goes out below what the business needs.'
            ],
            'ui' => [
                'table_title' => 'Quote Margin Summary — Q-1047',
                'stats' => [
                    ['label' => '38% Gross Margin', 'color' => 'success'],
                    ['label' => 'Min 25%', 'color' => 'secondary'],
                    ['label' => '✓ Above min', 'color' => 'success'],
                ],
                'rows' => [
                    [
                        'name' => 'Labour', 
                        'subtext' => 'Cost breakdown item', 
                        'date' => '', 
                        'status' => '$4,200', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Overheads', 
                        'subtext' => 'Cost breakdown item', 
                        'date' => '', 
                        'status' => '$890', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Software licences', 
                        'subtext' => 'Cost breakdown item', 
                        'date' => '', 
                        'status' => '$600', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Total cost', 
                        'subtext' => 'Aggregated financial cost', 
                        'date' => '', 
                        'status' => '$5,690', 
                        'status_color' => 'secondary'
                    ],
                    [
                        'name' => 'Quote value', 
                        'subtext' => 'Customer facing price', 
                        'date' => '', 
                        'status' => '$9,790', 
                        'status_color' => 'accent'
                    ],
                    [
                        'name' => 'Gross profit', 
                        'subtext' => 'Retained earnings value', 
                        'date' => '', 
                        'status' => '$4,100', 
                        'status_color' => 'success'
                    ],
                ],
                'alert' => 'Apply discount: Max 10% without manager approval (Currently set to 0%)'
            ],
            'footer_features' => [
                'Live gross margin shown as you add and adjust line items',
                'Cost vs price split visible for every line on the quote',
                'Minimum margin warning before the quote can be sent',
                'Discount controls with manager approval rules for anything above a set threshold'
            ]
        ];
        $modulesHeader = [
            'section_class' => 'bg-body',
            'badge'          => '— Other Modules —',
            'heading_start'  => 'Explore the',
            'dynamic_word'   => 'full suite',
            'description'    => 'Quoting & Estimating works at its best when connected to job management, scheduling, finance, and your client records. Here\'s what else is available.',
            'primary_btn'    => [
                'text' => 'View All Modules',
                'url'  => route('modules.index'),
                'icon' => 'fa-layer-group'
            ]
        ];
        $modules = [
            [
                'title'        => 'Compliance & Traceability',
                'icon'         => 'fa-clipboard-check',
                'description'  => 'Rigid regulatory adherence and high-fidelity product tracking across the entire supply chain lifecycle.',
                'url'          => route('modules.show', 'compliance'),
                'column_class' => 'col-10 col-md-8 col-xl-8',
                'show_cta'     => true,
                'features'     => ['Recall Readiness', 'Audit Trails', 'Certificate Management']
            ],
            [
                'title'        => 'Contracts & Progress Claims',
                'icon'         => 'fa-file-signature',
                'description'  => 'Streamline contract administration and progress claims while staying SOPA-ready and tracking retentions.',
                'url'          => route('modules.show', 'contracts'),
                'column_class' => 'col-10 col-md-8 col-xl-4',
                'show_cta'     => true,
                'features'     => ['SOPA Compliance', 'Retention Tracking', 'Automated Claims']
            ],
            [
                'title'        => 'Customer Management',
                'icon'         => 'fa-users-gear',
                'description'  => 'Unified customer intelligence to foster deep engagement and long-term ecosystem loyalty.',
                'url'          => route('modules.show', 'crm'),
                'column_class' => 'col-10 col-md-8 col-xl-4',
                'show_cta'     => true,
                'features'     => ['360° Interaction History', 'Pipeline Management', 'Loyalty Engines']
            ],
            [
                'title'        => 'Finance & Accounting',
                'icon'         => 'fa-calculator',
                'description'  => 'Integrated fiscal infrastructure providing mathematical precision for enterprise-grade reporting and GST compliance.',
                'url'          => route('modules.show', 'finance'),
                'column_class' => 'col-10 col-md-8 col-xl-4',
                'show_cta'     => true,
                'features'     => ['Xero/MYOB Sync', 'Project-level P&L', 'Automated Invoicing']
            ],
            [
                'title'        => 'Inventory Management',
                'icon'         => 'fa-boxes-stacked',
                'description'  => 'Sovereign control over your entire supply chain with real-time architectural visibility across all locations.',
                'url'          => route('modules.show', 'inventory'),
                'column_class' => 'col-10 col-md-8 col-xl-4',
                'show_cta'     => true,
                'features'     => ['Multi-location Sync', 'Batch & Serial Tracking', 'Auto-Replenishment']
            ],
            [
                'title'        => 'Job Management',
                'icon'         => 'fa-list-check',
                'description'  => 'End-to-end field oversight from initial enquiry through to digital sign-off and site-note documentation.',
                'url'          => route('modules.show', 'job-management'),
                'column_class' => 'col-10 col-md-8 col-xl-6',
                'show_cta'     => true,
                'features'     => ['Job Cards', 'Digital Sign-off', 'Photo Attachments']
            ],
            [
                'title'        => 'Order Management',
                'icon'         => 'fa-cart-flatbed',
                'description'  => 'Seamless omnichannel orchestration for complex transaction flows across retail, wholesale, and digital channels.',
                'url'          => route('modules.show', 'orders'),
                'column_class' => 'col-10 col-md-8 col-xl-3',
                'show_cta'     => true,
                'features'     => ['Omnichannel Sync', 'Fulfilment Routing', 'Returns Management']
            ],
            [
                'title'        => 'Point of Sale',
                'icon'         => 'fa-cash-register',
                'description'  => 'A modern checkout experience that feeds directly into your inventory and accounting infrastructure.',
                'url'          => route('modules.show', 'pos'),
                'column_class' => 'col-10 col-md-8 col-xl-3',
                'show_cta'     => true,
                'features'     => ['Offline Mode', 'Integrated Payments', 'Gift Cards']
            ],
            [
                'title'        => 'Procurement',
                'icon'         => 'fa-file-invoice-dollar',
                'description'  => 'Automated sourcing and high-fidelity vendor synchronization for precision-engineered acquisition flows.',
                'url'          => route('modules.show', 'procurement'),
                'column_class' => 'col-10 col-md-8 col-xl-4',
                'show_cta'     => true,
                'features'     => ['Supplier Portals', '3-Way Matching', 'Purchase Order Automation']
            ],
            [
                'title'        => 'Project Management',
                'icon'         => 'fa-diagram-project',
                'description'  => 'Manage complex project lifecycles from contract award to practical completion with integrated cost-coding.',
                'url'          => route('modules.show', 'project-management'),
                'column_class' => 'col-10 col-md-8 col-xl-4',
                'show_cta'     => true,
                'features'     => ['Milestone Tracking', 'Resource Allocation', 'Budget vs Actuals']
            ],
            [
                'title'        => 'Quoting & Estimating',
                'icon'         => 'fa-file-lines',
                'description'  => 'Rapidly generate accurate estimates using standard rate templates and material cost-logic.',
                'url'          => route('modules.index'),
                'column_class' => 'col-10 col-md-8 col-xl-4',
                'show_cta'     => true,
                'features'     => ['Rate Templates', 'Quote-to-Job conversion', 'Version Control']
            ],
            [
                'title'        => 'Resource Planning',
                'icon'         => 'fa-calendar-check',
                'description'  => 'Analyze utilization and capacity to optimize team performance and avoid engagement bottlenecks.',
                'url'          => route('modules.index'),
                'column_class' => 'col-10 col-md-8 col-xl-3',
                'show_cta'     => true,
                'features'     => ['Utilisation Views', 'Skill Matching', 'Capacity Forecasting']
            ],
            [
                'title'        => 'Scheduling & Dispatch',
                'icon'         => 'fa-clock-rotate-left',
                'description'  => 'Live resource coordination to ensure the right team is at the right site at the right time.',
                'url'          => route('modules.index'),
                'column_class' => 'col-10 col-md-8 col-xl-3',
                'show_cta'     => true,
                'features'     => ['Drag-and-Drop Calendar', 'Field Notifications', 'GPS Routing']
            ],
            [
                'title'        => 'Subcontractor Management',
                'icon'         => 'fa-user-group',
                'description'  => 'Maintain a rigid register of subcontractors with automated insurance, licence, and SWMS tracking.',
                'url'          => route('modules.index'),
                'column_class' => 'col-10 col-md-8 col-xl-3',
                'show_cta'     => true,
                'features'     => ['Compliance Alerts', 'SWMS Register', 'Insurance Tracking']
            ],
            [
                'title'        => 'Time Tracking & Billing',
                'icon'         => 'fa-stopwatch',
                'description'  => 'Capture every billable minute with precision and link time directly to project cost codes.',
                'url'          => route('modules.index'),
                'column_class' => 'col-10 col-md-8 col-xl-3',
                'show_cta'     => true,
                'features'     => ['Mobile Timesheets', 'GPS Geofencing', 'Payroll Integration']
            ],
            [
                'title'        => 'Variation Management',
                'icon'         => 'fa-code-branch',
                'description'  => 'Capture and approve project variations in real-time to prevent unbilled scope-creep.',
                'url'          => route('modules.index'),
                'column_class' => 'col-10 col-md-8 col-xl-6',
                'show_cta'     => true,
                'features'     => ['Approval Workflows', 'Cost Impact Analysis', 'Variation Register']
            ],
            [
                'title'        => 'Warehouse Management',
                'icon'         => 'fa-warehouse',
                'description'  => 'Optimizing spatial efficiency and labor throughput through advanced logic-driven WMS architecture.',
                'url'          => route('modules.index'),
                'column_class' => 'col-10 col-md-8 col-xl-6',
                'show_cta'     => true,
                'features'     => ['Bin Management', 'Pick/Pack/Ship', 'Digital Manifests']
            ],
            [
                'title'        => 'Custom Architecture?',
                'icon'         => 'fa-microchip',
                'description'  => 'Seeking a specialized operational framework? We engineer bespoke solutions for complex enterprise visions.',
                'url'          => url('/contact'),
                'column_class' => 'col-10 col-md-8 col-xl-12',
                'show_cta'     => true,
                'featured'     => true,
                'cta_text'     => 'Start a Consultation'
            ]
        ];
        $industryHeader = [
            'section_class' => 'bg-body-tertiary',
            'badge'          => '— Sectors We Transform —',
            'heading_start'  => 'Which industries use this',
            'dynamic_word'   => 'module?',
            'description'    => 'Quoting & Estimating is used across trades, professional services, construction, and any business that needs to price work before it starts — whether that\'s a two-hour job or a six-month project.',
            'primary_btn'    => [
                'text' => 'View All Industries',
                'url'  => route('industries.index'),
                'icon' => 'fa-layer-group'
            ]
        ];
        $industries = [
            [
                'title' => 'Trades & Field Services',
                'icon' => 'fa-screwdriver-wrench', // 🔧
                'description' => 'Quote labour, callout fees, materials, and travel in one document. Win more jobs with faster turnaround and know your margin before you schedule the work.',
                'url' => route('industries.show', 'trades'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Professional Services',
                'icon' => 'fa-briefcase', // 💼
                'description' => 'Fixed-fee, time-and-materials, or retainer — quote any engagement structure with built-in scope controls and a professional result you can send in minutes.',
                'url' => route('industries.show', 'professional-services'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Construction',
                'icon' => 'fa-helmet-safety', // 🏗️
                'description' => 'Multi-stage quotes with provisional sums, subcontractor costs, and materials tracking. Convert accepted quotes directly into contracts and purchase orders.',
                'url' => route('industries.show', 'construction'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Food & Beverage',
                'icon' => 'fa-wine-glass', // 🍷
                'description' => 'Quote wholesale supply agreements, custom production runs, and bulk orders with accurate cost-of-goods and margin rules built into every line item.',
                'url' => route('industries.show', 'food-beverage'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ]
        ];                
    @endphp
    <x-about-hero :heroData="$heroData"/>
    <x-traceability :data="$complianceModule" class="py-5" />   
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