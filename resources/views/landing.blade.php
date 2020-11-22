@extends('layout')

@section('content')

	<div  id="trending" class="products mt-5" style="background-color: #e2e2e233;">

		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h2>Trending <b>Products</b></h2>
					<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
					<!-- Carousel indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>   
					<!-- Wrapper for carousel items -->
					<div class="carousel-inner">
						@php
							$products = \App\Models\Product::where('trending',1)->orderBy('updated_at', 'desc')->take(4)->get();
						@endphp

							<div class="carousel-item active">
								<div class="row">
									@foreach($products as $product)
										<div class="col-sm-3">
											<div class="thumb-wrapper">
												<div class="img-box">
													<img src="{{ asset('uploads/' . $product->image) }}" class="img-fluid" alt="">
												</div>
												<div class="thumb-content">
													<h4>{{$product->name}}</h4>
													<p class="item-price"><span>EGP{{$product->price}}</span></p>
													
													<a href="{{route('order',$product->id)}}" class="btn btn-primary">Order Now</a>
												</div>						
											</div>
										</div>
									@endforeach
								</div>
							</div>

							@php
								$products__ = \App\Models\Product::where('trending',1)->get();
							@endphp

							@for($i = 0 ; $i < ($products__->count() - 4) ; $i+=4)

								@php
									$products = \App\Models\Product::where('trending',1)->skip(4+$i)->take(4)->get();
								@endphp
									<div class="carousel-item ">
										<div class="row"> 
											@foreach($products as $product)
												<div class="col-sm-3">
													<div class="thumb-wrapper">
														<div class="img-box">
															<img src="{{ asset('uploads/' . $product->image) }}" class="img-fluid" alt="">
														</div>
														<div class="thumb-content">
															<h4>{{$product->name}}</h4>
															<p class="item-price"><span>EGP{{$product->price}}</span></p>
															
															<a href="{{route('order',$product->id)}}" class="btn btn-primary">Order Now</a>
														</div>						
													</div>
												</div>
											@endforeach		 
										</div>
									</div>

							@endfor

					</div>

					<!-- Carousel controls -->
					<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
						<i style="color:black" class="fas fa-angle-left"></i>
					</a>
					<a class="carousel-control-next" href="#myCarousel" data-slide="next">
						<i class="fas fa-angle-right"></i>
					</a>
					
				</div>
				</div>

			</div>

		</div>

	</div>


	<div class="products " style="overflow-x: hidden;">
			<div class="row">
				<div class="col-md-12">
					<h2>Our <b>Categories</b></h2>
					<div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="0">
					<!-- Carousel indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel2" data-slide-to="1"></li>
						<li data-target="#myCarousel2" data-slide-to="2"></li>
					</ol>   
					<!-- Wrapper for carousel items -->
					<div class="carousel-inner">
						@php
							$categories = \App\Models\Category::take(8)->get();
						@endphp
						<div class="carousel-item active">
							<div class="row">
								@foreach($categories as $category)
										<a class="col-sm-3" href="{{route('category',$category->id)}}">
											<div class="thumb-wrapper">
												<div class="img-box">
													<img src="{{ asset('uploads/' . $category->image) }}" class="img-fluid" alt="">
												</div>
												<div class="thumb-content">
													<h4>{{$category->name}}</h4>
												</div>						
											</div>
										</a>
								@endforeach
							</div>
						</div>

						@php
							$categories__ = \App\Models\Category::get();
						@endphp

						@for($i = 0 ; $i < ($categories__->count() - 8) ; $i+=8)

							@php
								$categories = \App\Models\Category::skip(8+$i)->take(8)->get();
							@endphp

							<div class="carousel-item">
								<div class="row">
									@foreach($categories as $category)
										<a class="col-sm-3" href="{{route('category',$category->id)}}">
											<div class="thumb-wrapper">
												<div class="img-box">
													<img src="{{ asset('uploads/' . $category->image) }}" class="img-fluid" alt="">
												</div>
												<div class="thumb-content">
													<h4>{{$category->name}}</h4>
												</div>						
											</div>
										</a>
									@endforeach 
								</div>
							</div>

						@endfor

					</div>
					<!-- Carousel controls -->
					<a class="carousel-control-prev" href="#myCarousel2" data-slide="prev">
						<i style="color:black" class="fas fa-angle-left"></i>
					</a>
					<a class="carousel-control-next" href="#myCarousel2" data-slide="next">
						<i class="fas fa-angle-right"></i>
					</a>
				</div>
				</div>
			</div>
	</div>

	<div style="background-color:#e2e2e294">
		<div class="container contact-form" style="background-color:#e2e2e200">
				<div class="contact-image">
					<img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
				</div>
				<form method="post" action="{{route('contact-us.submit')}}">
					@csrf
					<h3>Drop Us a Message</h3>
				<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Your Name *" value="" required/>
								@if ($errors->has('name'))
									<span class="help-block">
										<strong style="color:red">{{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>
							<div class="form-group">
								<input type="text" name="email" class="form-control" placeholder="Your Email *" value="" required/>
								@if ($errors->has('email'))
									<span class="help-block">
										<strong style="color:red">{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
							<div class="form-group">
								<input type="text" name="phone_number" class="form-control" placeholder="Your Phone Number *" value="" required/>
								@if ($errors->has('phone_number'))
									<span class="help-block">
										<strong style="color:red">{{ $errors->first('phone_number') }}</strong>
									</span>
								@endif
							</div>
							<div class="form-group">
								<input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea name="note" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
							</div>
						</div>
					</div>
				</form>

		</div>
	</div>

	
@endsection