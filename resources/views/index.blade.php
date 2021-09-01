@extends('layouts.master_layout')

@section('title')
	Procurement
@endsection

@section('content')
<!-- Slider
================================================== -->
<!--sss-->
<div class="fullwidth-home-slider margin-bottom-0">

	<!-- Slide -->
	<div data-background-image="/images/sliders/how-to-market-agricultural-products-online-farmers-trend-768x384.jpg" class="item">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="home-slider-container">

					

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Slide-->
	<div data-background-image="/images/sliders/IMG-20200128-WA0007.jpg" class="item">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="home-slider-container">
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Slide--> 
	<div data-background-image="/images/sliders/home-slider-02.jpg" class="item">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="home-slider-container">
						
					</div>
				</div>
			</div>
		</div>
	</div>


</div>


<!-- Content
================================================== -->
<!-- Featured -->
<div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                	<a href="/list">
                		<div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    	</div>
                	</a>
                    
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->


<!-- Featured -->
<div class="container">
	<div class="row">
	
		<div class="col-md-12">
			<h3 class="headline margin-bottom-25 margin-top-65">Latest Product</h3>
		</div>
		
		<!-- Carousel -->
		<div class="col-md-12">
			<div class="carousel">
				
				{{-- limit to 6 items --}}
				<!-- Listing Item -->
				@if(count($lists) > 0)
					@foreach($lists as $list)
					<div class="carousel-item">
						<div class="listing-item compact">

							<a href="/property_details/{{$list->id}}" class="listing-img-container">

								<div class="listing-badges">
									<span class="featured" style="background-color: rgb(23,53,64)">Latest Product</span>
									<span>{{$list->p_status}}</span>
								</div>

								<div class="listing-img-content">
									<span class="listing-compact-title">{{$list->p_type}} <i>{{$list->p_price}}</i></span>

									<ul class="listing-hidden-content"  style="background-color: rgb(23,53,64)">
										<li>{{$list->c_name}}</li>
										<li>{{$list->p_specs}}</li>
										<li>{{$list->p_city}}</li>
										<li>{{$list->p_address}}</li>
									</ul>
								</div>

								<img src=" {{ asset('images/properties/'.json_decode($list->p_image,true)[0])}}" alt="Image here" height="250px" width="200px">
							</a>

						</div>
					</div>
					<!-- Listing Item / End -->

					@endforeach
				@else
					<h3 style="text-align: center;">No Featured Property Available </h3>
				@endif

			</div>
		</div>
		<!-- Carousel / End -->

	</div>
</div>
<!-- Featured / End -->



<!-- Fullwidth Section -->
<section class="fullwidth margin-top-105 margin-bottom-0 padding-bottom-70 padding-top-100">

	<h3 class="headline-box">Services</h3>	

	<!-- Container -->
	<div class="container">
		<div class="row">

			<div class="col-md-4">

				<!-- Image Box -->
				<a href="{{url('type/Truck ')}}" class="img-box" data-background-image="/images/line-new-trucks-presented-field-600w-1147895648.jpg">

					<!-- Badge -->
					<div class="listing-badges">
						<span  style="background-color: rgb(23,53,64)" class="featured">Latest Product</span>
					</div>

					<div class="img-box-content visible">
						<h4>Trucks </h4>
						<span>#</span>
					</div>
				</a>

			</div>	
				
			<div class="col-md-8">

				<!-- Image Box -->
				<a href="{{url('type/Animal ')}}" class="img-box" data-background-image="/images/IMG-20200128-WA0011.jpg">
					<div class="img-box-content visible">
						<h4>Animals</h4>
						<span>#</span>
					</div>
				</a>

			</div>	

			<div class="col-md-8">

				<!-- Image Box -->
				<a href="{{url('type/Tool')}}" class="img-box" data-background-image="images/set-different-gardening-tools-spring-260nw-1482961058.jpg">
					<div class="img-box-content visible">
						<h4>Tools </h4>
						<span>#</span>
					</div>
				</a>

			</div>	
				
			<div class="col-md-4">

				<!-- Image Box -->
				<a href="{{url('type/Vegetable')}}" class="img-box" data-background-image="images/how-to-market-agricultural-products-online-farmers-trend-768x384.jpg">
					<div class="img-box-content visible">
						<h4>Vegetables</h4>
						<span>#</span>
					</div>
				</a>

			</div>

		</div>
	</div>
	<!-- Container / End -->

</section>
<!-- Fullwidth Section / End -->


