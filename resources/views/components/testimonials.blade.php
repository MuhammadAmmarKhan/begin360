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
<section class="py-5 bg-body text-body">
    <div class="container py-5">
        
        <div class="row mb-5 gs-reveal">
            <div class="col-lg-7">
                <span class="text-accent text-uppercase small fw-bold tracking-widest d-block mb-3">
                    {{ $testimonialData['subheading'] }}
                </span>
                <h2 class="display-6 fw-semibold mb-4">
                    {!! $testimonialData['heading'] !!}
                </h2>
            </div>
            <div class="col-lg-5 d-flex align-items-end">
                <p class="lead text-secondary mb-5 pe-lg-5" style="max-width:700px;">
                    {{ $testimonialData['description'] }}
                </p>
            </div>
        </div>

        <div class="testimonial-wrapper">
            <div class="row g-4 testimonial-container">
                
                @foreach($testimonialData['testimonials'] as $item)
                    @if($item['is_featured'])
                        <div class="col-lg-8 col-md-12">
                            <div class="h-100 p-5 rounded-5 bg-body-tertiary border border-light-subtle d-flex flex-column justify-content-center">
                                <div class="row align-items-center">
                                    @if($item['icon'])
                                        <div class="col-md-2 text-center mb-3 mb-md-0">
                                            <i class="fa-solid {{ $item['icon'] }} text-accent display-4 opacity-50"></i>
                                        </div>
                                    @endif
                                    
                                    <div class="{{ $item['icon'] ? 'col-md-10 border-start-md border-light-subtle ps-md-4' : 'col-12' }}">
                                        <h3 class="text-body fw-bold h4 mb-4 lh-base">
                                            "{{ $item['quote'] }}"
                                        </h3>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar bg-accent rounded-circle" style="width: 45px; height: 45px;"></div>
                                            <div>
                                                <h6 class="text-body fw-black text-uppercase mb-0 small">{{ $item['author'] }}</h6>
                                                <span class="text-accent x-small fw-bold ls-1">{{ $item['company'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-4 col-md-6">
                            <div class="h-100 p-4 rounded-5 bg-body border border-light-subtle d-flex flex-column justify-content-between">
                                <p class="text-secondary mb-4 fs-5 italic">
                                    "{{ $item['quote'] }}"
                                </p>
                                <div>
                                    <h6 class="text-body fw-black text-uppercase mb-0 small">{{ $item['author'] }}</h6>
                                    <span class="text-accent x-small fw-bold">{{ $item['company'] }}</span>
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