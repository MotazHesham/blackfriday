<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="icon" href="{{ asset('images/shamii.png') }}">
	<link rel="stylesheet" href="{{ asset('css/theme.css') }}"> 
	<link rel="stylesheet" href="{{ asset('css/all.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
</head>
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<body>

	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->

	

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
			</button>
		</div>
			<div class="img bg-wrap text-center py-4" style="background-image: url('{{ asset('images/background.jpg') }}')">
				<div class="user-logo">
					<div class="img" style="background-image: url('{{ asset('images/shamii.png') }}')"></div>
					<h3>Administration</h3>
				</div>
			</div>
		<ul class="list-unstyled components mb-5">
		<li class="active">
			<a href="{{route('admin.dashboard')}}"><span class="fa fa-home mr-3"></span> Home</a>
		</li>
		<li>
			<a href="{{route('admin.categories')}}"><span class="fa fa-gift mr-3"></span> Categories</a>
		</li>
		<li>
			<a href="{{route('admin.products')}}"><span class="fa fa-trophy mr-3"></span> Products</a>
		</li>
		<li>
			<a href="{{route('admin.orders')}}"><span class="fa fa-support mr-3"></span> Orders</a>
		</li>
		<li>
			<a href="{{route('admin.contactus')}}"><span class="fa fa-gift mr-3"></span> ContactUs Form</a>
		</li>
		<li>
			<a href="{{route('admin.profile.edit')}}"><span class="fa fa-cog mr-3"></span> Profile</a>
		</li>
		<li>
			<a href="{{route('admin.logout')}}"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
		</li>
		</ul>

		</nav>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
			<!-- start view sections -->
				<div class="container">
					@include('flash_message2')
					@yield('content')
				</div>	
			<!-- end view sections -->
		</div>
	</div>

	

	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->	

		

	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->	

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/my_script_admin.js') }}"></script>
</body>
</html>