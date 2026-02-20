@extends('layouts.app')

@section('content')

{{-- PAGE HEADER --}}
<section class="section" style="background:#f5f7fa;">
    <div class="container text-center">
        <h1 class="fw-bold">Our Services</h1>
        <p class="text-muted">Professional plumbing & heating services across Manchester</p>
    </div>
</section>


{{-- SERVICES LIST --}}
<section class="section">
    <div class="container">

        <div class="row g-4">

            @php
            $services = [
                ['title'=>'Emergency Repairs','desc'=>'Burst pipes, major leaks and urgent plumbing problems fixed quickly.','icon'=>'🚨'],
                ['title'=>'Leak Detection','desc'=>'We locate hidden leaks before they cause structural damage.','icon'=>'💧'],
                ['title'=>'Boiler Installation','desc'=>'Energy efficient boiler installation and replacements.','icon'=>'🔥'],
                ['title'=>'Drain Cleaning','desc'=>'Blocked sinks, toilets and drains cleared safely.','icon'=>'🛠️'],
                ['title'=>'Bathroom Installation','desc'=>'Full bathroom fitting and plumbing connections.','icon'=>'🛁'],
                ['title'=>'Annual Maintenance','desc'=>'Prevent breakdowns with scheduled maintenance checks.','icon'=>'📅'],
            ];
            @endphp

            @foreach($services as $service)
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100 service-card">

                    <div class="rounded-circle d-flex align-items-center justify-content-center mb-3"
                         style="width:60px;height:60px;background:#e8f0fe;font-size:26px;">
                        {{ $service['icon'] }}
                    </div>

                    <h5 class="fw-semibold">{{ $service['title'] }}</h5>
                    <p class="text-muted">{{ $service['desc'] }}</p>

                    <a href="{{ route('contact') }}" class="mt-auto text-decoration-none fw-semibold" style="color:#1565C0;">
                        Request quote →
                    </a>

                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>


{{-- WHY CHOOSE US --}}
<section class="section" style="background:#f5f7fa;">
    <div class="container text-center">

        <h2 class="fw-bold mb-5">Why Choose ClearFlow</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="p-4">
                    <h5>Same Day Service</h5>
                    <p class="text-muted">We aim to fix issues on the first visit whenever possible.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4">
                    <h5>Transparent Pricing</h5>
                    <p class="text-muted">Clear quotes with no hidden costs or surprise charges.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4">
                    <h5>Guaranteed Work</h5>
                    <p class="text-muted">All installations and repairs are fully guaranteed.</p>
                </div>
            </div>

        </div>

    </div>
</section>


{{-- CTA --}}
<section class="section text-center">
    <div class="container">
        <h3 class="fw-bold">Need a plumbing service?</h3>
        <p class="text-muted">Contact us today and get a quick quote.</p>

        <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill px-4 mt-3">
            Contact Us
        </a>
    </div>
</section>

@endsection