@extends('layouts.app')
@section('title', 'Financial Architecture & Real-Time Accounting | Begin360')
@section('meta_title', 'Integrated Finance & Accounting for Trade Operations | Begin360')
@section('meta_description', 'Achieve total fiscal clarity. Automate your invoicing, job costing, and tax compliance with Begin360’s high-fidelity accounting architecture designed for modern trade businesses.')
@section('meta_keywords', 'Construction Accounting Software, Real-time Job Costing, Trade Finance Automation, BAS Compliance Software Australia, Odoo Accounting Customization, Progress Billing, Automated Invoicing, Cash Flow Forecasting')
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
        ['label' => 'Finance & Accounting', 'url' => null, 'active' => true],
    ],
    'badge' => '— Module —',
    'heading_start' => 'Know your numbers. Without the end-of-month',
    'dynamic_word' => 'scramble.',
    'description' => "Most small and medium businesses only find out how they're performing at the end of the month — after the bookkeeper has spent days reconciling everything. By then it's too late to act on what the numbers are telling you. This module connects your day-to-day operations directly to your accounts, so your financial picture is always current and your GST is always right.",
    'hero_image' => '<svg viewBox="0 0 460 345" xmlns="http://www.w3.org/2000/svg" style="padding:20px;">
                    <rect width="460" height="345" fill="#f7faf7"></rect>
                    <rect x="16" y="16" width="428" height="313" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="36" y="46" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Financial Overview — May 2026</text>
                    <rect x="352" y="30" width="92" height="24" rx="6" fill="#e8fde9"></rect>
                    <text x="398" y="46" font-family="DM Sans,sans-serif" font-size="11" fill="#019906" text-anchor="middle">Live ●</text>
                    <line x1="36" y1="58" x2="428" y2="58" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- KPI cards -->
                    <rect x="36" y="68" width="100" height="56" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="86" y="86" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Revenue</text>
                    <text x="86" y="108" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#111110" text-anchor="middle">$84.2k</text>
                    <text x="86" y="118" font-family="DM Sans,sans-serif" font-size="9" fill="#01C608" text-anchor="middle">↑ 12% vs Apr</text>

                    <rect x="148" y="68" width="100" height="56" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="198" y="86" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Expenses</text>
                    <text x="198" y="108" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#111110" text-anchor="middle">$38.6k</text>
                    <text x="198" y="118" font-family="DM Sans,sans-serif" font-size="9" fill="#888880" text-anchor="middle">45.8% of rev</text>

                    <rect x="260" y="68" width="100" height="56" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="310" y="86" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">Net Profit</text>
                    <text x="310" y="108" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#01C608" text-anchor="middle">$45.6k</text>
                    <text x="310" y="118" font-family="DM Sans,sans-serif" font-size="9" fill="#019906" text-anchor="middle">54.2% margin</text>

                    <rect x="372" y="68" width="72" height="56" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="408" y="86" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">GST Owed</text>
                    <text x="408" y="108" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#111110" text-anchor="middle">$7.6k</text>
                    <text x="408" y="118" font-family="DM Sans,sans-serif" font-size="9" fill="#888880" text-anchor="middle">BAS-ready</text>

                    <!-- Revenue bar chart -->
                    <text x="36" y="148" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#444440">Monthly revenue — last 6 months</text>
                    <line x1="36" y1="154" x2="428" y2="154" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Bars -->
                    <rect x="50" y="196" width="34" height="40" rx="3" fill="#c2f5c3"></rect>
                    <text x="67" y="208" font-family="DM Sans,sans-serif" font-size="9" fill="#017304" text-anchor="middle">Dec</text>

                    <rect x="102" y="184" width="34" height="52" rx="3" fill="#c2f5c3"></rect>
                    <text x="119" y="196" font-family="DM Sans,sans-serif" font-size="9" fill="#017304" text-anchor="middle">Jan</text>

                    <rect x="154" y="176" width="34" height="60" rx="3" fill="#01C608"></rect>
                    <text x="171" y="188" font-family="DM Sans,sans-serif" font-size="9" fill="white" text-anchor="middle">Feb</text>

                    <rect x="206" y="168" width="34" height="68" rx="3" fill="#01C608"></rect>
                    <text x="223" y="180" font-family="DM Sans,sans-serif" font-size="9" fill="white" text-anchor="middle">Mar</text>

                    <rect x="258" y="178" width="34" height="58" rx="3" fill="#01C608"></rect>
                    <text x="275" y="190" font-family="DM Sans,sans-serif" font-size="9" fill="white" text-anchor="middle">Apr</text>

                    <rect x="310" y="160" width="34" height="76" rx="3" fill="#017304"></rect>
                    <text x="327" y="172" font-family="DM Sans,sans-serif" font-size="9" fill="white" text-anchor="middle">May</text>
                    <text x="327" y="248" font-family="DM Sans,sans-serif" font-size="9" fill="#01C608" text-anchor="middle">$84.2k ↑</text>

                    <line x1="36" y1="240" x2="428" y2="240" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Invoices outstanding -->
                    <text x="36" y="260" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#444440">Invoices outstanding</text>
                    <rect x="36" y="268" width="120" height="28" rx="7" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="96" y="286" font-family="DM Sans,sans-serif" font-size="11" fill="#444440" text-anchor="middle">Current  $12,400</text>
                    <rect x="168" y="268" width="120" height="28" rx="7" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                    <text x="228" y="286" font-family="DM Sans,sans-serif" font-size="11" fill="#ba7517" text-anchor="middle">30+ days  $4,800</text>
                    <rect x="300" y="268" width="128" height="28" rx="7" fill="#fcebeb" stroke="#f7c1c1" stroke-width="1"></rect>
                    <text x="364" y="286" font-family="DM Sans,sans-serif" font-size="11" fill="#e24b4a" text-anchor="middle">60+ days  $1,200</text>

                    <!-- Sync note -->
                    <rect x="36" y="306" width="392" height="16" rx="5" fill="#e8fde9"></rect>
                    <text x="232" y="318" font-family="DM Sans,sans-serif" font-size="10" fill="#017304" text-anchor="middle">✓  Synced with Xero · BAS automatically calculated · Last updated 2 min ago</text>
                </svg>', // Placeholder for your finance-themed glassware asset
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
    'scroll_text' => 'Explore financial architecture'
];
        $complianceModule = [
    'intro' => [
        'badge'   => '— Finance & Accounting —',
        'title'   => 'Your accounts, always up to date — without the <span class="text-accent fraunces section-accent fw-normal">manual work</span>',
        'content' => '<p class="lead mb-4">When your sales, purchases, and expenses are scattered, getting a clear picture takes effort. This module connects your operations directly to your accounts so the books are always current.</p>
                      <p class="small opacity-75">Handle Australian GST automatically and keep your BAS ready to go, all while syncing seamlessly with your existing accounting software.</p>'
    ],
    'features' => [
        [
            'icon'    => 'fa-chart-pie',
            'title'   => 'Real-Time Performance',
            'content' => 'See revenue, expenses, and cash flow updated as transactions happen. Know where your business stands today, not where it was 30 days ago.'
        ],
        [
            'icon'    => 'fa-australia', // Or 'fa-flag' if fa-australia is unavailable
            'title'   => 'Automated GST & BAS',
            'content' => 'GST is calculated and tracked on every transaction. Your BAS is always ready—no more scrambling at quarter-end to figure out what you owe.'
        ],
        [
            'icon'    => 'fa-link-slash',
            'title'   => 'Operational Sync',
            'content' => 'Invoices flow from jobs, and bills flow from purchase orders. Nothing is entered twice—your day-to-day work feeds the books automatically.'
        ],
        [
            'icon'    => 'fa-right-left',
            'title'   => 'Xero & MYOB Integration',
            'content' => 'Keep your accountant happy. The module syncs with Xero and MYOB so financial data flows across without manual exports or re-entry.'
        ]
    ],
    'cta' => [
        'title'    => "Ready to lose the end-of-month scramble?",
        'subtitle' => "Let's discuss how we can automate your financial workflows and give you real-time visibility.",
        'btn_text' => 'Book a Demo',
        'url'      => route('contact')
    ]
];
        $architectureData = [
    'bg_text' => 'FINANCE',
    'header' => [
        'badge_icon'  => 'fa-chart-line-down',
        'badge_text'  => '— SYSTEM ARCHITECTURE —',
        'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
        'description' => 'Everything you need to keep your accounts accurate, your GST right, and your cash flow visible—without your team spending hours on financial admin.'
    ],
    'features' => [
        [
            'title' => 'Professional Invoicing', 
            'icon'  => 'fa-file-invoice-dollar', 
            'desc'  => 'Generate GST-compliant invoices directly from jobs, projects, or timesheets. Dispatch them via email without leaving the system.'
        ],
        [
            'title' => 'Automatic GST Calculation', 
            'icon'  => 'fa-calculator', 
            'desc'  => 'GST is applied and tracked on every transaction. Your BAS figures are always live—collected, paid, and net—without manual intervention.'
        ],
        [
            'title' => 'Real-time Profit & Loss', 
            'icon'  => 'fa-chart-mixed', 
            'desc'  => 'Analyze revenue, cost of goods, and margins at any time. Drill down by month, project, or cost center to see your true performance.'
        ],
        [
            'title' => 'Cash Flow Visibility', 
            'icon'  => 'fa-money-bill-transfer', 
            'desc'  => 'Monitor every dollar in, out, and outstanding. Forecast your position to ensure you have the cash to cover upcoming commitments.'
        ],
        [
            'title' => 'Supplier Bill Management', 
            'icon'  => 'fa-receipt', 
            'desc'  => 'Bills flow from purchase orders automatically with three-way matching. Approve and schedule payments without re-entering data.'
        ],
        [
            'title' => 'Receivable & Payment Tracking', 
            'icon'  => 'fa-clock-rotate-left', 
            'desc'  => 'Identify every outstanding invoice and its age. Automated payment reminders reduce the friction of chasing overdue funds.'
        ],
        [
            'title' => 'Cost & Profitability Reporting', 
            'icon'  => 'fa-magnifying-glass-chart', 
            'desc'  => 'Report on profitability by client, job, or product category. Identify high-margin relationships and optimize business focus.'
        ],
        [
            'title' => 'Xero & MYOB Integration', 
            'icon'  => 'fa-right-left', 
            'desc'  => 'Sync financial data automatically with leading accounting software. Your accountant keeps their workflow with higher-fidelity data.'
        ],
        [
            'title' => 'Automated Bank Reconciliation', 
            'icon'  => 'fa-building-columns', 
            'desc'  => 'Import bank feeds and match transactions to invoices automatically. Turn hours of manual reconciliation into minutes.'
        ]
    ],
    'cta' => [
        'title'    => "Let's get connected.",
        'subtitle' => "Ready to automate your financial intelligence? Let's discuss your specific accounting workflow.",
        'btn_text' => 'Get Started',
        'url'      => route('contact')
    ]
];
        
        $supplierModule = [
    'intro' => [
        'badge_text' => '— ACCOUNTS RECEIVABLE —',
        'badge_icon' => 'fa-calendar-clock',
        'title'      => 'Stop chasing invoices manually — the system <span class="text-accent fraunces section-accent fw-normal">does it for you</span>',
        'content'    => 'Late payments are a significant cash flow hurdle. This module automates your professional follow-ups at the right intervals, ensuring you get paid consistently without the time-consuming manual outreach.'
    ],
    'ui' => [
        'table_title' => 'Aged Receivables Summary',
        'stats' => [
            ['label' => 'Total Outstanding: $27,000', 'color' => 'body'],
            ['label' => 'Avg. Pay: 18 Days (↓ 6 faster)', 'color' => 'success'],
        ],
        'rows' => [
            [
                'name' => 'INV-0299: BlueSky Dev', 
                'subtext' => '62 days overdue · Escalated', 
                'date' => 'Due 07 Apr', 
                'status' => '⚠ 60+ Days', 
                'status_color' => 'danger'
            ],
            [
                'name' => 'INV-0308: Coastal Homes', 
                'subtext' => '14 days overdue · Follow-up sent', 
                'date' => 'Due 08 May', 
                'status' => 'Reminder Sent', 
                'status_color' => 'warning'
            ],
            [
                'name' => 'INV-0312: Meridian Group', 
                'subtext' => 'Active commercial fit-out', 
                'date' => 'Due 22 May', 
                'status' => 'Current', 
                'status_color' => 'success'
            ],
        ],
        'alert' => '✓ Automation: Reminder sent to Coastal Homes at 9:00 AM · BlueSky Dev record escalated for review.'
    ],
    'footer_features' => [
        'Live aging summary displaying every outstanding invoice across 30, 60, and 90-day tranches',
        'Customizable automated reminders sent at defined intervals to maintain professional pressure',
        'Integrated payment links within digital invoices to facilitate instant online settlements',
        'Average debtor day tracking to measure and optimize your real-world payment performance'
    ]
];

        $modulesHeader = [
            'section_class' => 'bg-body',
            'badge'          => '— Sectors We Transform —',
            'heading_start'  => 'Explore the',
            'dynamic_word'   => 'full suite',
            'description'    => 'Finance & Accounting connects to everything else in the system. Here\'s what flows into it.',
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
            'description'    => 'Finance & Accounting is used across every industry Begin360 works with. Every business needs to invoice, track expenses, and understand its financial performance — regardless of what it does.',
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