@extends('layouts.app')
@section('title', 'Subcontractor Management | External Workforce Coordination by Begin360')
@section('meta_title', 'Subcontractor Management Architecture: External Workforce & Compliance | Begin360')
@section('meta_description', 'Bring external teams into your workflow seamlessly. From tracking compliance and inductive verification to unified job allocation and automatic payment preparation, manage subbies with Begin360.')
@section('meta_keywords', 'Subcontractor Management Software Australia, External Workforce ERP, Subbie Tracking Tool, Contractor Compliance Systems, Construction Vendor Architecture, Third Party Labor Tracking, Automated Payment Claims, Vendor Coordination Portal')
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
                ['label' => 'Subcontractor Management', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Subbies managed.<br/>Nothing',
            'dynamic_word' => 'missed.',
            'description' => 'Using subcontractors without the right systems means chasing paperwork, losing track of costs, and finding out someone wasn\'t compliant after the job is done. Begin360 gives you one place to manage every subcontractor — from onboarding and compliance through to scheduling, purchase orders, and payment.',
            'hero_image' => '<svg viewBox="0 0 460 345" xmlns="http://www.w3.org/2000/svg" style="padding:16px;">
                    <rect width="460" height="345" fill="#f7faf7"></rect>
                    <rect x="16" y="16" width="428" height="313" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="36" y="44" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Subcontractor Register</text>
                    <rect x="340" y="30" width="92" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="386" y="44" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">12 active subbies</text>
                    <line x1="36" y1="56" x2="428" y2="56" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Column headers -->
                    <text x="36" y="72" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">SUBCONTRACTOR</text>
                    <text x="210" y="72" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">TRADE</text>
                    <text x="282" y="72" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">INSURANCE</text>
                    <text x="352" y="72" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">LICENCE</text>
                    <text x="428" y="72" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880" text-anchor="end">STATUS</text>
                    <line x1="36" y1="78" x2="428" y2="78" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 1 — compliant -->
                    <circle cx="50" cy="100" r="11" fill="#e8fde9"></circle>
                    <text x="50" y="104" font-family="DM Sans,sans-serif" font-size="10" font-weight="700" fill="#017304" text-anchor="middle">BP</text>
                    <text x="68" y="97" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">BluePeak Concreting</text>
                    <text x="68" y="109" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">ABN 44 123 456 789</text>
                    <text x="222" y="103" font-family="DM Sans,sans-serif" font-size="11" fill="#444440" text-anchor="middle">Concrete</text>
                    <rect x="272" y="92" width="52" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="298" y="104" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">✓ Valid</text>
                    <rect x="342" y="92" width="52" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="368" y="104" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">✓ Valid</text>
                    <rect x="392" y="92" width="36" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="410" y="104" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">Active</text>
                    <line x1="36" y1="118" x2="428" y2="118" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 2 — insurance expiring -->
                    <rect x="36" y="120" width="392" height="34" fill="#fffbea" opacity="0.5"></rect>
                    <circle cx="50" cy="137" r="11" fill="#faeeda"></circle>
                    <text x="50" y="141" font-family="DM Sans,sans-serif" font-size="10" font-weight="700" fill="#ba7517" text-anchor="middle">RS</text>
                    <text x="68" y="134" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Redstone Steel Pty Ltd</text>
                    <text x="68" y="146" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">ABN 77 987 654 321</text>
                    <text x="222" y="140" font-family="DM Sans,sans-serif" font-size="11" fill="#444440" text-anchor="middle">Steel fix</text>
                    <rect x="268" y="129" width="64" height="18" rx="9" fill="#faeeda" stroke="#f0d9b8" stroke-width="1"></rect>
                    <text x="300" y="141" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">⚠ Exp 1 Jun</text>
                    <rect x="342" y="129" width="52" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="368" y="141" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">✓ Valid</text>
                    <rect x="392" y="129" width="36" height="18" rx="9" fill="#faeeda"></rect>
                    <text x="410" y="141" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">⚠ Act</text>
                    <line x1="36" y1="156" x2="428" y2="156" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 3 — compliant -->
                    <circle cx="50" cy="174" r="11" fill="#e8fde9"></circle>
                    <text x="50" y="178" font-family="DM Sans,sans-serif" font-size="10" font-weight="700" fill="#017304" text-anchor="middle">AP</text>
                    <text x="68" y="171" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Apex Electrical Services</text>
                    <text x="68" y="183" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">ABN 22 456 789 123</text>
                    <text x="222" y="177" font-family="DM Sans,sans-serif" font-size="11" fill="#444440" text-anchor="middle">Electrical</text>
                    <rect x="272" y="166" width="52" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="298" y="178" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">✓ Valid</text>
                    <rect x="342" y="166" width="52" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="368" y="178" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">✓ Valid</text>
                    <rect x="392" y="166" width="36" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="410" y="178" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">Active</text>
                    <line x1="36" y1="193" x2="428" y2="193" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 4 — licence expired -->
                    <rect x="36" y="195" width="392" height="34" fill="#fef2f2" opacity="0.4"></rect>
                    <circle cx="50" cy="212" r="11" fill="#fce8e8"></circle>
                    <text x="50" y="216" font-family="DM Sans,sans-serif" font-size="10" font-weight="700" fill="#e24b4a" text-anchor="middle">MW</text>
                    <text x="68" y="209" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Mainway Plumbing Co.</text>
                    <text x="68" y="221" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">ABN 55 321 654 987</text>
                    <text x="222" y="215" font-family="DM Sans,sans-serif" font-size="11" fill="#444440" text-anchor="middle">Plumbing</text>
                    <rect x="272" y="204" width="52" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="298" y="216" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">✓ Valid</text>
                    <rect x="336" y="204" width="66" height="18" rx="9" fill="#fcebeb"></rect>
                    <text x="369" y="216" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#e24b4a" text-anchor="middle">✗ Expired</text>
                    <rect x="388" y="204" width="40" height="18" rx="9" fill="#fcebeb"></rect>
                    <text x="408" y="216" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#e24b4a" text-anchor="middle">Blocked</text>
                    <line x1="36" y1="232" x2="428" y2="232" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Summary boxes -->
                    <rect x="36" y="242" width="100" height="44" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="86" y="259" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">Fully compliant</text>
                    <text x="86" y="277" font-family="DM Sans,sans-serif" font-size="16" font-weight="700" fill="#01C608" text-anchor="middle">9</text>

                    <rect x="148" y="242" width="100" height="44" rx="8" fill="#faeeda" stroke="#f0d9b8" stroke-width="1"></rect>
                    <text x="198" y="259" font-family="DM Sans,sans-serif" font-size="10" fill="#ba7517" text-anchor="middle">Expiring soon</text>
                    <text x="198" y="277" font-family="DM Sans,sans-serif" font-size="16" font-weight="700" fill="#ba7517" text-anchor="middle">2</text>

                    <rect x="260" y="242" width="100" height="44" rx="8" fill="#fcebeb" stroke="#f5c2c2" stroke-width="1"></rect>
                    <text x="310" y="259" font-family="DM Sans,sans-serif" font-size="10" fill="#e24b4a" text-anchor="middle">Blocked</text>
                    <text x="310" y="277" font-family="DM Sans,sans-serif" font-size="16" font-weight="700" fill="#e24b4a" text-anchor="middle">1</text>

                    <rect x="372" y="242" width="72" height="44" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="408" y="259" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Total</text>
                    <text x="408" y="277" font-family="DM Sans,sans-serif" font-size="16" font-weight="700" fill="#111110" text-anchor="middle">12</text>

                    <!-- Footer note -->
                    <rect x="36" y="298" width="392" height="16" rx="5" fill="#e8fde9"></rect>
                    <text x="232" y="310" font-family="DM Sans,sans-serif" font-size="10" fill="#017304" text-anchor="middle">✓  Expiry alerts sent automatically · Blocked subbies cannot be scheduled</text>
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
            'scroll_text' => 'Explore vendor engine'
        ];
        $complianceModule = [
            'intro' => [
                'badge'   => '— What This Module Does —',
                'title'   => 'One place for every subcontractor — compliance, costs, and<span class="text-accent fraunces section-accent fw-normal"> work</span>',
                'content' => '<p class="fs-6 mb-4">When you\'re managing subcontractors across a spreadsheet, a filing cabinet, and a group chat, things slip. Insurance lapses without anyone noticing. A sub gets scheduled on a job they\'re not licensed for. Invoices arrive without a matching purchase order. You find out about the problem when it\'s already a liability.</p>
                            <p class="fs-6 mb-4">Subcontractor Management gives you a live register of every subcontractor you work with — their licences, insurance, ABN, and compliance status — with automatic alerts before anything expires. You can only schedule compliant subbies, raise purchase orders before the work starts, and match their invoices to an approved order when they arrive.</p>
                            <p class="small opacity-75">Everything connects. Subcontractor costs flow into your project budgets automatically. Their work appears on the same dispatch board as your internal team. And when it\'s time to pay, the approval trail is already there.</p>'
            ],
            'features' => [
                [
                    'icon'    => 'fa-list-check', // Maps to 📋 symbol context
                    'title'   => 'Live compliance register with automatic alerts',
                    'content' => 'Every subcontractor\'s licence, insurance, and certifications are stored in one place. Get automatic alerts before anything expires — and block scheduling for anyone whose documents are out of date.'
                ],
                [
                    'icon'    => 'fa-box-open', // Maps to 📦 symbol context
                    'title'   => 'Purchase orders before the work starts',
                    'content' => 'Raise a PO against the project or job before a subcontractor sets foot on site. When their invoice arrives, it matches against the approved order — no surprises, no unapproved spend.'
                ],
                [
                    'icon'    => 'fa-wallet', // Maps to 💰 symbol context
                    'title'   => 'Subcontractor costs tracked against project budgets',
                    'content' => 'Every subcontractor cost is posted against the project it belongs to in real time. You always know how much of the budget has gone to subbies — and what\'s left for the rest of the work.'
                ],
                [
                    'icon'    => 'fa-calendar-days', // Maps to 🗓️ symbol context
                    'title'   => 'Scheduled on the same board as your internal team',
                    'content' => 'Subbies appear on your dispatch and scheduling board alongside your own people. The office sees the full picture — not just the internal team — without maintaining two separate systems.'
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
            'bg_text' => 'SUBCONTRACTORS',
            'header' => [
                'badge_icon'  => 'fa-code-merge',
                'badge_text'  => '— SYSTEM ARCHITECTURE —',
                'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
                'description' => 'Everything you need to manage subcontractors properly — from first onboarding through to final payment — without the admin chaos or compliance blind spots.'
            ],
            'features' => [
                [
                    'title' => 'Subcontractor register', 
                    'icon'  => 'fa-address-card', // Maps to 📋
                    'desc'  => 'A central record for every subcontractor — ABN, contact details, trade type, licences, insurance certificates, and compliance status. Everything in one place, always current.'
                ],
                [
                    'title' => 'Compliance expiry alerts', 
                    'icon'  => 'fa-bell', // Maps to 🔔
                    'desc'  => 'Automatic alerts when licences, insurance, or certifications are approaching expiry — sent to the right person with enough lead time to chase the document before it becomes a problem.'
                ],
                [
                    'title' => 'Scheduling block for non-compliant subbies', 
                    'icon'  => 'fa-ban', // Maps to 🚫
                    'desc'  => 'Anyone with expired or missing compliance documents cannot be scheduled for work. The system prevents the assignment — so the risk is caught before the subcontractor is on site, not after.'
                ],
                [
                    'title' => 'Purchase order management', 
                    'icon'  => 'fa-box-open', // Maps to 📦
                    'desc'  => 'Raise purchase orders against specific projects or jobs before work begins. Subbies can receive POs directly, and their invoices are matched against the approved order on arrival.'
                ],
                [
                    'title' => 'Invoice matching and approval', 
                    'icon'  => 'fa-receipt', // Maps to 🧾
                    'desc'  => 'When a subcontractor invoice arrives, it\'s matched to the purchase order automatically. Only approved invoices flow through to payment — no rogue spend, no duplicate payments.'
                ],
                [
                    'title' => 'Costs posted to project budgets', 
                    'icon'  => 'fa-wallet', // Maps to 💰
                    'desc'  => 'Every approved subcontractor cost is posted to the right project or job in real time. Budget vs actual always includes subcontractor spend — not just internal labour and materials.'
                ],
                [
                    'title' => 'Scheduling alongside internal team', 
                    'icon'  => 'fa-calendar-days', // Maps to 🗓️
                    'desc'  => 'Subcontractors appear on the same dispatch board as your employees. Assign them to jobs, send them job details, and track completion — without a separate system for subbies.'
                ],
                [
                    'title' => 'Performance and reliability tracking', 
                    'icon'  => 'fa-star', // Maps to ⭐
                    'desc'  => 'Track on-time completion, quality issues, and feedback for every subcontractor over time. Know who your most reliable subbies are before you assign them to your most important jobs.'
                ],
                [
                    'title' => 'Document storage per subcontractor', 
                    'icon'  => 'fa-folder-open', // Maps to 📁
                    'desc'  => 'Insurance certificates, licence copies, signed agreements, and safety inductions stored against each subcontractor record — accessible when you need them, auditable when you have to be.'
                ]
            ],
            'cta' => [
                'title'    => "Let's get connected.",
                'subtitle' => "Ready to automate your subcontractor management workflow? Let's discuss your requirements.",
                'btn_text' => 'Get Started',
                'url'      => route('contact')
            ]
        ];
        $supplierModule = [
            'intro' => [
                'badge_text' => '— WORKFORCE COSTS —',
                'badge_icon' => 'fa-receipt',
                'title'      => 'Purchase Orders & Invoicing. No PO, no payment. Every subcontractor <span class="text-accent fraunces section-accent fw-normal">cost accounted for.</span>',
                'content'    => 'One of the most common ways subcontractor costs blow out is invoices that arrive with no matching order — work that was agreed verbally, scoped differently to what was quoted, or simply billed at a higher rate than expected. Begin360 requires a purchase order before work begins, so when the invoice arrives you\'re comparing it against something approved, not trying to remember what was discussed on a phone call three weeks ago.'
            ],
            'ui' => [
                'table_title' => 'PO #PO-0482 — Matched to Invoice',
                'stats' => [
                    ['label' => '✓ Approved', 'color' => 'success'],
                    ['label' => 'Subcontractor: BluePeak Concreting Pty Ltd', 'color' => 'secondary'],
                    ['label' => 'Project: Riverside Apartments — Stage 1', 'color' => 'secondary'],
                    ['label' => 'Raised by: Marcus Tran · 5 May 2026', 'color' => 'secondary'],
                    ['label' => 'Invoice received: INV-8841 · 12 May 2026', 'color' => 'secondary'],
                ],
                'rows' => [
                    [
                        'name' => 'Slab pour — Level 1', 
                        'subtext' => '240m² @ $85/m²', 
                        'date' => '$20,400 (PO Amount)', 
                        'status' => '$20,400 ✓', 
                        'status_color' => 'success'
                    ],
                    [
                        'name' => 'Formwork supply and install', 
                        'subtext' => 'Lump sum, per scope', 
                        'date' => '$8,500 (PO Amount)', 
                        'status' => '$8,500 ✓', 
                        'status_color' => 'success'
                    ],
                    [
                        'name' => 'Pump hire', 
                        'subtext' => 'Day rate — 2 days est.', 
                        'date' => '$1,200 (PO Amount)', 
                        'status' => '$1,800 ⚠', 
                        'status_color' => 'danger'
                    ],
                    [
                        'name' => 'PO Total / Invoice Total', 
                        'subtext' => 'Financial summary comparison', 
                        'date' => 'PO Total: $30,100', 
                        'status' => 'Invoice Total: $30,700', 
                        'status_color' => 'warning'
                    ],
                ],
                'alert' => '⚠ Variance $600 — Review before approving',
                'primary_btn' => [
                    'text' => 'Approve matched lines → Payment',
                    'url'  => '#'
                ]
            ],
            'footer_features' => [
                'POs raised against the project or job before the subcontractor starts work',
                'Subcontractor invoices matched to approved POs on receipt — discrepancies flagged immediately',
                'Only matched and approved invoices flow through to payment runs',
                'All subcontractor costs visible in real time against the project budget they belong to'
            ]
        ];
        $industryHeader = [
            'section_class' => 'bg-body-tertiary',
            'badge'          => '— Sectors We Transform —',
            'heading_start'  => 'Which industries use this',
            'dynamic_word'   => 'module?',
            'description'    => 'Subcontractor Management is used wherever external contractors are a normal part of how work gets delivered — construction, trades, professional services, and any business where specialist skills are brought in on a project-by-project basis.',
            'primary_btn'    => [
                'text' => 'View All Industries',
                'url'  => route('industries.index'),
                'icon' => 'fa-layer-group'
            ]
        ];
        $industries = [
            [
                'title' => 'Construction',
                'icon' => 'fa-helmet-safety', // 🏗️
                'description' => 'Manage the full subcontractor chain across every active site — concreters, steel fixers, electricians, plumbers, and more. Compliance, costs, and scheduling in one system.',
                'url' => route('industries.show', 'construction'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Trades & Field Services',
                'icon' => 'fa-screwdriver-wrench', // 🔧
                'description' => 'Use subbies to handle overflow work, specialist jobs, or jobs outside your service area — with the same compliance checks, scheduling, and cost tracking as your internal team.',
                'url' => route('industries.show', 'trades'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Professional Services',
                'icon' => 'fa-briefcase', // 💼
                'description' => 'Manage specialist contractors, freelancers, and associate consultants brought in for specific engagements — with POs, invoice matching, and cost tracking against each client project.',
                'url' => route('industries.show', 'professional-services'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Food & Beverage',
                'icon' => 'fa-wine-glass', // 🍷
                'description' => 'Manage contract labour, maintenance contractors, and specialist service providers with proper compliance records, purchase orders, and costs linked to the right part of the business.',
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
            'description'    => 'Subcontractor Management connects directly to scheduling, project management, procurement, and finance. Here\'s what else is available.',
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