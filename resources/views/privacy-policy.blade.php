@extends('layouts.app')

@section('title', 'About Begin360 | Elite Digital Infrastructure')
@section('meta_title', 'About Us - Begin360: Engineering the Future of Enterprise Operations')
@section('meta_description', 'Discover Begin360\'s mission to transform complex business ecosystems into streamlined, glass-clear infrastructures. As an Elite Service Provider , we specialize in high-end ERP implementation and digital architecture.')
@section('meta_keywords','Enterprise Digital Infrastructure, Begin360 About, ERP Implementation Experts, Glassmorphic UI Design, Business Process Optimization, Odoo Consultancy.')
@push('styles')

@endpush
@section('content')
  <main class="bg-body-tertiary text-body py-5">
    <div class="container py-5">
        <!-- Header Section -->
        <div class="row mb-5 gs-reveal">
            <div class="col-lg-8">
                <span class="text-accent fw-bold text-uppercase tracking-widest mb-3 d-block ls-2">
                    Data Governance & Sovereignty
                </span>
                <h1 class="display-4 fw-black tracking-tighter text-uppercase">
                    Privacy & <span class="text-accent">Cookies</span>
                </h1>
                <p class="lead text-secondary mt-4 border-start border-accent ps-4">
                    Begin360 Pty Ltd is committed to the highest standards of data integrity and transparency under the Privacy Act 1988 (Cth).
                </p>
            </div>
        </div>

        <!-- Privacy Content -->
        <div class="row g-5 gs-reveal">
            <div class="col-lg-9">
                <div class="policy-content bg-body-tertiary p-3 p-lg-5 rounded-5 border border-light-subtle shadow-md">
                    
                    <section class="mb-5">
                        <h2 class="h4 fw-black text-uppercase text-accent mb-3">1. Scope of Data Collection</h2>
                        <p class="text-secondary lh-lg">
                            Begin360 Pty Ltd collects information strictly necessary for the engineering and optimization of your Odoo ERP ecosystem. This includes:
                        </p>
                        <ul class="list-unstyled text-secondary mt-3">
                            <li class="mb-2"><i class="fa-solid fa-microchip text-accent me-2"></i> <strong>Identity Data:</strong> Name, professional title, and organizational ABN.</li>
                            <li class="mb-2"><i class="fa-solid fa-network-wired text-accent me-2"></i> <strong>Operational Data:</strong> System requirements, workflow logic, and procurement parameters.</li>
                            <li class="mb-2"><i class="fa-solid fa-code text-accent me-2"></i> <strong>Technical Data:</strong> IP addresses and session logs utilized for ERP performance tuning.</li>
                        </ul>
                    </section>

                    <section class="mb-5">
                        <h2 class="h4 fw-black text-uppercase text-accent mb-3">2. Cookie Consent Policy</h2>
                        <p class="text-secondary lh-lg">
                            Our digital infrastructure utilizes cookies to ensure the "glass-clear" performance of our interface. By continuing to navigate the Begin360 Operations Cloud, you consent to the following:
                        </p>
                        <div class="table-responsive mt-3">
                            <table class="table table-body table-borderless small opacity-75">
                                <thead>
                                    <tr class="text-accent border-bottom border-secondary border-opacity-25">
                                        <th>Category</th>
                                        <th>Function</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Essential</strong></td>
                                        <td>Enabling secure login and Odoo session persistence.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Performance</strong></td>
                                        <td>Monitoring latency and system load-balancing.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Analytics</strong></td>
                                        <td>Tracking engagement via high-fidelity forensics tools.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-secondary small mt-2"><em>Note: You may manage cookie preferences via your local browser settings; however, neutralizing essential cookies may disrupt ERP synchronization.</em></p>
                    </section>

                    <section class="mb-5">
                        <h2 class="h4 fw-black text-uppercase text-accent mb-3">3. Data Sovereignty & Storage</h2>
                        <p class="text-secondary lh-lg">
                            We prioritize local data residency. Whenever possible, your operational data is persisted on sovereign Australian servers. We utilize industry-standard encryption protocols (AES-256) to ensure that your enterprise engineering blueprints remain shielded from unauthorized friction.
                        </p>
                    </section>

                    <section class="mb-5">
                        <h2 class="h4 fw-black text-uppercase text-accent mb-3">4. Third-Party Integration</h2>
                        <p class="text-secondary lh-lg">
                            As a Silver Partner, we may integrate your environment with Odoo S.A. or third-party API providers (e.g., freight carriers, payment gateways). We only transmit the minimum data payload required to execute the specific business logic defined in your SLA.
                        </p>
                    </section>

                    <section class="mb-5">
                        <h2 class="h4 fw-black text-uppercase text-accent mb-3">5. Rights & Access (APP)</h2>
                        <p class="text-secondary lh-lg">
                            Under the Australian Privacy Principles, you maintain the right to audit, access, and correct any personal data held by Begin360. To trigger a data integrity report or a "Right to be Forgotten" request, please contact our Compliance Officer.
                        </p>
                    </section>

                    <section>
                        <h2 class="h4 fw-black text-uppercase text-accent mb-3">6. Compliance Contact</h2>
                        <div class="p-4 rounded-4 bg-dark border border-light-subtle">
                            <p class="text-white fw-bold mb-1">Privacy Officer | Begin360 Pty Ltd</p>
                            <p class="text-secondary small mb-3">Australian Business Register: ABN 00 000 000 000</p>
                            <a href="mailto:privacy@begin360.com.au" class="text-accent text-decoration-none fw-bold">
                                privacy@begin360.com.au
                            </a>
                        </div>
                    </section>

                </div>
            </div>

            <!-- Sidebar Info -->
            <aside class="col-lg-3 d-none d-lg-block">
                <div class="sticky-top" style="top: 100px;">
                    <div class="p-4 rounded-4 bg-accent border border-light-subtle">
                        <h6 class="fw-black text-uppercase small text-black mb-3 ls-1">Policy Framework</h6>
                        <p class="text-white small fw-bold mb-2">APP Compliant</p>
                        <p class="text-black x-small lh-base mb-0">
                            Revision: 3.1.0 <br>
                            Effective: May 2026
                        </p>
                        <hr class="border-secondary opacity-25">
                        <p class="text-black x-small mb-0 italic">
                            This policy covers both our corporate presence and the Begin360 deployment layer.
                        </p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</main>
@endsection
@push('scripts')

@endpush