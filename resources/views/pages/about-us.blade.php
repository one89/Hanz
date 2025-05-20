@extends('layouts.web')

@section('content')
    @include('layouts.header')
    <main role="main" class="main">

        <!-- Hero Section -->
        <section class="page-header page-header-modern page-header-background mb-0"
            style="background-image: url('img/demos/education/backgrounds/page-header.jpg'); background-position: center; background-size: cover; min-height: 450px; display: flex; align-items: center;">
            <div class="container text-center">
                <h1 class="text-14 font-weight-extra-bold text-color-primary mb-3"
                    style="letter-spacing: 0.16em; text-shadow: 2px 2px 6px rgba(0,0,0,0.6);">
                    ABOUT US
                </h1>
                <p class="text-7 text-color-light opacity-90 font-weight-semibold"
                    style="text-shadow: 1px 1px 6px rgba(0,0,0,0.5); max-width: 720px; margin: auto;">
                    Empowering Minds, Transforming Lives — Join Us on a Journey of Lifelong Learning and Limitless
                    Possibilities
                </p>
            </div>
        </section>

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="bg-light py-3 mb-5 shadow-sm">
            <div class="container">
                <ol class="breadcrumb mb-0 rounded-0 bg-white px-4 py-2 fs-5">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"
                            class="text-decoration-none text-muted hover-primary">Home</a></li>
                    <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">About Us</li>
                </ol>
            </div>
        </nav>

        <!-- About Us Content -->
        <section class="container my-6">
            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <h2 class="text-color-primary fw-bold mb-4 fs-3">Our Story: A Passion for Education</h2>
                    <p class="text-5 text-color-dark mb-4" style="line-height: 1.85;">
                        Founded in 2001 by visionary John Doe, we have dedicated ourselves to sparking curiosity and
                        nurturing knowledge globally. Our mission surpasses traditional classrooms by building a vibrant
                        community that empowers individuals to convert challenges into opportunities.
                    </p>
                    <p class="text-5 text-color-dark mb-4" style="line-height: 1.85;">
                        Growing into a worldwide institution, we embrace diversity and innovation. Our cutting-edge
                        programs, expert educators, and personalized learning experiences enable every student to thrive and
                        succeed.
                    </p>
                    <p class="text-4 text-color-secondary fst-italic" style="line-height: 1.7;">
                        Education is a transformative journey of growth and empowerment. We stand beside every learner,
                        fostering success that lasts a lifetime.
                    </p>

                    <div class="row text-center mt-5 gy-4">
                        <div class="col-4">
                            <div class="counter" style="animation: fadeInUp 0.5s ease forwards;">
                                <strong class="text-color-primary text-12" data-to="30" data-append="+">30</strong>
                                <div class="text-6 fw-semibold mt-2 text-color-dark">Expert Educators</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="counter" style="animation: fadeInUp 0.7s ease forwards;">
                                <strong class="text-color-secondary text-12" data-to="2000" data-append="+">2000</strong>
                                <div class="text-6 fw-semibold mt-2 text-color-dark">Students Empowered</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="counter" style="animation: fadeInUp 0.9s ease forwards;">
                                <strong class="text-color-primary text-12" data-to="250" data-append="+">250</strong>
                                <div class="text-6 fw-semibold mt-2 text-color-dark">Courses Delivered</div>
                            </div>
                        </div>
                    </div>

                    <!-- Features with icons -->
                    <div class="row mt-5 g-4 text-center">
                        <div class="col-md-4">
                            <div
                                class="feature-box py-4 px-3 border rounded shadow-sm h-100 d-flex flex-column align-items-center">
                                <div class="feature-box-icon mb-3 text-color-primary">
                                    <i class="fas fa-graduation-cap fa-3x"></i>
                                </div>
                                <h4 class="fw-bold text-color-primary mb-2">Quality Education</h4>
                                <p class="text-5 text-color-dark mb-0">
                                    Rigorous, engaging curricula taught by passionate educators to unlock every learner’s
                                    full potential.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div
                                class="feature-box py-4 px-3 border rounded shadow-sm h-100 d-flex flex-column align-items-center">
                                <div class="feature-box-icon mb-3 text-color-secondary">
                                    <i class="fas fa-users fa-3x"></i>
                                </div>
                                <h4 class="fw-bold text-color-secondary mb-2">Inclusive Community</h4>
                                <p class="text-5 text-color-dark mb-0">
                                    A diverse, supportive community committed to collaboration, growth, and shared success.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div
                                class="feature-box py-4 px-3 border rounded shadow-sm h-100 d-flex flex-column align-items-center">
                                <div class="feature-box-icon mb-3 text-color-primary">
                                    <i class="fas fa-lightbulb fa-3x"></i>
                                </div>
                                <h4 class="fw-bold text-color-primary mb-2">Innovation & Research</h4>
                                <p class="text-5 text-color-dark mb-0">
                                    Leading in educational research and technology to create impactful, future-ready
                                    learning experiences.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 text-center">
                    <img src="img/demos/education/generic/generic-2.jpg"
                        alt="Diverse students collaborating in a modern learning environment"
                        class="img-fluid rounded shadow-lg" style="max-width: 480px; border-radius: 20px;" loading="lazy" />
                </div>

            </div>
        </section>

        <!-- Testimonial Section -->
        <section class="bg-primary text-light py-7 mb-6 shadow-lg rounded-4" style="max-width: 900px; margin: 3rem auto;">
            <div class="container text-center px-4">
                <div class="testimonial testimonial-style-2 testimonial-with-quotes mx-auto" style="max-width: 800px;">
                        <p class="mb-0 custom-font-1 fst-italic text-6 line-height-9 fw-semibold"
                            style="letter-spacing: 0.02em;">
                            “Education is not merely the filling of a vessel, but the kindling of a flame for lifelong
                            learning, inspiration, and achievement. At our institution, that flame burns brightly,
                            illuminating paths, awakening ideas, and empowering futures.”
                        </p>
                    </blockquote>
                    <div class="testimonial-author mt-5">
                        <p class="mb-0 fs-5 fw-bold">John Doe</p>
                        <p class="fs-6 opacity-75" style="font-style: normal;">Founder &amp; CEO</p>
                    </div>
                    <img src="img/demos/education/signature.png" alt="John Doe Signature" class="img-fluid mt-4 mx-auto"
                        style="max-width: 160px;" />
                </div>
            </div>
        </section>

        <!-- Mission and Vision Section -->
        <section class="container my-7">
            <div class="row gx-5 text-center text-md-start">

                <div class="col-md-6 mb-6 mb-md-0 px-4 px-md-0">
                    <h3 class="text-color-primary fw-bold mb-4 fs-3">Our Mission</h3>
                    <p class="text-5 text-color-dark" style="line-height: 1.85;">
                        To deliver accessible, innovative, and high-quality education that empowers every learner to
                        discover their unique strengths and lead fulfilling lives. We nurture inclusivity, creativity, and
                        excellence beyond the classroom.
                    </p>
                </div>

                <div class="col-md-6 px-4 px-md-0">
                    <h3 class="text-color-primary fw-bold mb-4 fs-3">Our Vision</h3>
                    <p class="text-5 text-color-dark" style="line-height: 1.85;">
                        To be a global beacon of transformative education, inspiring innovation, cultivating leadership, and
                        promoting lifelong learning that positively impacts communities worldwide.
                    </p>
                </div>

            </div>
        </section>

        <!-- Call to Action -->
        <section class="section section-height-4 bg-color-light border-0 py-6 shadow-sm rounded-4">
            <div class="container">
                <div class="row align-items-center justify-content-between text-center text-lg-start">
                    <div class="col-lg-8">
                        <h2 class="text-color-primary fw-extra-bold mb-2" style="font-size: 2.5rem;">
                            Ready to Embark on Your Educational Journey?
                        </h2>
                        <p class="text-4 text-color-dark mt-1 mb-0 fw-medium">
                            Join thousands of learners who have transformed their lives through our courses.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="{{ url('/courses') }}" class="btn btn-gradient-primary btn-px-6 btn-py-4 fw-bold"
                            style="font-size: 1.25rem; border-radius: 50px; box-shadow: 0 8px 25px rgba(0,123,255,0.4); transition: all 0.25s ease;">
                            Get Started Now
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

@push('scripts')
    <!-- FontAwesome CDN for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"
        crossorigin="anonymous"></script>
@endpush

@push('styles')
    <style>
        /* Simple fadeInUp animation for counters */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 20px, 0);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        .fw-extra-bold {
            font-weight: 800 !important;
        }
    </style>
@endpush