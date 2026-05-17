@extends('layouts.app')
@section('title', 'CRM & Automated Contract Architecture | Begin360')
@section('meta_title', 'Contract Management & Automated Progress Claims | Begin360')
@section('meta_description', 'Transform your contract lifecycle. Automate progress claims, retention tracking, and variation approvals with Begin360’s high-fidelity CRM architecture designed for complex trade operations.')
@section('meta_keywords', 'Construction CRM, Automated Progress Claims, Retention Management Software, Contract Lifecycle Automation, Variation Tracking, Trade CRM Australia, Subcontractor Management System, Odoo CRM Customization')
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
                ['label' => 'CRM', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Know your clients. Never lose the ',
            'dynamic_word' => 'thread.',
            'description' => "Most businesses keep client information scattered across emails, spreadsheets, and people's heads. When someone leaves or a conversation gets missed, that relationship takes the hit. This module puts everything in one place — who your clients are, what you've done for them, and what's coming next.",
            'hero_image' => '<svg viewBox="0 0 460 345" xmlns="http://www.w3.org/2000/svg" style="padding:20px;">
                    <rect width="460" height="345" fill="#f7faf7"></rect>
                    <rect x="16" y="16" width="428" height="313" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="36" y="46" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Client Overview</text>
                    <rect x="340" y="30" width="88" height="26" rx="6" fill="#e8fde9"></rect>
                    <text x="384" y="47" font-family="DM Sans,sans-serif" font-size="11" fill="#019906" text-anchor="middle">12 active</text>
                    <line x1="36" y1="58" x2="428" y2="58" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Client row 1 -->
                    <circle cx="54" cy="84" r="16" fill="#e8fde9"></circle>
                    <text x="54" y="89" font-family="DM Sans,sans-serif" font-size="11" font-weight="700" fill="#019906" text-anchor="middle">MG</text>
                    <text x="80" y="80" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Meridian Group</text>
                    <text x="80" y="94" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Last contact: 2 days ago · 4 open tasks</text>
                    <rect x="346" y="72" width="66" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="379" y="86" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">Active</text>
                    <line x1="36" y1="108" x2="428" y2="108" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Client row 2 -->
                    <circle cx="54" cy="130" r="16" fill="#e8e8e4"></circle>
                    <text x="54" y="135" font-family="DM Sans,sans-serif" font-size="11" font-weight="700" fill="#444440" text-anchor="middle">CH</text>
                    <text x="80" y="126" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Coastal Homes</text>
                    <text x="80" y="140" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Last contact: 1 week ago · Proposal sent</text>
                    <rect x="334" y="118" width="82" height="20" rx="10" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                    <text x="375" y="132" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">Follow up</text>
                    <line x1="36" y1="154" x2="428" y2="154" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Client row 3 -->
                    <circle cx="54" cy="176" r="16" fill="#e8fde9"></circle>
                    <text x="54" y="181" font-family="DM Sans,sans-serif" font-size="11" font-weight="700" fill="#019906" text-anchor="middle">NL</text>
                    <text x="80" y="172" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Northgate Logistics</text>
                    <text x="80" y="186" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Last contact: today · Meeting scheduled</text>
                    <rect x="346" y="164" width="66" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="379" y="178" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">Active</text>
                    <line x1="36" y1="200" x2="428" y2="200" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Activity feed -->
                    <text x="36" y="222" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#444440">Recent activity</text>
                    <line x1="36" y1="230" x2="428" y2="230" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <rect x="36" y="238" width="6" height="6" rx="3" fill="#01C608"></rect>
                    <text x="50" y="247" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Proposal sent to Coastal Homes</text>
                    <text x="360" y="247" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">2h ago</text>

                    <rect x="36" y="256" width="6" height="6" rx="3" fill="#c2f5c3"></rect>
                    <text x="50" y="265" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Meeting note added — Northgate Logistics</text>
                    <text x="360" y="265" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">5h ago</text>

                    <rect x="36" y="274" width="6" height="6" rx="3" fill="#c2f5c3"></rect>
                    <text x="50" y="283" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Invoice #0291 paid — Meridian Group</text>
                    <text x="360" y="283" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Yesterday</text>

                    <!-- Bottom bar -->
                    <rect x="36" y="302" width="392" height="18" rx="6" fill="#e8fde9"></rect>
                    <text x="232" y="315" font-family="DM Sans,sans-serif" font-size="10" fill="#017304" text-anchor="middle">✓  All client records synced · 0 overdue follow-ups</text>
                </svg>', // Insert image path here later
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
            'scroll_text' => 'Explore CRM architecture'
        ];
        $complianceModule = [
            'intro' => [
                'badge'   => '— CRM & Client Relationships —',
                'title'   => 'Your full client history, always at your <span class="text-accent fraunces section-accent fw-normal">fingertips</span>',
                'content' => '<p class="lead mb-4">A CRM is a central place where everything about your clients lives. Every contact, every conversation, and every piece of work you\'ve done for them stays exactly where it belongs.</p>
                            <p class="small opacity-75">Without it, context lives in scattered emails and individual memories. With it, your whole team sees the same up-to-date picture, all the time.</p>'
            ],
            'features' => [
                [
                    'icon'    => 'fa-user-tie',
                    'title'   => 'Centralized Records',
                    'content' => 'Every person, phone number, email, and address stored in one searchable place. Build a directory that belongs to the company, not an inbox.'
                ],
                [
                    'icon'    => 'fa-clock-rotate-left',
                    'title'   => 'Relationship History',
                    'content' => 'See every email, meeting, quote, and job linked to a client in chronological order. No more hunting through old threads to find context.'
                ],
                [
                    'icon'    => 'fa-thumbtack',
                    'title'   => 'Automated Follow-ups',
                    'content' => 'Assign tasks and set reminders that don’t get forgotten. Ensure nothing falls through the cracks because someone forgot to check their notes.'
                ],
                [
                    'icon'    => 'fa-arrow-trend-up',
                    'title'   => 'Sales Pipeline',
                    'content' => 'See all your opportunities at a glance—which proposals are out, which are close to signing, and exactly where your next revenue is coming from.'
                ]
            ],
            'cta' => [
                'title'    => "Ready to never lose another lead?",
                'subtitle' => "Let's discuss how we can centralize your client relationships and streamline your sales process.",
                'btn_text' => 'Book a Demo',
                'url'      => route('contact')
            ]
        ];
        $architectureData = [
            'bg_text' => 'RELATIONS',
            'header' => [
                'badge_icon'  => 'fa-users-gear',
                'badge_text'  => '— SYSTEM ARCHITECTURE —',
                'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
                'description' => 'Everything you need to manage client and customer relationships with precision—without the complexity of tools built for enterprise sales teams.'
            ],
            'features' => [
                [
                    'title' => 'Contact & Company Records', 
                    'icon'  => 'fa-address-card', 
                    'desc'  => 'Store every contact with their role, company, and relationship notes. Link multiple decision-makers to a single organization.'
                ],
                [
                    'title' => 'Interaction History', 
                    'icon'  => 'fa-timeline', 
                    'desc'  => 'Log calls, meetings, and emails against each client. See the full chronological timeline of a relationship in one scrollable view.'
                ],
                [
                    'title' => 'Opportunity & Pipeline Tracking', 
                    'icon'  => 'fa-bullseye', 
                    'desc'  => 'Track leads and proposals through custom sales stages. Know the value of your pipeline and the likelihood of each deal closing.'
                ],
                [
                    'title' => 'Tasks & Follow-up Reminders', 
                    'icon'  => 'fa-calendar-check', 
                    'desc'  => 'Assign tasks to team members and set automated reminders. Ensure important follow-ups never fall through the cracks.'
                ],
                [
                    'title' => 'Linked Quote & Job History', 
                    'icon'  => 'fa-link', 
                    'desc'  => 'Every project and invoice is linked to the client record. See the full commercial relationship beyond just contact details.'
                ],
                [
                    'title' => 'Segmentation & Tags', 
                    'icon'  => 'fa-tags', 
                    'desc'  => 'Group clients by type, location, or industry. Filter and report on specific segments to target your communication effectively.'
                ],
                [
                    'title' => 'Client Profitability View', 
                    'icon'  => 'fa-chart-pie', 
                    'desc'  => 'See revenue and margins by client. Identify which relationships are most valuable and where to focus your business energy.'
                ],
                [
                    'title' => 'Seamless Email Integration', 
                    'icon'  => 'fa-envelope-open-text', 
                    'desc'  => 'Connect your email so correspondence is automatically logged against the right record—no manual data entry required.'
                ],
                [
                    'title' => 'Granular Access Controls', 
                    'icon'  => 'fa-shield-halved', 
                    'desc'  => 'Control who can see sensitive client data. Your whole team works from one system with secure, role-based permissions.'
                ]
            ],
            'cta' => [
                'title'    => "Let's get connected.",
                'subtitle' => "Ready to centralize your client intelligence? Let's discuss your specific business workflow.",
                'btn_text' => 'Get Started',
                'url'      => route('contact')
            ]
        ];        
        $supplierModule = [
            'intro' => [
                'badge_text' => '— SALES PIPELINE —',
                'badge_icon' => 'fa-filter-circle-dollar',
                'title'      => 'See exactly where every <span class="text-accent fraunces section-accent fw-normal">opportunity stands</span>',
                'content'    => 'Your pipeline view gives you a live picture of every active opportunity—what stage it\'s at, what it\'s worth, and what needs to happen next. No more guessing which proposals are still live or chasing your team for manual updates.'
            ],
            'ui' => [
                'table_title' => 'Sales Pipeline',
                'stats' => [
                    ['label' => 'Total Pipeline: $284,000', 'color' => 'body'],
                    ['label' => 'Active Proposals: 7', 'color' => 'accent'],
                ],
                'rows' => [
                    [
                        'name' => 'Coastal Homes', 
                        'subtext' => 'Proposal: High-End Residential', 
                        'date' => 'Sent 8 days ago', 
                        'status' => 'Negotiating', 
                        'status_color' => 'warning'
                    ],
                    [
                        'name' => 'Northgate Logistics', 
                        'subtext' => 'Initial Site Consultation', 
                        'date' => 'Meeting Fri', 
                        'status' => 'Proposal', 
                        'status_color' => 'accent'
                    ],
                    [
                        'name' => 'Meridian Group', 
                        'subtext' => 'Commercial Fit-out Contract', 
                        'date' => '✓ Signed', 
                        'status' => 'Won', 
                        'status_color' => 'success'
                    ],
                    [
                        'name' => 'Blue Peak Co', 
                        'subtext' => 'General Inquiry', 
                        'date' => '3 days ago', 
                        'status' => 'Lead', 
                        'status_color' => 'secondary'
                    ],
                ],
                'alert' => '⚠ Follow-up: Coastal Homes proposal has been open for 8 days without a response.'
            ],
            'footer_features' => [
                'Drag opportunities between custom stages as they progress through your funnel',
                'Real-time pipeline valuation calculated automatically at every stage',
                'Automated alerts for stagnant proposals that require immediate follow-up',
                'One-click conversion from a won opportunity into a live job, project, or order'
            ]
        ];
        $modulesHeader = [
            'section_class' => 'bg-body',
            'badge'          => '— Other Modules —',
            'heading_start'  => 'Explore the',
            'dynamic_word'   => 'full suite',
            'description'    => 'This module works best when it\'s connected to the rest of your business. Here\'s what else is available.',
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
            'description'    => 'Client and customer management is relevant across multiple industries. See how it applies to your specific business type.',
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
                'column_class' => 'col-12 col-md-6 col-lg-7',
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
                'column_class' => 'col-12 col-md-6 col-lg-7',
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