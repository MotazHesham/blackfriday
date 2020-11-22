@extends('admin.layout-admin')

@section('content')

<div class="container text-center header-view">
    <h1> Add new <span>Product</span></h1>
    <p> </p>
</div>

<div class="container mt-5">
    <form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-6">
                <label for="exampleInputname">Product Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputname" required>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong style="color:red">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group col-6">
                <label for="inputcategory">Category</label>
                <select id="inputcategory" class="form-control" name="category">
                    <option selected>Choose...</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div> 
        </div>
        <div class="form-group">
            <label for="exampleInputprice">Price</label>
            <input type="text" name='price' class="form-control" id="exampleInputprice" required>
            @if ($errors->has('price'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div> 
        <div class="form-row">
            <div class="form-group col-6">
                <label for="exampleInputdetails">Details</label>
                <input type="text" name="details" class="form-control" id="exampleInputdetails" required>
                @if ($errors->has('details'))
                    <span class="help-block">
                        <strong style="color:red">{{ $errors->first('details') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group col-6">
                <label for="exampleInputfile">Image</label>
                <input type="file" name='image' class="form-control" id="exampleInputfile" required>
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