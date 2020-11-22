@extends('admin.layout-admin')

@section('content')

<div class="container text-center header-view">
    <h1> Edit <span>Product</span></h1>
    <p> </p>
</div>

<div class="container mt-5">
    <form action="{{route('admin.products.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$product->id}}">
        <div class="form-row">
            <div class="form-group col-6">
                <label for="exampleInputname">Product Name</label>
                <input type="text" name="name" value="{{$product->name}}" class="form-control" id="exampleInputname" required>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong style="color:red">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group col-6">
                <label for="inputcategory">Category</label>
                <select id="inputcategory" class="form-control" name="category">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" <?php if($category->id == $product->category_id){echo 'selected';}  ?>>{{$category->name}}</option>
                    @endforeach
                </select>
            </div> 
        </div>
        <div class="form-group">
            <label for="exampleInputprice">Price</label>
            <input type="text" name='price' value="{{$product->price}}" class="form-control" id="exampleInputprice" required>
            @if ($errors->has('price'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div> 
        <div class="form-row">
            <div class="form-group col-6">
                <label for="exampleInputdetails">Details</label>
                <input type="text" name="details" value="{{$product->details}}" class="form-control" id="exampleInputdetails" required>
                @if ($errors->has('details'))
                    <span class="help-block">
                        <strong style="color:red">{{ $errors->first('details') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group col-6">
                <label for="exampleInputfile">Image</label>
                <input type="file" name='image' class="form-control" id="exampleInputfile">
                @if ($errors->has('image'))
                    <span class="help-block">
                        <strong style="color:red">{{ $errors->first('image') }}</strong>
                    </span>
                @endif
            </div>  
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    

@endsection