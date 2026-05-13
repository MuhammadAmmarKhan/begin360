@push('styles')
<style>
    .transition-hover { transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1); }
    .transition-hover:hover { transform: translateY(-10px); border-color: var(--accent) !important; box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important; }
    
    .connect-banner { background-color: var(--accent); }
    
    .banner-pattern {
        position: absolute; top: 0; right: 0; width: 40%; height: 100%;
        background: linear-gradient(45deg, transparent 25%, rgba(0,0,0,0.05) 25%, rgba(0,0,0,0.05) 50%, transparent 50%, transparent 75%, rgba(0,0,0,0.05) 75%);
        background-size: 40px 40px; opacity: 0.3;
    }

    .accent-splash {
        position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
        width: 100%; height: 100%;
        background: radial-gradient(circle, var(--accent) 0%, transparent 70%);
        filter: blur(120px); opacity: 0.1; pointer-events: none;
    }

    @media (min-width: 992px) { .border-start-lg { border-left: 1px solid !important; } }
</style>
@endpush

@props(['data'])
<section {{ $attributes->merge(['class' => 'position-relative overflow-hidden bg-body py-5']) }}>
    <div class="accent-splash"></div>

    <div class="container position-relative z-1">
        
        {{-- 1. Narrative Glass Card --}}
        @if(isset($data['intro']))
        <div class="p-4 p-md-5 rounded-5 border border-accent border-opacity-25 bg-body-tertiary bg-opacity-50 shadow-lg position-relative overflow-hidden mb-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <span class="text-uppercase fw-bold text-accent tracking-widest mb-2 small d-block">
                        {{ $data['intro']['badge'] ?? 'Module Overview' }}
                    </span>
                    <h2 class="display-6 fw-bold text-body mb-0">
                        {!! $data['intro']['title'] !!}
                    </h2>
                </div>
                <div class="col-lg-7 border-start-lg border-secondary border-opacity-10 ps-lg-5">
                    <div class="text-body opacity-75">
                        {!! $data['intro']['content'] !!}
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- 2. Feature Grid --}}
        <div class="row g-4 mb-5">
            @foreach($data['features'] as $feature)
                <div class="col-md-6 col-xl-3">
                    <div class="p-5 rounded-5 border border-secondary border-opacity-10 bg-body-tertiary bg-opacity-25 shadow-sm transition-hover h-100">
                        <div class="mb-4 d-inline-flex align-items-center justify-content-center bg-accent bg-opacity-10 rounded-4 p-3 border border-accent border-opacity-10">
                            <i class="fa-solid {{ $feature['icon'] }} fa-2x text-black"></i>
                        </div>
                        <h3 class="h5 fw-bold text-body mb-3">{{ $feature['title'] }}</h3>
                        <p class="small text-body opacity-75 mb-0 line-height-relaxed">
                            {{ $feature['content'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- 3. Dynamic CTA Banner --}}
        @if(isset($data['cta']))
        <div class="connect-banner rounded-5 p-4 p-md-5 d-flex flex-column flex-lg-row align-items-center justify-content-between overflow-hidden position-relative shadow-2xl">
            <div class="position-relative z-1 text-center text-lg-start mb-4 mb-lg-0">
                <h2 class="display-6 fw-bold text-black mb-2">{{ $data['cta']['title'] }}</h2>
                <p class="text-black opacity-75 mb-0 fw-medium">{{ $data['cta']['subtitle'] }}</p>
            </div>
            <div class="position-relative z-1">
                <a href="{{ $data['cta']['url'] }}" class="btn btn-dark btn-lg px-5 rounded-pill fw-800 text-uppercase tracking-wider">
                    {{ $data['cta']['btn_text'] }} <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>
            </div>
            <div class="banner-pattern"></div>
        </div>
        @endif
    </div>
</section>
@push('scripts')

@endpush