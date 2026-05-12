@push('styles')
<style>
.glass-card {
    backdrop-filter: blur(12px);
    transition: transform 0.3s ease, border-color 0.3s ease;
}

.bg-white.bg-opacity-05 {
    background-color: rgba(255, 255, 255, 0.03) !important;
}

.hover-glow:hover {
    border-color: rgba(var(--bs-accent-rgb), 0.4) !important;
    background-color: rgba(255, 255, 255, 0.06) !important;
    box-shadow: 0 0 30px rgba(var(--bs-accent-rgb), 0.1);
}
</style>
@endpush
<section class="py-5 bg-body overflow-hidden position-relative">
    <div class="position-absolute top-50 start-50 translate-middle opacity-25" 
         style="width: 600px; height: 600px; background: radial-gradient(circle, var(--accent) 0%, transparent 70%); filter: blur(80px); pointer-events: none;">
    </div>

    <div class="container position-relative">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7">
                <div class="position-relative p-4 js-magnetic-area">
                    
                    <div class="js-platform-card mb-4" data-speed="0.05">
                        <div class="p-5 rounded-5 border border-accent border-opacity-50 bg-body-tertiary bg-opacity-10 shadow-lg position-relative overflow-hidden glass-card">
                            <div class="position-absolute top-0 end-0 p-4">
                                <span class="badge bg-accent text-dark fw-900 rounded-pill px-3">PRIMARY_RECOMMENDATION</span>
                            </div>
                            <h3 class="display-6 fw-900 text-body mb-3">Odoo</h3>
                            <p class="text-body opacity-75 fs-5 mb-4">Highly flexible, strong F&B modules, and excellent value for growing Australian businesses.</p>
                            <div class="d-flex align-items-center text-accent fw-bold small">
                                <i class="fa-solid fa-bullseye me-2"></i> BEST FOR: Growing businesses needing flexibility
                            </div>
                        </div>
                    </div>

                    <div class="row g-4">
                        @foreach([
                            ['name' => 'MYOB Acumatica', 'fit' => 'Mid-sized businesses', 'desc' => 'Built for Australia with local support.'],
                            ['name' => 'SAP Business One', 'fit' => 'Complex manufacturing', 'desc' => 'Deep production & traceability.'],
                            ['name' => 'NetSuite', 'fit' => 'Fast-growing startups', 'desc' => 'Scalable cloud ERP & reporting.'],
                            ['name' => 'Xero + Add-ons', 'fit' => 'Small businesses', 'desc' => 'Practical lower-cost start.']
                        ] as $item)
                        <div class="col-sm-6">
                            <div class="js-platform-card h-100" data-speed="0.1">
                                <div class="p-4 rounded-4 border border-accent border-opacity-50 bg-body-tertiary bg-opacity-10 shadow-lg h-100 transition-all hover-glow glass-card">
                                    <h4 class="h5 fw-800 text-body mb-2">{{ $item['name'] }}</h4>
                                    <p class="small text-secondary mb-3">{{ $item['desc'] }}</p>
                                    <div class="pt-3 border-top border-body border-opacity-10 mt-auto">
                                        <span class="font-monospace text-accent" style="font-size: 0.7rem;">FIT: {{ $item['fit'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="col-lg-5">
                <span class="text-accent text-uppercase small fw-bold tracking-widest d-block mb-3">
                    {{ $ecosystemContent['kicker'] }}
                </span>                
                
                <h2 class="display-6 fw-semibold mb-4">
                    {{ $ecosystemContent['heading_start'] }} 
                    <i class="text-accent fraunces section-accent fw-light">
                        {{ $ecosystemContent['heading_accent'] }}
                    </i> 
                </h2>
                
                <p class="lead text-secondary mb-5">
                    {{ $ecosystemContent['description'] }}
                </p>
                
                <a href="{{ $ecosystemContent['cta_link'] }}" class="btn btn-accent btn-lg rounded-pill px-5 py-3 fw-bold">
                    {{ $ecosystemContent['cta_text'] }} <i class="fa fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener("mousemove", function(e) {
        const cards = document.querySelectorAll(".js-platform-card");
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        cards.forEach(card => {
            const speed = card.getAttribute('data-speed') || 0.1;
            const x = (window.innerWidth / 2 - mouseX) * speed;
            const y = (window.innerHeight / 2 - mouseY) * speed;

            gsap.to(card, {
                x: x,
                y: y,
                duration: 1,
                ease: "power2.out"
            });
        });
    });

    // Entrance animation
    gsap.from(".js-platform-card", {
        opacity: 0,
        y: 30,
        stagger: 0.1,
        duration: 1.2,
        ease: "expo.out",
        scrollTrigger: {
            trigger: ".js-magnetic-area",
            start: "top 80%"
        }
    });
</script>
@endpush