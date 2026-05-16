@extends('layouts.app')
@section('title', 'Compliance & Batch Traceability | High-Fidelity Systems by Begin360')
@section('meta_title', 'Traceability Architecture: Batch Tracking & Recall Readiness | Begin360')
@section('meta_description', 'Eliminate the manual search. From batch-level tracking to instant recall reporting, automate your compliance and quality assurance workflows with Begin360\'s high-fidelity traceability architecture.')
@section('meta_keywords', 'Traceability Software Australia, Food Compliance ERP, Batch Tracking, Recall Management System, Quality Assurance Logic, Odoo Traceability, Manufacturing Compliance, Regulatory Reporting')
@push('styles')
   <style>
    
   </style>
@endpush
@section('content')
    @php
        $heroData = [
            'breadcrumbs' => [
                ['label' => 'Home', 'url' => route("home"), 'active' => false],
                ['label' => 'Modules', 'url' => route("modules.index"), 'active' => false], // Link to a general modules landing if you have one
                ['label' => 'Compliance & Traceability', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Trace anything.<br/>In under a',
            'dynamic_word' => 'minute.',
            'description' => 'Most food and beverage businesses can\'t quickly answer the question: \'Which customers received product from this batch? This module makes that answer available in seconds, building your compliance documentation automatically as you work.',
            'hero_image' => '<svg viewBox="0 0 460 345" xmlns="http://www.w3.org/2000/svg" style="padding:20px;">
                    <rect width="460" height="345" fill="#f7faf7"></rect>
                    <rect x="16" y="16" width="428" height="313" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="36" y="46" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Batch Trace — Lot #FB2406-A</text>
                    <rect x="330" y="30" width="114" height="24" rx="6" fill="#e8fde9"></rect>
                    <text x="387" y="46" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#019906" text-anchor="middle">FSANZ Ready ✓</text>
                    <line x1="36" y1="58" x2="428" y2="58" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Step 1: Ingredient receipt -->
                    <rect x="36" y="70" width="168" height="52" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="48" y="88" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906">INGREDIENT RECEIPT</text>
                    <text x="48" y="103" font-family="DM Sans,sans-serif" font-size="12" fill="#017304">Organic Flour — 50kg</text>
                    <text x="48" y="115" font-family="DM Sans,sans-serif" font-size="9" fill="#888880">GreenMill Co · Arrived 1 Jun</text>

                    <!-- Arrow right -->
                    <line x1="204" y1="96" x2="230" y2="96" stroke="#01C608" stroke-width="1.5" stroke-dasharray="3,3"></line>
                    <polygon points="230,92 238,96 230,100" fill="#01C608"></polygon>

                    <!-- Step 2: Production -->
                    <rect x="240" y="70" width="168" height="52" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="252" y="88" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906">PRODUCTION BATCH</text>
                    <text x="252" y="103" font-family="DM Sans,sans-serif" font-size="12" fill="#017304">Sourdough Loaf ×120</text>
                    <text x="252" y="115" font-family="DM Sans,sans-serif" font-size="9" fill="#888880">Batch #PB-0318 · 3 Jun</text>

                    <!-- Arrow down -->
                    <line x1="324" y1="122" x2="324" y2="144" stroke="#01C608" stroke-width="1.5" stroke-dasharray="3,3"></line>
                    <polygon points="320,144 324,152 328,144" fill="#01C608"></polygon>

                    <!-- Step 3: Dispatch -->
                    <rect x="240" y="154" width="168" height="52" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="252" y="172" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906">DISPATCH</text>
                    <text x="252" y="187" font-family="DM Sans,sans-serif" font-size="12" fill="#017304">Orders #2891, #2894</text>
                    <text x="252" y="199" font-family="DM Sans,sans-serif" font-size="9" fill="#888880">Dispatched 4 Jun</text>

                    <!-- Arrow left -->
                    <line x1="240" y1="180" x2="214" y2="180" stroke="#01C608" stroke-width="1.5" stroke-dasharray="3,3"></line>
                    <polygon points="214,176 206,180 214,184" fill="#01C608"></polygon>

                    <!-- Step 4: Customers -->
                    <rect x="36" y="154" width="168" height="52" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="48" y="172" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906">CUSTOMERS</text>
                    <text x="48" y="187" font-family="DM Sans,sans-serif" font-size="12" fill="#017304">Café Luna, Daily Table</text>
                    <text x="48" y="199" font-family="DM Sans,sans-serif" font-size="9" fill="#888880">2 customers · 120 units</text>

                    <!-- Stats row -->
                    <rect x="36" y="224" width="120" height="48" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="96" y="244" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#01C608" text-anchor="middle">2</text>
                    <text x="96" y="262" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Customers found</text>

                    <rect x="172" y="224" width="120" height="48" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="232" y="244" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#01C608" text-anchor="middle">&lt;60s</text>
                    <text x="232" y="262" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Time to trace</text>

                    <rect x="308" y="224" width="120" height="48" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="368" y="244" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#01C608" text-anchor="middle">100%</text>
                    <text x="368" y="262" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Audit coverage</text>

                    <!-- Footer note -->
                    <rect x="36" y="288" width="392" height="26" rx="7" fill="#e8fde9"></rect>
                    <text x="232" y="305" font-family="DM Sans,sans-serif" font-size="11" fill="#017304" text-anchor="middle">✓  Supplier certificates verified · HACCP records attached · FSANZ compliant</text>
                </svg>',
            'primary_btn' => [
                'text' => 'Book a Demo',
                'url' => route('contact'),
                'icon' => 'fa-calendar-check'
            ],
            'secondary_btn' => [
                'text' => 'See Industries',
                'url' => route('industries.index'),
                'icon' => 'fa-arrow-right'
            ],
            'scroll_text' => 'Explore traceability logic'
        ];

        $statsData = [
            [
                'target' => 40,
                'suffix' => '%',
                'title' => 'Admin Reduction',
                'description' => 'Average reduction in time spent on manual admin, quoting, and invoicing after implementation.',
                'is_range' => false
            ],
            [
                'target' => 11,
                'suffix' => ' days',
                'title' => 'Faster Payments',
                'description' => 'Average reduction in the "Time to Pay" cycle for invoices and progress claims.',
                'is_range' => false
            ],
            [
                'target' => 2,
                'target_end' => 3,
                'suffix' => ' mo',
                'title' => 'Rapid Deployment',
                'description' => 'Typical timeframe to get your field and office operations fully integrated and running live.',
                'is_range' => true
            ]
        ];

        $modulesHeader = [
            'section_class' => 'bg-body',
            'badge'          => '— Other Modules —',
            'heading_start'  => 'Explore the',
            'dynamic_word'   => 'full suite',
            'description'    => 'Compliance & Traceability works best when connected to your inventory, procurement, and order management. Here\'s what else is available.',
            'primary_btn'    => [
                'text' => 'View All Modules',
                'url'  => route('modules.index'),
                'icon' => 'fa-layer-group'
            ]
        ];
        $modules = [
            [
                'title' => 'Inventory Management',
                'icon' => 'fa-boxes-stacked',
                'description' => 'Sovereign control over your entire supply chain with real-time architectural visibility.',
                'url' => route('modules.show', 'inventory-management'),
                'column_class' => 'col-10 col-md-8 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Procurement',
                'icon' => 'fa-file-invoice-dollar',
                'description' => 'Automated sourcing and high-fidelity vendor synchronization.',
                'url' => route('modules.show', 'procurement'),
                'column_class' => 'col-10 col-md-4 col-lg-3',
                'show_cta' => true
            ],
            [
                'title' => 'Order Management',
                'icon' => 'fa-cart-flatbed',
                'description' => 'Seamless omnichannel orchestration for complex transaction flows.',
                'url' => route('modules.show', 'order-management'),
                'column_class' => 'col-10 col-md-4 col-lg-3',
                'show_cta' => true
            ],
            [
                'title' => 'Finance & Accounting',
                'icon' => 'fa-calculator',
                'description' => 'Integrated fiscal infrastructure with mathematical precision.',
                'url' => route('modules.show', 'finance-accounting'),
                'column_class' => 'col-10 col-md-4 col-lg-4',
                'show_cta' => true
            ],
            [
                'title' => 'Freight & Fulfillment',
                'icon' => 'fa-truck-fast',
                'description' => 'Logic-driven logistics to engineer your global delivery footprint.',
                'url' => route('modules.show', 'freight-fulfillment'),
                'column_class' => 'col-10 col-md-4 col-lg-4',
                'show_cta' => true
            ],
            [
                'title' => 'Demand Planning',
                'icon' => 'fa-chart-line',
                'description' => 'Predictive modeling and AI-driven insights for resilient scaling.',
                'url' => route('modules.show', 'demand-planning'),
                'featured' => false,
                'column_class' => 'col-10 col-md-12 col-lg-4',
                'show_cta' => true
            ],
            [
                'title' => 'Warehouse Management',
                'icon' => 'fa-warehouse',
                'description' => 'Optimizing spatial efficiency through advanced WMS architecture.',
                'url' => route('modules.show', 'warehouse-management'),
                'column_class' => 'col-10 col-md-8 col-lg-8',
                'show_cta' => true
            ],
            [
                'title' => 'Manufacturing',
                'icon' => 'fa-industry',
                'description' => 'Digital twins and MRP logic for precision production environments.',
                'url' => route('modules.show', 'manufacturing'),
                'column_class' => 'col-10 col-md-4 col-lg-4',
                'show_cta' => true
            ],
            /* New "Drop a line" Item */
            [
                'title' => 'Need Something Specific?',
                'icon' => 'fa-microchip',
                'description' => 'Every construction business is different. Tell us about your operation and we\'ll figure out the right setup together.',
                'url' => url('/contact'),
                'column_class' => 'col-10 col-md-12 col-lg-12', // Spans full width at bottom
                'show_cta' => true,
                'featured' => true,
                'cta_text' => 'Start a Conversation'
            ]
        ];

        $industryHeader = [
            'section_class' => 'bg-body-tertiary',
            'badge'          => '— Sectors We Transform —',
            'heading_start'  => 'Which industries use this',
            'dynamic_word'   => 'module',
            'description'    => 'Compliance & Traceability is built specifically for food and beverage operations where lot tracking and FSANZ compliance are mandatory.',
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
                'description' => 'End-to-end lot traceability, FSANZ compliance, allergen management, supplier certificate storage, digital QA records, and mock recall capability — all built around how F&B businesses actually operate.',
                'url' => route('industries.show', 'food-beverage'),
                'column_class' => 'col-12', // Primary Featured Tile
                'show_cta' => true,
                'cta_text' => 'Explore Blueprint'
            ]
        ];
        
        $painPoints = [
            [
                'icon' => 'fa-file-invoice', 
                'title' => 'Quoting takes way too long and accuracy is a gamble.', 
                'content' => 'Building quotes manually from scratch leads to inconsistency and hours of unpaid office work. Without a standardized system, you risk underquoting jobs or losing projects because your response time was too slow.'
            ],
            [
                'icon' => 'fa-calendar-circle-exclamation', 
                'title' => 'Scheduling is a mess of double-bookings and gaps.', 
                'content' => 'Coordinating technicians across multiple jobs using whiteboards or calendars is pure chaos. When one job runs over, the whole day collapses—leaving customers waiting and your team frustrated.'
            ],
            [
                'icon' => 'fa-cash-register', 
                'title' => 'We\'re waiting weeks to get paid after a job is done.', 
                'content' => 'Invoices that are sent late or contain errors lead to massive payment delays. You can have your busiest month on record but still struggle to meet payroll because your cash is trapped in "pending" status.'
            ],
            [
                'icon' => 'fa-truck-ramp-box', 
                'title' => 'We never know if we have the right parts on the van.', 
                'content' => 'Technicians arriving on-site without essential materials means wasted travel time and double-handling. Tracking inventory across multiple service vehicles and job sites is nearly impossible without a real-time system.'
            ],
            [
                'icon' => 'fa-magnifying-glass-chart', 
                'title' => 'I don\'t actually know which jobs are making money.', 
                'content' => 'Business is busy, but "busy" doesn\'t always mean profitable. Without seeing the true margin on every job after labour, materials, and travel are accounted for, you might be repeating your most expensive mistakes.'
            ],
            [
                'icon' => 'fa-folder-tree', 
                'title' => 'Compliance paperwork is scattered and disorganized.', 
                'content' => 'Certificates, WHS documentation, and sign-offs are buried in emails or filing cabinets. Finding the right record during a dispute or a safety audit becomes a high-stress scavenger hunt.'
            ]
        ];
        
        $tradeSolutions = [
            [
                'sub' => '01 — Run Your Jobs Better',
                'title' => 'From quote to completion, every job in one place',
                'content' => 'When your quotes, schedules, job cards, and site notes all live in the same system, nothing falls through the cracks. Your office team and your field team always know exactly what\'s happening and where.',
                'list' => [
                    'Quote faster using pre-built templates with standard rates',
                    'Schedule technicians on a live drag-and-drop calendar',
                    'Send job details to field phones — no calls needed',
                    'Capture site notes, photos, and signatures digitally'
                ],
                'svg' => '
                <svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" >
                    <rect width="480" height="360" fill="#f7faf7"></rect>
                    <rect x="20" y="20" width="440" height="320" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="40" y="52" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Job Schedule — Today, 8 May</text>
                    <rect x="360" y="36" width="80" height="24" rx="6" fill="#e8fde9"></rect>
                    <text x="400" y="52" font-family="DM Sans,sans-serif" font-size="11" fill="#019906" text-anchor="middle">4 active</text>
                    <line x1="40" y1="64" x2="440" y2="64" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Column headers -->
                    <text x="40" y="82" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">TECHNICIAN</text>
                    <text x="160" y="82" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">8AM</text>
                    <text x="232" y="82" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">10AM</text>
                    <text x="304" y="82" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">12PM</text>
                    <text x="376" y="82" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">2PM</text>
                    <line x1="40" y1="88" x2="440" y2="88" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Vertical time lines -->
                    <line x1="160" y1="88" x2="160" y2="316" stroke="#e8e8e4" stroke-width="0.5" stroke-dasharray="2,3"></line>
                    <line x1="232" y1="88" x2="232" y2="316" stroke="#e8e8e4" stroke-width="0.5" stroke-dasharray="2,3"></line>
                    <line x1="304" y1="88" x2="304" y2="316" stroke="#e8e8e4" stroke-width="0.5" stroke-dasharray="2,3"></line>
                    <line x1="376" y1="88" x2="376" y2="316" stroke="#e8e8e4" stroke-width="0.5" stroke-dasharray="2,3"></line>

                    <!-- Technician 1 - Jake -->
                    <line x1="40" y1="120" x2="440" y2="120" stroke="#e8e8e4" stroke-width="0.5"></line>
                    <text x="40" y="110" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#111110">Jake M.</text>
                    <text x="40" y="122" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Electrician</text>
                    <!-- Job block 1 -->
                    <rect x="160" y="96" width="120" height="30" rx="5" fill="#01C608"></rect>
                    <text x="168" y="108" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="white">Panel Upgrade</text>
                    <text x="168" y="120" font-family="DM Sans,sans-serif" font-size="9" fill="rgba(255,255,255,0.8)">15 Maple St · #J2841</text>
                    <!-- Job block 2 -->
                    <rect x="292" y="96" width="100" height="30" rx="5" fill="#c2f5c3" stroke="#01C608" stroke-width="1"></rect>
                    <text x="300" y="108" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304">Safety Inspect.</text>
                    <text x="300" y="120" font-family="DM Sans,sans-serif" font-size="9" fill="#019906">CBD Office · #J2849</text>

                    <!-- Technician 2 - Priya -->
                    <line x1="40" y1="176" x2="440" y2="176" stroke="#e8e8e4" stroke-width="0.5"></line>
                    <text x="40" y="150" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#111110">Priya K.</text>
                    <text x="40" y="162" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Electrician</text>
                    <!-- Job block -->
                    <rect x="160" y="138" width="196" height="30" rx="5" fill="#01C608"></rect>
                    <text x="168" y="150" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="white">New Build Rough-in</text>
                    <text x="168" y="162" font-family="DM Sans,sans-serif" font-size="9" fill="rgba(255,255,255,0.8)">42 Thornton Ave · #J2836</text>
                    <!-- Unscheduled afternoon -->
                    <rect x="368" y="138" width="60" height="30" rx="5" fill="#f4f4f2" stroke="#e8e8e4" stroke-width="1" stroke-dasharray="3,3"></rect>
                    <text x="398" y="157" font-family="DM Sans,sans-serif" font-size="10" fill="#c4c4be" text-anchor="middle">Open</text>

                    <!-- Technician 3 - Connor -->
                    <line x1="40" y1="232" x2="440" y2="232" stroke="#e8e8e4" stroke-width="0.5"></line>
                    <text x="40" y="206" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#111110">Connor B.</text>
                    <text x="40" y="218" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Apprentice</text>
                    <!-- Assisting Jake -->
                    <rect x="160" y="194" width="120" height="30" rx="5" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="168" y="206" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304">Assisting Jake</text>
                    <text x="168" y="218" font-family="DM Sans,sans-serif" font-size="9" fill="#019906">15 Maple St · #J2841</text>

                    <!-- Alert -->
                    <rect x="40" y="248" width="400" height="34" rx="8" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                    <text x="56" y="263" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#ba7517">⚠  New job request received</text>
                    <text x="56" y="276" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Emergency switchboard fault — Priya available from 2PM · Assign?</text>

                    <!-- Quote status -->
                    <rect x="40" y="294" width="192" height="28" rx="7" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="56" y="311" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">3 quotes awaiting approval</text>
                    <rect x="248" y="294" width="192" height="28" rx="7" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="264" y="311" font-family="DM Sans,sans-serif" font-size="11" fill="#017304">✓  2 invoices sent today</text>
                </svg>'
            ],
            [
                'sub' => '02 — Know Your Job Costs',
                'title' => 'See exactly which jobs make money and which don\'t',
                'content' => 'Every job has a budget. We give you live cost tracking against your quote so you can see trouble coming and act before it\'s too late.',
                'list' => [
                    'Track labour, materials, and subs against each job',
                    'See job profitability in real time, not just at the end',
                    'Compare actual vs quoted costs across job history',
                    'Identify which technicians are most profitable'
                ],
                'svg' => '
                <svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" >
                    <rect width="480" height="360" fill="#f7faf7"></rect>
                    <rect x="20" y="20" width="440" height="320" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="40" y="52" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Job Costing — #J2841 Panel Upgrade</text>
                    <line x1="40" y1="64" x2="440" y2="64" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Status badge -->
                    <rect x="340" y="36" width="100" height="24" rx="6" fill="#e8fde9"></rect>
                    <text x="390" y="52" font-family="DM Sans,sans-serif" font-size="11" fill="#019906" text-anchor="middle">In Progress</text>

                    <!-- Quote vs Actual header -->
                    <text x="40" y="84" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">COST ITEM</text>
                    <text x="280" y="84" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">QUOTED</text>
                    <text x="360" y="84" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">ACTUAL</text>
                    <line x1="40" y1="90" x2="440" y2="90" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Labour row -->
                    <text x="40" y="110" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Labour (Jake + Connor, 6h)</text>
                    <text x="280" y="110" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$720</text>
                    <text x="360" y="110" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$780</text>
                    <text x="420" y="110" font-family="DM Sans,sans-serif" font-size="11" fill="#ba7517">+$60</text>
                    <line x1="40" y1="116" x2="440" y2="116" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Materials row -->
                    <text x="40" y="136" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Materials (switchboard, cable)</text>
                    <text x="280" y="136" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$340</text>
                    <text x="360" y="136" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$318</text>
                    <text x="420" y="136" font-family="DM Sans,sans-serif" font-size="11" fill="#01C608">-$22</text>
                    <line x1="40" y1="142" x2="440" y2="142" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Travel row -->
                    <text x="40" y="162" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Travel &amp; vehicle</text>
                    <text x="280" y="162" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$80</text>
                    <text x="360" y="162" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$80</text>
                    <text x="420" y="162" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">—</text>
                    <line x1="40" y1="168" x2="440" y2="168" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Total row -->
                    <rect x="40" y="172" width="400" height="30" rx="0" fill="#f7faf7"></rect>
                    <text x="40" y="192" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Total cost</text>
                    <text x="280" y="192" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">$1,140</text>
                    <text x="360" y="192" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">$1,178</text>
                    <text x="420" y="192" font-family="DM Sans,sans-serif" font-size="11" fill="#ba7517">+$38</text>

                    <!-- Margin summary -->
                    <rect x="40" y="218" width="190" height="60" rx="9" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="135" y="238" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Job value (quoted)</text>
                    <text x="135" y="264" font-family="DM Sans,sans-serif" font-size="22" font-weight="700" fill="#111110" text-anchor="middle">$1,850</text>

                    <rect x="250" y="218" width="190" height="60" rx="9" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="345" y="238" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">Estimated margin</text>
                    <text x="345" y="264" font-family="DM Sans,sans-serif" font-size="22" font-weight="700" fill="#01C608" text-anchor="middle">36.3%</text>

                    <!-- Warning note -->
                    <rect x="40" y="294" width="400" height="30" rx="7" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                    <text x="240" y="313" font-family="DM Sans,sans-serif" font-size="11" fill="#ba7517" text-anchor="middle">Labour running 8% over estimate — review before invoicing</text>
                </svg>'
            ],
            [
                'sub' => '03 — Get Paid Faster',
                'title' => 'Invoice the moment the job is done, not days later',
                'content' => 'The gap between finishing a job and sending the invoice is where cash flow dies. When your technician can trigger an invoice automatically, you get paid sooner.',
                'list' => [
                    'Invoice from a completed job card — no re-entry',
                    'Progress billing for larger projects and milestones',
                    'Automated payment reminders for clients',
                    'Live cash flow view of what is coming in'
                ],
                'svg' => '
                <svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" >
                    <rect width="480" height="360" fill="#f7faf7"></rect>
                    <rect x="20" y="20" width="440" height="320" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="40" y="52" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Invoicing &amp; Cash Flow</text>
                    <line x1="40" y1="64" x2="440" y2="64" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- KPI row -->
                    <rect x="40" y="76" width="118" height="56" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="99" y="96" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Invoiced (May)</text>
                    <text x="99" y="118" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#111110" text-anchor="middle">$42.8k</text>

                    <rect x="174" y="76" width="118" height="56" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="233" y="96" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">Collected (May)</text>
                    <text x="233" y="118" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#01C608" text-anchor="middle">$38.1k</text>

                    <rect x="308" y="76" width="132" height="56" rx="8" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                    <text x="374" y="96" font-family="DM Sans,sans-serif" font-size="10" fill="#ba7517" text-anchor="middle">Outstanding</text>
                    <text x="374" y="118" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#ba7517" text-anchor="middle">$4.7k</text>

                    <!-- Invoice list -->
                    <text x="40" y="154" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#444440">Outstanding invoices</text>
                    <line x1="40" y1="160" x2="440" y2="160" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Invoice rows -->
                    <text x="40" y="178" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">INV-0291 · Smithfield Cafe</text>
                    <text x="310" y="178" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$1,850</text>
                    <rect x="376" y="167" width="52" height="18" rx="9" fill="#fffbea"></rect>
                    <text x="402" y="180" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">7 days</text>
                    <line x1="40" y1="186" x2="440" y2="186" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <text x="40" y="204" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">INV-0288 · R. Thornton</text>
                    <text x="310" y="204" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$980</text>
                    <rect x="376" y="193" width="52" height="18" rx="9" fill="#fcebeb"></rect>
                    <text x="402" y="206" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#e24b4a" text-anchor="middle">Overdue</text>
                    <line x1="40" y1="212" x2="440" y2="212" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <rect x="40" y="212" width="400" height="26" fill="#fef2f2" opacity="0.4"></rect>
                    <text x="40" y="230" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">INV-0284 · BlueSky Dev</text>
                    <text x="310" y="230" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$1,870</text>
                    <rect x="364" y="219" width="64" height="18" rx="9" fill="#fcebeb"></rect>
                    <text x="396" y="232" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#e24b4a" text-anchor="middle">14 days OD</text>

                    <!-- Reminder sent -->
                    <rect x="40" y="252" width="400" height="30" rx="7" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="56" y="268" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#017304">✓  Reminder sent automatically to BlueSky Dev at 9:00 AM today</text>

                    <!-- Avg time to pay -->
                    <rect x="40" y="298" width="190" height="28" rx="7" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="135" y="316" font-family="DM Sans,sans-serif" font-size="11" fill="#888880" text-anchor="middle">Avg. time to pay: 8 days</text>
                    <rect x="248" y="298" width="192" height="28" rx="7" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="344" y="316" font-family="DM Sans,sans-serif" font-size="11" fill="#017304" text-anchor="middle">↓ 11 days faster than before</text>
                </svg>'
            ]
        ];
        $complianceModule = [
            'intro' => [
                'badge'   => '— Traceability & FSANZ —',
                'title'   => 'Your compliance paperwork, done automatically <br/><span class="text-accent fraunces section-accent fw-normal">as you work</span>',
                'content' => '<p class="fs-6 mb-4">If you\'re in food and beverage, traceability isn\'t optional. FSANZ requires tracking from ingredient to delivery.</p>
                            <p class="small opacity-75">This module builds the trail as you work, reducing mock recalls from days to under 60 seconds.</p>'
            ],
            'features' => [
                [
                    'icon'    => 'fa-link',
                    'title'   => 'Unbroken Chain',
                    'content' => 'Every ingredient lot linked to production batches and customers in a searchable map.'
                ],
                [
                    'icon'    => 'fa-bolt-lightning',
                    'title'   => '60-Second Recall',
                    'content' => 'Instantly identify affected customers during a contamination event or mock audit.'
                ],
                [
                    'icon'    => 'fa-folder-tree',
                    'title'   => 'Centralized Vault',
                    'content' => 'HACCP records, safety checklists, and supplier certs linked to relevant batches.'
                ],
                [
                    'icon'    => 'fa-vial-circle-check',
                    'title'   => 'Allergen Flow',
                    'content' => 'Automatic allergen carry-through from raw materials to final packaging labels.'
                ]
            ],
            'cta' => [
                'title'    => "Let's get connected.",
                'subtitle' => "Ready to automate your compliance? Let's discuss your specific requirements.",
                'btn_text' => 'Get Started',
                'url'      => route('contact')
            ]
        ];

        
    @endphp
    <x-about-hero :heroData="$heroData"/>
    <x-traceability :data="$complianceModule" class="py-5" />   
@php
    $architectureData = [
        'bg_text' => 'COMPLIANCE',
        'header' => [
            'badge_icon'  => 'fa-code-merge',
            'badge_text'  => '— SYSTEM ARCHITECTURE —',
            'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
            'description' => 'Everything you need to stay FSANZ-compliant and recall-ready — without your team having to think about it separately from their daily work.'
        ],
        'features' => [
            ['title' => 'Lot tracking from goods receipt', 'icon' => 'fa-dolly', 'desc' => 'Every delivery is logged with supplier name, lot number, quantity, and expiry date.'],
            ['title' => 'Production batch records', 'icon' => 'fa-vial', 'desc' => 'When you make a product, the system records exactly which ingredient lots went into that batch.'],
            ['title' => 'Dispatch linked to customers', 'icon' => 'fa-truck-fast', 'desc' => 'Every batch dispatched is linked to the order and customer it went to.'],
            ['title' => 'Forward & backward traceability', 'icon' => 'fa-retweet', 'desc' => 'Search from an ingredient lot and find every customer it reached.'],
            ['title' => 'Mock recall reporting', 'icon' => 'fa-file-medical', 'color' => 'danger', 'desc' => 'Run a mock recall at any time — select a lot or batch and the system generates a complete report.'],
            ['title' => 'Allergen declaration tracking', 'icon' => 'fa-tag', 'desc' => 'Allergens are flagged at the ingredient level and automatically carried through.'],
            ['title' => 'Supplier certificate storage', 'icon' => 'fa-folder-open', 'desc' => 'Store certificates of analysis and audit documents against each supplier.'],
            ['title' => 'Digital food safety checklists', 'icon' => 'fa-square-check', 'desc' => 'Replace paper HACCP checklists with digital forms saved automatically.'],
            ['title' => 'FEFO stock rotation enforcement', 'icon' => 'fa-clock-rotate-left', 'desc' => 'The system enforces first-expired, first-out picking to reduce waste.']
        ],
        'cta' => [
            'title'    => "Let's get connected.",
            'subtitle' => "Ready to automate your compliance? Let's discuss your requirements.",
            'btn_text' => 'Get Started',
            'url'      => route('contact')
        ]
    ];
    
    $supplierModule = [
        'intro' => [
            'badge_text' => '— SUPPLIER COMPLIANCE —',
            'badge_icon' => 'fa-shield',
            'title'      => 'Know your suppliers are compliant before their stock reaches your <span class="text-accent fraunces section-accent fw-normal">kitchen</span>',
            'content'    => 'A lot of food safety risk enters a business through the supplier relationship. If a supplier\'s food safety certificate lapses and you don\'t notice, you\'re exposed. This module tracks every supplier document and flags expiries automatically.'
        ],
        'ui' => [
            'table_title' => 'Compliance Register',
            'stats' => [
                ['label' => '8 compliant', 'color' => 'success'],
                ['label' => '1 expired', 'color' => 'danger'],
            ],
            'rows' => [
                [
                    'name' => 'GreenMill Co', 
                    'subtext' => 'Organic flour & grains', 
                    'date' => 'Dec 2026', 
                    'status' => 'OK', 
                    'status_color' => 'success'
                ],
                [
                    'name' => 'Valley Eggs Pty Ltd', 
                    'subtext' => 'Free range eggs', 
                    'date' => '18 Jun 2026', 
                    'status' => 'Expiring', 
                    'status_color' => 'warning'
                ],
                [
                    'name' => 'Coastal Dairy Co', 
                    'subtext' => 'Butter & cream', 
                    'date' => '3 May 2026', 
                    'status' => 'Expired', 
                    'status_color' => 'danger'
                ],
            ],
            'alert' => 'Order Blocked: Renew Coastal Dairy Co certificate to resume.'
        ],
        'footer_features' => [
            'Store certificates of analysis, insurance, and food safety documents per supplier',
            'Automatic alerts before any document expires — not after',
            'Supplier approval workflow so only qualified suppliers can be ordered from',
            'All documents linked to goods receipts so every lot has its paperwork attached'
        ]
    ];
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