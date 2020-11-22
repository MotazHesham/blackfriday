<!DOCTYPE html>
<html>
	<head>
		<title>BlacKFriday</title>
		<link rel="icon" href="{{ asset('images/shamii.png') }}">
		<link rel="stylesheet" href="{{ asset('css/all.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/select-box.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster" rel="stylesheet">
	</head>
<body>
    
</body>

        @include('flash_message')
	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->	
	<div class="first_nav">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="#" style="color: #e66ab2;">BlackFriday</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
					</li>
				</ul>
				<span class="navbar-text">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" id="products">Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" id="aboutus">About us</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#" id="contactus">Contact us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" style=" background-color: #17a2b8;
																color: white;
																border-radius: 50px;
																padding: 7px 20px;">Get Started</a>
						</li>
					</ul>
				</span>
			</div>
		</nav>
	</div>
	<div id="carouselExampleSlidesOnly" class="carousel slide image-slider" data-ride="carousel">
		<div class="carousel-inner" style="background-color: #efefef">
			<div class="carousel-item active">
				<img src="{{asset('images/undraw_deliveries.svg')}}" class="img-fluid" alt="">
				<div class="carousel-caption d-none d-md-block" > 
					<h1>Buy</h1>
						<h1>Online</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, 
						consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					<button class="btn btn-info btn-lg mt-4">Read More</button>
				</div>
			</div>
		</div>
	</div>
	

	@yield('content') 

	
	<footer class="">
        <div class="copyright">
            <p>&copy; 2020 - BlackFriday Website To Shamii Marketing </p>
        </div>
        <div class="social">
            <a  class="support">Contact Us</a>
            <a href="http://www.facebook.com" class="face" target="_blank">f</a>
            <a href="http://www.twitter.com" class="tweet" target="_blank">t</a>
            <a href="http://www.linkedin.com" class="linked" target="_blank">in</a>
        </div>
	</footer>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/select-box.js') }}"></script>	 
	<script src="{{ asset('js/my_script.js') }}"></script>	 
</body>
</html>