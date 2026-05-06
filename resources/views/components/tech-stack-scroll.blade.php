@props([
    'title' => 'Engineered Precision Stack',
    'subtitle' => 'The Infrastructure',
    'items' => [
        ['name' => 'Celigo', 'icon' => 'fa-link', 'desc' => 'NetSuite iPaaS'],
        ['name' => 'Zapier Ent.', 'icon' => 'fa-bolt', 'desc' => 'Odoo Automations'],
        ['name' => 'Power Automate', 'icon' => 'fa-gears', 'desc' => 'Dynamics AX Logic'],
        ['name' => 'Dell Boomi', 'icon' => 'fa-bridge', 'desc' => 'Cloud Middleware'],
        ['name' => 'MuleSoft', 'icon' => 'fa-hubspot', 'desc' => 'API Connectivity'],
        ['name' => 'Shopify Plus', 'icon' => 'fa-shopify', 'desc' => 'ERP Connector', 'brand' => true],
        ['name' => 'AWS S3', 'icon' => 'fa-aws', 'desc' => 'Data Sovereignty', 'brand' => true],
        ['name' => 'ShipStation', 'icon' => 'fa-truck-fast', 'desc' => 'Freight Sync'],
        ['name' => 'Stripe Connect', 'icon' => 'fa-stripe', 'desc' => 'Fiscal Infra', 'brand' => true],
        ['name' => 'PostgreSQL', 'icon' => 'fa-database', 'desc' => 'Odoo Backend'],
        ['name' => 'Snowflake', 'icon' => 'fa-snowflake', 'desc' => 'BI Data Lake'],
        ['name' => 'Power BI', 'icon' => 'fa-chart-pie', 'desc' => 'Dynamics Visuals'],
        ['name' => 'Azure Bus', 'icon' => 'fa-microsoft', 'desc' => 'Message Queueing', 'brand' => true],
        ['name' => 'Avalara', 'icon' => 'fa-file-invoice-dollar', 'desc' => 'Global Tax Sync'],
        ['name' => 'Twilio SMS', 'icon' => 'fa-comment-dots', 'desc' => 'ERP Notifications'],
    ]
])

<section {{ $attributes->merge(['class' => 'py-5 bg-black overflow-hidden border-top border-light-subtle']) }}>
    <div class="container-fluid mb-4">
        <span class="text-accent fw-bold text-uppercase tracking-widest mb-2 d-block ls-2">
            {{ $subtitle }}
        </span>
        <h2 class="display-6 fw-black text-white text-uppercase">
            {!! str_replace('Precision Stack', '<span class="text-accent">Precision Stack</span>', $title) !!}
        </h2>
    </div>

    <div class="tech-scroll-container d-flex gap-4 px-4 px-lg-5 py-4">
        @foreach($items as $item)
            <div class="tech-card p-4 border border-light-subtle rounded-4 bg-dark text-center">
                <i class="{{ ($item['brand'] ?? false) ? 'fa-brands' : 'fa-solid' }} {{ $item['icon'] }} display-5 text-white mb-3"></i>
                <h5 class="text-uppercase fw-black text-secondary small">{{ $item['name'] }}</h5>
                <span class="x-small text-accent fw-bold text-uppercase">{{ $item['desc'] }}</span>
            </div>
        @endforeach
    </div>
</section>

<style>
    .tech-scroll-container {
        overflow-x: auto;
        overflow-y: hidden;
        scroll-snap-type: x mandatory;
        cursor: grab;
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    .tech-scroll-container::-webkit-scrollbar {
        display: none;
    }
    .tech-scroll-container:active {
        cursor: grabbing;
    }
    .tech-card {
        min-width: 240px;
        flex: 0 0 auto;
        scroll-snap-align: start;
        background: linear-gradient(145deg, #0f0f0f 0%, #000 100%);
        transition: all 0.4s ease-out;
        user-select: none;
    }
    .tech-card:hover {
        border-color: var(--accent) !important;
        transform: translateY(-8px);
    }
    .x-small {
        font-size: 0.7rem;
        letter-spacing: 1.5px;
    }
</style>