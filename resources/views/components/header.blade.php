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
                            <!-- Main Content Row -->
                            <div class="row g-0 align-items-stretch">
                                
                                <div class="col-lg-3 border-lg-end p-4 p-lg-5 d-flex flex-column d-none d-xl-flex">
                                    <span class="small text-uppercase fw-bold tracking-widest mb-4 opacity-50 ls-2">
                                        Solution Blueprint
                                    </span>
                                    <h3 class="fw-normal mb-4 ls-tight">
                                        Unified Ecosystems <br> for the Modern <span class="text-accent">Enterprise</span>
                                    </h3>
                                    <p class="small opacity-75 mb-0 lh-base">
                                        Beyond fragmented software, we engineer natively compliant operational layers that synchronize your entire value chain with mathematical precision.
                                    </p>
                                </div>

                                <!-- Column 2: Modules -->
                                <div class="col-lg-6 col-xl-3 border-lg-end p-4 p-lg-5 d-flex flex-column">
                                    <h6 class="small text-uppercase fw-bold mb-4 opacity-50">Modules</h6>
                                    <div class="mega-list flex-grow-1">
                                        @php
                                            $modules = [
                                                ['name' => 'Compliance & Traceability','icon' => 'fa-clipboard-check','slug' => 'compliance'],
                                                [
                                                    'name' => 'Contracts & Progress Claims', 
                                                    'icon' => 'fa-file-signature', 
                                                    'slug' => 'contracts'
                                                ],
                                                [
                                                    'name' => 'CRM', 
                                                    'icon' => 'fa-users-gear', 
                                                    'slug' => 'crm'
                                                ],
                                                [
                                                    'name' => 'Finance & Accounting', 
                                                    'icon' => 'fa-calculator', 
                                                    'slug' => 'finance'
                                                ],
                                                [
                                                    'name' => 'Inventory Management', 
                                                    'icon' => 'fa-boxes-stacked', 
                                                    'slug' => 'inventory'
                                                ],
                                                [
                                                    'name' => 'Job Management', 
                                                    'icon' => 'fa-list-check', 
                                                    'slug' => 'job-management'
                                                ],
                                                [
                                                    'name' => 'Order Management', 
                                                    'icon' => 'fa-cart-flatbed', 
                                                    'slug' => 'orders'
                                                ],
                                                [
                                                    'name' => 'Point of Sale', 
                                                    'icon' => 'fa-cash-register', 
                                                    'slug' => 'pos'
                                                ],
                                                [
                                                    'name' => 'Procurement', 
                                                    'icon' => 'fa-file-invoice-dollar', 
                                                    'slug' => 'procurement'
                                                ],
                                                [
                                                    'name' => 'Project Management', 
                                                    'icon' => 'fa-diagram-project', 
                                                    'slug' => 'project-management'
                                                ],
                                            ];
                                        @endphp

                                        @foreach($modules as $module)
                                            <a class="dropdown-item d-flex align-items-center py-1 px-0 bg-transparent" href="{{ url('/modules/'.$module['slug']) }}">
                                                <div class="icon-box-sm border rounded-2 p-2 me-2 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                                    <i class="fa-solid {{ $module['icon'] }}"></i>
                                                </div>
                                                <span class="fw-medium">{{ $module['name'] }}</span>
                                            </a>
                                        @endforeach
                                    </div>
                                    <div class="mt-4 pt-4">
                                        <a href="{{ route('modules.index') }}" class="text-decoration-none btn btn-accent btn-lg rounded-pill fs-6 w-100 text-black fw-bold">
                                            Explore all modules <i class="fa-solid fa-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Column 3: Industries -->
                                <div class="col-lg-6 col-xl-3 p-4 p-lg-5 d-flex flex-column">
                                    <h6 class="small text-uppercase fw-bold mb-4 opacity-50">Industries</h6>
                                    <div class="row g-0 flex-grow-1">
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
                                            <a class="dropdown-item d-flex align-items-center py-1 px-0 bg-transparent" href="{{ url('/industries/'.$industry['slug']) }}">
                                                <div class="icon-box-sm border rounded-2 p-2 me-2 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                                    <i class="fa-solid {{ $industry['icon'] }}"></i>
                                                </div>
                                                <span class="fw-medium">{{ $industry['name'] }}</span>
                                            </a>
                                        @endforeach
                                    </div>
                                    <div class="mt-4 pt-4">
                                        <a href="{{ route('industries.index') }}" class="text-decoration-none btn btn-accent btn-lg rounded-pill fs-6 w-100 text-black small fw-bold">
                                            Explore all industries <i class="fa-solid fa-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 p-4 p-lg-4 d-none d-xl-flex flex-column justify-content-center">
                                    <div class="bg-accent rounded-5 p-4 h-100 position-relative overflow-hidden d-flex flex-column justify-content-between shadow-lg">
                                        <!-- Content -->
                                        <div class="position-relative z-1">
                                            <p class="small text-black text-uppercase fw-black tracking-wider mb-2 opacity-75">Ready to Scale?</p>
                                            <h4 class="text-black fw-normal ls-tight mb-4">
                                                Transform your <br> infrastructure <br> today.
                                            </h4>
                                            <a href="{{ url('/contact') }}" class="btn btn-dark btn-sm rounded-pill px-4 py-2 fw-bold text-uppercase">
                                                Get Started
                                            </a>
                                        </div>

                                        <!-- Large Bottom-Right Icon -->
                                        <div class="position-absolute bottom-0 end-0 m-n3 opacity-10">
                                            <i class="fa-solid fa-microchip display-1 text-black" style="font-size: 8rem; transform: rotate(-15deg);"></i>
                                        </div>
                                        
                                        <!-- Secondary Icon for subtle depth -->
                                        <div class="position-absolute bottom-0 end-0 p-3 opacity-25">
                                            <i class="fa-solid fa-diagram-project fa-3x text-black"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Row: Book a Demo CTA -->
                            <div class="py-3 px-4 px-lg-5 border-top d-flex justify-content-between align-items-center">
                                <a href="{{ route('contact') }}" class="text-decoration-none text-accent fw-bold small text-uppercase tracking-wider">
                                    Book a demo <i class="fa fa-arrow-right ms-2 text-accent"></i>
                                </a>
                                <div class="d-none d-md-block opacity-50 small">
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