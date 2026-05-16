@push('styles')
<style>

    
</style>
@endpush
@props([
    'subheading' => 'Sounds Familiar?',
    'heading' => '',
    'description' => '',
    'points' => []
])

<section {{ $attributes->merge(['class' => 'py-5 bg-body js-pillar-stack']) }}>
    <div class="container py-2 py-lg-4">
        <div class="row g-4 g-lg-5">
            
            <div class="col-lg-5">
                <div class="sticky-top vh-lg-75 d-flex flex-column justify-content-center pt-2 pt-lg-0" style="top: 100px; z-index: 10;">
                    <div class="d-inline-flex align-items-center mb-3 mb-lg-4">
                        <span class="badge rounded-pill bg-accent-subtle text-accent px-3 py-2 border border-accent-subtle small">
                            <i class="fa-solid fa-microchip me-2"></i> The Solution Engine
                        </span>
                    </div>
                    <h2 class="display-6 fw-semibold mb-3 mb-lg-4 text-break">{!! $heading !!}</h2>
                    <p class="lead text-secondary mb-4 mb-lg-5 pe-lg-4 text-break">{!! $description !!}</p>
                    
                    <div class="d-none d-lg-block">
                        @foreach(['Numbers', 'Stock', 'Compliance'] as $index => $label)
                            <div class="d-flex align-items-center mb-3 opacity-25 js-pillar-nav" data-index="{{ $index }}">
                                <span class="font-monospace fw-bold me-3">0{{ $index + 1 }}</span>
                                <div class="bg-light-subtle flex-grow-1" style="height: 2px;">
                                    <div class="bg-accent h-100 js-nav-progress" style="width: 0%;"></div>
                                </div>
                                <span class="small fw-bold ms-3 text-uppercase tracking-tighter">{{ $label }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-7 px-2 px-sm-3 px-lg-4">
                @foreach($points as $point)
                <div class="js-pillar-card min-vh-sm-50 min-vh-lg-75 d-flex align-items-center mb-4 mb-lg-5">
                    <div class="w-100 bg-body-tertiary border border-light-subtle rounded-5 p-4 p-lg-5 shadow-sm position-relative overflow-hidden">
                        <div class="position-absolute top-0 end-0 p-3 p-sm-4 opacity-05 display-4 text-italic fw-bold text-accent mt-n3 mt-sm-n4 me-n1 me-sm-n2 select-none" style="pointer-events: none;">0{{ $loop->iteration }}</div>
                        
                        <div class="position-relative">
                            <div class="font-monospace text-accent fw-bold mb-2 small text-uppercase">{{ $point['sub'] }}</div>
                            <h3 class="h3 h2-lg fw-semibold my-3 my-lg-4 text-break">{{ $point['title'] }}</h3>
                            
                            <div class="bg-body rounded-4 p-3 mb-4 border border-dashed border-secondary-subtle text-center d-flex justify-content-center align-items-center">
                                <div class="w-100 container-svg-fluid text-center">
                                    {!! $point['svg'] !!}
                                </div>
                            </div>

                            <p class="text-secondary mb-4 text-break">{{ $point['content'] }}</p>
                            
                            <div class="row g-2 g-sm-3">
                                @foreach($point['list'] as $item)
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center p-2 bg-body border border-light-subtle border-opacity-50 rounded-3 small fw-bold">
                                            <i class="fa-solid fa-check text-accent me-2 flex-shrink-0"></i> 
                                            <span class="text-truncate text-body">{{ $item }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>


@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (typeof gsap !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);

            const cards = document.querySelectorAll(".js-pillar-card");
            const navs = document.querySelectorAll(".js-pillar-nav");

            cards.forEach((card, i) => {
                // Create a timeline for each card
                ScrollTrigger.create({
                    trigger: card,
                    start: "top 20%",
                    end: "bottom 20%",
                    onToggle: self => {
                        if (self.isActive) {
                            gsap.to(navs[i], { opacity: 1, duration: 0.3 });
                            gsap.to(navs[i].querySelector(".js-nav-progress"), { width: "100%", duration: 0.5 });
                        } else {
                            gsap.to(navs[i], { opacity: 0.25, duration: 0.3 });
                            gsap.to(navs[i].querySelector(".js-nav-progress"), { width: "0%", duration: 0.5 });
                        }
                    }
                });

                // The "Layering" Entrance
                gsap.from(card.querySelector(".rounded-5"), {
                    scrollTrigger: {
                        trigger: card,
                        start: "top bottom",
                        end: "top 20%",
                        scrub: true
                    },
                    scale: 0.8,
                    opacity: 0,
                    rotationX: -10,
                    transformOrigin: "center bottom"
                });
            });
        }
    });
</script>
@endpush