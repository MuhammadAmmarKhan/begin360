@props(['title' => 'Still Have Questions?', 'faqs' => []])

<section {{ $attributes->merge(['class' => 'py-5 bg-body custom-faq intro-trigger']) }}>
    <div class="container py-lg-5">
        <div class="row g-5">
            
           <div class="col-lg-4 d-none d-md-flex">
               
                <div class="card border-0 bg-body p-4 p-xl-5 border border-light-subtle position-sticky align-self-start" 
                    style="top: 6rem; z-index: 10;">
                    
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <h2 class="display-5 fw-normal text-body mb-0" style="line-height: 1;">
                            Still Have<br>Questions?
                        </h2>
                        
                        <!-- PERFECT CIRCLE ELEMENT -->
                        <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 ms-3" 
                            style="width: 44px; height: 44px; aspect-ratio: 1 / 1;">
                            <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 0.8rem;"></i>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="bg-accent me-2" style="width: 8px; height: 8px;"></div>
                        <p class="text-secondary fw-bold text-uppercase small mb-0">WE'RE HERE TO HELP YOU.</p>
                    </div>
                    
                    <!-- Optional: Added a quick contact button for better utility in a long list -->
                    <hr class="my-4 opacity-10">
                    <a href="#contact-form" class="btn btn-outline-dark fw-black text-uppercase w-100 rounded-pill py-2 small">
                        Contact Support
                    </a>
                </div>
            </div>

            <!-- Right Side: Accordion -->
            <div class="col-lg-8">
                <div class="accordion accordion-flush custom-faq-accent" id="faqAccordion">
                    
                    @foreach($faqs as $index => $faq)
                        <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }} fw-black py-4 px-4" 
                                        type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#faq-{{ $index }}">
                                    {{ $faq['question'] }}
                                </button>
                            </h2>
                            <div id="faq-{{ $index }}" 
                                 class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" 
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body fw-light pb-4 px-4 pt-0">
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