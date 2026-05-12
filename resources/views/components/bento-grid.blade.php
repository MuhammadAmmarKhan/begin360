@props([
    'items' => [],
    'bentoData' => null // Renamed and defaulted to null
])

<style>
    /* Directional glow effect */
    .bento-card:not(.is-featured) {
        border: 1px solid rgba(0, 0, 0, 0.5) !important;
        transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1), border-color 0.3s ease;
    }

    .hover-bg-layer {
        position: absolute;
        inset: 0;
        z-index: 1;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.4s ease;
        background: radial-gradient(
            600px circle at var(--mouse-x, 0) var(--mouse-y, 0),
            rgba(var(--bs-accent-rgb), 0.15),
            transparent 40%
        );
    }

    .bento-card:hover .hover-bg-layer { opacity: 1; }

    .bento-card:hover {
        border-color: var(--accent) !important;
        transform: translateY(-8px);
    }

    .icon-container {
        height: 80px;
        display: flex;
        align-items: center;
    }

    /* Hide scrollbar for mobile horizontal flow */
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>

<section {{ $attributes->class(['py-5 bg-body overflow-hidden',$bentoData['section_class'] ?? '']) }}>
    <div class="container">
        
        {{-- Dynamic Header Section: Only shows if bentoData is provided --}}
        @if($bentoData)
            <div class="row mb-5">
                <div class="col-lg-8">
                    @if(isset($bentoData['badge']))
                        <span class="badge rounded-pill bg-accent bg-opacity-10 text-black px-4 py-2 mb-3 border border-accent border-opacity-10 ls-2 text-uppercase fw-bold">
                            {!! $bentoData['badge'] !!}
                        </span>
                    @endif
                    
                    @if(isset($bentoData['heading_start']))
                        <h2 class="display-5 fw-bold text-body mb-4 tracking-tighter">
                            {!! $bentoData['heading_start'] !!} 
                            <i class="text-accent section-accent fraunces fw-light italic">
                                {!! $bentoData['dynamic_word'] ?? '' !!}
                            </i>
                        </h2>
                    @endif
                    
                    @if(isset($bentoData['description']))
                        <p class="text-secondary fw-medium lead opacity-75 mb-4">
                            {!! $bentoData['description'] !!}
                        </p>
                    @endif

                    @if(isset($bentoData['primary_btn']))
                        <div class="d-flex flex-wrap gap-3 mt-2">
                            <a href="{{ $bentoData['primary_btn']['url'] }}" class="btn btn-accent rounded-pill px-5 py-3 fw-bold text-uppercase tracking-wide text-black shadow-sm d-inline-flex align-items-center">
                                <i class="fa-solid {{ $bentoData['primary_btn']['icon'] }} me-2 small"></i> 
                                {{ $bentoData['primary_btn']['text'] }}
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        {{-- Bento Grid --}}
        <div class="row g-4 flex-nowrap overflow-auto hide-scrollbar pb-4 flex-md-wrap overflow-md-visible">
            @foreach($items as $item)
                @php
                    $isFeatured = $item['featured'] ?? false;
                @endphp

                <div class="{{ $item['column_class'] ?? 'col-10 col-md-6 col-lg-4' }}">
                    <a href="{{ $item['url'] ?? '#' }}" 
                       class="bento-card shadow-sm rounded-4 p-4 p-md-5 d-flex flex-column justify-content-between h-100 text-decoration-none position-relative overflow-hidden {{ $isFeatured ? 'bg-accent is-featured' : 'bg-body border' }}">
                        
                        @if(!$isFeatured)
                            <div class="hover-bg-layer"></div>
                        @endif

                        <div class="position-relative z-2">
                            <div class="icon-container mb-4">
                                <i class="fa-solid {{ $item['icon'] }} fa-3x {{ $isFeatured ? 'text-black' : 'text-accent' }}"></i>
                            </div>
                            
                            <h3 class="h4 fw-bold mb-3 {{ $isFeatured ? 'text-black' : 'text-body' }}">
                                {{ $item['title'] }}
                            </h3>
                            
                            <p class="mb-0 {{ $isFeatured ? 'text-black opacity-75' : 'text-secondary' }} line-height-relaxed">
                                {{ $item['description'] }}
                            </p>
                        </div>

                        <div class="mt-auto pt-5 d-flex justify-content-between align-items-center position-relative z-2">
                            <span class="fw-bold text-uppercase small tracking-widest {{ $isFeatured ? 'text-black' : 'text-accent' }}">
                                {{ $item['cta_text'] ?? 'Explore' }}
                            </span>
                            <div class="btn-circle bg-{{ $isFeatured ? 'black' : 'accent' }} bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                <i class="fa-solid fa-arrow-right small {{ $isFeatured ? 'text-accent' : 'text-black' }}"></i>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    // JS for the directional glow effect
    document.querySelectorAll('.bento-card').forEach(card => {
        card.onmousemove = e => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        };
    });
</script>