@extends('admin.layout-admin')

@section('content')
    
    <div class="container text-center header-view">
        <h1> Manage <span>Products</span></h1>
        <p><a href="{{route('admin.products.add')}}" class="btn btn-info" style="float:right">Add new Product</a></p>
    </div>
    
    <div style="clear:both"></div>

    <div class="container mt-5">
        @if($products->count() < 1)

            <div class="text-center">No products yet....</div>
        
        @else
        
        <div class="responsive-table">
            <table class="table main-table table-striped table-bordered dt-responsive nowrap text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>image</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Price</th>
                        <th>Category Name</th>
                        <th>Date</th>
                        <th>Trending</th>
                        <th>Control</th>

                    </tr>	
                </thead>
                @foreach ($products as $key => $product) 
                    <tr>
                        <td>{{ ($key+1) + ($products->currentPage() - 1)*$products->perPage() }}</td>
                        <td>
                            <img style="height: 50px;width:50px" src="{{ asset('uploads/' . $product->image) }}">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->details }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            @php
                                if($product->created_at != null){
                                    $trim = explode(" ",$product->created_at);
                                }
                            @endphp
                            {{$trim[0]}}
                            <br>
                            {{$trim[1]}}
                        </td>
                        <td>
                            <label class="switch">
                                <input type="checkbox" onchange="update_trending(this)" value="{{ $product->id }}"  <?php if($product->trending == 1) echo "checked";?> >
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                            <a href='{{route('admin.products.edit',$product->id)}}' class='btn btn-outline-primary'> Edit</a>
                            <a href='{{route('admin.products.delete',$product->id)}}' class='btn btn-outline-danger confirm'> Delete</a>
                        </td>
                    </tr>
                @endforeach
                
            </table>	
        </div>
        @endif
    </div>
    {{$products->links("pagination::bootstrap-4")}}

@endsection
<script type="text/javascript" src="https://www.atfawry.com/ECommercePlugin/scripts/FawryPay.js"></script>

<script type="text/javascript">
    function update_trending(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('{{ route('admin.products.update_trending') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                return 1;
            });
        }
</script>
