@extends('layout.layout')
@section('title')
Order Details
@endsection

@section('content')

<div class="container mb-5" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Order View</h4>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="fname">First Name</label>
                            <div class="border" p-2>{{$orders->fame}}</div>    

                            <label for="fname">Last Name</label>
                            <div class="border" p-2>{{$orders->lname}}</div>

                            <label for="fname">Email</label>
                            <div class="border" p-2>{{$orders->email}}</div>

                            <label for="fname">Phone</label>
                            <div class="border" p-2>{{$orders->phone}}</div>

                            <label for="fname">Shipping Address</label>
                            <div class="border" p-2>
                                {{$orders->country}}
                                {{$orders->province}}
                                {{$orders->city}}
                                {{$orders->address1}}
                                {{$orders->address2}}
                            </div>

                            <label for="fname">ZipCode</label>
                            <div class="border" p-2>{{$orders->pincode}}</div>

                        </div>
                        
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Name </th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                </thead>
                                <tbody>
                                    @foreach ($orders->orderItems as $item)       
                                    <tr>
                                        <td>{{$item->product->name}}</td>
                                        <td>{{$item->qty}}</td>
                                        <td>{{$item->product->selling_price}}</td>
                                        <td><img src="{{asset('storage/product_image/'.$item->product->image)}}" alt="" width="60" height="60px" style="
                                            border-radius: 15px;"></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                          <h4>Grand Total {{$orders->total_price}}</h4>
                        
                          <div class="mt-3">
                            <label for="">Order Status</label>
                            <form action="{{  route('update-order',['id'=>$orders->id]) }}" method="post">
                                @method('PUT')
                                @csrf
                            <select class="form-select" name="order_status">
                              <option {{$orders->status=='0'?'selected':''}} value="0">Pending</option>
                              <option {{$orders->status=='1'?'selected':''}} value="1">Completed</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                          </div>
                         

                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>


@endsection