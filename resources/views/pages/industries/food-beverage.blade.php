@extends('layouts.app')
@section('title', 'Food & Beverage ERP Solutions | High-Fidelity Systems by Begin360')
@section('meta_title', 'Food & Beverage Architecture: Rigid Batch-Track Procurement & ERP Logic | Begin360')
@section('meta_description', 'Engineer sovereign inventory logic for your F&B enterprise. From perishable batch-track procurement to global supply chain resilience, synchronize your production workflows with Begin360’s high-fidelity Odoo architecture.')
@section('meta_keywords', 'Food and Beverage ERP, Batch-Track Procurement, Perishable Inventory Logic, Supply Chain Resilience, Odoo F&B Solutions, Food Safety Compliance Systems, Digital Production Architecture, Begin360 ERP Ecosystem')
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
                ['label' => 'Food & Beverage', 'url' => null, 'active' => true],
            ],
            'badge' => 'Sector-Specific Blueprint',
            'heading_start' => 'Run your F&B business without the',
            'dynamic_word' => 'guesswork',
            'description' => 'Most food and beverage businesses in Australia are managing stock, compliance, and orders across spreadsheets and disconnected apps. Begin360 brings it all into one system—so you always know what\'s going on.',
            'primary_btn' => [
                'text' => 'Talk to Us',
                'url' => '#sector-architecture',
                'icon' => 'fa-phone'
            ],
            'secondary_btn' => [
                'text' => 'Have a Look',
                'url' => url('/contact'),
                'icon' => 'fa-play'
            ],
            'scroll_text' => 'Scroll to see the transformation'
        ];
        $statsData = [
            [
                'target' => 35,
                'suffix' => '%',
                'title' => 'Average reduction in food waste',
                'description' => 'Average reduction in food waste after implementation',
                'is_range' => false
            ],
            [
                'target' => 100,
                'suffix' => '%',
                'title' => 'FSANZ Traceability',
                'description' => 'FSANZ traceability from day one',
                'is_range' => false
            ],
            [
                'target' => 2,
                'target_end' => 4,
                'suffix' => ' mo',
                'title' => 'Typical Deployment',
                'description' => 'Typical time to get fully up and running',
                'is_range' => true
            ]
        ];
        $modulesHeader = [
            'section_class'  => 'bg-body',
            'badge'          => '— WHAT\'S INCLUDED —',
            'heading_start'  => 'Everything your F&B business needs,',
            'dynamic_word'   => 'in one place',
            'description'    => 'We configure the modules that make sense for your business. Everything works together from day one, and each module has its own dedicated page where you can learn more about how it works.',
            'primary_btn'    => [
                'text' => 'View All Modules',
                'url'  => route('modules.index'),
                'icon' => 'fa-layer-group'
            ]
        ];
        $modules = [
            [
                'title'        => 'Inventory Management',
                'icon'         => 'fa-boxes-stacked',
                'description'  => 'Real-time stock levels, expiry tracking, low-stock alerts, and FEFO rotation—across one or multiple locations.',
                'url'          => route('modules.show', 'inventory'),
                'column_class' => 'col-10 col-md-8 col-lg-6',
                'show_cta'     => true,
                'features'     => ['Expiry tracking', 'FEFO', 'Multi-site']
            ],
            [
                'title'        => 'Procurement',
                'icon'         => 'fa-file-invoice-dollar',
                'description'  => 'Create purchase orders, track supplier lead times, manage supplier documents—all linked directly to your inventory.',
                'url'          => route('modules.show', 'procurement'),
                'column_class' => 'col-10 col-md-4 col-lg-3',
                'show_cta'     => true,
                'features'     => ['Auto reorder', 'Supplier certs', 'Lead times']
            ],
            [
                'title'        => 'Order Management',
                'icon'         => 'fa-cart-flatbed',
                'description'  => 'Handle wholesale, retail, foodservice, and online orders in one place. No more jumping between inboxes and spreadsheets.',
                'url'          => route('modules.show', 'orders'),
                'column_class' => 'col-10 col-md-4 col-lg-3',
                'show_cta'     => true,
                'features'     => ['Wholesale', 'DTC', 'Pricing tiers']
            ],
            [
                'title'        => 'Compliance & Traceability',
                'icon'         => 'fa-check-double',
                'description'  => 'Trace any product or ingredient forward and back in seconds. FSANZ audit-ready without extra work from your team.',
                'url'          => route('modules.show', 'compliance'),
                'column_class' => 'col-10 col-md-4 col-lg-3',
                'show_cta'     => true,
                'features'     => ['FSANZ', 'Recall ready', 'HACCP']
            ],
            [
                'title'        => 'Finance & Accounting',
                'icon'         => 'fa-calculator',
                'description'  => 'GST-compliant invoicing, landed cost tracking, and clear financial reports. Know how the business is performing in real time.',
                'url'          => route('modules.show', 'finance'),
                'column_class' => 'col-10 col-md-4 col-lg-3',
                'show_cta'     => true,
                'features'     => ['GST', 'Landed costs', 'Margin reports']
            ],
            [
                'title'        => 'Warehouse Management',
                'icon'         => 'fa-warehouse',
                'description'  => 'Optimise storage across ambient, chilled, and frozen zones. Automate pick-pack-dispatch with barcode scanning and zone routing.',
                'url'          => route('modules.show', 'warehouse-management'),
                'column_class' => 'col-10 col-md-8 col-lg-6',
                'show_cta'     => true,
                'features'     => ['Cold chain', 'Barcode scan', 'Zone routing']
            ],
            [
                'title'        => 'Need Something Specific?',
                'icon'         => 'fa-comments',
                'description'  => 'We work with businesses that have unique requirements too. Tell us what you need and we\'ll figure it out together.',
                'url'          => url('/contact'),
                'column_class' => 'col-10 col-md-12 col-lg-12',
                'show_cta'     => true,
                'featured'     => true,
                'cta_text'     => 'Start a Conversation'
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
        $faqs = [
            [
                'question' => 'What services do you offer?',
                'answer' => 'We offer a range of services including CRM consulting, optimization, and bespoke marketing solutions. Our packages are designed to cater to various business needs, from entry-level support to comprehensive revenue operations leadership. Each service is tailored to help you achieve your growth objectives.'
            ],
            [
                'question' => 'How do engagements get started?',
                'answer' => 'Our process begins with a comprehensive audit of your existing workflows to identify bottlenecks and opportunities for automation.'
            ],
            [
                'question' => 'Do you offer ongoing support?',
                'answer' => 'Yes, we provide dedicated post-integration support and continuous optimization to ensure your systems scale with your business.'
            ],
            [
                'question' => 'Where do you typically begin?',
                'answer' => 'We usually start at the core of your data architecture to ensure the foundation is secure before layering advanced automation.'
            ],
            [
                'question' => 'What is the typical implementation timeline?',
                'answer' => 'While complexity varies, most corporate integrations are completed within 8 to 12 weeks. We provide a detailed project roadmap during the initial discovery phase to ensure full transparency.'
            ],
            [
                'question' => 'How do you handle data security and privacy?',
                'answer' => 'Security is our primary directive. We utilize enterprise-grade encryption and comply with all global data privacy standards to ensure your corporate intellectual property remains protected.'
            ],
            [
                'question' => 'Do you provide custom API development?',
                'answer' => 'Yes. Our engineering team specializes in building custom middleware and API connectors to ensure seamless data flow between your legacy systems and modern stacks.'
            ],
            [
                'question' => 'How is the success of an engagement measured?',
                'answer' => 'WE DEFINE SPECIFIC KEY PERFORMANCE INDICATORS (KPIS) AT THE ONSET, FOCUSING ON OPERATIONAL EFFICIENCY, COST REDUCTION, AND REVENUE GROWTH METRICS TO TRACK TANGIBLE ROI.'
            ],
            [
                'question' => 'What is your pricing structure?',
                'answer' => 'We offer tiered engagement models ranging from project-based consulting to ongoing retainers. Each proposal is custom-built to match your specific scale and scope.'
            ],
            [
                'question' => 'Can you support multi-national operations?',
                'answer' => 'Absolutely. Our systems are designed to handle multi-currency, multi-language, and complex global tax compliance requirements for international corporations.'
            ],
            [
                'question' => 'Do you provide internal team training?',
                'answer' => 'We provide comprehensive onboarding and hands-on training sessions to ensure your team is fully equipped to manage and operate the new ecosystem independently.'
            ],
            [
                'question' => 'How scalable are your solutions?',
                'answer' => 'All architectures we deploy are built with scalability in mind. As your transaction volume grows, our cloud-native solutions auto-adapt to ensure peak performance.'
            ],
            [
                'question' => 'Do you work with third-party vendors?',
                'answer' => 'Yes. We frequently collaborate with external vendors and internal IT departments to ensure that all integrations align with your broader corporate strategy.'
            ],
            [
                'question' => 'Do you offer change management services?',
                'answer' => 'We recognize that tools are only half the battle. We provide change management advisory to help align your company culture with new digital processes.'
            ]
        ];
        $painPoints = [
            [
                'icon'    => 'fa-calculator', 
                'title'   => '"I don\'t actually know my real margins."', 
                'content' => 'When ingredient costs change, it takes hours of spreadsheet work to figure out what it does to your pricing—and most of the time it just doesn\'t get done.'
            ],
            [
                'icon'    => 'fa-boxes-stacked', 
                'title'   => '"We\'re always running out of something."', 
                'content' => 'You find out you\'re low on stock when a customer orders something you can\'t fulfil. By then it\'s already a problem and someone is unhappy.'
            ],
            [
                'icon'    => 'fa-calendar-xmark', 
                'title'   => '"Things go out of date before we use them."', 
                'content' => 'Without proper tracking, you\'re not always using the oldest stock first. That means waste—and waste is money walking out the door.'
            ],
            [
                'icon'    => 'fa-magnifying-glass-arrow-right', 
                'title'   => '"A recall would take us days to sort out."', 
                'content' => 'If you had to trace a specific batch right now—which customers got it, what ingredients were in it—how long would that take? Most businesses don\'t want to answer that.'
            ],
            [
                'icon'    => 'fa-network-wired', 
                'title'   => '"Orders come in from everywhere and it\'s chaos."', 
                'content' => 'Wholesale, cafés, online, markets—managing orders across different channels means things fall through the cracks and staff spend too much time on admin.'
            ],
            [
                'icon'    => 'fa-file-signature', 
                'title'   => '"Compliance paperwork is eating our time."', 
                'content' => 'Food safety records, allergen declarations, supplier certificates—the admin never ends, and you\'re never fully confident everything is in order if someone audited you today.'
            ]
        ];
        $fbSolutions = [
        [
            'sub' => '01 — Know Your Numbers',
            'title' => 'See your real costs and margins at any time',
            'content' => 'When you know exactly what each product costs to make—and that number updates automatically when ingredient prices change—you can price with confidence.',
            'list' => ['Live Batch Costing', 'Automatic Margin Updates', 'Profitability Views', 'Allergen Tracking'],
            'svg' => '<svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" >
                        <rect width="480" height="360" fill="#f7faf7"></rect>
                        <!-- Dashboard card bg -->
                        <rect x="20" y="20" width="440" height="320" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>
                        <!-- Header -->
                        <text x="40" y="52" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Recipe Cost Dashboard</text>
                        <rect x="360" y="36" width="80" height="26" rx="6" fill="#e8fde9"></rect>
                        <text x="400" y="53" font-family="DM Sans,sans-serif" font-size="11" fill="#019906" text-anchor="middle">Live ●</text>
                        <!-- Divider -->
                        <line x1="40" y1="68" x2="440" y2="68" stroke="#e8e8e4" stroke-width="1"></line>
                        <!-- Stat boxes row -->
                        <rect x="40" y="82" width="112" height="64" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                        <text x="52" y="102" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Cost / batch</text>
                        <text x="52" y="127" font-family="DM Sans,sans-serif" font-size="22" font-weight="700" fill="#01C608">$18.40</text>

                        <rect x="168" y="82" width="112" height="64" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                        <text x="180" y="102" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Sell price</text>
                        <text x="180" y="127" font-family="DM Sans,sans-serif" font-size="22" font-weight="700" fill="#111110">$42.00</text>

                        <rect x="296" y="82" width="124" height="64" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                        <text x="308" y="102" font-family="DM Sans,sans-serif" font-size="10" fill="#019906">Margin</text>
                        <text x="308" y="127" font-family="DM Sans,sans-serif" font-size="22" font-weight="700" fill="#017304">56.2%</text>

                        <!-- Bar chart label -->
                        <text x="40" y="172" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#444440">Ingredient cost breakdown</text>
                        <!-- Bars -->
                        <rect x="40" y="185" width="168" height="18" rx="4" fill="#01C608"></rect>
                        <text x="216" y="198" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Flour  44%</text>

                        <rect x="40" y="212" width="96" height="18" rx="4" fill="#c2f5c3"></rect>
                        <text x="144" y="225" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Eggs  25%</text>

                        <rect x="40" y="239" width="72" height="18" rx="4" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                        <text x="120" y="252" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Butter  19%</text>

                        <rect x="40" y="266" width="46" height="18" rx="4" fill="#e8e8e4"></rect>
                        <text x="94" y="279" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Other  12%</text>

                        <!-- Alert badge -->
                        <rect x="40" y="300" width="380" height="26" rx="6" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                        <text x="52" y="317" font-family="DM Sans,sans-serif" font-size="11" fill="#017304">✓  Flour price updated today — margin recalculated automatically</text>
                </svg>'
        ],
        [
            'sub' => '02 — Control Your Stock',
            'title' => 'Always know what you have and when it expires',
            'content' => 'Good inventory management means tracking expiry dates, rotating stock correctly (FEFO), and getting alerts before you run out.',
            'list' => ['Expiry Tracking', 'Low Stock Alerts', 'Batch Traceability', 'Multi-location Support'],
            'svg' => '<svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" >
                    <rect width="480" height="360" fill="#f7faf7"></rect>
                    <rect x="20" y="20" width="440" height="320" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="40" y="52" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Inventory Overview</text>
                    <line x1="40" y1="64" x2="440" y2="64" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Table header -->
                    <rect x="40" y="74" width="400" height="26" rx="4" fill="#f7faf7"></rect>
                    <text x="52" y="91" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">ITEM</text>
                    <text x="220" y="91" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">QTY</text>
                    <text x="290" y="91" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">EXPIRES</text>
                    <text x="390" y="91" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">STATUS</text>

                    <!-- Row 1 - good -->
                    <line x1="40" y1="100" x2="440" y2="100" stroke="#e8e8e4" stroke-width="0.5"></line>
                    <text x="52" y="118" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Whole Milk (L)</text>
                    <text x="220" y="118" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">240</text>
                    <text x="290" y="118" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">14 Jun</text>
                    <rect x="385" y="108" width="46" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="408" y="121" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">OK</text>

                    <!-- Row 2 - warning -->
                    <line x1="40" y1="128" x2="440" y2="128" stroke="#e8e8e4" stroke-width="0.5"></line>
                    <rect x="40" y="128" width="400" height="28" fill="#fffbea" opacity="0.6"></rect>
                    <text x="52" y="146" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Free Range Eggs (doz)</text>
                    <text x="220" y="146" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">18</text>
                    <text x="290" y="146" font-family="DM Sans,sans-serif" font-size="12" fill="#ba7517">3 Jun</text>
                    <rect x="375" y="136" width="60" height="18" rx="9" fill="#faeeda"></rect>
                    <text x="405" y="149" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">Expiring</text>

                    <!-- Row 3 - low stock -->
                    <line x1="40" y1="156" x2="440" y2="156" stroke="#e8e8e4" stroke-width="0.5"></line>
                    <rect x="40" y="156" width="400" height="28" fill="#fef2f2" opacity="0.5"></rect>
                    <text x="52" y="174" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Organic Flour (kg)</text>
                    <text x="220" y="174" font-family="DM Sans,sans-serif" font-size="12" fill="#e24b4a">4</text>
                    <text x="290" y="174" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">30 Jul</text>
                    <rect x="373" y="164" width="64" height="18" rx="9" fill="#fcebeb"></rect>
                    <text x="405" y="177" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#e24b4a" text-anchor="middle">Low Stock</text>

                    <!-- Row 4 -->
                    <line x1="40" y1="184" x2="440" y2="184" stroke="#e8e8e4" stroke-width="0.5"></line>
                    <text x="52" y="202" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Butter (kg)</text>
                    <text x="220" y="202" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">62</text>
                    <text x="290" y="202" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">22 Jun</text>
                    <rect x="385" y="192" width="46" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="408" y="205" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">OK</text>

                    <!-- Row 5 -->
                    <line x1="40" y1="212" x2="440" y2="212" stroke="#e8e8e4" stroke-width="0.5"></line>
                    <text x="52" y="230" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Vanilla Extract (mL)</text>
                    <text x="220" y="230" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">380</text>
                    <text x="290" y="230" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">Dec 2025</text>
                    <rect x="385" y="220" width="46" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="408" y="233" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">OK</text>

                    <!-- FEFO alert -->
                    <rect x="40" y="256" width="400" height="34" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="56" y="271" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#017304">FEFO Active</text>
                    <text x="56" y="284" font-family="DM Sans,sans-serif" font-size="10" fill="#019906">Oldest batch of eggs auto-assigned to next production run</text>

                    <!-- Reorder alert -->
                    <rect x="40" y="298" width="400" height="28" rx="8" fill="#fcebeb" stroke="#f7c1c1" stroke-width="1"></rect>
                    <text x="56" y="316" font-family="DM Sans,sans-serif" font-size="11" fill="#a32d2d">⚠  Purchase order suggested: Organic Flour — reorder point reached</text>
                </svg>'
        ],
        [
            'sub' => '03 — Stay Compliant',
            'title' => 'Food safety compliance that runs in the background',
            'content' => 'The system handles the paperwork so your team can focus on the food. Every transaction is recorded and every batch is traceable.',
            'list' => ['FSANZ Ready', 'Digital Checklists', 'Supplier Certificates', 'Lot Traceability'],
            'svg' => '<svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" >
                    <rect width="480" height="360" fill="#f7faf7"></rect>
                    <rect x="20" y="20" width="440" height="320" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="40" y="52" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Batch Traceability — Lot #FB2406-018</text>
                    <rect x="348" y="36" width="112" height="24" rx="6" fill="#e8fde9"></rect>
                    <text x="404" y="52" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">FSANZ Compliant</text>

                    <line x1="40" y1="64" x2="440" y2="64" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Trace flow -->
                    <!-- Node 1 -->
                    <rect x="40" y="78" width="160" height="48" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="52" y="96" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906">INGREDIENT RECEIPT</text>
                    <text x="52" y="112" font-family="DM Sans,sans-serif" font-size="11" fill="#017304">Organic Flour — 50kg</text>
                    <text x="52" y="122" font-family="DM Sans,sans-serif" font-size="9" fill="#888880">Supplier: GreenMill Co · 1 Jun 2024</text>

                    <!-- Arrow -->
                    <line x1="200" y1="102" x2="230" y2="102" stroke="#01C608" stroke-width="1.5" stroke-dasharray="3,3"></line>
                    <polygon points="230,98 238,102 230,106" fill="#01C608"></polygon>

                    <!-- Node 2 -->
                    <rect x="240" y="78" width="160" height="48" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="252" y="96" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906">PRODUCTION</text>
                    <text x="252" y="112" font-family="DM Sans,sans-serif" font-size="11" fill="#017304">Sourdough Loaf × 120</text>
                    <text x="252" y="122" font-family="DM Sans,sans-serif" font-size="9" fill="#888880">Produced: 3 Jun 2024 · Batch #018</text>

                    <!-- Arrow down -->
                    <line x1="320" y1="126" x2="320" y2="148" stroke="#01C608" stroke-width="1.5" stroke-dasharray="3,3"></line>
                    <polygon points="316,148 320,156 324,148" fill="#01C608"></polygon>

                    <!-- Node 3 -->
                    <rect x="240" y="158" width="160" height="48" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="252" y="176" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906">DISPATCH</text>
                    <text x="252" y="192" font-family="DM Sans,sans-serif" font-size="11" fill="#017310">Orders #2891, #2894</text>
                    <text x="252" y="202" font-family="DM Sans,sans-serif" font-size="9" fill="#888880">Dispatched: 4 Jun 2024</text>

                    <!-- Arrow left -->
                    <line x1="240" y1="182" x2="210" y2="182" stroke="#01C608" stroke-width="1.5" stroke-dasharray="3,3"></line>
                    <polygon points="210,178 202,182 210,186" fill="#01C608"></polygon>

                    <!-- Node 4 -->
                    <rect x="40" y="158" width="160" height="48" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="52" y="176" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906">CUSTOMERS</text>
                    <text x="52" y="192" font-family="DM Sans,sans-serif" font-size="11" fill="#017304">Café Luna, Daily Table</text>
                    <text x="52" y="202" font-family="DM Sans,sans-serif" font-size="9" fill="#888880">2 customers · 120 units</text>

                    <!-- Stats row -->
                    <rect x="40" y="228" width="120" height="44" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="100" y="248" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#01C608" text-anchor="middle">2</text>
                    <text x="100" y="263" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Customers affected</text>

                    <rect x="176" y="228" width="120" height="44" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="236" y="248" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#01C608" text-anchor="middle">&lt; 60s</text>
                    <text x="236" y="263" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Time to trace</text>

                    <rect x="312" y="228" width="128" height="44" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="376" y="248" font-family="DM Sans,sans-serif" font-size="18" font-weight="700" fill="#01C608" text-anchor="middle">100%</text>
                    <text x="376" y="263" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Audit coverage</text>

                    <!-- Footer note -->
                    <rect x="40" y="288" width="400" height="30" rx="6" fill="#e8fde9"></rect>
                    <text x="240" y="307" font-family="DM Sans,sans-serif" font-size="11" fill="#017304" text-anchor="middle">✓  All supplier certificates verified · HACCP records attached</text>
                </svg>'
        ]
        ];
        $ecosystemContent = [
            'kicker' => 'Ecosystem Validation',
            'heading_start' => 'We find what',
            'heading_accent' => 'fits you.',
            'description' => 'We work across leading ERP platforms used by Australian F&B businesses. Our job is to recommend the platform that fits your project types, contract complexity, and budget.',
            'cta_text' => "Not sure? Let's talk",
            'cta_link' => '#contact-form'
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
        $testimonialData = [
            'subheading' => 'From Our Customers',
            'heading' => 'What <span class="text-accent fraunces section-accent fw-normal">Food and Beverage</span><br/>Businesses Say',
            'description' => 'Stories from Australian food and beverage businesses who\'ve made the switch.',
            'testimonials' => [
                [
                    'quote' => 'Before Begin360, a product recall would have taken us the better part of a week to sort out manually. Now I can trace any batch—ingredients, production date, which customers it went to—in under two minutes. That alone made it worth it.',
                    'author' => 'Director of Operations',
                    'company' => 'Food Manufacturer, Victoria',
                    'is_featured' => true,
                    'icon' => 'fa-quote-left'
                ],
                [
                    'quote' => 'We had stock going out of date because nobody was rotating it properly. Within a month of going live, our waste dropped noticeably. The team actually uses the system because it\'s simple.',
                    'author' => 'Owner',
                    'company' => 'Specialty Food Producer, NSW',
                    'is_featured' => false,
                    'icon' => null
                ],
                [
                    'quote' => 'We were managing wholesale, our online store, and farmers markets from three different spreadsheets. Now everything\'s in one place and I actually know what stock I have at any given time.',
                    'author' => 'Co-Founder',
                    'company' => 'Beverage Brand, Queensland',
                    'is_featured' => false,
                    'icon' => null
                ],
                [
                    'quote' => 'Begin360 didn\'t just install software; they architected a digital nervous system that adapts to our growth.',
                    'author' => 'Chief Technology Officer',
                    'company' => 'Tech Infrastructure Corp',
                    'is_featured' => true,
                    'icon' => 'fa-microchip'
                ]
            ]
        ];
        
    @endphp
    <x-about-hero :heroData="$heroData"/>    
    <x-stats :statsData="$statsData"/>
    <x-industry-pain-points 
        subheading="Sounds Familiar?"
        heading="The <span class='section-accent fraunces text-accent fw-light'>headaches</span> that come with running a food business"
        description="These are the problems we hear most from F&B owners across Australia. If any feel familiar, you're in the right place."
        :points="$painPoints"
    />
    <x-industry-solutions 
        heading="And how <span class='fraunces section-accent text-accent fw-light '>Begin360</span> fix it!" 
        description="We implement an ERP system built around how your food business actually works. Here are the three things that make the biggest difference."
        :points="$fbSolutions"
    />
    <x-bento-grid 
        :items="$modules" 
        :bentoData="$modulesHeader" 
        id="industry-sectors" 
        class="pt-5" 
    />
    <x-process-flow :processData="$processData" />
    <x-platform-selection :ecosystemContent="$ecosystemContent"/>
    <x-testimonials :testimonialData="$testimonialData"/>
    <x-custom-faqs :faqs="$faqs"/>
@endsection
@push('scripts')
    
@endpush