<div id="site-preloader" class="position-fixed top-0 start-0 w-100 vh-100 d-flex align-items-center justify-content-center" style="z-index: 99999;">
    <div class="preloader-panel panel-top-left position-absolute top-0 start-0 w-100 h-100 bg-body bg-opacity-75" style="backdrop-filter:blur(50px);"></div>
    
    <div class="preloader-panel panel-bottom-right position-absolute top-0 start-0 w-100 h-100 bg-body bg-opacity-75" style="backdrop-filter:blur(50px);"></div>

    <div id="preloader-brand" class="position-relative d-flex flex-column align-items-center justify-content-center" style="z-index: 10;">
        <img src="{{ asset('assets/images/loader.gif') }}" alt="Loading Engine..." 
             id="preloader-logo"
             style="width: 160px; height: 160px; object-fit: contain; will-change: transform, opacity;">
        
        <div id="preloader-text" class="text-success text-uppercase fw-bold tracking-widest mt-3 opacity-0" style="font-size: 0.85rem; letter-spacing: 4px;">
            Unifying Operations
        </div>
    </div>
</div>

<style>
    /* Slice polygons mapping out a precise 45-degree diagonal screen divide line */
    .panel-top-left {
        clip-path: polygon(0 0, 100% 0, 0 100%);
        border-right: 1px solid rgba(25, 135, 84, 0.05); /* Soft premium branding edge indicator */
    }
    
    .panel-bottom-right {
        clip-path: polygon(100% 0, 100% 100%, 0 100%);
    }

    /* Prevent interaction issues or layout shifts during page loading sequence */
    body.preloader-active {
        overflow: hidden !important;
        height: 100vh !important;
    }
</style>

<script>
    (function () {
        // Prevent interaction during initial runtime block
        document.body.classList.add('preloader-active');

        window.addEventListener('load', function () {
            const preloader = document.getElementById('site-preloader');
            const logo = document.getElementById('preloader-logo');
            const statusText = document.getElementById('preloader-text');
            const topLeftPanel = document.querySelector('.panel-top-left');
            const bottomRightPanel = document.querySelector('.panel-bottom-right');

            if (!preloader) return;

            // Initialize clean sequence timeline
            const preloaderTimeline = gsap.timeline({
                delay: 2.2, // Holds your brand asset fully visible on layout for your specified 2.2s duration
                onComplete: () => {
                    preloader.remove(); // Clean DOM garbage collection
                    document.body.classList.remove('preloader-active');
                    
                    // Fire Locomotive Scroll or layout entry scripts here
                    if (window.siteScroller) {
                        window.siteScroller.update();
                    }
                }
            });

            preloaderTimeline
                // 1. Subtle Text Transition
                .fromTo(statusText, { opacity: 0, y: 10 }, { opacity: 0.5, y: 0, duration: 0.4, ease: "power2.out" }, "-=0.71")
                
                // 2. Clear out the brand graphics right before splitting vectors shift
                .to([logo, statusText], {
                     opacity: 0,
                    duration: 0,
                    ease: "power2.in"
                })
                
                // 3. The Diagonal Blade Cut Transition (Slices away from center)
                .to(topLeftPanel, {
                    xPercent: -100,
                    yPercent: -100,
                    duration: 1,
                    ease: "power4.inOut"
                }, "-=0")
                .to(bottomRightPanel, {
                    xPercent: 100,
                    yPercent: 100,
                    duration: 1,
                    ease: "power4.inOut"
                }, "-=1"); // Keeps animations happening perfectly synchronously
        });
    })();
</script>