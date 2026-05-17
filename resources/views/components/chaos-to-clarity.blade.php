@props([
    'logoText' => 'B',
])

<div {{ $attributes->merge(['class' => 'transformation-engine position-relative w-100 overflow-hidden bg-body bg-opacity-25 d-flex align-items-center justify-content-center']) }} 
     style="height: 750px;">
    
    <div class="logo-core position-absolute bg-black rounded-4 d-flex align-items-center justify-content-center border border-success-subtle shadow-lg" 
         id="engineLogo" 
         style="width: 130px; height: 130px; z-index: 100; font-size: 3.5rem; font-weight: 800; color: #198754; will-change: transform;">
        <img src="{{asset('assets/images/logo-dark.png')}}" class="w-75"/>
        
    </div>

    <div id="chaosContainer" class="position-absolute top-0 start-0 w-100 h-50 pointer-events-none" style="z-index: 10;"></div>

    <div id="clarityContainer" class="position-absolute bottom-0 start-0 w-100 h-50 d-flex flex-column align-items-center justify-content-start mt-5 pt-5 pointer-events-none" style="z-index: 20;">
        <div id="linearAssemblyTrack" class="d-flex flex-column align-items-center gap-3 w-100"></div>
    </div>
</div>

<style>
    .stage-element {
        position: absolute !important;
        pointer-events: none;
        will-change: transform, opacity;
    }

    /* Chaotic Raw Text Item styling */
    .chaos-text-item {
        font-size: 0.95rem;
        font-weight: 600;
        color: #495057;
        background: var(--bs-bg-body);
        padding: 6px 14px;
        border-radius: 6px;
        white-space: nowrap;
        /* box-shadow: 0 2px 8px rgba(0,0,0,0.05); */
    }
    
    /* Chaotic Floating Icon styling */
    .chaos-raw-icon {
        width: 38px;
        height: 38px;
        object-fit: contain;
    }

    /* Polished, Clean Linear Output Cards */
    .linear-clarity-card {
        display: flex;
        align-items: center;
        border: 1px solid var(--accent);
        border-radius:10px;
        padding: 10px 24px;
        width: 80%;
        background: var(--bs-bg-body);
        transform-origin: center top;
        will-change: transform, opacity;
    }

    /* Circular SVG Check styling */
    .check-circle-icon {
        width: 22px;
        height: 22px;
        /* background: #198754; */
        /* color: #ffffff; */
        /* border-radius: 50%; */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.75rem;
    }
</style>

