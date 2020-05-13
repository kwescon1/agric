@extends('layouts.master_layout')

@section('title')
	Add Item
@endsection


@section('content')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="submit-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><i class="fa fa-plus-circle"></i> Add Item</h2>
			</div>
		</div>
	</div>
</div>

<div style="background-color: lightblue; text-align: center;" id="contact-message">
	@if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
</div> 


<!-- Content
================================================== -->
<div class="container">
<div class="row">

	<form method="POST" action="{{ url('upload') }}" enctype="multipart/form-data">
		@csrf()
		<!-- Submit Page -->
	<div class="col-md-12">
		<div class="submit-page">

		<!-- Section -->
		<h3>Basic Information</h3>


		<div class="submit-section">

			<!-- Row -->
			<div class="row with-forms">

				<!-- Status -->
				<div class="col-md-6">
					<h5>Status <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
					<select required name="p_status" class="chosen-select-no-single" >
						<option label="blank"></option>	
						<option>For Sale</option>
						<option>For Rent</option>
					</select>
				</div>

				<!-- Type -->
				<div class="col-md-6">
					<h5>Type <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
					<select required name="p_type" class="chosen-select-no-single" >
						<option label="blank"></option>		
						<option>Animal</option>
						<option>Tool</option>
						<option>Truck</option>
						<option>Vegetable</option>			
					</select>
				</div>

			<div class="col-md-6 ">
				<h5>Property Specification <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
				<input name="p_specs" class="search-field" type="text" required />
			</div>

			<div class="col-md-6">
				<h5>Price <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
				<input name="p_price" class="search-field" type="text" required />
			</div>

			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Select Images</h3>
		<div class="submit-section">
			<input type="file" name="file[]" class="dropzone" accept="image/*" multiple id="file"  required>
		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Location</h3>
		<div class="submit-section">

			<!-- Row -->
			<div class="row with-forms">

				<!-- Address -->
				<div class="col-md-6">
					<h5>Address <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
					<input required name="p_address" type="text">
				</div>

				<!-- City -->
				<div class="col-md-6">
					<h5>City <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
					<input required name="p_city" type="text">
				</div>
				
			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Detailed Information</h3>
		<div class="submit-section">

			<!-- Description -->
			<div class="form">
				<h5>Description <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>			
				<textarea class="WYSIWYG" required name="p_description" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
			</div>
		</div>
		<!-- Section / End -->


		
		<div class="divider"></div>
		<!-- <a href="#" class="button preview margin-top-5">Preview <i class="fa fa-arrow-circle-right"></i></a> -->

		<input style="background-color: rgb(23,53,64);" name="upload" type="submit" class="submit button" id="submit" value="Upload Property" />

		</div>
	</div>
	</form>

	<br>
	
</div>
</div>
@endsection
