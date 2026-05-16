@push('styles')
<style>

</style>
@endpush
<section class="py-5 bg-body-tertiary overflow-hidden">
    <div class="container py-lg-4">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <div class="pe-lg-5">
                    <span class="text-accent text-uppercase small fw-bold tracking-widest d-block mb-3">
                        {{ $processData['subheading'] }}
                    </span>
                    <h2 class="display-6 fw-semibold mb-4 text-break">
                        {!! $processData['heading'] !!}
                    </h2>
                    <p class="lead text-secondary mb-4 pe-lg-5" style="max-width:700px;">{{ $processData['description'] }}</p>
                </div>
            </div>
        </div>

        <div class="row g-4 flex-nowrap overflow-x-auto pb-3 scrollbar-none snap-x" style="-webkit-overflow-scrolling: touch;">
            @foreach($processData['steps'] as $key=>$point)
                <div class="col-11 col-sm-6 col-md-5 col-xl-3 pillar-item flex-shrink-0 snap-center" style="--delay: {{ $key }}">
                    <div class="custom-pillar h-100 px-4 py-5 bg-body border border-secondary border-opacity-10 shadow-sm rounded-4 d-flex flex-column">
                        
                        <div class="icon-shape rounded-3 mb-5 d-flex align-items-center justify-content-center">
                            <i class="fa-solid {{ $point['icon'] }} fa-2x text-accent"></i>
                        </div>
                        <div class="badge bg-accent text-black rounded-pill small fw-bold mb-3 align-self-start">PHASE_0{{ $loop->iteration }}</div>
                        <h4 class="h5 fw-normal text-body mb-3 tracking-wide text-break">
                            {{ $point['title'] }}
                        </h4>
                        <p class="text-secondary fw-medium mb-4 fs-6">
                            {{ $point['content'] }}
                        </p>
                        
                        <div class="mt-auto pt-2">
                            <a href="#contact-form" class="btn btn-accent rounded-pill text-decoration-none fw-bold text-uppercase fs-6 px-4 w-100 w-sm-auto d-inline-flex align-items-center justify-content-center gap-2">
                                <span>Lets Connect</span> <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('scripts')

@endpush