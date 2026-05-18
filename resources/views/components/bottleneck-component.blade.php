@push('styles')
<style>
    /* --- BASE & DESKTOP STYLES --- */
    @media (min-width: 992px) {
        #master-horizontal-wrapper {
            height: 100vh;
            width: 100%;
            position: relative;
        }

        #master-horizontal-content {
            display: flex !important;
            flex-direction: row !important;
            flex-wrap: nowrap !important;
            height: 100vh;
            width: fit-content !important; /* CRITICAL: Allows width to exceed 100% */
            will-change: transform;
        }

        #problems-section {
            width: 160vw !important; /* Adjust based on card count */
            padding-left: 25vw; /* Room for sidebar */
        }

        #transformation-section {
            width: 100vw !important;
        }

        .problem-card {
            width: 380px;
            min-height: 550px;
        }

        .before-state {
            will-change: clip-path;
        }
    }

    /* --- MOBILE STYLES (Useful & Responsive) --- */
    @media (max-width: 991px) {
        #master-horizontal-wrapper {
            height: auto !important;
            overflow: visible !important;
        }

        #master-horizontal-content {
            display: block !important;
            width: 100% !important;
            transform: none !important;
        }

        .problem-cards-container {
            flex-direction: column;
            padding: 2rem 1rem;
        }

        .problem-card {
            width: 100% !important;
            margin-bottom: 1.5rem;
        }

        #problems-section, #transformation-section {
            width: 100% !important;
            height: auto !important;
        }

        .before-state, .after-state {
            position: relative !important;
            padding: 4rem 1rem;
            height: auto !important;
            clip-path: none !important; /* Disable wipe on mobile */
        }
        
        /* Show both states vertically on mobile */
        .before-state { margin-bottom: 2rem; }
    }
