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
                    Бидний тухай
                </h1>
                <p class="text-7 text-color-light opacity-90 font-weight-semibold"
                    style="text-shadow: 1px 1px 6px rgba(0,0,0,0.5); max-width: 720px; margin: auto;">
                    Оюун ухааныг чадавхжуулж, амьдралыг өөрчилнө Хязгааргүй боломж, насан туршийн суралцах аялалдаа
                    нэгдээрэй
                </p>
            </div>
        </section>

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="bg-light py-3 mb-5 shadow-sm">
            <div class="container">
                <ol class="breadcrumb mb-0 rounded-0 bg-white px-4 py-2 fs-5">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"
                            class="text-decoration-none text-muted hover-primary">Нүүр хуудас</a></li>
                    <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">Бидний тухай</li>
                </ol>
            </div>
        </nav>

        <!-- About Us Content -->
        <section class="container my-6">
            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <h2 class="text-color-primary fw-bold mb-4 fs-3">Манай түүх: Боловсролд дурлах сэтгэл</h2>
                    <p class="text-5 text-color-dark mb-4" style="line-height: 1.85;">
                        Ханз хятад хэлний сургалтын төв нь 2014 онд байгуулагдаж, 2019 оноос “Академи” болж өргөжсөн.
                        Бид олон жилийн туршлагатай, БНХАУ-д мэргэжил эзэмшсэн чадварлаг багш нараар бүрдсэн бөгөөд
                        хичээлийн хөтөлбөрийг байнга шинэчилж боловсруулдаг.

                    </p>
                    <p class="text-5 text-color-dark mb-4" style="line-height: 1.85;">
                        Манай сургалтын төв нь хятад хэлийг анхан шатнаас дээд шат хүртэл заадаг бөгөөд жил тутмын нэг
                        жилийн анги буюу 9 сарын хөтөлбөрөөр суралцуулах боломжтой. Мөн HSK 1-6 түвшний түвшин тогтоох
                        шалгалтад бэлтгэх сургалт, HSKK ярианы түвшний сургалтуудыг санал болгодог.

                        Үүний зэрэгцээ бичгийн болон аман орчуулгын сургалт, сургалтын зуучлал, дүрмийн ном, зурлагын
                        дэвтэр, сургалтын гарын авлага болон сурах бичгүүдийг зохион бүтээж, суралцагчдын хэрэгцээнд нийцсэн
                        боловсролын орчныг бүрдүүлдэг.
                    </p>
                    <p class="text-4 text-color-secondary fst-italic" style="line-height: 1.7;">
                        Монгол улсын томоохон компани төлөөлөгч
                        болон хувиараа бизнес эрхлэгч нарыг оролцоход бүхий л талаар хамтран
                        ажиллаж, БНХАУ-д амжилттай суралцах зуучлалыг зохион байгуулсаар байна.
                    </p>

                    <div class="row text-center mt-5 gy-4">
                        <div class="col-4">
                            <div class="counter" style="animation: fadeInUp 0.5s ease forwards;">
                                <strong class="text-color-primary text-12" data-to="30" data-append="+">5</strong>
                                <div class="text-6 fw-semibold mt-2 text-color-dark">Мэргэжлийн багш нар</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="counter" style="animation: fadeInUp 0.7s ease forwards;">
                                <strong class="text-color-secondary text-12" data-to="2000" data-append="+">800</strong>
                                <div class="text-6 fw-semibold mt-2 text-color-dark">Оюутнууд</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="counter" style="animation: fadeInUp 0.9s ease forwards;">
                                <strong class="text-color-primary text-12" data-to="250" data-append="+">250</strong>
                                <div class="text-6 fw-semibold mt-2 text-color-dark">Хөтөлбөрүүд</div>
                            </div>
                        </div>
                    </div>

                    <!-- Features with icons -->
                    <div class="row mt-5 g-4 text-center">
                        <div class="col-md-4">
                            <div
                                class="feature-box py-4 px-3 border rounded shadow-sm h-100 d-flex flex-column align-items-center">
                                <div class="mb-3 text-color-primary">
                                    <i class="fas fa-graduation-cap fa-3x"></i>
                                </div>
                                <h4 class="fw-bold text-color-primary mb-2">Чанартай боловсрол</h4>
                                <p class="text-5 text-color-dark mb-0">
                                    2 жилийн хугацаанд
                                    800 гаруй сурагч суралцсан.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div
                                class="feature-box py-4 px-3 border rounded shadow-sm h-100 d-flex flex-column align-items-center">
                                <div class="mb-3 text-color-secondary">
                                    <i class="fas fa-users fa-3x"></i>
                                </div>
                                <h4 class="fw-bold text-color-secondary mb-2">Нэгдсэн, оролцоотой нийгэмлэг</h4>
                                <p class="text-5 text-color-dark mb-0">
                                    800 гаруй сургууль, 77 коллежтой албан
                                    ёсны агентлагаар дамжуулан тэтгэлэг
                                    зууч явуулдаг франчайз эрхтэй
                                    байгууллага юм.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div
                                class="feature-box py-4 px-3 border rounded shadow-sm h-100 d-flex flex-column align-items-center">
                                <div class="mb-3 text-color-primary">
                                    <i class="fas fa-lightbulb fa-3x"></i>
                                </div>
                                <h4 class="fw-bold text-color-primary mb-2">Шинэчлэл ба Судалгаа</h4>
                                <p class="text-5 text-color-dark mb-0">
                                    БНХАУ-ын Тяньжин хот болон Хужоу мужид
                                    мэргэжлийн Хятад багшаар удирдуулж 7-н
                                    Хонгоос 1 сарын хугацаанд сонгон суралцах
                                    боломжтой.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 text-center">
                    <img src="img/demos/education/generic/generic-2.jpg"
                        alt="Diverse students collaborating in a modern learning environment"
                        class="img-fluid rounded shadow-lg" style="height: 1500px; width: auto;" loading="lazy" />
                </div>

            </div>
        </section>

        <!-- Testimonial Section -->
        <section class="bg-primary text-light py-7 mb-6 shadow-lg rounded-4" style="max-width: 900px; margin: 3rem auto;">
            <div class="container text-center px-4">
                <div class="testimonial testimonial-style-2 testimonial-with-quotes mx-auto" style="max-width: 800px;">
                    <p class="mb-0 custom-font-1 fst-italic text-6 line-height-9 fw-semibold"
                        style="letter-spacing: 0.02em; color: aliceblue;">
                        “Боловсрол гэдэг нь зүгээр л савыг дүүргэх биш, харин насан туршийн суралцах, урам зориг өгөх,
                        амжилтанд хүргэх гал асаах явдал юм. Манай байгууллагад тэр гал тод гэрэлтэж, замыг гэрэлтүүлэн,
                        шинэ санааг уяруулж, ирээдүйн боломжийг нээж өгдөг.”
                    </p>
                    </blockquote>
                    <div class="testimonial-author mt-5">
                        <p class="mb-0 fs-5 fw-bold">Б. Отгонжаргал</p>
                        <p class="fs-6 opacity-75" style="font-style: normal;">Үүсгэн байгуулагч &amp; CEO</p>
                    </div>
                    <img src="img/demos/education/signature.png" alt="John Doe Signature" class="img-fluid mt-4 mx-auto"
                        style="max-width: 160px;" />
                </div>
            </div>
        </section>


        <!-- Call to Action -->
        <section class="container my-7">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-4">
                        <!-- Mission Card -->
                        <div class="col-md-6">
                            <div class="card h-100 shadow border-0 rounded-4 bg-white">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3">
                                            <i class="fas fa-bullseye fa-2x"></i>
                                        </span>
                                        <h3 class="mb-0 fw-bold fs-4 text-color-primary">Бидний эрхэм зорилго</h3>
                                    </div>
                                    <p class="text-5 text-color-dark mb-3" style="line-height: 1.85;">
                                        Бидний зорилго:
                                    </p>
                                    <ul class="text-5 text-color-dark ps-3 mb-0"
                                        style="line-height: 1.85; list-style-type: disc;">
                                        <li>Суралцагчдын онцгой чадварыг нээх</li>
                                        <li>Амжилттай, утга учиртай амьдралд хүрэхэд дэмжих</li>
                                        <li>Шинэлэг, өндөр чанартай боловсролыг хүргэх</li>
                                        <li>Оролцоо, бүтээлч байдал, шилдэг чанарыг хөгжүүлэх</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Vision Card -->
                        <div class="col-md-6">
                            <div class="card h-100 shadow border-0 rounded-4 bg-white">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="bg-secondary bg-opacity-10 text-secondary rounded-circle p-3 me-3">
                                            <i class="fas fa-eye fa-2x"></i>
                                        </span>
                                        <h3 class="mb-0 fw-bold fs-4 text-color-primary">Бидний алсын хараа</h3>
                                    </div>
                                    <p class="text-5 text-color-dark mb-3" style="line-height: 1.85;">
                                        Бид дэлхий даяар:
                                    </p>
                                    <ul class="text-5 text-color-dark ps-3 mb-0"
                                        style="line-height: 1.85; list-style-type: disc;">
                                        <li>Эерэг нөлөө үзүүлэх</li>
                                        <li>Хувь хүнийг өөрчлөх боловсролын чиглэлээр манлайлагч болох</li>
                                        <li>Шинэчлэлийг урамшуулж, манлайллыг төлөвшүүлэх</li>
                                        <li>Насан туршийн суралцахуйг дэмжих</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Button -->
                    <div class="text-center mt-5">
                        <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg px-5 shadow fw-bold">
                            <i class="fas fa-envelope me-2"></i>Бидэнтэй холбогдох
                        </a>
                    </div>
                </div>
            </div>
        </section>

        @push('styles')
            <style>
                .card .fa-bullseye,
                .card .fa-eye {
                    filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.08));
                }
            </style>
        @endpush

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