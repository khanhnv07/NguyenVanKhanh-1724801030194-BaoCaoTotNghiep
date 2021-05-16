@extends('frontend_layout')
@section('content')
    <!-- /content-with-photo-1-->
	<section class="w3l-content-with-photo-1">
		<div class="ab-content-6-mian py-5">
			<div class="container py-lg-5">
				<div class="welcome-grids row">
					<div class="col-lg-6 welcome-image">
						<img src="{{asset('frontend/assets/images/ab1.jpg')}}" class="img-fluid" alt="" />
					</div>
					<div class="col-lg-6 mt-lg-0 mt-5 pl-lg-4">
						<div class="title-content text-left">
							<h6 class="sub-title">Welcome to our CleanFreshly</h6>
							<h3 class="hny-title">About Our Company</h3>
						</div>
						<p class="my-3">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id
							erat eu ullamcorper. Nunc id ipsum fringilla,
							gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia</p>
						<p>Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu
							ullamcorper.Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in
							culpa quis. Phasellus lacinia</p>
						<div class="read">
							<a class="btn mt-4" href="services.html">Read More</a>
						</div>
					</div>


				</div>

			</div>
		</div>
	</section>
	<!-- //content-with-photo-1-->

	<!-- /content-6-->
	<section class="w3l-content-6">
		<!-- /content-6-main-->
		<div class="content-6-mian py-5">
			<div class="container py-lg-5">
				<div class="content-info-in row">
					
					<!-- MultiStep Form -->
					<div class="container-fluid">
						<div class="row justify-content-center">
							<div class="col-12 text-center">
								<div class="card ">
									<h2><strong>Dat Dich Vu</strong></h2>
									<p>Fill all form field to go to next step</p>
									<div class="row">
										<div class="col-md-12 mx-0">
											<form id="msform" action="{{route('order')}}" method="POST" enctype="multipart/form-data">
												@csrf
												<!-- progressbar -->
												<ul id="progressbar">
													<li class="active" id="account"><strong>step 1</strong></li>
													<li id="personal"><strong>Personal</strong></li>
													<li id="payment"><strong>Payment</strong></li>
													<li id="confirm"><strong>Finish</strong></li>
												</ul> <!-- fieldsets -->
												<fieldset>
													<div class="form-card">
														<h2 class="fs-title">Thong Tin Khach Hang</h2> 
														<input type="text" name="customer_name" placeholder="Name" /> 
														<input type="email" name="customer_email" placeholder="Emaild" /> 
														
														<input type="text" name="customer_phone" placeholder="Phone" /> 
														<input type="text" name="customer_address" placeholder="Address" />
													</div> 
													<input type="button" name="next" class="next action-button" value="Next Step" />
												</fieldset>
												<fieldset>
													<div class="form-card row d-flex justify-content-center mt-100">
														<h2 class="fs-title">Chon Dich Vu</h2> <br>
														{{-- <input type="text" name="fname" placeholder="First Name" /> 
														<input type="text" name="lname" placeholder="Last Name" /> 
														<input type="text" name="phno" placeholder="Contact No." /> 
														<input type="text" name="phno_2" placeholder="Alternate Contact No." /> --}}
														{{-- <div class="row d-flex justify-content-center mt-100"> --}}
															<div class="col-md-6"> 
																<select id="choices-multiple-remove-button" name="service[]" placeholder="Chon dich vu" multiple>
																	@foreach ($services as $item)
																		<option value="{{$item->id}}" >{{$item->service_name}}</option>
																	@endforeach
		
																</select> 
															</div>
														{{-- </div> --}}
													</div> 
													<input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
												</fieldset>
												<fieldset>
													<div class="form-card">
														<h2 class="fs-title">Thanh Toan</h2>
														<div class="radio-group">
															<div class='radio' data-value="credit"><img src="{{asset('img/checkout-1.jpg')}}" width="200px" height="100px"></div>
															<div class='radio' data-value="paypal"><img src="{{asset('img/checkout-2.jpg')}}" width="200px" height="100px"></div> <br>
														</div> <label class="pay">Card Holder Name*</label> <input type="text" name="holdername" placeholder="" />
														<div class="row">
															<div class="col-9"> <label class="pay">Card Number*</label> <input type="text" name="cardno" placeholder="" /> </div>
															<div class="col-3"> <label class="pay">CVC*</label> <input type="password" name="cvcpwd" placeholder="***" /> </div>
														</div>
														<div class="row">
															<div class="col-3"> <label class="pay">Expiry Date*</label> </div>
															<div class="col-9"> <select class="list-dt" id="month" name="expmonth">
																	<option selected>Month</option>
																	<option>January</option>
																	<option>February</option>
																	<option>March</option>
																	<option>April</option>
																	<option>May</option>
																	<option>June</option>
																	<option>July</option>
																	<option>August</option>
																	<option>September</option>
																	<option>October</option>
																	<option>November</option>
																	<option>December</option>
																</select> <select class="list-dt" id="year" name="expyear">
																	<option selected>Year</option>
																</select> </div>
														</div>
													</div> 
													<input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
													<input type="submit" name="make_payment" class="next action-button" value="Confirm" />
												</fieldset>
												<fieldset>
													<div class="form-card">
														<h2 class="fs-title text-center">Success !</h2> <br><br>
														<div class="row justify-content-center">
															<div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
														</div> <br><br>
														<div class="row justify-content-center">
															<div class="col-7 text-center">
																<h5>You Have Successfully Signed Up</h5>
															</div>
														</div>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="features-top_sur d-grid">
					<div class="features-top-left_sur">
						<span class="fa fa-plug"></span>
						<h4><a href="services.html">Electrical work</a></h4>

					</div>
					<div class="features-top-left_sur">
						<span class="fa fa-paint-brush"></span>
						<h4><a href="services.html">Painting work</a></h4>

					</div>
					<div class="features-top-left_sur">
						<span class="fa fa-bed"></span>
						<h4><a href="services.html">Furniture shifting</a></h4>

					</div>
					<div class="features-top-left_sur">
						<span class="fa fa-shield"></span>
						<h4><a href="services.html">Washing machine</a></h4>

					</div>
					<div class="features-top-left_sur">
						<span class="fa fa-paragraph"></span>
						<h4><a href="services.html">Modular kitchen</a></h4>

					</div>
					<div class="features-top-left_sur">
						<span class="fa fa-unlink"></span>
						<h4><a href="services.html">Carpet cleaning</a></h4>

					</div>


				</div>

			</div>
		</div>
	</section>
	<!-- //content-6-->
	<!-- /offer-->
	<section class="features-4">
		<div class="features4-block py-5">
			<div class="container py-lg-5">
				<div class="features4-grids text-center row">
					<div class="col-lg-3 col-md-6 features4-grid">
						<div class="features4-grid-inn">
							<span class="fa fa-bath icon-fea4" aria-hidden="true"></span>
							<h5><a href="#URL">Plumbing</a></h5>
							<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
								consectetur.</p>

						</div>
					</div>
					<div class="col-lg-3 col-md-6 features4-grid sec-features4-grid">
						<div class="features4-grid-inn">
							<span class="fa fa-american-sign-language-interpreting icon-fea4" aria-hidden="true"></span>
							<h5><a href="#URL">Repairs</a></h5>
							<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
								consectetur.</p>

						</div>
					</div>
					<div class="col-lg-3 col-md-6 features4-grid">
						<div class="features4-grid-inn">
							<span class="fa fa-fire-extinguisher icon-fea4" aria-hidden="true"></span>
							<h5><a href="#URL">Spring</a></h5>
							<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
								consectetur.</p>

						</div>
					</div>
					<div class="col-lg-3 col-md-6 features4-grid">
						<div class="features4-grid-inn">
							<span class="fa fa-gavel icon-fea4" aria-hidden="true"></span>
							<h5><a href="#URL">Carpenter</a></h5>
							<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
								consectetur.</p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//offer-->
	<!-- /quote-6-->
	<section class="w3l-quote-6">
		<div class="quote-info py-5">
			<div class="container py-lg-5">
				<div class="quote-grids-info row">
					<div class="quote-gd-left col-lg-10 pr-lg-5">
						<h4>Professional Cleaning <br>Services Provider</h4>
						<p class="para-quote">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
							sed deserunt mollit anim id est laborum mollit anim id est nulla.</p>
						<div class="row mt-lg-5 mt-4">
							<div class="col-lg-4 col-md-6 sub-quote mt-4">
								<div class="quote-sec-info">
									<div class="appyl-sub-icon">
										<span class="fa fa-phone"></span>
									</div>
									<div class="appyl-sub-icon-info">
										<h5>Phone</h5>
										<p><a href="tel:+142 5897555">+142
												5897555</a></p>
									</div>

								</div>

							</div>
							<div class="col-lg-4 col-md-6 sub-quote mt-4">
								<div class="quote-sec-info">
									<div class="appyl-sub-icon">
										<span class="fa fa-envelope-o"></span>
									</div>
									<div class="appyl-sub-icon-info">
										<h5>Email</h5>
										<p><a href="mailto:mail@company.com" class="mail"> mail@company.com</a></p>
									</div>

								</div>
							</div>
							<div class="col-lg-4 col-md-6 sub-quote mt-4">
								<div class="quote-sec-info">
									<div class="appyl-sub-icon">
										<span class="fa fa-clock-o"></span>
									</div>
									<div class="appyl-sub-icon-info">
										<h5>Opening Hours</h5>
										<p>10.00 to 18.00</p>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //quote-6-->
	<!--/testimonials-->
	<section class="w3l-testimonials" id="testimonials">
		<div class="testimonials py-5">
			<div class="container py-lg-5">
				<div class="title-content text-center">
					<h6 class="sub-title">Testimonials</h6>
					<h3 class="hny-title">What our Clients say</h3>
					<p class="title-para">Lorem ipsum dolor sit amet consectetur adipisicing elit sunt in culpa qui
						officia sed deserunt mollit anim id est laborum mollit anim id est nulla.</p>
				</div>
				<div class="row mt-lg-5 mt-4">
					<div class="col-md-10 mx-auto">
						<div class="owl-two owl-carousel owl-theme">
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="message">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
											accusantium
											officia quod quasi necessitatibus perspiciatis Harum error provident
											quibusdam tenetur.</p>
										<div class="name mt-4">
											<h4>Phillip Hunt</h4>
											<p>Example Company</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="assets/images/c1.jpg" class="img-fluid testimonial-img" alt="client">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="message">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
											accusantium
											officia quod quasi necessitatibus perspiciatis Harum error provident
											quibusdam tenetur.</p>
										<div class="name mt-4">
											<h4>Sara Grant</h4>
											<p>Example Company</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="assets/images/c2.jpg" class="img-fluid testimonial-img" alt="client">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="message">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
											accusantium
											officia quod quasi necessitatibus perspiciatis Harum error provident
											quibusdam tenetur.</p>
										<div class="name mt-4">
											<h4>Luke Jacobs</h4>
											<p>Example Company</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="assets/images/c3.jpg" class="img-fluid testimonial-img" alt="client">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">

									<div class="message">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
											accusantium
											officia quod quasi necessitatibus perspiciatis Harum error provident
											quibusdam tenetur.</p>
										<div class="name mt-4">
											<h4>Claire Olson</h4>
											<p>Example Company</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="assets/images/c4.jpg" class="img-fluid testimonial-img" alt="client">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//testimonials-->
@endsection