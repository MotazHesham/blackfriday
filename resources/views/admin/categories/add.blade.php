@extends('admin.layout-admin')

@section('content')

<div class="container text-center header-view">
    <h1> Add new <span>Category</span></h1>
    <p> </p>
</div>

<div class="container mt-5">
    <form action="{{route('admin.categories.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputname">Category Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputname" required>
        </div>
        <div class="form-group">
            <label for="exampleInputfile">Image</label>
            <input type="file" name='image' class="form-control" id="exampleInputfile" required>
        </div> 
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    

@endsection