@props([
    'messages' => [
        'Odoo Silver Partner: Engineering Excellence',
        'Propelling Enterprise Success with Velocity',
        'Advanced ERP Implementation & Web Architecture',
        'Begin360: Your Strategic Technology Ally',
    ],
])

<div class="ticker-wrapper bg-accent text-white overflow-hidden py-3 shadow-sm border-bottom border-light-subtle">
    <div class="ticker-content d-flex align-items-center" id="announcementTicker">
        @foreach($messages as $message)
            <div class="ticker-item px-5 fw-light tracking-widest display-6 white-space-nowrap">
                <i class="bi bi-rocket-takeoff-fill me-2"></i> {{ $message }}
            </div>
        @endforeach

        {{-- Duplicate for seamless loop --}}
        @foreach($messages as $message)
            <div class="ticker-item px-5 fw-light tracking-widest display-6 white-space-nowrap d-none d-md-block">
                <i class="bi bi-rocket-takeoff-fill me-2"></i> {{ $message }}
            </div>
        @endforeach
    </div>
</div>

<style>
    .ticker-item {
        flex-shrink: 0;
        white-space: nowrap;
    }

    .tracking-widest {
        letter-spacing: 0.15rem;
    }
</style>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ticker = document.getElementById('announcementTicker');

            if (ticker && typeof gsap !== 'undefined') {
                const items = ticker.querySelectorAll('.ticker-item');
                let totalWidth = 0;

                items.forEach(item => totalWidth += item.offsetWidth);

                const tween = gsap.to(ticker, {
                    x: -totalWidth / 2,
                    duration: 20,
                    ease: "none",
                    repeat: -1,
                    onRepeat: () => {
                        gsap.set(ticker, { x: 0 });
                    }
                });

                ticker.addEventListener('mouseenter', () => tween.pause());
                ticker.addEventListener('mouseleave', () => tween.play());
            }
        });
    </script>
@endpush
