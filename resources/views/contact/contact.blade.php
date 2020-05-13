@extends('layouts.master_layout')

@section('title')
	Contact Us
@endsection

@section('content')
<!-- Content
================================================== -->

<!-- Map Container -->
<div class="contact-map margin-bottom-55">

	<!-- Google Maps -->
	<div class="google-map-container">
		<div id="propertyMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
		<a href="#" id="streetView">Street View</a>
	</div>
	<!-- Google Maps / End -->

	<!-- Office -->
	<div class="address-box-container">
		<div class="address-container" data-background-image="images/our-office.jpg">
			<div class="office-address">
				<h3>Our Office</h3>
				<ul>
					<li>Company Address</li>
					<li>Address</li>
					<li>Phone </li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Office / End -->

</div>
<div class="clearfix"></div>
<!-- Map Container / End -->


<!-- Container / Start -->
<div class="container">

	<div class="row">

		<!-- Contact Details -->
		<div class="col-md-4">

			<h4 class="headline margin-bottom-30">Find Us There</h4>

			<!-- Contact Details -->
			<div class="sidebar-textbox">
				<p>Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services.</p>

				<ul class="contact-details">
					<li><i class="im im-icon-Phone-2"></i> <strong>Phone:</strong> <span>company phone number</span></li>
					<li><i class="im im-icon-Globe"></i> <strong>Web:</strong> <span><a href="#">www.coastaffairs.com</a></span></li>
					<li><i class="im im-icon-Envelope"></i> <strong>E-Mail:</strong>company email</li>
				</ul>
			</div>

		</div>

		<!-- Contact Form -->
		<div class="col-md-8">
			<section id="contact">
				<h4 class="headline margin-bottom-35">Contact Form</h4>

				<div style="background-color: lightblue" id="contact-message">
					@if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
				</div> 

					<form method="POST" action=" {{ url('contact')}}" name="contactform" autocomplete="on">
						@csrf

					{{-- name --}}
					<div class="row">
						<div class="col-md-6">
							<div>
								<input name="name" type="text" id="name" placeholder="Your Name" required="required" />
							</div>
						</div>

						{{-- email --}}
						<div class="col-md-6">
							<div>
								<input name="email" type="email" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
							</div>
						</div>
					</div>

					<div class="row">
						{{-- mobile number --}}
						<div class="col-md-6">
							<div>
								<input name="mobile_number" type="text" id="number" placeholder="Mobile Number" required="required" />
							</div>	
						</div>

						{{-- subject --}}
						<div class="col-md-6">
							<div>
								<input name="subject" type="text" id="subject" placeholder="Subject" required="required" />
							</div>	
						</div>

					</div>

					<div>
						<textarea name="message" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
					</div>

					<input style="background-color: rgb(23,53,64);" name="contact" type="submit" class="submit button" id="submit" value="Submit Message" />

					</form>
			</section>
		</div>
		<!-- Contact Form / End -->

	</div>

</div>
<!-- Container / End -->
@endsection




@section('maps')
<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
<script type="text/javascript" src="scripts/infobox.min.js"></script>
<script type="text/javascript" src="scripts/markerclusterer.js"></script>
<script type="text/javascript" src="scripts/maps.js"></script>
@endsection



