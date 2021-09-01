@extends('layouts.master_layout')

@section('title')
	Procurement - Item Details
@endsection


@section('content')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="property-titlebar margin-bottom-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<a style="background-color: rgb(23,53,64);" href="{{url('list')}}" class="back-to-listings"></a>
				<div class="property-title">
					<h2>{{$details->c_name}} <span style="background-color: rgb(23,53,64);" class="property-badge">{{$details->p_price}}</span></h2>
				</div>

				<div class="property-pricing">
					<div style="color: rgb(23,53,64);" class="property-price">{{$details->p_city}}</div>
					<div class="sub-price">{{$details->p_address}}</div>
				</div>


			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-12">
		
			<!-- Slider -->
			<div class="property-slider default">
				@if(!empty($details->p_image))
					@foreach(json_decode($details->p_image,true) as $image)
						<a href="{{asset('images/properties/'.$image)}}" data-background-image="/images/properties/{{$image}}" class="item mfp-gallery"></a>
					@endforeach
				@endif
			</div>

			<!-- Slider Thumbs -->
			<div class="property-slider-nav">
				@if(!empty($details->p_image))
					@foreach(json_decode($details->p_image,true) as $image)
						<div class="item"><img src="/images/properties/{{$image}}" alt="Image here" height="200em" width="300em"></div>
					@endforeach
				@endif
			</div>

		</div>
	</div>
</div>


<div class="container">
	<div class="row">

		<!-- Property Description -->
		<div class="col-lg-8 col-md-7 sp-content">
			<div class="property-description">

				<!-- Main Features -->
				<ul class="property-main-features">
					<li>{{$details->p_status}}</li>
					<li>{{$details->p_type}}</li>
					<li>{{$details->p_specs}}</li>
				</ul>


				<!-- Description -->
				<h3 class="desc-headline">Description</h3>
				@if($details->p_description == "")
				<div>
					<p>
						No available description
					</p>
				</div>
				@else

				<div>
					<p>
						{{$details->p_description}}
					</p>
				</div>

				@endif
			</div>
		</div>
		<!-- Property Description / End -->


		<!-- Sidebar -->
		<div class="col-lg-4 col-md-5 sp-sidebar">
			<div class="sidebar sticky right">

				</div>
				<!-- Booking Widget / End -->


				<!-- Widget -->
				<div class="widget">

					<!-- Agent Widget -->
					<form method="POST" action="{{url('request')}}"> 
						@csrf
						<div class="agent-widget">
						<div class="agent-title">
							<div class="agent-photo"><img src="images/our_team/member_1.png" alt="" /></div>

							@if (session('success'))
						    <div class="alert alert-success" role="alert">
						     {{ session('success') }}
						    </div>
						    @endif

							<div class="">
								<h4>Request Item</h4>
							</div>
							<div class="clearfix"></div>
						</div>

						<input type="hidden" name="c_id" value="{{$details->c_id}}" readonly>
						<input type="text" name="p_id" readonly value="{{$details->id}} " hidden required >
                        <input type="text" name="p_specs" value="{{$details->p_specs}} " readonly required>
                        <input type="number" name="p_quantity" min="1" required placeholder="quantity">
 						<input type="email" placeholder="Your Email" required name="email">
						<input type="tel" name="tel" placeholder="Your Mobile Number" required>
						
						<input style="background-color: rgb(23,53,64);" name="request" type="submit" class="submit button" id="submit" value="Request" />
					</div>
					</form>
					
					<!-- Agent Widget / End -->

				</div>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->

	</div>
</div>
@endsection




