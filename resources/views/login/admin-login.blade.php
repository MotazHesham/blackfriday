<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="icon" href="{{ asset('images/shamii.png') }}">
	<link rel="stylesheet" href="{{ asset('css/all.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster" rel="stylesheet">
</head>
<body>

	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->

	

		<div style="background-color:rgb(62 60 60);height: 100vh;">
			<div style="margin: 0px 30%;">
				<div style="background-color:white;padding: 40px;position: relative;top: 80px;">
					@if ($message = Session::get('error'))
					<div class="alert alert-danger alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>	
							<strong>{{ $message }}</strong>
					</div>
					@endif
					<h1 class="text-center mb-4">Login</h1> 
					<form action="{{route('admin.login')}}" method="post">
						@csrf 
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
							@if ($errors->has('email'))
								<span class="help-block">
									<strong style="color:red">{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
							@if ($errors->has('password'))
								<span class="help-block">
									<strong style="color:red">{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-check">
							<input type="checkbox" name="remeber" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Remeber Me</label>
						</div>
						<button type="submit" class="btn btn-primary btn-lg btn-block mt-4">Login</button>
					</form> 
				</div>
			</div>
		</div>

	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->	

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/my_script_admin.js') }}"></script>	 
</body>
</html>