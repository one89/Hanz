@extends('layouts.web')

@section('content')
    <div class="body">
        {{-- Header --}}
        @include('layouts.header')

        <div role="main" class="main">

            <body>
                <div role="main" class="main">

                    <section
                        class="page-header page-header-modern page-header-background page-header-background-md custom-bg-color-grey-1 mb-0"
                        style="background-image: url(img/demos/education/backgrounds/page-header.jpg); background-position: 100% 100%;">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col align-self-center p-static text-center">
                                    <h1 class="font-weight-bold text-color-secondary text-10">Хэлний сургалт</h1>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="container">
                        <div class="row py-3">
                            <div class="col">
                                <ul class="breadcrumb d-block">
                                    <li><a href="#">Нүүр хуудас</a></li>
                                    <li class="active">Хичээл</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <section class="section custom-bg-color-grey-1 border-0 m-0">
                        <div class="container">

                            <div class="row py-3 gy-5 gy-lg-0">
                                <div class="col-lg-9 mt-0">

                                    <div class="row">
                                        <div class="col-md-4 mb-4 pb-1">
                                            <div class="card custom-card-courses border-radius-0 hover-effect-1">
                                                <div class="p-relative">
                                                    <a href="/courses-details" class="text-color-secondary" title="">
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
                                                    <p class="mb-0 text-1 p-relative top-5 text-uppercase">Б. Отгонжаргал
                                                    </p>
                                                    <h4 class="mb-3 text-color-secondary"><a
                                                            href="demo-education-courses-details.html"
                                                            class="text-color-secondary" title="">Course Name
                                                            Example</a></h4>

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
                                                    <a href="demo-education-courses-details.html"
                                                        class="text-color-secondary" title="">
                                                        <img class="card-img-top border-radius-0"
                                                            src="img/demos/education/courses/course-2.jpg" alt="" />
                                                    </a>
                                                    <div class="custom-card-courses-author">
                                                        <div class="img-thumbnail img-thumbnail-no-borders bg-transparent">
                                                            <img src="img/avatars/avatar-2.jpg" class="rounded-circle"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0 text-1 p-relative top-5 text-uppercase">John Doe</p>
                                                    <h4 class="mb-3 text-color-secondary"><a
                                                            href="demo-education-courses-details.html"
                                                            class="text-color-secondary" title="">анхан шат</a></h4>

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
                                                    <a href="demo-education-courses-details.html"
                                                        class="text-color-secondary" title="">
                                                        <img class="card-img-top border-radius-0"
                                                            src="img/demos/education/courses/course-3.jpg" alt="" />
                                                    </a>
                                                    <div class="custom-card-courses-author">
                                                        <div class="img-thumbnail img-thumbnail-no-borders bg-transparent">
                                                            <img src="img/avatars/avatar-3.jpg" class="rounded-circle"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0 text-1 p-relative top-5 text-uppercase">Б. Отгонжаргал
                                                    </p>
                                                    <h4 class="mb-3 text-color-secondary"><a
                                                            href="demo-education-courses-details.html"
                                                            class="text-color-secondary" title="">анхан дунд шат</a></h4>

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
                                                    <a href="demo-education-courses-details.html"
                                                        class="text-color-secondary" title="">
                                                        <img class="card-img-top border-radius-0"
                                                            src="img/demos/education/courses/course-4.jpg" alt="" />
                                                    </a>
                                                    <div class="custom-card-courses-author">
                                                        <div class="img-thumbnail img-thumbnail-no-borders bg-transparent">
                                                            <img src="img/avatars/avatar-2.jpg" class="rounded-circle"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0 text-1 p-relative top-5 text-uppercase">Э. Мөнхдолгор</p>
                                                    <h4 class="mb-3 text-color-secondary"><a
                                                            href="demo-education-courses-details.html"
                                                            class="text-color-secondary" title="">дунд шат</a></h4>

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
                                                    <a href="demo-education-courses-details.html"
                                                        class="text-color-secondary" title="">
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
                                                    <p class="mb-0 text-1 p-relative top-5 text-uppercase">Б. Ариунхишиг</p>
                                                    <h4 class="mb-3 text-color-secondary"><a
                                                            href="demo-education-courses-details.html"
                                                            class="text-color-secondary" title="">дунд ахисан шат</a></h4>

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
                                                    <a href="demo-education-courses-details.html"
                                                        class="text-color-secondary" title="">
                                                        <img class="card-img-top border-radius-0"
                                                            src="img/demos/education/courses/course-2.jpg" alt="" />
                                                    </a>
                                                    <div class="custom-card-courses-author">
                                                        <div class="img-thumbnail img-thumbnail-no-borders bg-transparent">
                                                            <img src="img/avatars/avatar-2.jpg" class="rounded-circle"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0 text-1 p-relative top-5 text-uppercase">Э. Мөнхдолгор</p>
                                                    <h4 class="mb-3 text-color-secondary"><a
                                                            href="demo-education-courses-details.html"
                                                            class="text-color-secondary" title="">ахисан шат</a></h4>

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
                                                    <a href="demo-education-courses-details.html"
                                                        class="text-color-secondary" title="">
                                                        <img class="card-img-top border-radius-0"
                                                            src="img/demos/education/courses/course-3.jpg" alt="" />
                                                    </a>
                                                    <div class="custom-card-courses-author">
                                                        <div class="img-thumbnail img-thumbnail-no-borders bg-transparent">
                                                            <img src="img/avatars/avatar-3.jpg" class="rounded-circle"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0 text-1 p-relative top-5 text-uppercase">Э. Мөнхдолгор</p>
                                                    <h4 class="mb-3 text-color-secondary"><a
                                                            href="demo-education-courses-details.html"
                                                            class="text-color-secondary" title="">ахисан дунд шат</a></h4>
                                                    ]
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
                                                    <a href="demo-education-courses-details.html"
                                                        class="text-color-secondary" title="">
                                                        <img class="card-img-top border-radius-0"
                                                            src="img/demos/education/courses/course-4.jpg" alt="" />
                                                    </a>
                                                    <div class="custom-card-courses-author">
                                                        <div class="img-thumbnail img-thumbnail-no-borders bg-transparent">
                                                            <img src="img/avatars/avatar-2.jpg" class="rounded-circle"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0 text-1 p-relative top-5 text-uppercase">Э. Мөнхдолгор</p>
                                                    <h4 class="mb-3 text-color-secondary"><a
                                                            href="demo-education-courses-details.html"
                                                            class="text-color-secondary" title="">HKS-4</a></h4>

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
                                                    <a href="demo-education-courses-details.html"
                                                        class="text-color-secondary" title="">
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
                                                    <p class="mb-0 text-1 p-relative top-5 text-uppercase">Э. Мөнхдолгор</p>
                                                    <h4 class="mb-3 text-color-secondary"><a
                                                            href="demo-education-courses-details.html"
                                                            class="text-color-secondary" title="">HSK-1</a></h4>

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

                                    <div class="row">
                                        <div class="col">
                                            <ul class="pagination float-end p-relative bottom-2">
                                                <li class="page-item"><a class="page-link" href="#"><i
                                                            class="fas fa-angle-left"></i></a></li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><i
                                                            class="fas fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <!-- Sidebar -->
                                <div class="col-lg-3 position-relative">
                                    <div class="mt-2 mb-4 pb-2"></div>
                                    <div class="mt-2 mb-4 pb-2">

                                        <h2 class="text-color-secondary font-weight-semi-bold text-5 line-height-1 mb-3">
                                            Latest Courses</h2>

                                        <ul class="simple-post-list">
                                            <li class="border-0">
                                                <div class="post-image">
                                                    <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                        <a href="blog-post.html">
                                                            <img src="img/demos/education/courses/course-1.jpg" width="80"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="blog-post.html"
                                                        class="text-color-secondary text-3 font-weight-semi-bold line-height-4 d-block pb-1">Сургалт
                                                        HSK-2</a>
                                                    <div class="post-meta">
                                                        <strong class="text-primary text-4">$1500</strong>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="border-0">
                                                <div class="post-image">
                                                    <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                        <a href="blog-post.html">
                                                            <img src="img/demos/education/courses/course-2.jpg" width="80"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="blog-post.html"
                                                        class="text-color-secondary text-3 font-weight-semi-bold line-height-4 d-block pb-1">Сургалт
                                                        HSK-3</a>
                                                    <div class="post-meta">
                                                        <strong class="text-primary text-4">$1500</strong>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="border-0">
                                                <div class="post-image">
                                                    <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                        <a href="blog-post.html">
                                                            <img src="img/demos/education/courses/course-3.jpg" width="80"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="blog-post.html"
                                                        class="text-color-secondary text-3 font-weight-semi-bold line-height-4 d-block pb-1">Сургалт
                                                        HSK-4</a>
                                                    <div class="post-meta">
                                                        <strong class="text-primary text-4">$1500
                                                        </strong>
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
                                                            src="img/demos/education/elements/element-1.svg" alt=""
                                                            data-icon
                                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                                    </div>
                                                </div>

                                                <div class="row align-items-center justify-content-center text-center">
                                                    <div class="col col pt-2">
                                                        <h2 class="text-color-light font-weight-semi-bold text-7 mb-0 appear-animation"
                                                            data-appear-animation="fadeInRightShorterPlus"
                                                            data-appear-animation-delay="150">Карьераа хүчтэй эхлүүлэхэд
                                                            бэлэн үү?</h2>

                                                        <a href="demo-education-courses.html"
                                                            class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 mt-4 mb-2 appear-animation"
                                                            data-appear-animation="fadeInLeftShorterPlus"
                                                            data-appear-animation-delay="350">Эхлээд үз!</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>S

                                </div>
                            </div>

                        </div>
                    </section>

                    <!-- Vendor -->
                    <script src="vendor/plugins/js/plugins.min.js"></script>
                    <script src="vendor/jquery.countdown/jquery.countdown.min.js"></script>

                    <!-- Theme Base, Components and Settings -->
                    <script src="js/theme.js"></script>

                    <!-- Theme Custom -->
                    <script src="js/custom.js"></script>

                    <!-- Theme Initialization Files -->
                    <script src="js/theme.init.js"></script>

            </body>
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