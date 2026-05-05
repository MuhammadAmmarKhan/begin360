{{-- resources/views/components/cta-section.blade.php --}}
@props([
    'badge' => 'Next-Level Efficiency',
    'title' => 'The Future of Business Operations is Here.',
    'highlight' => 'Business Operations',
    'description' => 'Transition from fragmented workflows to a unified corporate ecosystem designed for scale.',
    'primaryText' => 'Contact Our Team',
    'primaryLink' => '#',
    'secondaryText' => 'Book a Demo',
    'secondaryLink' => '#'
])

<section class="py-0 border-top border-bottom border-light-subtle">
    <div class="container-fluid px-0">
        <div class="bg-black w-100 position-relative overflow-hidden">
            <div class="row g-0 align-items-center">
                
                <div class="col-xl-8 col-lg-7 p-5 p-md-5 ps-xl-5">
                    <div class="py-lg-5 ps-xl-4">
                        <p class="text-accent fw-bold text-uppercase tracking-widest mb-3">
                            {{ $badge }}
                        </p>
                        <h2 class="display-3 fw-800 text-white text-uppercase mb-4" style="letter-spacing: -1px;">
                            {!! str_replace($highlight, '<span class="text-accent">'.$highlight.'</span>', $title) !!}
                        </h2>
                        <p class="lead text-secondary fw-semibold mb-0" style="max-width: 700px;">
                            {{ $description }}
                        </p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5 bg-accent p-5 p-md-5 d-flex align-items-center justify-content-center">
                    <div class="text-center text-lg-start w-100 py-lg-5">
                        <h3 class="text-white fw-black text-uppercase mb-4">Ready to Integrate?</h3>
                        <div class="d-grid gap-3">
                            <a href="{{ $primaryLink }}" class="btn btn-dark btn-lg rounded-pill py-3 fw-black text-uppercase shadow-lg border-0">
                                {{ $primaryText }} 
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path d="M7 17L17 7M17 7H7M17 7V17"/>
                                </svg>
                            </a>
                            <a href="{{ $secondaryLink }}" class="btn btn-light btn-lg rounded-pill py-3 fw-black text-uppercase border-2">
                                {{ $secondaryText }}
                            </a>
                        </div>
                        <p class="text-white-50 mt-4 small text-uppercase fw-bold mb-0">
                            <i class="fa-solid fa-lock me-2"></i> Secure Corporate API Access Included
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>