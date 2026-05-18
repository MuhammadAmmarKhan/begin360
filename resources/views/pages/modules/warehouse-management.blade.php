@extends('layouts.app')
@section('title', 'Warehouse Management | Inventory Control & Stock Tracking by Begin360')
@section('meta_title', 'Warehouse Management Architecture: Live Inventory & Fulfillment | Begin360')
@section('meta_description', 'Optimize stock levels and eliminate inventory leak. From live multi-warehouse tracking and barcode scanning to automated stock alerts and supplier purchase orders, manage your supply chain with Begin360.')
@section('meta_keywords', 'Warehouse Management Software Australia, Inventory Control ERP, Multi Site Stock Tracking, Barcode Scanning System, Automated Stock Replenishment, Supplier Purchase Orders, Fulfillment Architecture, Material Logistics Tool')
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
                ['label' => 'Warehouse Management', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Know what\'s in stock.<br/>Ship',
            'dynamic_word' => 'it right.',
            'description' => 'Running a warehouse from spreadsheets and tribal knowledge means stock discrepancies, mispicks, and orders that go out wrong or late. Begin360 gives you a live view of every product, every location, and every movement — so your team always knows what to pick, where to find it, and what needs to be replenished before you run out.',
            'hero_image' => '<svg viewBox="0 0 460 380" xmlns="http://www.w3.org/2000/svg" style="display:block;width:100%;">
                    <rect width="460" height="380" fill="#f7faf7"></rect>
                    <rect x="14" y="14" width="432" height="352" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="30" y="40" font-family="DM Sans,sans-serif" font-size="12" font-weight="600" fill="#111110">Warehouse Stock — Live View</text>
                    <rect x="352" y="27" width="78" height="22" rx="11" fill="#e8fde9"></rect>
                    <text x="391" y="41" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">● Live</text>
                    <line x1="30" y1="52" x2="446" y2="52" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Column headers -->
                    <text x="30" y="67" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="#888880" letter-spacing="0.04em">PRODUCT</text>
                    <text x="262" y="67" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="#888880" text-anchor="middle">LOCATION</text>
                    <text x="340" y="67" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="#888880" text-anchor="middle">ON HAND</text>
                    <text x="446" y="67" font-family="DM Sans,sans-serif" font-size="9" font-weight="600" fill="#888880" text-anchor="end">STATUS</text>
                    <line x1="30" y1="73" x2="446" y2="73" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 1 — healthy stock -->
                    <text x="30" y="90" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#111110">Shiraz Reserve 2022</text>
                    <text x="30" y="103" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">SKU-4421 · 750ml · Case 12</text>
                    <text x="262" y="95" font-family="DM Sans,sans-serif" font-size="11" fill="#444440" text-anchor="middle">Rack A3-12</text>
                    <text x="340" y="95" font-family="DM Sans,sans-serif" font-size="12" font-weight="700" fill="#111110" text-anchor="middle">148</text>
                    <rect x="390" y="83" width="56" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="418" y="96" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">In stock</text>
                    <line x1="30" y1="113" x2="446" y2="113" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 2 — low stock -->
                    <rect x="14" y="114" width="432" height="40" fill="#fffbea" opacity="0.55"></rect>
                    <text x="30" y="131" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#111110">Chardonnay Classic 2023</text>
                    <text x="30" y="144" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">SKU-4418 · 750ml · Case 12</text>
                    <text x="262" y="136" font-family="DM Sans,sans-serif" font-size="11" fill="#444440" text-anchor="middle">Rack B1-04</text>
                    <text x="340" y="136" font-family="DM Sans,sans-serif" font-size="12" font-weight="700" fill="#ba7517" text-anchor="middle">14</text>
                    <rect x="382" y="124" width="64" height="20" rx="10" fill="#faeeda" stroke="#f0d9b8" stroke-width="1"></rect>
                    <text x="414" y="137" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">⚠ Low</text>
                    <line x1="30" y1="155" x2="446" y2="155" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 3 — healthy -->
                    <text x="30" y="172" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#111110">Rosé Provence 2024</text>
                    <text x="30" y="185" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">SKU-4430 · 750ml · Case 6</text>
                    <text x="262" y="177" font-family="DM Sans,sans-serif" font-size="11" fill="#444440" text-anchor="middle">Rack C2-08</text>
                    <text x="340" y="177" font-family="DM Sans,sans-serif" font-size="12" font-weight="700" fill="#111110" text-anchor="middle">96</text>
                    <rect x="390" y="165" width="56" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="418" y="178" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#017304" text-anchor="middle">In stock</text>
                    <line x1="30" y1="196" x2="446" y2="196" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 4 — out of stock -->
                    <rect x="14" y="197" width="432" height="40" fill="#fef2f2" opacity="0.4"></rect>
                    <text x="30" y="214" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#111110">Sparkling Brut NV</text>
                    <text x="30" y="227" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">SKU-4402 · 750ml · Case 6</text>
                    <text x="262" y="219" font-family="DM Sans,sans-serif" font-size="11" fill="#c4c4be" text-anchor="middle">—</text>
                    <text x="340" y="219" font-family="DM Sans,sans-serif" font-size="12" font-weight="700" fill="#e24b4a" text-anchor="middle">0</text>
                    <rect x="382" y="207" width="64" height="20" rx="10" fill="#fcebeb"></rect>
                    <text x="414" y="220" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#e24b4a" text-anchor="middle">Out of stock</text>
                    <line x1="30" y1="238" x2="446" y2="238" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Summary boxes -->
                    <rect x="30" y="250" width="116" height="50" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="88" y="267" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">Total SKUs</text>
                    <text x="88" y="286" font-family="DM Sans,sans-serif" font-size="17" font-weight="700" fill="#01C608" text-anchor="middle">248</text>

                    <rect x="158" y="250" width="116" height="50" rx="8" fill="#faeeda" stroke="#f0d9b8" stroke-width="1"></rect>
                    <text x="216" y="267" font-family="DM Sans,sans-serif" font-size="10" fill="#ba7517" text-anchor="middle">Low stock alerts</text>
                    <text x="216" y="286" font-family="DM Sans,sans-serif" font-size="17" font-weight="700" fill="#ba7517" text-anchor="middle">7</text>

                    <rect x="286" y="250" width="160" height="50" rx="8" fill="#111110"></rect>
                    <text x="366" y="267" font-family="DM Sans,sans-serif" font-size="10" fill="rgba(255,255,255,0.6)" text-anchor="middle">Stock value on hand</text>
                    <text x="366" y="286" font-family="DM Sans,sans-serif" font-size="17" font-weight="700" fill="#01C608" text-anchor="middle">$184,200</text>

                    <!-- Footer note -->
                    <rect x="30" y="316" width="416" height="36" rx="8" fill="#e8fde9"></rect>
                    <text x="238" y="331" font-family="DM Sans,sans-serif" font-size="10" fill="#017304" text-anchor="middle">✓  Stock levels update in real time as goods are received,</text>
                    <text x="238" y="345" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">picked, packed, and dispatched</text>
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
            'scroll_text' => 'Explore warehouse engine'
        ];
        $complianceModule = [
            'intro' => [
                'badge'   => '— What This Module Does —',
                'title'   => 'One live system for every product, location, and movement in your <span class="text-accent fraunces section-accent fw-normal">warehouse</span>',
                'content' => '<p class="fs-6 mb-4">When stock is managed across spreadsheets, a legacy system, and what your team can remember, you end up with discrepancies that only surface when something goes wrong — a customer order that can\'t be fulfilled, a stocktake that doesn\'t match the system, a pick that takes ten minutes to find because no one knows exactly where the product is.</p>
                            <p class="fs-6 mb-4">Warehouse Management gives you a live, location-aware view of your entire inventory — what\'s in stock, where it is in the warehouse, what\'s reserved for open orders, and what needs to be replenished. Every receipt, pick, pack, and dispatch updates the stock record automatically. No end-of-day reconciliation. No manual counting between orders.</p>
                            <p class="small opacity-75">The whole system connects. Stock levels inform purchasing before you run short. Picking lists are generated directly from sales orders. Dispatch updates trigger customer notifications. And every movement is logged with a timestamp and a user — giving you the traceability you need for audits, recalls, and disputes.</p>'
            ],
            'features' => [
                [
                    'icon'    => 'fa-location-dot', // Maps to 📍 symbol context
                    'title'   => 'Live stock by location, not just total quantity',
                    'content' => 'Know not just how many units you have, but exactly which rack, bin, or zone they\'re in. Faster picking, fewer errors, and no more "I\'ll go check" when a customer asks about availability.'
                ],
                [
                    'icon'    => 'fa-list-check', // Maps to 📋 symbol context
                    'title'   => 'Picking lists generated from sales orders',
                    'content' => 'When an order is confirmed, a picking list is generated automatically — optimised by warehouse location so your team moves efficiently through the warehouse rather than back and forth across it.'
                ],
                [
                    'icon'    => 'fa-bell', // Maps to 🔔 symbol context
                    'title'   => 'Reorder alerts before you run out',
                    'content' => 'Set minimum stock levels per product and get alerts when you\'re approaching them — so purchase orders go out while there\'s still time to receive stock before orders can\'t be fulfilled.'
                ],
                [
                    'icon'    => 'fa-link', // Maps to 🔗 symbol context
                    'title'   => 'Connected to orders, purchasing, and finance',
                    'content' => 'Stock movements flow through the whole system. Sales orders drive picking. Low stock drives purchase orders. Received goods update the stock count and post costs to the right account — automatically.'
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
            'bg_text' => 'WAREHOUSE',
            'header' => [
                'badge_icon'  => 'fa-code-merge',
                'badge_text'  => '— SYSTEM ARCHITECTURE —',
                'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
                'description' => 'Everything you need to run a warehouse with accuracy and confidence — from goods in to goods out, with full traceability at every step.'
            ],
            'features' => [
                [
                    'title' => 'Multi-location stock tracking', 
                    'icon'  => 'fa-location-dot', // Maps to 📍
                    'desc'  => 'Track stock by warehouse, zone, rack, and bin. Know exactly where every product is at any time — and move stock between locations with a full audit trail of every transfer.'
                ],
                [
                    'title' => 'Goods receipt and put-away', 
                    'icon'  => 'fa-box-archive', // Maps to 📥
                    'desc'  => 'Receive purchase orders into the warehouse with a guided put-away process. Stock is counted, checked against the PO, and assigned to a location before it updates your available inventory.'
                ],
                [
                    'title' => 'Optimised picking lists', 
                    'icon'  => 'fa-list-check', // Maps to 📋
                    'desc'  => 'Picking lists are generated from confirmed sales orders and optimised by warehouse location. Your team follows the most efficient route rather than backtracking across the floor.'
                ],
                [
                    'title' => 'Packing and dispatch', 
                    'icon'  => 'fa-box', // Maps to 📦
                    'desc'  => 'Guided packing ensures the right products go into the right shipment. Dispatch records are created automatically when an order leaves — triggering customer notifications and updating stock levels.'
                ],
                [
                    'title' => 'Reorder point alerts', 
                    'icon'  => 'fa-bell', // Maps to 🔔
                    'desc'  => 'Set minimum stock levels per product and receive automatic alerts when stock falls below the threshold — with enough lead time to raise a purchase order before fulfilment is at risk.'
                ],
                [
                    'title' => 'Lot and serial number tracking', 
                    'icon'  => 'fa-arrow-1-9', // Maps to 🔢
                    'desc'  => 'Track individual units or batches by lot number or serial number throughout the warehouse. Essential for food safety, warranty management, and product recall readiness.'
                ],
                [
                    'title' => 'Expiry date management', 
                    'icon'  => 'fa-calendar-days', // Maps to 📅
                    'desc'  => 'For perishable or date-sensitive stock, track expiry dates and apply FEFO (first expired, first out) picking rules automatically — reducing waste and ensuring compliance.'
                ],
                [
                    'title' => 'Stocktake and cycle counting', 
                    'icon'  => 'fa-magnifying-glass', // Maps to 🔍
                    'desc'  => 'Run full stocktakes or targeted cycle counts without stopping operations. Variances are flagged for review before any adjustments are posted — giving you a controlled, auditable count process.'
                ],
                [
                    'title' => 'Stock valuation and reporting', 
                    'icon'  => 'fa-chart-simple', // Maps to 📊
                    'desc'  => 'See the current value of your stock on hand, by product, category, or location. Stock movement reports give you a complete history of every receipt, transfer, pick, and adjustment.'
                ]
            ],
            'cta' => [
                'title'    => "Let's get connected.",
                'subtitle' => "Ready to automate your Warehouse Management workflow? Let's discuss your requirements.",
                'btn_text' => 'Get Started',
                'url'      => route('contact')
            ]
        ];
        $supplierModule = [
            'intro' => [
                'badge_text' => '— PICK, PACK & DISPATCH —',
                'badge_icon' => 'fa-box-open',
                'title'      => 'Order confirmed. Picking list generated. Out the <span class="text-accent fraunces section-accent fw-normal">door.</span>',
                'content'    => 'The gap between an order being placed and a picking list reaching the warehouse floor is where delays and errors start to accumulate. Begin360 closes that gap — when an order is confirmed, the picking list is generated immediately, optimised by warehouse location, and available on the warehouse floor without anyone having to manually create or print it.'
            ],
            'ui' => [
                'table_title' => 'Pick List — Order #SO-2284',
                'stats' => [
                    ['label' => 'In progress', 'color' => 'warning'],
                    ['label' => 'CUSTOMER: Harvest Table Restaurant Group', 'color' => 'secondary'],
                    ['label' => 'DISPATCH BY: Today · 3:00 pm', 'color' => 'secondary'],
                ],
                'rows' => [
                    [
                        'name' => 'Shiraz Reserve 2022', 
                        'subtext' => 'SKU-4421 · Lot: L2204', 
                        'date' => 'A3-12', 
                        'status' => '6', 
                        'status_color' => 'success' // Matches checked symbol context
                    ],
                    [
                        'name' => 'Chardonnay Classic 2023', 
                        'subtext' => 'SKU-4418 · Lot: L2301', 
                        'date' => 'B1-04', 
                        'status' => '12', 
                        'status_color' => 'primary' // Matches in-progress bullet context
                    ],
                    [
                        'name' => 'Rosé Provence 2024', 
                        'subtext' => 'SKU-4430 · Lot: L2401', 
                        'date' => 'C2-08', 
                        'status' => '6', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Sauvignon Blanc 2024', 
                        'subtext' => 'SKU-4435 · Lot: L2403', 
                        'date' => 'A1-02', 
                        'status' => '12', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => 'Print Pick Slip', 
                        'subtext' => 'Action option selection', 
                        'date' => '', 
                        'status' => 'Pick progress', 
                        'status_color' => 'text-body'
                    ],
                    [
                        'name' => '1 of 4 lines complete', 
                        'subtext' => 'Fulfillment status validation', 
                        'date' => '', 
                        'status' => '', 
                        'status_color' => 'accent'
                    ],
                ],
                'alert' => 'Pick progress: 1 of 4 lines complete',
                'primary_btn' => [
                    'text' => 'Confirm & Dispatch →',
                    'url'  => '#'
                ]
            ],
            'footer_features' => [
                'Picking list generated automatically from confirmed sales orders',
                'Picks routed by warehouse location to minimise travel time on the floor',
                'Lot and expiry date rules applied automatically — FEFO for perishables',
                'Dispatch confirmation updates stock levels and triggers customer notification'
            ]
        ];
        $industryHeader = [
            'section_class' => 'bg-body-tertiary',
            'badge'          => '— Sectors We Transform —',
            'heading_start'  => 'Which industries use this',
            'dynamic_word'   => 'module?',
            'description'    => 'Warehouse Management is used wherever physical stock is received, stored, and dispatched — food and beverage producers, retailers, distributors, and manufacturers who need accuracy and traceability across their warehouse operation.',
            'primary_btn'    => [
                'text' => 'View All Industries',
                'url'  => route('industries.index'),
                'icon' => 'fa-layer-group'
            ]
        ];
        $industries = [
            [
                'title' => 'Food & Beverage',
                'icon' => 'fa-wine-glass', // 🍷
                'description' => 'Lot tracking, expiry date management, and FEFO picking rules built in. Manage raw materials, finished goods, and everything in between — with the traceability food businesses are required to maintain.',
                'url' => route('industries.show', 'food-beverage'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Retail',
                'icon' => 'fa-bag-shopping', // 🛍️
                'description' => 'Keep stock accurate across your warehouse and retail locations. Replenish stores from the warehouse with a controlled transfer process, and know what\'s available before a customer asks.',
                'url' => route('industries.show', 'retail'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Trades & Field Services',
                'icon' => 'fa-screwdriver-wrench', // 🔧
                'description' => 'Manage parts, materials, and consumables across your warehouse and service vans. Know what\'s in stock before a tech is dispatched, and replenish automatically when van stock runs low.',
                'url' => route('industries.show', 'trades'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ],
            [
                'title' => 'Construction',
                'icon' => 'fa-helmet-safety', // 🏗️
                'description' => 'Track materials from the yard to the site. Know what\'s on hand, what\'s been allocated to which project, and what needs to be ordered before work stalls waiting on supplies.',
                'url' => route('industries.show', 'construction'),
                'column_class' => 'col-12 col-md-6 col-lg-6',
                'show_cta' => true
            ]
        ];
        $modulesHeader = [
            'section_class' => 'bg-body',
            'badge'          => '— Other Modules —',
            'heading_start'  => 'Explore the',
            'dynamic_word'   => 'full suite',
            'description'    => 'Warehouse Management connects directly to procurement, order management, finance, and your customer record. Here\'s what else is available.',
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