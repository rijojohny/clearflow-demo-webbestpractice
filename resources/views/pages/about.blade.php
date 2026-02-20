@extends('layouts.app')

@section('content')

{{-- PAGE HEADER --}}
<section class="section" style="background:#f5f7fa;">
    <div class="container text-center">
        <h1 class="fw-bold">About ClearFlow</h1>
        <p class="text-muted">Local plumbing specialists serving Manchester homes & businesses</p>
    </div>
</section>


{{-- COMPANY STORY --}}
<section class="section">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <img  src="{{ asset('images/Tools_and_fittings.png') }}"
                     class="img-fluid rounded-4 shadow"
                     alt="About us">
            </div>

            <div class="col-lg-6">
                <h2 class="fw-bold">Reliable plumbing you can trust</h2>
                <p class="mt-3 text-muted">
                    ClearFlow Plumbing & Heating is a Manchester based plumbing company providing
                    fast, clean and professional services. We help homeowners and small businesses
                    with repairs, installations and maintenance.
                </p>

                <p class="text-muted">
                    Our goal is simple — fix problems quickly and properly while keeping pricing clear.
                    We believe good communication and tidy workmanship matter just as much as technical skill.
                </p>

                <ul class="mt-4">
                    <li class="mb-2">Fully insured and certified engineers</li>
                    <li class="mb-2">Transparent pricing — no hidden costs</li>
                    <li class="mb-2">Clean and respectful service</li>
                    <li class="mb-2">Fast response across Manchester</li>
                </ul>
            </div>

        </div>
    </div>
</section>


{{-- VALUES --}}
<section class="section" style="background:#f5f7fa;">
    <div class="container text-center">

        <h2 class="fw-bold mb-5">Our Values</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                    <h5 class="fw-semibold">Quality Work</h5>
                    <p class="text-muted">We complete every job properly the first time.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                    <h5 class="fw-semibold">Honest Pricing</h5>
                    <p class="text-muted">No surprises — clear quotes before work starts.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                    <h5 class="fw-semibold">Fast Response</h5>
                    <p class="text-muted">We respect your time and respond quickly.</p>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- CTA --}}
<section class="section">
    <div class="container text-center">
        <h3 class="fw-bold">Need help with plumbing?</h3>
        <p class="text-muted">Get in touch today and we’ll provide a quick quote.</p>

        <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill px-4 mt-3">
            Contact Us
        </a>
    </div>
</section>

@endsection