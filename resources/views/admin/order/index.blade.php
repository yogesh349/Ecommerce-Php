@extends('layout.layout')
@section('title')
Admin Order View
@endsection

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">My Orders</h4>

                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>Order Date</th>
                            <th>Tracking Number</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)       
                            <tr>
                                <td>{{  date('Y-m-d', strtotime($item->create_at))  }}</td>
                                <td>{{$item->tracking_no}}</td>
                                <td>{{$item->total_price}}</td>
                                <td>{{$item->status=='0'?'Pending':'Completed'}}</td>
                                <td>
                                    <a href="{{route('admin-viewOrder',['id'=>$item->id])}}" class="btn btn-primary">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>

</div>


@endsection