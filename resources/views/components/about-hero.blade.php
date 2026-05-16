@push('styles')

@endpush

<section id="about-hero" class="min-vh-100 bg-body py-5 d-flex align-items-center position-relative overflow-hidden">
    <canvas id="about-canvas" class="position-absolute top-0 start-0 w-100 h-100"></canvas>
    <div class="blur-overlay"></div>

    <div class="container py-5 z-3">
        @if(isset($heroData['breadcrumbs']) && !empty($heroData['breadcrumbs']))
            <nav aria-label="breadcrumb" class="mb-4 gs-reveal">
                <ol class="breadcrumb justify-content-center text-uppercase ls-1 small fw-normal">
                    @foreach($heroData['breadcrumbs'] as $crumb)
                        @if($crumb['active'])
                            <li class="breadcrumb-item active text-accent" aria-current="page">
                                {{ $crumb['label'] }}
                            </li>
                        @else
                            <li class="breadcrumb-item">
                                <a href="{{ $crumb['url'] }}" class="text-secondary text-decoration-none hover-accent transition-all">
                                    {{ $crumb['label'] }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ol>
            </nav>
        @endif
        <div class="row align-items-center {{ isset($heroData['hero_image']) ? 'glass-hero-card shadow-lg p-4 p-md-5 gs-reveal rounded-5 text-start border border-light-subtle' : '' }} ">
            {{-- Conditional Layout Logic --}}
            <div class="{{ isset($heroData['hero_image']) ? 'col-lg-6' : 'col-lg-7 mx-auto glass-hero-card shadow-lg p-4 p-md-5 gs-reveal rounded-5 text-start border border-light-subtle' }}">

                <div class="">
                    <span class="d-block text-uppercase fw-semibold ls-2 text-accent gs-reveal mb-3" style="font-size: 0.85rem; letter-spacing: 0.2em;">
                        {!! $heroData['badge'] !!}
                    </span>
                    
                    <h1 class="display-6 fw-bold text-body mb-4 tracking-tighter">
                        {!! $heroData['heading_start'] !!} 
                        <span class="text-accent fraunces section-accent fw-normal">
                            {!! $heroData['dynamic_word'] !!}
                        </span>
                    </h1>
                    
                    <p class="mb-5 text-body fw-400 fs-5">
                        {!! $heroData['description'] !!}
                    </p>

                    <div class="d-flex flex-column flex-sm-row align-items-center gap-3">
                        <a href="{{ $heroData['primary_btn']['url'] }}" class="btn btn-accent rounded-pill px-5 py-3 fw-800 text-uppercase tracking-wide shadow-sm d-inline-flex align-items-center justify-content-center w-100 w-sm-auto text-decoration-none text-black">
                            <i class="fa-solid {{ $heroData['primary_btn']['icon'] }} me-2 small"></i> 
                            {{ $heroData['primary_btn']['text'] }}
                        </a>
                        
                        <a href="{{ $heroData['secondary_btn']['url'] }}" class="btn btn-outline-secondary rounded-pill px-5 py-3 fw-800 text-uppercase tracking-wide d-inline-flex align-items-center justify-content-center w-100 w-sm-auto text-decoration-none">
                            <i class="fa-solid {{ $heroData['secondary_btn']['icon'] }} me-2 small"></i> 
                            {{ $heroData['secondary_btn']['text'] }}
                        </a>
                    </div>
                </div>
            </div>

            {{-- Right Side Image --}}
            @if(isset($heroData['hero_image']))
                <div class="col-lg-6 mt-5 mt-lg-0 ps-lg-5 gs-reveal">
                    <div class="position-relative rounded-5">
                        {!! $heroData['hero_image'] !!}
                    </div>
                </div>
            @endif
        </div>
    </div>

    {{-- Scroll Indicator --}}
    <div class="position-absolute bottom-0 start-50 translate-middle-x pb-4 text-center d-none d-md-flex flex-column align-items-center gap-2" style="z-index: 100;">
        <div class="mouse-icon border border-2 border-body rounded-pill d-flex align-items-start justify-content-center" style="width: 25px; height: 45px; padding-top: 5px;">
            <div class="scroll-dot bg-secondary rounded-circle animate-scroll"></div>
        </div>
        <span class="small text-secondary tracking-wide opacity-75">
            {{ $heroData['scroll_text'] }}
        </span>
    </div>
</section>

<style>
    .shadow-2xl { box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5); }
    .hero-image-container {
        transition: transform 0.5s ease;
        background: rgba(255,255,255,0.05);
        backdrop-filter: blur(10px);
    }
    .hero-image-container:hover {
        transform: translateY(-10px) rotate(1deg);
    }
    .object-fit-cover { object-fit: cover; }
</style>

@push('scripts')

@endpush