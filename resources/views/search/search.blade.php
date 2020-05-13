@extends('layouts.master_layout')

@section('title')
	Coastline Affaris - All Properties
@endsection

@section('content')
<!-- search
================================================== -->
<section class="search margin-bottom-50">
<div class="container">
	<div class="row">
		<div class="col-md-12">

			<!-- Title -->
			<h3 class="search-title">Search</h3>

		<!-- Main Search Input -->
			<form action="{{url('/searchcontent')}}" method="GET">
				{{csrf_field()}}
				<div class="main-search-input margin-bottom-35">
					<input name="search_property" required type="text" class="ico-01" placeholder="Enter search e.g. price, location, status(rent or sale)" value=""/>
					<button style="background-color: rgb(23,53,64)" class="button">Search</button>
				</div>
			</form>
			<!-- Box / End -->
		</div>
	</div>
</div>
</section>



<!-- Content
================================================== -->
<div class="container">
	<div class="row fullwidth-layout">

		<div class="col-md-12">

			<!-- Sorting / Layout Switcher -->
			<div class="row margin-bottom-15">

				<div class="col-md-6">
					<!-- Sort by -->
					<div class="sort-by">
						<label>Sort by:</label>

						<div class="sort-by-select">
							<select data-placeholder="Default order" class="chosen-select-no-single" >
								<option>Default Order</option>	
								<option>Price Low to High</option>
								<option>Price High to Low</option>
								<option>Newest Properties</option>
								<option>Oldest Properties</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<!-- Layout Switcher -->
					<div class="layout-switcher">
						<a href="#" class="list"><i class="fa fa-th-list"></i></a>
						<a href="#" class="grid"><i class="fa fa-th-large"></i></a>
						<a href="#" class="grid-three"><i class="fa fa-th"></i></a>
					</div>
				</div>
			</div>

			
			<!-- Listings -->
			<div class="listings-container list-layout">	

				@if(count($search) > 0)
					@foreach($search as $list)
				<!-- Listing Item -->
						<div class="listing-item">

							<a href="/property_details/{{$list->id}}"" class="listing-img-container">

								<div class="listing-badges">
									<span>{{$list->p_status}}</span>
								</div>

								<div class="listing-img-content">
									<span class="listing-price">{{$list->p_price}} <i>{{$list->rent_duration}}</i></span>
								</div>

								{{-- get the image itself and fix here --}}

								
								{{-- @foreach(json_decode($list->p_image ,true) as $image) --}}

								{{-- {{print_r($image)}} --}}
								{{-- <img src="{{ asset('images/properties/'.$image) }}" alt="image here">
								 @endforeach --}}

								 <img src="{{ asset('images/properties/'.json_decode($list->p_image,true)[0])}}" height="250em" width="200em ">
								

							</a>
							
							<div class="listing-content">

								<div class="listing-title">
									<h4><a href="/property_details/{{$list->id}}">{{$list->p_name}}</a></h4>
									{{-- find a way of using the map here --}}
									{{-- <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps"> --}}
										<i class="fa fa-map-marker"></i>
										{{$list->p_location}}
									</a>
									{{-- the details here should contain the property id and send you to main property details page --}}
									<a style="background-color: rgb(23,53,64); color: white" href="/property_details/{{$list->id}}" class="details button border">Details</a>
								</div>

								<ul class="listing-details">
									<li>440 sq ft</li>
									<li>1 Bedroom</li>
									<li>1 Room</li>
									<li>1 Bathroom</li>
								</ul>


								{{-- <div class="listing-footer">
									<a href="#"><i class="fa fa-user"></i> Harriette Clark</a>
									<span><i class="fa fa-calendar-o"></i> 2 days ago</span>
								</div> --}}

							</div>

						</div>
				<!-- Listing Item / End -->
					@endforeach
				@else
					<h1 style="text-align: center;">Search Not Found</h1>
				@endif				

			</div>
			<!-- Listings Container / End -->

			<div class="clearfix"></div>
			<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				<nav class="pagination">
					<ul>
						<li class="current-page">{{ $search->links()}}</li>
					</ul>
				</nav>
			</div>
			<!-- Pagination / End -->

		</div>

	</div>
</div>
@endsection