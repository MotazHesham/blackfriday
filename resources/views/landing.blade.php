<!DOCTYPE html>
<html>
	<head>
		<title>BlacKFirday</title>
		<link rel="stylesheet" href="{{ asset('css/all.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster" rel="stylesheet">
	</head>
	<style>
		.first_nav{
			background-color: #ffffff00;
			position: absolute;
			z-index: 99;
			padding: 2%;
			width: 100%;
		}

		.first_nav .navbar-text li{
			margin-right:50px
		}
		.image-slider .carousel-caption{
			right: 0%;
			left:69%;
			bottom:22%;
			text-align:left;
			color:black
		}
		.image-slider .carousel-caption h1{
			font-size: 55px;
			color: #e66ab2;
			font-weight: bolder
		}
		.image-slider .carousel-caption button{
			border-radius: 50px;
			padding: 18px 48px;
		}
		.navbar-brand{ 
			font-size: 37px;
			font-weight: bolder;
			font-family: Lobster;
		}
	</style>
<body>
    
</body>

        
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
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About us</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">Contact us</a>
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
					<button class="btn btn-info btn-lg mt-4">Read MOre</button>
				</div>
			</div>
		</div>
	</div>
	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->	

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/my_script.js') }}"></script>	 
</body>
</html>