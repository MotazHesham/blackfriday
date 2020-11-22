@extends('admin.layout-admin')

@section('content')
    
    <div class="container text-center header-view">
        <h1> Manage <span>Orders</span></h1>
    </div>
    
    <div style="clear:both"></div>

    <div class="container mt-5">
        @if($orders->count() < 1)
            <div class="text-center">No Orders yet....</div>
        @else
        <div class="responsive-table">
            <table class="table main-table table-striped table-bordered dt-responsive nowrap text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Orderd Date</th>
                        {{-- <th>Control</th> --}}
                    </tr>	
                </thead>
                @foreach ($orders as $key => $order) 
                    <tr>
                        <td>{{ ($key+1) + ($orders->currentPage() - 1)*$orders->perPage() }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->product->name }}</td>
                        <td>{{ $order->product->price }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->total_price }}</td>
                        <td>
                            @php
                                if($order->created_at != null){
                                    $trim = explode(" ",$order->created_at);
                                }
                            @endphp
                            {{$trim[0]}}
                            <br>
                            {{$trim[1]}}
                        </td>
                        {{-- <td>
                            <a href='{{route('admin.orders.delete',$order->id)}}' class='btn btn-outline-danger confirm'> Delete</a>
                        </td> --}}
                    </tr>
                @endforeach
                
            </table>	
        </div>
        @endif
    </div>
    {{$orders->links("pagination::bootstrap-4")}}

@endsection
<script type="text/javascript" src="https://www.atfawry.com/ECommercePlugin/scripts/FawryPay.js"></script>
