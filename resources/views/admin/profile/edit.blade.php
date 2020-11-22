@extends('admin.layout-admin')

@section('content')

<div class="container text-center header-view">
    <h1> Edit Profile</h1>
    <p> </p>
</div>

<div class="container mt-5">
    <form action="{{route('admin.profile.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputname">Email</label>
            <input type="email" value="{{auth()->user()->email}}" name="email" class="form-control" id="exampleInputname" required>
            @if ($errors->has('email'))
            <span class="help-block">
                <strong style="color:red">{{ $errors->first('email') }}</strong>
            </span>
        @endif
        </div>
        <div class="form-group">
            <label for="exampleInputfile">old passwrod</label>
            <input type="password" name="oldpassword" class="form-control" id="exampleInputname" required>
            @if ($errors->has('old_password'))
            <span class="help-block">
                <strong style="color:red">{{ $errors->first('old_password') }}</strong>
            </span>
        @endif
        </div> 
        @if ($errors->has('password'))
            <span class="help-block">
                <strong style="color:red">{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <div class="form-group">
            <label for="exampleInputfile">new passwrod</label>
            <input type="password" name="password" class="form-control" id="exampleInputname" required>
            
        </div> 
        <div class="form-group">
            <label for="exampleInputfile">confirm passwrod</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputname" required>
        </div> 
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    

@endsection