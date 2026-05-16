@push('styles')
<style>
    /* Desktop Bento Grid logic */
    @media (min-width: 992px) {
        .testimonial-container {
            display: flex;
            flex-wrap: wrap;
        }
    }

    /* Mobile Horizontal Scroll logic */
    @media (max-width: 991.98px) {
        .testimonial-wrapper {
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 2rem;
            margin-right: -1.5rem; /* Allow cards to bleed off edge */
        }
        
        .testimonial-container {
            display: flex;
            flex-wrap: nowrap;
            gap: 1.5rem;
            width: max-content;
        }

        .testimonial-container > div {
            width: 85vw; /* Show partial next card to hint at scroll */
            flex: 0 0 auto;
        }

        .testimonial-wrapper::-webkit-scrollbar {
            display: none;
        }
        .testimonial-wrapper {
            scrollbar-width: none;
        }
    }

    
    
    .testimonial-container div {
        transition: transform 0.4s ease;
    }
    
    .testimonial-container .rounded-5:hover {
        border-color: var(--accent) !important;
    }

</style>
@endpush
<section class="py-5 bg-body text-body overflow-hidden">
    <div class="container py-3 py-lg-5">
        
        <div class="row mb-4 mb-lg-5 gs-reveal">
            <div class="col-lg-7 mb-3 mb-lg-0">
                <span class="text-accent text-uppercase small fw-bold tracking-widest d-block mb-2 mb-lg-3">
                    {{ $testimonialData['subheading'] }}
                </span>
                <h2 class="display-6 fw-semibold mb-0 text-break">
                    {!! $testimonialData['heading'] !!}
                </h2>
            </div>
            <div class="col-lg-5 d-flex align-items-end">
                <p class="lead text-secondary mb-0 pe-lg-5 text-break" style="max-width:700px;">
                    {{ $testimonialData['description'] }}
                </p>
            </div>
        </div>

        <div class="testimonial-wrapper">
            <div class="row g-3 g-sm-4 testimonial-container">
                
                @foreach($testimonialData['testimonials'] as $item)
                    @if($item['is_featured'])
                        <div class="col-lg-8 col-md-12">
                            <div class="h-100 p-3 p-sm-5 rounded-5 bg-body-tertiary border border-light-subtle d-flex flex-column justify-content-center">
                                <div class="row align-items-center g-3 g-md-0">
                                    @if($item['icon'])
                                        <div class="col-md-2 text-center text-md-start mb-2 mb-md-0">
                                            <i class="fa-solid {{ $item['icon'] }} text-accent display-4 opacity-50"></i>
                                        </div>
                                    @endif
                                    
                                    <div class="{{ $item['icon'] ? 'col-md-10 border-start-0 border-start-md border-light-subtle ps-md-4' : 'col-12' }}">
                                        <h3 class="text-body fw-bold h4 mb-4 lh-base text-break fs-5-mobile">
                                            "{{ $item['quote'] }}"
                                        </h3>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar bg-accent rounded-circle flex-shrink-0" style="width: 45px; height: 45px;"></div>
                                            <div class="min-w-0">
                                                <h6 class="text-body fw-black text-uppercase mb-0 small text-truncate">{{ $item['author'] }}</h6>
                                                <span class="text-accent x-small fw-bold ls-1 d-block text-truncate">{{ $item['company'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-4 col-md-6">
                            <div class="h-100 p-4 rounded-5 bg-body border border-light-subtle d-flex flex-column justify-content-between">
                                <p class="text-secondary mb-4 fs-5 fst-italic text-break">
                                    "{{ $item['quote'] }}"
                                </p>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="min-w-0">
                                        <h6 class="text-body fw-black text-uppercase mb-0 small text-truncate">{{ $item['author'] }}</h6>
                                        <span class="text-accent x-small fw-bold d-block text-truncate">{{ $item['company'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
</section>

@push('scripts')

@endpush