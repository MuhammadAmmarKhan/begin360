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
                ['label' => 'Retail', 'url' => null, 'active' => true],
            ],
            'badge' => 'Sector-Specific Blueprint',
            'heading_start' => 'Stop losing sales to stock you didn\'t know you',
            'dynamic_word' => 'needed',
            'description' => 'Australian retailers are juggling in-store, online, and wholesale from systems that don\'t talk to each other. Begin360 connects everything—so your stock, sales, and customers are always in sync, wherever you sell.',
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
                'target' => 28,
                'suffix' => '%',
                'title' => 'Inventory Efficiency',
                'description' => 'Average reduction in overstock and dead inventory after implementing intelligent replenishment.',
                'is_range' => false
            ],
            [
                'target' => 1,
                'suffix' => ' view',
                'title' => 'Omnichannel Clarity',
                'description' => 'A single real-time picture of stock, orders, and customers across all locations and digital channels.',
                'is_range' => false
            ],
            [
                'target' => 2,
                'target_end' => 4,
                'suffix' => ' mo',
                'title' => 'Rapid Deployment',
                'description' => 'Typical timeframe to get your retail operations fully integrated and running live.',
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
                'icon' => 'fa-boxes-stacked', 
                'title' => 'We\'re losing sales to stock-outs on our best-selling items.', 
                'content' => 'Without real-time inventory velocity data, you’re constantly reacting. You lose revenue on trending products because they aren’t reordered fast enough, while capital stays tied up in slow-moving "dead" stock.'
            ],
            [
                'icon' => 'fa-rotate', 
                'title' => 'Online and in-store stock levels are never actually in sync.', 
                'content' => 'Selling an item in-store that was just purchased online leads to cancelled orders and frustrated customers. Fragmented systems create a manual "reconciliation nightmare" every single morning.'
            ],
            [
                'icon' => 'fa-chart-line-down', 
                'title' => 'I don\'t know my true margin after landed costs and shipping.', 
                'content' => 'Between freight, duties, and packaging, calculating the true profitability of a SKU is often guesswork. You might be discounting or promoting items that are already barely breaking even.'
            ],
            [
                'icon' => 'fa-barcode', 
                'title' => 'Shrinkage and "missing" stock are eating our net profit.', 
                'content' => 'Without a rigid audit trail for every stock movement—from receiving at the dock to customer returns—thefts and administrative errors go unnoticed until the end-of-year stocktake.'
            ],
            [
                'icon' => 'fa-truck-fast', 
                'title' => 'Fulfilment is slow, manual, and prone to expensive errors.', 
                'content' => 'Picking and packing from spreadsheets or legacy systems leads to the wrong items being shipped. Every shipping error costs you double in return freight and damages your brand reputation.'
            ],
            [
                'icon' => 'fa-users-viewfinder', 
                'title' => 'We have customers, but we don’t own their data.', 
                'content' => 'Sales are happening, but project history and customer loyalty are scattered across different platforms. You can\'t see who your high-value repeat buyers are, making your marketing a "spray and pray" effort.'
            ]
        ];

        
        $retailSolutions = [
            [
                'sub' => '01 — One View of Everything',
                'title' => 'See your stock across every channel and location in real time',
                'content' => 'When your in-store POS, online store, and warehouse all feed into the same system, you always know exactly what you have and where it is. No more overselling, no more manual stock counts across spreadsheets.',
                'list' => [
                    'Live inventory synced across all physical stores and online channels',
                    'Automatic stock updates the moment a sale is made anywhere',
                    'Inter-store stock transfers managed in a few clicks',
                    'One accurate number your whole team can trust'
                ],
                'svg' => '<svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" style="padding:24px;"><rect width="480" height="360" fill="#f7faf7"></rect><rect x="20" y="20" width="440" height="320" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect><text x="40" y="52" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Stock Overview — All Channels</text><rect x="368" y="36" width="72" height="24" rx="6" fill="#e8fde9"></rect><text x="404" y="52" font-family="DM Sans,sans-serif" font-size="11" fill="#019906" text-anchor="middle">Live ●</text><line x1="40" y1="64" x2="440" y2="64" stroke="#e8e8e4" stroke-width="1"></line><rect x="40" y="80" width="116" height="72" rx="9" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect><text x="98" y="100" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880" text-anchor="middle">STORE 1</text><text x="98" y="122" font-family="DM Sans,sans-serif" font-size="22" font-weight="700" fill="#111110" text-anchor="middle">84</text><text x="98" y="138" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">units on hand</text><rect x="172" y="80" width="116" height="72" rx="9" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect><text x="230" y="100" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880" text-anchor="middle">STORE 2</text><text x="230" y="122" font-family="DM Sans,sans-serif" font-size="22" font-weight="700" fill="#111110" text-anchor="middle">31</text><text x="230" y="138" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">units on hand</text><rect x="304" y="80" width="116" height="72" rx="9" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect><text x="362" y="100" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#019906" text-anchor="middle">ONLINE</text><text x="362" y="122" font-family="DM Sans,sans-serif" font-size="22" font-weight="700" fill="#01C608" text-anchor="middle">47</text><text x="362" y="138" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">available to sell</text><line x1="98" y1="152" x2="98" y2="178" stroke="#c2f5c3" stroke-width="1.5" stroke-dasharray="3,3"></line><line x1="230" y1="152" x2="230" y2="178" stroke="#c2f5c3" stroke-width="1.5" stroke-dasharray="3,3"></line><line x1="362" y1="152" x2="362" y2="178" stroke="#c2f5c3" stroke-width="1.5" stroke-dasharray="3,3"></line><line x1="98" y1="178" x2="362" y2="178" stroke="#c2f5c3" stroke-width="1.5"></line><line x1="230" y1="178" x2="230" y2="196" stroke="#01C608" stroke-width="2"></line><polygon points="225,196 230,204 235,196" fill="#01C608"></polygon><rect x="140" y="206" width="180" height="52" rx="10" fill="#01C608"></rect><text x="230" y="228" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="rgba(255,255,255,0.8)" text-anchor="middle">TOTAL ACROSS ALL CHANNELS</text><text x="230" y="248" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="white" text-anchor="middle">162 units</text><rect x="40" y="276" width="400" height="40" rx="8" fill="#fffbea" stroke="#faeeda" stroke-width="1"></rect><text x="52" y="292" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#ba7517">Suggestion</text><text x="52" y="308" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Transfer 20 units from Store 1 → Store 2 (Store 2 below reorder point)</text></svg>'
            ],
            [
                'sub' => '02 — Know What\'s Selling',
                'title' => 'Stop reordering on gut feel—let the data decide',
                'content' => 'With clear visibility into what\'s selling, what\'s slowing down, and what\'s sitting unsold, you can make smarter buying decisions. Reorder the right things at the right time and free up cash tied up in dead stock.',
                'list' => [
                    'Sales reports by product, category, location, and channel',
                    'Automatic reorder alerts when stock hits your set minimum',
                    'Slow-mover reports to identify dead stock before it becomes a problem',
                    'Seasonal trend tracking to plan your buying ahead of time'
                ],
                'svg' => '<svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" style="padding:24px;"><rect width="480" height="360" fill="#f7faf7"></rect><rect x="20" y="20" width="440" height="320" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect><text x="40" y="52" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Sales Performance — Last 30 Days</text><line x1="40" y1="64" x2="440" y2="64" stroke="#e8e8e4" stroke-width="1"></line><rect x="40" y="74" width="88" height="26" rx="6" fill="#01C608"></rect><text x="84" y="91" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="white" text-anchor="middle">Top Sellers</text><text x="196" y="91" font-family="DM Sans,sans-serif" font-size="11" fill="#888880" text-anchor="middle">Slow Movers</text><text x="306" y="91" font-family="DM Sans,sans-serif" font-size="11" fill="#888880" text-anchor="middle">Reorder Alerts</text><line x1="40" y1="106" x2="440" y2="106" stroke="#e8e8e4" stroke-width="0.5"></line><text x="40" y="122" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">PRODUCT</text><text x="280" y="122" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">SOLD</text><text x="340" y="122" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">REVENUE</text><text x="408" y="122" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">TREND</text><line x1="40" y1="128" x2="440" y2="128" stroke="#e8e8e4" stroke-width="0.5"></line><text x="40" y="146" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Premium Running Shoe — Blk</text><text x="280" y="146" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">142</text><text x="340" y="146" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$19,880</text><text x="408" y="146" font-family="DM Sans,sans-serif" font-size="12" fill="#01C608">↑ 18%</text><line x1="40" y1="152" x2="440" y2="152" stroke="#e8e8e4" stroke-width="0.5"></line><text x="40" y="170" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Merino Crew Neck — Navy</text><text x="280" y="170" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">98</text><text x="340" y="170" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$8,820</text><text x="408" y="170" font-family="DM Sans,sans-serif" font-size="12" fill="#01C608">↑ 7%</text><line x1="40" y1="176" x2="440" y2="176" stroke="#e8e8e4" stroke-width="0.5"></line><text x="40" y="194" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Canvas Tote — Natural</text><text x="280" y="194" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">76</text><text x="340" y="194" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$3,040</text><text x="408" y="194" font-family="DM Sans,sans-serif" font-size="12" fill="#888880">→ 0%</text><line x1="40" y1="200" x2="440" y2="200" stroke="#e8e8e4" stroke-width="0.5"></line><rect x="40" y="200" width="400" height="28" fill="#fef2f2" opacity="0.5"></rect><text x="40" y="218" font-family="DM Sans,sans-serif" font-size="12" fill="#111110">Linen Shorts — Cream</text><text x="280" y="218" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">12</text><text x="340" y="218" font-family="DM Sans,sans-serif" font-size="12" fill="#444440">$780</text><text x="408" y="218" font-family="DM Sans,sans-serif" font-size="12" fill="#e24b4a">↓ 44%</text><rect x="40" y="244" width="400" height="36" rx="8" fill="#fcebeb" stroke="#f7c1c1" stroke-width="1"></rect><text x="56" y="259" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#a32d2d">⚠  Reorder Alert</text><text x="56" y="272" font-family="DM Sans,sans-serif" font-size="10" fill="#a32d2d">Premium Running Shoe — Blk · 8 units left · PO suggested</text><text x="40" y="306" font-family="DM Sans,sans-serif" font-size="10" font-weight="600" fill="#888880">WEEKLY SALES TREND</text><rect x="40" y="312" width="36" height="20" rx="3" fill="#c2f5c3"></rect><rect x="84" y="308" width="36" height="24" rx="3" fill="#c2f5c3"></rect><rect x="128" y="304" width="36" height="28" rx="3" fill="#01C608"></rect><rect x="172" y="300" width="36" height="32" rx="3" fill="#01C608"></rect><rect x="216" y="295" width="36" height="37" rx="3" fill="#01C608"></rect><text x="258" y="326" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">↑ Trending up this month</text></svg>'
            ],
            [
                'sub' => '03 — Clean Financials',
                'title' => 'Your numbers in one place, all the time',
                'content' => 'When your sales, purchasing, and inventory all flow into the same system, your finances look after themselves. No more end-of-month scrambles, and no more wondering whether the numbers add up.',
                'list' => [
                    'Sales and purchases automatically posted to your accounts',
                    'GST-compliant invoicing and reporting built in',
                    'Profit and loss view by store, channel, or product category',
                    'Integrates with Xero and MYOB so your accountant stays happy'
                ],
                'svg' => '<svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg" style="padding:24px;"><rect width="480" height="360" fill="#f7faf7"></rect><rect x="20" y="20" width="440" height="320" rx="12" fill="white" stroke="#e8e8e4" stroke-width="1"></rect><text x="40" y="52" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110">Financial Summary — May 2026</text><line x1="40" y1="64" x2="440" y2="64" stroke="#e8e8e4" stroke-width="1"></line><rect x="40" y="76" width="120" height="60" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect><text x="100" y="96" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Revenue</text><text x="100" y="118" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#111110" text-anchor="middle">$84.2k</text><text x="100" y="130" font-family="DM Sans,sans-serif" font-size="10" fill="#01C608" text-anchor="middle">↑ 12% vs Apr</text><rect x="176" y="76" width="120" height="60" rx="8" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect><text x="236" y="96" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">Cost of Goods</text><text x="236" y="118" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#111110" text-anchor="middle">$41.6k</text><text x="236" y="130" font-family="DM Sans,sans-serif" font-size="10" fill="#888880" text-anchor="middle">49.4% of revenue</text><rect x="312" y="76" width="128" height="60" rx="8" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect><text x="376" y="96" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">Gross Profit</text><text x="376" y="118" font-family="DM Sans,sans-serif" font-size="20" font-weight="700" fill="#01C608" text-anchor="middle">$42.6k</text><text x="376" y="130" font-family="DM Sans,sans-serif" font-size="10" fill="#019906" text-anchor="middle">50.6% margin</text><text x="40" y="162" font-family="DM Sans,sans-serif" font-size="11" font-weight="600" fill="#444440">Revenue by channel</text><text x="40" y="184" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Store 1</text><rect x="100" y="173" width="192" height="14" rx="4" fill="#01C608"></rect><text x="300" y="184" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">$38.1k  (45%)</text><text x="40" y="208" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Online</text><rect x="100" y="197" width="144" height="14" rx="4" fill="#c2f5c3"></rect><text x="252" y="208" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">$29.4k  (35%)</text><text x="40" y="232" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">Store 2</text><rect x="100" y="221" width="84" height="14" rx="4" fill="#e8e8e4"></rect><text x="192" y="232" font-family="DM Sans,sans-serif" font-size="11" fill="#444440">$16.7k  (20%)</text><rect x="40" y="252" width="400" height="30" rx="7" fill="#f7faf7" stroke="#e8e8e4" stroke-width="1"></rect><text x="56" y="268" font-family="DM Sans,sans-serif" font-size="11" fill="#888880">GST collected</text><text x="56" y="278" font-family="DM Sans,sans-serif" font-size="9" fill="#888880">Automatically tracked and BAS-ready</text><text x="380" y="271" font-family="DM Sans,sans-serif" font-size="13" font-weight="600" fill="#111110" text-anchor="middle">$7,654</text><rect x="40" y="296" width="400" height="28" rx="7" fill="#e8fde9" stroke="#c2f5c3" stroke-width="1"></rect><text x="240" y="314" font-family="DM Sans,sans-serif" font-size="11" fill="#017304" text-anchor="middle">✓  Synced with Xero · Last updated 2 minutes ago</text></svg>'
            ],
        ];

        $processData = [
            'subheading' => 'The Begin360 Process',
            'heading' => 'How we get you <br/>up and <i class="section-accent fraunces text-accent fw-light">running</i>',
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
            'description' => 'We work across the leading platforms used by Australian retail businesses — from full ERP systems to purpose-built POS and inventory tools. Our job is to recommend the platform that fits your store count, channel complexity, and growth plans.',
            'cta_text' => "Not sure? Let's talk",
            'cta_link' => '#contact-form'
        ];
        
        $testimonialData = [
            'subheading' => 'From Our Clients',
            'heading' => 'What <i class="section-accent fraunces text-accent fw-light">Retail Businesses</i> <br/>Say',
            'description' => "Stories from Australian retailers, wholesalers, and e-commerce brands who've made the switch.",
            'testimonials' => [
                [
                    'quote' => 'We used to spend hours every Monday manually updating stock levels from our Shopify store to our physical locations. Now it happens in real-time. We’ve eliminated overselling entirely and our team actually trusts the numbers they see on the screen.',
                    'author' => 'Owner',
                    'company' => 'Multi-Store Fashion Boutique, Sydney',
                    'is_featured' => true,
                    'icon' => 'fa-sync-alt'
                ],
                [
                    'quote' => 'Begin360 showed us that 15% of our inventory was "dead stock" sitting in the back of our warehouse. By identifying these slow-movers early and running targeted promos, we cleared $45,000 in cash flow that was just gathering dust.',
                    'author' => 'Operations Manager',
                    'company' => 'Homewares & Furniture Retailer, Melbourne',
                    'is_featured' => false,
                    'icon' => null
                ],
                [
                    'quote' => "The land cost tracking is a game changer. We finally know our true margin on imported goods after factoring in freight and duties. It turns out one of our 'best sellers' was actually losing us money. We've fixed our pricing and profits are up 12%.",
                    'author' => 'Finance Director',
                    'company' => 'Outdoor Gear Wholesaler, Brisbane',
                    'is_featured' => false,
                    'icon' => null
                ],
                [
                    'quote' => 'Moving to Begin360 didn’t just give us a POS; it gave us a unified commerce engine. Our in-store experience and online backend finally speak the same language.',
                    'author' => 'Founder',
                    'company' => 'National Lifestyle Brand',
                    'is_featured' => true,
                    'icon' => 'fa-store'
                ]
            ]
        ];
        
        $faqs = [
            [
                'question' => 'We sell in-store and online. Can one system handle both simultaneously?',
                'answer' => 'Yes. We specialize in "unified commerce" setups. The system acts as the single source of truth for your inventory, so when an item sells in-store, your Shopify or WooCommerce stock levels update instantly, and vice-versa. No more overselling or manual syncing.'
            ],
            [
                'question' => 'How does the system handle "Land Costing" for imported goods?',
                'answer' => 'This is a core part of our configuration. We set up workflows that allow you to attribute freight, duties, and insurance to your stock shipments. This gives you a true Cost of Goods Sold (COGS) and accurate gross margin reporting at the product level.'
            ],
            [
                'question' => 'We’re already using Xero or MYOB. Do we need to replace it?',
                'answer' => 'No. We typically integrate with your existing accounting software rather than replacing it. Your daily sales totals, supplier invoices, and inventory valuations flow into Xero/MYOB automatically, so your accountant stays happy in the environment they already know.'
            ],
            [
                'question' => 'Can we manage multiple warehouse locations and inter-store transfers?',
                'answer' => 'Absolutely. We configure the system to track stock across as many locations as you need. You can see what’s on hand at each store, manage transfers with a digital paper trail, and even fulfill online orders from the location closest to the customer.'
            ],
            [
                'question' => 'How long does implementation take for a retail business?',
                'answer' => 'Generally 2 to 4 months. This timeline accounts for the "clean up" of your existing product data, configuring your POS and e-commerce integrations, and training your staff. We aim for a transition that doesn’t disrupt your peak trading periods.'
            ],
            [
                'question' => 'What does it cost?',
                'answer' => 'It depends on your store count, SKU volume, and the specific platform we recommend (like Odoo or others). We provide a fixed-scope quote upfront so you know exactly what the investment is before we start—no surprise hourly bills.'
            ],
            [
                'question' => 'Do you provide training for our shop floor and warehouse teams?',
                'answer' => 'Yes. We provide hands-on training tailored to different roles—from staff using the POS at the counter to warehouse teams managing pick-and-pack workflows—ensuring everyone is confident on day one.'
            ]
        ];
        
    @endphp
    <x-about-hero :heroData="$heroData"/>    
    <x-stats :statsData="$statsData"/>
    <x-industry-pain-points 
        subheading="Sound Familiar?"
        heading="The <i class='section-accent fraunces text-accent fw-light'>frustrations</i> most growing retail brands share"
        description="Whether you're a multi-store boutique, a growing e-commerce brand, or a national wholesaler—these are the operational bottlenecks we hear most from retail founders and operations managers across Australia."
        :points="$painPoints"
    />
    <x-industry-solutions 
        heading="And how <i class='fraunces section-accent text-accent fw-light'>Begin360</i> fix it!" 
        description="We implement an ERP built around how your retail business actually works. Here are the three things that make the biggest difference."
        :points="$retailSolutions"
    />
    <x-process-flow :processData="$processData" />
    <x-platform-selection :ecosystemContent="$ecosystemContent"/>
    <x-testimonials :testimonialData="$testimonialData"/>
    <x-customFaqs :faqs="$faqs"/>
@endsection
@push('scripts')
    
@endpush