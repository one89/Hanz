@extends('layouts.web')

@section('content')

		<div class="body">
			@include('layouts.header')

			<div role="main" class="main">

				<section class="page-header page-header-modern page-header-background page-header-background-md custom-bg-color-grey-1 mb-0" style="background-image: url(img/demos/education/backgrounds/page-header.jpg); background-position: 100% 100%;">
					<div class="container">
						<div class="row mt-5">
							<div class="col align-self-center p-static text-center">
								<h1 class="font-weight-bold text-color-secondary text-10">Instructors</h1>
							</div>
						</div>
					</div>
				</section>
				<div class="container">
					<div class="row py-3">
						<div class="col">
							<ul class="breadcrumb d-block">
								<li><a href="#">Home</a></li>
								<li class="active">Instructors</li>
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
										<div class="d-flex flex-wrap bg-light custom-link-hover-effects custom-instructor-details">
											<div class="position-relative lazyload col-12 col-md-3" data-bg-src="img/demos/education/team/team-1.jpg" style="background-position: center; background-size: cover; min-height: 302px;">
											</div>
											<div class="col-md-9 p-5">

												<div class="d-md-flex mb-4">
													<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<p class="mb-0 text-1 text-uppercase p-relative top-3">Full Name</p>
																<h4 class="mb-0 text-color-secondary text-6">John Doe</h4>
															</div>
														</div>
													</div>
													<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<p class="mb-0 text-1 text-uppercase p-relative top-3">Available Courses</p>
																<h4 class="mb-0 text-color-secondary text-3">12</h4>
															</div>
														</div>
													</div>
													<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 flex-grow-1">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<p class="mb-0 text-1 text-uppercase p-relative top-3">Average Rating</p>
																<h4 class="mb-0 text-color-secondary text-3">4.75</h4>
															</div>
														</div>
													</div>
													<div class="ps-md-4">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<a href="#" class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3">VIEW COURSES</a>
															</div>
														</div>
													</div>
												</div>

												<div class="custom-read-more-style-1" data-plugin-readmore 
													data-plugin-options="{
														'buttonOpenLabel': 'View More <i class=\'fas fa-chevron-down text-2 ms-1\'></i>',
														'buttonCloseLabel': 'View Less <i class=\'fas fa-chevron-up text-2 ms-1\'></i>',
														'maxHeight': 120
													}">
													<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
													<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
													<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
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
										<div class="d-flex flex-wrap bg-light custom-link-hover-effects custom-instructor-details">
											<div class="position-relative lazyload col-12 col-md-3" data-bg-src="img/demos/education/team/team-2.jpg" style="background-position: center; background-size: cover; min-height: 302px;">
											</div>
											<div class="col-md-9 p-5">

												<div class="d-md-flex mb-4">
													<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<p class="mb-0 text-1 text-uppercase p-relative top-3">Full Name</p>
																<h4 class="mb-0 text-color-secondary text-6">Janice Doe</h4>
															</div>
														</div>
													</div>
													<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<p class="mb-0 text-1 text-uppercase p-relative top-3">Available Courses</p>
																<h4 class="mb-0 text-color-secondary text-3">12</h4>
															</div>
														</div>
													</div>
													<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 flex-grow-1">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<p class="mb-0 text-1 text-uppercase p-relative top-3">Average Rating</p>
																<h4 class="mb-0 text-color-secondary text-3">4.75</h4>
															</div>
														</div>
													</div>
													<div class="ps-md-4">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<a href="#" class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3">VIEW COURSES</a>
															</div>
														</div>
													</div>
												</div>

												<div class="custom-read-more-style-1" data-plugin-readmore 
													data-plugin-options="{
														'buttonOpenLabel': 'View More <i class=\'fas fa-chevron-down text-2 ms-1\'></i>',
														'buttonCloseLabel': 'View Less <i class=\'fas fa-chevron-up text-2 ms-1\'></i>',
														'maxHeight': 120
													}">
													<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
													<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
													<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
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
										<div class="d-flex flex-wrap bg-light custom-link-hover-effects custom-instructor-details">
											<div class="position-relative lazyload col-12 col-md-3" data-bg-src="img/demos/education/team/team-3.jpg" style="background-position: center; background-size: cover; min-height: 302px;">
											</div>
											<div class="col-md-9 p-5">

												<div class="d-md-flex mb-4">
													<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<p class="mb-0 text-1 text-uppercase p-relative top-3">Full Name</p>
																<h4 class="mb-0 text-color-secondary text-6">Robert Doe</h4>
															</div>
														</div>
													</div>
													<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<p class="mb-0 text-1 text-uppercase p-relative top-3">Available Courses</p>
																<h4 class="mb-0 text-color-secondary text-3">12</h4>
															</div>
														</div>
													</div>
													<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 flex-grow-1">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<p class="mb-0 text-1 text-uppercase p-relative top-3">Average Rating</p>
																<h4 class="mb-0 text-color-secondary text-3">4.75</h4>
															</div>
														</div>
													</div>
													<div class="ps-md-4">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<a href="#" class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3">VIEW COURSES</a>
															</div>
														</div>
													</div>
												</div>

												<div class="custom-read-more-style-1" data-plugin-readmore 
													data-plugin-options="{
														'buttonOpenLabel': 'View More <i class=\'fas fa-chevron-down text-2 ms-1\'></i>',
														'buttonCloseLabel': 'View Less <i class=\'fas fa-chevron-up text-2 ms-1\'></i>',
														'maxHeight': 120
													}">
													<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
													<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
													<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
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
										<div class="d-flex flex-wrap bg-light custom-link-hover-effects custom-instructor-details">
											<div class="position-relative lazyload col-12 col-md-3" data-bg-src="img/demos/education/team/team-4.jpg" style="background-position: center; background-size: cover; min-height: 302px;">
											</div>
											<div class="col-md-9 p-5">

												<div class="d-md-flex mb-4">
													<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<p class="mb-0 text-1 text-uppercase p-relative top-3">Full Name</p>
																<h4 class="mb-0 text-color-secondary text-6">Alice Doe</h4>
															</div>
														</div>
													</div>
													<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<p class="mb-0 text-1 text-uppercase p-relative top-3">Available Courses</p>
																<h4 class="mb-0 text-color-secondary text-3">12</h4>
															</div>
														</div>
													</div>
													<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 flex-grow-1">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<p class="mb-0 text-1 text-uppercase p-relative top-3">Average Rating</p>
																<h4 class="mb-0 text-color-secondary text-3">4.75</h4>
															</div>
														</div>
													</div>
													<div class="ps-md-4">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<a href="#" class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3">VIEW COURSES</a>
															</div>
														</div>
													</div>
												</div>

												<div class="custom-read-more-style-1" data-plugin-readmore 
													data-plugin-options="{
														'buttonOpenLabel': 'View More <i class=\'fas fa-chevron-down text-2 ms-1\'></i>',
														'buttonCloseLabel': 'View Less <i class=\'fas fa-chevron-up text-2 ms-1\'></i>',
														'maxHeight': 120
													}">
													<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
													<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
													<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
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
										<div class="d-flex flex-wrap bg-light custom-link-hover-effects custom-instructor-details">
											<div class="position-relative lazyload col-12 col-md-3" data-bg-src="img/demos/education/team/team-5.jpg" style="background-position: center; background-size: cover; min-height: 302px;">
											</div>
											<div class="col-md-9 p-5">

												<div class="d-md-flex mb-4">
													<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<p class="mb-0 text-1 text-uppercase p-relative top-3">Full Name</p>
																<h4 class="mb-0 text-color-secondary text-6">Bob Doe</h4>
															</div>
														</div>
													</div>
													<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 border-right">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<p class="mb-0 text-1 text-uppercase p-relative top-3">Available Courses</p>
																<h4 class="mb-0 text-color-secondary text-3">12</h4>
															</div>
														</div>
													</div>
													<div class="ps-md-0 mb-3 mb-md-0 pe-4 me-4 flex-grow-1">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<p class="mb-0 text-1 text-uppercase p-relative top-3">Average Rating</p>
																<h4 class="mb-0 text-color-secondary text-3">4.75</h4>
															</div>
														</div>
													</div>
													<div class="ps-md-4">
														<div class="d-flex flex-row align-items-center h-100">
															<div class="p-0">
																<a href="#" class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3">VIEW COURSES</a>
															</div>
														</div>
													</div>
												</div>

												<div class="custom-read-more-style-1" data-plugin-readmore 
													data-plugin-options="{
														'buttonOpenLabel': 'View More <i class=\'fas fa-chevron-down text-2 ms-1\'></i>',
														'buttonCloseLabel': 'View Less <i class=\'fas fa-chevron-up text-2 ms-1\'></i>',
														'maxHeight': 120
													}">
													<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
													<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
													<p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. </p>
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

								<div class="row">
									<div class="col">
										<ul class="pagination float-end p-relative bottom-2">
											<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
										</ul>
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
								<h2 class="text-color-primary font-weight-bold mb-0 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="150">Ready to kick-start your career?</h2>
							</div>
							<div class="col-lg-3 text-lg-end">
								<a href="demo-education-courses.html" class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 mt-4 mb-2 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="350">GET STARTED NOW</a>
							</div>
						</div>
					</div>
				</section>

			</div>

			<footer id="footer" class="footer-reveal bg-color-secondary border-0 mt-0">
				<div class="container py-5">
					<div class="row py-5">
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

							<a href="demo-education.html" class="d-inline-block mb-3">
								<img alt="Porto" width="115" height="30" src="img/demos/education/logo-footer.png">
							</a>

							<ul class="social-icons social-icons-clean social-icons-icon-light">
								<li>
									<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
								</li>
								<li>
									<a href="https://www.twitter.com/"><i class="fab fa-x-twitter"></i></a>
								</li>
								<li>
									<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>

							<p class="text-3 mt-4 mb-0 line-height-8 text-color-tertiary opacity-6">Porto Education. © 2025.<br> All Rights Reserved</p>

						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<h4 class="font-weight-bold text-5">About Us</h4>
							<ul class="list list-unstyled text-color-tertiary opacity-6">
								<li class="mb-1">
									Porto Education
								</li>
								<li class="mb-1">
									123 Porto Blvd, Suite 100
								</li>
								<li class="mb-1">
									New York, NY
								</li>
								<li class="mb-1">
									Phone: <a href="tel:1234567890" class="text-decoration-none text-color-tertiary text-color-hover-primary">123-456-7890</a>
								</li>
								<li>
									Email: <a href="mailto:email@domain.com" class="text-decoration-none text-color-tertiary text-color-hover-primary">porto@domain.com</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
							<h4 class="font-weight-bold text-5">Navigation</h4>
							<ul class="list list-unstyled opacity-6">
								<li class="mb-1">
									<a href="demo-education.html" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- Home</a>
								</li>
								<li class="mb-1">
									<a href="demo-education-about-us.html" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- About Us</a>
								</li>
								<li class="mb-1">
									<a href="demo-education-courses.html" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- Courses</a>
								</li>
								<li class="mb-1">
									<a href="demo-education-instructors.html" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- Instructors</a>
								</li>
								<li class="mb-1">
									<a href="demo-education-blog.html" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- Blog</a>
								</li>
								<li>
									<a href="demo-education-contact-us.html" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- Contact Us</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
							<h4 class="font-weight-bold text-5">Support</h4>
							<ul class="list list-unstyled opacity-6">
								<li class="mb-1">
									<a href="demo-education.html" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- Documentation</a>
								</li>
								<li class="mb-1">
									<a href="demo-education.html" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- Forums</a>
								</li>
								<li class="mb-1">
									<a href="demo-education.html" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- Open a Ticket</a>
								</li>
								<li>
									<a href="demo-education.html" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- FAQ's</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
							<h4 class="font-weight-bold text-5">More</h4>
							<ul class="list list-unstyled opacity-6">
								<li class="mb-1">
									<a href="demo-education.html" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- Terms of Use</a>
								</li>
								<li>
									<a href="demo-education.html" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- Privacy Policy</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
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