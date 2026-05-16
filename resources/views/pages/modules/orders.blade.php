@extends('layouts.app')
@section('title', 'Order Architecture & Sales Fulfillment Control | Begin360')
@section('meta_title', 'Advanced Order Management & Procurement Automation | Begin360')
@section('meta_description', 'Streamline your sales lifecycle. Automate quotes, purchase orders, and fulfillment with Begin360’s high-fidelity order architecture designed for seamless commerce and trade operations.')
@section('meta_keywords', 'Order Management System Australia, Sales Order Automation, Procurement Software, Purchase Order Tracking, B2B Order Processing, Automated Quoting, Fulfillment Logic, Odoo Sales Customization, Backorder Management')
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
                ['label' => 'Order Management', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Every order, every channel.',
            'dynamic_word' => 'One place.',
            'description' => "When orders come in from a website, a phone call, a wholesale portal, and a café down the road, keeping track of them across different systems means things get missed, stock goes out of sync, and someone inevitably sends a \"where's my order?\" email you have no good answer for. This module brings every order into one place — so your team always knows what's been ordered, what's been picked, and what's gone out the door.",
            'hero_image' => '<svg viewBox="0 0 460 345" xmlns="http://www.w3.org/2000/svg" style="padding:20px;">
                    <rect width="460" height="345" fill="#f7faf7"></rect>
                    <rect x="16" y="16" width="428" height="313" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="36" y="46" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Order Management — All Channels</text>
                    <rect x="348" y="30" width="96" height="24" rx="6" fill="#e8fde9"></rect>
                    <text x="396" y="46" font-family="DM Sans,sans-serif" font-size="11" fill="#019906" text-anchor="middle">Live ●</text>
                    <line x1="36" y1="58" x2="428" y2="58" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Channel summary pills -->
                    <rect x="36" y="66" width="82" height="22" rx="11" fill="#f4f4f2"></rect>
                    <text x="77" y="81" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880" text-anchor="middle">Online  8</text>
                    <rect x="128" y="66" width="86" height="22" rx="11" fill="#f4f4f2"></rect>
                    <text x="171" y="81" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880" text-anchor="middle">Wholesale  5</text>
                    <rect x="224" y="66" width="92" height="22" rx="11" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                    <text x="270" y="81" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">Foodservice  3</text>
                    <rect x="326" y="66" width="78" height="22" rx="11" fill="#fcebeb" stroke="#f7c1c1" stroke-width="1"></rect>
                    <text x="365" y="81" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#e24b4a" text-anchor="middle">Overdue  2</text>

                    <!-- Order table -->
                    <line x1="36" y1="96" x2="428" y2="96" stroke="#e8e8e4" stroke-width="0.5"></line>
                    <text x="36" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">ORDER</text>
                    <text x="168" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">CUSTOMER</text>
                    <text x="278" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">CHANNEL</text>
                    <text x="350" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">STATUS</text>
                    <line x1="36" y1="118" x2="428" y2="118" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Order 1 -->
                    <text x="36" y="136" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">#ORD-2891</text>
                    <text x="36" y="149" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">$1,240 · 12 items</text>
                    <text x="168" y="141" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Café Luna</text>
                    <text x="278" y="141" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Wholesale</text>
                    <rect x="348" y="129" width="66" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="381" y="143" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">Dispatched</text>
                    <line x1="36" y1="158" x2="428" y2="158" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Order 2 -->
                    <text x="36" y="176" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">#ORD-2892</text>
                    <text x="36" y="189" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">$89 · 3 items</text>
                    <text x="168" y="181" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Sarah K.</text>
                    <text x="278" y="181" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Online</text>
                    <rect x="351" y="169" width="60" height="20" rx="10" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                    <text x="381" y="183" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">Picking</text>
                    <line x1="36" y1="198" x2="428" y2="198" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Order 3 — overdue -->
                    <rect x="36" y="198" width="392" height="30" fill="#fef2f2" opacity="0.4"></rect>
                    <text x="36" y="216" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">#ORD-2887</text>
                    <text x="36" y="229" font-family="DM Sans,sans-serif" font-size="10" fill="#e24b4a">$2,860 · due yesterday</text>
                    <text x="168" y="221" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">The Daily Table</text>
                    <text x="278" y="221" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Foodservice</text>
                    <rect x="357" y="209" width="60" height="20" rx="10" fill="#fcebeb"></rect>
                    <text x="387" y="223" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#e24b4a" text-anchor="middle">⚠ Overdue</text>
                    <line x1="36" y1="236" x2="428" y2="236" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Order 4 -->
                    <text x="36" y="254" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">#ORD-2894</text>
                    <text x="36" y="267" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">$3,100 · 28 items</text>
                    <text x="168" y="259" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Greenway Café</text>
                    <text x="278" y="259" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Wholesale</text>
                    <rect x="348" y="247" width="66" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="381" y="261" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">Confirmed</text>

                    <!-- Footer bar -->
                    <rect x="36" y="290" width="392" height="26" rx="8" fill="#fcebeb" stroke="#f7c1c1" stroke-width="1"></rect>
                    <text x="232" y="307" font-family="DM Sans,sans-serif" font-size="11" fill="#a32d2d" text-anchor="middle">⚠  ORD-2887 overdue — The Daily Table has not received fulfilment confirmation</text>
                </svg>', // Placeholder for your order-themed glassware asset
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
            'scroll_text' => 'Explore order architecture'
        ];
        $complianceModule = [
    'intro' => [
        'badge'   => '— Order Management Architecture —',
        'title'   => 'All your orders in one place, no matter where they <span class="text-accent fraunces section-accent fw-normal">come from</span>',
        'content' => '<p class="lead mb-4">For most businesses, orders don\'t arrive through a single neat channel. They come in from a website, a phone call, an email, a wholesale portal, and a walk-in customer — all on the same day. Managing them across different systems means your stock levels are always slightly wrong somewhere, your team is copying information between tools, and customers occasionally fall through the cracks.</p>
                      <p class="small opacity-75">This module pulls every order into one workflow, regardless of the channel it came from. Your team processes everything in the same place — confirming, picking, packing, and dispatching — and every order triggers the right inventory update and invoice automatically. When a customer asks where their order is, someone on your team can answer that question in seconds without picking up the phone.</p>'
    ],
    'features' => [
        [
            'icon'    => 'fa-shuffle',
            'title'   => 'Every channel in one workflow',
            'content' => 'Online, wholesale, phone, in-store, and foodservice orders all flow into the same system. Your team works from one queue — not four different inboxes and spreadsheets.'
        ],
        [
            'icon'    => 'fa-boxes-stacked',
            'title'   => 'Stock updates the moment an order is placed',
            'content' => 'When an order comes in, the inventory is reserved immediately. No overselling, no apologetic emails telling customers something they just bought isn\'t actually available.'
        ],
        [
            'icon'    => 'fa-file-invoice-dollar',
            'title'   => 'Invoicing without double handling',
            'content' => 'Once an order is fulfilled, the invoice is generated automatically from the order details. No re-entering, no missing line items, no waiting until end of month to catch up.'
        ],
        [
            'icon'    => 'fa-tag',
            'title'   => 'Customer-specific pricing built in',
            'content' => 'Different customers pay different prices. Wholesale accounts, loyalty tiers, and contract pricing are set once per customer and applied automatically on every order — no manual adjustment needed.'
        ]
    ],
    'cta' => [
        'title'    => "Ready for total order clarity?",
        'subtitle' => "Let's discuss how we can unify your sales channels and automate your fulfillment logic.",
        'btn_text' => 'Book a Demo',
        'url'      => route('contact')
    ]
];
        $architectureData = [
    'bg_text' => 'ORDERS',
    'header' => [
        'badge_icon'  => 'fa-boxes-stacked',
        'badge_text'  => '— SYSTEM ARCHITECTURE —',
        'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
        'description' => 'Everything you need to manage orders from multiple channels without losing track of what\'s been ordered, what\'s been picked, and what\'s gone out the door.'
    ],
    'features' => [
        [
            'title' => 'Multi-channel order intake', 
            'icon'  => 'fa-shuffle', 
            'desc'  => 'Orders from your website, wholesale portal, phone, in-store POS, and email all flow into the same order queue. One place to manage everything your team needs to fulfil.'
        ],
        [
            'title' => 'Order confirmation & status tracking', 
            'icon'  => 'fa-clipboard-check', 
            'desc'  => 'Move orders through your stages — Received, Confirmed, Picking, Packed, Dispatched, Invoiced. Your team always knows exactly where every order is in the process.'
        ],
        [
            'title' => 'Inventory reservation on order', 
            'icon'  => 'fa-box', 
            'desc'  => 'Stock is reserved the moment an order is confirmed. Available quantities across all channels reflect what\'s actually available — not what was available before someone else ordered it.'
        ],
        [
            'title' => 'Customer-specific pricing', 
            'icon'  => 'fa-tag', 
            'desc'  => 'Set different price lists for wholesale accounts, loyalty customers, and contract clients. The right price is applied automatically on every order — no manual overrides or errors.'
        ],
        [
            'title' => 'Pick lists & packing slips', 
            'icon'  => 'fa-file-lines', 
            'desc'  => 'Generate pick lists and packing slips from confirmed orders with one click. Your warehouse team has everything they need to pick, pack, and dispatch accurately and quickly.'
        ],
        [
            'title' => 'Fulfilment & dispatch tracking', 
            'icon'  => 'fa-truck-fast', 
            'desc'  => 'Record dispatch details, courier tracking numbers, and estimated delivery dates against each order. If a customer asks where their order is, the answer is right there.'
        ],
        [
            'title' => 'Returns & credit notes', 
            'icon'  => 'fa-rotate-left', 
            'desc'  => 'Process returns and credits directly from the original order. Stock is added back to inventory automatically and the credit note is linked to the original invoice.'
        ],
        [
            'title' => 'Automatic invoicing on dispatch', 
            'icon'  => 'fa-file-invoice-dollar', 
            'desc'  => 'When an order is marked as dispatched, the invoice is generated automatically from the order details. No re-entering, no missed line items, no end-of-month catch-up.'
        ],
        [
            'title' => 'Order history & reporting', 
            'icon'  => 'fa-magnifying-glass-chart', 
            'desc'  => 'See every order ever placed by a customer — what they ordered, when, what they paid, and their order frequency. Use this to understand your best customers and plan your stock buying.'
        ]
    ],
    'cta' => [
        'title'    => "Let's get connected.",
        'subtitle' => "Ready to automate your operational intelligence? Let's discuss your specific order management workflow.",
        'btn_text' => 'Get Started',
        'url'      => route('contact')
    ]
];
        
       $supplierModule = [
    'intro' => [
        'badge_text' => '— WHOLESALE MANAGEMENT —',
        'badge_icon' => 'fa-users-gear',
        'title'      => 'Handle your wholesale accounts <span class="text-accent fraunces section-accent fw-normal">without the back-and-forth</span>',
        'content'    => 'Wholesale customers typically order regularly, in bulk, and expect their orders to arrive reliably on a schedule. Managing those relationships manually — taking orders by email, updating spreadsheets, chasing payments — is time-consuming and error-prone. This module gives each wholesale customer their own account with their pricing, order history, and payment status all in one place.'
    ],
    'ui' => [
        'table_title' => 'Wholesale Account — Café Luna',
        'stats' => [
            ['label' => 'Total this year: $14,820', 'color' => 'body'],
            ['label' => 'Account active ✓', 'color' => 'success'],
        ],
        'rows' => [
            [
                'name' => '#ORD-2891', 
                'subtext' => 'Wholesale Tier A — 22% below RRP', 
                'date' => '8 May', 
                'status' => '$1,240 Due 22 May', 
                'status_color' => 'warning'
            ],
            [
                'name' => '#ORD-2874', 
                'subtext' => 'Payment terms: Net 14 days', 
                'date' => '24 Apr', 
                'status' => '$980 Paid 5 May', 
                'status_color' => 'success'
            ],
            [
                'name' => '#ORD-2861', 
                'subtext' => 'Standing order schedule', 
                'date' => '10 Apr', 
                'status' => '$1,100 Paid 22 Apr', 
                'status_color' => 'success'
            ],
        ],
        'alert' => '✓ Orders every 14 days on average · Payment always within terms · Top account'
    ],
    'footer_features' => [
        'Each wholesale account has its own price list applied automatically',
        'Standing orders and recurring schedules for regular customers',
        'Order history per customer so you can see patterns and anticipate demand',
        'Outstanding invoices and payment status visible on every customer account'
    ]
];

        $modulesHeader = [
            'section_class' => 'bg-body',
            'badge'          => '— Other Modules —',
            'heading_start'  => 'Explore the',
            'dynamic_word'   => 'full suite',
            'description'    => 'Order Management connects directly to inventory, finance, and your customer records. Here\'s what else is available.',
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
            'dynamic_word'   => 'module',
            'description'    => 'Order Management is used by food & beverage and retail businesses that handle orders from multiple channels and customer types — and need a single, reliable workflow to manage them all.',
            'primary_btn'    => [
                'text' => 'View All Industries',
                'url'  => route('industries.index'),
                'icon' => 'fa-layer-group'
            ]
        ];
        
        $industries = [
            [
                'title' => 'Food & Beverage',
                'icon' => 'fa-utensils',
                'description' => 'Rigid batch-track procurement and perishable inventory logic engineered for global supply chain resilience and safety compliance.',
                'url' => route('industries.show', 'food-beverage'),
                'column_class' => 'col-12 col-lg-6', // Primary Featured Tile
                'show_cta' => true,
                'cta_text' => 'Explore Blueprint'
            ],
            [
                'title' => 'Retail',
                'icon' => 'fa-basket-shopping',
                'description' => 'Scalable omnichannel ecosystems designed to synchronize high-volume retail flows and sovereign inventory control.',
                'url' => route('industries.show', 'retail'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
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