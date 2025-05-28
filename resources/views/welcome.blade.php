@extends('layouts.web')

@section('content')

	<div class="body">

		@include('layouts.header')

		<div role="main" class="main">

			<div class="custom-bg-color-grey-1">
				<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-arrows-thin nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0"
					data-plugin-options="{'autoplay': true, 'autoplayTimeout': 7000}"
					data-dynamic-height="['calc(100vh - 135px)','calc(100vh - 135px)','calc(100vh - 161px)','calc(100vh - 161px)','calc(100vh - 161px)']"
					style="height: calc(100vh - 135px);">
					<div class="owl-stage-outer">
						<div class="owl-stage">

							<!-- Carousel Slide 1 -->
							<div class="owl-item position-relative overflow-hidden">
								<div class="background-image custom-bg-color-grey-1 position-absolute top-0 left-0 right-0 bottom-0"
									data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="10s"
									data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
									style="background-image: url(img/demos/education/slides/slide-1-bg.jpg); background-size: cover; background-position: 80% 90%;">
								</div>

								<img src="img/demos/education/slides/slide-1-1.png"
									class="img-fluid position-absolute bottom-0 d-none d-lg-block custom-slider-el-1 appear-animation"
									style="width: 400px; border: 4px solid #333; border-radius: 10px; box-shadow: 0 2px 6px rgba(0,0,0,0.3);"
									data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" alt="" />

								<div class="container h-100 r-relative z-index-1">
									<div class="row h-100 align-items-center">
										<div class="col">
											<div class="text-start custom-slider-text-block">
												<h2 class="text-color-secondary font-weight-extra-bold mb-1 custom-slider-text-1 p-relative z-index-1 appear-animation"
													data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="500">Мэдлэгийн
													<hr>төв
												</h2>

												<h2 class="font-weight-semi-bold mb-3 text-5 p-relative z-index-1 appear-animation"
													style="color: white" data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="1000">Өдөр бүр нэг шат ахицгаая</h2>

												<a href="#courses" data-hash data-hash-offset="0" data-hash-offset-lg="70"
													class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 appear-animation"
													data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="1200">Өсөлтийн зам эхэллээ!</a>
											</div>
										</div>
									</div>
								</div>
							</div>




							<!-- Carousel Slide 2 -->
							<div class="owl-item position-relative overflow-hidden">
								<div class="background-image-wrapper custom-bg-color-grey-1 position-absolute top-0 left-0 right-0 bottom-0"
									data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s"
									data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
									style="background-image: url(img/demos/education/slides/slide-2-bg.jpg); background-size: cover; background-position: 100% 100%;">
								</div>

								<img src="img/demos/education/slides/slide-2-1.png"
									class="img-fluid position-absolute bottom-0 d-none d-lg-block custom-slider-el-2 appear-animation"
									style="width: 400px; border: 4px solid #333; border-radius: 10px; box-shadow: 0 2px 6px rgba(0,0,0,0.3);"
									data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" alt="" />

								<div class="container h-100 r-relative z-index-1">
									<div class="row h-100 align-items-center">
										<div class="col">
											<div class="float-lg-end custom-slider-text-block text-end">
												<h2 class="text-color-secondary font-weight-extra-bold mb-4 custom-slider-text-1 p-relative z-index-1 appear-animation"
													data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="800">чиний
													<hr>ирээдүй
												</h2>
												<h2 class="font-weight-semi-bold mb-3 text-5 p-relative z-index-1 appear-animation"
													style="color: white" data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="1000">Таны боловсролын хэрэгцээндзориулсан
													иж бүрэн шийдэл!</h2>
												<a href="#courses" data-hash data-hash-offset="0" data-hash-offset-lg="70"
													class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 appear-animation"
													data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="1200">Өсөлтийн зам эхэллээ!</a>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="owl-nav">
						<button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
						<button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
					</div>
				</div>
			</div>

			<div class="bg-light">
				<div class="container py-4">
					<div class="row pb-2 mb-1">
						<div class="col-md-4 mb-4 mb-md-0">

							<div class="feature-box feature-box-steps">
								<div class="feature-box-step-number appear-animation"
									data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="250">
									<em>1.</em>
								</div>
								<div class="feature-box-icon bg-color-quaternary feature-box-icon-xl appear-animation"
									data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="250">
									<img class="icon-animated" width="100" height="46"
										src="img/demos/education/icons/icon-web-search-engine.svg" alt="" data-icon
										data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
								</div>
								<div class="feature-box-info appear-animation" data-appear-animation="fadeInLeftShorterPlus"
									data-appear-animation-delay="150">
									<p class="mt-2 pt-1 mb-0 text-1 p-relative top-5 text-uppercase">Алхам 1</p>
									<h4 class="mb-0 text-color-secondary">Өөрийнхөө хөтөлбөрийг ол.</h4>
								</div>
							</div>

						</div>
						<div class="col-md-4 mb-4 mb-md-0">

							<div class="feature-box feature-box-steps">
								<div class="feature-box-step-number appear-animation"
									data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500">
									<em>2.</em>
								</div>
								<div class="feature-box-icon bg-color-quaternary feature-box-icon-xl appear-animation"
									data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500">
									<img class="icon-animated" width="42" height="42"
										src="img/demos/education/icons/icon-list.svg" alt="" data-icon
										data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" />
								</div>
								<div class="feature-box-info appear-animation" data-appear-animation="fadeInLeftShorterPlus"
									data-appear-animation-delay="300">
									<p class="mt-2 pt-1 mb-0 text-1 p-relative top-5 text-uppercase">Алхам 2</p>
									<h4 class="mb-0 text-color-secondary">Бүртгэл хийх.</h4>
								</div>
							</div>

						</div>
						<div class="col-md-4">

							<div class="feature-box feature-box-steps">
								<div class="feature-box-step-number appear-animation"
									data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="750">
									<em>3.</em>
								</div>
								<div class="feature-box-icon bg-color-quaternary feature-box-icon-xl appear-animation"
									data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="750">
									<img class="icon-animated" width="45" height="45"
										src="img/demos/education/icons/icon-laptop.svg" alt="" data-icon
										data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
								</div>
								<div class="feature-box-info appear-animation" data-appear-animation="fadeInLeftShorterPlus"
									data-appear-animation-delay="450">
									<p class="mt-2 pt-1 mb-0 text-1 p-relative top-5 text-uppercase">Алхам 3</p>
									<h4 class="mb-0 text-color-secondary">Сэтгэл хангалуун суралц.</h4>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<section class="section custom-bg-color-grey-1 border-0 m-0" id="courses">
				<div class="container position-relative my-4">

					<div class="custom-element custom-element-pos-1 appear-animation" data-appear-animation="expandIn"
						data-appear-animation-delay="200">
						<div class="opacity-2" data-plugin-float-element
							data-plugin-options="{'startPos': 'bottom', 'speed': 0.8, 'transition': true, 'transitionDuration': 3000}">
							<img class="icon-animated" width="157" height="157"
								src="img/demos/education/elements/element-1.svg" alt="" data-icon
								data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
						</div>
					</div>

					<div class="row mb-4">
						<div class="col text-center">
							<div class="overflow-hidden">
								<h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-3-5 appear-animation"
									data-appear-animation="maskUp" data-appear-animation-delay="300">Хүмүүст хамгийн их
									сонгогдсон сургалтууд
								</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col appear-animation" data-appear-animation="fadeInLeftShorterPlus"
							data-appear-animation-delay="500">
							<div class="owl-carousel owl-theme nav-style-1 nav-outside nav-font-size-lg custom-nav-secondary mb-0"
								data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 2}, '1200': {'items': 3}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 20}">
								<div>
									<div class="card custom-card-courses border-radius-0">
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
													href="demo-education-courses-details.html" class="text-color-secondary"
													title="">анхан шат</a></h4>

											<div class="text-2">
												<span class="d-inline-block pe-2"><i class="far text-primary fa-user"></i>
													123 </span>
												<span class="d-inline-block pe-2"><i
														class="far text-primary fa-comments"></i> 123</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="card custom-card-courses border-radius-0">
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
													href="demo-education-courses-details.html" class="text-color-secondary"
													title="">анхан дунд шат</a></h4>

											<div class="text-2">
												<span class="d-inline-block pe-2"><i class="far text-primary fa-user"></i>
													123 </span>
												<span class="d-inline-block pe-2"><i
														class="far text-primary fa-comments"></i> 123</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="card custom-card-courses border-radius-0">
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
													href="demo-education-courses-details.html" class="text-color-secondary"
													title="">дунд шат</a></h4>

											<div class="text-2">
												<span class="d-inline-block pe-2"><i class="far text-primary fa-user"></i>
													123 </span>
												<span class="d-inline-block pe-2"><i
														class="far text-primary fa-comments"></i> 123</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="card custom-card-courses border-radius-0">
										<div class="p-relative">
											<a href="demo-education-courses-details.html" class="text-color-secondary"
												title="">
												<img class="card-img-top border-radius-0"
													src="img/demos/education/courses/course-4.jpg" alt="" />
											</a>
											<div class="custom-card-courses-author">
												<div class="img-thumbnail img-thumbnail-no-borders bg-transparent">
													<img src="img/avatars/avatar-4.jpg" class="rounded-circle" alt="">
												</div>
											</div>
										</div>
										<div class="card-body">
											<p class="mb-0 text-1 p-relative top-5 text-uppercase">John Doe</p>
											<h4 class="mb-3 text-color-secondary"><a
													href="demo-education-courses-details.html" class="text-color-secondary"
													title="">дунд ахисан шат</a></h4>

											<div class="text-2">
												<span class="d-inline-block pe-2"><i class="far text-primary fa-user"></i>
													123 </span>
												<span class="d-inline-block pe-2"><i
														class="far text-primary fa-comments"></i> 123</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row pt-2">
						<div class="col text-center">
							<a href="{{ url('/courses') }}"
								class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 mt-4 mb-2 appear-animation"
								data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350">
								БҮГДИЙГ ХАРАХ
							</a>
						</div>
					</div>
				</div>
			</section>
			<section class="section section-background custom-section-background-1 bg-color-tertiary border-0 m-0"
				style="background-image: url(img/demos/education/backgrounds/background-1.jpg); background-position: 100% 100%; background-repeat: no-repeat; background-size: cover">
				<div class="container my-4">
					<div class="row mb-4">
						<div class="col-lg-6">
							<div class="card border-radius-0 appear-animation" data-appear-animation="fadeInUpShorterPlus"
								data-appear-animation-delay="350">
								<div class="card-body py-5 my-2">

									<div class="row">
										<div class="col px-4">
											<div class="text-center">
												<h2
													class="text-color-secondary font-weight-semi-bold text-8 line-height-1 mb-2">
													Одоо бүртгүүл</h2>
												<p class="text-4">50% ХЯМДРАЛТАЙ</strong> Бүх курсуудад зориулсан</p>
											</div>
											<div class="countdown text-color-primary font-weight-semibold custom-countdown-style-1 justify-content-center mb-4 py-2 px-2"
												data-plugin-countdown
												data-plugin-options="{'textDay': 'DAYS', 'textHour': 'HRS', 'textMin': 'MIN', 'textSec': 'SEC', 'date': '2026/01/01 12:00:00', 'wrapperClass': 'text-color-primary', 'numberClass': 'font-weight-semibold text-color-primary'}">
											</div>

											<form class="custom-form-style-1 contact-form" action="php/contact-form.php"
												method="POST">

												<div class="contact-form-success alert alert-success d-none mt-4">
													<strong>Амжилттай!</strong> Таны бүртгэл бидэнд илгээгдлээ.
												</div>

												<div class="contact-form-error alert alert-danger d-none mt-4">
													<strong>Алдаа гарлаа!</strong> Таны бүртгэлийг илгээх үед алдаа гарлаа.
													<span class="mail-error-message text-1 d-block"></span>
												</div>

												<div class="row g-2">
													<div class="form-group col-md-6 mb-2">
														<input type="text" value=""
															data-msg-required="Please enter your first name."
															maxlength="100" class="form-control p-3 bg-color-tertiary"
															name="firstName" id="firstName" placeholder="Овог" required>
													</div>
													<div class="form-group col-md-6 mb-2">
														<input type="text" value=""
															data-msg-required="Please enter your last name." maxlength="100"
															class="form-control p-3 bg-color-tertiary custom-border-start-1"
															name="lastName" id="lastName" placeholder="Нэр*" required>
													</div>
												</div>
												<div class="row g-2">
													<div class="form-group col-md-6 mb-2">
														<input type="text" value=""
															data-msg-required="Please enter your phone number."
															maxlength="100" class="form-control p-3 bg-color-tertiary"
															name="phone" id="phone" placeholder="Утасны дугаар*" required>
													</div>
													<div class="form-group col-md-6 mb-2">
														<input type="email" value=""
															data-msg-required="Please enter your email address."
															data-msg-email="Please enter a valid email address."
															maxlength="100"
															class="form-control p-3 bg-color-tertiary custom-border-start-1"
															name="email" id="email" placeholder="EMAIL*" required>
													</div>
												</div>
												<div class="row g-2">
													<div class="form-group col mb-0">
														<input type="submit" value="Бүү хожимдоорой"
															class="btn btn-secondary font-weight-bold d-block btn-px-5 btn-py-3 w-100"
															data-loading-text="Loading...">
													</div>
												</div>
											</form>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="section custom-bg-color-grey-1 border-0 m-0">
				<div class="container position-relative my-4">

					<div class="custom-element custom-element-pos-2 appear-animation" data-appear-animation="expandIn"
						data-appear-animation-delay="200">
						<div class="opacity-2" data-plugin-float-element
							data-plugin-options="{'startPos': 'bottom', 'speed': 0.8, 'transition': true, 'transitionDuration': 3000}">
							<img class="icon-animated" width="157" height="157"
								src="img/demos/education/elements/element-1.svg" alt="" data-icon
								data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
						</div>
					</div>

					<div class="row mb-4">
						<div class="col text-center">
							<div class="overflow-hidden">
								<h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-3-5 appear-animation"
									data-appear-animation="maskUp" data-appear-animation-delay="300">Сурагчдын сэтгэгдэл
								</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="appear-animation" data-appear-animation="fadeInUpShorterPlus"
							data-appear-animation-delay="350">
							<div class="owl-carousel owl-theme nav-style-1 nav-outside nav-font-size-lg custom-nav-secondary mb-0"
								data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 20}">
								<div class="px-lg-5 mx-lg-5">
									<div
										class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-primary mb-0">
										<div class="testimonial-author">
											<img src="img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
										</div>
										<blockquote>
											<p class="mb-0 custom-font-1 fst-italic text-4 line-height-7">Энэ хичээлийг
												эхлэхээсээ өмнө би хятад хэл, соёлын талаар тун бага мэдлэгтэй байсан.
												Хөтөлбөр маш сайтар бүтэцтэй байсан бөгөөд эхлээд дуу авиа, энгийн хэлц
												үгсээс эхэлж, дараа нь илүү нарийн дүрэм, өгүүлбэр үүсгэх чадварт шилжсэн.
												Миний хамгийн ихээр үнэлсэн зүйл бол хичээл бүрт соёлын талаарх тайлбар
												байсан юм — үг цээжлэхээс гадна тэдний ард буй уламжлал, түүхийг ойлгох
												боломж олгосон. Багш нар тэвчээртэй, ойлгомжтой тайлбарладаг байсан бөгөөд
												аливаа эргэлзээг үргэлж тайлбарлаж өгдөг байсан. Энэ курсын ачаар би
												мандарин хэлээр энгийн яриа өрнүүлэхэд өөртөө итгэлтэй болсон ба Хятадын
												баян соёлыг илүү гүнзгий үнэлдэг болсон.</p>
										</blockquote>
										<div class="testimonial-author">
											<p><strong class="font-weight-bold">John Smith</strong></p>
										</div>
									</div>
								</div>
								<div class="px-lg-5 mx-lg-5">
									<div
										class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-primary mb-0">
										<div class="testimonial-author">
											<img src="img/clients/client-2.jpg" class="img-fluid rounded-circle" alt="">
										</div>
										<blockquote>
											<p class="mb-0 custom-font-1 fst-italic text-4 line-height-7">Хятад хэлний
												авиануудыг зөв дуулах нь энэ хичээлийг эхлэхээсээ өмнөх миний хамгийн том
												сорилтуудын нэг байлаа. Гэхдээ баяртайгаар хэлэхэд, хичээл олон дасгал,
												санамжийн арга, тодорхой тайлбаруудыг өгсөн нь авиануудыг аймшигтай
												санагдахаас аажмаар багасгасан. Мөн соёлын хэсгүүдийг нь их сонирхолтой олж
												авсан — Жилийн дунд намрын баяр болон Хятадын шинэ жил зэрэг баяруудыг сурах
												нь миний суралцлагыг хөгжилтэй, мартагдашгүй болгосон. Багш нар мэдлэгтэй
												бөгөөд үргэлж асуулт асуухыг уриалдаг байсан нь намайг урам зоригтой байхад
												тус болсон. Энэ курс надад хятад хэлээр ярих болон соёлын онцлогийг ойлгоход
												сайн бэлтгэл болсон гэж бодож байна.</p>
										</blockquote>
										<div class="testimonial-author">
											<p><strong class="font-weight-bold">John Smith</strong></p>
										</div>
									</div>
								</div>
								<div class="px-lg-5 mx-lg-5">
									<div
										class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-primary mb-0">
										<div class="testimonial-author">
											<img src="img/clients/client-3.jpg" class="img-fluid rounded-circle" alt="">
										</div>
										<blockquote>
											<p class="mb-0 custom-font-1 fst-italic text-4 line-height-7">Энэ хичээлд надад
												онцгой санагдсан зүйл бол ямар зэрэгтэйгээр хичээлүүдийг гүнзгий оролцуулах
												байлаа. Видео болон өгүүллэгийн элементүүд нь хичээлүүдийг амьдралтай,
												ойлгоход хялбар болгосон. Би хятад уламжлал, ардын домог, баяруудын ач
												холбогдлыг хэлний дадлага хамтдаа сурахыг ихэд таалагдсан. Мөн энэ курс маш
												дэмжлэгтэй онлайн олон нийтийн талбартай байсан бөгөөд суралцагчид зөвлөмж
												солилцож, асуулт асууж, эх хэлтэй хүмүүстэй дадлага хийж чаддаг байсан нь
												миний мандарин хэлний хэрэглээнд итгэл нэмсэн. Нийтдээ хэл сурах ба соёлыг
												үнэлэхийг холбосон баялаг туршлага болсон.</p>
										</blockquote>
										<div class="testimonial-author">
											<p><strong class="font-weight-bold">John Smith</strong></p>
										</div>
									</div>
								</div>
								<div class="px-lg-5 mx-lg-5">
									<div
										class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-primary mb-0">
										<div class="testimonial-author">
											<img src="img/clients/client-4.jpg" class="img-fluid rounded-circle" alt="">
										</div>
										<blockquote>
											<p class="mb-0 custom-font-1 fst-italic text-4 line-height-7">\Би энэ курсыг
												голчлон ойрын хугацаанд Хятадад хийх бизнес аялалд харилцааны чадвараа
												сайжруулах зорилгоор авсан. Өдөр тутмын яриа болон бизнесийн ёс зүйн практик
												зааварчилгаа үнэлж баршгүй байсан. Дуудлага болон сонсголын дасгалууд нь эх
												хэлээр ярьдаг хүмүүсийг илүү ойлгоход тусалсан бөгөөд өмнө надад хүнд байсан
												асуудал байлаа. Мөн мэргэжлийн орчинд чухал ёс заншил, цээрлэлийг
												тайлбарласан соёлын хичээлүүдийг үнэлсэн. Энэ курсын ачаар би Хятадын
												хамтран ажиллагчид, үйлчлүүлэгчидтэй харилцахад илүү бэлтгэлтэй, итгэлтэй
												болсон.</p>
										</blockquote>
										<div class="testimonial-author">
											<p><strong class="font-weight-bold">John Smith</strong></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="section bg-color-tertiary border-0 m-0">
				<div class="container my-4">
					<div class="row mb-4">
						<div class="col text-center">
							<div class="overflow-hidden">
								<h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-3-5 appear-animation"
									data-appear-animation="maskUp" data-appear-animation-delay="300">Сүүлийн үеийн мэдээ
								</h2>
							</div>
						</div>
					</div>
					<div class="row pb-3">
						<div class="col-lg-4 mb-4 mb-lg-0">
							<article class="appear-animation" data-appear-animation="fadeInUpShorter"
								data-appear-animation-delay="300">
								<div class="card border-0 border-radius-0 box-shadow-1">
									<div class="card-body p-3 z-index-1">
										<a href="demo-education-blog-post.html">
											<img class="card-img-top border-radius-0 mb-2"
												src="img/demos/education/blog/blog-1.jpg" alt="Card Image">
										</a>
										<p class="text-uppercase text-color-default text-1 my-2">
											<time pubdate datetime="2025-01-10">10 Jan 2025</time>
											<span class="opacity-3 d-inline-block px-2">|</span>
											3 Comments
											<span class="opacity-3 d-inline-block px-2">|</span>
											John Doe
										</p>
										<div class="card-body p-0">
											<h4 class="card-title text-5 font-weight-semi-bold pb-1 mb-2"><a
													class="text-color-secondary text-decoration-none"
													href="demo-education-blog-post.html">ХАЛУУН ОРОНД ХЭЛНИЙ БЭЛТГЭЛИЙН
													ТЭТГЭЛЭГТЭЙ СУРАЛЦААРАЙ🥳</a>
											</h4>
											<p class="card-text mb-2">СУРГУУЛИЙН ТОВЧ МЭДЭЭЛЭЛ №8
												💡Гуйжоу техникийн их сургууль нь (Guizhou Institute of Technology)
												Боловсролын яамнаас батлагдсан инженер, шинжлэх ухаан, менежментийн
												чиглэлээр мэргэшсэн олон мэргэжлийн өндөр стандарттай сургууль юм.
												💡БНХАУ-ын урд зүгт Гуйжоу мужийн Гуйяан хотод байршилтай.
												💡Гуйжоу техникийн их сургууль нь 2013 оны 4 сарын 18-нд албан ёсоор
												байгуулагдсан. 2024 оны 1 сарын 1-ний байдлаар, сургуулийн нийт сургалтын
												талбай 1336 метр квадрат, 19 коллеж болон 1 их сургуулийн технологийн
												лаборатори, 39 бакалаврын мэргэжилтэй, 882 багш, ажилчид, бакалаврын 12700
												гаруй оюутантай.
												Та элсэлтийн дэлгэрэнгүй мэдээллийг доорх утас болон хаягуудаас аваарай</p>
											<a href="demo-education-blog-post.html"
												class="btn btn-link font-weight-semibold text-decoration-none text-2 ps-0">READ
												MORE</a>
										</div>
									</div>
								</div>
							</article>
						</div>
						<div class="col-lg-4 mb-4 mb-lg-0">
							<article class="appear-animation" data-appear-animation="fadeInUpShorter"
								data-appear-animation-delay="300">
								<div class="card border-0 border-radius-0 box-shadow-1">
									<div class="card-body p-3 z-index-1">
										<a href="demo-education-blog-post.html">
											<img class="card-img-top border-radius-0 mb-2"
												src="img/demos/education/blog/blog-2.jpg" alt="Card Image">
										</a>
										<p class="text-uppercase text-color-default text-1 my-2">
											<time pubdate datetime="2025-01-10">10 Jan 2025</time>
											<span class="opacity-3 d-inline-block px-2">|</span>
											3 Comments
											<span class="opacity-3 d-inline-block px-2">|</span>
											John Doe
										</p>
										<div class="card-body p-0">
											<h4 class="card-title text-5 font-weight-semi-bold pb-1 mb-2"><a
													class="text-color-secondary text-decoration-none"
													href="demo-education-blog-post.html">ХЭЛНИЙ БЭЛТГЭЛИЙН ТЭТГЭЛЭГ
													ЗАРЛАГДЛАА🥳</a>
											</h4>
											<p class="card-text mb-2">📍Бээжинд байрладаг, Бээжин хотын боловсролын комиссын
												харьяанд байдаг улсын их сургууль юм. Өмнө нь Бээжингийн Эдийн засгийн их
												сургууль, Бээжингийн Санхүү, Худалдааны Их Сургууль гэж нэрлэгддэг байсан
												бөгөөд 1995 онд нэгдэж, Нийслэлийн Эдийн засаг, Бизнесийн Их Сургууль
												болжээ. Одоогийн байдлаар уг сургууль нь Бээжин дэх гол их сургууль болсон
												бөгөөд 2 том кампустай.
												📍Мэргэжлийн магистрын 18 хөтөлбөр, 1800 гаруй багш, түүний дотор 1000 гаруй
												бүрэн цагийн багш, 16,784 оюутантай, үүнээс 11,522 бакалавр, 4,482 магистр,
												646 докторын оюутан, 91 олон улсын оюутантай. </p>
											<a href="demo-education-blog-post.html"
												class="btn btn-link font-weight-semibold text-decoration-none text-2 ps-0">READ
												MORE</a>
										</div>
									</div>
								</div>
							</article>
						</div>
						<div class="col-lg-4 mb-4 mb-lg-0">
							<article class="appear-animation" data-appear-animation="fadeInUpShorter"
								data-appear-animation-delay="300">
								<div class="card border-0 border-radius-0 box-shadow-1">
									<div class="card-body p-3 z-index-1">
										<a href="demo-education-blog-post.html">
											<img class="card-img-top border-radius-0 mb-2"
												src="img/demos/education/blog/blog-3.jpg" alt="Card Image">
										</a>
										<p class="text-uppercase text-color-default text-1 my-2">
											<time pubdate datetime="2025-01-10">10 Jan 2025</time>
											<span class="opacity-3 d-inline-block px-2">|</span>
											3 Comments
											<span class="opacity-3 d-inline-block px-2">|</span>
											John Doe
										</p>
										<div class="card-body p-0">
											<h4 class="card-title text-5 font-weight-semi-bold pb-1 mb-2"><a
													class="text-color-secondary text-decoration-none"
													href="demo-education-blog-post.html">богино_хугацааны_эрчимжүүлсэн_сургалт</a>
											</h4>
											<p class="card-text mb-2"> ⌛️БҮРТГЭЛИЙН ХУГАЦАА 2025.05.30 ХҮРТЭЛ ⌛️
												14 хоногийн хугацаанд хятад хэлийг орчинд нь суралцангаа хоттой танилцах,
												аялах боломжийг танд олгож байна.
												14 хоногийн хөтөлбөрт:
												✨СУРГАЛТЫН ТӨЛБӨР
												✨ДОТУУР БАЙР
												✨ЗАМЫН ЗАРДАЛ
												✨АЯЛЛЫН ҮЗВЭР ҮЙЛЧИЛГЭЭНИЙ ТӨЛБӨР зэрэг багтсан
												ДАВУУ ТАЛ:
												⚡️АЮУЛГҮЙ БАТАЛГААТАЙ
												⚡️10 ЖИЛИЙН ТУРШЛАГАТАЙ
												⚡️ ХЯТАД БАГШ НАР ЗААНА
												⚡️ХОТЫН ТӨВД БАЙРЛАЛТАЙ
												⚡️13-60 НАС /ГЭР БҮЛЭЭРЭЭ ЯВЖ БОЛНО/
												⚡️АЯЛЛЫН ХӨТӨЧТЭЙ
												⚡️АНГИ ХАМТ ОЛНООРОО АЯЛАХ БОЛОМЖТОЙ
												Хөтөлбөр үргэлжлэх хугацаа: 2025/07/20-2025/08/02
												✅Хятад улсад суралцах хүсэлтэй сурахаар зорьж буй хүн бүхэн дэлгэрэнгүй
												мэдээлэл зөвлөгөө авах боломжтой.</p>
											<a href="demo-education-blog-post.html"
												class="btn btn-link font-weight-semibold text-decoration-none text-2 ps-0">READ
												MORE</a>
										</div>
									</div>
								</div>
							</article>
						</div>

					</div>
				</div>
			</section>
			<section class="section section-background custom-section-background-2 bg-color-light border-0 m-0" style="background-image: url(img/demos/education/backgrounds/background-2.jpg); 
									background-position: center; 
									background-repeat: no-repeat; 
									background-size: cover;
									border: 4px solid #ccc; 
									border-radius: 8px;">
				<div class="custom-element custom-element-pos-3 appear-animation" data-appear-animation="expandIn"
					data-appear-animation-delay="200">
					<div class="opacity-2" data-plugin-float-element
						data-plugin-options="{'startPos': 'bottom', 'speed': 0.8, 'transition': true, 'transitionDuration': 3000}">
						<img class="icon-animated" width="157" height="157" src="img/demos/education/elements/element-1.svg"
							alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
					</div>
				</div>

				<div class="row justify-content-end mb-4">
					<div class="col-lg-6 py-4">

						<div class="row">
							<div class="col">
								<div class="feature-box feature-box-style-5">
									<div class="feature-box-icon appear-animation"
										data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="100">
										<img class="icon-animated" width="50" src="img/demos/education/icons/icon-medal.svg"
											alt="" data-icon
											data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
									</div>
									<div class="feature-box-info">
										<div class="overflow-hidden">
											<h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-2 pb-1 appear-animation"
												data-appear-animation="maskUp" data-appear-animation-delay="100">
												National Awards</h2>
										</div>
										<p class="text-3-5 line-height-9 mb-5 appear-animation"
											data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100">
											Lorem ipsum dolor sit amet,
											consectetur adipiscing elit. Suspendisse quis elit vitae enim vehicula
											fermentum consectetur adipiscing elit.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="feature-box feature-box-style-5">
									<div class="feature-box-icon appear-animation"
										data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200">
										<img class="icon-animated" width="50" src="img/demos/education/icons/icon-list.svg"
											alt="" data-icon
											data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
									</div>
									<div class="feature-box-info">
										<div class="overflow-hidden">
											<h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-2 pb-1 appear-animation"
												data-appear-animation="maskUp" data-appear-animation-delay="200">
												Many Courses</h2>
										</div>
										<p class="text-3-5 line-height-9 mb-5 appear-animation"
											data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
											Lorem ipsum dolor sit amet,
											consectetur adipiscing elit. Suspendisse quis elit vitae enim vehicula
											fermentum consectetur adipiscing elit.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="feature-box feature-box-style-5">
									<div class="feature-box-icon appear-animation"
										data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="300">
										<img class="icon-animated" width="50" src="img/demos/education/icons/icon-badge.svg"
											alt="" data-icon
											data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
									</div>
									<div class="feature-box-info">
										<div class="overflow-hidden">
											<h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-2 pb-1 appear-animation"
												data-appear-animation="maskUp" data-appear-animation-delay="300">The
												Best Instructors</h2>
										</div>
										<p class="text-3-5 line-height-9 mb-0 appear-animation"
											data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="300">
											Lorem ipsum dolor sit amet,
											consectetur adipiscing elit. Suspendisse quis elit vitae enim vehicula
											fermentum consectetur adipiscing elit. </p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
		</div>

	</div>
	@include('layouts.footer')
@endsection