@extends('layouts.app')
@section('title', 'Procurement Architecture & Supply Chain Control | Begin360')
@section('meta_title', 'Strategic Procurement & Automated Vendor Management | Begin360')
@section('meta_description', 'Secure your margins. Automate purchase orders, vendor price-lists, and supply chain workflows with Begin360’s high-fidelity procurement architecture designed for operational efficiency.')
@section('meta_keywords', 'Procurement Software Australia, Automated Purchase Orders, Vendor Management System, Supply Chain Automation, Reorder Point Logic, Strategic Sourcing Software, Odoo Purchasing Customization, Supplier Performance Tracking, Inventory Replenishment')
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
                ['label' => 'Procurement', 'url' => null, 'active' => true],
            ],
            'badge' => '— Module —',
            'heading_start' => 'Buy what you need. Know what it ',
            'dynamic_word' => 'costs.',
            'description' => "For most businesses, purchasing is reactive — you run out of something, someone raises a purchase order, and it gets emailed around until someone approves it. There's no central record of what's been ordered, what's arrived, what's still outstanding, and what it's all costing. This module gives you a clear, connected purchasing process — from the moment a reorder is triggered to the moment the supplier invoice is paid.",
            'hero_image' => '<svg viewBox="0 0 460 345" xmlns="http://www.w3.org/2000/svg" style="padding:20px;">
                    <rect width="460" height="345" fill="#f7faf7"></rect>
                    <rect x="16" y="16" width="428" height="313" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect>

                    <!-- Header -->
                    <text x="36" y="46" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Purchase Orders — Active</text>
                    <rect x="348" y="30" width="96" height="24" rx="6" fill="#e8fde9"></rect>
                    <text x="396" y="46" font-family="DM Sans,sans-serif" font-size="11" fill="#019906" text-anchor="middle">12 open</text>
                    <line x1="36" y1="58" x2="428" y2="58" stroke="#e8e8e4" stroke-width="1"></line>

                    <!-- Status pills -->
                    <rect x="36" y="66" width="86" height="22" rx="11" fill="#f4f4f2"></rect>
                    <text x="79" y="81" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880" text-anchor="middle">Draft  3</text>
                    <rect x="132" y="66" width="96" height="22" rx="11" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                    <text x="180" y="81" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">Sent to supplier  6</text>
                    <rect x="238" y="66" width="100" height="22" rx="11" fill="#e8fde9"></rect>
                    <text x="288" y="81" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">Part received  2</text>
                    <rect x="348" y="66" width="80" height="22" rx="11" fill="#fcebeb" stroke="#f7c1c1" stroke-width="1"></rect>
                    <text x="388" y="81" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#e24b4a" text-anchor="middle">Overdue  1</text>

                    <!-- PO table -->
                    <line x1="36" y1="96" x2="428" y2="96" stroke="#e8e8e4" stroke-width="0.5"></line>
                    <text x="36" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">PO</text>
                    <text x="120" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">SUPPLIER</text>
                    <text x="248" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">VALUE</text>
                    <text x="308" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">EXP. DELIVERY</text>
                    <text x="400" y="112" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">STATUS</text>
                    <line x1="36" y1="118" x2="428" y2="118" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- PO 1 -->
                    <text x="36" y="136" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">PO-0412</text>
                    <text x="36" y="149" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">8 line items</text>
                    <text x="120" y="141" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">GreenMill Co</text>
                    <text x="248" y="141" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">$3,840</text>
                    <text x="308" y="141" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">14 May</text>
                    <rect x="390" y="129" width="52" height="20" rx="10" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                    <text x="416" y="143" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">Sent</text>
                    <line x1="36" y1="158" x2="428" y2="158" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- PO 2 -->
                    <text x="36" y="176" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">PO-0411</text>
                    <text x="36" y="189" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">3 line items</text>
                    <text x="120" y="181" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Valley Eggs Pty</text>
                    <text x="248" y="181" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">$480</text>
                    <text x="308" y="181" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">10 May</text>
                    <rect x="378" y="169" width="66" height="20" rx="10" fill="#e8fde9"></rect>
                    <text x="411" y="183" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">Part recv.</text>
                    <line x1="36" y1="198" x2="428" y2="198" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- PO 3 — overdue -->
                    <rect x="36" y="198" width="392" height="30" fill="#fef2f2" opacity="0.4"></rect>
                    <text x="36" y="216" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">PO-0408</text>
                    <text x="36" y="229" font-family="DM Sans,sans-serif" font-size="10" fill="#e24b4a">Expected 30 Apr</text>
                    <text x="120" y="221" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Coastal Dairy Co</text>
                    <text x="248" y="221" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">$920</text>
                    <text x="308" y="221" font-family="DM Sans,sans-serif" font-size="11" fill="#e24b4a">8 days late</text>
                    <rect x="384" y="209" width="60" height="20" rx="10" fill="#fcebeb"></rect>
                    <text x="414" y="223" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#e24b4a" text-anchor="middle">⚠ Overdue</text>
                    <line x1="36" y1="236" x2="428" y2="236" stroke="#e8e8e4" stroke-width="0.5"></line>

                    <!-- PO 4 -->
                    <text x="36" y="254" font-family="DM Sans,sans-serif" font-size="12" font-weight="500" fill="#111110">PO-0410</text>
                    <text x="36" y="267" font-family="DM Sans,sans-serif" font-size="10" fill="#888880">5 line items</text>
                    <text x="120" y="259" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">Pure Vanilla Co</text>
                    <text x="248" y="259" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">$1,200</text>
                    <text x="308" y="259" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">20 May</text>
                    <rect x="390" y="247" width="52" height="20" rx="10" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect>
                    <text x="416" y="261" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#ba7517" text-anchor="middle">Sent</text>

                    <!-- Alert -->
                    <rect x="36" y="286" width="392" height="26" rx="8" fill="#fcebeb" stroke="#f7c1c1" stroke-width="1"></rect>
                    <text x="232" y="303" font-family="DM Sans,sans-serif" font-size="11" fill="#a32d2d" text-anchor="middle">⚠  PO-0408 — Coastal Dairy Co delivery 8 days overdue. Follow up required.</text>
                </svg>', // Placeholder for your procurement-themed glassware asset
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
            'scroll_text' => 'Explore procurement architecture'
        ];
        $complianceModule = [
    'intro' => [
        'badge'   => '— Procurement Architecture —',
        'title'   => 'A clear purchasing process, from reorder to receipt to <span class="text-accent fraunces section-accent fw-normal">payment</span>',
        'content' => '<p class="lead mb-4">Most businesses don\'t have a purchasing process — they have a purchasing habit. Someone notices something is low, sends an email to a supplier, and waits. There\'s no approval trail, no record of what\'s outstanding, no three-way match when the invoice arrives, and no way to see what the business is actually spending on stock or supplies.</p>
                      <p class="small opacity-75">This module creates a proper purchasing workflow. Purchase orders are raised from reorder alerts, approved in the system, sent to suppliers, and matched to deliveries when goods arrive. When the supplier invoice comes in, it\'s matched against the purchase order and delivery automatically — so you only pay for what you actually received, at the price you agreed. Because procurement connects directly to your inventory and accounts, there\'s no double-entry. Stock goes up when goods arrive. The supplier bill appears in your accounts. Everything links together.</p>'
    ],
    'features' => [
        [
            'icon'    => 'fa-file-invoice',
            'title'   => 'Purchase orders with a proper approval trail',
            'content' => 'Every purchase order is raised in the system, reviewed, and approved before it goes to a supplier. No more orders going out without anyone knowing about them.'
        ],
        [
            'icon'    => 'fa-boxes-stacked',
            'title'   => 'Stock updates automatically when goods arrive',
            'content' => 'Receive goods against a purchase order and your inventory updates immediately. Discrepancies between what was ordered and what arrived are flagged right at goods receipt.'
        ],
        [
            'icon'    => 'fa-file-shield',
            'title'   => 'Three-way matching before you pay',
            'content' => 'The supplier invoice is matched against the purchase order and the delivery receipt automatically. If something doesn\'t line up, you know before you pay — not after.'
        ],
        [
            'icon'    => 'fa-chart-line',
            'title'   => 'See what you\'re actually spending with each supplier',
            'content' => 'Full purchase history, pricing trends, and payment records per supplier — so you can negotiate better terms, consolidate orders, and see where your purchasing budget is going.'
        ]
    ],
    'cta' => [
        'title'    => "Ready to secure your procurement margins?",
        'subtitle' => "Let's discuss how we can structure your purchasing workflow and automate your vendor management.",
        'btn_text' => 'Book a Demo',
        'url'      => route('contact')
    ]
];
        $architectureData = [
    'bg_text' => 'PROCURE',
    'header' => [
        'badge_icon'  => 'fa-cart-flatbed',
        'badge_text'  => '— SYSTEM ARCHITECTURE —',
        'title'       => 'What\'s <span class="text-accent fraunces section-accent fw-normal">included</span> ?',
        'description' => 'Everything you need to buy the right things, from the right suppliers, at the right price — and make sure it all connects to your inventory and accounts without double-entry.'
    ],
    'features' => [
        [
            'title' => 'Purchase order creation', 
            'icon'  => 'fa-file-invoice', 
            'desc'  => 'Raise purchase orders manually or automatically from low-stock alerts. Each PO has line items, quantities, agreed prices, and a delivery date — all in one document.'
        ],
        [
            'title' => 'Approval workflows', 
            'icon'  => 'fa-user-check', 
            'desc'  => 'Set spending limits and approval rules so purchase orders above a certain value need a manager to sign off before they go to a supplier. Full audit trail of who approved what and when.'
        ],
        [
            'title' => 'Send directly to suppliers', 
            'icon'  => 'fa-paper-plane', 
            'desc'  => 'Email purchase orders directly from the system. No printing, no PDFs in email drafts, no wondering whether the supplier actually got it — the send is tracked and timestamped.'
        ],
        [
            'title' => 'Goods receipt against PO', 
            'icon'  => 'fa-box-open', 
            'desc'  => 'When stock arrives, receive it against the open purchase order. Quantities are checked against what was ordered. Discrepancies are flagged immediately so you can follow up with the supplier.'
        ],
        [
            'title' => 'Three-way matching', 
            'icon'  => 'fa-file-shield', 
            'desc'  => 'When the supplier invoice arrives, the system matches it against the purchase order and the goods receipt automatically. Only pay for what was ordered and what arrived — at the price agreed.'
        ],
        [
            'title' => 'Reorder alerts & suggested POs', 
            'icon'  => 'fa-bell', 
            'desc'  => 'When a product drops below its reorder point, the system suggests a purchase order pre-filled with the supplier, quantity, and agreed price. Approve it in one click.'
        ],
        [
            'title' => 'Supplier management', 
            'icon'  => 'fa-building-user', 
            'desc'  => 'Maintain a register of suppliers with contact details, payment terms, lead times, and pricing agreements. Certificates, insurance documents, and audit records stored against each supplier.'
        ],
        [
            'title' => 'Spend reporting by supplier', 
            'icon'  => 'fa-chart-area', 
            'desc'  => 'See total spend per supplier, average order value, payment history, and price trends over time. Use the data to consolidate suppliers, renegotiate terms, or identify where costs are creeping up.'
        ],
        [
            'title' => 'Linked to projects & job costs', 
            'icon'  => 'fa-diagram-project', 
            'desc'  => 'For construction and trades businesses, purchase orders can be linked to specific projects or jobs. Costs flow directly into your project cost tracker without re-entering anything.'
        ]
    ],
    'cta' => [
        'title'    => "Let's get connected.",
        'subtitle' => "Ready to automate your procurement intelligence? Let's discuss your specific purchasing workflow.",
        'btn_text' => 'Get Started',
        'url'      => route('contact')
    ]
];
        
        $supplierModule = [
    'intro' => [
        'badge_text' => '— VENDOR ARCHITECTURE —',
        'badge_icon' => 'fa-building-shield',
        'title'      => 'Know your suppliers as well as you <span class="text-accent fraunces section-accent fw-normal">know your customers</span>',
        'content'    => 'Your suppliers are as important to your operation as your customers — but most businesses manage them far less systematically. Lead times, payment terms, pricing agreements, and certificate expiry dates are scattered across emails and spreadsheets. This module gives every supplier their own record, with everything you need to manage that relationship properly and hold them accountable when something goes wrong.'
    ],
    'ui' => [
        'table_title' => 'Supplier Record — GreenMill Co',
        'stats' => [
            ['label' => 'YTD spend: $42,800', 'color' => 'body'],
            ['label' => 'Approved ✓', 'color' => 'success'],
        ],
        'rows' => [
            [
                'name' => 'Food Safety Certificate', 
                'subtext' => 'Compliance document status', 
                'date' => 'Expires Dec 2026', 
                'status' => 'OK', 
                'status_color' => 'success'
            ],
            [
                'name' => 'Public Liability Insurance', 
                'subtext' => 'Mandatory vendor coverage', 
                'date' => 'Expires Mar 2027', 
                'status' => 'OK', 
                'status_color' => 'success'
            ],
            [
                'name' => 'Organic Certification', 
                'subtext' => 'Critical renewal required', 
                'date' => 'Expires 30 Jun 2026', 
                'status' => 'Expiring', 
                'status_color' => 'warning'
            ],
        ],
        'alert' => 'Renewal reminder: Organic Certification expires in 53 days. Request renewal from GreenMill Co now.'
    ],
    'footer_features' => [
        'Contact details, payment terms, and lead times all in one place',
        'Full order history and spend summary per supplier',
        'Certificates and compliance documents stored and tracked for expiry',
        'On-time delivery performance tracked automatically across all orders'
    ]
];

        $modulesHeader = [
            'section_class' => 'bg-body',
            'badge'          => '— Other Modules —',
            'heading_start'  => 'Explore the',
            'dynamic_word'   => 'full suite',
            'description'    => 'Procurement connects your purchasing to inventory, finance, projects, and jobs. Here\'s what else is available.',
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
            'description'    => 'Procurement is used across all five industries Begin360 works with. Every business that buys stock, materials, or services from external suppliers benefits from a proper purchasing process.',
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