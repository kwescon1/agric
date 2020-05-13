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
			<form action="{{url('/adminsearch')}}" method="GET">
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
			<div style="overflow-x: auto;">
                    <table class="table table-bodered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Rent Duration</th>
                                <th>Image</th>
                                <th>Type</th>
                                <th>Description</th>

                            </tr>                        
                        </thead>

                        <tbody>	

                        	@if(count($search) > 0)

                            @foreach($search as $list)
                           
                             <tr>   
                                <td>{{$list->id}}</td>
                                <td>{{$list->p_name}}</td>
                                <td>{{$list->p_location}}</td>
                                <td>{{$list->p_price}}</td>
                                <td>{{$list->p_status}}</td>
                                <td>{{$list->rent_duration}}</td>


                                <td><img src=" {{ asset('images/properties/'.json_decode($list->p_image,true)[0])}}" alt="Image here" height="100px" width="100px"></td>

                                <td>{{$list->p_type}}</td>
                                <td>{{$list->p_description}}</td>

                                
                            </tr>

                            @endforeach
                           	
                        </tbody>
                         @else
							<h1 style="text-align: center;">Search Not Found</h1>
						@endif
                    </table>
            </div>
		

			
			

			<div class="clearfix"></div>
			<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				<nav class="pagination">
					<ul>
						<li class="current-page">{{$search->links()}}</li>
					</ul>
				</nav>
			</div>
			<!-- Pagination / End -->

		</div>

	</div>
</div>
@endsection