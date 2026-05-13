@extends('layouts.app')
@section('title', 'Professional Services Operations | High-Fidelity Systems by Begin360')
@section('meta_title', 'Service Architecture: Global Utilization & Real-Time Profitability | Begin360')
@section('meta_description', 'Engineer sovereign operational logic for your professional services firm. From multi-dimensional resource orchestration to rigid utilization tracking and WIP integrity, synchronize your talent-to-revenue workflows with Begin360’s high-fidelity Odoo architecture.')
@section('meta_keywords', 'Professional Services ERP Australia, Resource Orchestration, Utilization Tracking, WIP Integrity, Odoo Consulting Solutions, Revenue Operations Systems, Digital Service Architecture, Begin360 Operations Cloud, Enterprise Professional Logic')
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
                ['label' => 'Professional Services', 'url' => null, 'active' => true],
            ],
            'badge' => 'Sector-Specific Blueprint',
            'heading_start' => 'Stop leaving billable time on the',
            'dynamic_word' => 'table',
            'description' => 'Most professional services firms are losing revenue every week to time that never gets captured, projects that quietly go over budget, and invoices that go out late. Begin360 gives you a single system to manage your projects, your people, and your billing — so nothing falls through the cracks.',
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
                'target' => 15,
                'suffix' => '%',
                'title' => 'Revenue Capture',
                'description' => 'Average increase in billable hours captured after implementing automated time tracking.',
                'is_range' => false
            ],
            [
                'target' => 1,
                'suffix' => ' view',
                'title' => 'Single Source of Truth',
                'description' => 'A single dashboard showing live project health, staff utilisation, and WIP cash flow.',
                'is_range' => false
            ],
            [
                'target' => 2,
                'target_end' => 3,
                'suffix' => ' mo',
                'title' => 'Rapid Deployment',
                'description' => 'Typical timeframe to transition your firm into a fully integrated digital operations cloud.',
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
                'icon' => 'fa-clock',
                'title' => 'We\'re doing the work but not billing all of it.',
                'content' => 'Time gets lost between the work being done and the timesheet being submitted. Small write-offs add up—and at the end of the month, you\'ve left real money on the table.'
            ],
            [
                'icon' => 'fa-chart-pie',
                'title' => 'Projects go over budget and we don\'t notice until it\'s too late.',
                'content' => 'By the time you realise a project has blown out, the work is done and the invoice is already written. There\'s no early warning to have a conversation with the client before it\'s awkward.'
            ],
            [
                'icon' => 'fa-file-invoice-dollar',
                'title' => 'Invoicing is slow, manual, and inconsistent.',
                'content' => 'Getting invoices out means chasing timesheets and reconciling notes. It takes days, and when billing is delayed, your cash flow is the one that suffers.'
            ],
            [
                'icon' => 'fa-users-gear',
                'title' => 'I don\'t know if my team is too busy or not busy enough.',
                'content' => 'Without visibility into real-time capacity, resourcing is guesswork. Someone is overloaded while another has capacity—and you only find out when someone burns out.'
            ],
            [
                'icon' => 'fa-brain',
                'title' => 'Our client relationships live in everyone\'s heads.',
                'content' => 'Project history and relationship context are scattered across personal notebooks and memory. When a key staff member leaves, that critical knowledge walks out the door with them.'
            ],
            [
                'icon' => 'fa-arrow-up-right-dots',
                'title' => 'I can\'t see which clients or services are actually profitable.',
                'content' => 'Revenue looks fine, but you can\'t tell which engagements are genuinely profitable after overhead and time are accounted for. You might be working hardest for your least profitable clients.'
            ]
        ];

        $profServicesSolutions = [
            [
                'sub' => '01 — Capture Every Hour',
                'title' => 'Time tracking that your team will actually use',
                'content' => 'The best time tracking system is the one people use without thinking about it. We configure simple, fast time entry that fits into how your team already works — whether that\'s logging at the end of each task, end of day, or end of week — and links every hour back to a specific project and client.',
                'list' => [
                    'Quick time entry from desktop, phone, or browser — no friction',
                    'Time linked directly to projects, clients, and service types',
                    'Billable vs non-billable tracking with configurable rates per person or role',
                    'Manager approval workflows before time is invoiced'
                ],
                'svg' => '<svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" style="padding:24px;"><rect width="480" height="360" fill="#f7faf7"></rect><rect x="20" y="20" width="440" height="320" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect><text x="40" y="52" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Time &amp; Utilisation — Week of 5 May</text><line x1="40" y1="64" x2="440" y2="64" stroke="#e8e8e4" stroke-width="1"></line><rect x="40" y="76" width="118" height="56" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect><text x="99" y="96" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Hours logged</text><text x="99" y="118" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#111110" text-anchor="middle">142h</text><rect x="174" y="76" width="118" height="56" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect><text x="233" y="96" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">Billable</text><text x="233" y="118" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#01C608" text-anchor="middle">118h  83%</text><rect x="308" y="76" width="132" height="56" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect><text x="374" y="96" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Value generated</text><text x="374" y="118" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#111110" text-anchor="middle">$29,500</text><text x="40" y="154" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#444440">Team utilisation this week</text><line x1="40" y1="160" x2="440" y2="160" stroke="#e8e8e4" stroke-width="0.5"></line><text x="40" y="180" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Sarah K.</text><rect x="148" y="170" width="192" height="14" rx="4" fill="#01C608"></rect><text x="348" y="181" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">96%  38.4h</text><line x1="40" y1="190" x2="440" y2="190" stroke="#e8e8e4" stroke-width="0.5"></line><text x="40" y="210" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Marcus T.</text><rect x="148" y="200" width="160" height="14" rx="4" fill="#01C608"></rect><text x="316" y="211" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">80%  32h</text><line x1="40" y1="220" x2="440" y2="220" stroke="#e8e8e4" stroke-width="0.5"></line><text x="40" y="240" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Priya N.</text><rect x="148" y="230" width="124" height="14" rx="4" fill="#c2f5c3" stroke="#01C608" stroke-width="0.5"></rect><text x="280" y="241" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">62%  24.8h</text><line x1="40" y1="250" x2="440" y2="250" stroke="#e8e8e4" stroke-width="0.5"></line><rect x="40" y="250" width="400" height="26" fill="#fffbea" opacity="0.5"></rect><text x="40" y="270" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">David L.</text><rect x="148" y="260" width="80" height="14" rx="4" fill="#e8e8e4"></rect><text x="236" y="271" font-family="DM Sans,sans-serif" font-size="11" fill="#ba7517">40%  16h — capacity available</text><rect x="40" y="294" width="400" height="30" rx="7" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect><text x="240" y="313" font-family="DM Sans,sans-serif" font-size="11" fill="#017304" text-anchor="middle">✓  3 timesheets approved · Ready to invoice · $18,200 billable</text></svg>'
            ],
            [
                'sub' => '02 — Stay on Top of Every Project',
                'title' => 'Know where every project stands before the client asks',
                'content' => 'When you can see budget consumed, hours remaining, and key milestones for every active engagement in one place, you can have proactive conversations with clients instead of reactive ones. Problems get caught early, not when the invoice arrives.',
                'list' => [
                    'Live budget vs actual tracking on every project',
                    'Milestone and deliverable tracking with due date alerts',
                    'Project profitability view including all direct costs and time',
                    'Flags when a project is tracking to go over scope'
                ],
                'svg' => '<svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" style="padding:24px;"><rect width="480" height="360" fill="#f7faf7"></rect><rect x="20" y="20" width="440" height="320" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect><text x="40" y="52" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Active Projects — Budget Health</text><line x1="40" y1="64" x2="440" y2="64" stroke="#e8e8e4" stroke-width="1"></line><text x="40" y="82" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">PROJECT / CLIENT</text><text x="260" y="82" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">BUDGET</text><text x="320" y="82" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">USED</text><text x="375" y="82" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">STATUS</text><line x1="40" y1="88" x2="440" y2="88" stroke="#e8e8e4" stroke-width="0.5"></line><text x="40" y="108" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Brand Strategy</text><text x="40" y="122" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Coastal Homes Group</text><text x="260" y="114" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$18,000</text><text x="320" y="114" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">52%</text><rect x="372" y="104" width="52" height="18" rx="9" fill="#e8fde9"></rect><text x="398" y="117" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">On track</text><rect x="40" y="128" width="200" height="4" rx="2" fill="#e8e8e4"></rect><rect x="40" y="128" width="104" height="4" rx="2" fill="#01C608"></rect><line x1="40" y1="138" x2="440" y2="138" stroke="#e8e8e4" stroke-width="0.5"></line><rect x="40" y="138" width="400" height="48" fill="#fffbea" opacity="0.4"></rect><text x="40" y="158" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Systems Implementation</text><text x="40" y="172" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Northgate Logistics</text><text x="260" y="164" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$42,000</text><text x="320" y="164" font-family="DM Sans,sans-serif" font-size="12" fill="#ba7517">81%</text><rect x="365" y="154" width="68" height="18" rx="9" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect><text x="399" y="167" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">⚠ At risk</text><rect x="40" y="178" width="200" height="4" rx="2" fill="#e8e8e4"></rect><rect x="40" y="178" width="162" height="4" rx="2" fill="#ba7517"></rect><line x1="40" y1="188" x2="440" y2="188" stroke="#e8e8e4" stroke-width="0.5"></line><text x="40" y="208" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Financial Audit FY26</text><text x="40" y="222" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Meridian Property Group</text><text x="260" y="214" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$28,500</text><text x="320" y="214" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">34%</text><rect x="372" y="204" width="52" height="18" rx="9" fill="#e8fde9"></rect><text x="398" y="217" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">On track</text><rect x="40" y="228" width="200" height="4" rx="2" fill="#e8e8e4"></rect><rect x="40" y="228" width="68" height="4" rx="2" fill="#01C608"></rect><line x1="40" y1="238" x2="440" y2="238" stroke="#e8e8e4" stroke-width="0.5"></line><rect x="40" y="252" width="400" height="36" rx="8" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect><text x="56" y="267" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#ba7517">⚠  Northgate Logistics — 81% of budget used, 45% of deliverables complete</text><text x="56" y="280" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Consider a scope discussion before next milestone. 3 weeks remaining.</text><rect x="40" y="302" width="400" height="24" rx="6" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect><text x="240" y="318" font-family="DM Sans,sans-serif" font-size="11" fill="#888880" text-anchor="middle">12 active projects · $284,000 total pipeline · 2 requiring attention</text></svg>'
            ],
            [
                'sub' => '03 — Bill Accurately, Get Paid Faster',
                'title' => 'Invoices that go out on time and tell the right story',
                'content' => 'When your time, expenses, and project milestones are all in the same system, invoicing becomes fast and accurate. Clients receive professional, detailed invoices that reflect exactly what was agreed — and disputes become rare.',
                'list' => [
                    'Generate invoices directly from approved timesheets and expenses',
                    'Fixed-fee, time-and-materials, and retainer billing — all supported',
                    'Profitability view by client, service line, or individual engagement',
                    'Integrates with Xero and MYOB so your accounts stay clean'
                ],
                'svg' => '<svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" style="padding:24px;"><rect width="480" height="360" fill="#f7faf7"></rect><rect x="20" y="20" width="440" height="320" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect><text x="40" y="52" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Client Profitability — FY26 YTD</text><line x1="40" y1="64" x2="440" y2="64" stroke="#e8e8e4" stroke-width="1"></line><rect x="40" y="76" width="110" height="56" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect><text x="95" y="96" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Revenue</text><text x="95" y="118" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#111110" text-anchor="middle">$486k</text><rect x="166" y="76" width="110" height="56" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect><text x="221" y="96" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Direct costs</text><text x="221" y="118" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#111110" text-anchor="middle">$218k</text><rect x="292" y="76" width="148" height="56" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect><text x="366" y="96" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">Gross margin</text><text x="366" y="118" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#01C608" text-anchor="middle">$268k  55%</text><text x="40" y="154" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#444440">Margin by client</text><line x1="40" y1="160" x2="440" y2="160" stroke="#e8e8e4" stroke-width="0.5"></line><text x="40" y="180" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Meridian Property Group</text><rect x="248" y="171" width="120" height="14" rx="4" fill="#01C608"></rect><text x="376" y="182" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">68%</text><line x1="40" y1="190" x2="440" y2="190" stroke="#e8e8e4" stroke-width="0.5"></line><text x="40" y="210" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Coastal Homes Group</text><rect x="248" y="201" width="96" height="14" rx="4" fill="#01C608"></rect><text x="352" y="212" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">54%</text><line x1="40" y1="220" x2="440" y2="220" stroke="#e8e8e4" stroke-width="0.5"></line><rect x="40" y="220" width="400" height="28" fill="#fef2f2" opacity="0.35"></rect><text x="40" y="240" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Northgate Logistics</text><rect x="248" y="231" width="48" height="14" rx="4" fill="#e8e8e4"></rect><text x="304" y="242" font-family="DM Sans,sans-serif" font-size="11" fill="#e24b4a">27%  ↓ Low margin</text><line x1="40" y1="252" x2="440" y2="252" stroke="#e8e8e4" stroke-width="0.5"></line><text x="40" y="272" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#444440">Billing mix</text><rect x="40" y="280" width="168" height="14" rx="4" fill="#01C608"></rect><text x="216" y="291" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Fixed-fee  52%</text><rect x="40" y="302" width="96" height="14" rx="4" fill="#c2f5c3"></rect><text x="144" y="313" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">T&amp;M  30%</text><rect x="40" y="324" width="60" height="14" rx="4" fill="#e8e8e4"></rect><text x="108" y="335" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Retainer  18%</text></svg>'
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
            'kicker' => 'Ecosystem Validation',
            'heading_start' => 'We find what',
            'heading_accent' => 'fits you.',
            'description' => 'We work across leading ERP platforms used by Australian Professional Service Provider. Our job is to recommend the platform that fits your project types, contract complexity, and budget.',
            'cta_text' => "Not sure? Let's talk",
            'cta_link' => '#contact-form'
        ];
        $testimonialData = [
            'subheading' => 'From Our Clients',
            'heading' => 'What <span class="text-accent fraunces section-accent fw-normal">Professional Services</span>
<br/>Firms Say',
            'description' => "Stories from Australian consulting firms, agencies, and practices who've made the switch.",
            'testimonials' => [
                [
                    'quote' => 'We knew we were losing billable hours but had no idea how much. In the first month after go-live, we captured $22,000 in time that previously would have been written off or simply forgotten. The system paid for itself before the end of the quarter.',
                    'author' => 'Managing Director',
                    'company' => 'Management Consulting Firm, Sydney',
                    'is_featured' => true,
                    'icon' => 'fa-clock-rotate-left'
                ],
                [
                    'quote' => 'We used to find out a project had gone over budget when we were writing the final invoice. Now we get a flag at 75% of budget consumed — early enough to have a real conversation with the client about scope.',
                    'author' => 'Principal',
                    'company' => 'Engineering Consultancy, Melbourne',
                    'is_featured' => false,
                    'icon' => null
                ],
                [
                    'quote' => "The profitability report by client completely changed how we think about our business. Two of our biggest clients by revenue were among our least profitable. We've restructured those engagements and our margins are up significantly.",
                    'author' => 'Director',
                    'company' => 'Marketing & Strategy Agency, Brisbane',
                    'is_featured' => false,
                    'icon' => null
                ],
                [
                    'quote' => 'Begin360 didn\'t just install software; they architected a digital nervous system that adapts to our growth and talent orchestration.',
                    'author' => 'Chief Technology Officer',
                    'company' => 'Global Advisory Group',
                    'is_featured' => true,
                    'icon' => 'fa-network-wired'
                ]
            ]
            ];
        $faqs = [
            [
                'question' => 'We have different billing models — fixed-fee, T&M, and retainers. Can one system handle all of them?',
                'answer' => 'Yes, and this is something we configure carefully from the start. The system supports all three billing models simultaneously — different clients or even different projects within the same client can be billed differently. Invoices are generated from the same time and expense data regardless of the model.'
            ],
            [
                'question' => 'How do we get our team to actually log their time?',
                'answer' => 'This is the most important hurdle to clear. We focus on making it frictionless, configuring time entry to match how your team already works — whether that’s logging at the end of a task, a day, or a week. We also assist with the change management required to turn time-tracking into a cultural habit.'
            ],
            [
                'question' => 'We’re already using Xero. Do we need to replace it?',
                'answer' => 'No. We typically integrate with Xero rather than replacing it. Your project-level billing and expenses flow into Xero automatically, allowing your bookkeeper or accountant to keep working in the environment they already know.'
            ],
            [
                'question' => 'Can it handle subcontractors and freelancers as well as permanent staff?',
                'answer' => 'Yes. We configure separate rate structures and cost tracking for external contractors. This ensures your project profitability reports account for the higher cost of contract talent compared to internal staff overhead.'
            ],
            [
                'question' => 'How long does implementation take for a professional services firm?',
                'answer' => 'Generally 2 to 3 months for a small to medium firm. This includes configuration, data migration, and team training. Larger firms with multiple entities or complex service lines may require a slightly longer runway.'
            ],
            [
                'question' => 'What does it cost?',
                'answer' => 'It depends on your firm size, the platform we recommend, and the complexity of your workflows. We provide a fixed-scope quote before we start — no surprise hourly bills and no open-ended costs you didn’t agree to upfront.'
            ],
            [
                'question' => 'Do you provide internal team training?',
                'answer' => 'Absolutely. We provide hands-on training tailored to different roles — from consultants logging time to principals reviewing profitability dashboards — ensuring your firm is fully self-sufficient within the new ecosystem.'
            ]
        ];

    @endphp
    <x-about-hero :heroData="$heroData"/>
    <x-stats :statsData="$statsData"/>
    <x-industry-pain-points
        subheading="Sound Familiar?"
        heading="The <i class='section-accent fraunces text-accent fw-light'>frustrations</i> most professional services firms share"
        description="Whether you're a consulting firm, accounting practice, engineering group, or marketing agency—these are the problems we hear most from principals and business owners across Australia."
        :points="$painPoints"
    />
    <x-industry-solutions
        heading="And how <i class='fraunces section-accent text-accent fw-light'>Begin360</i> fix it!"
        description="We implement an ERP built around how professional services firms actually run engagements — from proposal to final invoice. Here are the three things that make the biggest difference."
        :points="$profServicesSolutions"
    />
    <x-process-flow :processData="$processData" />
    <x-platform-selection :ecosystemContent="$ecosystemContent"/>
    <x-testimonials :testimonialData="$testimonialData"/>
    <x-custom-faqs :faqs="$faqs"/>
@endsection
@push('scripts')

@endpush
