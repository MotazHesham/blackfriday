@extends('layout')

@section('content')
    <div class="" style="background-color: #e2e2e2e8;height:150vh;overflow-x:hidden">
            <div class="row mt-5 mr-3 ml-3">
                <div class="col-3">
                    <div class="categories" style="background-color: white">
                        <h3 class="text-center" style="background-color: #d5eafd;padding: 12px;">Categories</h3>
                        <div style="padding: 28px;">
                            @foreach($categories as $category)
                                > <a href="{{route('category',$category->id)}}">{{$category->name}}</a> <br><br>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="categories" style="background-color: white;padding: 16px;position::relative">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-3 mb-4">
                                    <div style="border: solid 1px #e4c9c952;position:relative;" class="product-card text-center">
                                        <img src="{{ asset('uploads/' . $product->image) }}" alt="" class="img-fluid" style="height: 150px;">
                                        <div class="content" style="padding: 5px 10px;">
                                            <p><span style="float:left">{{$product->name}}</span> <span style="float: right;color: #e66ab2;">EGP{{$product->price}}</span></p>
                                            
                                        </div>
                                        
                                        <div class="product-card-overlay">
                                            <p class="text-center" style="color:white;padding:10px"><small>{{$product->details}}</small></p>
                                            <p class="text-center"><a href="{{route('order',$product->id)}}" class="btn btn-outline-success">Order Now</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{$products->links("pagination::bootstrap-4")}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection