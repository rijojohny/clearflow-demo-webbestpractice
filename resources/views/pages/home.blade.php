@extends('layouts.app')

@section('title', 'ClearFlow | Emergency Plumber in Manchester')
@section('meta_description', '24/7 emergency plumber in Manchester. Fast repairs, boiler installs, leak detection and drain cleaning. Transparent pricing and guaranteed work.')

@section('content')
    {{-- HERO --}}
    <section class="section" style="background: linear-gradient(180deg, #ffffff 0%, #f5f7fa 100%);">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50">
                    <span class="badge rounded-pill text-bg-light border px-3 py-2 mb-3">
                        Manchester • 24/7 Callouts • Fully Insured
                    </span>

                    <h1 class="display-5 fw-bold lh-sm">
                        Fast & Reliable <span style="color:#1565C0;">Plumbing</span> Services
                    </h1>

                    <p class="mt-3 text-muted" style="font-size: 1.1rem;">
                        Local Manchester plumbers available for repairs, installations and maintenance.
                        Transparent pricing, clean workmanship and quick response times.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill">
                            Request a Quote
                        </a>
                        <a href="{{ route('services') }}" class="btn btn-outline-primary rounded-pill"
                           style="border-color:#1565C0; color:#1565C0;">
                            View Services
                        </a>
                    </div>

                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <span class="hero-badge">✅ Same-day callouts</span>
                        <span class="hero-badge">✅ Transparent pricing</span>
                        <span class="hero-badge">✅ Guaranteed work</span>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                    <div class="hero-media shadow bg-white">
                        <img src="{{ asset('images/ClearFlow.png') }}" alt="Plumber working" class="img-fluid">
                        <div class="hero-overlay"></div>

                        <div class="hero-float card border-0 shadow-sm rounded-4 p-3" data-aos="zoom-in" data-aos-delay="320">
                            <div class="fw-semibold">⭐ 5.0 Rated</div>
                            <div class="text-muted small">Based on demo reviews</div>
                        </div>
                    </div>

                    <div class="row g-3 mt-3">
                        <div class="col-6" data-aos="fade-up" data-aos-delay="250">
                            <div class="rounded-4 bg-white shadow-sm p-3 h-100">
                                <div class="fw-semibold">Average response</div>
                                <div class="text-muted">Under 2 hours</div>
                            </div>
                        </div>
                        <div class="col-6" data-aos="fade-up" data-aos-delay="320">
                            <div class="rounded-4 bg-white shadow-sm p-3 h-100">
                                <div class="fw-semibold">Customer rating</div>
                                <div class="text-muted">5★ (demo)</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- TRUST STRIP --}}
    <section class="py-5">
        <div class="container">
            <div class="row g-4">

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                        <div class="d-flex gap-3">
                            <div class="rounded-circle d-inline-flex align-items-center justify-content-center"
                                 style="width:46px;height:46px;background:#1565C0;color:#fff;">
                                ✓
                            </div>
                            <div>
                                <div class="fw-semibold">10+ Years Experience</div>
                                <div class="text-muted">Trusted by homeowners and small businesses.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="120">
                    <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                        <div class="d-flex gap-3">
                            <div class="rounded-circle d-inline-flex align-items-center justify-content-center"
                                 style="width:46px;height:46px;background:#1565C0;color:#fff;">
                                ⚡
                            </div>
                            <div>
                                <div class="fw-semibold">24/7 Emergency Support</div>
                                <div class="text-muted">Fast callouts for leaks, blockages and breakdowns.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="240">
                    <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                        <div class="d-flex gap-3">
                            <div class="rounded-circle d-inline-flex align-items-center justify-content-center"
                                 style="width:46px;height:46px;background:#1565C0;color:#fff;">
                                £
                            </div>
                            <div>
                                <div class="fw-semibold">Transparent Pricing</div>
                                <div class="text-muted">Clear quotes and no hidden fees.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- SERVICES --}}
    <section class="py-5 wave">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end flex-wrap gap-2 mb-4">
                <div data-aos="fade-up">
                    <h2 class="fw-bold mb-1">Our Services</h2>
                    <p class="mb-0 text-muted">Everything you need for plumbing & heating—done properly.</p>
                </div>
                <a href="{{ route('services') }}" class="btn btn-outline-secondary rounded-pill" data-aos="fade-up" data-aos-delay="120">
                    See all
                </a>
            </div>

            <div class="row g-4">
                @php
                    $services = [
                        ['title' => 'Emergency Repairs', 'text' => 'Rapid response for leaks, bursts and urgent issues.', 'icon' => '🚨'],
                        ['title' => 'Leak Detection', 'text' => 'Find and fix hidden leaks before they become costly.', 'icon' => '💧'],
                        ['title' => 'Boiler Installation', 'text' => 'New boiler installs and replacements with warranty.', 'icon' => '🔥'],
                        ['title' => 'Drain Cleaning', 'text' => 'Unblock sinks, toilets and drains quickly and cleanly.', 'icon' => '🛠️'],
                        ['title' => 'Bathroom Installation', 'text' => 'From fittings to finishing touches—full bathroom work.', 'icon' => '🛁'],
                        ['title' => 'Annual Maintenance', 'text' => 'Prevent problems with planned checks and servicing.', 'icon' => '📅'],
                    ];
                @endphp

                @foreach ($services as $s)
                    <div class="col-md-6 col-lg-4"
                         data-aos="fade-up"
                         data-aos-delay="{{ $loop->index * 80 }}">
                        <div class="card border-0 shadow-sm rounded-4 p-4 h-100 service-card bg-white">
                            <div class="d-flex align-items-center justify-content-center rounded-circle mb-3"
                                 style="width:54px;height:54px;background:#e8f0fe;">
                                <span style="font-size:22px;">{{ $s['icon'] }}</span>
                            </div>
                            <h5 class="fw-semibold mb-2">{{ $s['title'] }}</h5>
                            <p class="mb-0 text-muted">{{ $s['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ABOUT PREVIEW --}}
    <section class="section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="rounded-4 shadow overflow-hidden bg-white">
                        <img
                            src="{{ asset('images/Tools_and_fittings.png') }}"
                            alt="Tools and fittings"
                            class="img-fluid"
                            style="height: 420px; width: 100%; object-fit: cover;"
                        >
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="120">
                    <h2 class="fw-bold">Local, reliable, and upfront.</h2>
                    <p class="mt-3 text-muted">
                        ClearFlow Plumbing & Heating provides professional plumbing services for homes and small businesses
                        across Manchester. We focus on reliability, transparent pricing and quality workmanship.
                    </p>

                    <ul class="mt-3" style="color:#334155;">
                        <li class="mb-2">No hidden fees — clear quotes</li>
                        <li class="mb-2">Clean workmanship and respectful service</li>
                        <li class="mb-2">Fast response times</li>
                        <li class="mb-2">Guaranteed satisfaction</li>
                    </ul>

                    <div class="mt-4 d-flex gap-3 flex-wrap">
                        <a href="{{ route('about') }}" class="btn btn-primary rounded-pill">Learn more</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary rounded-pill"
                           style="border-color:#1565C0; color:#1565C0;">
                            Contact us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-5">
        <div class="container">
            <div class="rounded-4 p-5 text-white shadow-sm"
                 style="background:#1565C0;"
                 data-aos="fade-up">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <h3 class="fw-bold mb-2">Need a plumber today?</h3>
                        <p class="mb-0" style="opacity:.9;">
                            Get a quick quote and we’ll call you back. Emergency callouts available.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="{{ route('contact') }}" class="btn btn-light rounded-pill px-4">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection