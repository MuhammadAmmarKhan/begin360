<div class="modal fade" id="entryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-5 bg-body bg-opacity-75 border-light-subtle overflow-hidden" style="backdrop-filter:blur(25px)">
            <div class="modal-body p-0">
                <div class="row g-0">
                    <!-- Left: Dynamic Image -->
                    <div class="col-md-6 d-none d-md-block">
                        <div class="modal-image-container h-100">
                            <img src="{!! $data['image_url'] !!}" alt="Begin360" class="img-fluid h-100 w-100 object-fit-cover grayscale-1">
                        </div>
                    </div>

                    <!-- Right: Content -->
                    <div class="col-md-6 p-5 d-flex flex-column justify-content-center bg-obsidian-transparent position-relative">
                        <button type="button" class="btn-close btn-close-body text-accent position-absolute top-0 end-0 m-4" data-bs-dismiss="modal"></button>

                        <span class="text-accent text-uppercase small fw-bold tracking-widest d-block mb-3">{!! $data['sub_heading'] !!}</span>
                        <h2 class="display-6 fw-semibold mb-4">
                            {!! $data['heading'] !!}
                        </h2>
                        <p class="lead text-secondary mb-5 pe-lg-5">{!! $data['paragraph'] !!}</p>

                        <div class="mt-2">
                            <a href="{{ $data['button_url'] }}" class="btn rounded-pill btn-accent px-5 py-3 fw-bold text-uppercase rounded-0">
                                {!! $data['button_text'] !!}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* Glassmorphic Core */
    .glass-modal {
        /* background: rgba(17, 20, 22, 0.8) !important; */
        backdrop-filter: blur(20px) saturate(160%);
        -webkit-backdrop-filter: blur(20px) saturate(160%);
        /* border-radius: 0; Keeping it sharp for corporate professional identity */
        /* box-shadow: 0 25px 80px rgba(0, 0, 0, 0.9); */
    }

    .bg-obsidian-transparent {
        /* background: rgba(28, 31, 35, 0.4); */
    }

    .grayscale-1 {
        /* filter: grayscale(100%) brightness(0.8); */
        transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .glass-modal:hover .grayscale-1 {
        filter: grayscale(0%) brightness(1);
    }

    .ls-2 { letter-spacing: 0.25rem; }
    .fw-black { font-weight: 900; }
</style>
@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const el = document.getElementById('entryModal');

        if (el) {
            const modal = new bootstrap.Modal(el);
            let hasShown = false; // Prevents the modal from showing multiple times

            document.addEventListener('mouseleave', (e) => {
                // e.clientY < 0 ensures the mouse actually left via the top (address bar area)
                if (!hasShown && e.clientY < 0) {
                    modal.show();
                    hasShown = true;
                }
            });
        }
    });
</script>
@endpush
