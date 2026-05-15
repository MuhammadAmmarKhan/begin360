<nav class="navbar navbar-expand-lg fixed-top shadow-sm" id="mainNav">
    <div class="container-fluid px-lg-5">        
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/symbol-light.png') }}" alt="Begin360 Symbol" style="max-width:32px;" class="brand-symbol">
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navContent">            
            <ul class="ps-lg-5 navbar-nav mx-auto mb-2 mb-lg-0 align-items-center">
                <li class="ps-lg-5 nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>                
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('about*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg animate-slide-up">
                        <li><a class="dropdown-item" href="{{ url('/about/company') }}">Our Company</a></li>
                        <li><a class="dropdown-item" href="{{ url('/about/methodology') }}">Our Methodology</a></li>
                        <li><a class="dropdown-item" href="{{ url('/about/security') }}">Security & Compliance</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ url('/careers') }}">Careers</a></li>
                    </ul>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about-us*') ? 'active' : '' }}" href="{{ url('/about-us') }}">About Us</a>
                </li>
                <li class="nav-item dropdown has-mega">
                    <a class="nav-link dropdown-toggle {{ Request::is('solutions*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">
                        Solutions
                    </a>
                    <div class="dropdown-menu mega-menu-container bg-body">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-stretch">
            
            <div class="col-xl-3 border-lg-end p-4 p-lg-5 d-none d-xl-flex flex-column justify-content-between bg-light-subtle">
                <div>
                    <span class="small text-uppercase fw-bold tracking-widest mb-4 opacity-50 ls-2 d-block">
                        Solution Blueprint
                    </span>
                    <h3 class="fw-normal mb-4 ls-tight">
                        Unified Ecosystems for the Modern <span class="text-accent">Enterprise</span>
                    </h3>
                    <p class="small opacity-75 mb-5 lh-base">
                        Beyond fragmented software, we engineer natively compliant operational layers that synchronize your entire value chain.
                    </p>
                </div>

                <div class="bg-accent rounded-4 p-4 position-relative overflow-hidden shadow-sm">
                    <div class="position-relative z-1">
                        <p class="small text-black text-uppercase fw-bold mb-2 opacity-75">Ready to Scale?</p>
                        <h5 class="text-black fw-bold mb-3">Transform your infrastructure today.</h5>
                        <a href="{{ url('/contact') }}" class="btn btn-dark btn-sm rounded-pill px-4 fw-bold">
                            Get Started
                        </a>
                    </div>
                    <i class="fa-solid fa-microchip position-absolute bottom-0 end-0 m-n3 text-black opacity-10" style="font-size: 5rem; transform: rotate(-15deg);"></i>
                </div>
            </div>

            <div class="col-lg-8 col-xl-6 border-lg-end p-4 p-lg-5">
                <h6 class="small text-uppercase fw-bold mb-4 opacity-50">Modules</h6>
                <div class="row g-2">
                    @php
                        $modules = [
                            ['name' => 'Compliance & Traceability', 'icon' => 'fa-clipboard-check', 'slug' => 'compliance'],
                            ['name' => 'Contracts & Progress Claims', 'icon' => 'fa-file-signature', 'slug' => 'contracts'],
                            ['name' => 'Customer Management', 'icon' => 'fa-users-gear', 'slug' => 'crm'],
                            ['name' => 'Finance & Accounting', 'icon' => 'fa-calculator', 'slug' => 'finance'],
                            ['name' => 'Inventory Management', 'icon' => 'fa-boxes-stacked', 'slug' => 'inventory'],
                            ['name' => 'Job Management', 'icon' => 'fa-list-check', 'slug' => 'job-management'],
                            ['name' => 'Order Management', 'icon' => 'fa-cart-flatbed', 'slug' => 'orders'],
                            ['name' => 'Point of Sale', 'icon' => 'fa-cash-register', 'slug' => 'pos'],
                            ['name' => 'Procurement', 'icon' => 'fa-file-invoice-dollar', 'slug' => 'procurement'],
                            ['name' => 'Project Management', 'icon' => 'fa-diagram-project', 'slug' => 'project-management'],
                            ['name' => 'Quoting & Estimating', 'icon' => 'fa-file-lines', 'slug' => 'quoting-estimating'],
                            ['name' => 'Resource Planning', 'icon' => 'fa-calendar-check', 'slug' => 'resource-planning'],
                            ['name' => 'Scheduling & Dispatch', 'icon' => 'fa-clock-rotate-left', 'slug' => 'scheduling-dispatch'],
                            ['name' => 'Subcontractor Management', 'icon' => 'fa-user-group', 'slug' => 'subcontractor-management'],
                            ['name' => 'Time Tracking & Billing', 'icon' => 'fa-stopwatch', 'slug' => 'time-tracking'],
                            ['name' => 'Variation Management', 'icon' => 'fa-code-branch', 'slug' => 'variations'],
                            ['name' => 'Warehouse Management', 'icon' => 'fa-warehouse', 'slug' => 'warehouse-management'],
                        ];
                    @endphp

                    @foreach($modules as $module)
                        <div class="col-12 col-lg-6 col-xl-6">
                            <a class="dropdown-item d-flex align-items-center py-2 px-2 rounded-3" href="{{ url('/modules/'.$module['slug']) }}">
                                <div class="icon-box-sm border rounded-2 me-2 d-flex align-items-center justify-content-center bg-body" style="width: 35px; height: 35px; min-width: 35px;">
                                    <i class="fa-solid {{ $module['icon'] }} small"></i>
                                </div>
                                <span class="fw-medium small">{{ $module['name'] }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="mt-4">
                    <a href="{{ route('modules.index') }}" class="rounded-pill btn btn-accent fw-bold small text-decoration-none">
                        View All Modules <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-xl-3 p-4 p-lg-5">
                <h6 class="small text-uppercase fw-bold mb-4 opacity-50">Industries</h6>
                <div class="d-flex flex-column gap-1">
                    @php
                        $industries = [
                            ['name' => 'Food & Beverage','icon' => 'fa-utensils','slug' => 'food-beverage'],
                            ['name' => 'Retail','icon' => 'fa-basket-shopping','slug' => 'retail'],
                            ['name' => 'Trades & Field Services','icon' => 'fa-screwdriver-wrench','slug' => 'trades'],
                            ['name' => 'Professional Services','icon' => 'fa-briefcase','slug' => 'professional-services'],
                            ['name' => 'Construction','icon' => 'fa-helmet-safety','slug' => 'construction']
                        ];
                    @endphp

                    @foreach($industries as $industry)
                        <a class="dropdown-item d-flex align-items-center py-2 px-2 rounded-3" href="{{ url('/industries/'.$industry['slug']) }}">
                            <div class="icon-box-sm border rounded-2 me-2 d-flex align-items-center justify-content-center bg-body" style="width: 35px; height: 35px; min-width: 35px;">
                                <i class="fa-solid {{ $industry['icon'] }} small"></i>
                            </div>
                            <span class="fw-medium small">{{ $industry['name'] }}</span>
                        </a>
                    @endforeach
                </div>
                <div class="mt-4">
                    <a href="{{ route('industries.index') }}" class="rounded-pill btn btn-accent fw-bold small text-decoration-none">
                        View All Industries <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="py-3 px-4 px-lg-5 border-top d-none d-xl-flex justify-content-between align-items-center bg-body">
            <a href="{{ route('contact') }}" class="text-decoration-none text-accent fw-bold small text-uppercase tracking-wider">
                Book a demo <i class="fa fa-arrow-right ms-2"></i>
            </a>
            <div class="opacity-50 small">
                <span>{{env('COMPANY_PHONE')}}</span>
            </div>
        </div>
    </div>
</div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
            <div class="nav-actions d-flex align-items-center gap-3">
                <button class="theme-switch" id="themeToggle" aria-label="Toggle Theme">
                    <div class="switch-knob"></div>
                </button>                
                <a href="{{ route('contact') }}" class="btn-cta-group">
                    <span class="btn-cta-main">Book a Demo</span>
                    <div class="btn-cta-arrow">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                            <path d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </div>
                </a>
            </div>            
        </div>
    </div>
</nav>