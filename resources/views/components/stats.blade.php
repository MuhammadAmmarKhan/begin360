@push('styles')

@endpush

<section class="bg-body border-top border-bottom py-2">
    <div class="container">
        <div class="row g-0 text-center">
            
            @foreach($statsData as $stat)
                <div class="col-lg-4">
                    <div class="counter-item p-5 {{ $loop->iteration == 2 ? 'border-start-lg border-end-lg' : '' }}">
                        <h2 class="display-3 fw-800 text-accent mb-0">
                            @if($stat['is_range'])
                                <span class="count-up" data-target="{{ $stat['target'] }}">0</span>–<span class="count-up" data-target="{{ $stat['target_end'] }}">0</span>{{ $stat['suffix'] }}
                            @else
                                <span class="count-up" data-target="{{ $stat['target'] }}" data-suffix="{{ $stat['suffix'] }}">80</span>
                            @endif
                        </h2>
                        @if($stat['title'])
                        <!-- <p class="text-uppercase fw-bold tracking-widest small mb-3 mt-2">
                            {{ $stat['title'] }}
                        </p> -->
                        @endif
                        <p class="text-body fs-5 fw-normal px-lg-4 mb-0">
                            {{ $stat['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

<style>
    
</style>

@push('scripts')
<script>
        document.addEventListener("DOMContentLoaded", function() {
            gsap.registerPlugin(ScrollTrigger);

            const counters = document.querySelectorAll(".count-up");

            counters.forEach((counter) => {
                const target = +counter.getAttribute("data-target");
                const suffix = counter.getAttribute("data-suffix") || "";

                gsap.to(counter, {
                    innerText: target,
                    duration: 2,
                    snap: { innerText: 1 }, // Ensures it counts in whole numbers
                    scrollTrigger: {
                        trigger: counter,
                        start: "top 90%", // Starts when the number is near the bottom of the viewport
                        toggleActions: "play none none none"
                    },
                    onUpdate: function() {
                        // Optional: Adds suffix like '%' if defined
                        if(suffix) counter.innerHTML = Math.ceil(counter.innerText) + suffix;
                    }
                });
            });

            // Fade in the text blocks for a premium feel
            gsap.from(".counter-item p", {
                opacity: 0,
                y: 20,
                stagger: 0.2,
                duration: 1,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".counter-item",
                    start: "top 85%"
                }
            });
        });
    </script>
@endpush