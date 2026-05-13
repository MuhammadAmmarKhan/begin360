@push('styles')
<style>
    @media (min-width: 992px) {
        .mb-100 { margin-bottom: 100px !important; }
        .box-card { margin-right: -100px; }
        .border-start-lg { border-left: 1px solid rgba(255,255,255,0.1) !important; }
    }

    .transition-all { transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1), border-color 0.3s ease; }
    .transition-all:hover { transform: translateX(10px); border-color: var(--accent) !important; }
    .line-height-relaxed { line-height: 1.7; }
    
    .connect-banner { background-color: var(--accent); }
    .banner-pattern {
        position: absolute; top: 0; right: 0; width: 40%; height: 100%;
        background: linear-gradient(45deg, transparent 25%, rgba(0,0,0,0.05) 25%, rgba(0,0,0,0.05) 50%, transparent 50%, transparent 75%, rgba(0,0,0,0.05) 75%);
        background-size: 40px 40px; opacity: 0.4;
    }
</style>
@endpush
@props(['data'])

<section {{ $attributes->merge(['class' => 'py-5 bg-black position-relative overflow-hidden']) }}>
    <div class="position-absolute top-50 start-50 translate-middle text-dark opacity-10 d-none d-lg-block fw-bold display-1" 
         style="font-size: 15vw; z-index: 0; letter-spacing: -1rem; pointer-events: none;">
        {{ $data['bg_text'] ?? 'INCLUDED' }}
    </div>

    <div class="container position-relative py-md-5" style="z-index: 1;">
        
        {{-- Header Section --}}
        <div class="row align-items-center mb-5 mb-lg-100">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <span class="d-block text-uppercase fw-semibold ls-2 text-accent gs-reveal" style="font-size: 0.85rem; letter-spacing: 0.2em;">
                    <!-- <i class="fa-solid {{ $data['header']['badge_icon'] ?? 'fa-code-merge' }} fa-sm me-2"></i>  -->
                    {{ $data['header']['badge_text'] ?? 'SYSTEM ARCHITECTURE' }}
                </span>
                <h2 class="display-6 fw-bold text-white mb-0">
                    {!! $data['header']['title'] !!}
                </h2>
            </div>
            <div class="col-lg-6 ps-lg-5 border-start-lg border-secondary border-opacity-25">
                <p class="text-white mb-0 opacity-75">
                    {!! $data['header']['description'] !!}
                </p>
            </div>
        </div>

        {{-- Timeline Features --}}
        <div class="position-relative">
            <div class="position-absolute start-0 start-md-0 top-0 h-100 border-start border-accent opacity-25 d-none d-sm-block" style="width: 2px;"></div>

            @foreach($data['features'] as $index => $f)
                @php
                    $isHighStakes = ($f['color'] ?? '') === 'danger';
                    $even = $index % 2 == 0;
                @endphp

                <div class="row g-0 align-items-center mb-4 mb-lg-100">
                    
                    <div class="col-1 col-sm-1 position-relative d-none d-sm-block">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle border {{ $isHighStakes ? 'border-white' : 'border-accent' }} position-relative start-50 translate-middle-x" 
                             style="width: 40px; height: 40px; background: #000; margin-left: -1px; z-index: 2;">
                            <i class="fa-solid {{ $f['icon'] }} {{ $isHighStakes ? 'text-white' : 'text-accent' }} fs-6"></i>
                        </div>
                    </div>

                    <div class="col-12 col-sm-11 col-md-10 col-lg-8 {{ $even ? 'offset-lg-1' : 'offset-lg-3' }}">
                        <div class="p-4 p-md-5 {{ $isHighStakes ? 'bg-body bg-opacity-10 border border-accent border-opacity-25' : 'bg-dark bg-opacity-50 border border-secondary border-opacity-10' }} rounded-4 shadow-lg transition-all box-card" 
                             style="backdrop-filter: blur(5px);">
                            
                            <div class="row align-items-center">
                                <div class="col-12 col-md-10">
                                    <div class="d-sm-none mb-3">
                                        <i class="fa-solid {{ $f['icon'] }} {{ $isHighStakes ? 'text-white' : 'text-accent' }} fs-4"></i>
                                    </div>
                                    
                                    <h3 class="h5 fw-bold text-white mb-3">
                                        {{ $f['title'] }}
                                        @if($isHighStakes)
                                            <span class="badge bg-accent text-black ms-2 fw-medium small" style="font-size: 10px;">HIGH STAKES</span>
                                        @endif
                                    </h3>
                                    <p class="text-secondary small line-height-relaxed mb-0">
                                        {{ $f['desc'] }}
                                    </p>
                                </div>
                                
                                <div class="col-md-2 text-end d-none d-md-block opacity-10">
                                    <span class="display-3 fw-bold {{ $isHighStakes ? 'text-white' : 'text-accent' }}">
                                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Footer CTA --}}
        @if(isset($data['cta']))
        <div class="row">
            <div class="col-12">
                <div class="connect-banner rounded-4 px-4 py-4 mt-5 d-flex flex-column flex-md-row align-items-center justify-content-between overflow-hidden position-relative shadow-lg">
                    <div class="position-relative z-1 mb-3 mb-md-0 text-center text-md-start">
                        <h2 class="fs-2 fw-bold text-black mb-1">{{ $data['cta']['title'] }}</h2>
                        <p class="text-black mb-0 fw-medium opacity-75">{{ $data['cta']['subtitle'] }}</p>
                    </div>
                    <div class="position-relative z-1">
                        <a href="{{ $data['cta']['url'] }}" class="btn btn-dark btn-lg px-5 rounded-pill fw-bold text-uppercase tracking-wider shadow-sm">
                            {{ $data['cta']['btn_text'] }} <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                    <div class="banner-pattern"></div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

@push('scripts')

@endpush