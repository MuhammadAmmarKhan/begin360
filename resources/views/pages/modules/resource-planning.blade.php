@extends('layouts.app')
@section('title', 'Resource Planning & Capacity Tracking | High-Fidelity Systems by Begin360')
@section('meta_title', 'Resource Planning Architecture: Team Allocation & Capacity Mapping | Begin360')
@section('meta_description', 'Know who is available before you commit. From live team allocation tracking to cross-project capacity planning, eliminate scheduling blind spots and optimize utilization with Begin360.')
@section('meta_keywords', 'Resource Planning Software Australia, Workforce Allocation ERP, Capacity Tracking Tool, Team Utilization Metrics, Operations Scheduling Architecture, Project Resource Management, Enterprise Capacity Engine, Workforce Scheduling System')
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
                ['label' => 'Resource Planning', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Know who\'s available<br/>before you',
            'dynamic_word' => 'commit.',
            'description' => 'Taking on new work without a clear picture of your team\'s capacity is how good businesses get into trouble. Begin360\'s Resource Planning module shows you exactly who is allocated, who has room, and where the gaps are — across every active project and job at once.',
            'hero_image' => '<svg viewBox="0 0 460 345" xmlns="http://www.w3.org/2000/svg" style="padding:16px;">
                    <rect width="460" height="345" fill="#f7faf7"></rect>
                    <rect x="16" y="16" width="428" height="313" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="36" y="44" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Team Capacity — Week of 12 May 2026</text>
                    <rect x="352" y="30" width="80" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="392" y="44" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">Live view</text>
                    <line x1="36" y1="56" x2="428" y2="56" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Column headers -->
                    <text x="36" y="72" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">TEAM MEMBER</text>
                    <text x="196" y="72" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">ALLOCATED</text>
                    <text x="280" y="72" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">CAPACITY</text>
                    <text x="428" y="72" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880" text-anchor="end">STATUS</text>
                    <line x1="36" y1="78" x2="428" y2="78" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 1 — Priya, healthy -->
                    <circle cx="50" cy="100" r="12" fill="#e8fde9"></circle>
                    <text x="50" y="105" font-family="DM Sans,sans-serif" font-size="11" font-weight="700" fill="#017304" text-anchor="middle">PS</text>
                    <text x="70" y="97" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Priya Sharma</text>
                    <text x="70" y="110" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Senior Consultant</text>
                    <text x="220" y="103" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">28 hrs</text>
                    <rect x="270" y="94" width="80" height="10" rx="3" fill="#e8e8e4"></rect>
                    <rect x="270" y="94" width="56" height="10" rx="3" fill="#01C608"></rect>
                    <text x="358" y="103" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">70%</text>
                    <rect x="378" y="90" width="50" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="403" y="102" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">Good</text>
                    <line x1="36" y1="118" x2="428" y2="118" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 2 — Marcus, overloaded -->
                    <rect x="36" y="122" width="392" height="32" rx="0" fill="#fff8f0" opacity="0.6"></rect>
                    <circle cx="50" cy="138" r="12" fill="#faeeda"></circle>
                    <text x="50" y="143" font-family="DM Sans,sans-serif" font-size="11" font-weight="700" fill="#ba7517" text-anchor="middle">MT</text>
                    <text x="70" y="135" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Marcus Tran</text>
                    <text x="70" y="148" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Project Manager</text>
                    <text x="220" y="141" font-family="DM Sans,sans-serif" font-size="12" fill="#ba7517" text-anchor="middle">42 hrs</text>
                    <rect x="270" y="132" width="80" height="10" rx="3" fill="#e8e8e4"></rect>
                    <rect x="270" y="132" width="80" height="10" rx="3" fill="#ba7517"></rect>
                    <text x="358" y="141" font-family="DM Sans,sans-serif" font-size="10" fill="#ba7517">105%</text>
                    <rect x="370" y="128" width="58" height="18" rx="9" fill="#faeeda"></rect>
                    <text x="399" y="140" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">⚠ Over</text>
                    <line x1="36" y1="156" x2="428" y2="156" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 3 — Connor, available -->
                    <circle cx="50" cy="176" r="12" fill="#e8fde9"></circle>
                    <text x="50" y="181" font-family="DM Sans,sans-serif" font-size="11" font-weight="700" fill="#017304" text-anchor="middle">CL</text>
                    <text x="70" y="173" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Connor Lee</text>
                    <text x="70" y="186" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Implementation Specialist</text>
                    <text x="220" y="179" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">12 hrs</text>
                    <rect x="270" y="170" width="80" height="10" rx="3" fill="#e8e8e4"></rect>
                    <rect x="270" y="170" width="24" height="10" rx="3" fill="#01C608"></rect>
                    <text x="358" y="179" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">30%</text>
                    <rect x="370" y="166" width="58" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="399" y="178" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">Available</text>
                    <line x1="36" y1="194" x2="428" y2="194" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 4 — Aisha, healthy -->
                    <circle cx="50" cy="214" r="12" fill="#e8fde9"></circle>
                    <text x="50" y="219" font-family="DM Sans,sans-serif" font-size="11" font-weight="700" fill="#017304" text-anchor="middle">AK</text>
                    <text x="70" y="211" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Aisha Khan</text>
                    <text x="70" y="224" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Business Analyst</text>
                    <text x="220" y="217" font-family="DM Sans,sans-serif" font-size="12" fill="#444440" text-anchor="middle">32 hrs</text>
                    <rect x="270" y="208" width="80" height="10" rx="3" fill="#e8e8e4"></rect>
                    <rect x="270" y="208" width="64" height="10" rx="3" fill="#01C608"></rect>
                    <text x="358" y="217" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">80%</text>
                    <rect x="378" y="204" width="50" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="403" y="216" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">Good</text>
                    <line x1="36" y1="232" x2="428" y2="232" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Summary row -->
                    <rect x="36" y="242" width="116" height="44" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="94" y="259" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Total hrs booked</text>
                    <text x="94" y="278" font-family="DM Sans,sans-serif" font-size="15" font-weight="700" fill="#111110" text-anchor="middle">114 hrs</text>

                    <rect x="166" y="242" width="116" height="44" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="224" y="259" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">Available hrs</text>
                    <text x="224" y="278" font-family="DM Sans,sans-serif" font-size="15" font-weight="700" fill="#01C608" text-anchor="middle">28 hrs</text>

                    <rect x="296" y="242" width="132" height="44" rx="8" fill="#faeeda" stroke="#f0d9b8" stroke-width="1"></rect>
                    <text x="362" y="259" font-family="DM Sans,sans-serif" font-size="10" fill="#ba7517" text-anchor="middle">Needs attention</text>
                    <text x="362" y="278" font-family="DM Sans,sans-serif" font-size="15" font-weight="700" fill="#ba7517" text-anchor="middle">1 person</text>

                    <!-- Footer bar -->
                    <rect x="36" y="298" width="392" height="16" rx="5" fill="#e8fde9"></rect>
                    <text x="232" y="310" font-family="DM Sans,sans-serif" font-size="10" fill="#017304" text-anchor="middle">✓  Allocations update automatically as jobs and projects are assigned</text>
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
            'scroll_text' => 'Explore capacity engine'
        ];
        $complianceModule = [
            'intro' => [
                'badge'   => '— What This Module Does —',
                'title'   => 'One view of your whole team\'s capacity — <span class="text-accent fraunces section-accent fw-normal">not a guess</span>',
                'content' => '<p class="fs-6 mb-4">Most businesses find out someone is overloaded when a deadline slips or a team member says they can\'t take anything else on. By then, there\'s already a problem. The work was committed, the client expectation is set, and you\'re scrambling to fix it.</p>
                            <p class="fs-6 mb-4">Resource Planning gives you a live picture of how your team\'s time is allocated across every active project and job — before you take on the next one. You can see who has genuine availability, who is at risk of burning out, and where you need to redistribute work or bring in additional support.</p>
                            <p class="small opacity-75">When a new quote is being built or a new job accepted, the capacity picture is right there. You know whether you can deliver before you commit — not after.</p>'
            ],
            'features' => [
                [
                    'icon'    => 'fa-chart-simple', // Maps to 📊 symbol context
                    'title'   => 'Live capacity across every person and role',
                    'content' => 'See each team member\'s allocated hours against their available hours in real time, updated automatically as projects and jobs are assigned or completed.'
                ],
                [
                    'icon'    => 'fa-triangle-exclamation', // Maps to ⚠️ symbol context
                    'title'   => 'Overallocation flagged before it becomes a problem',
                    'content' => 'Get a clear signal when someone is approaching or exceeding capacity — so you can redistribute work before deadlines are at risk, not after they\'ve been missed.'
                ],
                [
                    'icon'    => 'fa-binoculars', // Maps to 🔭 symbol context
                    'title'   => 'Forward visibility, not just today',
                    'content' => 'See how capacity looks over the coming weeks and months — so you can make smart decisions about quoting, hiring, and workload distribution well in advance.'
                ],
                [
                    'icon'    => 'fa-link', // Maps to 🔗 symbol context
                    'title'   => 'Connected to projects, jobs, and scheduling',
                    'content' => 'Allocations flow directly from your project and job assignments — no separate spreadsheet to maintain. When work changes, the capacity picture updates automatically.'
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
            'bg_text' => 'RESOURCES',
            'header' => [
                'badge_icon'  => 'fa-code-merge',
                'badge_text'  => '— SYSTEM ARCHITECTURE —',
                'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
                'description' => 'Everything you need to plan your team\'s workload with confidence — from day-to-day visibility to forward capacity planning and utilisation reporting.'
            ],
            'features' => [
                [
                    'title' => 'Capacity calendar by person and team', 
                    'icon'  => 'fa-calendar-days', // Maps to 📅
                    'desc'  => 'See allocated vs available hours for each team member in a weekly or monthly view. Spot gaps and pressure points across the whole team at a glance.'
                ],
                [
                    'title' => 'Allocation by project and job', 
                    'icon'  => 'fa-bullseye', // Maps to 🎯
                    'desc'  => 'Assign specific hours to each team member against the project or job they\'re working on. Allocations are visible in both the resource view and the project view simultaneously.'
                ],
                [
                    'title' => 'Overallocation alerts', 
                    'icon'  => 'fa-circle-exclamation', // Maps to 🔴
                    'desc'  => 'Anyone exceeding their available hours is flagged automatically — with a clear view of which projects are contributing to the overload, so you know exactly where to adjust.'
                ],
                [
                    'title' => 'Forward capacity planning', 
                    'icon'  => 'fa-binoculars', // Maps to 🔭
                    'desc'  => 'View capacity projections 4, 8, or 12 weeks ahead based on current allocations and scheduled work. Understand whether you have the headroom to take on new work before you quote for it.'
                ],
                [
                    'title' => 'Drag-and-drop reallocation', 
                    'icon'  => 'fa-shuffle', // Maps to 🔀
                    'desc'  => 'Redistribute work between team members directly from the resource view. Move allocations between people or adjust hours without touching the underlying project or job records.'
                ],
                [
                    'title' => 'Role-based capacity planning', 
                    'icon'  => 'fa-user-gear', // Maps to 👤
                    'desc'  => 'Plan capacity by role as well as by person — useful for quoting and headcount decisions when you know the type of resource you need before you know the exact person.'
                ],
                [
                    'title' => 'Leave and availability management', 
                    'icon'  => 'fa-umbrella-beach', // Maps to 🏖️
                    'desc'  => 'Factor in planned leave, part-time schedules, and public holidays so your capacity picture is always accurate — not based on the assumption everyone works five full days every week.'
                ],
                [
                    'title' => 'Utilisation reporting', 
                    'icon'  => 'fa-chart-line', // Maps to 📈
                    'desc'  => 'See billable vs non-billable utilisation by person, team, or period. Understand where time is going and how that compares to your targets — over any date range you need.'
                ],
                [
                    'title' => 'Linked to quoting and scheduling', 
                    'icon'  => 'fa-link', // Maps to 🔗
                    'desc'  => 'When a new quote is being prepared, check available capacity before committing. When a job is scheduled, allocations update automatically — no manual syncing between systems.'
                ]
            ],
            'cta' => [
                'title'    => "Let's get connected.",
                'subtitle' => "Ready to automate your resource planning workflow? Let's discuss your requirements.",
                'btn_text' => 'Get Started',
                'url'      => route('contact')
            ]
        ];     
        $supplierModule = [
            'intro' => [
                'badge_text' => '— FORWARD PLANNING —',
                'badge_icon' => 'fa-calendar-week',
                'title'      => 'See where your capacity is going, weeks before it becomes a <span class="text-accent fraunces section-accent fw-normal">problem</span>',
                'content'    => 'Taking on a new project when your team is already at 90% capacity is a decision that looks fine on paper until three weeks in when something starts to slip. The forward capacity view shows you — before you commit — how your team\'s workload looks over the coming weeks, where the pressure points are, and where you genuinely have room to take on more.'
            ],
            'ui' => [
                'table_title' => 'Capacity Outlook — Next 6 Weeks',
                'stats' => [
                    ['label' => 'Capacity ceiling', 'color' => 'secondary'],
                    ['label' => '⚠ Marcus over', 'color' => 'danger'],
                    ['label' => '✓ Room for new work', 'color' => 'success'],
                ],
                // Weekly capacity data tracking graph metrics
                'chart_data' => [
                    'y_axis_ticks' => ['100%', '75%', '50%', '25%'],
                    'weeks' => [
                        ['date' => '12 May', 'percentage' => '70%', 'status' => 'normal'],
                        ['date' => '19 May', 'percentage' => '105%', 'status' => 'overallocated'],
                        ['date' => '26 May', 'percentage' => '85%', 'status' => 'warning'],
                        ['date' => '2 Jun',  'percentage' => '60%', 'status' => 'normal'],
                        ['date' => '9 Jun',  'percentage' => '40%', 'status' => 'normal'],
                        ['date' => '16 Jun', 'percentage' => '30%', 'status' => 'normal'],
                    ]
                ],
                // Maintaining rows fallback mapping to keep uniform schema structure with component
                'rows' => [
                    [
                        'name' => '12 May', 
                        'subtext' => 'Weekly load projection', 
                        'date' => '', 
                        'status' => '70%', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => '19 May', 
                        'subtext' => 'Weekly load projection', 
                        'date' => '⚠ Marcus over', 
                        'status' => '105%', 
                        'status_color' => 'danger'
                    ],
                    [
                        'name' => '26 May', 
                        'subtext' => 'Weekly load projection', 
                        'date' => '', 
                        'status' => '85%', 
                        'status_color' => 'warning'
                    ],
                    [
                        'name' => '2 Jun', 
                        'subtext' => 'Weekly load projection', 
                        'date' => '✓ Room for new work', 
                        'status' => '60%', 
                        'status_color' => 'success'
                    ],
                    [
                        'name' => '9 Jun', 
                        'subtext' => 'Weekly load projection', 
                        'date' => '✓ Room for new work', 
                        'status' => '40%', 
                        'status_color' => 'success'
                    ],
                    [
                        'name' => '16 Jun', 
                        'subtext' => 'Weekly load projection', 
                        'date' => '✓ Room for new work', 
                        'status' => '30%', 
                        'status_color' => 'success'
                    ],
                ],
                'alert' => 'Capacity Alert: Adjust allocations on week commencing 19 May to balance Marcus\' overload.'
            ],
            'footer_features' => [
                '4, 8, and 12-week capacity projections based on current and planned allocations',
                'Weeks with capacity gaps or overallocation highlighted automatically',
                'New work can be tested against the capacity view before the quote is accepted',
                'Planned leave and part-time schedules factored in automatically'
            ]
        ];
        $industryHeader = [
            'section_class' => 'bg-body-tertiary',
            'badge'          => '— Sectors We Transform —',
            'heading_start'  => 'Which industries use this',
            'dynamic_word'   => 'module?',
            'description'    => 'Resource Planning is used wherever work is delivered by people — consultants, tradespeople, project teams, field technicians. Any business that needs to know whether it has the capacity to take on the next job before committing.',
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
            'description' => 'Manage consultant and analyst capacity across multiple concurrent client engagements. Know your team\'s billable utilisation and where you have room to take on the next project.',
            'url' => route('industries.show', 'professional-services'),
            'column_class' => 'col-12 col-md-6 col-lg-6',
            'show_cta' => true
        ],
        [
            'title' => 'Construction',
            'icon' => 'fa-helmet-safety', // 🏗️
            'description' => 'Plan site crews, project managers, and subcontractors across multiple active sites. See where skilled trades are stretched and where you need to bring in additional resources.',
            'url' => route('industries.show', 'construction'),
            'column_class' => 'col-12 col-md-6 col-lg-6',
            'show_cta' => true
        ],
        [
            'title' => 'Trades & Field Services',
            'icon' => 'fa-screwdriver-wrench', // 🔧
            'description' => 'Allocate your field team to jobs without double-booking or leaving people underutilised. Coordinate leave, licences, and travel time so the schedule is realistic before it\'s committed.',
            'url' => route('industries.show', 'trades'),
            'column_class' => 'col-12 col-md-6 col-lg-6',
            'show_cta' => true
        ],
        [
            'title' => 'Food & Beverage',
            'icon' => 'fa-wine-glass', // 🍷
            'description' => 'Plan production and operations staff across shifts, seasons, and production runs. Understand where you\'re short-staffed before it affects output and fulfilment commitments.',
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
            'description'    => 'Resource Planning works at its best when connected to project management, scheduling, quoting, and time tracking. Here\'s what else is available.',
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