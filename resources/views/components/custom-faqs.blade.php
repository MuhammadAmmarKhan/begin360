@props(['title' => 'Still Have Questions?', 'faqs' => []])

<section {{ $attributes->merge(['class' => 'py-5 bg-body custom-faq intro-trigger overflow-hidden']) }}>
    <div class="container py-lg-5">
        <div class="row g-4 g-lg-5 overflow-hidden">
            
            <div class="col-lg-4 d-none d-lg-flex">
                
                <div class="card border-0 bg-body p-4 p-xl-5 border border-light-subtle position-sticky align-self-start" 
                    style="top: 6rem; z-index: 10;">
                    
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h2 class="display-6 fw-semibold text-body mb-4 tracking-tighter">
                            Still Have<br><span class="text-accent fraunces section-accent fw-normal">Questions?</span>
                        </h2>
                        
                        <div class="bg-body-tertiary text-body rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 ms-3" 
                            style="width: 44px; height: 44px; aspect-ratio: 1 / 1;">
                            <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 0.8rem;"></i>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="bg-accent me-2" style="width: 8px; height: 8px; flex-shrink: 0;"></div>
                        <p class="text-secondary fw-bold text-uppercase small mb-0">WE'RE HERE TO HELP YOU.</p>
                    </div>
                    
                    <hr class="my-4 opacity-10">
                    <a href="tel:{{env('COMPANY_PHONE')}}" class="btn btn-accent fw-black w-100 rounded-pill py-2 small">
                        <i class="fa-solid fa-phone" style="font-size: 0.8rem;"></i> Contact Support
                    </a>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="accordion accordion-flush custom-faq-accent" id="faqAccordion">
                    
                    @foreach($faqs as $index => $faq)
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }} fw-black py-4 px-4 text-break" 
                                        type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#faq-{{ $index }}">
                                    {{ $faq['question'] }}
                                </button>
                            </h2>
                            <div id="faq-{{ $index }}" 
                                 class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" 
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body fw-light pb-4 px-4 pt-0 text-break">
                                    {{ $faq['answer'] }}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>