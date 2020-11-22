@extends('admin.layout-admin')

@section('content')

<div class="container text-center header-view">
    <h1> Edit <span>Category</span></h1>
    <p> </p>
</div>

<div class="container mt-5">
    <form action="{{route('admin.categories.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{$category->id}}" name="id">
        <div class="form-group">
            <label for="exampleInputname">Category Name</label>
            <input type="text" name="name" value="{{$category->name}}" class="form-control" id="exampleInputname" required>
        </div>
        <div class="form-group">
            <label for="exampleInputfile">Image</label>
            <input type="file" name='image' class="form-control" id="exampleInputfile">
        </div> 
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
@endsection