@push('scripts')
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script> -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const engineContainer = document.querySelector('.transformation-engine');
            if (!engineContainer) return;

            // Full system module mapping from your list images
            const systemModules = [
                { name: 'Compliance', iconClass: 'fa-solid fa-clipboard-check' },
                { name: 'Customer', iconClass: 'fa-solid fa-users' },
                { name: 'Inventory', iconClass: 'fa-solid fa-boxes-stacked' },
                { name: 'Order', iconClass: 'fa-solid fa-cart-shopping' },
                { name: 'Procurement', iconClass: 'fa-solid fa-file-invoice-dollar' },
                { name: 'Quoting & Estimating', iconClass: 'fa-solid fa-file-lines' },
                { name: 'Scheduling & Dispatch', iconClass: 'fa-solid fa-clock-rotate-left' },
                { name: 'Time Tracking & Billing', iconClass: 'fa-solid fa-stopwatch' },
                { name: 'Warehouse', iconClass: 'fa-solid fa-warehouse' },
                { name: 'Contracts & Progress Claims', iconClass: 'fa-solid fa-file-pen' },
                { name: 'Finance & Accounting', iconClass: 'fa-solid fa-calculator' },
                { name: 'Job', iconClass: 'fa-solid fa-list-check' },
                { name: 'Point of Sale', iconClass: 'fa-solid fa-cash-register' },
                { name: 'Project', iconClass: 'fa-solid fa-diagram-project' },
                { name: 'Resource Planning', iconClass: 'fa-solid fa-calendar-check' },
                { name: 'Subcontractor', iconClass: 'fa-solid fa-users-gear' },
                { name: 'Variation', iconClass: 'fa-solid fa-code-branch' }
            ];

            // Update the raw icons fallback array for the random ambient background stream too
            const rawIconsList = [
                'fa-clipboard-check', 'fa-users', 'fa-boxes-stacked', 'fa-cart-shopping',
                'fa-file-invoice-dollar', 'fa-file-lines', 'fa-clock-rotate-left', 'fa-stopwatch',
                'fa-warehouse', 'fa-file-pen', 'fa-calculator', 'fa-list-check',
                'fa-cash-register', 'fa-diagram-project', 'fa-calendar-check', 'fa-users-gear', 'fa-code-branch'
            ];

            const chaosContainer = document.getElementById('chaosContainer');
            const assemblyTrack = document.getElementById('linearAssemblyTrack');
            const logo = document.getElementById('engineLogo');

            const rect = engineContainer.getBoundingClientRect();
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            // ----------------------------------------------------
            // 1. CONSTANT BACKGROUND CLUTTER (ICONS & TEXT STREAM)
            // ----------------------------------------------------
            function spawnAmbientChaos() {
                const element = document.createElement('div');
                element.className = 'stage-element';
                
                // Mix up text items and loose raw floating icons
                if (Math.random() > 0.4) {
                    const randomMod = systemModules[Math.floor(Math.random() * systemModules.length)];
                    element.innerHTML = `<span class="chaos-text-item">${randomMod.name}</span>`;
                } else {
                    const randomIcon = rawIconsList[Math.floor(Math.random() * rawIconsList.length)];
                    element.innerHTML = `<span class="rounded-4 p-5"><i class="fa ${randomIcon} fa-3x mt-3"></i></span>`;
                }

                chaosContainer.appendChild(element);

                const startX = gsap.utils.random(50, rect.width - 150);
                const startY = gsap.utils.random(-40, 40);
                const driftX = startX + gsap.utils.random(-60, 60);
                const driftY = centerY - gsap.utils.random(70, 140);

                gsap.set(element, { x: startX, y: startY, rotation: gsap.utils.random(-30, 30), opacity: 0, scale: 0.8 });

                gsap.timeline({ onComplete: () => element.remove() })
                    .to(element, { opacity: 0.7, scale: 1, y: driftY, x: driftX, duration: 3.2, ease: "power1.out" })
                    .to(element, {
                        x: centerX - 30,
                        y: centerY - 20,
                        scale: 0.05,
                        rotation: "+=120",
                        opacity: 0,
                        duration: 1.2,
                        ease: "power2.in",
                        onStart: () => {
                            gsap.to(logo, { scale: 1.03, duration: 0.1, yoyo: true, repeat: 1 });
                        }
                    });
            }

            // High frequency ambient cycle loop tick
            setInterval(spawnAmbientChaos, 500);

            // ----------------------------------------------------
            // 2. TIMED ACTIVE FUNNEL PIPELINE (FOCUSED TARGETS)
            // ----------------------------------------------------
            function processActiveModule(index) {
                const item = systemModules[index];

                const activeChaos = document.createElement('div');
                activeChaos.className = 'stage-element d-flex align-items-center gap-2 chaos-text-item shadow-sm border border-light-subtle';
                activeChaos.innerHTML = `
                    <i class="fa ${item.icon}"></i>
                    <span>${item.name}</span>
                `;
                chaosContainer.appendChild(activeChaos);

                const startX = centerX + gsap.utils.random(-180, 180);
                const startY = -100;
                const spin = gsap.utils.random(-20, 20);

                gsap.set(activeChaos, { x: startX, y: startY, rotation: spin, opacity: 1, scale: 1.1 });

                gsap.timeline({
                    onComplete: () => {
                        activeChaos.remove();
                        pulseEngineLogo(item);
                    }
                })
                .to(activeChaos, {
                    x: centerX - 80, // Dynamic centering alignment helper
                    y: centerY - 20,
                    rotation: spin * 4,
                    scale: 0.01,
                    opacity: 0.3,
                    duration: 1.6,
                    ease: "power2.in"
                });
            }

            // ----------------------------------------------------
            // 3. CENTRAL LOGO IMPULSE FLASH
            // ----------------------------------------------------
            function pulseEngineLogo(item) {
                gsap.timeline()
                    .to(logo, { scale: 1.18, borderColor: '#198754', boxShadow: "0 0 35px rgba(25, 135, 84, 0.5)", duration: 0.08, ease: "power4.out" })
                    .to(logo, { scale: 1, boxShadow: "0 0 15px rgba(0, 0, 0, 0.1)", duration: 0.18, ease: "power2.inOut" });

                pushToLinearAssembly(item);
            }

            // ----------------------------------------------------
            // 4. LINEAR ASSEMBLY TRACK (ORGANIZED OUTPUT OUTPUT)
            // ----------------------------------------------------
            function pushToLinearAssembly(item) {
                const card = document.createElement('div');
                card.className = 'linear-clarity-card';
                card.innerHTML = `
                    <div class="rounded-3 text-black bg-accent d-block align-items-center justify-content-center me-3 p-2 flex-shrink-0">
                        <i class="fa fa-2x ${item.iconClass}"></i>
                    </div>
                    <div class="fw-semibold d-block text-uppercase text-body text-nowrap flex-grow-1" style="font-size: 1.1rem;">${item.name}</div>
                    <div class="ms-auto flex-shrink-0 bg-accent text-black rounded-circle check-circle-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                `;

                // Add straight to assembly track line
                assemblyTrack.insertBefore(card, assemblyTrack.firstChild);

                // Slide down straight, linear drop reveal sequence
                gsap.fromTo(card, 
                    { opacity: 0, scale: 0.4, y: -50 },
                    { opacity: 1, scale: 1, y: 0, duration: 0.45, ease: "power2.out" }
                );

                // Pop out oldest cards when overflow container maxes out
                if (assemblyTrack.children.length > 4) {
                    const oldestCard = assemblyTrack.lastChild;
                    gsap.to(oldestCard, {
                        opacity: 0,
                        scale: 0.9,
                        y: 25,
                        duration: 0.35,
                        ease: "power2.in",
                        onComplete: () => oldestCard.remove()
                    });
                }
            }

            // Sequence Loop Scheduler Execution Track
            let currentModuleIndex = 0;
            setInterval(() => {
                processActiveModule(currentModuleIndex);
                currentModuleIndex = (currentModuleIndex + 1) % systemModules.length;
            }, 1000);

            // Seed initial execution step instantly
            processActiveModule(currentModuleIndex);
            currentModuleIndex++;
        });
    </script>
@endpush