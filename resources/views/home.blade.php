@extends('layouts.app')

@section('title', 'Home | Begin360 - Elite Odoo Silver Partner')
@section('meta_description', 'Transforming enterprise operations with glassmorphic UI and Odoo architecture.')
@section('meta_keywords', 'Transforming enterprise operations with glassmorphic UI and Odoo architecture.')
@push('styles')
<style>
    
</style>
@push('styles')
@section('content')
    <section id="hero" class="position-relative vh-100 d-flex align-items-center overflow-hidden bg-body">
        <canvas id="erp-canvas" class="position-absolute top-0 start-0 w-100 h-100"></canvas>
        <div class="container position-relative" style="z-index: 10;">
            <div class="row">
                <div class="col-md-11 col-lg-7 mx-auto text-center">
                    <div class="hero-content">
                        <div class="overflow-hidden mb-2">
                            <span class="d-block text-uppercase fw-bold ls-2 text-accent gs-reveal" style="font-size: 0.85rem; letter-spacing: 0.2em;">
                                Smarter Operations, Better Decisions.
                            </span>
                        </div>
                        
                        <h1 class="display-1 fw-800 text-body mb-4 lh-1 gs-reveal">
                            From Scattered systems to <span class="text-nowrap">complete control.</span>
                        </h1>
                        
                        <p class="fs-5 text-secondary mb-5 gs-reveal w-100 w-lg-75 mx-auto lh-base fw-light">
                            We help growing businesses unify their operations, automate workflows, and gain real-time visibility — all in one place.
                        </p>
                        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3 gs-reveal">
                            <button class="btn btn-accent rounded-pill px-5 py-3 fw-black text-uppercase shadow-sm d-inline-flex align-items-center justify-content-center w-100 w-sm-auto">
                                <i class="fa-solid fa-circle-play me-2"></i> See how it works
                            </button>
                            <button class="btn btn-outline-secondary rounded-pill px-5 py-3 fw-black text-uppercase d-inline-flex align-items-center justify-content-center w-100 w-sm-auto">
                                <i class="fa fa-calendar-check me-2"></i> Book a demo
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-0 start-50 translate-middle-x pb-4 text-center d-flex flex-column align-items-center gap-2" style="z-index: 100;">
            <div class="mouse-icon border border-2 border-body rounded-pill d-flex align-items-start justify-content-center" style="width: 25px; height: 45px; padding-top: 5px;">
                <div class="scroll-dot bg-secondary rounded-circle" style="width: 5px; height: 8px;"></div>
            </div>
            <span class="small text-secondary tracking-wide">Scroll to see the transformation</span>
        </div>
    </section>
    <section id="operational-bottleneck-trigger" class="position-relative" style="width: 100%; clear: both;">

        <div id="master-horizontal-wrapper" class="overflow-hidden vh-100 sticky-top">
            
            <aside class="fixed-sidebar-container col-lg-3 vh-100 d-flex align-items-center px-5 position-absolute top-0 start-0" style="background:rgba(255,255,255,0);backdrop-filter:blur(25px);z-index: 1000;">
        
                <div class="problem-intro">
                    <span class="text-uppercase fw-bold text-accent mb-2 d-block tracking-widest" style="font-size: 0.75rem;">— THE OPERATIONAL BOTTLENECK —</span>
                    <h2 class="display-5 fw-800 text-body mb-4 lh-1">What's actually slowing your business down?</h2>
                    <p class="text-secondary fs-5 mb-4 lh-base">Siloed data architecture and manual dependencies are invisible leaks in your profitability.</p>
                    <a href="#" class="btn btn-accent mt-5 rounded-pill px-5 py-3 text-dark text-decoration-none">
                        Let’s build your digital backbone. <i class="fa fa-arrow-right ms-2"></i>
                    </a>
                </div>

                <div class="transformation-intro position-absolute px-5" style="opacity: 0; visibility: hidden;">
                    <span class="text-uppercase fw-bold text-accent mb-2 d-block tracking-widest" style="font-size: 0.75rem;">— THE SOLUTION —</span>
                    <h2 class="display-5 fw-800 text-body mb-4 lh-1">From chaos to clarity.</h2>
                    <p class="text-secondary fs-5 mb-4 lh-base">We unify your operations into a single, automated source of truth using Odoo ERP.</p>
                    <div class="badge bg-accent text-accebt p-2 px-3 rounded-pill">
                        <i class="fa-solid fa-bolt me-2"></i> Efficiency Optimized
                    </div>
                </div>

            </aside>

            <div id="master-horizontal-content" class="bg-body d-flex flex-nowrap h-100">
                
                <div id="problems-section" class="vh-100 flex-shrink-0 d-flex align-items-center" style="width: 150vw; padding-left: 25vw;">
                    <div class="problem-cards-container d-flex gap-5 px-5">
                        <div class="problem-card shadow-sm border rounded-4 p-4 flex-shrink-0 bg-body-tertiary">
                            <span class="card-num">01</span>
                            <div class="card-icon-area my-4"><img src="assets/images/hp1.png" class="img-fluid" alt="Data Silos"></div>
                            <h3 class="h5 fw-bold mt-5 text-uppercase">Fragmented Data Silos</h3>
                            <p class="text-secondary smaller">Eliminate operational friction where sales, inventory, and finance operate in isolation.</p>
                        </div>
                        
                        <div class="problem-card shadow-sm border rounded-4 p-4 flex-shrink-0 bg-body-tertiary">
                            <span class="card-num">02</span>
                            <div class="card-icon-area my-4"><img src="assets/images/hp2.png" class="img-fluid" alt="Manual Process"></div>
                            <h3 class="h5 fw-bold mt-5 text-uppercase">Operational Inefficiency</h3>
                            <p class="text-secondary smaller">Stop wasting human capital on repetitive data entry. We transform manual bottlenecks.</p>
                        </div>

                        <div class="problem-card shadow-sm border rounded-4 p-4 flex-shrink-0 bg-body-tertiary">
                            <span class="card-num">03</span>
                            <div class="card-icon-area my-4"><img src="assets/images/hp3.png" class="img-fluid" alt="Intelligence"></div>
                            <h3 class="h5 fw-bold mt-5 text-uppercase">Blind Decision Making</h3>
                            <p class="text-secondary smaller">Gain real-time business intelligence and 360° visibility to make data-driven decisions.</p>
                        </div>

                        <div class="problem-card shadow-sm border rounded-4 p-4 flex-shrink-0 bg-body-tertiary">
                            <span class="card-num">04</span>
                            <div class="card-icon-area my-4"><img src="assets/images/hp4.png" class="img-fluid" alt="Cost Optimization"></div>
                            <h3 class="h5 fw-bold mt-5 text-uppercase">Stagnated ROI</h3>
                            <p class="text-secondary smaller">Optimize your cost structure by consolidating your tech stack into one platform.</p>
                        </div>
                    </div>
                </div>

                <div id="transformation-section" class="vh-100 flex-shrink-0 position-relative overflow-hidden bg-body" style="width: 100vw; z-index: 2000;">
        
                    <div class="comparison-container w-100 h-100 position-relative">
                        
                        <div class="after-state position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-body-tertiary">
                            <div class="container text-center">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-8 offset-lg-6">
                                        <div class="mb-3">
                                            <span class="badge bg-accent-subtle text-accent border border-success-subtle px-3 py-2 rounded-pill fw-bold">
                                                <i class="fa-solid fa-check-circle me-2"></i> THE ODOO ADVANTAGE
                                            </span>
                                        </div>
                                        <h2 class="display-4 fw-800 text-body mb-4">Unified. Scalable. <span class="text-accent">Optimized.</span></h2>
                                        
                                        <div class="after-content-grid d-flex justify-content-center gap-4 mb-5 text-start">
                                            <div class="stat-item">
                                                <h4 class="fw-bold mb-0 text-accent">100%</h4>
                                                <p class="small text-secondary mb-0">Data Accuracy</p>
                                            </div>
                                            <div class="border-start mx-2"></div>
                                            <div class="stat-item">
                                                <h4 class="fw-bold mb-0 text-accent">Real-Time</h4>
                                                <p class="small text-secondary mb-0">Reporting</p>
                                            </div>
                                            <div class="border-start mx-2"></div>
                                            <div class="stat-item">
                                                <h4 class="fw-bold mb-0 text-accent">Automated</h4>
                                                <p class="small text-secondary mb-0">Workflows</p>
                                            </div>
                                        </div>

                                        <img src="assets/images/clarity.png" class="img-fluid shadow-lg rounded-4 border" alt="Clarity Dashboard">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="before-state position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-body">
                            <div class="container text-center">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-8 offset-lg-6">
                                        <div class="mb-3">
                                            <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-3 py-2 rounded-pill fw-bold">
                                                <i class="fa-solid fa-triangle-exclamation me-2"></i> THE STATUS QUO
                                            </span>
                                        </div>
                                        <h2 class="display-4 fw-800 text-body mb-4">Fragmented. Fragile. <span class="text-danger">Expensive.</span></h2>

                                        <div class="before-content-grid d-flex justify-content-center gap-4 mb-5 text-start">
                                            <div class="stat-item">
                                                <h4 class="fw-bold mb-0 text-danger">High</h4>
                                                <p class="small text-secondary mb-0">Human Error</p>
                                            </div>
                                            <div class="border-start mx-2"></div>
                                            <div class="stat-item">
                                                <h4 class="fw-bold mb-0 text-danger">Delayed</h4>
                                                <p class="small text-secondary mb-0">Information</p>
                                            </div>
                                            <div class="border-start mx-2"></div>
                                            <div class="stat-item">
                                                <h4 class="fw-bold mb-0 text-danger">Manual</h4>
                                                <p class="small text-secondary mb-0">Spreadsheets</p>
                                            </div>
                                        </div>

                                        <img src="assets/images/disconnected.png" class="img-fluid" alt="Business Chaos" style="max-height: 400px; object-fit: contain;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="position-absolute bottom-0 w-100 py-4 bg-body-tertiary border-top" style="z-index: 110;">
                        <div class="container d-flex justify-content-center align-items-center gap-3">
                            <div class="d-flex align-items-center gap-2">
                                <div class="spinner-grow spinner-grow-sm text-accent" role="status"></div>
                                <p class="mb-0 fw-bold text-body text-uppercase tracking-wider" style="font-size: 0.85rem;">Clarity brings confidence.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="hiw-spacer" id="hiw-root">
        <div class="hiw-sticky">
            <div class="container-xl px-3 px-lg-4">

                <div class="border-end mb-5">
                        <div class="overflow-hidden mb-2">
                            <span class="d-block text-uppercase fw-bold ls-2 text-accent gs-reveal" style="font-size: 0.85rem; letter-spacing: 0.2em;">How It Works.</span>
                        </div>
                        <h1 class="display-2 fw-800 text-body mb-4 lh-1 gs-reveal">We connect the dots. <br>You see the <span class="text-nowrap text-accent">results</span></h1>
                        <p class="fs-5 text-secondary mb-5 gs-reveal w-75 lh-base">A proven approach to unify your business, automate operations, and give you real-time clarity.</p>
                </div>
                <div class="row align-items-center g-3 g-xl-4">

                <div class="col-12 col-lg-7">
                <div class="diagram-box" id="diagram-box">

                    <div class="diag-panel is-first" id="diag-1">
                    <svg style="position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:1" viewBox="0 0 600 400" preserveAspectRatio="none">
                        <line x1="140" y1="72"  x2="282" y2="192" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                        <line x1="140" y1="195" x2="282" y2="197" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                        <line x1="140" y1="318" x2="282" y2="204" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                        <line x1="295" y1="58"  x2="300" y2="175" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                        <line x1="460" y1="72"  x2="322" y2="187" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                        <line x1="460" y1="195" x2="322" y2="197" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                        <line x1="460" y1="318" x2="322" y2="204" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                        <line x1="300" y1="345" x2="300" y2="218" stroke="#d1d5db" stroke-width="1.5" stroke-dasharray="6,4"/>
                    </svg>
                    <div class="m-card" style="left:1%;top:4%">
                        <div class="mc-title"><i class="bi bi-envelope me-1 text-secondary"></i>Inbox <span class="badge bg-secondary bg-opacity-25 text-secondary ms-1" style="font-size:.55rem">12</span></div>
                        <div style="color:#9ca3af;font-size:.62rem">New order from ABC Co.</div>
                        <div style="color:#9ca3af;font-size:.62rem">PO #77981</div>
                        <div style="color:#9ca3af;font-size:.62rem">Re: Invoice</div>
                    </div>
                    <div class="m-card" style="left:1%;top:41%">
                        <div class="mc-title"><i class="bi bi-people me-1 text-secondary"></i>Customers</div>
                        <div style="color:#9ca3af;font-size:.62rem">List</div>
                        <div style="height:8px;background:#f3f4f6;border-radius:3px;margin-top:4px"></div>
                        <div style="height:8px;background:#f3f4f6;border-radius:3px;margin-top:2px;width:70%"></div>
                    </div>
                    <div class="m-card" style="left:1%;top:76%">
                        <div class="mc-title"><i class="bi bi-telephone me-1 text-secondary"></i>Supplier Calls</div>
                        <div style="color:#9ca3af;font-size:.62rem">Follow up with finance team</div>
                        <div style="color:#9ca3af;font-size:.62rem">Check stock levels</div>
                    </div>
                    <div class="m-card" style="left:37%;top:1%">
                        <div class="mc-title" style="font-size:.65rem"><span class="badge bg-accent me-1" style="font-size:.52rem;padding:2px 4px">xlsx</span>Orders_Sep.xlsx</div>
                        <div style="height:6px;background:#f3f4f6;border-radius:2px;margin-top:4px"></div>
                        <div style="height:6px;background:#f3f4f6;border-radius:2px;margin-top:3px;width:75%"></div>
                        <div style="height:6px;background:#f3f4f6;border-radius:2px;margin-top:3px;width:50%"></div>
                    </div>
                    <div class="hub-card">
                        <div class="fw-black text-accent" style="font-size:2rem;line-height:1">B</div>
                        <div class="fw-bold" style="font-size:.75rem;color:#111">BEGIN360</div>
                        <div class="text-secondary" style="font-size:.58rem">Your Business, Connected</div>
                    </div>
                    <div class="m-card" style="right:1%;top:4%">
                        <div class="mc-title"><i class="bi bi-box me-1 text-secondary"></i>Inventory</div>
                        <div class="mc-row"><span>Product A</span><span>12</span></div>
                        <div class="mc-row"><span>Product B</span><span>7</span></div>
                        <div class="mc-row"><span>Product C</span><span>3</span></div>
                        <div class="mc-row"><span>Product D</span><span>25</span></div>
                    </div>
                    <div class="m-card" style="right:1%;top:41%">
                        <div class="mc-title"><i class="bi bi-file-text me-1 text-secondary"></i>Pricing List</div>
                        <div style="color:#9ca3af;font-size:.62rem">Doc…ument</div>
                        <div style="height:6px;background:#f3f4f6;border-radius:2px;margin-top:4px"></div>
                    </div>
                    <div class="m-card" style="right:1%;top:76%">
                        <div class="mc-title"><i class="bi bi-currency-dollar me-1 text-secondary"></i>Accounting</div>
                        <div style="color:#9ca3af;font-size:.62rem">Unreconciled transactions</div>
                        <div style="color:#9ca3af;font-size:.62rem">Manual entries pending</div>
                    </div>
                    <div class="m-card" style="left:37%;bottom:1%">
                        <div class="mc-title"><i class="bi bi-database me-1 text-secondary"></i>Legacy System</div>
                        <div style="height:6px;background:#f3f4f6;border-radius:2px;margin-top:4px"></div>
                        <div style="height:6px;background:#f3f4f6;border-radius:2px;margin-top:3px;width:60%"></div>
                    </div>
                    <div class="s-note" style="left:37%;bottom:20%;transform:rotate(1.8deg)">
                        No more<br>disconnected<br>systems
                        <div style="width:38px;height:2px;background:#92400e;margin-top:5px"></div>
                    </div>
                    </div>


                    <div class="diag-panel" id="diag-2">
                    <svg style="position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:1" viewBox="0 0 600 400" preserveAspectRatio="none">
                        <circle cx="140" cy="72"  r="5" fill="var(--accent)"/>
                        <circle cx="140" cy="195" r="5" fill="var(--accent)"/>
                        <circle cx="140" cy="318" r="5" fill="var(--accent)"/>
                        <circle cx="295" cy="58"  r="5" fill="var(--accent)"/>
                        <circle cx="460" cy="72"  r="5" fill="var(--accent)"/>
                        <circle cx="460" cy="195" r="5" fill="var(--accent)"/>
                        <circle cx="460" cy="318" r="5" fill="var(--accent)"/>
                        <circle cx="300" cy="345" r="5" fill="var(--accent)"/>
                        <line x1="140" y1="72"  x2="282" y2="192" stroke="var(--accent)" stroke-width="2"/>
                        <line x1="140" y1="195" x2="282" y2="197" stroke="var(--accent)" stroke-width="2"/>
                        <line x1="140" y1="318" x2="282" y2="204" stroke="var(--accent)" stroke-width="2"/>
                        <line x1="295" y1="58"  x2="300" y2="175" stroke="var(--accent)" stroke-width="2"/>
                        <line x1="460" y1="72"  x2="322" y2="187" stroke="var(--accent)" stroke-width="2"/>
                        <line x1="460" y1="195" x2="322" y2="197" stroke="var(--accent)" stroke-width="2"/>
                        <line x1="460" y1="318" x2="322" y2="204" stroke="var(--accent)" stroke-width="2"/>
                        <line x1="300" y1="345" x2="300" y2="218" stroke="var(--accent)" stroke-width="2"/>
                    </svg>
                    <div class="m-card lit" style="left:1%;top:4%">
                        <div class="mc-title"><i class="bi bi-envelope me-1 text-accent"></i>Inbox <span class="badge bg-accent-light text-accent ms-1" style="font-size:.55rem">12</span></div>
                        <div style="color:#6b7280;font-size:.62rem">New order from ABC Co.</div>
                        <div style="color:#6b7280;font-size:.62rem">PO #77981</div>
                        <div style="color:#6b7280;font-size:.62rem">Re: Invoice</div>
                    </div>
                    <div class="m-card lit" style="left:1%;top:41%">
                        <div class="mc-title"><i class="bi bi-people me-1 text-accent"></i>Customers</div>
                        <div style="color:#6b7280;font-size:.62rem">List</div>
                        <div style="height:8px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:3px;margin-top:4px"></div>
                        <div style="height:8px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:3px;margin-top:2px;width:70%"></div>
                    </div>
                    <div class="m-card lit" style="left:1%;top:76%">
                        <div class="mc-title"><i class="bi bi-telephone me-1 text-accent"></i>Supplier Calls</div>
                        <div style="color:#6b7280;font-size:.62rem">Follow up with finance team</div>
                        <div style="color:#6b7280;font-size:.62rem">Check stock levels</div>
                    </div>
                    <div class="m-card lit" style="left:37%;top:1%">
                        <div class="mc-title" style="font-size:.65rem"><span class="badge bg-accent me-1" style="font-size:.52rem;padding:2px 4px">xlsx</span>Orders_Sep.xlsx</div>
                        <div style="height:6px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:2px;margin-top:4px"></div>
                        <div style="height:6px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:2px;margin-top:3px;width:75%"></div>
                        <div style="height:6px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:2px;margin-top:3px;width:50%"></div>
                    </div>
                    <div class="hub-card">
                        <div class="fw-black text-accent" style="font-size:2rem;line-height:1">B</div>
                        <div class="fw-bold" style="font-size:.75rem;color:#111">BEGIN360</div>
                        <div class="text-secondary" style="font-size:.58rem">Your Business, Connected</div>
                    </div>
                    <div class="m-card lit" style="right:1%;top:4%">
                        <div class="mc-title"><i class="bi bi-box me-1 text-accent"></i>Inventory</div>
                        <div class="mc-row"><span>Product A</span><span class="text-accent fw-semibold">12</span></div>
                        <div class="mc-row"><span>Product B</span><span class="text-accent fw-semibold">7</span></div>
                        <div class="mc-row"><span>Product C</span><span class="text-accent fw-semibold">3</span></div>
                        <div class="mc-row"><span>Product D</span><span class="text-accent fw-semibold">25</span></div>
                    </div>
                    <div class="m-card lit" style="right:1%;top:41%">
                        <div class="mc-title"><i class="bi bi-file-text me-1 text-accent"></i>Pricing List</div>
                        <div style="color:#6b7280;font-size:.62rem">Doc…ument</div>
                        <div style="height:6px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:2px;margin-top:4px"></div>
                    </div>
                    <div class="m-card lit" style="right:1%;top:76%">
                        <div class="mc-title"><i class="bi bi-currency-dollar me-1 text-accent"></i>Accounting</div>
                        <div style="color:#6b7280;font-size:.62rem">Unreconciled transactions</div>
                        <div style="color:#6b7280;font-size:.62rem">Manual entries pending</div>
                    </div>
                    <div class="m-card lit" style="left:37%;bottom:1%">
                        <div class="mc-title"><i class="bi bi-database me-1 text-accent"></i>Legacy System</div>
                        <div style="height:6px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:2px;margin-top:4px"></div>
                        <div style="height:6px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:2px;margin-top:3px;width:60%"></div>
                    </div>
                    <div class="s-note" style="right:1%;top:22%;transform:rotate(-2deg)">
                        Now<br>everything is<br>connected in<br>one place
                        <div style="width:38px;height:2px;background:#92400e;margin-top:5px"></div>
                    </div>
                    </div>
                    <div class="diag-panel" id="diag-3">
                    <svg style="position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:1" viewBox="0 0 600 400" preserveAspectRatio="none">
                        <circle cx="140" cy="72"  r="5" fill="var(--accent)"/>
                        <circle cx="140" cy="195" r="5" fill="var(--accent)"/>
                        <circle cx="140" cy="318" r="5" fill="var(--accent)"/>
                        <circle cx="295" cy="58"  r="5" fill="var(--accent)"/>
                        <circle cx="460" cy="72"  r="5" fill="var(--accent)"/>
                        <circle cx="460" cy="195" r="5" fill="var(--accent)"/>
                        <circle cx="460" cy="318" r="5" fill="var(--accent)"/>
                        <circle cx="300" cy="345" r="5" fill="var(--accent)"/>
                        <line x1="140" y1="72"  x2="282" y2="192" stroke="var(--accent)" stroke-width="2.5"/>
                        <line x1="140" y1="195" x2="282" y2="197" stroke="var(--accent)" stroke-width="2.5"/>
                        <line x1="140" y1="318" x2="282" y2="204" stroke="var(--accent)" stroke-width="2.5"/>
                        <line x1="295" y1="58"  x2="300" y2="175" stroke="var(--accent)" stroke-width="2.5"/>
                        <line x1="460" y1="72"  x2="322" y2="187" stroke="var(--accent)" stroke-width="2.5"/>
                        <line x1="460" y1="195" x2="322" y2="197" stroke="var(--accent)" stroke-width="2.5"/>
                        <line x1="460" y1="318" x2="322" y2="204" stroke="var(--accent)" stroke-width="2.5"/>
                        <line x1="300" y1="345" x2="300" y2="218" stroke="var(--accent)" stroke-width="2.5"/>
                        <polygon points="196,162 184,154 184,170" fill="var(--accent)"/>
                        <polygon points="415,162 403,154 403,170" fill="var(--accent)"/>
                        <polygon points="300,110 292,122 308,122" fill="var(--accent)"/>
                        <polygon points="300,302 292,290 308,290" fill="var(--accent)"/>
                    </svg>
                    <div class="m-card lit" style="left:1%;top:4%">
                        <div class="mc-title"><i class="bi bi-envelope me-1 text-accent"></i>Inbox</div>
                        <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ Auto-routing active</div>
                        <div style="color:#6b7280;font-size:.6rem">0 manual sorts needed</div>
                    </div>
                    <div class="m-card lit" style="left:1%;top:41%">
                        <div class="mc-title"><i class="bi bi-people me-1 text-accent"></i>Customers</div>
                        <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ CRM sync: Live</div>
                    </div>
                    <div class="m-card lit" style="left:1%;top:76%">
                        <div class="mc-title"><i class="bi bi-telephone me-1 text-accent"></i>Supplier Calls</div>
                        <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ Scheduled automatically</div>
                    </div>
                    <div class="m-card lit" style="left:37%;top:1%">
                        <div class="mc-title" style="font-size:.65rem"><span class="badge bg-accent me-1" style="font-size:.52rem;padding:2px 4px">xlsx</span>Orders_Sep.xlsx</div>
                        <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ Auto-imported daily</div>
                    </div>
                    <div class="hub-card">
                        <div class="fw-black text-accent" style="font-size:2rem;line-height:1">B</div>
                        <div class="fw-bold" style="font-size:.75rem;color:#111">BEGIN360</div>
                        <div class="text-accent fw-semibold" style="font-size:.6rem">⚡ Workflows Running</div>
                    </div>
                    <div class="m-card lit" style="right:1%;top:4%">
                        <div class="mc-title"><i class="bi bi-box me-1 text-accent"></i>Inventory</div>
                        <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ Auto-reorder: On</div>
                        <div style="color:#6b7280;font-size:.6rem">Low stock alerts active</div>
                    </div>
                    <div class="m-card lit" style="right:1%;top:41%">
                        <div class="mc-title"><i class="bi bi-file-text me-1 text-accent"></i>Pricing List</div>
                        <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ Dynamic pricing on</div>
                    </div>
                    <div class="m-card lit" style="right:1%;top:76%">
                        <div class="mc-title"><i class="bi bi-currency-dollar me-1 text-accent"></i>Accounting</div>
                        <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ Auto-reconcile active</div>
                    </div>
                    <div class="m-card lit" style="left:37%;bottom:1%">
                        <div class="mc-title"><i class="bi bi-database me-1 text-accent"></i>Legacy System</div>
                        <div class="text-accent" style="font-size:.62rem;font-weight:600">↻ Syncing every 5 min</div>
                    </div>
                    <div class="s-note" style="right:1%;top:22%;transform:rotate(-1.5deg)">
                        Manual work?<br>Eliminated.<br>⚡ All automated
                    </div>
                    </div>
                    <div class="diag-panel" id="diag-4">
                    <svg style="position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:1" viewBox="0 0 600 400" preserveAspectRatio="none">
                        <circle cx="140" cy="72"  r="5" fill="var(--accent)"/>
                        <circle cx="140" cy="195" r="5" fill="var(--accent)"/>
                        <circle cx="140" cy="318" r="5" fill="var(--accent)"/>
                        <circle cx="295" cy="58"  r="5" fill="var(--accent)"/>
                        <circle cx="460" cy="72"  r="5" fill="var(--accent)"/>
                        <circle cx="460" cy="195" r="5" fill="var(--accent)"/>
                        <circle cx="460" cy="318" r="5" fill="var(--accent)"/>
                        <circle cx="300" cy="345" r="5" fill="var(--accent)"/>
                        <line x1="140" y1="72"  x2="282" y2="192" stroke="var(--accent)" stroke-width="2"/>
                        <line x1="140" y1="195" x2="282" y2="197" stroke="var(--accent)" stroke-width="2"/>
                        <line x1="140" y1="318" x2="282" y2="204" stroke="var(--accent)" stroke-width="2"/>
                        <line x1="295" y1="58"  x2="300" y2="175" stroke="var(--accent)" stroke-width="2"/>
                        <line x1="460" y1="72"  x2="322" y2="187" stroke="var(--accent)" stroke-width="2"/>
                        <line x1="460" y1="195" x2="322" y2="197" stroke="var(--accent)" stroke-width="2"/>
                        <line x1="460" y1="318" x2="322" y2="204" stroke="var(--accent)" stroke-width="2"/>
                        <line x1="300" y1="345" x2="300" y2="218" stroke="var(--accent)" stroke-width="2"/>
                    </svg>
                    <div class="m-card lit" style="left:1%;top:4%">
                        <div class="mc-title"><i class="bi bi-envelope me-1 text-accent"></i>Inbox</div>
                        <div style="display:flex;align-items:center;gap:4px">
                        <span class="badge bg-accent-light text-accent" style="font-size:.58rem">+32%</span>
                        <span style="color:#6b7280;font-size:.6rem">response rate</span>
                        </div>
                    </div>
                    <div class="m-card lit" style="left:1%;top:41%">
                        <div class="mc-title"><i class="bi bi-people me-1 text-accent"></i>Customers</div>
                        <div style="display:flex;align-items:center;gap:4px">
                        <span class="badge bg-accent-light text-accent" style="font-size:.58rem">+18%</span>
                        <span style="color:#6b7280;font-size:.6rem">retention</span>
                        </div>
                    </div>
                    <div class="m-card lit" style="left:1%;top:76%">
                        <div class="mc-title"><i class="bi bi-telephone me-1 text-accent"></i>Supplier Calls</div>
                        <div class="text-accent fw-semibold" style="font-size:.62rem">−40% call time</div>
                    </div>
                    <div class="m-card lit" style="left:37%;top:1%">
                        <div class="mc-title" style="font-size:.65rem"><span class="badge bg-accent me-1" style="font-size:.52rem">xlsx</span>Orders_Sep.xlsx</div>
                        <div class="text-accent fw-semibold" style="font-size:.62rem">↑ 24% order volume</div>
                    </div>
                    <div class="hub-card">
                        <div class="fw-black text-accent" style="font-size:1.4rem;line-height:1;margin-bottom:4px">B</div>
                        <div class="fw-bold" style="font-size:.72rem;color:#111;margin-bottom:6px">BEGIN360</div>
                        <div style="display:flex;align-items:flex-end;gap:3px;justify-content:center;height:22px;margin-bottom:4px">
                        <div style="width:9px;background:#bbf7d0;border-radius:2px 2px 0 0;height:40%"></div>
                        <div style="width:9px;background:#86efac;border-radius:2px 2px 0 0;height:60%"></div>
                        <div style="width:9px;background:#4ade80;border-radius:2px 2px 0 0;height:80%"></div>
                        <div style="width:9px;background:var(--accent);border-radius:2px 2px 0 0;height:100%"></div>
                        </div>
                        <div class="text-accent fw-semibold" style="font-size:.58rem">Real-time insights ✓</div>
                    </div>
                    <div class="m-card lit" style="right:1%;top:4%">
                        <div class="mc-title"><i class="bi bi-box me-1 text-accent"></i>Inventory</div>
                        <div class="text-accent fw-semibold" style="font-size:.62rem">Zero stockouts</div>
                        <div style="color:#6b7280;font-size:.6rem">Optimised levels</div>
                    </div>
                    <div class="m-card lit" style="right:1%;top:41%">
                        <div class="mc-title"><i class="bi bi-file-text me-1 text-accent"></i>Pricing List</div>
                        <div class="text-accent fw-semibold" style="font-size:.62rem">+12% margin</div>
                    </div>
                    <div class="m-card lit" style="right:1%;top:76%">
                        <div class="mc-title"><i class="bi bi-currency-dollar me-1 text-accent"></i>Accounting</div>
                        <div class="text-accent fw-semibold" style="font-size:.62rem">100% reconciled</div>
                    </div>
                    <div class="m-card lit" style="left:37%;bottom:1%">
                        <div class="mc-title"><i class="bi bi-database me-1 text-accent"></i>Legacy System</div>
                        <div class="text-accent" style="font-size:.62rem">Fully integrated ✓</div>
                    </div>
                    <div class="s-note" style="right:1%;top:22%;transform:rotate(-1deg);background:#d1fae5">
                        Real results.<br>Real clarity.<br>Every day. 📈
                    </div>
                    </div>

                </div>
                </div>

                <div class="col-12 col-lg-5">
                <div id="steps-list">
                    <div class="step-wrap" id="step-1">
                    <div class="step-vline" id="vline-1"></div>
                    <div class="step-dot" id="dot-1">1</div>
                    <div class="step-lbl" id="lbl-1">Map</div>
                    <div class="step-body" id="body-1">
                        <h6 class="fw-bold mt-3 fs-3">We understand how your business works today.</h6>
                        <p class="text-secondary mb-3 fs-6"> We start by mapping your people, processes, tools and data to see the full picture — across every department and system.</p>
                        <div class="rounded-3 p-2 d-flex align-items-center gap-2 bg-accent-light" style="border:1px solid rgba(34,197,94,.25)">
                        <i class="fa-regular fa-lightbulb text-accent flex-shrink-0 fs-2"></i>
                        <div>
                            <div class="fw-semibold fs-5">Clarity and Insights</div>
                            <div class="text-secondary fs-6">Clarity on what you have, Insights on whats missing, A Clear path forward.</div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="step-wrap" id="step-2">
                    <div class="step-vline" id="vline-2"></div>
                    <div class="step-dot" id="dot-2">2</div>
                    <div class="step-lbl" id="lbl-2">Connect</div>
                    <div class="step-body" id="body-2">
                        <h6 class="fw-bold mt-3 fs-3">We bring everything together into one connected flow.</h6>
                        <p class="text-secondary mb-3 fs-6">We connect your systems, teams, and data so information flows seamlessly across your business.</p>
                        <div class="rounded-3 p-2 d-flex align-items-center gap-2 bg-accent-light" style="border:1px solid rgba(34,197,94,.25)">
                        <i class="fa-solid fa-paperclip  text-accent flex-shrink-0 fs-2"></i>
                        <div>
                            <div class="fw-semibold fs-5">One source of truth.</div>
                            <div class="text-secondary fs-6">No silos. No duplication. Everything in sync.</div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="step-wrap" id="step-3">
                    <div class="step-vline" id="vline-3"></div>
                    <div class="step-dot" id="dot-3">3</div>
                    <div class="step-lbl" id="lbl-3">Automate</div>
                    <div class="step-body" id="body-3">
                        <h6 class="fw-bold mt-3 fs-3">We automate workflows and eliminate manual work.</h6>
                        <p class="text-secondary mb-3 fs-6">Repetitive tasks, data entry, and manual hand-offs are replaced with intelligent automated workflows that run 24/7 — no human intervention needed.</p>
                        <div class="rounded-3 p-2 d-flex align-items-center gap-2 bg-accent-light" style="border:1px solid rgba(34,197,94,.25)">
                        <i class="fa-solid fa-gear  text-accent flex-shrink-0 fs-2"></i>
                        <div>
                            <div class="fw-semibold fs-5">Workflow Automated</div>
                            <div class="text-secondary fs-6">Approval Streamlined.</div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="step-wrap" id="step-4">
                    <div class="step-dot" id="dot-4">4</div>
                    <div class="step-lbl" id="lbl-4">Optimise</div>
                    <div class="step-body" id="body-4">
                        <h6 class="fw-bold mt-3 fs-3">You get real-time insights to make better decisions.</h6>
                        <p class="text-secondary mb-3 fs-6">With everything connected and automated, you get clear visibility into your business — so you can act fast, spot opportunities, and grow with confidence.</p>
                        <div class="rounded-3 p-2 d-flex align-items-center gap-2 bg-accent-light" style="border:1px solid rgba(34,197,94,.25)">
                        <i class="fa-solid fa-chart-column  text-accent flex-shrink-0 fs-2"></i>
                        <div>
                            <div class="fw-semibold fs-5">Workflow Automated</div>
                            <div class="text-secondary fs-6">Approval Streamlined.</div>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
                </div>

            </div>

            <div class="text-center mt-2">
                <span id="scroll-hint" class="text-secondary" style="font-size:.8rem">
                <i class="bi bi-mouse2 me-1"></i> Scroll to see the transformation
                </span>
            </div>

            </div>
        </div>
    </div>
    <section class="py-0 border-top border-bottom border-light-subtle">
        <div class="container-fluid px-0">
            <div class="bg-black w-100 position-relative overflow-hidden">
                
                <div class="row g-0 align-items-center">
                    
                    <div class="col-xl-8 col-lg-7 p-5 p-md-5 ps-xl-5">
                        <div class="py-lg-5 ps-xl-4">
                            <p class="text-accent fw-bold text-uppercase tracking-widest mb-3">
                                Next-Level Efficiency
                            </p>
                            <h2 class="display-3 fw-800 text-white text-uppercase mb-4" style="letter-spacing: -1px;">
                                The Future of <span class="text-accent">Business Operations</span> is Here.
                            </h2>
                            <p class="lead text-secondary fw-semibold mb-0" style="max-width: 700px;">
                                Transition from fragmented workflows to a unified corporate ecosystem designed for scale.
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5 bg-accent p-5 p-md-5 d-flex align-items-center justify-content-center">
                        <div class="text-center text-lg-start w-100 py-lg-5">
                            <h3 class="text-white fw-black text-uppercase mb-4">Ready to Integrate?</h3>
                            <div class="d-grid gap-3">
                                <a href="#" class="btn btn-dark btn-lg rounded-pill py-3 fw-black text-uppercase shadow-lg border-0">
                                    Contact Our Team <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path d="M7 17L17 7M17 7H7M17 7V17"/>
                            </svg>
                                </a>
                                <a href="#" class="btn btn-light btn-lg rounded-pill py-3 fw-black text-uppercase border-2">
                                    Book a Demo
                                </a>
                            </div>
                            <p class="text-white-50 mt-4 small text-uppercase fw-bold mb-0">
                                <i class="fa-solid fa-lock me-2"></i> Secure Corporate API Access Included
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-body-tertiary">
        <div class="container py-lg-5">
            <div class="row g-5 align-items-center">
                
                <!-- Left Side: Content -->
                <div class="col-lg-5 text-center text-md-start">
                    <div class="mb-4">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-3">
                            <div class="border-top border-accent border-2" style="width: 20px;"></div>
                            <span class="text-accent fw-bold px-2 small tracking-widest text-uppercase">Let's Get Started</span>
                            <div class="border-top border-accent border-2" style="width: 20px;"></div>
                        </div>
                        <h2 class="display-4 fw-black text-body text-uppercase mb-4" style="line-height: 1.1;">
                            Ready to bring your business onto <span class="text-accent">one system?</span>
                        </h2>
                        <p class="lead text-secondary mb-5">
                            In 30 minutes, we'll understand your business, map your processes, and show how a modern ERP can bring everything together.
                        </p>
                    </div>

                    <!-- Action Button -->
                    <div class="mb-5">
                        <a href="#" class="btn btn-accent btn-lg rounded-pill px-4 py-3 fw-black text-uppercase shadow-lg d-inline-flex align-items-center transition-up">
                            <i class="fa-regular fa-calendar-check me-3 fs-4"></i>
                            Book a 30-min walkthrough
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="row g-3 justify-content-center justify-content-md-start">
                        <div class="col-auto">
                            <div class="d-flex align-items-center text-secondary small fw-bold text-uppercase">
                                <i class="fa-solid fa-circle-check text-accent me-2"></i> No Pressure
                            </div>
                        </div>
                        <div class="col-auto px-3 border-start border-light-subtle">
                            <div class="d-flex align-items-center text-secondary small fw-bold text-uppercase">
                                <i class="fa-regular fa-clock text-accent me-2"></i> 30 Minutes
                            </div>
                        </div>
                        <div class="col-auto px-3 border-start border-light-subtle">
                            <div class="d-flex align-items-center text-secondary small fw-bold text-uppercase">
                                <i class="fa-solid fa-wand-magic-sparkles text-accent me-2"></i> Tailored
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: The Trendy Dashboard Mockup -->
                <div class="col-lg-7">
                    <div class="position-relative">
                        <!-- Subtle Glow Backdrop -->
                        <div class="position-absolute top-50 start-50 translate-middle bg-accent opacity-10 rounded-circle blur-3xl" style="width: 400px; height: 400px; filter: blur(80px);"></div>
                        
                        <!-- Dashboard Frame -->
                        <div class="card border-0 shadow-2xl bg-body rounded-5 overflow-hidden position-relative">
                            <div class="row g-0">
                                <!-- Sidebar Mini -->
                                <div class="col-auto bg-black border-end border-light-subtle d-none d-sm-flex flex-column p-3 gap-4">
                                    <div class="text-accent mb-2 px-1"><img src="assets/images/symbol-light.png" alt="Begin360" class="nav-logo-img" style="max-width:20px;"></div>
                                    <i class="fa-solid fa-house-chimney text-white small"></i>
                                    <i class="fa-solid fa-box text-white small"></i>
                                    <i class="fa-solid fa-users text-white small"></i>
                                    <i class="fa-solid fa-chart-pie text-accent small"></i>
                                    <div class="mt-auto"><i class="fa-solid fa-gear text-white small"></i></div>
                                </div>
                                
                                <!-- Dashboard Content -->
                                <div class="col p-4 p-md-5 bg-body">
                                    <!-- Top Stats -->
                                    <div class="row g-3 mb-4">
                                        <div class="col-6">
                                            <div class="bg-body p-3 rounded-4 shadow-sm border border-light-subtle">
                                                <span class="text-muted x-small fw-bold text-uppercase">Sales (MTD)</span>
                                                <h4 class="fw-black mb-1 text-body">$32,680</h4>
                                                <span class="text-accent small fw-bold"><i class="fa-solid fa-arrow-up me-1"></i>18%</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-body p-3 rounded-4 shadow-sm border border-light-subtle">
                                                <span class="text-muted x-small fw-bold text-uppercase">Orders</span>
                                                <h4 class="fw-black mb-1 text-body">142</h4>
                                                <span class="text-accent small fw-bold"><i class="fa-solid fa-arrow-up me-1"></i>12%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Chart Mockup Area -->
                                    <div class="bg-body p-4 rounded-4 shadow-sm border border-light-subtle">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h6 class="fw-black text-uppercase m-0 small">Cash Flow</h6>
                                            <span class="badge bg-light text-dark border rounded-pill px-3">This Month</span>
                                        </div>
                                        <div style="height: 150px; background: linear-gradient(180deg, rgba(var(--accent-rgb), 0.1) 0%, transparent 100%);" class="rounded-3 position-relative overflow-hidden">
                                            <!-- SVG Wave Line -->
                                            <svg class="position-absolute bottom-0 w-100" viewBox="0 0 400 100" preserveAspectRatio="none">
                                                <path d="M0,80 C50,70 80,40 120,50 C160,60 200,20 250,30 C300,40 350,10 400,20 L400,100 L0,100 Z" fill="rgba(var(--accent-rgb), 0.2)"></path>
                                                <path d="M0,80 C50,70 80,40 120,50 C160,60 200,20 250,30 C300,40 350,10 400,20" fill="none" stroke="currentColor" class="text-accent" stroke-width="3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-body">
        <div class="container-fluid py-lg-5">
            <div class="row g-4">
                
                <!-- Card 1: Help Me Choose (bg-body-tertiary) -->
                <div class="col-md-6">
                    <div class="card h-100 border-0 rounded-5 bg-body-tertiary p-4 p-lg-5 position-relative shadow-sm overflow-hidden min-vh-50 d-flex flex-column justify-content-between">
                        
                        <!-- Top Row: Title and Button -->
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start mb-5">
                            <h2 class="display-4 fw-black text-body text-uppercase mb-3 mb-md-0 w-75" style="letter-spacing: -1px; line-height: 1;">
                                Unsure which <br><span class="text-accent">service fits?</span>
                            </h2>
                            <a href="#" class="btn btn-accent rounded-pill px-3 py-2 fw-bold small text-uppercase shadow-sm border-0 d-flex align-items-center">
                                Help me choose <i class="fa-solid fa-arrow-up-right-from-square ms-2 x-small"></i>
                            </a>
                        </div>

                        <!-- Bottom Row: Subtext -->
                        <div class="mt-auto">
                            <p class="h5 fw-bold text-secondary  mb-0 w-75">
                                Answer three questions and we'll point you to the right starting place.
                            </p>
                        </div>

                        <!-- Decorative background element -->
                        <div class="position-absolute bottom-0 end-0 opacity-10 p-4">
                            <i class="fa-solid fa-circle-question display-1"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Business Fit (bg-accent) -->
                <div class="col-md-6">
                    <div class="card h-100 border-0 rounded-5 bg-accent p-4 p-lg-5 position-relative shadow-lg overflow-hidden min-vh-50 d-flex flex-column justify-content-between">
                        
                        <!-- Top Row: Title and Button -->
                        <div class="d-flex justify-content-between align-items-start flex-column flex-md-row mb-5">
                            <h2 class="display-4 fw-black text-white text-uppercase mb-3 mb-md-0 w-75" style="letter-spacing: -1px; line-height: 1;">
                                Take our business <br>fit assessment
                            </h2>
                            <a href="#" class="btn btn-white-glass rounded-pill px-3 py-2 fw-bold small text-uppercase shadow-sm border-0 d-flex align-items-center">
                                Take the quiz <i class="fa-solid fa-arrow-up-right-from-square ms-2 x-small"></i>
                            </a>
                        </div>

                        <!-- Bottom Row: Subtext -->
                        <div class="mt-auto">
                            <p class="h5 fw-bold text-white text-uppercase mb-0 w-75">
                                Learn where your business ranks among our corporate fit models.
                            </p>
                        </div>

                        <!-- Decorative background element -->
                        <div class="position-absolute bottom-0 end-0 opacity-20 p-4">
                            <i class="fa-solid fa-chart-simple display-1 text-white"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="py-5 bg-body custom-faq">
        <div class="container py-lg-5">
            <div class="row g-5">
                
                <!-- Left Sidebar: CTA Card -->
                <!-- UPDATED STICKY SIDEBAR COLUMN -->
                <div class="col-lg-4">
                    <!-- 
                        'align-self-start' is crucial here; it prevents the column 
                        from stretching to the full height of the row, allowing 
                        the sticky behavior to trigger.
                    -->
                    <div class="card border-0 bg-body p-4 p-xl-5 border border-light-subtle position-sticky align-self-start" 
                        style="top: 6rem; z-index: 10;">
                        
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <h2 class="display-5 fw-black text-body text-uppercase mb-0" style="line-height: 1;">
                                STILL HAVE<br>QUESTIONS?
                            </h2>
                            
                            <!-- PERFECT CIRCLE ELEMENT -->
                            <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 ms-3" 
                                style="width: 44px; height: 44px; aspect-ratio: 1 / 1;">
                                <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 0.8rem;"></i>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="bg-accent me-2" style="width: 8px; height: 8px;"></div>
                            <p class="text-secondary fw-bold text-uppercase small mb-0">WE'RE HERE TO HELP YOU.</p>
                        </div>
                        
                        <!-- Optional: Added a quick contact button for better utility in a long list -->
                        <hr class="my-4 opacity-10">
                        <a href="#" class="btn btn-outline-dark fw-black text-uppercase w-100 rounded-pill py-2 small">
                            Contact Support
                        </a>
                    </div>
                </div>
                <!-- Right Side: Accordion -->
                <div class="col-lg-8">
                    <div class="accordion accordion-flush custom-faq-accent" id="faqCorporate">
                        
                        <!-- Item 1 (Active) -->
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-black text-uppercase py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    WHAT SERVICES DO YOU OFFER?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqCorporate">
                                <div class="accordion-body fw-bold pb-4 px-4 pt-0">
                                    WE OFFER A RANGE OF SERVICES INCLUDING CRM CONSULTING, OPTIMIZATION, AND BESPOKE MARKETING SOLUTIONS. OUR PACKAGES ARE DESIGNED TO CATER TO VARIOUS BUSINESS NEEDS, FROM ENTRY-LEVEL SUPPORT TO COMPREHENSIVE REVENUE OPERATIONS LEADERSHIP. EACH SERVICE IS TAILORED TO HELP YOU ACHIEVE YOUR GROWTH OBJECTIVES.
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-black text-uppercase py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    HOW DO ENGAGEMENTS GET STARTED?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqCorporate">
                                <div class="accordion-body fw-bold pb-4 px-4 pt-0">
                                    OUR PROCESS BEGINS WITH A COMPREHENSIVE AUDIT OF YOUR EXISTING WORKFLOWS TO IDENTIFY BOTTLENECKS AND OPPORTUNITIES FOR AUTOMATION.
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-black text-uppercase py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    DO YOU OFFER ONGOING SUPPORT?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqCorporate">
                                <div class="accordion-body fw-bold pb-4 px-4 pt-0">
                                    YES, WE PROVIDE DEDICATED POST-INTEGRATION SUPPORT AND CONTINUOUS OPTIMIZATION TO ENSURE YOUR SYSTEMS SCALE WITH YOUR BUSINESS.
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-black text-uppercase py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    WHERE DO YOU TYPICALLY BEGIN?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqCorporate">
                                <div class="accordion-body fw-bold pb-4 px-4 pt-0">
                                    WE USUALLY START AT THE CORE OF YOUR DATA ARCHITECTURE TO ENSURE THE FOUNDATION IS SECURE BEFORE LAYERING ADVANCED AUTOMATION.
                                </div>
                            </div>
                        </div>
                        <!-- ADDITIONAL 10 FAQ ITEMS -->
                        <!-- Item 6: Implementation Timeline -->
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-black text-uppercase py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                    WHAT IS THE TYPICAL IMPLEMENTATION TIMELINE?
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqCorporate">
                                <div class="accordion-body fw-bold pb-4 px-4 pt-0">
                                    WHILE COMPLEXITY VARIES, MOST CORPORATE INTEGRATIONS ARE COMPLETED WITHIN 8 TO 12 WEEKS. WE PROVIDE A DETAILED PROJECT ROADMAP DURING THE INITIAL DISCOVERY PHASE TO ENSURE FULL TRANSPARENCY.
                                </div>
                            </div>
                        </div>

                        <!-- Item 7: Data Security -->
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-black text-uppercase py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                                    HOW DO YOU HANDLE DATA SECURITY AND PRIVACY?
                                </button>
                            </h2>
                            <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqCorporate">
                                <div class="accordion-body fw-bold pb-4 px-4 pt-0">
                                    SECURITY IS OUR PRIMARY DIRECTIVE. WE UTILIZE ENTERPRISE-GRADE ENCRYPTION AND COMPLY WITH ALL GLOBAL DATA PRIVACY STANDARDS TO ENSURE YOUR CORPORATE INTELLECTUAL PROPERTY REMAINS PROTECTED.
                                </div>
                            </div>
                        </div>

                        <!-- Item 8: Custom API Development -->
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-black text-uppercase py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                                    DO YOU PROVIDE CUSTOM API DEVELOPMENT?
                                </button>
                            </h2>
                            <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqCorporate">
                                <div class="accordion-body fw-bold pb-4 px-4 pt-0">
                                    YES. OUR ENGINEERING TEAM SPECIALIZES IN BUILDING CUSTOM MIDDLEWARE AND API CONNECTORS TO ENSURE SEAMLESS DATA FLOW BETWEEN YOUR LEGACY SYSTEMS AND MODERN STACKS.
                                </div>
                            </div>
                        </div>

                        <!-- Item 9: ROI Measurement -->
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-black text-uppercase py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq9">
                                    HOW IS THE SUCCESS OF AN ENGAGEMENT MEASURED?
                                </button>
                            </h2>
                            <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqCorporate">
                                <div class="accordion-body fw-bold pb-4 px-4 pt-0">
                                    WE DEFINE SPECIFIC KEY PERFORMANCE INDICATORS (KPIS) AT THE ONSET, FOCUSING ON OPERATIONAL EFFICIENCY, COST REDUCTION, AND REVENUE GROWTH METRICS TO TRACK TANGIBLE ROI.
                                </div>
                            </div>
                        </div>

                        <!-- Item 10: Pricing Structure -->
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-black text-uppercase py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq10">
                                    WHAT IS YOUR PRICING STRUCTURE?
                                </button>
                            </h2>
                            <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqCorporate">
                                <div class="accordion-body fw-bold pb-4 px-4 pt-0">
                                    WE OFFER TIERED ENGAGEMENT MODELS RANGING FROM PROJECT-BASED CONSULTING TO ONGOING RETAINERS. EACH PROPOSAL IS CUSTOM-BUILT TO MATCH YOUR SPECIFIC SCALE AND SCOPE.
                                </div>
                            </div>
                        </div>

                        <!-- Item 11: International Operations -->
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-black text-uppercase py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq11">
                                    CAN YOU SUPPORT MULTI-NATIONAL OPERATIONS?
                                </button>
                            </h2>
                            <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#faqCorporate">
                                <div class="accordion-body fw-bold pb-4 px-4 pt-0">
                                    ABSOLUTELY. OUR SYSTEMS ARE DESIGNED TO HANDLE MULTI-CURRENCY, MULTI-LANGUAGE, AND COMPLEX GLOBAL TAX COMPLIANCE REQUIREMENTS FOR INTERNATIONAL CORPORATIONS.
                                </div>
                            </div>
                        </div>

                        <!-- Item 12: Training and Onboarding -->
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-black text-uppercase py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq12">
                                    DO YOU PROVIDE INTERNAL TEAM TRAINING?
                                </button>
                            </h2>
                            <div id="faq12" class="accordion-collapse collapse" data-bs-parent="#faqCorporate">
                                <div class="accordion-body fw-bold pb-4 px-4 pt-0">
                                    WE PROVIDE COMPREHENSIVE ONBOARDING AND HANDS-ON TRAINING SESSIONS TO ENSURE YOUR TEAM IS FULLY EQUIPPED TO MANAGE AND OPERATE THE NEW ECOSYSTEM INDEPENDENTLY.
                                </div>
                            </div>
                        </div>

                        <!-- Item 13: System Scalability -->
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-black text-uppercase py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq13">
                                    HOW SCALABLE ARE YOUR SOLUTIONS?
                                </button>
                            </h2>
                            <div id="faq13" class="accordion-collapse collapse" data-bs-parent="#faqCorporate">
                                <div class="accordion-body fw-bold pb-4 px-4 pt-0">
                                    ALL ARCHITECTURES WE DEPLOY ARE BUILT WITH SCALABILITY IN MIND. AS YOUR TRANSACTION VOLUME GROWS, OUR CLOUD-NATIVE SOLUTIONS AUTO-ADAPT TO ENSURE PEAK PERFORMANCE.
                                </div>
                            </div>
                        </div>

                        <!-- Item 14: Third-Party Integrations -->
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-black text-uppercase py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq14">
                                    DO YOU WORK WITH THIRD-PARTY VENDORS?
                                </button>
                            </h2>
                            <div id="faq14" class="accordion-collapse collapse" data-bs-parent="#faqCorporate">
                                <div class="accordion-body fw-bold pb-4 px-4 pt-0">
                                    YES. WE FREQUENTLY COLLABORATE WITH EXTERNAL VENDORS AND INTERNAL IT DEPARTMENTS TO ENSURE THAT ALL INTEGRATIONS ALIGN WITH YOUR BROADER CORPORATE STRATEGY.
                                </div>
                            </div>
                        </div>

                        <!-- Item 15: Change Management -->
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-black text-uppercase py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq15">
                                    DO YOU OFFER CHANGE MANAGEMENT SERVICES?
                                </button>
                            </h2>
                            <div id="faq15" class="accordion-collapse collapse" data-bs-parent="#faqCorporate">
                                <div class="accordion-body fw-bold pb-4 px-4 pt-0">
                                    WE RECOGNIZE THAT TOOLS ARE ONLY HALF THE BATTLE. WE PROVIDE CHANGE MANAGEMENT ADVISORY TO HELP ALIGN YOUR COMPANY CULTURE WITH NEW DIGITAL PROCESSES.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
<script>
    
</script>
@endpush