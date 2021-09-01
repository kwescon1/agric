<!DOCTYPE html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>@yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    
    <!-- Font Awesome -->
    
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/color.css')}}">
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
 <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">


<!-- tab icon -->
<link rel="shortcut icon" href="{{asset('images/logo/agriculture-business-logo-template-unique-green-vector-image.jpg')}}">

</head>

<body>

<!-- overlay -->
<div id="overlay">

    <div class="spinner">
    
    </div>
  </div>

<!-- Wrapper -->
<div id="wrapper">


<!-- Header Container
================================================== -->
<header id="header-container" class="header-style-2">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo" class="margin-top-10">
					<a href="{{url('/')}}"><img src="/images/logo/agriculture-business-logo-template-unique-green-vector-image.jpg" width="600px" height="500px" alt="Company Logo Here"></a>

					<!-- Logo for Sticky Header -->
					<a href="{{url('/')}}" class="sticky-logo"><img src="/images/logo/agriculture-business-logo-template-unique-green-vector-image.jpg" alt="Company Logo Here"></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<ul class="header-widget">
					<li>
						<i class="sl sl-icon-call-in"></i>
						<div class="widget-content">
							<span class="title">Questions?</span>
							<span class="data">+233543628868 mobile number  </span>
						</div>
					</li>

					<li>
						<i class="sl sl-icon-location"></i>
						<div class="widget-content">
							<span class="title">Our Office</span>
							<span class="data">Accra Ghana</span>
						</div>
					</li>
				</ul>
			</div>
			<!-- Right Side Content / End -->

		</div>

		<!-- Main Navigation -->
		<nav id="navigation" class="style-2"  style="background-color: rgb(23,53,64);">
			<div class="container">
					<ul id="responsive">

						<li><a class="" href="{{url('/')}}">Home</a>
						</li>

						<li><a href="{{url('list')}}">Product Catalog</a>
						</li>

						<li><a href="#">Pages</a>
							<ul>
								<!-- <li><a href="{{url('blog')}}">Our Blog (Be updated)</a>
								</li> -->
								<li><a href="{{url('contact')}}">Contact Us</a></li>
							</ul>
						</li>

						@if($user = Auth::user())
						<li><a href="{{url('requested')}}">Purchase Order</a>
						</li>

						<li><a href="{{url('upload')}}">Upload Item</a>
						</li>

						<li><a href="{{url('allitems')}}">My Items</a>
						</li>

						<li><a href="#">{{ Auth::user()->name }}</a>
							<ul>
								<li><a href="{{ route('logout')}}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</a>

	                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                        @csrf
	                                </form>
                            	</li>
							</ul>
						</li>

						@endif

						

					</ul>
			</div>
		</nav>
		<div class="clearfix"></div>
		<!-- Main Navigation / End -->
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

		@yield('content')



<!-- Footer
================================================== -->
<div id="footer" class="">
	<!-- <div id="footer" class="dark">
 -->	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="/images/logo/agriculture-business-logo-template-unique-green-vector-image.jpg" alt="company logo here">
				<br><br>
				<p>about company here</p>
			</div>

			<div class="col-md-4 col-sm-6 ">
				<h4>Helpful Links</h4>
				
				<ul class="footer-links">
					<li><a href="{{url('/#team')}}">Our Team</a></li>
					<li><a href="/contact">Contact</a></li>
					<li><a href="/login">Log In</a></li>
					<li><a href="/register#tab2">Register</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>		

			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>Accra Ghana</span> <br>
					Phone: <span>+233543628868 </span><br>
					E-Mail:<span> <a href="#">animmaxwell2@gmail.com</a> </span><br>
				</div>

				<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="instagram" href="https://www.instagram.com/coastlineaffairs_?r=nametag"><i class="icon-instagram"></i></a></li>
				</ul>

			</div>

		</div>
		
		
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->

<script data-cfasync="false" src="http://www.vasterad.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="/scripts/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="{{asset('scripts/jquery-migrate-3.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/chosen.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/rangeSlider.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/sticky-kit.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/mmenu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/tooltips.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/masonry.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('scripts/custom.js')}}"></script>
<!-- DropZone | Documentation: http://dropzonejs.com -->
<script type="text/javascript" src="{{asset('scripts/dropzone.js')}}"></script>

@yield('maps')

@yield('calender')


</div>
<!-- Wrapper / End -->


</body>

</html>