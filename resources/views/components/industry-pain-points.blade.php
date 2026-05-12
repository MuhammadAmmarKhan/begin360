@push('styles')
<style>
.diagnostic-node {
    /* Ensures the line doesn't cut off at the last item */
    transition: all 0.5s ease;
}

.diagnostic-node:hover .node-bullet {
    background: var(--bs-accent) !important;
    box-shadow: 0 0 15px var(--bs-accent);
}

.diagnostic-node:hover .node-content {
    transform: translateX(10px);
}
    
</style>
@endpush
@props([
    'subheading' => 'Sounds Familiar?',
    'heading' => '',
    'description' => '',
    'points' => []
])

<section class="py-5 bg-body js-diagnostic-section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="d-flex align-items-center mb-3">
                        <span class="badge rounded-pill bg-danger-subtle text-danger px-3 py-2 border border-danger-subtle">
                            <i class="fa-solid fa-triangle-exclamation me-2"></i> System Friction Detected
                        </span>
                    </div>
                    <p class="text-uppercase fw-bold text-accent tracking-widest mb-2 small">{!! $subheading !!}</p>
                    <h2 class="display-6 fw-semibold mb-4">{!! $heading !!}</h2>
                    <p class="lead text-secondary mb-5 pe-lg-5">{!! $description !!}</p>
                    
                    <div class="mt-5 d-none d-lg-block">
                        <div class="w-100 bg-light-subtle position-relative" style="height: 2px;">
                            <div class="bg-accent position-absolute top-0 start-0 h-100 js-scan-progress" style="width: 0%;"></div>
                        </div>
                        <p class="font-monospace small text-muted mt-2 uppercase tracking-tighter">Analyzing Operational Voids...</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 offset-lg-1">
                <div class="position-relative ps-lg-5 border-start-lg">
                    @foreach($points as $point)
                        <div class="diagnostic-node mb-5 pb-5 position-relative js-node">
                            <div class="node-bullet bg-body border border-accent rounded-circle position-absolute d-none d-lg-block" 
                                 style="left: -58px; top: 0; width: 15px; height: 15px; z-index: 2;"></div>
                            
                            <div class="node-content transition-all">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fa-solid {{ $point['icon'] }} text-accent fs-4 me-3 opacity-75"></i>
                                    <span class="font-monospace small text-accent fw-bold uppercase">Incident_0{{ $loop->iteration }}</span>
                                </div>
                                
                                <h4 class="h4 fw-800 mb-3 text-body">
                                    {!! $point['title'] !!}
                                </h4>
                                <div class="p-4 bg-body-tertiary border-start border-accent border-3 rounded-end-4 shadow-sm">
                                    <p class="text-secondary mb-0 lh-base">
                                        {{ $point['content'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (typeof gsap !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);

            const nodes = document.querySelectorAll(".js-node");
            
            // 1. Progress Bar on the left sidebar
            gsap.to(".js-scan-progress", {
                width: "100%",
                scrollTrigger: {
                    trigger: ".js-diagnostic-section",
                    start: "top center",
                    end: "bottom center",
                    scrub: true
                }
            });

            // 2. Staggered reveal of nodes
            nodes.forEach((node, index) => {
                const bullet = node.querySelector(".node-bullet");
                const content = node.querySelector(".node-content");

                const tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: node,
                        start: "top 85%",
                        toggleActions: "play none none reverse"
                    }
                });

                tl.from(bullet, { scale: 0, duration: 0.4, ease: "back.out(2)" })
                  .from(content, { 
                      opacity: 1, 
                      x: 30, 
                      filter: "blur(0px)", 
                      duration: 0.8, 
                      ease: "power3.out" 
                  }, "-=0.6");
            });
        }
    });
</script>
@endpush