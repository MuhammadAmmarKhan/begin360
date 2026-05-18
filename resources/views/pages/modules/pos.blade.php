@extends('layouts.app')
@section('title', 'POS Architecture & Retail Transaction Control | Begin360')
@section('meta_title', 'Advanced Point of Sale System & Unified Retail Sync | Begin360')
@section('meta_description', 'Sell everywhere, manage in one place. Experience high-fidelity retail with Begin360’s POS architecture—offering real-time inventory sync, offline reliability, and seamless multi-store management.')
@section('meta_keywords', 'Cloud POS System Australia, Retail Point of Sale Software, Multi-store POS Sync, iPad POS Solutions, Offline POS Capability, Odoo POS Customization, Retail Inventory Integration, Customer Loyalty POS, Integrated EFTPOS Australia')
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
                ['label' => 'Point of Sale', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Sell in store. Know ',
            'dynamic_word' => 'everything.',
            'description' => "Most retail POS systems are good at taking payments. What they're not good at is talking to the rest of your business. Every sale updates your inventory, your accounts, and your customer record in real time — so by the time you close up at the end of the day, your books are up to date, your stock count is accurate, and you know exactly what sold.",
            'hero_image' => '<svg viewBox="0 0 460 345" xmlns="http://www.w3.org/2000/svg" style="padding:20px;">
                    <rect width="460" height="345" fill="#f7faf7"></rect>
                    <rect x="16" y="16" width="428" height="313" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="36" y="46" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Point of Sale — Store 1, 8 May</text>
                    <rect x="340" y="30" width="104" height="24" rx="6" fill="#e8fde9"></rect>
                    <text x="392" y="46" font-family="DM Sans,sans-serif" font-size="11" fill="#019906" text-anchor="middle">Session open ●</text>
                    <line x1="36" y1="58" x2="428" y2="58" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Current basket -->
                    <text x="36" y="76" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#444440">Current sale</text>

                    <!-- Items -->
                    <text x="36" y="94" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Merino Crew Neck — Navy / M</text>
                    <text x="380" y="94" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#111110" text-anchor="end">$90.00</text>
                    <line x1="36" y1="100" x2="428" y2="100" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <text x="36" y="116" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Canvas Tote — Natural  ×2</text>
                    <text x="380" y="116" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#111110" text-anchor="end">$80.00</text>
                    <line x1="36" y1="122" x2="428" y2="122" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <text x="36" y="138" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Running Shoe — Black / 10</text>
                    <text x="380" y="138" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#111110" text-anchor="end">$140.00</text>
                    <line x1="36" y1="144" x2="428" y2="144" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Subtotal -->
                    <text x="36" y="160" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Subtotal</text>
                    <text x="380" y="160" font-family="DM Sans,sans-serif" font-size="11" fill="#888880" text-anchor="end">$310.00</text>
                    <text x="36" y="174" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">GST (included)</text>
                    <text x="380" y="174" font-family="DM Sans,sans-serif" font-size="11" fill="#888880" text-anchor="end">$28.18</text>
                    <line x1="36" y1="182" x2="428" y2="182" stroke="#e8e8e4" stroke-width="1"></line>

                    <text x="36" y="200" font-family="DM Sans,sans-serif" font-size="14" font-weight="700" fill="#111110">Total</text>
                    <text x="380" y="200" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#01C608" text-anchor="end">$310.00</text>

                    <!-- Payment buttons -->
                    <rect x="36" y="212" width="118" height="32" rx="8" fill="#01C608"></rect>
                    <text x="95" y="232" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="white" text-anchor="middle">Card</text>
                    <rect x="166" y="212" width="118" height="32" rx="8" fill="#f4f4f2"></rect>
                    <text x="225" y="232" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#444440" text-anchor="middle">Cash</text>
                    <rect x="296" y="212" width="118" height="32" rx="8" fill="#f4f4f2"></rect>
                    <text x="355" y="232" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#444440" text-anchor="middle">Loyalty</text>

                    <!-- Session summary -->
                    <line x1="36" y1="258" x2="428" y2="258" stroke="#e8e8e4" stroke-width="0.5"></line>
                    <text x="36" y="274" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#444440">Today\'s session</text>

                    <rect x="36" y="282" width="110" height="32" rx="7" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="91" y="294" font-family="DM Sans,sans-serif" font-size="9" fill="#888880" text-anchor="middle">Transactions</text>
                    <text x="91" y="308" font-family="DM Sans,sans-serif" font-size="13" font-weight="700" fill="#111110" text-anchor="middle">34</text>

                    <rect x="160" y="282" width="110" height="32" rx="7" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="215" y="294" font-family="DM Sans,sans-serif" font-size="9" fill="#888880" text-anchor="middle">Revenue</text>
                    <text x="215" y="308" font-family="DM Sans,sans-serif" font-size="13" font-weight="700" fill="#111110" text-anchor="middle">$4,820</text>

                    <rect x="284" y="282" width="144" height="32" rx="7" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="356" y="294" font-family="DM Sans,sans-serif" font-size="9" fill="#019906" text-anchor="middle">Inventory synced</text>
                    <text x="356" y="308" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#017304" text-anchor="middle">✓ Real time</text>
                </svg>', // Placeholder for your POS-themed glassware asset
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
            'scroll_text' => 'Explore POS architecture'
        ];
        $complianceModule = [
            'intro' => [
                'badge'   => '— POS Architecture —',
                'title'   => 'A POS that\'s actually connected to the rest of your <span class="text-accent fraunces section-accent fw-normal">business</span>',
                'content' => '<p class="lead mb-4">Most point of sale systems do one thing well — they take payments. But they sit completely separately from your inventory, your accounts, and your online store. Every time something is sold in store, someone has to update a spreadsheet, reconcile the till, and figure out which products need reordering. That\'s hours of admin that doesn\'t need to happen.</p>
                            <p class="small opacity-75">This POS connects directly to your inventory, your accounts, and your online store. When you sell a pair of shoes in store, the stock count drops immediately — across every channel. The sale posts to your accounts automatically. If the same customer shops online later, their purchase history is right there. Nothing needs to be reconciled manually at the end of the day. It works on a tablet or touch screen, handles offline sales if your internet drops, and is simple enough that any new staff member can learn it in an hour.</p>'
            ],
            'features' => [
                [
                    'icon'    => 'fa-boxes-stacked',
                    'title'   => 'Every sale updates your stock in real time',
                    'content' => 'Sell something in store and your inventory count drops immediately — in your online store, your warehouse view, and your stock reports. No separate stock sync needed.'
                ],
                [
                    'icon'    => 'fa-file-invoice-dollar',
                    'title'   => 'Sales post to your accounts automatically',
                    'content' => 'Every transaction — card, cash, or loyalty — is recorded and posted to your accounts automatically. GST is calculated. End of day reconciliation takes minutes, not hours.'
                ],
                [
                    'icon'    => 'fa-users',
                    'title'   => 'Customer profiles and purchase history in every sale',
                    'content' => 'Look up a customer at the point of sale and see their full purchase history, loyalty balance, and any notes. Recognise your best customers and give them the service they deserve.'
                ],
                [
                    'icon'    => 'fa-wifi',
                    'title'   => 'Works offline — sales keep going if the internet drops',
                    'content' => 'The POS keeps processing sales if your connection goes down. Everything syncs back to the system automatically once you\'re back online. No lost transactions, no awkward moments.'
                ]
            ],
            'cta' => [
                'title'    => "Ready for a truly connected POS?",
                'subtitle' => "Let's discuss how we can unify your in-store sales with your inventory and accounting architecture.",
                'btn_text' => 'Book a Demo',
                'url'      => route('contact')
            ]
        ];
        $architectureData = [
            'bg_text' => 'POS',
            'header' => [
                'badge_icon'  => 'fa-shop',
                'badge_text'  => '— SYSTEM ARCHITECTURE —',
                'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
                'description' => 'Everything you need to run a fast, connected in-store experience — without the spreadsheets, the manual stock updates, and the end-of-day reconciliation headaches.'
            ],
            'features' => [
                [
                    'title' => 'Touch-screen POS interface', 
                    'icon'  => 'fa-tablet-screen-button', 
                    'desc'  => 'A clean, fast interface built for tablets and touch screens. Scan barcodes, search products, apply discounts, and process payments — all without leaving the sale.'
                ],
                [
                    'title' => 'Card, cash & split payments', 
                    'icon'  => 'fa-credit-card', 
                    'desc'  => 'Accept card, cash, gift cards, and loyalty points — individually or split across multiple payment methods in a single transaction. No separate terminal needed.'
                ],
                [
                    'title' => 'Real-time inventory sync', 
                    'icon'  => 'fa-arrows-rotate', 
                    'desc'  => 'Every sale updates your stock count instantly — in your back office, your online store, and any other locations. No manual syncing, no discrepancies, no overselling.'
                ],
                [
                    'title' => 'Offline mode', 
                    'icon'  => 'fa-wifi', 
                    'desc'  => 'If your internet connection drops, the POS keeps working. Sales are stored locally and synced automatically when you\'re back online — no lost transactions.'
                ],
                [
                    'title' => 'Gift cards & loyalty programmes', 
                    'icon'  => 'fa-gift', 
                    'desc'  => 'Issue and redeem gift cards. Enrol customers in a loyalty programme and track points — visible at every sale so staff can apply rewards without any manual look-up.'
                ],
                [
                    'title' => 'Customer lookup at point of sale', 
                    'icon'  => 'fa-user-tag', 
                    'desc'  => 'Search for a customer during a sale and see their full purchase history, loyalty balance, and preferences. Link every transaction to a customer record automatically.'
                ],
                [
                    'title' => 'Multi-store support', 
                    'icon'  => 'fa-store', 
                    'desc'  => 'Run multiple POS terminals across multiple stores from one system. Sales, stock, and reports are consolidated across every location in real time.'
                ],
                [
                    'title' => 'End-of-day reports', 
                    'icon'  => 'fa-chart-simple', 
                    'desc'  => 'See a full summary of every session — transactions, revenue, payment methods, top-selling products, and any discounts applied — with one click at the end of the day.'
                ],
                [
                    'title' => 'Connected to accounts & online store', 
                    'icon'  => 'fa-link', 
                    'desc'  => 'Sales post to your accounts automatically. Stock syncs with your online store. Everything flows through one system — no separate reconciliation needed at month end.'
                ]
            ],
            'cta' => [
                'title'    => "Let's get connected.",
                'subtitle' => "Ready to automate your operational intelligence? Let's discuss your specific point of sale workflow.",
                'btn_text' => 'Get Started',
                'url'      => route('contact')
            ]
        ];
        
       $supplierModule = [
            'intro' => [
                'badge_text' => '— RETAIL INTELLIGENCE —',
                'badge_icon' => 'fa-chart-pie',
                'title'      => 'Close the day in minutes, not an hour of <span class="text-accent fraunces section-accent fw-normal">reconciling</span>',
                'content'    => 'The end-of-day session report gives you a complete picture of what happened in store — revenue, transactions, payment methods, top products, and any discounts or refunds. Everything is already calculated because every sale was recorded as it happened. There is no reconciliation. You review the numbers, close the session, and go home.'
            ],
            'ui' => [
                'table_title' => 'Session Report — Store 1, 8 May',
                'stats' => [
                    ['label' => 'Total revenue: $5,130', 'color' => 'body'],
                    ['label' => 'Session closed ✓', 'color' => 'success'],
                ],
                'rows' => [
                    [
                        'name' => 'Card (EFTPOS)', 
                        'subtext' => '38 Transactions · $135 Avg. Value', 
                        'date' => '76% of mix', 
                        'status' => '$3,890', 
                        'status_color' => 'body'
                    ],
                    [
                        'name' => 'Cash', 
                        'subtext' => 'In-store physical tender', 
                        'date' => '16% of mix', 
                        'status' => '$820', 
                        'status_color' => 'body'
                    ],
                    [
                        'name' => 'Gift card / Loyalty', 
                        'subtext' => 'Internal credit redemptions', 
                        'date' => '8% of mix', 
                        'status' => '$420', 
                        'status_color' => 'body'
                    ],
                    [
                        'name' => 'Running Shoe — Black / 10', 
                        'subtext' => 'Top product today', 
                        'date' => '8 sold', 
                        'status' => '$1,120', 
                        'status_color' => 'success'
                    ],
                ],
                'alert' => '✓ Posted to Xero · Inventory updated · GST calculated automatically'
            ],
            'footer_features' => [
                'Total revenue, transactions, and average sale value at a glance',
                'Breakdown by payment method — card, cash, gift card, loyalty',
                'Top-selling products for the session so you know what\'s moving',
                'Any discounts, refunds, or voids recorded with reason codes'
            ]
        ];

        $modulesHeader = [
            'section_class' => 'bg-body',
            'badge'          => '— Other Modules —',
            'heading_start'  => 'Explore the',
            'dynamic_word'   => 'full suite',
            'description'    => 'Point of Sale works best as part of a connected system. Here\'s what it plugs into.',
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
                'url'          => route('modules.show', 'quoting-and-estimating'),
                'column_class' => 'col-10 col-md-8 col-xl-4',
                'show_cta'     => true,
                'features'     => ['Rate Templates', 'Quote-to-Job conversion', 'Version Control']
            ],
            [
                'title'        => 'Resource Planning',
                'icon'         => 'fa-calendar-check',
                'description'  => 'Analyze utilization and capacity to optimize team performance and avoid engagement bottlenecks.',
                'url'          => route('modules.show', 'resource-planning'),
                'column_class' => 'col-10 col-md-8 col-xl-3',
                'show_cta'     => true,
                'features'     => ['Utilisation Views', 'Skill Matching', 'Capacity Forecasting']
            ],
            [
                'title'        => 'Scheduling & Dispatch',
                'icon'         => 'fa-clock-rotate-left',
                'description'  => 'Live resource coordination to ensure the right team is at the right site at the right time.',
                'url'          => route('modules.show', 'scheduling-dispatch'),
                'column_class' => 'col-10 col-md-8 col-xl-3',
                'show_cta'     => true,
                'features'     => ['Drag-and-Drop Calendar', 'Field Notifications', 'GPS Routing']
            ],
            [
                'title'        => 'Subcontractor Management',
                'icon'         => 'fa-user-group',
                'description'  => 'Maintain a rigid register of subcontractors with automated insurance, licence, and SWMS tracking.',
                'url'          => route('modules.show', 'subcontractor-management'),
                'column_class' => 'col-10 col-md-8 col-xl-3',
                'show_cta'     => true,
                'features'     => ['Compliance Alerts', 'SWMS Register', 'Insurance Tracking']
            ],
            [
                'title'        => 'Time Tracking & Billing',
                'icon'         => 'fa-stopwatch',
                'description'  => 'Capture every billable minute with precision and link time directly to project cost codes.',
                'url'          => route('modules.show', 'time-tracking'),
                'column_class' => 'col-10 col-md-8 col-xl-3',
                'show_cta'     => true,
                'features'     => ['Mobile Timesheets', 'GPS Geofencing', 'Payroll Integration']
            ],
            [
                'title'        => 'Variation Management',
                'icon'         => 'fa-code-branch',
                'description'  => 'Capture and approve project variations in real-time to prevent unbilled scope-creep.',
                'url'          => route('modules.show', 'variations'),
                'column_class' => 'col-10 col-md-8 col-xl-6',
                'show_cta'     => true,
                'features'     => ['Approval Workflows', 'Cost Impact Analysis', 'Variation Register']
            ],
            [
                'title'        => 'Warehouse Management',
                'icon'         => 'fa-warehouse',
                'description'  => 'Optimizing spatial efficiency and labor throughput through advanced logic-driven WMS architecture.',
                'url'          => route('modules.show', 'warehouse-management'),
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
            'dynamic_word'   => 'module',
            'description'    => 'Point of Sale is used by retail businesses with a physical store presence — whether that\'s a single boutique or a multi-location chain.',
            'primary_btn'    => [
                'text' => 'View All Industries',
                'url'  => route('industries.index'),
                'icon' => 'fa-layer-group'
            ]
        ];
        
        $industries = [
            [
                'title' => 'Retail',
                'icon' => 'fa-basket-shopping',
                'description' => 'Scalable omnichannel ecosystems designed to synchronize high-volume retail flows and sovereign inventory control.',
                'url' => route('industries.show', 'retail'),
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