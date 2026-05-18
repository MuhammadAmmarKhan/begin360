@extends('layouts.app')
@section('title', 'Scheduling & Dispatch | Real-Time Fleet & Field Operations by Begin360')
@section('meta_title', 'Scheduling & Dispatch Architecture: Fleet Routing & Field Management | Begin360')
@section('meta_description', 'Optimize your field operations in real time. From smart drag-and-drop dispatching to automated job routing, eliminate scheduling friction and maximize fleet efficiency with Begin360.')
@section('meta_keywords', 'Field Service Scheduling Australia, Fleet Dispatch Software, Real Time Job Routing, Field Technician Dispatch, Operations Scheduling System, Workforce Deployment Tool, GPS Job Tracking, Automated Fleet Coordination')
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
                ['label' => 'Scheduling & Dispatch', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Right person, right job,<br/>right',
            'dynamic_word' => 'time.',
            'description' => 'Managing a field team from a whiteboard, a shared calendar, or a string of phone calls means things get missed, jobs get double-booked, and your team spends half the morning figuring out where they\'re supposed to be. Begin360 gives you one live board to schedule, dispatch, and track every job — from the office or on the go.',
            'hero_image' => '<svg viewBox="0 0 460 345" xmlns="http://www.w3.org/2000/svg" style="padding:16px;">
                    <rect width="460" height="345" fill="#f7faf7"></rect>
                    <rect x="16" y="16" width="428" height="313" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="36" y="44" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Dispatch Board — Tuesday 12 May</text>
                    <rect x="348" y="30" width="84" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="390" y="44" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">● Live</text>
                    <line x1="36" y1="56" x2="428" y2="56" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Time axis -->
                    <text x="100" y="70" font-family="DM Sans,sans-serif" font-size="9" fill="#c4c4be" text-anchor="middle">8am</text>
                    <text x="163" y="70" font-family="DM Sans,sans-serif" font-size="9" fill="#c4c4be" text-anchor="middle">10am</text>
                    <text x="226" y="70" font-family="DM Sans,sans-serif" font-size="9" fill="#c4c4be" text-anchor="middle">12pm</text>
                    <text x="289" y="70" font-family="DM Sans,sans-serif" font-size="9" fill="#c4c4be" text-anchor="middle">2pm</text>
                    <text x="352" y="70" font-family="DM Sans,sans-serif" font-size="9" fill="#c4c4be" text-anchor="middle">4pm</text>
                    <text x="415" y="70" font-family="DM Sans,sans-serif" font-size="9" fill="#c4c4be" text-anchor="middle">6pm</text>

                    <!-- Current time line -->
                    <line x1="210" y1="66" x2="210" y2="310" stroke="#01C608" stroke-width="1.5" stroke-dasharray="3,3" opacity="0.6"></line>
                    <text x="210" y="63" font-family="DM Sans,sans-serif" font-size="8" fill="#01C608" text-anchor="middle">Now</text>

                    <!-- Row: Jake M -->
                    <text x="36" y="92" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#111110">Jake M.</text>
                    <text x="36" y="104" font-family="DM Sans,sans-serif" font-size="9" fill="#888880">Electrician</text>
                    <!-- job block 1 -->
                    <rect x="100" y="80" width="94" height="28" rx="5" fill="#01C608" opacity="0.85"></rect>
                    <text x="147" y="92" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="white" text-anchor="middle">Switchboard #2841</text>
                    <text x="147" y="103" font-family="DM Sans,sans-serif" font-size="8" fill="rgba(255,255,255,0.8)" text-anchor="middle">15 Maple St · Done ✓</text>
                    <!-- job block 2 -->
                    <rect x="200" y="80" width="126" height="28" rx="5" fill="#01C608" opacity="0.5"></rect>
                    <text x="263" y="92" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="#017304" text-anchor="middle">Panel Upgrade #2856</text>
                    <text x="263" y="103" font-family="DM Sans,sans-serif" font-size="8" fill="#019906" text-anchor="middle">42 River Rd · In progress</text>
                    <line x1="36" y1="116" x2="428" y2="116" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row: Priya S -->
                    <text x="36" y="132" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#111110">Priya S.</text>
                    <text x="36" y="144" font-family="DM Sans,sans-serif" font-size="9" fill="#888880">Plumber</text>
                    <!-- job block -->
                    <rect x="100" y="120" width="158" height="28" rx="5" fill="#01C608" opacity="0.85"></rect>
                    <text x="179" y="132" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="white" text-anchor="middle">Hot Water System #2849</text>
                    <text x="179" y="143" font-family="DM Sans,sans-serif" font-size="8" fill="rgba(255,255,255,0.8)" text-anchor="middle">7 Park Ave · Done ✓</text>
                    <!-- gap then afternoon job -->
                    <rect x="265" y="120" width="94" height="28" rx="5" fill="#01C608" opacity="0.5"></rect>
                    <text x="312" y="132" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="#017304" text-anchor="middle">Leak Repair #2861</text>
                    <text x="312" y="143" font-family="DM Sans,sans-serif" font-size="8" fill="#019906" text-anchor="middle">88 High St · Scheduled</text>
                    <line x1="36" y1="156" x2="428" y2="156" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row: Connor L -->
                    <text x="36" y="172" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#111110">Connor L.</text>
                    <text x="36" y="184" font-family="DM Sans,sans-serif" font-size="9" fill="#888880">HVAC Tech</text>
                    <!-- one job only, leaving gap -->
                    <rect x="163" y="160" width="126" height="28" rx="5" fill="#01C608" opacity="0.5"></rect>
                    <text x="226" y="172" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="#017304" text-anchor="middle">AC Service #2853</text>
                    <text x="226" y="183" font-family="DM Sans,sans-serif" font-size="8" fill="#019906" text-anchor="middle">10 Ocean Dr · Scheduled</text>
                    <!-- available gap highlight -->
                    <rect x="100" y="160" width="56" height="28" rx="5" fill="#f4f4f2" stroke="#e8e8e4" stroke-width="1" stroke-dasharray="3,2"></rect>
                    <text x="128" y="177" font-family="DM Sans,sans-serif" font-size="8" fill="#c4c4be" text-anchor="middle">Available</text>
                    <line x1="36" y1="196" x2="428" y2="196" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row: Marcus T — emergency job -->
                    <text x="36" y="212" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#111110">Marcus T.</text>
                    <text x="36" y="224" font-family="DM Sans,sans-serif" font-size="9" fill="#888880">Electrician</text>
                    <rect x="100" y="200" width="62" height="28" rx="5" fill="#01C608" opacity="0.85"></rect>
                    <text x="131" y="212" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="white" text-anchor="middle">Fault #2844</text>
                    <text x="131" y="223" font-family="DM Sans,sans-serif" font-size="8" fill="rgba(255,255,255,0.8)" text-anchor="middle">Done ✓</text>
                    <!-- emergency job -->
                    <rect x="168" y="200" width="94" height="28" rx="5" fill="#faeeda" stroke="#f0c070" stroke-width="1"></rect>
                    <text x="215" y="212" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="#ba7517" text-anchor="middle">⚡ Emergency #2867</text>
                    <text x="215" y="223" font-family="DM Sans,sans-serif" font-size="8" fill="#ba7517" text-anchor="middle">Just assigned · En route</text>
                    <line x1="36" y1="236" x2="428" y2="236" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Unassigned jobs queue -->
                    <text x="36" y="252" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#444440">Unassigned jobs</text>
                    <rect x="36" y="260" width="116" height="36" rx="7" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="94" y="275" font-family="DM Sans,sans-serif" font-size="10" font-weight="500" fill="#111110" text-anchor="middle">Meter Install #2870</text>
                    <text x="94" y="288" font-family="DM Sans,sans-serif" font-size="9" fill="#888880" text-anchor="middle">2hr est · Electrician</text>

                    <rect x="162" y="260" width="116" height="36" rx="7" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="220" y="275" font-family="DM Sans,sans-serif" font-size="10" font-weight="500" fill="#111110" text-anchor="middle">Drain Clear #2871</text>
                    <text x="220" y="288" font-family="DM Sans,sans-serif" font-size="9" fill="#888880" text-anchor="middle">1hr est · Plumber</text>

                    <rect x="288" y="260" width="140" height="36" rx="7" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="358" y="278" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">Connor has room — assign?</text>
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
            'scroll_text' => 'Explore dispatch engine'
        ];
        $complianceModule = [
            'intro' => [
                'badge'   => '— What This Module Does —',
                'title'   => 'One live board for every job, every tech, and <span class="text-accent fraunces section-accent fw-normal">every day</span>',
                'content' => '<p class="fs-6 mb-4">When scheduling happens across a whiteboard, a group chat, and several phone calls, the office and the field are always slightly out of sync. Jobs get double-booked. A tech shows up at a site that cancelled. A client calls to ask where someone is and nobody can give a straight answer.</p>
                            <p class="fs-6 mb-4">Scheduling & Dispatch gives you a single live view of your entire field operation — who\'s working, where they are, what they\'re on, and what\'s still unassigned. You can drag jobs onto the board, dispatch them to the field, and update clients automatically without picking up the phone.</p>
                            <p class="small opacity-75">When something changes — an emergency comes in, a job runs long, a tech calls in sick — you can see the impact across the whole day and respond immediately. The field team gets updates on their mobile. The office stays in the picture without calling around.</p>'
            ],
            'features' => [
                [
                    'icon'    => 'fa-calendar-days', // Maps to 🗓️ symbol context
                    'title'   => 'Live dispatch board for the whole team',
                    'content' => 'See every tech\'s day in one view — what\'s done, what\'s in progress, what\'s coming up, and where there\'s room to fit more in. Updated in real time as the field team moves through their jobs.'
                ],
                [
                    'icon'    => 'fa-mobile-screen-button', // Maps to 📱 symbol context
                    'title'   => 'Field team gets jobs on their phone',
                    'content' => 'When a job is assigned or updated, your tech gets a notification instantly — with the address, job details, and any notes they need. No more calling around to relay information.'
                ],
                [
                    'icon'    => 'fa-bolt-lightning', // Maps to ⚡ symbol context
                    'title'   => 'Emergency jobs slotted in without chaos',
                    'content' => 'When an urgent job comes in, you can see immediately who has capacity, who\'s nearby, and where it can fit — and reassign in seconds rather than minutes of phone calls.'
                ],
                [
                    'icon'    => 'fa-link', // Maps to 🔗 symbol context
                    'title'   => 'Connected to jobs, invoicing, and the customer',
                    'content' => 'When a job is completed on site, the record updates — ready for invoicing without anyone in the office having to follow up. Customers can be notified automatically at every stage.'
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
            'bg_text' => 'DISPATCH',
            'header' => [
                'badge_icon'  => 'fa-code-merge',
                'badge_text'  => '— SYSTEM ARCHITECTURE —',
                'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
                'description' => 'Everything you need to run a field team without the back-and-forth — from the morning brief to the final job sign-off, all in one place.'
            ],
            'features' => [
                [
                    'title' => 'Drag-and-drop scheduling board', 
                    'icon'  => 'fa-calendar-days', // Maps to 🗓️
                    'desc'  => 'Schedule jobs by dragging them onto your team\'s calendar. See every tech\'s day side by side and spot gaps or clashes instantly — no spreadsheet, no whiteboard.'
                ],
                [
                    'title' => 'Mobile app for field teams', 
                    'icon'  => 'fa-mobile-screen-button', // Maps to 📱
                    'desc'  => 'Techs get their job list, site details, customer notes, and status updates on their phone. They can update job status, log time, and capture sign-offs on site — without calling the office.'
                ],
                [
                    'title' => 'Real-time job status tracking', 
                    'icon'  => 'fa-circle-dot', // Maps to 🔴
                    'desc'  => 'See every job\'s status as it happens — en route, on site, completed, or delayed. The office and the field stay in sync without anyone having to chase updates.'
                ],
                [
                    'title' => 'Emergency job insertion', 
                    'icon'  => 'fa-bolt-lightning', // Maps to ⚡
                    'desc'  => 'When an urgent job comes in, see immediately who has capacity, who\'s closest, and where the job fits. Reassign in seconds and push the update to the tech\'s phone automatically.'
                ],
                [
                    'title' => 'Automated customer notifications', 
                    'icon'  => 'fa-bell', // Maps to 🔔
                    'desc'  => 'Clients get automatic SMS or email updates when a job is confirmed, when a tech is on their way, and when the job is complete — without anyone in the office making a call.'
                ],
                [
                    'title' => 'Location and travel time visibility', 
                    'icon'  => 'fa-map-location-dot', // Maps to 🗺️
                    'desc'  => 'See where your field team is on a map and factor travel time into scheduling. Avoid booking back-to-back jobs across opposite ends of the city with no time to get between them.'
                ],
                [
                    'title' => 'Skills and licence matching', 
                    'icon'  => 'fa-screwdriver-wrench', // Maps to 🛠️
                    'desc'  => 'Only assign jobs to techs with the right qualifications, licences, or equipment for the work. The system flags mismatches before the job is dispatched — not after someone arrives on site.'
                ],
                [
                    'title' => 'On-site job completion and sign-off', 
                    'icon'  => 'fa-pen-nib', // Maps to ✍️
                    'desc'  => 'Techs can log time, add materials used, take photos, and capture a customer signature on site. Everything feeds back to the job record — ready for invoicing immediately.'
                ],
                [
                    'title' => 'Scheduling performance reporting', 
                    'icon'  => 'fa-chart-line', // Maps to 📊
                    'desc'  => 'Track first-time fix rate, job completion times, travel time, and utilisation by tech or team. Understand where your operation is running well and where there\'s room to improve.'
                ]
            ],
            'cta' => [
                'title'    => "Let's get connected.",
                'subtitle' => "Ready to automate your scheduling workflow? Let's discuss your requirements.",
                'btn_text' => 'Get Started',
                'url'      => route('contact')
            ]
        ];    
        $supplierModule = [
            'intro' => [
                'badge_text' => '— SITE SIGN-OFF —',
                'badge_icon' => 'fa-pen-nib',
                'title'      => 'Job Sign-off on Site. The invoice is ready <span class="text-accent fraunces section-accent fw-normal">before they drive away.</span>',
                'content'    => 'The most common delay between a job finishing and an invoice going out isn\'t the invoice itself — it\'s the information flow. The tech finishes. Someone calls the office. Someone else updates the job record. Someone then generates the invoice, usually the next day. Begin360 closes that loop on site: the tech logs completion, materials, and gets the customer signature, and the record is immediately ready to invoice.'
            ],
            'ui' => [
                'table_title' => 'Job #2841 — Complete',
                'stats' => [
                    ['label' => '✓ Signed off', 'color' => 'success'],
                    ['label' => 'Client: Thornton Residence', 'color' => 'secondary'],
                    ['label' => 'Address: 15 Maple Street, Newtown', 'color' => 'secondary'],
                    ['label' => 'Tech: Jake Morrow', 'color' => 'secondary'],
                    ['label' => 'Completed: 12 May 2026 · 11:42am', 'color' => 'secondary'],
                ],
                'rows' => [
                    [
                        'name' => 'Labour — 3.5 hrs @ $120/hr', 
                        'subtext' => 'Time allocation log', 
                        'date' => '', 
                        'status' => '$420', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Switchboard unit (Clipsal 4-way)', 
                        'subtext' => 'Materials utilized', 
                        'date' => '', 
                        'status' => '$340', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Call-out fee', 
                        'subtext' => 'Base standard rate', 
                        'date' => '', 
                        'status' => '$80', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Total', 
                        'subtext' => 'Aggregated financial total', 
                        'date' => '', 
                        'status' => '$840', 
                        'status_color' => 'accent'
                    ],
                ],
                'alert' => 'SITE NOTES: Replaced faulty 4-way board. Tested all circuits. No further issues found. 2 photos attached. | CUSTOMER SIGNATURE: R. Thornton',
                'primary_btn' => [
                    'text' => 'Generate Invoice →',
                    'url'  => '#'
                ]
            ],
            'footer_features' => [
                'Techs log job completion, time, and materials used directly from their phone',
                'Customer signs off on the completed work digitally — on site, before the tech leaves',
                'Photos and notes attached to the job record automatically',
                'Invoice generated from the completed job record with one click — no re-entry'
            ]
        ];
        $industryHeader = [
            'section_class' => 'bg-body-tertiary',
            'badge'          => '— Sectors We Transform —',
            'heading_start'  => 'Which industries use this',
            'dynamic_word'   => 'module?',
            'description'    => 'Scheduling & Dispatch is built for businesses that send people out to do work — trades, field services, maintenance, and any operation where the office needs to stay connected to the team in the field.',
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
                'description' => 'Schedule electricians, plumbers, HVAC techs, and other tradespeople across a full day of jobs. Handle emergency callouts, no-shows, and running-over jobs without the chaos.',
                'url' => route('industries.show', 'trades'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Construction',
                'icon' => 'fa-helmet-safety', // 🏗️
                'description' => 'Coordinate site crews, subcontractors, and deliveries across multiple active sites. Know who\'s where and what\'s happening on each site without constant phone check-ins.',
                'url' => route('industries.show', 'construction'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Food & Beverage',
                'icon' => 'fa-wine-glass', // 🍷
                'description' => 'Schedule delivery runs, production shifts, and maintenance visits. Keep drivers and field reps updated without phone calls and track completion in real time.',
                'url' => route('industries.show', 'food-beverage'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Professional Services',
                'icon' => 'fa-briefcase', // 💼
                'description' => 'Coordinate consultant site visits, audits, and on-site client engagements. Keep the office and field team aligned without a chain of calendar invites and follow-up emails.',
                'url' => route('industries.show', 'professional-services'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ]
        ];
        $modulesHeader = [
            'section_class' => 'bg-body',
            'badge'          => '— Other Modules —',
            'heading_start'  => 'Explore the',
            'dynamic_word'   => 'full suite',
            'description'    => 'Scheduling & Dispatch works at its best when connected to job management, quoting, resource planning, and invoicing. Here\'s what else is available.',
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