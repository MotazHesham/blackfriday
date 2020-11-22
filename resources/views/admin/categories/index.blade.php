@extends('admin.layout-admin')

@section('content')
    
    <div class="container text-center header-view">
        <h1> Manage <span>Categories</span></h1>
        <p><a href="{{route('admin.categories.add')}}" class="btn btn-info" style="float:right">Add new Category</a></p>
    </div>
    
    <div style="clear:both"></div>

    <div class="container mt-5">
        @if($categories->count() < 1)
            <div class="text-center">No categories yet....</div>
        @else
        <div class="responsive-table">
            <table class="table main-table table-striped table-bordered dt-responsive nowrap text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>image</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Control</th>
                    </tr>	
                </thead>
                @foreach ($categories as $key => $category) 
                    <tr>
                        <td>{{ ($key+1) + ($categories->currentPage() - 1)*$categories->perPage() }}</td>
                        <td>
                            <img style="height: 50px;width:50px" src="{{ asset('uploads/' . $category->image) }}">
                        </td>
                        <td>{{ $category->name }}</td>
                        <td>
                            @php
                                if($category->created_at != null){
                                    $trim = explode(" ",$category->created_at);
                                }
                            @endphp
                            {{$trim[0]}}
                            <br>
                            {{$trim[1]}}
                        </td>
                        <td>
                            <a href='{{route('admin.categories.edit',$category->id)}}' class='btn btn-outline-primary'> Edit</a>
                            <a href='{{route('admin.categories.delete',$category->id)}}' class='btn btn-outline-danger confirm'> Delete</a>
                        </td>
                    </tr>
                @endforeach
                
            </table>	
        </div>
        @endif
    </div>
    {{$categories->links("pagination::bootstrap-4")}}

@endsection
<script type="text/javascript" src="https://www.atfawry.com/ECommercePlugin/scripts/FawryPay.js"></script>
