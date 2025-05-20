@extends('layouts.web')

@section('content')
    <div role="main" class="main">
        @include('layouts.header')
        <!-- Hero Section -->

        <section class="page-header page-header-modern page-header-background custom-bg-color-grey-1 mb-0"
            style="background-image: url(img/demos/education/backgrounds/page-header.jpg); background-position: 100% 100%;">
            <div class="container">
                <div class="row mt-5">
                    <div class="col text-center">
                        <h1 class="font-weight-bold text-color-secondary text-10">Contact Us</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Breadcrumb -->
        <div class="container">
            <div class="row py-3">
                <div class="col">
                    <ul class="breadcrumb d-block">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>

            <!-- Intro Text -->
            <div class="row py-3">
                <div class="col">
                    <p class="text-4 font-weight-medium">
                        Have any questions? We’re here to help! Reach out to us using the form below, or get in touch
                        through
                        our contact details.
                    </p>
                    <p class="text-3-5">
                        Our team is dedicated to providing the best support and guidance for your educational journey.
                        Whether
                        you're looking for course info, support, or just have a general inquiry — we’ve got you covered.
                    </p>

                    <hr class="solid my-5">

                    <!-- Contact Details -->
                    <div class="row text-center text-md-start">
                        <div class="col-md-3 mb-4">
                            <h4 class="text-color-dark font-weight-bold">Address</h4>
                            <p>123 Education Ave, City, Country</p>
                        </div>
                        <div class="col-md-3 mb-4">
                            <h4 class="text-color-dark font-weight-bold">Phone</h4>
                            <p><a href="tel:+1234567890">(+123) 456 7890</a></p>
                        </div>
                        <div class="col-md-3 mb-4">
                            <h4 class="text-color-dark font-weight-bold">Email</h4>
                            <p><a href="mailto:info@example.com">info@example.com</a></p>
                        </div>
                        <div class="col-md-3 mb-4">
                            <h4 class="text-color-dark font-weight-bold">Working Hours</h4>
                            <p>Mon - Fri: 9:00am - 6:00pm</p>
                        </div>
                    </div>

                    <hr class="solid mt-5 mb-4">
                </div>
            </div>

            <!-- Contact Form -->
    <div class="row pb-5 mb-3">
    <div class="col">
        <style>
            .contact-form-container {
                border: 2px solid #6c757d; /* Secondary dark grey */
                border-radius: 12px;
                padding: 30px 25px;
                background-color: #f9f9f9;
                box-shadow: 0 4px 15px rgba(0,0,0,0.1);
                max-width: 700px;
                margin: 0 auto;
            }
            .contact-form-container h2 {
                color: #343a40;
                margin-bottom: 1.5rem;
            }
            .btn-secondary {
                background-color: #495057;
                border: none;
                transition: background-color 0.3s ease;
            }
            .btn-secondary:hover {
                background-color: #343a40;
            }
            .invalid-feedback {
                font-size: 0.9rem;
                color: #dc3545;
            }
            .alert {
                border-radius: 8px;
                padding: 15px 20px;
                max-width: 700px;
                margin: 1rem auto;
            }
            .alert-success {
                background-color: #d4edda;
                color: #155724;
                border: 1px solid #c3e6cb;
            }
            .alert-danger {
                background-color: #f8d7da;
                color: #721c24;
                border: 1px solid #f5c6cb;
            }
        </style>

        <div class="contact-form-container">

            <h2 class="text-color-secondary font-weight-semi-bold text-6 mb-4">Send a Message</h2>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="contact-form custom-form-style-1" action="{{ route('contact.send') }}" method="POST">
                @csrf

                <!-- Name and Email Fields -->
                <div class="row">
                    <div class="form-group col-lg-6">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                               placeholder="Your Name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                               placeholder="Your Email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Subject Field -->
                <div class="row">
                    <div class="form-group col">
                        <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror"
                               placeholder="Subject" value="{{ old('subject') }}" required>
                        @error('subject')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Message Field -->
                <div class="row">
                    <div class="form-group col">
                        <textarea name="message" class="form-control @error('message') is-invalid @enderror"
                                  rows="6" placeholder="Your Message" required>{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="row">
                    <div class="form-group col text-end">
                        <button type="submit" class="btn btn-secondary font-weight-bold px-5 py-3">
                            Send Message
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
        <!-- Call to Action -->
        <section class="section section-height-3 bg-color-tertiary border-0 m-0">
            <div class="container py-3">
                <div class="row align-items-center justify-content-center text-center text-lg-start">
                    <div class="col-md-8 col-lg-9 mb-4 mb-lg-0">
                        <h2 class="text-color-primary font-weight-bold mb-0">Ready to kick-start your career?</h2>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <a href="{{ url('/courses') }}" class="btn btn-secondary font-weight-bold px-5 py-3 mt-4 mb-2">
                            GET STARTED NOW
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection