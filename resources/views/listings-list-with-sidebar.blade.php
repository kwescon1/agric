@extends('layouts.master_layout')

@section('title')
	Items
@endsection

@section('content')
<!-- Titlebar
================================================== -->
<div class="parallax titlebar"
	data-background="/images/listings-parallax.jpg'"
	data-color="#333333"
	data-color-opacity="0.7"
	data-img-width="800"
	data-img-height="505">

	<div id="titlebar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h2>Items</h2>
					<span>#</span>

				</div>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row sticky-wrapper">

		<div class="col-md-8">

			<!-- Main Search Input -->
			<form action="{{url('/searchcontent')}}" method="GET">
				{{csrf_field()}}
				<div class="main-search-input margin-bottom-35">
					<input name="search_property" required item="text" class="ico-01" placeholder="Enter search e.g. price, location, status(rent or sale)" value=""/>
					<button style="background-color: rgb(23,53,64)" class="button">Search</button>
				</div>
			</form>
			

			<!-- Sorting / Layout Switcher -->
			<div class="row margin-bottom-15">

				{{-- <div class="col-md-6"> --}}
					<!-- Sort by -->
					{{-- <div class="sort-by">
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
					</div> --}}
				{{-- </div> --}}

				<div class="col-md-6">
					<!-- Layout Switcher -->
					<div class="layout-switcher">
						<a href="#" class="list"><i class="fa fa-th-list"></i></a>
						<a href="#" class="grid"><i class="fa fa-th-large"></i></a>
					</div>
				</div>
			</div>

			
			<!-- Listings -->
			<div class="listings-container list-layout">

				<!-- Listing Item -->
				@if(count($type) > 0)
				@foreach($type as $item)
				<div class="listing-item">

					<a href="/property_details/{{$item->id}}" class="listing-img-container">

						<div class="listing-badges">
							<span style="background-color: rgb(23,53,64)"" class="featured">Featured</span>
							<span>{{$item->p_status}}</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">{{$item->p_city}} <i>{{$item->p_address}}</i></span>
						</div>

						<div class="listing-carousel">
							<img src="{{ asset('images/properties/'.json_decode($item->p_image,true)[0])}}" height="250em" width="200em">
							
							
						</div>
					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="/property_details/{{$item->id}}">{{$item->c_name}}</a></h4>
							
			
								{{$item->p_city}}
							</a>

							<a href="/property_details/{{$item->id}}" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							<li>530 sq ft</li>
							<li>1 Bedroom</li>
							<li>3 Rooms</li>
							<li>1 Bathroom</li>
						</ul>

						{{-- <div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> David Strozier</a>
							<span><i class="fa fa-calendar-o"></i> 1 day ago</span>
						</div> --}}

					</div>

				</div>
				<!-- Listing Item / End -->	
				@endforeach	
				@else
					<h1 style="text-align: center;">Item  Not Found</h1>
				@endif		

			</div>
			<!-- Listings Container / End -->

			
			<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				<nav class="pagination">
					<ul>
						<li class="current-page">{{ $type->links()}}</li>
					</ul>
				</nav>
			</div>
			<!-- Pagination / End -->

		</div>


		
			</div>
		</div>
		<!-- Sidebar / End -->
	</div>
</div>

@endsection