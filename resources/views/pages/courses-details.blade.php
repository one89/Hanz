@extends('layouts.web')

@section('content')
    <div class="body">
        {{-- Header --}}
        @include('layouts.header')

        <div role="main" class="main">
            </section>
            <div class="container">
                <div class="row py-3">
                    <div class="col">
                        <ul class="breadcrumb d-block">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Courses</a></li>
                            <li class="active">Course Name Example</li>
                        </ul>
                    </div>
                </div>
            </div>
            <section class="section custom-bg-color-grey-1 border-0 m-0">
                <div class="container">

                    <div class="row py-3 gy-5 gy-lg-0">
                        <div class="col-lg-9 mt-0">

                            <div class="custom-course-detail">

                                <div class="d-md-flex mb-4">
                                    <div class="ps-md-0 mb-3 mb-md-0 pe-4 border-right">
                                        <div class="d-flex align-items-center">
                                            <div class="img-thumbnail img-thumbnail-no-borders bg-transparent">
                                                <img src="img/avatars/avatar.jpg" class="custom-course-detail-avatar"
                                                    alt="">
                                            </div>
                                            <div class="ps-3">
                                                <p class="mb-0 text-1 text-uppercase p-relative top-3">Instructor</p>
                                                <h4 class="mb-0 text-color-secondary text-4"><a
                                                        href="demo-education-courses-details.html"
                                                        class="text-color-secondary" title="">John Doe</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-md-4 mb-3 mb-md-0 flex-grow-1">
                                        <div class="d-flex flex-row align-items-center h-100">
                                            <div class="p-0">
                                                <p class="mb-0 text-1 text-uppercase p-relative top-3">Category</p>
                                                <h4 class="mb-0 text-color-secondary text-4"><a
                                                        href="demo-education-courses-details.html"
                                                        class="text-color-secondary" title="">Web Development</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pe-md-4 mb-3 mb-md-0 border-right">
                                        <div class="d-flex flex-row align-items-center h-100">
                                            <div class="p-0">
                                                <strong class="text-primary text-5">$29</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-md-4">
                                        <div class="d-flex flex-row align-items-center h-100">
                                            <div class="p-0">
                                                <a href="#"
                                                    class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3">TAKE THIS
                                                    COURSE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pb-5">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="//player.vimeo.com/video/67957799" frameborder="0"
                                            webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div>

                                <h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-3">Description
                                </h2>

                                <p class="text-3-5 line-height-9 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Praesent dapibus elementum ante quis commodo. Fusce tincidunt pretium
                                    pellentesque. Nulla vitae ante tincidunt, suscipit dui sit amet, posuere tortor. Sed
                                    elementum ex fringilla, molestie nibh eu, pulvinar diam. Fusce vestibulum nisl a lectus
                                    consequat, vel semper arcu tempor. Sed ac consequat nunc.</p>

                                <div class="row align-items-md-end">
                                    <div class="col-md-6">
                                        <h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-4">
                                            Course Content</h2>
                                    </div>
                                    <div class="col-md-6 text-md-end">
                                        <p
                                            class="text-color-secondary font-weight-semi-bold text-3 line-height-1 mb-4 opacity-5">
                                            4 sections • 16 lectures • 17h 2m total length</p>
                                    </div>
                                </div>

                                <div class="accordion custom-accordion-style-1" id="accordion1">
                                    <div class="card card-default">
                                        <div class="card-header" id="collapse1HeadingOne">
                                            <h4 class="card-title m-0">
                                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse1One"
                                                    aria-expanded="false" aria-controls="collapse1One">
                                                    Course Orientation <span
                                                        class="text-color-default font-weight-regular opacity-6 text-1 d-inline-block ps-1 text-uppercase">-
                                                        4 Lectures - 12min</span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse1One" class="collapse" aria-labelledby="collapse1HeadingOne"
                                            data-bs-parent="#accordion1">
                                            <div class="card-body">

                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>
                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>
                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>
                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-default">
                                        <div class="card-header" id="collapse2HeadingOne">
                                            <h4 class="card-title m-0">
                                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse2One"
                                                    aria-expanded="false" aria-controls="collapse2One">
                                                    Lesson 2 <span
                                                        class="text-color-default font-weight-regular opacity-6 text-1 d-inline-block ps-1 text-uppercase">-
                                                        4 Lectures - 12min</span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse2One" class="collapse" aria-labelledby="collapse2HeadingOne"
                                            data-bs-parent="#accordion1">
                                            <div class="card-body">

                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>
                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>
                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>
                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-default">
                                        <div class="card-header" id="collapse3HeadingOne">
                                            <h4 class="card-title m-0">
                                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse3One"
                                                    aria-expanded="false" aria-controls="collapse3One">
                                                    Lesson 3 <span
                                                        class="text-color-default font-weight-regular opacity-6 text-1 d-inline-block ps-1 text-uppercase">-
                                                        4 Lectures - 12min</span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse3One" class="collapse" aria-labelledby="collapse1HeadingOne"
                                            data-bs-parent="#accordion1">
                                            <div class="card-body">

                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>
                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>
                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>
                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-default">
                                        <div class="card-header" id="collapse4HeadingOne">
                                            <h4 class="card-title m-0">
                                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse4One"
                                                    aria-expanded="false" aria-controls="collapse4One">
                                                    Conclusion <span
                                                        class="text-color-default font-weight-regular opacity-6 text-1 d-inline-block ps-1 text-uppercase">-
                                                        4 Lectures - 12min</span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse4One" class="collapse" aria-labelledby="collapse1HeadingOne"
                                            data-bs-parent="#accordion1">
                                            <div class="card-body">

                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>
                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>
                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>
                                                <div class="row align-items-md-center py-1">
                                                    <div class="col-md-9">
                                                        <a href="#"
                                                            class="text-color-secondary font-weight-semi-bold text-2 line-height-1 mb-4"><i
                                                                class="far fa-play-circle d-inline-block me-2 text-4 p-relative top-1"></i>Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                    </div>
                                                    <div class="col-md-3 text-md-end">
                                                        <p
                                                            class="text-color-default font-weight-semi-bold text-2 line-height-1 mb-0 opacity-5">
                                                            4:26</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-3 mt-5">
                                    Reviews</h2>

                                <ul class="comments">
                                    <li>
                                        <div class="comment pb-4">
                                            <div class="img-thumbnail border-0 p-0 d-none d-md-block">
                                                <img class="avatar rounded-circle" alt="" src="img/avatars/avatar-2.jpg">
                                            </div>
                                            <div class="comment-block bg-transparent p-0">
                                                <span class="comment-by">
                                                    <strong class="text-color-dark">Jack Doe</strong>
                                                </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra
                                                    euismod odio, gravida pellentesque urna varius vitae, gravida
                                                    pellentesque urna varius vitae.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment pb-4">
                                            <div class="img-thumbnail border-0 p-0 d-none d-md-block">
                                                <img class="avatar rounded-circle" alt="" src="img/avatars/avatar.jpg">
                                            </div>
                                            <div class="comment-block bg-transparent p-0">
                                                <span class="comment-by">
                                                    <strong class="text-color-dark">John Doe</strong>
                                                </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra
                                                    odio, gravida urna varius vitae, gravida pellentesque urna varius vitae.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-4 mt-4">
                                    Related Courses</h2>

                                <div class="row">
                                    <div class="col-md-4 mb-4 pb-1">
                                        <div class="card custom-card-courses border-radius-0 hover-effect-1">
                                            <div class="p-relative">
                                                <a href="demo-education-courses-details.html" class="text-color-secondary"
                                                    title="">
                                                    <img class="card-img-top border-radius-0"
                                                        src="img/demos/education/courses/course-1.jpg" alt="" />
                                                </a>
                                                <div class="custom-card-courses-author">
                                                    <div class="img-thumbnail img-thumbnail-no-borders bg-transparent">
                                                        <img src="img/avatars/avatar.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="mb-0 text-1 p-relative top-5 text-uppercase">John Doe</p>
                                                <h4 class="mb-3 text-color-secondary"><a
                                                        href="demo-education-courses-details.html"
                                                        class="text-color-secondary" title="">Course Name Example</a></h4>

                                                <div class="float-end">
                                                    <strong class="text-primary text-5">$79</strong>
                                                </div>

                                                <div class="text-2">
                                                    <span class="d-inline-block pe-2"><i
                                                            class="far text-primary fa-user"></i> 123 </span>
                                                    <span class="d-inline-block pe-2"><i
                                                            class="far text-primary fa-comments"></i> 123</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4 pb-1">
                                        <div class="card custom-card-courses border-radius-0 hover-effect-1">
                                            <div class="p-relative">
                                                <a href="demo-education-courses-details.html" class="text-color-secondary"
                                                    title="">
                                                    <img class="card-img-top border-radius-0"
                                                        src="img/demos/education/courses/course-2.jpg" alt="" />
                                                </a>
                                                <div class="custom-card-courses-author">
                                                    <div class="img-thumbnail img-thumbnail-no-borders bg-transparent">
                                                        <img src="img/avatars/avatar-2.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="mb-0 text-1 p-relative top-5 text-uppercase">John Doe</p>
                                                <h4 class="mb-3 text-color-secondary"><a
                                                        href="demo-education-courses-details.html"
                                                        class="text-color-secondary" title="">Course Name Example</a></h4>

                                                <div class="float-end">
                                                    <strong class="text-primary text-5">$59</strong>
                                                </div>

                                                <div class="text-2">
                                                    <span class="d-inline-block pe-2"><i
                                                            class="far text-primary fa-user"></i> 123 </span>
                                                    <span class="d-inline-block pe-2"><i
                                                            class="far text-primary fa-comments"></i> 123</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4 pb-1">
                                        <div class="card custom-card-courses border-radius-0 hover-effect-1">
                                            <div class="p-relative">
                                                <a href="demo-education-courses-details.html" class="text-color-secondary"
                                                    title="">
                                                    <img class="card-img-top border-radius-0"
                                                        src="img/demos/education/courses/course-3.jpg" alt="" />
                                                </a>
                                                <div class="custom-card-courses-author">
                                                    <div class="img-thumbnail img-thumbnail-no-borders bg-transparent">
                                                        <img src="img/avatars/avatar-3.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="mb-0 text-1 p-relative top-5 text-uppercase">John Doe</p>
                                                <h4 class="mb-3 text-color-secondary"><a
                                                        href="demo-education-courses-details.html"
                                                        class="text-color-secondary" title="">Course Name Example</a></h4>

                                                <div class="float-end">
                                                    <strong class="text-primary text-5">$29</strong>
                                                </div>

                                                <div class="text-2">
                                                    <span class="d-inline-block pe-2"><i
                                                            class="far text-primary fa-user"></i> 123 </span>
                                                    <span class="d-inline-block pe-2"><i
                                                            class="far text-primary fa-comments"></i> 123</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Sidebar -->
                        <div class="col-lg-3 position-relative">

                            <div class="mt-2 mb-4 pb-2">
                                <h2 class="text-color-secondary font-weight-semi-bold text-5 line-height-1 mb-3">Categories
                                </h2>

                                <ul class="nav nav-list flex-column p-relative right-9">
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Design (2)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link bg-transparent border-0 active" href="#">Web Development (4)</a>
                                        <ul>
                                            <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Data
                                                    Science</a></li>
                                            <li class="nav-item"><a
                                                    class="nav-link bg-transparent border-0 active text-color-primary"
                                                    href="#">Mobile Development</a></li>
                                            <li class="nav-item"><a class="nav-link bg-transparent border-0"
                                                    href="#">Software Testing</a></li>
                                            <li class="nav-item"><a class="nav-link bg-transparent border-0"
                                                    href="#">Development Tools</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Personal
                                            Development (3)</a></li>
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Business
                                            (2)</a></li>
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Photography
                                            (1)</a></li>
                                </ul>
                            </div>

                            <div class="mt-2 mb-4 pb-2">

                                <h2 class="text-color-secondary font-weight-semi-bold text-5 line-height-1 mb-3">Latest
                                    Courses</h2>

                                <ul class="simple-post-list">
                                    <li class="border-0">
                                        <div class="post-image">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                <a href="blog-post.html">
                                                    <img src="img/demos/education/courses/course-1.jpg" width="80" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html"
                                                class="text-color-secondary text-3 font-weight-semi-bold line-height-4 d-block pb-1">Course
                                                Name Example</a>
                                            <div class="post-meta">
                                                <strong class="text-primary text-4">$79</strong>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="border-0">
                                        <div class="post-image">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                <a href="blog-post.html">
                                                    <img src="img/demos/education/courses/course-2.jpg" width="80" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html"
                                                class="text-color-secondary text-3 font-weight-semi-bold line-height-4 d-block pb-1">Course
                                                Name Example</a>
                                            <div class="post-meta">
                                                <strong class="text-primary text-4">$79</strong>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="border-0">
                                        <div class="post-image">
                                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                <a href="blog-post.html">
                                                    <img src="img/demos/education/courses/course-3.jpg" width="80" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html"
                                                class="text-color-secondary text-3 font-weight-semi-bold line-height-4 d-block pb-1">Course
                                                Name Example</a>
                                            <div class="post-meta">
                                                <strong class="text-primary text-4">$79</strong>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>

                            <div class="mt-2 mb-4 pb-2">
                                <section class="section section-height-3 bg-color-primary border-0 m-0">
                                    <div class="container p-relative py-3">

                                        <div class="custom-element custom-element-pos-4 appear-animation"
                                            data-appear-animation="expandIn" data-appear-animation-delay="200">
                                            <div class="opacity-2" data-plugin-float-element
                                                data-plugin-options="{'startPos': 'bottom', 'speed': 0.8, 'transition': true, 'transitionDuration': 3000}">
                                                <img class="icon-animated" width="157" height="157"
                                                    src="img/demos/education/elements/element-1.svg" alt="" data-icon
                                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                            </div>
                                        </div>

                                        <div class="row align-items-center justify-content-center text-center">
                                            <div class="col col pt-2">
                                                <h2 class="text-color-light font-weight-semi-bold text-7 mb-0 appear-animation"
                                                    data-appear-animation="fadeInRightShorterPlus"
                                                    data-appear-animation-delay="150">Ready to kick-start your career?</h2>

                                                <a href="demo-education-courses.html"
                                                    class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 mt-4 mb-2 appear-animation"
                                                    data-appear-animation="fadeInLeftShorterPlus"
                                                    data-appear-animation-delay="350">GET STARTED NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                        </div>
                    </div>

                </div>
            </section>
            {{-- ...rest of your content... --}}
        </div>

        {{-- Footer --}}
        @include('layouts.footer')
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demos/demo-education.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skins/skin-education.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('vendor/plugins/js/plugins.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/theme.init.js') }}"></script>
@endpush