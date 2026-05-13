@extends('layouts.app')
@section('title', 'Retail Operations & Omnichannel Logic | High-Fidelity Systems by Begin360')
@section('meta_title', 'Retail Architecture: Inventory Velocity & Margin Integrity | Begin360')
@section('meta_description', 'Engineer sovereign retail logic for your brand. From real-time omnichannel synchronization to intelligent replenishment and shrinkage control, synchronize your supply-to-sale workflows with Begin360’s high-fidelity Odoo architecture.')
@section('meta_keywords', 'Retail ERP Australia, Omnichannel Inventory, Multi-store POS Sync, Retail Replenishment Logic, Odoo Retail Solutions, Inventory Velocity, Begin360 Retail Cloud, Margin Integrity Systems')
@push('styles')
   <style>
    
   </style>
@endpush
@section('content')
    @php
        $heroData = [
            'breadcrumbs' => [
                ['label' => 'Home', 'url' => route("home"), 'active' => false],
                ['label' => 'Industries', 'url' => route('industries.index'), 'active' => false],
                ['label' => 'Trades & Field Services', 'url' => null, 'active' => true],
            ],
            'badge' => 'Sector-Specific Blueprint',
            'heading_start' => 'Run more jobs with less time in the',
            'dynamic_word' => 'office',
            'description' => 'Most trade businesses in Australia are still quoting in spreadsheets, scheduling on whiteboards, and chasing payments by phone. Begin360 puts your jobs, your team, and your finances into one system—so you can focus on the work, not the paperwork.',
            'primary_btn' => [
                'text' => 'Talk to Us',
                'url' => '#sector-architecture',
                'icon' => 'fa-phone'
            ],
            'secondary_btn' => [
                'text' => 'See How It Works',
                'url' => url('/contact'),
                'icon' => 'fa-play'
            ],
            'scroll_text' => 'Scroll to see the transformation'
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
            ],
            [
                'title' => 'Custom Specialized Architecture?',
                'icon' => 'fa-microchip',
                'description' => 'Seeking a bespoke operational framework for a unique vertical? We engineer sovereign ecosystems for complex corporate visions.',
                'url' => url('/contact'),
                'column_class' => 'col-12', 
                'show_cta' => true,
                'featured' => true,
                'cta_text' => 'Initiate Sector Discovery'
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
                <svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" style="padding:24px;">
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
                <svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" style="padding:24px;">
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
                <svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" style="padding:24px;">
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

        $processData = [
            'subheading' => 'The Begin360 Process',
            'heading' => 'How we get you <br/>up and <span class="text-accent fraunces section-accent fw-normal">running</span>',
            'description' => 'A structured path from discovery to a fully operational system. No surprises, no projects that drag on with no end in sight.',
            'steps' => [
                [
                    'title' => 'Free Discovery Session',
                    'icon' => 'fa-question', // Dynamic Icon 1
                    'content' => 'We sit down with you to understand how your business works, what\'s causing pain, and what a good outcome looks like. No commitment needed.'
                ],
                [
                    'title' => 'Platform & Scope',
                    'icon' => 'fa-microchip', // Dynamic Icon 2
                    'content' => 'We recommend the right ERP for your size and budget, and give you a clear scope with honest timelines and pricing before anything starts.'
                ],
                [
                    'title' => 'Build & Configure',
                    'icon' => 'fa-layer-group', // Dynamic Icon 3
                    'content' => 'We set up the system around your products, processes, and suppliers—not a generic template. Your team is involved throughout the process.'
                ],
                [
                    'title' => 'Training & Go-Live',
                    'icon' => 'fa-tower-broadcast', // Dynamic Icon 4
                    'content' => 'We train your team hands-on and stay close during go-live. Once you\'re up and running, we\'re available for support whenever you need us.'
                ]
            ]
        ];
        
        $ecosystemContent = [
            'kicker' => 'Platforms',
            'heading_start' => 'We find what',
            'heading_accent' => 'fits you.',
            'description' => 'We work across the leading platforms used by Australian trade businesses — from full ERP systems to field service management tools. We’ll recommend what genuinely fits your size and the way you work.',
            'cta_text' => "Not sure? Let's talk",
            'cta_link' => '#contact-form'
        ];
        
        $testimonialData = [
            'subheading' => 'From Our Clients',
            'heading' => 'What <span class="text-accent fraunces section-accent fw-normal">Trade & Field Service</span><br/>Businesses Say',
            'description' => "Stories from Australian electricians, plumbers, and other trade business owners who've made the switch.",
            'testimonials' => [
                [
                    'quote' => "I used to spend Sunday nights doing the week's invoicing. Now it gets done the second the job is finished — by whoever's on site. We're getting paid an average of two weeks faster, and I've got my Sundays back.",
                    'author' => 'Director',
                    'company' => 'Electrical Contracting Business, Brisbane',
                    'is_featured' => true,
                    'icon' => 'fa-clock'
                ],
                [
                    'quote' => "We always knew some jobs weren't profitable but we couldn't tell which ones. The job costing showed us our maintenance contracts were barely breaking even. We repriced them and the business completely changed.",
                    'author' => 'Owner',
                    'company' => 'HVAC & Refrigeration, Melbourne',
                    'is_featured' => false,
                    'icon' => null
                ],
                [
                    'quote' => "Scheduling used to be a whiteboard and a lot of phone calls. Now the team gets notified on their phones, they can see their jobs for the day, and changes happen automatically. We fit more jobs in every week.",
                    'author' => 'Operations Manager',
                    'company' => 'Plumbing Business, Sydney',
                    'is_featured' => false,
                    'icon' => null
                ],
                [
                    'quote' => 'Our field techs used to hate "the system." Begin360 changed that by making the mobile app actually useful for them. They get their schedules, log their parts, and move to the next job without the usual double-handling of paperwork.',
                    'author' => 'Service Manager',
                    'company' => 'Fire & Safety Services, Perth',
                    'is_featured' => true,
                    'icon' => 'fa-mobile-screen'
                ]
            ]
        ];
        
        $faqs = [
            [
                'question' => 'Will my team in the field actually use it?',
                'answer' => 'This is the most common concern we hear, and the honest answer is: it depends on the setup. We configure the field-facing side to be simple — technicians typically only need to view their jobs, log time, and complete a checklist. If it\'s not easy to use on a phone, your team won\'t use it, so we build with that front of mind.'
            ],
            [
                'question' => 'We\'re already using Xero and ServiceM8. Do we need to replace everything?',
                'answer' => 'Not necessarily. In some cases we integrate what you have rather than replacing it. We\'ll look at your current setup and tell you honestly whether it makes more sense to connect your existing tools or move to a single platform. There\'s no agenda either way.'
            ],
            [
                'question' => 'Can it handle different types of work — service calls, project work, and maintenance contracts?',
                'answer' => 'Yes. Most trade businesses we work with have a mix of all three. The system handles reactive service calls, quoted project work, and recurring maintenance schedules differently, because they need to be billed and tracked differently.'
            ],
            [
                'question' => 'What about licences, certifications, and WHS documentation?',
                'answer' => 'We can configure document and certification tracking for your team — including expiry alerts for licences and trade cards. For WHS, we typically connect with your existing WHS system or configure basic digital forms within the ERP, depending on your requirements.'
            ],
            [
                'question' => 'How long does implementation take for a trade business?',
                'answer' => 'Generally 2 to 3 months. Larger operations with multiple branches or complex contract work may take longer. We clean up your customer list, migrate open jobs, and ensure the mobile app is tailored to your technicians before we flip the switch.'
            ],
            [
                'question' => 'What does it cost?',
                'answer' => 'It depends on your team size, the platform we recommend, and the complexity of your workflows. We give you a transparent, fixed-scope quote before work starts — no hourly billing surprises and no ongoing retainer you didn\'t agree to.'
            ],
            [
                'question' => 'Do you provide training for our field and office staff?',
                'answer' => 'Absolutely. We provide hands-on training tailored to different roles — from technicians logging materials in the field to office managers running job-profitability reports — ensuring your whole business is self-sufficient from day one.'
            ]
        ];
        
    @endphp
    <x-about-hero :heroData="$heroData"/>    
    <x-stats :statsData="$statsData"/>
    <x-industry-pain-points 
        subheading="Sound Familiar?"
        heading="The <i class='section-accent fraunces text-accent fw-light'>frustrations</i> every trade business knows"
        description="Whether you're an electrician, plumber, HVAC technician, or builder — these are the operational bottlenecks we hear most from trade businesses across Australia."
        :points="$painPoints"
    />
    <x-industry-solutions 
        heading="And how <i class='fraunces section-accent text-accent fw-light'>Begin360</i> fixes it!" 
        description="We implement an ERP built around how trade and field service businesses actually run — from quoting in the office to signing off on site. Here are the three things that make the biggest difference."
        :points="$tradeSolutions"
    />
    <x-process-flow :processData="$processData" />
    <x-platform-selection :ecosystemContent="$ecosystemContent"/>
    <x-testimonials :testimonialData="$testimonialData"/>
    <x-customFaqs :faqs="$faqs"/>
@endsection
@push('scripts')
    
@endpush