</style>
@endpush
<section id="operational-bottleneck-trigger" class="position-relative d-none d-xl-block">
    <div id="master-horizontal-wrapper" class="overflow-hidden vh-100-lg sticky-top-lg">
        
        <aside class="fixed-sidebar-container col-lg-3 vh-100 d-none d-lg-flex align-items-center px-xl-3 px-xxl-5 bg-body-tertiary bg-opacity-75 border-end position-absolute top-0 start-0" style="backdrop-filter:blur(15px);z-index: 1000;">
            <div class="problem-intro">
                <span class="text-uppercase fw-bold text-accent mb-2 d-block tracking-widest small">{{ $sectionData['sidebar']['problem_subtitle'] }}</span>
                <h2 class="fs-1 fw-semibold text-body mb-4 lh-1">{{ $sectionData['sidebar']['problem_title'] }}</h2>
                <p class="text-body fs-5 mb-4 lh-base">{{ $sectionData['sidebar']['problem_desc'] }}</p>
                <a href="{{ $sectionData['sidebar']['cta_link'] }}" class="btn btn-accent mt-5 rounded-pill px-5 py-3 fw-bold text-black text-decoration-none">
                    {{ $sectionData['sidebar']['cta_text'] }} <i class="fa fa-arrow-right ms-2"></i>
                </a>
            </div>

            <div class="transformation-intro position-absolute" style="opacity: 0; visibility: hidden;">
                <span class="text-uppercase fw-bold text-accent mb-2 d-block tracking-widest small">{{ $sectionData['sidebar']['solution_subtitle'] }}</span>
                <h2 class="fs-1 fw-semibold text-body mb-4 lh-1">{{ $sectionData['sidebar']['solution_title'] }}</h2>
                <p class="text-body fs-5 mb-4 lh-base">{{ $sectionData['sidebar']['solution_desc'] }}</p>
                <div class="badge bg-accent text-black p-2 px-3 rounded-pill">
                    <i class="fa-solid fa-bolt me-2"></i> Efficiency Optimized
                </div>
            </div>
        </aside>

        <div id="master-horizontal-content" class="bg-body d-flex flex-column flex-lg-nowrap h-100">
            
            <div id="problems-section" class="flex-shrink-0 d-flex align-items-center py-5 py-lg-0">
                <div class="problem-cards-container d-flex flex-column flex-lg-row gap-4 gap-lg-5 px-4 px-lg-5">
                    @foreach($sectionData['cards'] as $card)
                    <div class="problem-card shadow-sm border rounded-4 p-xl-3 p-xxl-5 d-flex flex-column align-items-center text-center text-lg-start bg-body-tertiary">
        
                        <div class="w-100 text-start">
                            <span class="card-num badge rounded-pill bg-accent-subtle text-accent px-3 py-2 fs-5 fw-bold">
                                {{ $card['num'] }}
                            </span>
                        </div>

                        <div class="card-icon-area my-auto py-4">
                            <img src="{{ $card['img'] }}" class="img-fluid" alt="{{ $card['title'] }}" style="max-height: 270px;">
                        </div>

                        <div class="mt-auto w-100">
                            <h3 class="fs-4 fw-semibold text-uppercase mb-2">{{ $card['title'] }}</h3>
                            <p class="text-body fs-5 fw-normal mb-0">{{ $card['desc'] }}</p>
                        </div>
                        
                    </div>
                    @endforeach
                </div>
            </div>

            <div id="transformation-section" class="vh-100 flex-shrink-0 position-relative overflow-hidden bg-body" style="width: 100vw; z-index: 2000;">
                <div class="comparison-container w-100 h-100 position-relative">
                    
                    @foreach(['after', 'before'] as $state)
                    <div class="{{ $state }}-state position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center {{ $state === 'after' ? 'bg-body-tertiary' : 'bg-body' }}" style="z-index: {{ $state === 'before' ? 2 : 1 }};">
                        <div class="container-fluid">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-3 d-none d-lg-block"></div>
                                <div class="col-lg-9 text-center">
                                    <div class="mb-3">
                                        <span class="badge {{ $state === 'after' ? 'bg-accent-subtle text-accent border-success-subtle' : 'bg-danger-subtle text-danger border-danger-subtle' }} border px-3 py-2 rounded-pill fw-semibold">
                                            <i class="fa-solid {{ $state === 'after' ? 'fa-check-circle' : 'fa-triangle-exclamation' }} me-2"></i> 
                                            {{ $sectionData['transformation'][$state]['badge'] }}
                                        </span>
                                    </div>
                                    <h2 class="fs-2 fw-semibold text-body mb-4">{!! $sectionData['transformation'][$state]['title'] !!}</h2>

                                    <div class="d-flex justify-content-center gap-4 mb-5 text-start">
                                        @foreach($sectionData['transformation'][$state]['stats'] as $index => $stat)
                                            <div class="stat-item">
                                                <h4 class="fw-normal mb-0 {{ $state === 'after' ? 'text-accent' : 'text-danger' }}">{{ $stat['val'] }}</h4>
                                                <p class="small text-secondary mb-0">{{ $stat['label'] }}</p>
                                            </div>
                                            @if(!$loop->last) <div class="border-start mx-2"></div> @endif
                                        @endforeach
                                    </div>

                                    <img src="{{ $sectionData['transformation'][$state]['img'] }}" class="img-fluid shadow-lg rounded-5 {{ $state === 'after' ? '' : '' }}" alt="Visual" style="max-height: 400px; object-fit: contain;">
                                </div>
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
        function initHorizontalScroll() {
        gsap.registerPlugin(ScrollTrigger);

        const trigger = document.querySelector("#operational-bottleneck-trigger");
        const wrapper = document.querySelector("#master-horizontal-wrapper");
        const content = document.querySelector("#master-horizontal-content");
        const aside = document.querySelector(".fixed-sidebar-container");
        const problemSection = document.querySelector("#problems-section");
        const transSection = document.querySelector("#transformation-section");
        const beforeState = document.querySelector(".before-state");
        const problemIntro = document.querySelector(".problem-intro");
        const transIntro = document.querySelector(".transformation-intro");

        if (!trigger || !content || window.innerWidth < 992) return;

        // 1. Setup Initial State
        gsap.set(aside, { xPercent: -100 });
        gsap.set(transIntro, { autoAlpha: 0, y: 20 });

        // 2. Calculate the "Wipe Start" point
        // This is the width of the problems section minus the space not covered by the sidebar
        const scrollToEndOfProblems = problemSection.offsetWidth - (window.innerWidth * 0.25); 
        const totalScroll = content.scrollWidth - window.innerWidth;

        const masterTl = gsap.timeline({
            scrollTrigger: {
                trigger: trigger,
                start: "top top",
                end: () => "+=" + (content.scrollWidth + window.innerWidth),
                pin: wrapper,
                scrub: 1,
                invalidateOnRefresh: true,
            }
        });

        // PHASE 1: Aside Panel Slides In
        masterTl.to(aside, { xPercent: 0, duration: 1, ease: "power2.out" });

        // PHASE 2: Horizontal Card Movement
        // We move the cards. Total duration is set to 10 for easier sub-timing.
        masterTl.to(content, {
            x: () => -totalScroll,
            ease: "none",
            duration: 10 
        }, "mainScroll");

        // PHASE 3: Timing the Sidebar Swap
        // Start swapping text just before the Problems section ends
        masterTl.to(problemIntro, {
            opacity: 0,
            y: -30,
            duration: 0.5
        }, "mainScroll+=7"); // Triggers at 70% of the horizontal move

        masterTl.to(transIntro, {
            autoAlpha: 1,
            y: 0,
            duration: 0.5
        }, "mainScroll+=7.5");

        // PHASE 4: The Before/After Wipe
        // This ONLY starts when the Transformation Section is fully visible (at the very end of the scroll)
        if (beforeState) {
            masterTl.fromTo(beforeState, 
                { clipPath: "inset(0% 0% 0% 0%)" },
                { 
                    clipPath: "inset(0% 100% 0% 0%)", 
                    ease: "none", 
                    duration: 2 // Give the wipe its own time after the scroll hits the limit
                }
            ); 
        }

        // PHASE 5: Aside Panel Slides Out
        masterTl.to(aside, {
            xPercent: -100,
            duration: 1,
            ease: "power2.in"
        });
    }
    </script>
@endpush