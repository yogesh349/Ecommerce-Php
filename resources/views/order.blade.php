@extends('layout.layout')
@section('title')
My Orders
@endsection

@section('content')

<div class="container mb-5" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>My Orders</h4>

                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>Tracking Number</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)       
                            <tr>
                                <td>{{$item->tracking_no}}</td>
                                <td>{{$item->total_price}}</td>
                                <td>{{$item->status=='0'?'Pending':'Completed'}}</td>
                                <td>
                                    <a href="{{route('view-order_d',['id'=>$item->id])}}" class="btn btn-primary">View</a>
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