
@extends('layouts.web')

@section('content')
    @include('layouts.header')

    <div role="main" class="main">

        <section
            class="page-header page-header-modern page-header-background page-header-background-md custom-bg-color-grey-1 mb-0"
            style="background-image: url(img/demos/education/backgrounds/page-header.jpg); background-position: 100% 100%;">
            <div class="container">
                <div class="row mt-5">
                    <div class="col align-self-center p-static text-center">
                        <h1 class="font-weight-bold text-color-secondary text-10">Contact Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row py-3">
                <div class="col">
                    <ul class="breadcrumb d-block">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
            <div class="row py-3">
                <div class="col">

                    <p class="font-weight-medium text-4">
                        Aenean sollicitudin, lorem quis bibendum auctor, 
                        <span class="highlight highlight-primary highlight-bg-opacity highlight-animated"
                            data-appear-animation="highlight-animated-start" data-appear-animation-delay="2000"
                            data-plugin-options="{'flagClassOnly': true}">nisi elit consequat ipsum</span>, nec sagittis sem nibh id elit.
                        Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
                    </p>
                    <p class="text-3-5 line-height-9">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. Quisque eu neque augue. Aliquam egestas nunc at efficitur faucibus. Praesent mauris eros, tincidunt id enim sodales, rhoncus malesuada ligula.
                    </p>

                    <hr class="solid my-5">

                    <div class="row">
                        <!-- Address, Phone, Email, Hours blocks here (copy from your code) -->
                    </div>

                    <hr class="solid mt-5 mb-4">

                </div>
            </div>
            <div class="row pb-5 mb-3">
                <div class="col">
                    <h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-4">Send a Message</h2>
                    <form class="contact-form custom-form-style-1" action="php/contact-form.php" method="POST">
                        <!-- form fields here (copy from your code) -->
                    </form>
                </div>
            </div>
        </div>

        <section class="section section-height-3 bg-color-tertiary border-0 m-0">
            <div class="container py-3">
                <div class="row align-items-center justify-content-center text-center text-lg-start">
                    <div class="col-md-8 col-lg-9 mb-4 mb-lg-0">
                        <h2 class="text-color-primary font-weight-bold mb-0 appear-animation"
                            data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="150">
                            Ready to kick-start your career?</h2>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <a href="{{ url('/courses') }}"
                            class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 mt-4 mb-2 appear-animation"
                            data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="350">
                            GET STARTED NOW
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection