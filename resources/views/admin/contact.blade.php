@extends('layouts.master_layout')

@section('title')
	Procurement
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
			<form action="{{url('/admincontactsearch')}}" method="GET">
				{{csrf_field()}}
				<div class="main-search-input margin-bottom-35">
					<input name="search_property" required type="text" class="ico-01" placeholder="Enter search e.g. name,email,status" value=""/>
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
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Status</th>

                            </tr>

                         
                            
                        </thead>

                        <tbody>

                            {{-- @foreach($rent_info as $rented) --}}
                           
                             <tr>   
                                
                                <td>hh</td>
                                
                            </tr>

                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>

		

	
			

			<div class="clearfix"></div>
			<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				<nav class="pagination">
					<ul>
						<li class="current-page"></li>
					</ul>
				</nav>
			</div>
			<!-- Pagination / End -->

		</div>

	</div>
</div>
@endsection