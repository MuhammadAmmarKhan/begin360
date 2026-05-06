@props(['items'])

<style>
    /* Custom logic for the directional glow effect */
    .bento-card:not(.is-featured) {
        border: 1px solid rgba(0, 0, 0, 0.05) !important;
        transition: transform 0.3s ease, border-color 0.3s ease;
    }

    .hover-bg-layer {
        position: absolute;
        inset: 0;
        z-index: 1;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.4s ease;
        /* The JS provides --mouse-x and --mouse-y */
        background: radial-gradient(
            600px circle at var(--mouse-x, 0) var(--mouse-y, 0),
            rgba(var(--bs-accent-rgb), 0.15),
            transparent 40%
        );
    }

    .bento-card:hover .hover-bg-layer {
        opacity: 1;
    }

    .bento-card:hover {
        border-color: var(--accent) !important;
        transform: translateY(-5px);
    }

    /* Fixed icon sizing and layout alignment */
    .icon-container {
        height: 100px;
        display: flex;
        align-items: center;
    }

   
</style>

<section {{ $attributes->merge(['class' => 'py-5 bg-body overflow-hidden']) }}>
    <div class="container">
        <!-- Bootstrap utilities for horizontal scroll on mobile and wrap on desktop -->
        <div class="row g-4 flex-nowrap overflow-auto hide-scrollbar pb-4 flex-md-wrap overflow-md-visible">
            @foreach($items as $item)
                @php
                    $isFeatured = $item['featured'] ?? false;
                    $isLarge = ($item['column_class'] ?? '') == 'col-lg-6';
                @endphp

                <div class="{{ $item['column_class'] ?? 'col-10 col-md-4 col-lg-3' }}">
                    <a href="{{ $item['url'] ?? '#' }}" 
                       class="bento-card shadow-sm rounded-4 p-5 d-flex flex-column justify-content-between h-100 text-decoration-none position-relative overflow-hidden {{ $isFeatured ? 'bg-accent is-featured' : 'bg-body border' }} {{ $isLarge ? 'bento-card-lg' : 'bento-card-sm' }}">
                        
                        <!-- Reactive Background Layer -->
                        @if(!$isFeatured)
                            <div class="hover-bg-layer"></div>
                        @endif

                        <div class="position-relative z-2">
                            <div class="icon-container mb-4">
                                <i class="fa-solid {{ $item['icon'] }} fa-4x {{ $isFeatured ? 'text-black' : 'text-accent' }}"></i>
                            </div>
                            
                            <h3 class="fw-bold mb-3 {{ $isFeatured ? 'text-black' : 'text-body' }}">
                                {{ $item['title'] }}
                            </h3>
                            
                            <p class="mb-0 {{ $isFeatured ? 'text-black opacity-75' : 'text-secondary' }}">
                                {{ $item['description'] }}
                            </p>
                        </div>

                        <div class="mt-auto pt-4 d-flex justify-content-between align-items-center position-relative z-2">
                            <span class="fw-bold text-uppercase small tracking-widest {{ $isFeatured ? 'text-black' : 'text-accent' }}">
                                {{ $item['cta_text'] ?? 'Explore' }}
                            </span>
                            <i class="fa-solid fa-arrow-right {{ $isFeatured ? 'text-black' : 'text-accent' }}"></i>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>