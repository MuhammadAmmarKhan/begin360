@extends('layouts.app')
@section('title', 'Variation Management | Contract Variation & Scope Tracking by Begin360')
@section('meta_title', 'Variation Management Architecture: Scope Changes & Claims | Begin360')
@section('meta_description', 'Protect your project margins from scope creep. From live on-site variation logging to seamless client approval workflows and progress claim adjustment, capture every change with Begin360.')
@section('meta_keywords', 'Variation Management Software Australia, Contract Scope Creep Tracker, Construction Variation Claims, Project Scope Changes, Automated Extension of Time, Variation Approval Workflow, Margin Protection ERP, Field Work Orders')
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
                ['label' => 'Variation Management', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Scope changes happen.<br/>Get',
            'dynamic_word' => 'paid for them.',
            'description' => 'Variations done on a handshake, via a text message, or simply because a client asked nicely are variations that usually don\'t get paid for. Begin360 gives you a formal process to raise, price, approve, and track every change to scope — so changed work is always documented, always approved, and always billed.',
            'hero_image' => '<svg viewBox="0 0 460 380" xmlns="http://www.w3.org/2000/svg" style="display:block;width:100%;">
                    <rect width="460" height="380" fill="#f7faf7"></rect>
                    <rect x="14" y="14" width="432" height="352" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="30" y="40" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#111110">Variation Register — Riverside Apartments</text>
                    <line x1="30" y1="52" x2="446" y2="52" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Col headers: 3 cols only — Description | Value | Status -->
                    <text x="30" y="66" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="#888880" letter-spacing="0.05em">VARIATION</text>
                    <text x="330" y="66" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="#888880" text-anchor="middle">VALUE</text>
                    <text x="446" y="66" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="#888880" text-anchor="end">STATUS</text>
                    <line x1="30" y1="72" x2="446" y2="72" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 1 — approved & billed -->
                    <text x="30" y="90" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#111110">VO-001 — Facade cladding upgrade</text>
                    <text x="30" y="103" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Client requested premium finish · 2 Apr</text>
                    <text x="330" y="95" font-family="DM Sans,sans-serif" font-size="12" font-weight="700" fill="#111110" text-anchor="middle">$18,400</text>
                    <rect x="376" y="83" width="70" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="411" y="96" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">✓ Billed</text>
                    <line x1="30" y1="114" x2="446" y2="114" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 2 — approved, unbilled -->
                    <text x="30" y="132" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#111110">VO-002 — Additional carpark level</text>
                    <text x="30" y="145" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Council design requirement · 18 Apr</text>
                    <text x="330" y="137" font-family="DM Sans,sans-serif" font-size="12" font-weight="700" fill="#111110" text-anchor="middle">$29,800</text>
                    <rect x="368" y="125" width="78" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="407" y="138" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">✓ Approved</text>
                    <line x1="30" y1="156" x2="446" y2="156" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 3 — awaiting approval -->
                    <rect x="14" y="157" width="432" height="40" fill="#fffbea" opacity="0.6"></rect>
                    <text x="30" y="174" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#111110">VO-003 — Rooftop terrace landscaping</text>
                    <text x="30" y="187" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Client scope addition · 5 May</text>
                    <text x="330" y="179" font-family="DM Sans,sans-serif" font-size="12" font-weight="700" fill="#111110" text-anchor="middle">$14,500</text>
                    <rect x="362" y="167" width="84" height="20" rx="10" fill="#faeeda" stroke="#f0d9b8" stroke-width="1"></rect>
                    <text x="404" y="180" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">⚠ Awaiting</text>
                    <line x1="30" y1="198" x2="446" y2="198" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 4 — draft -->
                    <text x="30" y="216" font-family="DM Sans,sans-serif" font-size="11" font-weight="500" fill="#aaa">VO-004 — Fire system upgrade</text>
                    <text x="30" y="229" font-family="DM Sans,sans-serif" font-size="10" fill="#c4c4be">Found during inspection · 9 May · Pricing TBC</text>
                    <text x="330" y="221" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#c4c4be" text-anchor="middle">TBC</text>
                    <rect x="382" y="209" width="64" height="20" rx="10" fill="#f4f4f2"></rect>
                    <text x="414" y="222" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880" text-anchor="middle">Draft</text>
                    <line x1="30" y1="240" x2="446" y2="240" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Summary — 3 boxes -->
                    <rect x="30" y="252" width="126" height="52" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="93" y="270" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">Approved</text>
                    <text x="93" y="290" font-family="DM Sans,sans-serif" font-size="16" font-weight="700" fill="#01C608" text-anchor="middle">$48,200</text>

                    <rect x="167" y="252" width="126" height="52" rx="8" fill="#faeeda" stroke="#f0d9b8" stroke-width="1"></rect>
                    <text x="230" y="270" font-family="DM Sans,sans-serif" font-size="10" fill="#ba7517" text-anchor="middle">Awaiting</text>
                    <text x="230" y="290" font-family="DM Sans,sans-serif" font-size="16" font-weight="700" fill="#ba7517" text-anchor="middle">$14,500</text>

                    <rect x="304" y="252" width="142" height="52" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="375" y="270" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Unbilled (approved)</text>
                    <text x="375" y="290" font-family="DM Sans,sans-serif" font-size="16" font-weight="700" fill="#444440" text-anchor="middle">$29,800</text>

                    <!-- Footer note -->
                    <rect x="30" y="318" width="416" height="34" rx="8" fill="#e8fde9"></rect>
                    <text x="238" y="332" font-family="DM Sans,sans-serif" font-size="10" fill="#017304" text-anchor="middle">✓  Approved variations update contract value automatically</text>
                    <text x="238" y="346" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">All VOs linked to project budget in real time</text>
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
            'scroll_text' => 'Explore variation engine'
        ];
        $complianceModule = [
            'intro' => [
                'badge'   => '— What This Module Does —',
                'title'   => 'A formal process for every change to scope — from first request to <span class="text-accent fraunces section-accent fw-normal">final payment</span>',
                'content' => '<p class="fs-6 mb-4">Scope changes are a normal part of project delivery. The problem isn\'t that they happen — it\'s that without a system to manage them, they happen informally. Work gets done on the basis of a conversation. The variation never gets priced properly, or the client never formally approves it, or it just gets folded into the original contract and never billed at all.</p>
                            <p class="fs-6 mb-4">Variation Management gives every scope change its own formal record — a variation order with a description, a price, a reason, and a status. The client receives it, reviews it, and approves or disputes it through a clear process. Approved variations update the contract value automatically and flow into the project budget. When it\'s time to invoice, every approved variation is already there.</p>
                            <p class="small opacity-75">Nothing gets done on a handshake. Nothing gets forgotten. And when a client asks why the final invoice is higher than the original quote, you have a complete, timestamped record of every change they asked for — and every one they approved.</p>'
            ],
            'features' => [
                [
                    'icon'    => 'fa-list-check', // Maps to 📋 symbol context
                    'title'   => 'Every variation has its own formal record',
                    'content' => 'Each scope change is raised as a variation order with a number, a description, a value, and a reason. No more undocumented changes agreed over the phone or buried in an email thread.'
                ],
                [
                    'icon'    => 'fa-pen-nib', // Maps to ✍️ symbol context
                    'title'   => 'Client approval before the work starts',
                    'content' => 'Variations are sent to the client for review and approval before the changed scope is carried out. Approved means approved — in writing, with a timestamp, linked to the variation record.'
                ],
                [
                    'icon'    => 'fa-wallet', // Maps to 💰 symbol context
                    'title'   => 'Approved variations update budgets and contract value',
                    'content' => 'When a variation is approved, the contract value and project budget update automatically. You always know the current approved value of a project — not just the original quote amount.'
                ],
                [
                    'icon'    => 'fa-receipt', // Maps to 🧾 symbol context
                    'title'   => 'Variations flow directly into invoicing',
                    'content' => 'Approved, unbilled variations appear automatically when generating a progress claim or invoice. Nothing gets left off, and nothing gets billed twice — every variation has a clear billing status.'
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
            'bg_text' => 'VARIATIONS',
            'header' => [
                'badge_icon'  => 'fa-code-merge',
                'badge_text'  => '— SYSTEM ARCHITECTURE —',
                'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
                'description' => 'Everything you need to manage scope changes properly — from the moment a client asks for something different to the moment it\'s documented, approved, delivered, and paid for.'
            ],
            'features' => [
                [
                    'title' => 'Variation order creation', 
                    'icon'  => 'fa-file-lines', // Maps to 📄
                    'desc'  => 'Raise a variation order in seconds — description, value, reason, and scope impact. Every VO gets a unique number and is linked to the project and original contract it relates to.'
                ],
                [
                    'title' => 'Client approval workflow', 
                    'icon'  => 'fa-pen-nib', // Maps to ✍️
                    'desc'  => 'Send variations to clients for review and sign-off directly from the system. Clients can approve, dispute, or request changes — with every action timestamped and recorded against the VO.'
                ],
                [
                    'title' => 'Contract value tracking', 
                    'icon'  => 'fa-chart-simple', // Maps to 📊
                    'desc'  => 'The contract value updates automatically each time a variation is approved. See the original contract amount, total approved variations, and current contract value at a glance — always current, always accurate.'
                ],
                [
                    'title' => 'Budget impact visibility', 
                    'icon'  => 'fa-wallet', // Maps to 💰
                    'desc'  => 'Approved variations post to the project budget automatically. See how each variation affects the budget and margin in real time — before the work starts, not after the invoice goes out.'
                ],
                [
                    'title' => 'Integration with progress claims and invoicing', 
                    'icon'  => 'fa-receipt', // Maps to 🧾
                    'desc'  => 'Approved, unbilled variations are included automatically when generating a progress claim or invoice. Nothing gets missed, and the billing status of every variation is always visible.'
                ],
                [
                    'title' => 'Variation register per project', 
                    'icon'  => 'fa-shuffle', // Maps to 🔀
                    'desc'  => 'Every project has its own variation register — a complete list of all VOs, their status, value, and billing history. The full picture of what\'s changed since the original contract was signed.'
                ],
                [
                    'title' => 'Document and photo attachments', 
                    'icon'  => 'fa-paperclip', // Maps to 📎
                    'desc'  => 'Attach drawings, photos, engineer instructions, or client correspondence to each variation record. Everything that supports the change is stored with the VO — accessible when you need it and auditable when you have to be.'
                ],
                [
                    'title' => 'Subcontractor variation orders', 
                    'icon'  => 'fa-helmet-safety', // Maps to 🏗️
                    'desc'  => 'When changed scope flows through to a subcontractor, raise a variation PO linked to the original subcontract. Subcontractor costs and client billings stay in sync — no manual reconciliation required.'
                ],
                [
                    'title' => 'Variation reporting and trends', 
                    'icon'  => 'fa-chart-line', // Maps to 📈
                    'desc'  => 'See the total variation value across all projects, who is raising them, and what types of changes are most common. Understand where scope creep is hitting your margins and build better contingencies into future quotes.'
                ]
            ],
            'cta' => [
                'title'    => "Let's get connected.",
                'subtitle' => "Ready to automate your Variation Management workflow? Let's discuss your requirements.",
                'btn_text' => 'Get Started',
                'url'      => route('contact')
            ]
        ];
        $supplierModule = [
            'intro' => [
                'badge_text' => '— APPROVED VARIATIONS TO INVOICE —',
                'badge_icon' => 'fa-receipt',
                'title'      => 'Every approved variation tracked, billed, and <span class="text-accent fraunces section-accent fw-normal">accounted for</span>',
                'content'    => 'The most common way variation revenue gets lost isn\'t that it\'s not approved — it\'s that by the time the invoice is being put together, no one can remember exactly which variations were approved, for how much, and whether they\'ve already been billed. Begin360 keeps a live billing status on every variation order so approved work is never left off an invoice, and nothing gets billed twice.'
            ],
            'ui' => [
                'table_title' => 'VO-002 — Additional Carpark Level',
                'stats' => [
                    ['label' => '✓ Approved', 'color' => 'success'],
                    ['label' => 'PROJECT: Riverside Apartments — Stage 1', 'color' => 'secondary'],
                    ['label' => 'CLIENT: Riverstone Developments', 'color' => 'secondary'],
                    ['label' => 'REASON: Design change — council requirement', 'color' => 'secondary'],
                    ['label' => 'RAISED BY: Marcus Tran · 18 Apr 2026', 'color' => 'secondary'],
                ],
                'rows' => [
                    [
                        'name' => 'SCOPE OF CHANGE', 
                        'subtext' => 'Addition of one basement level (B2) to meet revised council parking requirements — excavation, concrete, waterproofing, line marking & electrical for 24 additional spaces.', 
                        'date' => '', 
                        'status' => '', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Labour — excavation & concrete', 
                        'subtext' => 'Value breakdown component', 
                        'date' => '', 
                        'status' => '$14,200', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Materials — waterproofing & electrical', 
                        'subtext' => 'Value breakdown component', 
                        'date' => '', 
                        'status' => '$11,400', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Subcontractor — line marking', 
                        'subtext' => 'Value breakdown component', 
                        'date' => '', 
                        'status' => '$4,200', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Variation Total', 
                        'subtext' => 'Financial summary validation', 
                        'date' => 'SENT TO CLIENT: 19 Apr 2026 · 2:14 pm', 
                        'status' => '$29,800', 
                        'status_color' => 'accent'
                    ],
                ],
                'alert' => 'CLIENT APPROVED: 22 Apr 2026 · J. Brennan',
                'primary_btn' => [
                    'text' => 'Include in Next Invoice →',
                    'url'  => '#'
                ]
            ],
            'footer_features' => [
                'Every variation has a clear status — draft, pending client approval, approved, or billed',
                'Approved, unbilled variations pulled into progress claims and invoices automatically',
                'Contract value updated in real time as variations are approved — always reflects current scope',
                'Full audit trail from variation request through approval to billing — available any time'
            ]
        ];
        $industryHeader = [
            'section_class' => 'bg-body-tertiary',
            'badge'          => '— Sectors We Transform —',
            'heading_start'  => 'Which industries use this',
            'dynamic_word'   => 'module?',
            'description'    => 'Variation Management is used wherever project scope is defined by a contract and changes to that scope need to be formally managed — construction, professional services, trades, and any project-based business where changed work needs to be documented and paid for.',
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
                'description' => 'Variations are a daily reality on construction projects. Every design change, council requirement, or client request needs a formal VO — raised, priced, approved, and tracked against the contract value.',
                'url' => route('industries.show', 'construction'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Trades & Field Services',
                'icon' => 'fa-screwdriver-wrench', // 🔧
                'description' => 'When the scope of a job changes on site — additional work found, material upgrades, or extra time — raise a variation on the spot. Get client approval before doing the extra work, not after.',
                'url' => route('industries.show', 'trades'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Professional Services',
                'icon' => 'fa-briefcase', // 💼
                'description' => 'When a client engagement grows beyond the original scope, formalise it. A variation order keeps the relationship professional, the billing transparent, and the additional work properly priced and approved.',
                'url' => route('industries.show', 'professional-services'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Food & Beverage',
                'icon' => 'fa-wine-glass', // 🍷
                'description' => 'When production requirements, packaging specs, or delivery arrangements change mid-contract, a formal variation process keeps costs, billing, and client expectations properly aligned.',
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
            'description'    => 'Variation Management connects directly to project management, quoting, contracts, subcontractor management, and finance. Here\'s what else is available.',
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