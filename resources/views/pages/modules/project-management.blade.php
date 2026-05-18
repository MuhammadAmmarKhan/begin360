@extends('layouts.app')
@section('title', 'Project Architecture & Operational Execution | Begin360')
@section('meta_title', 'Advanced Project Management & Resource Coordination | Begin360')
@section('meta_description', 'Execute with precision. Streamline workflows, track billable hours, and maintain timeline integrity with Begin360’s high-fidelity project architecture designed for modern trade and professional services.')
@section('meta_keywords', 'Project Management Software Australia, Task Management System, Resource Allocation Tool, Real-time Timesheet Tracking, Gantt Chart Software, Project Profitability Analysis, Odoo Project Customization, Workflow Automation, Milestone Tracking')
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
                ['label' => 'Project Management', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Know where every project stands.',
            'dynamic_word' => 'Before the client asks.',
            'description' => "Most project overruns don't happen overnight. They creep up slowly — a milestone slips, costs drift a little above budget, a deliverable gets delayed without anyone really noticing. By the time it's obvious, there's no good conversation to be had with the client. This module gives you a live view of every project's health — budget, timeline, and progress — so you can have those conversations early, when there's still something you can do about it.",
            'hero_image' => '<svg viewBox="0 0 460 345" xmlns="http://www.w3.org/2000/svg" style="padding:20px;">
                    <rect width="460" height="345" fill="#f7faf7"></rect>
                    <rect x="16" y="16" width="428" height="313" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="36" y="46" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Active Projects — Portfolio View</text>
                    <rect x="344" y="30" width="100" height="24" rx="6" fill="#e8fde9"></rect>
                    <text x="394" y="46" font-family="DM Sans,sans-serif" font-size="11" fill="#019906" text-anchor="middle">9 active</text>
                    <line x1="36" y1="58" x2="428" y2="58" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Column headers -->
                    <text x="36" y="76" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">PROJECT</text>
                    <text x="224" y="76" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">BUDGET</text>
                    <text x="284" y="76" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">PROGRESS</text>
                    <text x="372" y="76" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">HEALTH</text>
                    <line x1="36" y1="82" x2="428" y2="82" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Project 1 — on track -->
                    <text x="36" y="100" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Brand Strategy — Coastal Homes</text>
                    <text x="36" y="113" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Sarah K. · Due 28 May</text>
                    <text x="224" y="105" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">$18,000</text>
                    <rect x="284" y="96" width="72" height="10" rx="3" fill="#e8e8e4"></rect>
                    <rect x="284" y="96" width="38" height="10" rx="3" fill="#01C608"></rect>
                    <text x="364" y="105" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">52%</text>
                    <rect x="368" y="93" width="56" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="396" y="107" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">On track</text>
                    <line x1="36" y1="122" x2="428" y2="122" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Project 2 — at risk -->
                    <rect x="36" y="122" width="392" height="32" fill="#fffbea" opacity="0.5"></rect>
                    <text x="36" y="140" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Systems Implementation — Northgate</text>
                    <text x="36" y="153" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Marcus T. · Due 20 Jun</text>
                    <text x="224" y="145" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">$42,000</text>
                    <rect x="284" y="136" width="72" height="10" rx="3" fill="#e8e8e4"></rect>
                    <rect x="284" y="136" width="58" height="10" rx="3" fill="#ba7517"></rect>
                    <text x="364" y="145" font-family="DM Sans,sans-serif" font-size="10" fill="#ba7517">81%</text>
                    <rect x="362" y="133" width="66" height="20" rx="10" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                    <text x="395" y="147" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">⚠ At risk</text>
                    <line x1="36" y1="162" x2="428" y2="162" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Project 3 — on track -->
                    <text x="36" y="180" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Financial Audit FY26 — Meridian</text>
                    <text x="36" y="193" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Priya N. · Due 30 Jun</text>
                    <text x="224" y="185" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">$28,500</text>
                    <rect x="284" y="176" width="72" height="10" rx="3" fill="#e8e8e4"></rect>
                    <rect x="284" y="176" width="24" height="10" rx="3" fill="#01C608"></rect>
                    <text x="364" y="185" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">34%</text>
                    <rect x="368" y="173" width="56" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="396" y="187" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">On track</text>
                    <line x1="36" y1="202" x2="428" y2="202" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Project 4 — overdue -->
                    <rect x="36" y="202" width="392" height="32" fill="#fef2f2" opacity="0.4"></rect>
                    <text x="36" y="220" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">IT Roadmap — BlueSky Dev</text>
                    <text x="36" y="233" font-family="DM Sans,sans-serif" font-size="10" fill="#e24b4a">David L. · Was due 1 May</text>
                    <text x="224" y="225" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">$14,000</text>
                    <rect x="284" y="216" width="72" height="10" rx="3" fill="#e8e8e4"></rect>
                    <rect x="284" y="216" width="54" height="10" rx="3" fill="#e24b4a"></rect>
                    <text x="364" y="225" font-family="DM Sans,sans-serif" font-size="10" fill="#e24b4a">75%</text>
                    <rect x="362" y="213" width="66" height="20" rx="10" fill="#fcebeb"></rect>
                    <text x="395" y="227" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#e24b4a" text-anchor="middle">Overdue</text>

                    <!-- Summary row -->
                    <line x1="36" y1="246" x2="428" y2="246" stroke="#e8e8e4" stroke-width="0.5"></line>
                    <rect x="36" y="254" width="116" height="36" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="94" y="269" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Total pipeline</text>
                    <text x="94" y="283" font-family="DM Sans,sans-serif" font-size="14" font-weight="700" fill="#111110" text-anchor="middle">$284k</text>

                    <rect x="166" y="254" width="116" height="36" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="224" y="269" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">On track</text>
                    <text x="224" y="283" font-family="DM Sans,sans-serif" font-size="14" font-weight="700" fill="#01C608" text-anchor="middle">7 projects</text>

                    <rect x="296" y="254" width="132" height="36" rx="8" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                    <text x="362" y="269" font-family="DM Sans,sans-serif" font-size="10" fill="#ba7517" text-anchor="middle">Need attention</text>
                    <text x="362" y="283" font-family="DM Sans,sans-serif" font-size="14" font-weight="700" fill="#ba7517" text-anchor="middle">2 projects</text>

                    <!-- Footer -->
                    <rect x="36" y="302" width="392" height="16" rx="5" fill="#e8fde9"></rect>
                    <text x="232" y="314" font-family="DM Sans,sans-serif" font-size="10" fill="#017304" text-anchor="middle">✓  All projects updated in real time · Budgets, timelines, and team hours tracked</text>
                </svg>', // Placeholder for your project-themed glassware asset
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
            'scroll_text' => 'Explore project architecture'
        ];
        $complianceModule = [
            'intro' => [
                'badge'   => '— Project Architecture —',
                'title'   => 'One place to see where every project stands — budgets, timelines, and <span class="text-accent fraunces section-accent fw-normal">people</span>',
                'content' => '<p class="lead mb-4">When project details live across email threads, spreadsheets, and individual team members\' heads, you\'re always one step behind. You find out a project has gone over budget when the invoice is being written. You find out a deadline was missed when the client emails asking where something is. There\'s no early warning system.</p>
                            <p class="small opacity-75">This module gives you a live picture of every active project — what\'s been delivered, what\'s still outstanding, how much budget has been used, and whether the timeline is on track. When something starts drifting, you see it in the system before the client sees it in the work. Everything connects. Time logged by your team flows into project costs. Expenses and subcontractor costs are tracked against the right project budget. When a project is complete, invoicing flows directly from the project record — no separate spreadsheet needed.</p>'
            ],
            'features' => [
                [
                    'icon'    => 'fa-chart-pie',
                    'title'   => 'Budget vs actual, always visible',
                    'content' => 'See how much budget has been consumed against how much work has been done. When a project is tracking to go over, you get a flag while there\'s still time to act — not after the invoice has gone out.'
                ],
                [
                    'icon'    => 'fa-calendar-check',
                    'title'   => 'Milestones and deadlines tracked in one view',
                    'content' => 'Every project has milestones, deliverables, and due dates. See what\'s coming up, what\'s overdue, and what\'s blocking something else — without chasing your team for updates.'
                ],
                [
                    'icon'    => 'fa-users-gear',
                    'title'   => 'Team assignments and workload visible',
                    'content' => 'See who is working on what across all active projects. Spot when someone is overloaded or when a project has gone quiet — and redistribute before something is missed.'
                ],
                [
                    'icon'    => 'fa-link',
                    'title'   => 'Connected to time, costs, and invoicing',
                    'content' => 'Time entries, expenses, and purchase orders link directly to the project they belong to. When the project is complete, the invoice is generated from the project record automatically.'
                ]
            ],
            'cta' => [
                'title'    => "Ready for total project clarity?",
                'subtitle' => "Let's discuss how we can unify your project workflows and automate your delivery logic.",
                'btn_text' => 'Book a Demo',
                'url'      => route('contact')
            ]
        ];
        $architectureData = [
    'bg_text' => 'PROJECTS',
    'header' => [
        'badge_icon'  => 'fa-diagram-project',
        'badge_text'  => '— SYSTEM ARCHITECTURE —',
        'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
        'description' => 'Everything you need to run projects with clarity — from the first scoping conversation to the final invoice — without the spreadsheets, the status update meetings, and the surprises.'
    ],
    'features' => [
        [
            'title' => 'Project records with full context', 
            'icon'  => 'fa-folder-open', 
            'desc'  => 'Every project has one record — client, scope, budget, team, milestones, files, and communications. Everything in one place, visible to everyone who needs it.'
        ],
        [
            'title' => 'Milestone & deliverable tracking', 
            'icon'  => 'fa-calendar-check', 
            'desc'  => 'Break projects into milestones and deliverables with due dates and owners. See at a glance what\'s done, what\'s in progress, and what\'s at risk of slipping.'
        ],
        [
            'title' => 'Budget vs actual tracking', 
            'icon'  => 'fa-chart-pie', 
            'desc'  => 'Set a budget at project kick-off and watch it in real time as time, expenses, and costs are logged. Get flagged when you\'re approaching your limit — not after you\'ve exceeded it.'
        ],
        [
            'title' => 'Team assignments & task management', 
            'icon'  => 'fa-users-gear', 
            'desc'  => 'Assign tasks to team members, set due dates, and track completion. See the full workload picture across your team — who has capacity and who is stretched.'
        ],
        [
            'title' => 'Time logged directly against projects', 
            'icon'  => 'fa-stopwatch', 
            'desc'  => 'Every hour your team logs is linked to the project it belongs to. Billable and non-billable time tracked separately, with configurable rates per person or role.'
        ],
        [
            'title' => 'Project profitability view', 
            'icon'  => 'fa-sack-dollar', 
            'desc'  => 'See revenue, all direct costs, and margin per project in one view. Understand which types of engagements are genuinely profitable and which are eating into your margins.'
        ],
        [
            'title' => 'Document & file storage', 
            'icon'  => 'fa-file-lines', 
            'desc'  => 'Attach briefs, proposals, contracts, deliverables, and approval sign-offs directly to the project record. Everything is searchable and in one place — not scattered across email threads.'
        ],
        [
            'title' => 'Invoicing from project records', 
            'icon'  => 'fa-file-invoice-dollar', 
            'desc'  => 'Generate invoices directly from a project — fixed-fee, time-and-materials, or milestone-based. All the billing detail is already there from what the team logged.'
        ],
        [
            'title' => 'Portfolio-level reporting', 
            'icon'  => 'fa-layer-group', 
            'desc'  => 'See the health of all your active projects in one view. Revenue in progress, budget consumed, overdue milestones, and team utilisation — across the whole business at once.'
        ]
    ],
    'cta' => [
        'title'    => "Let's get connected.",
        'subtitle' => "Ready to automate your project intelligence? Let's discuss your specific delivery workflow.",
        'btn_text' => 'Get Started',
        'url'      => route('contact')
    ]
];
        
        $supplierModule = [
    'intro' => [
        'badge_text' => '— PROJECT EXECUTION —',
        'badge_icon' => 'fa-list-check',
        'title'      => 'See exactly what\'s done, what\'s next, and <span class="text-accent fraunces section-accent fw-normal">what\'s blocking you</span>',
        'content'    => 'Milestones are how you make a large project manageable. When every deliverable has an owner, a due date, and a clear status, it\'s easy to see where the project is genuinely up to — and easy to have a factual conversation with a client about what\'s been completed and what\'s still in progress. No hunting through emails or asking the team for a status update.'
    ],
    'ui' => [
        'table_title' => 'Systems Implementation — Northgate Logistics',
        'stats' => [
            ['label' => 'Budget: $34,020 of $42,000 (81%)', 'color' => 'body'],
            ['label' => 'UAT behind schedule ⚠', 'color' => 'warning'],
        ],
        'rows' => [
            [
                'name' => 'Discovery & requirements', 
                'subtext' => 'Phase 1 initiation', 
                'date' => 'Completed 2 Apr', 
                'status' => '✓', 
                'status_color' => 'success'
            ],
            [
                'name' => 'System configuration', 
                'subtext' => 'Core architecture build', 
                'date' => 'Completed 25 Apr', 
                'status' => '✓', 
                'status_color' => 'success'
            ],
            [
                'name' => 'User acceptance testing', 
                'subtext' => 'Awaiting final sign-off', 
                'date' => 'Due 16 May', 
                'status' => '⚠', 
                'status_color' => 'warning'
            ],
            [
                'name' => 'Training & go-live', 
                'subtext' => 'End-user onboarding', 
                'date' => 'Due 20 Jun', 
                'status' => 'Upcoming', 
                'status_color' => 'body'
            ],
        ],
        'alert' => '⚠ UAT behind schedule · 81% of budget used · Consider scope discussion with client'
    ],
    'footer_features' => [
        'Every milestone has an owner, due date, and completion status',
        'Overdue and at-risk milestones flagged automatically — no manual chasing',
        'Milestone completion links to billing stages for fixed-fee and milestone-based projects',
        'Client-facing progress view so you can share a live project update without a meeting'
    ]
];

        $modulesHeader = [
            'section_class' => 'bg-body',
            'badge'          => '— Other Modules —',
            'heading_start'  => 'Explore the',
            'dynamic_word'   => 'full suite',
            'description'    => 'Project Management works at its best when connected to time tracking, finance, procurement, and client management. Here\'s what else is available.',
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
            'description'    => 'Project Management is used by professional services firms and construction businesses — wherever work is delivered in structured engagements with defined scope, budget, and timeline.',
            'primary_btn'    => [
                'text' => 'View All Industries',
                'url'  => route('industries.index'),
                'icon' => 'fa-layer-group'
            ]
        ];
        
        $industries = [
            [
                'title' => 'Professional Services',
                'icon' => 'fa-briefcase',
                'description' => 'Sophisticated project-to-billing lifecycles and human capital utilization metrics for intelligence-led service delivery.',
                'url' => route('industries.show', 'professional-services'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Construction',
                'icon' => 'fa-helmet-safety',
                'description' => 'Heavy-duty MRP frameworks and project costing architecture designed for complex multi-stage site management.',
                'url' => route('industries.show', 'construction'),
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