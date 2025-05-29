@extends('layouts.web')

@section('content')

	<div class="body">
		@include('layouts.header')

		<div role="main" class="main">

			<section
				class="page-header page-header-modern page-header-background page-header-background-md custom-bg-color-grey-1 mb-0"
				style="background-image: url(img/demos/education/backgrounds/page-header.jpg); background-position: 100% 100%;">
				<div class="container">
					<div class="row mt-5">
						<div class="col align-self-center p-static text-center">
							<h1 class=" text-color-darkwhite text-10 font-weight-semibold">Манай хамт олон</h1>
						</div>
					</div>
				</div>
			</section>
			<div class="container">
				<div class="row py-3">
					<div class="col">
						<ul class="breadcrumb d-block">
							<li><a href="#">Нүүр хуудас</a></li>
							<li class="active">Хамт олон</li>
						</ul>
					</div>
				</div>
			</div>
			<section class="section custom-bg-color-grey-1 border-0 m-0">
				<div class="container">

					<div class="row py-3 gy-5 gy-lg-0">

						<div class="col">

							<div class="row mb-5">
								<div class="col">
									<div
										class="d-flex flex-wrap bg-light custom-link-hover-effects custom-instructor-details">
										<div class="position-relative lazyload col-12 col-md-3"
											data-bg-src="img/demos/education/team/team-1.jpg"
											style="background-position: center; background-size: cover; min-height: 302px;">
										</div>
										<div class="col-md-9 p-5">

											<div class="d-md-flex mb-4">
												<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<p class="mb-0 text-1 text-uppercase p-relative top-3">Нэр</p>
															<h4 class="mb-0 text-color-secondary text-6">Б.Отгонжаргал</h4>
														</div>
													</div>
												</div>
												<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<p class="mb-0 text-1 text-uppercase p-relative top-3">Хичээл
																тоо</p>
															<h4 class="mb-0 text-color-secondary text-3">12</h4>
														</div>
													</div>
												</div>
												<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 flex-grow-1">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<p class="mb-0 text-1 text-uppercase p-relative top-3"></p>
															<h4 class="mb-0 text-color-secondary text-3"></h4>
														</div>
													</div>
												</div>
												<div class="ps-md-4">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<a href="/courses"
																class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3">ХИЧЭЭЛ
																ҮЗЭХ</a>
														</div>
													</div>
												</div>
											</div>

											<div class="custom-read-more-style-1" data-plugin-readmore data-plugin-options="{
																					'buttonOpenLabel': 'View More <i class=\'fas fa-chevron-down text-2 ms-1\'></i>',
																					'buttonCloseLabel': 'View Less <i class=\'fas fa-chevron-up text-2 ms-1\'></i>',
																					'maxHeight': 120
																				}">
												<p class="text-3-5">Би Бээжинд төрж өссөн бөгөөд 5 жилийн турш олон улсын
													оюутнуудад хятад хэл болон соёл заасан. Би хичээлээ ойлгомжтой,
													сонирхолтой, амьд харилцаатай байдлаар заахыг зорьдог. </p>
												<p class="text-3-5">Миний бодлоор хятад хэлийг сурахад хамгийн чухал зүйл
													бол сонирхол ба тууштай байдал юм. Би таны суралцах зорилгыг сонсож,
													тохирсон
													хөтөлбөрөөр дэмжих болно. Хятад хэлийг хамтдаа сураад, түүгээр дамжуулан
													шинэ ертөнцийг нээцгээе! </p>
												<p class="text-3-5">Миний хичээлд
													шинэ үг, дүрэм, яриа, соёлын ялгаа зэргийг тоглоом, яриа, дүрслэлтэй
													аргаар хослуулан заадаг</p>
												<div class="readmore-button-wrapper d-none">
													<a href="#" class="text-decoration-none">
														View More
														<i class="fas fa-chevron-down"></i>
													</a>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="row mb-5">
								<div class="col">
									<div
										class="d-flex flex-wrap bg-light custom-link-hover-effects custom-instructor-details">
										<div class="position-relative lazyload col-12 col-md-3"
											data-bg-src="img/demos/education/team/team-2.jpg"
											style="background-position: center; background-size: cover; min-height: 302px;">
										</div>
										<div class="col-md-9 p-5">

											<div class="d-md-flex mb-4">
												<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<p class="mb-0 text-1 text-uppercase p-relative top-3">Нэр</p>
															<h4 class="mb-0 text-color-secondary text-6">М.Мөнхцэцэг</h4>
														</div>
													</div>
												</div>
												<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<p class="mb-0 text-1 text-uppercase p-relative top-3">Хичээл
																тоо</p>
															<h4 class="mb-0 text-color-secondary text-3">12</h4>
														</div>
													</div>
												</div>
												<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 flex-grow-1">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<p class="mb-0 text-1 text-uppercase p-relative top-3"></p>
															<h4 class="mb-0 text-color-secondary text-3"></h4>
														</div>
													</div>
												</div>
												<div class="ps-md-4">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<a href="/courses"
																class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3">ХИЧЭЭЛ
																ҮЗЭХ</a>
														</div>
													</div>
												</div>
											</div>

											<div class="custom-read-more-style-1" data-plugin-readmore data-plugin-options="{
																					'buttonOpenLabel': 'View More <i class=\'fas fa-chevron-down text-2 ms-1\'></i>',
																					'buttonCloseLabel': 'View Less <i class=\'fas fa-chevron-up text-2 ms-1\'></i>',
																					'maxHeight': 120
																				}">
												<p class="text-3-5">Би Бээжинд төрж өссөн бөгөөд 5 жилийн турш олон улсын
													оюутнуудад хятад хэл болон соёл заасан. Би хичээлээ ойлгомжтой,
													сонирхолтой, амьд харилцаатай байдлаар заахыг зорьдог. </p>
												<p class="text-3-5">Миний бодлоор хятад хэлийг сурахад хамгийн чухал зүйл
													бол сонирхол ба тууштай байдал юм. Би таны суралцах зорилгыг сонсож,
													тохирсон
													хөтөлбөрөөр дэмжих болно. Хятад хэлийг хамтдаа сураад, түүгээр дамжуулан
													шинэ ертөнцийг нээцгээе! </p>
												<p class="text-3-5">Миний хичээлд
													шинэ үг, дүрэм, яриа, соёлын ялгаа зэргийг тоглоом, яриа, дүрслэлтэй
													аргаар хослуулан заадаг.</p>
												<div class="readmore-button-wrapper d-none">
													<a href="#" class="text-decoration-none">
														View More
														<i class="fas fa-chevron-down"></i>
													</a>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="row mb-5">
								<div class="col">
									<div
										class="d-flex flex-wrap bg-light custom-link-hover-effects custom-instructor-details">
										<div class="position-relative lazyload col-12 col-md-3"
											data-bg-src="img/demos/education/team/team-3.jpg"
											style="background-position: center; background-size: cover; min-height: 302px;">
										</div>
										<div class="col-md-9 p-5">

											<div class="d-md-flex mb-4">
												<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<p class="mb-0 text-1 text-uppercase p-relative top-3">Нэр</p>
															<h4 class="mb-0 text-color-secondary text-6">Б.Ариунхишиг</h4>
														</div>
													</div>
												</div>
												<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<p class="mb-0 text-1 text-uppercase p-relative top-3">Хичээл
																тоо</p>
															<h4 class="mb-0 text-color-secondary text-3">12</h4>
														</div>
													</div>
												</div>
												<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 flex-grow-1">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<p class="mb-0 text-1 text-uppercase p-relative top-3"></p>
															<h4 class="mb-0 text-color-secondary text-3"></h4>
														</div>
													</div>
												</div>
												<div class="ps-md-4">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<a href="/courses"
																class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3">ХИЧЭЭЛ
																ҮЗЭХ</a>
														</div>
													</div>
												</div>
											</div>

											<div class="custom-read-more-style-1" data-plugin-readmore data-plugin-options="{
																					'buttonOpenLabel': 'View More <i class=\'fas fa-chevron-down text-2 ms-1\'></i>',
																					'buttonCloseLabel': 'View Less <i class=\'fas fa-chevron-up text-2 ms-1\'></i>',
																					'maxHeight': 120
																				}">
												<p class="text-3-5">Би Бээжинд төрж өссөн бөгөөд 5 жилийн турш олон улсын
													оюутнуудад хятад хэл болон соёл заасан. Би хичээлээ ойлгомжтой,
													сонирхолтой, амьд харилцаатай байдлаар заахыг зорьдог.</p>
												<p class="text-3-5">Миний бодлоор хятад хэлийг сурахад хамгийн чухал зүйл
													бол сонирхол ба тууштай байдал юм. Би таны суралцах зорилгыг сонсож,
													тохирсон
													хөтөлбөрөөр дэмжих болно. Хятад хэлийг хамтдаа сураад, түүгээр дамжуулан
													шинэ ертөнцийг нээцгээе!</p>
												<p class="text-3-5">Миний хичээлд
													шинэ үг, дүрэм, яриа, соёлын ялгаа зэргийг тоглоом, яриа, дүрслэлтэй
													аргаар хослуулан заадаг. </p>
												<div class="readmore-button-wrapper d-none">
													<a href="#" class="text-decoration-none">
														View More
														<i class="fas fa-chevron-down"></i>
													</a>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="row mb-5">
								<div class="col">
									<div
										class="d-flex flex-wrap bg-light custom-link-hover-effects custom-instructor-details">
										<div class="position-relative lazyload col-12 col-md-3"
											data-bg-src="img/demos/education/team/team-4.jpg"
											style="background-position: center; background-size: cover; min-height: 302px;">
										</div>
										<div class="col-md-9 p-5">

											<div class="d-md-flex mb-4">
												<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<p class="mb-0 text-1 text-uppercase p-relative top-3">Нэр</p>
															<h4 class="mb-0 text-color-secondary text-6">Э.Мөнхдолгор</h4>
														</div>
													</div>
												</div>
												<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<p class="mb-0 text-1 text-uppercase p-relative top-3">Хичээл
																тоо</p>
															<h4 class="mb-0 text-color-secondary text-3">12</h4>
														</div>
													</div>
												</div>
												<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 flex-grow-1">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<p class="mb-0 text-1 text-uppercase p-relative top-3"></p>
															<h4 class="mb-0 text-color-secondary text-3"></h4>
														</div>
													</div>
												</div>
												<div class="ps-md-4">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<a href="/courses"
																class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3">ХИЧЭЭЛ
																ҮЗЭХ</a>
														</div>
													</div>
												</div>
											</div>

											<div class="custom-read-more-style-1" data-plugin-readmore data-plugin-options="{
																					'buttonOpenLabel': 'View More <i class=\'fas fa-chevron-down text-2 ms-1\'></i>',
																					'buttonCloseLabel': 'View Less <i class=\'fas fa-chevron-up text-2 ms-1\'></i>',
																					'maxHeight': 120
																				}">
												<p class="text-3-5"> Би Бээжинд төрж өссөн бөгөөд 5 жилийн турш олон улсын
													оюутнуудад хятад хэл болон соёл заасан. Би хичээлээ ойлгомжтой,
													сонирхолтой, амьд харилцаатай байдлаар заахыг зорьдог.
												</p>
												<p class="text-3-5">Миний бодлоор хятад хэлийг сурахад хамгийн чухал зүйл
													бол сонирхол ба тууштай байдал юм. Би таны суралцах зорилгыг сонсож,
													тохирсон
													хөтөлбөрөөр дэмжих болно. Хятад хэлийг хамтдаа сураад, түүгээр дамжуулан
													шинэ ертөнцийг нээцгээе! </p>
												<p class="text-3-5"> Миний хичээлд
													шинэ үг, дүрэм, яриа, соёлын ялгаа зэргийг тоглоом, яриа, дүрслэлтэй
													аргаар хослуулан заадаг. </p>
												<div class="readmore-button-wrapper d-none">
													<a href="#" class="text-decoration-none">
														View More
														<i class="fas fa-chevron-down"></i>
													</a>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="row mb-5">
								<div class="col">
									<div
										class="d-flex flex-wrap bg-light custom-link-hover-effects custom-instructor-details">
										<div class="position-relative lazyload col-12 col-md-3"
											data-bg-src="img/demos/education/team/team-5.jpg"
											style="background-position: center; background-size: cover; min-height: 302px;">
										</div>
										<div class="col-md-9 p-5">

											<div class="d-md-flex mb-4">
												<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<p class="mb-0 text-1 text-uppercase p-relative top-3">Full Name
															</p>
															<h4 class="mb-0 text-color-secondary text-6">Bob Doe</h4>
														</div>
													</div>
												</div>
												<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<p class="mb-0 text-1 text-uppercase p-relative top-3">Хичээл
																тоо</p>
															<h4 class="mb-0 text-color-secondary text-3">12</h4>
														</div>
													</div>
												</div>
												<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 flex-grow-1">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<p class="mb-0 text-1 text-uppercase p-relative top-3"></p>
															<h4 class="mb-0 text-color-secondary text-3"></h4>
														</div>
													</div>
												</div>
												<div class="ps-md-4">
													<div class="d-flex flex-row align-items-center h-100">
														<div class="p-0">
															<a href="/courses"
																class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3">ХИЧЭЭЛ
																ҮЗЭХ</a>
														</div>
													</div>
												</div>
											</div>

											<div class="custom-read-more-style-1" data-plugin-readmore data-plugin-options="{
																					'buttonOpenLabel': 'View More <i class=\'fas fa-chevron-down text-2 ms-1\'></i>',
																					'buttonCloseLabel': 'View Less <i class=\'fas fa-chevron-up text-2 ms-1\'></i>',
																					'maxHeight': 120
																				}">
												<p class="text-3-5">Би Бээжинд төрж өссөн бөгөөд 5 жилийн турш олон улсын
													оюутнуудад хятад хэл болон соёл заасан. Би хичээлээ ойлгомжтой,
													сонирхолтой, амьд харилцаатай байдлаар заахыг зорьдог. </p>
												<p class="text-3-5">Миний бодлоор хятад хэлийг сурахад хамгийн чухал зүйл
													бол сонирхол ба тууштай байдал юм. Би таны суралцах зорилгыг сонсож,
													тохирсон
													хөтөлбөрөөр дэмжих болно. Хятад хэлийг хамтдаа сураад, түүгээр дамжуулан
													шинэ ертөнцийг нээцгээе! </p>
												<p class="text-3-5">Миний хичээлд
													шинэ үг, дүрэм, яриа, соёлын ялгаа зэргийг тоглоом, яриа, дүрслэлтэй
													аргаар хослуулан заадаг</p>
												<div class="readmore-button-wrapper d-none">
													<a href="#" class="text-decoration-none">
														View More
														<i class="fas fa-chevron-down"></i>
													</a>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
		</div>

		<section class="section section-height-3 bg-color-tertiary border-0 m-0">
			<div class="container py-3">
				<div class="row align-items-center justify-content-center text-center text-lg-start">
					<div class="col-md-8 col-lg-9 mb-4 mb-lg-0">
						<h2 class="text-color-primary font-weight-bold mb-0 appear-animation"
							data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="150">Карьераа
							эхлүүлэхэд бэлэн үү?</h2>
					</div>
					<div class="col-lg-3 text-lg-end">
						<a href="/courses"
							class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 mt-4 mb-2 appear-animation"
							data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="350">Тэгье!</a>
					</div>
				</div>
			</div>
		</section>

	</div>

	@include('layouts.footer')
	</div>

	<!-- Vendor -->
	<script src="vendor/plugins/js/plugins.min.js"></script>
	<script src="vendor/jquery.countdown/jquery.countdown.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Theme Custom -->
	<script src="js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>


@endsection