@extends('layout')

@section('content')

    <div class="container mt-5 mb-5">
        <h1 class="text-center mb-5">Order Now</h1>
        <form method="post" action="{{route('order.submit')}}">
          @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputproduct">Product</label>
                <select class="form-control form-control-xs selectpicker" name="product" data-size="7" data-live-search="true" data-title="Location" id="inputproduct" data-width="100%">
                  @foreach($products as $product)
                    <option value="{{$product->id}}" <?php if($product->id == $selected_product) echo'selected'; ?>>{{$product->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputquantity">Quantity</label>
                <input type="number" min="1" step="1" name="quantity" class="form-control" id="inputquantity" value="1" required>
              </div>
              @if ($errors->has('quantity'))
									<span class="help-block">
										<strong style="color:red">{{ $errors->first('quantity') }}</strong>
									</span>
								@endif
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputname">Name</label>
                <input type="text" class="form-control" name="name" id="inputname" required>
                @if ($errors->has('name'))
									<span class="help-block">
										<strong style="color:red">{{ $errors->first('name') }}</strong>
									</span>
								@endif
              </div>
              
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail4" required>
                @if ($errors->has('email'))
									<span class="help-block">
										<strong style="color:red">{{ $errors->first('email') }}</strong>
									</span>
								@endif
              </div>
            </div>
            
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" name="address" id="inputAddress" required> 
              @if ($errors->has('address'))
									<span class="help-block">
										<strong style="color:red">{{ $errors->first('address') }}</strong>
									</span>
								@endif
            </div>
            <div class="form-group">
              <label for="inputAddress2">Phone Number</label>
              <input type="text" class="form-control" name="phone_number" id="inputAddress2" required>
              @if ($errors->has('phone_number'))
									<span class="help-block">
										<strong style="color:red">{{ $errors->first('phone_number') }}</strong>
									</span>
								@endif
            </div>
            <button type="submit" class="btn btn-success btn-block">Order</button>
          </form>
    </div>
    
@endsection