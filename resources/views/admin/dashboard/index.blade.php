@extends('admin.layout-admin')

@section('content')
    <h1>Dashboard</h1>
    <div class="container text-center mt-5">
            <div class="row mt-4">

                <!-- Total Orders -->
                <div class="col offset-md-4">
                    <div class="card text-white total-orders  mb-3 stat" style="max-width: 18rem;background-color: #528088;
                    box-shadow: 4px 5px 15px #528088;">
                        <div class="card-header"><i class="fa fa-users"></i> Total Orders</div>
                        <div class="card-body">
                            <h5 class="card-title" style="color: white"> {{\App\Models\Order::all()->count()}} </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <!-- Total Products -->
                <div class="col offset-md-4">
                    <div class="card text-white total-products mb-3 stat" style="max-width: 18rem;background-color: #625288;
                    box-shadow: 4px 5px 15px #625288;">
                        <div class="card-header"><i class="fa fa-tags"></i> Total Products</div>
                        <div class="card-body">
                            <h5 class="card-title" style="color: white"> {{\App\Models\Product::all()->count()}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <!-- Total Categories -->
                <div class="col offset-md-4">
                    <div class="card text-white total-categories mb-3 stat" style="max-width: 18rem;background-color: #88526d;
                    box-shadow: 4px 5px 15px #88526d;">
                        <div class="card-header"><i class="fa fa-tag"></i> Total Categories</div>
                        <div class="card-body">
                            <h5 class="card-title" style="color: white"> {{\App\Models\Category::all()->count()}} </h5>
                        </div>
                    </div>
            </div>


        </div>
    </div>
@endsection