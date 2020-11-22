@extends('admin.layout-admin')

@section('content')
    
    <div class="container text-center header-view">
        <h1> ContactUs Forms </h1>
    </div>
    
    <div style="clear:both"></div>

    <div class="container mt-5">
        @if($rows->count() < 1)
            <div class="text-center">No records yet....</div>
        @else
        <div class="responsive-table">
            <table class="table main-table table-striped table-bordered dt-responsive nowrap text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Note</th>
                        <th>Orderd Date</th>
                        <th>Control</th>
                    </tr>	
                </thead>
                @foreach ($rows as $key => $row) 
                    <tr>
                        <td>{{ ($key+1) + ($rows->currentPage() - 1)*$rows->perPage() }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->note }}</td>
                        <td>
                            @php
                                if($row->created_at != null){
                                    $trim = explode(" ",$row->created_at);
                                }
                            @endphp
                            {{$trim[0]}}
                            <br>
                            {{$trim[1]}}
                        </td>
                        <td>
                            <a href='{{route('admin.contactus.delete',$row->id)}}' class='btn btn-outline-danger confirm'> Delete</a>
                        </td>
                    </tr>
                @endforeach
                
            </table>	
        </div>
        @endif
    </div>
    {{$rows->links("pagination::bootstrap-4")}}

@endsection
<script type="text/javascript" src="https://www.atfawry.com/ECommercePlugin/scripts/FawryPay.js"></script>
