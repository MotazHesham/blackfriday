<div class="container" style="    position: absolute;
top: 39%;
left: 12%;
z-index: 99999;">
	<div>
		@if ($message = Session::get('success'))
		<div class="alert alert-success alert-block" style="    box-shadow: 12px 12px 31px grey;">
			<button type="button" class="close" data-dismiss="alert">×</button>	
				<strong>{{ $message }}</strong>
		</div>
		@endif


		@if ($message = Session::get('error'))
		<div class="alert alert-danger alert-block" style="    box-shadow: 12px 12px 31px grey;">
			<button type="button" class="close" data-dismiss="alert">×</button>	
				<strong>{{ $message }}</strong>
		</div>
		@endif


		@if ($message = Session::get('warning'))
		<div class="alert alert-warning alert-block" style="    box-shadow: 12px 12px 31px grey;">
			<button type="button" class="close" data-dismiss="alert">×</button>	
			<strong>{{ $message }}</strong>
		</div>
		@endif


		@if ($message = Session::get('info'))
		<div class="alert alert-info alert-block" style="    box-shadow: 12px 12px 31px grey;">
			<button type="button" class="close" data-dismiss="alert">×</button>	
			<strong>{{ $message }}</strong>
		</div>
		@endif


		@if ($errors->any())
		<div class="alert alert-danger" style="    box-shadow: 12px 12px 31px grey;">
			<button type="button" class="close" data-dismiss="alert">×</button>	
			Please check the form below for errors
		</div>
		@endif

	</div>

</div>
