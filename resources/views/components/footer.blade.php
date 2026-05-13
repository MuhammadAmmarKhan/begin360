<section class="py-5 bg-body" id="contact-form">
    <div class="container py-lg-5">
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-5">
                <div class="project-image-wrapper rounded-5 overflow-hidden h-100 shadow-sm position-relative">
                    <div class="arrow-animations h-100 w-100"></div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card h-100 border-0 rounded-5 p-4 p-md-5 d-flex flex-column bg-body-tertiary" >
                    
                    <h2 class="display-6 fw-semibold mb-4">
                        Lets Get <br/><span class="text-accent fraunces section-accent fw-normal">Connected</span>
                    </h2>

                    <form action="{{ route('contact.submit') }}" method="POST" class="corporate-form" novalidate>
                        @csrf
                        
                        @if(session('success'))
                            <div class="alert alert-success border-0 rounded-4 mb-4 shadow-sm d-flex align-items-center">
                                <i class="fa fa-check-circle me-2"></i>
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger border-0 rounded-4 mb-4 shadow-sm small">
                                <i class="fa fa-exclamation-triangle me-2"></i>
                                Please correct the highlighted fields below.
                            </div>
                        @endif

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label text-body fw-normal small text-uppercase">First Name *</label>
                                <input type="text" name="first_name" 
                                    class="form-control corporate-input @error('first_name') is-invalid @enderror" 
                                    value="{{ old('first_name') }}" required>
                                @error('first_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-body fw-normal small text-uppercase">Last Name *</label>
                                <input type="text" name="last_name" 
                                    class="form-control corporate-input @error('last_name') is-invalid @enderror" 
                                    value="{{ old('last_name') }}" required>
                                @error('last_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label text-body fw-normal small text-uppercase">Company Name *</label>
                                <input type="text" name="company" 
                                    class="form-control corporate-input @error('company') is-invalid @enderror" 
                                    value="{{ old('company') }}" required>
                                @error('company')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label text-body fw-normal small text-uppercase">Email Address *</label>
                                <input type="email" name="email" 
                                    class="form-control corporate-input @error('email') is-invalid @enderror" 
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label text-body fw-normal small text-uppercase">Service Interest</label>
                                <select name="service" class="form-select corporate-input @error('service') is-invalid @enderror">
                                    <option selected disabled value="">Select a service...</option>
                                    @foreach(['CRM Consulting', 'Workflow Automation', 'Custom API Development', 'Revenue Operations'] as $option)
                                        <option value="{{ $option }}" {{ old('service') == $option ? 'selected' : '' }}>{{ $option }}</option>
                                    @endforeach
                                </select>
                                @error('service')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label text-body fw-normal small text-uppercase">Additional Notes</label>
                                <textarea name="notes" class="form-control corporate-input @error('notes') is-invalid @enderror" rows="3">{{ old('notes') }}</textarea>
                                @error('notes')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-12 mt-4">
                                <div class="form-check">
                                    <input class="form-check-input @error('agree') is-invalid @enderror" type="checkbox" name="agree" id="agree" required>
                                    <label class="form-check-label text-body fw-normal" for="agree" style="font-size: 0.75rem;">
                                        I agree to receive communications regarding my project inquiry.
                                    </label>
                                    @error('agree')
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 mt-4 text-center">
                                <button type="submit" class="btn btn-accent rounded-pill px-5 py-3 fw-bold text-uppercase w-100 w-md-auto shadow-sm">
                                    Submit Request
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@php
    // These would typically be passed from a View Composer or the Controller
    $industries = [
        ['name' => 'Food & Beverage','icon' => 'fa-utensils','slug' => 'food-beverage'],
        ['name' => 'Retail','icon' => 'fa-basket-shopping','slug' => 'retail'],
        ['name' => 'Trades & Field Services','icon' => 'fa-screwdriver-wrench','slug' => 'trades'],
        ['name' => 'Professional Services','icon' => 'fa-briefcase','slug' => 'professional-services'],
        ['name' => 'Construction','icon' => 'fa-helmet-safety','slug' => 'construction']
    ];

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

    $companyName = env('COMPANY_NAME','BEGIN360 PTY LTD');
    $email = env('COMPANY_EMAIL','info@begin360.com.au');
    $phone = env('COMPANY_PHONE','(02) 1234 5678');
    $abn = env('COMPANY_ABN','00 000 000 000');
@endphp

<x-ui.announcement-ticker />
<x-ui.backtotop />
<footer class="bg-body-tertiary text-body pt-5 pb-3 overflow-hidden">
    <!-- Massive Background Text -->
    <div class="container-fluid px-0 select-none pointer-events-none" style="margin-bottom: -4rem; opacity: 0.05;">
        <h2 class="display-1 fw-black text-uppercase text-nowrap m-0" style="font-size: 22.7vw; line-height: 0.7; letter-spacing: -2vw;">
            {{ explode(' ', $companyName)[0] }}
        </h2>
    </div>

    <div class="container position-relative" style="z-index: 2;">
        <!-- Top Section -->
        <div class="row g-5 align-items-end mb-5">
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-4">
                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="Logo" width="250"/>
                </div>
                <p class="text-secondary fw-normal small w-75">
                    We help businesses implement ERP systems, unify operations, and gain real-time visibility across every part of their business.
                </p>
                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="text-white opacity-50 hover-opacity-100 fs-5"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#" class="text-white opacity-50 hover-opacity-100 fs-5"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="text-white opacity-50 hover-opacity-100 fs-5"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            
            <div class="col-lg-6">
                <a class="text-decoration-none" href="tel:{{env('COMPANY_PHONE')}}">
                <div class="bg-black text-white rounded-4 p-5 d-flex justify-content-between align-items-center transition-all border border-secondary border-opacity-25" 
                     style="cursor: pointer;"
                     onmouseover="this.style.borderColor='var(--accent)'" 
                     onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'">
                    <h2 class="display-6 fw-semibold mb-4">Lets Schedule <br>A <span class="text-accent fraunces section-accent fw-normal">Call</span></h2>
                    <div class="bg-accent rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" 
                         style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-arrow-up-right-from-square text-dark fs-4"></i>
                    </div>
                </div>
                </a>
            </div>
        </div>

        <hr class="border-secondary opacity-10 my-5">

        <!-- Middle Section: Dynamic Arrays -->
        <div class="row g-4 mb-5">
            <div class="col-6 col-md-3">
                <h6 class="fw-black text-accent text-uppercase mb-4">Modules</h6>
                <ul class="list-unstyled fw-normal  small lh-lg">
                    @foreach($modules as $module)
                        <li>
                            <a href="{{ url('modules/' . $module['slug']) }}" class="text-secondary text-decoration-none hover-white">
                                {{ $module['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-6 col-md-3">
                <h6 class="fw-black text-accent text-uppercase mb-4">Industries</h6>
                <ul class="list-unstyled fw-normal small lh-lg">
                    @foreach($industries as $industry)
                        <li>
                            <a href="{{ url('industries/' . $industry['slug']) }}" class="text-secondary text-decoration-none hover-white">
                                {{ $industry['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-6 col-md-3">
                <h6 class="fw-black text-accent text-uppercase mb-4">Company</h6>
                <ul class="list-unstyled fw-normal small lh-lg">
                    <li><a href="{{ route('about') }}" class="text-secondary text-decoration-none hover-white">About Us</a></li>
                    <li><a href="{{ route('contact') }}" class="text-secondary text-decoration-none hover-white">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-3">
                <h6 class="fw-black text-accent text-uppercase mb-4">Contact Us</h6>
                <div class="text-secondary fw-normal  small lh-lg">
                    <p class="mb-2">
                        <a href="mailto:{{ $email }}" class="text-decoration-none text-secondary hover-white">
                            <i class="fa-solid fa-envelope text-accent me-2"></i> {{ $email }}
                        </a>
                    </p>
                    <p class="mb-2">
                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', $phone) }}" class="text-decoration-none text-secondary hover-white">
                            <i class="fa-solid fa-phone text-accent me-2"></i> {{ $phone }}
                        </a>
                    </p>
                    <p class="mb-0">
                        <a href="https://abr.business.gov.au/ABN/View?abn={{ str_replace(' ', '', $abn) }}" target="_blank" class="text-decoration-none text-secondary hover-white">
                            <i class="fa-solid fa-file-invoice text-accent me-2"></i> ABN {{ $abn }}
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pt-4 border-top border-secondary border-opacity-10">
            <p class="small text-secondary fw-normal mb-md-0">© {{ now()->year }} <b>{{ $companyName }}</b>. ALL RIGHTS RESERVED.</p>
            <div class="d-flex gap-4 small fw-normal">
                <a href="{{ route('privacy') }}" class="text-secondary text-decoration-none hover-white">Privacy Policy</a>
                <a href="{{ route('terms') }}" class="text-secondary text-decoration-none hover-white">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
<x-ui.entry-modal/>
