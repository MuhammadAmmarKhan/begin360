@push('styles')
<style>
    .ls-wide { letter-spacing: 0.1em; }
    .shadow-2xl { box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15); }
    .card-hover { transition: all 0.3s ease; }
    .card-hover:hover { transform: translateY(-3px); border-color: var(--accent) !important; }
</style>
@endpush
@props(['data'])

@props(['data'])

<section {{ $attributes->merge(['class' => 'py-5 bg-body position-relative overflow-hidden']) }}>
    <div class="position-absolute top-0 end-0 bg-accent opacity-10 rounded-circle" 
         style="width: 400px; height: 400px; filter: blur(100px); transform: translate(30%, -30%);"></div>

    <div class="container position-relative py-5">
        <div class="row g-5 mb-5 align-items-center">
            
            {{-- Left Side: Narrative --}}
            <div class="col-lg-5 order-2 order-lg-1">
                <div class="pe-lg-4">
                    <span class="badge rounded-pill bg-accent bg-opacity-10 text-black px-4 py-2 mb-4 border border-accent border-opacity-25">
                        <i class="fa-solid {{ $data['intro']['badge_icon'] ?? 'fa-shield' }} me-2"></i> 
                        {{ $data['intro']['badge_text'] ?? 'SUPPLIER COMPLIANCE' }}
                    </span>
                    
                    <h2 class="display-6 fw-bold text-body text-uppercase mb-4">
                        {!! $data['intro']['title'] !!}
                    </h2>
                    
                    <div class="text-body mb-5 opacity-75">
                        {!! $data['intro']['content'] !!}
                    </div>
                </div>
            </div>

            {{-- Right Side: UI Mockup --}}
            <div class="col-lg-7 order-1 order-lg-2">
                <div class="bg-body-secondary p-2 p-md-4 rounded-5 border border-body-tertiary shadow-2xl position-relative">
                    <div class="bg-body rounded-4 overflow-hidden border border-body-tertiary shadow-sm">
                        
                        {{-- Table Header --}}
                        <div class="p-4 border-bottom border-body-tertiary d-flex flex-wrap justify-content-between align-items-center gap-3">
                            <span class="text-body fw-bold small text-uppercase ls-wide">{{ $data['ui']['table_title'] ?? 'Register' }}</span>
                            <div class="hstack gap-2">
                                @foreach($data['ui']['stats'] as $stat)
                                    <span class="badge rounded-pill bg-{{ $stat['color'] }} bg-opacity-10 text-{{ $stat['color'] }} border border-{{ $stat['color'] }} border-opacity-10">
                                        {{ $stat['label'] }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        
                        {{-- Responsive Table --}}
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-body-tertiary small text-body opacity-50">
                                    <tr>
                                        <th class="ps-4 py-3">SUPPLIER</th>
                                        <th class="py-3 text-center">EXPIRES</th>
                                        <th class="pe-4 py-3 text-end">STATUS</th>
                                    </tr>
                                </thead>
                                <tbody class="small">
                                    @foreach($data['ui']['rows'] as $row)
                                        <tr class="{{ ($row['status'] === 'Expired') ? 'table-danger border-start border-danger border-4' : '' }}">
                                            <td class="ps-4 py-3">
                                                <div class="fw-bold {{ ($row['status'] === 'Expired') ? 'text-danger' : 'text-body' }}">{{ $row['name'] }}</div>
                                                <div class="{{ ($row['status'] === 'Expired') ? 'text-danger' : 'text-muted' }} opacity-75 d-none d-sm-block" style="font-size: 11px;">
                                                    {{ $row['subtext'] }}
                                                </div>
                                            </td>
                                            <td class="py-3 text-center {{ ($row['status'] === 'Expired') ? 'text-danger' : (($row['status'] === 'Expiring') ? 'text-warning' : 'text-body') }}">
                                                {{ $row['date'] }}
                                            </td>
                                            <td class="pe-4 py-3 text-end">
                                                <span class="badge {{ ($row['status'] === 'Expired') ? 'bg-danger text-white shadow-sm' : 'bg-'.($row['status_color'] ?? 'success').' bg-opacity-10 text-'.($row['status_color'] ?? 'success') }} px-3">
                                                    {{ $row['status'] }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- Footer Alert --}}
                        @if(isset($data['ui']['alert']))
                        <div class="p-4 bg-body-tertiary">
                            <div class="d-flex align-items-center p-3 rounded-3 bg-danger bg-opacity-10 border border-danger border-opacity-25">
                                <i class="fa-solid fa-circle-exclamation text-danger me-3"></i>
                                <p class="text-danger small fw-bold mb-0">{{ $data['ui']['alert'] }}</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer Checklist --}}
        <div class="row g-3 mt-5">
            @foreach($data['footer_features'] as $item)
            <div class="col-lg-3">
                <div class="h-100 d-flex align-items-center p-3 rounded-3 border border-body-tertiary shadow-sm bg-body-tertiary bg-opacity-50 transition-all card-hover">
                    <div class="bg-accent bg-opacity-10 rounded-2 p-2 me-3 border border-accent border-opacity-25">
                        <i class="fa-solid fa-check text-black"></i>
                    </div>
                    <span class="text-body fw-medium small">{{ $item }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@push('scripts')

@endpush