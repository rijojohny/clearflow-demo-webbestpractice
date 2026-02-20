@extends('layouts.app')

@section('content')

{{-- PAGE HEADER --}}
<section class="section" style="background:#f5f7fa;">
    <div class="container text-center">
        <h1 class="fw-bold">Contact Us</h1>
        <p class="text-muted">Request a quote or ask a question — we’ll get back to you quickly</p>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="row g-5">

            {{-- LEFT: CONTACT DETAILS --}}
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 p-4">
                    <h5 class="fw-semibold mb-3">ClearFlow Plumbing & Heating</h5>

                    <div class="mb-3">
                        <div class="fw-semibold">Service Area</div>
                        <div class="text-muted">Manchester, United Kingdom</div>
                    </div>

                    <div class="mb-3">
                        <div class="fw-semibold">Phone</div>
                        <div class="text-muted">0161 123 4567</div>
                    </div>

                    <div class="mb-3">
                        <div class="fw-semibold">Email</div>
                        <div class="text-muted">info@clearflow-plumbing.co.uk</div>
                    </div>

                    <div class="mb-0">
                        <div class="fw-semibold">Hours</div>
                        <div class="text-muted">Mon–Sun: 24/7 Emergency Support</div>
                    </div>
                </div>
            </div>

            {{-- RIGHT: FORM --}}
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">

                    <h4 class="fw-bold mb-1">Request a Quote</h4>
                    <p class="text-muted mb-4">Tell us what you need and we’ll contact you soon.</p>

                    @if(session('success'))
                        <div class="alert alert-success rounded-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger rounded-4">
                            Please fix the errors below and try again.
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Full Name *</label>
                                <input type="text" name="name"
                                       value="{{ old('name') }}"
                                       class="form-control @error('name') is-invalid @enderror"
                                       placeholder="Your name">
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Email *</label>
                                <input type="email" name="email"
                                       value="{{ old('email') }}"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="you@example.com">
                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone"
                                       value="{{ old('phone') }}"
                                       class="form-control @error('phone') is-invalid @enderror"
                                       placeholder="Optional">
                                @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Service</label>
                                <select name="service"
                                        class="form-select @error('service') is-invalid @enderror">
                                    Great
                                    <option value="">Select a service</option>
                                    @foreach(['Emergency Repairs','Leak Detection','Boiler Installation','Drain Cleaning','Bathroom Installation','Annual Maintenance'] as $s)
                                        <option value="{{ $s }}" {{ old('service') === $s ? 'selected' : '' }}>
                                            {{ $s }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('service') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label">Message *</label>
                                <textarea name="message" rows="5"
                                          class="form-control @error('message') is-invalid @enderror"
                                          placeholder="Describe your issue...">{{ old('message') }}</textarea>
                                @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 rounded-pill py-2" type="submit">
                                    Send Message
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection