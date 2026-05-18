@push('styles')
<style>
    #process-pin-section { 
        position: relative; 
        width: 100%;
        height: 100vh;
        /* background: #000; */
        overflow: hidden;
        /* Removing display:flex to use absolute positioning for layers */
    }

    /* Glassmorphic Overlays - Desktop Only */
    @media (min-width: 992px) {
        .glass-overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 15vw;
            z-index: 25;
            pointer-events: none;
            backdrop-filter: blur(12px);
        }
        .overlay-left {
    left: 0;
    /* Gradient from body-bg to transparent */
    background: linear-gradient(to right, 
        var(--glass-blur-bg) 0%, 
        rgba(var(--bs-body-bg-rgb), 0.8) 40%, 
        transparent 100%
    );
}

.overlay-right {
    right: 0;
    /* Gradient from transparent to body-bg */
    background: linear-gradient(to left, 
        var(--glass-blur-bg) 0%, 
        rgba(var(--bs-body-bg-rgb), 0.8) 40%, 
        transparent 100%
    );
}
    }

    /* 1. Header Zone - Floats at the top */
    .section-header-zone {
        position: absolute;
        top: 5vh;
        left: 50%;
        transform:translate(-50%);
        width: 100%;
        z-index: 30;
        text-align: center;
    }

    /* 2. Visual Zone - DEAD CENTER */
    .visual-zone {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        max-width: 1100px; 
        height: 45vh;
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .process-image { 
        position: absolute;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.5s ease, transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        transform: scale(0.9);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .process-image.active { 
        opacity: 1; 
        transform: scale(1);
    }

    .process-image img {
        height: auto;
        max-height: 40vh; /* Primary size for 2K/Desktop */
        width: auto;
        object-fit: contain;
        filter: drop-shadow(0 0 50px rgba(86, 217, 100, 0.25));
    }

    /* Responsive image scaling */
    @media (max-height: 800px) {
        .process-image img { max-height: 30vh; }
    }
    @media (max-width: 768px) {
        .process-image img { max-height: 25vh; }
    }

    /* 3. Content Zone - ANCHORED TO BOTTOM */
    .content-zone {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 30vh; /* Dedicated space at bottom */
        z-index: 20;
        display: flex;
        flex-direction: column;
    }

    #horizontal-track {
        display: flex;
        height: 100%;
        will-change: transform;
    }

    .step-slide {
        width: 100vw;
        flex: 0 0 100vw;
        display: flex;
        align-items: center; /* Content starts from top of this div */
        justify-content: center;
    }

    .content-card-inner {
        width: 100%;
        max-width: 800px;
        text-align: left;
        padding: 0 2rem;
    }

    /* Interactive Bullets */
    .step-pagination {
        position: absolute;
        bottom: 4vh;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 16px;
        z-index: 40;
    }

    .pag-bullet {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        border: 2px solid rgba(86, 217, 100, 0.4);
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        padding: 0;
    }

    .pag-bullet.active {
        background: #56D964;
        border-color: #56D964;
        box-shadow: 0 0 15px rgba(86, 217, 100, 0.6);
        transform: scale(1.4);
    }

    .text-accent { color: #56D964 !important; }
</style>
@endpush

@props([
    'subheading' => 'How It Works',
    'heading' => 'We connect the dots.<br/>You see the results',
    'description' => 'A proven approach to unify your business, automate operations, and give you real-time clarity.',
    'steps'
])

<section id="process-pin-section" class="bg-body-tertiary">
    {{-- Glass Overlays --}}
    <div class="glass-overlay overlay-left d-none d-lg-block"></div>
    <div class="glass-overlay overlay-right d-none d-lg-block"></div>

    {{-- Dynamic Header --}}
    <div class="section-header-zone container px-4">
        <span class="d-block text-uppercase fw-semibold ls-2 text-accent gs-reveal" style="font-size: 0.85rem; letter-spacing: 0.2em;">
            {{ $subheading }}
        </span>
        <h2 class="display-6 fw-semibold text-body mb-4 tracking-tighter">{!! $heading !!}</h2>
        <p class="text-body fw-normal mx-auto lead mb-0" style="max-width: 600px;">{{ $description }}</p>
    </div>

    {{-- Visual Zone (Dead Center) --}}
    <div class="visual-zone">
        @foreach($steps as $index => $step)
            <div class="process-image {{ $index === 0 ? 'active' : '' }}" id="v-img-{{ $index }}">
                <img src="{{ $step['image'] }}" alt="Step {{ $index + 1 }}">
            </div>
        @endforeach
    </div>

    {{-- Content Zone (Bottom) --}}
    <div class="content-zone">
        <div id="horizontal-track">
            @foreach($steps as $index => $step)
                <div class="step-slide p-1">
                    <div class="content-card-inner bg-body rounded-4 px-5 py-3" style="height:200px;">
                        <h3 class="badge bg-accent fw-semibold text-uppercase text-black rounded-pill mb-1 small">0{{ $index + 1 }}. {{ $step['title'] }}</h3>
                        <h2 class="fs-6 text-body mb-2 small d-none d-lg-block">{{ $step['subtitle'] }}</h2>
                        <p class="small text-secondary fw-normal">{{$step['description']}}</p>
                        
                        <div class="d-none d-md-flex flex-wrap justify-content-center gap-2">
                            @foreach($step['bullets'] as $bullet)
                                <span class="small fw-semibold text-body px-3 py-1 rounded-pill bg-body-tertiary bg-opacity-5 border border-white border-opacity-10" style="font-size: 0.75rem;">
                                    <i class="fa-solid fa-check text-accent me-2"></i> {{ $bullet }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Bullets --}}
        <div class="step-pagination d-none d-md-flex">
            @foreach($steps as $index => $step)
                <button class="pag-bullet {{ $index === 0 ? 'active' : '' }}" 
                        data-index="{{ $index }}" 
                        aria-label="Go to step {{ $index + 1 }}"></button>
            @endforeach
        </div>
    </div>
</section>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        window.addEventListener('load', () => {
            if (typeof gsap !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

                const track = document.querySelector("#horizontal-track");
                const pinSection = document.querySelector("#process-pin-section");
                const slides = gsap.utils.toArray(".step-slide");
                const bullets = gsap.utils.toArray(".pag-bullet");

                const getScrollAmount = () => track.scrollWidth - window.innerWidth;

                let tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: pinSection,
                        start: "top top",
                        end: () => "+=" + (slides.length * 100) + "%",
                        pin: true,
                        scrub: 0.1,
                        snap: 1 / (slides.length - 1),
                        invalidateOnRefresh: true
                    }
                });

                tl.to(track, {
                    x: () => -getScrollAmount(),
                    ease: "none"
                });

                // Sync Images and Bullets
                slides.forEach((slide, i) => {
                    ScrollTrigger.create({
                        trigger: slide,
                        containerAnimation: tl,
                        start: "left center",
                        end: "right center",
                        onToggle: self => {
                            if (self.isActive) {
                                document.querySelectorAll('.process-image').forEach(el => el.classList.remove('active'));
                                document.getElementById(`v-img-${i}`).classList.add('active');
                                
                                bullets.forEach(b => b.classList.remove('active'));
                                bullets[i].classList.add('active');
                            }
                        }
                    });
                });

                // Clickable Bullets Logic
                bullets.forEach((bullet, i) => {
                    bullet.addEventListener("click", () => {
                        const ST = tl.scrollTrigger;
                        const targetScroll = ST.start + (ST.end - ST.start) * (i / (slides.length - 1));
                        
                        gsap.to(window, {
                            scrollTo: targetScroll + 2,
                            duration: 0.8,
                            ease: "power2.inOut"
                        });
                    });
                });
            }
        });
    });
</script>
@endpush