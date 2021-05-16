@extends('page.layout_page')
@section('content')
    <!--banner-slider-->
	<!-- main-slider -->
	<section class="w3l-main-slider" id="home">
		<div class="banner-content">
			<div class="owl-one owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info banner-view bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h6>Nhanh Chóng Và Hiệu Quả</h6>
										<h5>Sự Lựa Chọn Hiệu Quả Cho Các Vấn Đề 
										</h5>
										
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info  banner-view banner-top1 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h6>Nhanh Chóng Và Hiệu Quả</h6>
										<h5>Sự Lựa Chọn Hiệu Quả Cho Các Vấn Đề 
										</h5>
										
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top2 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h6>Nhanh Chóng Và Hiệu Quả</h6>
										<h5>Sự Lựa Chọn Hiệu Quả Cho Các Vấn Đề 
										</h5>
										
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top3 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h6>Nhanh Chóng Và Hiệu Quả</h6>
										<h5>Sự Lựa Chọn Hiệu Quả Cho Các Vấn Đề 
										</h5>
										
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
		</div>
	</section>
	<!-- /main-slider -->
	<!-- //banner-slider-->
	<!-- /bottom-grids-->
	<section class="w3l-bottom-grids-6">
		<div class="container">
			<div class="grids-area-hny main-cont-wthree-fea row">
				<div class="col-lg-4 col-md-6 grids-feature">
					<div class="area-box">
						<span class="fa fa-bath"></span>
						<h4><a href="#feature" class="title-head">Đặt lịch nhanh chóng</a></h4>
						<p>Thao tác 60 giây trên ứng dụng, có ngay người nhận việc sau 60 phút</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grids-feature">
					<div class="area-box active">
						<span class="fa fa-cogs active"></span>
						<h4><a href="#feature" class="title-head">Đa dạng dịch vụ</a></h4>
						<p>Với 9 dịch vụ tiện ích, bTaskee sẵn sàng hỗ trợ mọi nhu cầu việc nhà của bạn.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grids-feature">
					<div class="area-box">
						<span class="fa fa-users"></span>
						<h4><a href="#feature" class="title-head">An toàn tối đa</a></h4>
						<p>Người làm uy tín, luôn có hồ sơ lý lịch rõ ràng .</p>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- //bottom-grids-->
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
							
							<h3 class="hny-title">Chúng tôi là Homeservice</h3>
						</div>
						<p class="my-3">Homeservice là doanh nghiệp tiên phong trong việc ứng dụng công nghệ vào ngành giúp việc nhà ở Việt Nam. Chúng tôi cung cấp đa dịch vụ tiện ích như: dọn dẹp nhà, vệ sinh máy lạnh, đi chợ, … tại Đông Nam Á.</p>
						<p>Thông qua ứng dụng đặt lịch dành cho khách hàng bTaskee và ứng dụng nhận việc của cộng tác viên bTaskee Partner, khách hàng và cộng tác viên có thể chủ động đăng và nhận việc trực tiếp trên ứng dụng.</p>
						
					</div>


				</div>

			</div>
		</div>
	</section>
	<!-- //content-with-photo-1-->

	<!-- /offer-->
	<section class="features-4">
		<div class="features4-block py-5">
			<div class="container py-lg-5">
				<div class="features4-grids text-center row">

					@foreach ($services as $item)
						<div class="col-lg-4 col-md-6 features4-grid">
							<div class="features4-grid-inn">
								<span id="icon_service" class="{{$item->service_icon}} icon-fea4" aria-hidden="true"></span>
								<h5><a href="{{URL::to('home-service/service-detail/'.$item->id)}}">{{$item->service_name}}</a></h5>
								<p>{{$item->service_desc}}</p>
							</div>
						</div>
					@endforeach
					
					
				</div>
			</div>
		</div>
	</section>
	<!--//offer-->

    <section class="section-order">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="img-fluid" src="{{asset('/img/poster.png')}}" alt="">
                        </div>
                        <div class="col-sm-6">
                            <form action="{{route('order')}}" method="POST" enctype="multipart/form-data">
								@csrf
                                {{-- <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control" name="customer_name" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Email</label>
                                  <input type="email" class="form-control" name="customer_email" placeholder="Enter Your Email" >
                                </div>
								<div class="form-group">
									<label for="exampleInputEmail1">Phone</label>
									<input type="text" class="form-control" name="customer_phone" placeholder="Enter Your Phone">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Address</label>
									<input type="text" class="form-control" name="customer_address" placeholder="Enter Your Address">
								</div> --}}

								<h3 class="text-left " style="color:#f45d01">Đặt Dịch Vụ</h3>
                            

								<input type="text" id="password" class="fadeIn third" name="customer_name" 
									@if (!empty($customer))
										value="{{$customer->customer_name}}"
									@else
										placeholder="name"
									@endif
								>
								<input type="text" id="login" class="fadeIn second" name="customer_email" 
									@if (!empty($customer))
										value="{{$customer->customer_email}}"
									@else
										placeholder="email"
									@endif
								>
                				
                				<input type="text" id="password" class="fadeIn third" name="customer_phone" 
									@if (!empty($customer))
										value="{{$customer->customer_phone}}"
									@else
										placeholder="phone"
									@endif

								>
        
                				<input type="text" id="password" class="fadeIn third" name="customer_address" 
									@if (!empty($customer))
										value="{{$customer->customer_address}}"
									@else
										placeholder="address"
									@endif

								>
								

								<div class="form-group">
									<label for="exampleFormControlSelect2">Select Service</label>
									<select multiple class="form-control" name="service[]" id="exampleFormControlSelect2">
										@foreach ($services as $item)
											<option value="{{$item->id}}">{{$item->service_name}}</option>
										@endforeach
									</select>
								  </div>
                                
								<div class="text-center">
									<button type="submit" class="btn" style="background: #F45D01">Đặt dịch vụ</button>
								</div>
                                
                            </form>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        
        
    </section>


	<!-- /quote-6-->
	<section class="w3l-quote-6">
		<div class="quote-info py-5">
			<div class="container py-lg-5">
				<div class="quote-grids-info row">
					<div class="quote-gd-left col-lg-10 pr-lg-5">
						<h4>Vệ Sinh Chuyên Nghiệp <br>HomeService</h4>
						<p class="para-quote">Liên hệ với chúng tôi.</p>
						<div class="row mt-lg-5 mt-4">
							<div class="col-lg-4 col-md-6 sub-quote mt-4">
								<div class="quote-sec-info">
									<div class="appyl-sub-icon">
										<span class="fa fa-phone"></span>
									</div>
									<div class="appyl-sub-icon-info">
										<h5>Điện Thoại</h5>
										<p><a href="tel:+142 5897555">+84 976 517 102</a></p>
									</div>

								</div>

							</div>
							<div class="col-lg-4 col-md-6 sub-quote mt-4">
								<div class="quote-sec-info">
									<div class="appyl-sub-icon">
										
										<span class="far fa-envelope"></span>
									</div>
									<div class="appyl-sub-icon-info">
										<h5>Email</h5>
										<p><a href="mailto:mail@company.com" class="mail"> homeservice@gmail.com</a></p>
									</div>

								</div>
							</div>
							<div class="col-lg-4 col-md-6 sub-quote mt-4">
								<div class="quote-sec-info">
									<div class="appyl-sub-icon">
										<span class="fa fa-clock-o"></span>
									</div>
									<div class="appyl-sub-icon-info">
										<h5>Giờ Mở Cửa<a href=""></a></h5>
										<p>08.00 to 18.00</p>
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
					<h6 class="sub-title">Đánh Giá</h6>
					<h3 class="hny-title">Khách Hàng Nói Gì Về Chúng Tôi</h3>
					<p class="title-para"></p>
				</div>

				<div class="row mt-lg-5 mt-4">
					<div class="col-md-10 mx-auto">
						<div class="owl-two owl-carousel owl-theme">

							@foreach ($comments as $item)

							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="message">
										<p>{{$item->comment}}</p>
										<div class="name mt-4">
											<h4>{{$item->customer_name}}</h4>
											
										</div>
									</div>
									<div class="img-circle">
										<img src="{{asset('frontend/assets/images/c1.jpg')}}" class="img-fluid testimonial-img" alt="client">
									</div>
								</div>
							</div>
							@endforeach
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//testimonials-->
@endsection	

<style>
	.fab.fa-envira.icon-fea4 {
    font-size: 40px;
    margin-bottom: 16px;
    color: #2D7DD2;
}
#icon_service {
	font-size: 40px;
    margin-bottom: 16px;
    color: #2D7DD2;

}
.far.fa-envelope {
    font-size: 32px;
    margin: 0 0 10px 0;
	color: #F45D01;
}
</style>