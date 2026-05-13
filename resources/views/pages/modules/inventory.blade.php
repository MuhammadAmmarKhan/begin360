@extends('layouts.app')
@section('title', 'Inventory Architecture & Real-Time Stock Control | Begin360')
@section('meta_title', 'Advanced Inventory Management & Omnichannel Stock Sync | Begin360')
@section('meta_description', 'Master your supply chain. Eliminate stockouts and optimize capital with Begin360’s high-fidelity inventory architecture featuring multi-location tracking and automated reordering.')
@section('meta_keywords', 'Inventory Management Software Australia, Real-time Stock Tracking, Multi-warehouse Management, Omnichannel Inventory Sync, Automated Reorder Points, SKU Variant Tracking, Dead Stock Reporting, Odoo Inventory Customization')
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
                ['label' => 'Inventory & Stock', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Always know what you have. Before it becomes a ',
            'dynamic_word' => 'problem.',
            'description' => "Stockouts lose you sales. Overstock ties up cash. And when your inventory is spread across multiple locations or channels, knowing what you actually have on hand at any given moment becomes a daily guessing game. This module gives you a single, accurate, real-time view of your stock — and tells you what to do before things go wrong.",
            'hero_image' => '<svg viewBox="0 0 460 345" xmlns="http://www.w3.org/2000/svg" style="padding:20px;">
                    <rect width="460" height="345" fill="#f7faf7"></rect>
                    <rect x="16" y="16" width="428" height="313" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="36" y="46" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Inventory Overview — All Locations</text>
                    <rect x="352" y="30" width="92" height="24" rx="6" fill="#e8fde9"></rect>
                    <text x="398" y="46" font-family="DM Sans,sans-serif" font-size="11" fill="#019906" text-anchor="middle">Live ●</text>
                    <line x1="36" y1="58" x2="428" y2="58" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- KPI row -->
                    <rect x="36" y="68" width="90" height="52" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect>
                    <text x="81" y="86" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Total SKUs</text>
                    <text x="81" y="108" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#111110" text-anchor="middle">284</text>

                    <rect x="140" y="68" width="90" height="52" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect>
                    <text x="185" y="86" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">In stock</text>
                    <text x="185" y="108" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#01C608" text-anchor="middle">261</text>

                    <rect x="244" y="68" width="90" height="52" rx="8" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                    <text x="289" y="86" font-family="DM Sans,sans-serif" font-size="10" fill="#ba7517" text-anchor="middle">Low stock</text>
                    <text x="289" y="108" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#ba7517" text-anchor="middle">18</text>

                    <rect x="348" y="68" width="96" height="52" rx="8" fill="#fcebeb" stroke="#f7c1c1" stroke-width="1"></rect>
                    <text x="396" y="86" font-family="DM Sans,sans-serif" font-size="10" fill="#e24b4a" text-anchor="middle">Out of stock</text>
                    <text x="396" y="108" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#e24b4a" text-anchor="middle">5</text>

                    <!-- Stock table -->
                    <text x="36" y="142" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">PRODUCT</text>
                    <text x="228" y="142" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">ON HAND</text>
                    <text x="294" y="142" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">REORDER PT</text>
                    <text x="378" y="142" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">STATUS</text>
                    <line x1="36" y1="148" x2="428" y2="148" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 1 — good -->
                    <text x="36" y="165" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Running Shoe — Black / Size 10</text>
                    <text x="228" y="165" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">84</text>
                    <text x="294" y="165" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">20</text>
                    <rect x="375" y="153" width="46" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="398" y="166" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">OK</text>
                    <line x1="36" y1="174" x2="428" y2="174" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 2 — low -->
                    <rect x="36" y="174" width="392" height="26" fill="#fffbea" opacity="0.5"></rect>
                    <text x="36" y="191" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Merino Crew Neck — Navy / M</text>
                    <text x="228" y="191" font-family="DM Sans,sans-serif" font-size="12" fill="#ba7517">14</text>
                    <text x="294" y="191" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">20</text>
                    <rect x="363" y="179" width="66" height="18" rx="9" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                    <text x="396" y="192" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">Low stock</text>
                    <line x1="36" y1="200" x2="428" y2="200" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 3 — out -->
                    <rect x="36" y="200" width="392" height="26" fill="#fef2f2" opacity="0.4"></rect>
                    <text x="36" y="217" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Canvas Tote — Natural</text>
                    <text x="228" y="217" font-family="DM Sans,sans-serif" font-size="12" fill="#e24b4a">0</text>
                    <text x="294" y="217" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">15</text>
                    <rect x="366" y="205" width="60" height="18" rx="9" fill="#fcebeb"></rect>
                    <text x="396" y="218" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#e24b4a" text-anchor="middle">Out of stock</text>
                    <line x1="36" y1="226" x2="428" y2="226" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- Row 4 — good -->
                    <text x="36" y="243" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">Linen Shorts — Cream / S</text>
                    <text x="228" y="243" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">47</text>
                    <text x="294" y="243" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">10</text>
                    <rect x="375" y="231" width="46" height="18" rx="9" fill="#e8fde9"></rect>
                    <text x="398" y="244" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">OK</text>

                    <!-- Reorder suggestion -->
                    <rect x="36" y="264" width="392" height="32" rx="8" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                    <text x="52" y="279" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#ba7517">⚠  2 items need reordering</text>
                    <text x="52" y="290" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">Purchase order suggested: Merino Crew Neck (qty 40) · Canvas Tote (qty 30)</text>

                    <!-- Footer -->
                    <rect x="36" y="306" width="392" height="16" rx="5" fill="#e8fde9"></rect>
                    <text x="232" y="318" font-family="DM Sans,sans-serif" font-size="10" fill="#017304" text-anchor="middle">✓  Stock levels synced across Store 1, Store 2 and Online · Updated in real time</text>
                </svg>', // Placeholder for your inventory-themed glassware asset
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
            'scroll_text' => 'Explore inventory architecture'
        ];
        $complianceModule = [
            'intro' => [
                'badge'   => '— Inventory & Stock Architecture —',
                'title'   => 'One accurate view of your stock — across every <span class="text-accent fraunces section-accent fw-normal">location</span>',
                'content' => '<p class="lead mb-4">When inventory is managed across disconnected systems, the numbers are never right. This module provides a single, real-time view of your stock—updated automatically whenever items are bought, sold, or transferred.</p>
                            <p class="small opacity-75">Respond to reality, don’t play catch-up. Receive low-stock alerts and automated reorder suggestions before stockouts impact your sales.</p>'
            ],
            'features' => [
                [
                    'icon'    => 'fa-eye',
                    'title'   => 'Real-Time Stock Counts',
                    'content' => 'Every sale, purchase, and adjustment updates your inventory instantly. The number in your system reflects what is actually on the shelf, not yesterday’s manual count.'
                ],
                [
                    'icon'    => 'fa-bell',
                    'title'   => 'Proactive Low-Stock Alerts',
                    'content' => 'Set thresholds for every product. When levels drop, get an automated alert and a purchase order suggestion so you restock before your customers notice.'
                ],
                [
                    'icon'    => 'fa-map-location-dot',
                    'title'   => 'Multi-Location Visibility',
                    'content' => 'See stock levels across all warehouses and stores in a single view. Manage inter-location transfers in clicks and track items currently in transit.'
                ],
                [
                    'icon'    => 'fa-rotate',
                    'title'   => 'Omnichannel Sync',
                    'content' => 'When stock is sold in-store, online, or via wholesale, levels update across every channel immediately. No overselling and no manual reconciliation required.'
                ]
            ],
            'cta' => [
                'title'    => "Ready for total inventory clarity?",
                'subtitle' => "Let's discuss how we can bridge your sales channels and automate your stock management logic.",
                'btn_text' => 'Book a Demo',
                'url'      => route('contact')
            ]
        ];
        $architectureData = [
            'bg_text' => 'INVENTORY',
            'header' => [
                'badge_icon'  => 'fa-boxes-stacked',
                'badge_text'  => '— SYSTEM ARCHITECTURE —',
                'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
                'description' => 'Everything you need to keep your stock accurate, avoid running out, and stop tying up cash in assets that aren\'t moving.'
            ],
            'features' => [
                [
                    'title' => 'Real-Time Stock Levels', 
                    'icon'  => 'fa-layer-group', 
                    'desc'  => 'Quantities update instantly as items are received, sold, or transferred. Your view is always current—not a snapshot from a previous stocktake.'
                ],
                [
                    'title' => 'Low Stock & Reorder Logic', 
                    'icon'  => 'fa-bell-on', 
                    'desc'  => 'Set minimum thresholds for every product. Get automated alerts and purchase order suggestions before stockouts impact your sales.'
                ],
                [
                    'title' => 'Multi-Location Tracking', 
                    'icon'  => 'fa-warehouse', 
                    'desc'  => 'Track stock across multiple warehouses or sites in one view. Execute inter-location transfers with a complete digital audit trail.'
                ],
                [
                    'title' => 'Complex Product Variants', 
                    'icon'  => 'fa-tags', 
                    'desc'  => 'Manage products with multiple sizes, colours, or weights under a single record—each with its own stock level, barcode, and pricing.'
                ],
                [
                    'title' => 'Lot & Serial Tracking', 
                    'icon'  => 'fa-barcode-read', 
                    'desc'  => 'Trace individual units or batches throughout the supply chain. Essential for compliance, warranty, and high-fidelity quality control.'
                ],
                [
                    'title' => 'Expiry Date Management', 
                    'icon'  => 'fa-calendar-exclamation', 
                    'desc'  => 'Track expiry dates on perishables. Enforce first-expired, first-out (FEFO) picking logic to minimize waste and maximize margin.'
                ],
                [
                    'title' => 'Real-Time Channel Sync', 
                    'icon'  => 'fa-rotate', 
                    'desc'  => 'Levels update across POS, online stores, and wholesale channels automatically. Prevent overselling without manual reconciliation.'
                ],
                [
                    'title' => 'Goods Receipting', 
                    'icon'  => 'fa-truck-ramp-box', 
                    'desc'  => 'Record incoming stock against purchase orders and flag discrepancies instantly. Maintain high-fidelity records of supplier performance.'
                ],
                [
                    'title' => 'Valuation & Performance', 
                    'icon'  => 'fa-magnifying-glass-chart', 
                    'desc'  => 'Monitor total stock value and turnover rates. Identify slow-moving items and optimize your capital allocation across categories.'
                ]
            ],
            'cta' => [
                'title'    => "Let's get connected.",
                'subtitle' => "Ready to automate your inventory intelligence? Let's discuss your specific supply chain requirements.",
                'btn_text' => 'Get Started',
                'url'      => route('contact')
            ]
        ];
        
        $supplierModule = [
            'intro' => [
                'badge_text' => '— INVENTORY OPTIMIZATION —',
                'badge_icon' => 'fa-hourglass-end',
                'title'      => 'Find the stock that\'s quietly costing you <span class="text-accent fraunces section-accent fw-normal">money</span>',
                'content'    => 'Cash sitting on shelves is capital that isn’t working. This report illuminates slow-moving inventory and dead stock that is often invisible in day-to-day operations, giving you the data to clear shelves and recover liquidity.'
            ],
            'ui' => [
                'table_title' => 'Slow Mover Report — Last 90 Days',
                'stats' => [
                    ['label' => 'Total Tied Up: $59,800', 'color' => 'body'],
                    ['label' => 'Items Flagged: 34 SKUs', 'color' => 'warning'],
                ],
                'rows' => [
                    [
                        'name' => 'Linen Blazer — Taupe / XS', 
                        'subtext' => 'High-value dead stock', 
                        'date' => 'Last Sold: 112d ago', 
                        'status' => '$4,080 Held', 
                        'status_color' => 'danger'
                    ],
                    [
                        'name' => 'Wool Scarf — Mustard', 
                        'subtext' => 'Seasonal slow mover', 
                        'date' => 'Last Sold: 98d ago', 
                        'status' => '$2,170 Held', 
                        'status_color' => 'danger'
                    ],
                    [
                        'name' => 'Canvas Backpack — Olive', 
                        'subtext' => 'Declining sell-through', 
                        'date' => 'Last Sold: 54d ago', 
                        'status' => '$3,420 Held', 
                        'status_color' => 'warning'
                    ],
                    [
                        'name' => 'Linen Shorts — Cream / XL', 
                        'subtext' => 'Slow-moving variant', 
                        'date' => 'Last Sold: 47d ago', 
                        'status' => '$1,980 Held', 
                        'status_color' => 'warning'
                    ],
                ],
                'alert' => '⚠ Strategy: $59,800 tied up in slow or unsold stock. Consider clearance pricing for items with zero movement in 90+ days.'
            ],
            'footer_features' => [
                'Automated reporting on every product SKU that hasn’t moved in 30, 60, or 90-day windows',
                'Real-time valuation of capital tied up in unsold inventory across all locations',
                'Comparative sell-through rate analysis across categories, variants, and channels',
                'Data-driven insights to inform clearance promotions or adjust future procurement strategy'
            ]
        ];

        $modulesHeader = [
            'section_class' => 'bg-body',
            'badge'          => '— Other Modules —',
            'heading_start'  => 'Explore the',
            'dynamic_word'   => 'full suite',
            'description'    => 'Inventory Management works best when connected to procurement, orders, and your warehouse operations. Here\'s what else is available.',
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
            'description'    => 'Finance & Accounting is used across every industry Begin360 works with. Every business needs to invoice, track expenses, and understand its financial performance — regardless of what it does.',
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
                'description' => 'Rigid batch-track procurement and perishable inventory logic engineered for global supply chain resilience and safety compliance.',
                'url' => route('industries.show', 'food-beverage'),
                'column_class' => 'col-12 col-lg-4', // Primary Featured Tile
                'show_cta' => true,
                'cta_text' => 'Explore Blueprint'
            ],
            [
                'title' => 'Retail',
                'icon' => 'fa-basket-shopping',
                'description' => 'Scalable omnichannel ecosystems designed to synchronize high-volume retail flows and sovereign inventory control.',
                'url' => route('industries.show', 'retail'),
                'column_class' => 'col-12 col-md-6 col-lg-4',
                'show_cta' => true
            ],
            [
                'title' => 'Trades',
                'icon' => 'fa-screwdriver-wrench',
                'description' => 'Mobile-first field service automation and real-time resource allocation for agile, high-performance maintenance fleets.',
                'url' => route('industries.show', 'trades'),
                'column_class' => 'col-12 col-md-6 col-lg-4',
                'show_cta' => true
            ]
        ];

        
    @endphp
    <x-about-hero :heroData="$heroData"/>
    <x-traceability :data="$complianceModule" class="py-5" />   
@php
    
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