<!-- Counters Container -->
<div class="parallax margin-top-0 margin-bottom-40"
	data-background="images/listings-parallax.jpg"
	data-color="#252529"
	data-color-opacity="0.85"
	data-img-width="800"
	data-img-height="505">

	<!-- Counters -->
	{{-- <div id="counters">
		<div class="container">

			<div class="row">

				<div class="counter-boxes-inside-parallax">

					<div class="col-md-3 col-sm-6">
						<div class="counter-box">
							<div class="counter-box-icon">
								<i class="im im-icon-Home-2"></i>
								<span class="counter">1000</span>
								<p>Listings For Sale</p>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="counter-box">
							<div class="counter-box-icon">
								<i class="im im-icon-Money-2"></i>
								<span class="counter">1476</span>
								<p>Listings For Rent</p>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="counter-box">
							<div class="counter-box-icon">
								<i class="im im-icon-Business-ManWoman"></i>
								<span class="counter">389</span>
								<p>Agents</p>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="counter-box last">
							<div class="counter-box-icon">
								<i class="im im-icon-Suitcase"></i>
								<span class="counter">163</span>
								<p>Brokers</p>
							</div>
						</div>
					</div>

				</div>

			</div>

		</div>
	</div> --}}
	<!-- Counters / End -->

	<!-- Flip banner -->
	<a href="{{url('list')}}" class="flip-banner parallax"  data-color="#173540" data-color-opacity="0.9" data-img-width="2500" data-img-height="1600">
		<div class="flip-banner-content">
			<h2 class="flip-visible">We help people and farmers find each other</h2>
			<h2 class="flip-hidden">Browse Properties <i class="sl sl-icon-arrow-right"></i></h2>
		</div>
	</a>
	<!-- Flip banner / End -->

</div>
<!-- Counters Container / End -->



<!-- Agents Section our team-->
<div id="team" class="container">

	<div class="row">
		<div class="col-md-12">
			<h3 class="headline margin-top-20 margin-bottom-45">Our Team</h3>
		</div>
	</div>

	<div class="row">
		<!-- Agents Container -->
		<div class="agents-grid-container">

			<!-- Agent -->
			<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="agent">

					<div class="agent-avatar">
						<a href="{{url('#team')}}">
							<img height="590px" width="590px" src="images/our_team/member_1.jpg" alt="">
							{{-- view profile --}}
							<span class="view-profile-btn"></span>
						</a>
					</div>

					<div class="agent-content">
						<div class="agent-name">
							<h4><a href="">Name</a></h4>
							<span>position</span>
						</div>

						<ul class="agent-contact-details">
							<li><i class="sl sl-icon-call-in"></i>mobile number 00000</li>
							<li><i class="fa fa-envelope-o "></i><a href="#team">email address here</a></li>
						</ul>

						<ul class="social-icons">
							<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
							<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
							
							<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>

				</div>
			</div>
			<!-- Agent / End -->
			
			<!-- Agent -->
			<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="agent">

					<div class="agent-avatar">
						<a href="{{url('#team')}}">
							<img height="590px" width="590px" src="images/our_team/member_1.jpg" alt="">
							{{-- view profile --}}
							<span class="view-profile-btn"></span>
						</a>
					</div>

					<div class="agent-content">
						<div class="agent-name">
							<h4><a href="">Name</a></h4>
							<span>Position</span>
						</div>

						<ul class="agent-contact-details">
							<li><i class="sl sl-icon-call-in"></i>mobile number 00000</li>
							<li><i class="fa fa-envelope-o "></i><a href="#team">email address here</a></li>
						</ul>

						<ul class="social-icons">
							<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
							<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
							
							<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>

				</div>
			</div>
			<!-- Agent / End -->

			<!-- Agent -->
			<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="agent">

					<div class="agent-avatar">
						<a href="{{url('#team')}}">
							<img height="590px" width="590px" src="images/our_team/member_1.jpg" alt="">
							{{-- view profile --}}
							<span class="view-profile-btn"></span>
						</a>
					</div>

					<div class="agent-content">
						<div class="agent-name">
							<h4><a href="">Name</a></h4>
							<span>position</span>
						</div>

						<ul class="agent-contact-details">
							<li><i class="sl sl-icon-call-in"></i>mobile number 00000</li>
							<li><i class="fa fa-envelope-o "></i><a href="#team">email address here</a></li>
						</ul>

						<ul class="social-icons">
							<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
							<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
							
							<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>

				</div>
			</div>
			<!-- Agent / End -->

			<!-- Agent -->
			<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="agent">

					<div class="agent-avatar">
						<a href="{{url('#team')}}">
							<img height="590px" width="590px" src="images/our_team/member_1.jpg" alt="">
							{{-- view profile --}}
							<span class="view-profile-btn"></span>
						</a>
					</div>

					<div class="agent-content">
						<div class="agent-name">
							<h4><a href="">Name</a></h4>
							<span>Position</span>
						</div>

						<ul class="agent-contact-details">
							<li><i class="sl sl-icon-call-in"></i>mobile number 00000</li>
							<li><i class="fa fa-envelope-o "></i><a href="#team">email address here</a></li>
						</ul>

						<ul class="social-icons">
							<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
							<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
							
							<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>

				</div>
			</div>
			<!-- Agent / End -->


		</div>
		<!-- Agents Container / End -->
	</div>

</div>
<!-- Agents Section / End -->

@endsection


