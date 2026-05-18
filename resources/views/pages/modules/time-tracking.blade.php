@extends('layouts.app')
@section('title', 'Time Tracking & Billing | Professional Timesheets & Invoicing by Begin360')
@section('meta_title', 'Time Tracking & Billing Architecture: Project Costing & Invoicing | Begin360')
@section('meta_description', 'Capture every billable minute without the admin leak. From live field mobile timers to integrated client invoicing, turn tracked time into revenue instantly with Begin360.')
@section('meta_keywords', 'Time Tracking Software Australia, Workforce Timesheet ERP, Billable Hour Tracker, Project Costing Tool, Client Invoicing Architecture, Automated Billing Engine, Labor Cost Tracking, Mobile Time Clock System')
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
                ['label' => 'Time Tracking & Billing', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Every hour logged.<br/>Every',
            'dynamic_word' => 'dollar billed.',
            'description' => 'Time that isn\'t tracked isn\'t billed. And time that\'s tracked in a spreadsheet at the end of the week is undercount at best and guesswork at worst. Begin360 lets your team log time as they work — against the right project, the right client, the right rate — and turns it into invoices without anyone having to manually pull it all together.',
            'hero_image' => '<svg viewBox="0 0 460 345" xmlns="http://www.w3.org/2000/svg" style="padding:16px;">
                    <rect width="460" height="345" fill="#f7faf7"></rect>
                    <rect x="16" y="16" width="428" height="313" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="36" y="44" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">My Timesheet — Week of 12 May 2026</text>
                    <rect x="350" y="30" width="82" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="391" y="44" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">34.5 hrs logged</text>
                    <line x1="36" y1="56" x2="428" y2="56" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Column headers -->
                    <text x="36" y="72" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">PROJECT / CLIENT</text>
                    <text x="248" y="72" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">TYPE</text>
                    <text x="306" y="72" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">HRS</text>
                    <text x="358" y="72" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">RATE</text>
                    <text x="428" y="72" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880" text-anchor="end">VALUE</text>
                    <line x1="36" y1="78" x2="428" y2="78" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Entry 1 — billable -->
                    <text x="36" y="95" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Mango Grove Estate</text>
                    <text x="36" y="107" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">ERP Config — Stage 2</text>
                    <rect x="238" y="88" width="46" height="16" rx="8" fill="#e8fde9"></rect>
                    <text x="261" y="99" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="#017304" text-anchor="middle">Billable</text>
                    <text x="314" y="100" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">8.0</text>
                    <text x="370" y="100" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">$195</text>
                    <text x="428" y="100" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#01C608" text-anchor="end">$1,560</text>
                    <line x1="36" y1="116" x2="428" y2="116" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Entry 2 — billable -->
                    <text x="36" y="133" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Northgate Logistics</text>
                    <text x="36" y="145" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Systems Implementation</text>
                    <rect x="238" y="126" width="46" height="16" rx="8" fill="#e8fde9"></rect>
                    <text x="261" y="137" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="#017304" text-anchor="middle">Billable</text>
                    <text x="314" y="138" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">12.5</text>
                    <text x="370" y="138" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">$195</text>
                    <text x="428" y="138" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#01C608" text-anchor="end">$2,438</text>
                    <line x1="36" y1="154" x2="428" y2="154" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Entry 3 — billable -->
                    <text x="36" y="171" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">BlueSky Dev</text>
                    <text x="36" y="183" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">IT Roadmap — Discovery</text>
                    <rect x="238" y="164" width="46" height="16" rx="8" fill="#e8fde9"></rect>
                    <text x="261" y="175" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="#017304" text-anchor="middle">Billable</text>
                    <text x="314" y="176" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">6.0</text>
                    <text x="370" y="176" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">$195</text>
                    <text x="428" y="176" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#01C608" text-anchor="end">$1,170</text>
                    <line x1="36" y1="192" x2="428" y2="192" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Entry 4 — non-billable -->
                    <text x="36" y="209" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#888880">Internal — Business Dev</text>
                    <text x="36" y="221" font-family="DM Sans,sans-serif" font-size="10" fill="#c4c4be">Proposal writing &amp; calls</text>
                    <rect x="234" y="202" width="58" height="16" rx="8" fill="#f4f4f2"></rect>
                    <text x="263" y="213" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="#888880" text-anchor="middle">Non-bill.</text>
                    <text x="314" y="214" font-family="DM Sans,sans-serif" font-size="12" fill="#c4c4be" text-anchor="middle">8.0</text>
                    <text x="370" y="214" font-family="DM Sans,sans-serif" font-size="12" fill="#c4c4be" text-anchor="middle">—</text>
                    <text x="428" y="214" font-family="DM Sans,sans-serif" font-size="12" fill="#c4c4be" text-anchor="end">—</text>
                    <line x1="36" y1="230" x2="428" y2="230" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Summary boxes -->
                    <rect x="36" y="240" width="110" height="44" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="91" y="257" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">Billable hrs</text>
                    <text x="91" y="275" font-family="DM Sans,sans-serif" font-size="16" font-weight="700" fill="#01C608" text-anchor="middle">26.5</text>

                    <rect x="158" y="240" width="110" height="44" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="213" y="257" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Non-billable</text>
                    <text x="213" y="275" font-family="DM Sans,sans-serif" font-size="16" font-weight="700" fill="#444440" text-anchor="middle">8.0</text>

                    <rect x="280" y="240" width="164" height="44" rx="8" fill="#111110"></rect>
                    <text x="362" y="257" font-family="DM Sans,sans-serif" font-size="10" fill="rgba(255,255,255,0.6)" text-anchor="middle">Billable value this week</text>
                    <text x="362" y="275" font-family="DM Sans,sans-serif" font-size="17" font-weight="700" fill="#01C608" text-anchor="middle">$5,168</text>

                    <!-- Footer -->
                    <rect x="36" y="298" width="392" height="16" rx="5" fill="#e8fde9"></rect>
                    <text x="232" y="310" font-family="DM Sans,sans-serif" font-size="10" fill="#017304" text-anchor="middle">✓  Ready to invoice · All entries linked to project budgets</text>
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
            'scroll_text' => 'Explore billing engine'
        ];
        $complianceModule = [
            'intro' => [
                'badge'   => '— What This Module Does —',
                'title'   => 'Time logged by your team, connected directly to billing and project <span class="text-accent fraunces section-accent fw-normal">costs</span>',
                'content' => '<p class="fs-6 mb-4">Most businesses lose revenue not because they don\'t do the work, but because the time doesn\'t get captured properly. It\'s logged in a spreadsheet at the end of the week from memory. It\'s written on a timesheet that sits in someone\'s drawer. It gets rounded down because it feels awkward to charge for the extra thirty minutes. Every one of those habits costs real money over a year.</p>
                            <p class="fs-6 mb-4">Begin360 makes time logging frictionless — from a browser, a phone, or a timer running in the background. Every entry is linked to the client and project it belongs to, tagged as billable or non-billable, and rated at the right rate for that person or role. When it\'s time to invoice, the billable hours are already there, reviewed and approved, ready to go.</p>
                            <p class="small opacity-75">Everything connects. Time flows into project budgets in real time. Utilisation reporting shows you how your team\'s hours are split between billable work and everything else. And when you need to understand whether a project or client is actually profitable, the data is already in the system.</p>'
            ],
            'features' => [
                [
                    'icon'    => 'fa-stopwatch', // Maps to ⏱️ symbol context
                    'title'   => 'Log time as it happens, not from memory',
                    'content' => 'A timer running in the browser or on a phone captures time as the work happens. No end-of-week reconstruction. No forgotten hours. No rounding down because you can\'t remember exactly how long something took.'
                ],
                [
                    'icon'    => 'fa-wallet', // Maps to 💰 symbol context
                    'title'   => 'Billable and non-billable separated automatically',
                    'content' => 'Every time entry is tagged billable or non-billable against configurable rules per project or client. Billable hours flow into invoices. Non-billable hours feed utilisation reporting. Nothing gets muddled.'
                ],
                [
                    'icon'    => 'fa-receipt', // Maps to 🧾 symbol context
                    'title'   => 'Invoices generated directly from approved timesheets',
                    'content' => 'Reviewed and approved time entries convert into invoice line items in one click. The right hours, the right rates, the right client — already there. No re-entry, no recalculating, no missing hours.'
                ],
                [
                    'icon'    => 'fa-chart-pie', // Maps to 📊 symbol context
                    'title'   => 'Connected to project budgets and profitability',
                    'content' => 'Time logged against a project flows into its budget in real time. See hours consumed vs hours budgeted, and understand the true cost and margin of every client engagement as it unfolds.'
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
            'bg_text' => 'BILLING',
            'header' => [
                'badge_icon'  => 'fa-code-merge',
                'badge_text'  => '— SYSTEM ARCHITECTURE —',
                'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
                'description' => 'Everything you need to capture every hour, bill every hour you\'re owed, and understand exactly where your team\'s time is going — without weekly timesheet chasing or manual invoice assembly.'
            ],
            'features' => [
                [
                    'title' => 'Live timer and manual entry', 
                    'icon'  => 'fa-play', // Maps to ▶️
                    'desc'  => 'Start a timer when you begin a task and stop it when you\'re done — or log manually if you prefer. Both options are available from a browser or mobile, against any project or client in the system.'
                ],
                [
                    'title' => 'Weekly timesheet view', 
                    'icon'  => 'fa-table-cells', // Maps to 📋
                    'desc'  => 'See the full week\'s entries in one grid — by project, by day, by client. Easy to review, adjust, and submit for approval without hunting across separate tools or conversations.'
                ],
                [
                    'title' => 'Timesheet approval workflow', 
                    'icon'  => 'fa-circle-check', // Maps to ✅
                    'desc'  => 'Team members submit their timesheets for manager review before they can be invoiced. Approved entries are locked. Queries are flagged back for correction — with a full audit trail throughout.'
                ],
                [
                    'title' => 'Configurable billing rates', 
                    'icon'  => 'fa-dollar-sign', // Maps to 💲
                    'desc'  => 'Set rates by person, by role, by project, or by client — and override them per entry when needed. Overtime, after-hours, and specialist rates all supported without complex workarounds.'
                ],
                [
                    'title' => 'Billable vs non-billable tagging', 
                    'icon'  => 'fa-tags', // Maps to 🏷️
                    'desc'  => 'Rules at the project or client level determine what\'s billable by default. Individual entries can be overridden. Non-billable time is tracked and reported — it doesn\'t just disappear.'
                ],
                [
                    'title' => 'Invoice generation from timesheets', 
                    'icon'  => 'fa-receipt', // Maps to 🧾
                    'desc'  => 'Approved billable hours convert directly to invoice line items — grouped by project, by date, or by person depending on what the client expects. No re-entry, no manual calculation.'
                ],
                [
                    'title' => 'Utilisation reporting', 
                    'icon'  => 'fa-chart-line', // Maps to 📈
                    'desc'  => 'See each team member\'s billable utilisation over any period. Understand how the team\'s time splits between client work, internal work, and overhead — and whether you\'re hitting your targets.'
                ],
                [
                    'title' => 'Budget vs actual by project', 
                    'icon'  => 'fa-chart-pie', // Maps to 📊
                    'desc'  => 'Hours logged against a project flow into its budget in real time. See at a glance how many hours have been used against the budgeted estimate — and flag projects that are running over before the invoice goes out.'
                ],
                [
                    'title' => 'Mobile time logging', 
                    'icon'  => 'fa-mobile-screen-button', // Maps to 📱
                    'desc'  => 'Log time from anywhere — on site, between meetings, or at the end of a client call. The mobile interface is quick to use and syncs instantly, so nothing gets lost between the field and the office.'
                ]
            ],
            'cta' => [
                'title'    => "Let's get connected.",
                'subtitle' => "Ready to automate your Open Time tracking workflow? Let's discuss your requirements.",
                'btn_text' => 'Get Started',
                'url'      => route('contact')
            ]
        ];
        $supplierModule = [
            'intro' => [
                'badge_text' => '— FROM TIMESHEET TO INVOICE —',
                'badge_icon' => 'fa-receipt',
                'title'      => 'Approved hours become an invoice in one <span class="text-accent fraunces section-accent fw-normal">click</span>',
                'content'    => 'The gap between work being done and the invoice going out costs businesses in two ways: cash flow delays and hours that get forgotten or rounded down in the time between finishing the work and pulling together the bill. Begin360 closes that gap by turning approved, billable time entries directly into invoice line items — with the right hours, the right rates, and the right client detail already populated.'
            ],
            'ui' => [
                'table_title' => 'Invoice Draft — Northgate Logistics',
                'stats' => [
                    ['label' => 'From timesheets', 'color' => 'success'],
                    ['label' => 'Client: Northgate Logistics Pty Ltd', 'color' => 'secondary'],
                    ['label' => 'Period: 1 May – 12 May 2026', 'color' => 'secondary'],
                    ['label' => 'Project: Systems Implementation', 'color' => 'secondary'],
                    ['label' => 'Invoice #: INV-2026-0094 (draft)', 'color' => 'secondary'],
                ],
                'rows' => [
                    [
                        'name' => 'Priya Sharma — Consulting', 
                        'subtext' => 'Requirements & config — 2–9 May', 
                        'date' => '12.5 hrs @ $195', 
                        'status' => '$2,438', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Marcus Tran — Project Management', 
                        'subtext' => 'Stakeholder comms & reporting — 2–12 May', 
                        'date' => '8.0 hrs @ $220', 
                        'status' => '$1,760', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Aisha Khan — Business Analysis', 
                        'subtext' => 'Process mapping & documentation — 5–12 May', 
                        'date' => '6.5 hrs @ $180', 
                        'status' => '$1,170', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Subtotal / GST (10%)', 
                        'subtext' => 'Financial components breakdown', 
                        'date' => 'Subtotal: $5,368', 
                        'status' => 'GST: $537', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Total (AUD)', 
                        'subtext' => 'Aggregated financial total', 
                        'date' => '', 
                        'status' => '$5,905', 
                        'status_color' => 'accent'
                    ],
                ],
                'alert' => '27 hrs from approved timesheets',
                'primary_btn' => [
                    'text' => 'Review & Send →',
                    'url'  => '#'
                ]
            ],
            'footer_features' => [
                'All approved billable entries for a client or project pulled into the invoice automatically',
                'Line items grouped by project, date, or team member — matching what the client expects to see',
                'Rates applied correctly per person and per project — no manual recalculation',
                'Invoice ready to review, adjust, and send without touching a separate billing tool'
            ]
        ];
        $industryHeader = [
            'section_class' => 'bg-body-tertiary',
            'badge'          => '— Sectors We Transform —',
            'heading_start'  => 'Which industries use this',
            'dynamic_word'   => 'module?',
            'description'    => 'Time Tracking & Billing is used wherever time is the main thing being sold — professional services, consulting, trades, and any business where accurate hour capture directly affects what gets invoiced and what margin comes out the other end.',
            'primary_btn'    => [
                'text' => 'View All Industries',
                'url'  => route('industries.index'),
                'icon' => 'fa-layer-group'
            ]
        ];
        $industries = [
            [
                'title' => 'Professional Services',
                'icon' => 'fa-briefcase', // 💼
                'description' => 'For consultants, accountants, engineers, and agencies where time is the product. Every hour logged is an hour billable — and the difference between captured and uncaptured time goes straight to your bottom line.',
                'url' => route('industries.show', 'professional-services'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Trades & Field Services',
                'icon' => 'fa-screwdriver-wrench', // 🔧
                'description' => 'Labour hours logged on site flow directly to job costs and client invoices. No end-of-day phone calls. No reconstructing hours from memory. No leaving billable time on the table.',
                'url' => route('industries.show', 'trades'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Construction',
                'icon' => 'fa-helmet-safety', // 🏗️
                'description' => 'Track labour hours by trade, by site, and by cost code. Understand the true labour cost of every project stage and make sure every billable hour finds its way into the progress claim.',
                'url' => route('industries.show', 'construction'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Food & Beverage',
                'icon' => 'fa-wine-glass', // 🍷
                'description' => 'Track staff time across production, delivery, and operations. Understand actual labour costs per batch, run, or shift — and make pricing decisions based on real data rather than estimates.',
                'url' => route('industries.show', 'food-beverage'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ]
        ];
        $modulesHeader = [
            'section_class' => 'bg-body',
            'badge'          => '— Other Modules —',
            'heading_start'  => 'Explore the',
            'dynamic_word'   => 'full suite',
            'description'    => 'Time Tracking & Billing connects directly to project management, invoicing, resource planning, and scheduling. Here\'s what else is available.',
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