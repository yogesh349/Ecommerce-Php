@extends('layout.layout')
@section('title')
Checkout
@endsection

@section('content')

<div class="container" style="margin-top: 100px">
    <form action="{{route('place-order')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h5>Basic Details</h5>
                    <hr>
                    <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter first name">
                        </div>
                        <div class="col-md-6">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="lname"  placeholder="Enter last name">

                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email"  placeholder="Enter email address">
                        </div>

                        <div class="col-md-6">
                            <label for="pnumber">Phone Number</label>
                            <input type="text" name="pnumber" class="form-control" id="pnumber"  placeholder="Enter phone number">
                        </div>

                        <div class="col-md-6">
                            <label for="address1">Address 1</label>
                            <input type="text" class="form-control" name="address1" id="address1"  placeholder="Enter address1">

                        </div>
                        <div class="col-md-6">
                            <label for="address2">Address 2</label>
                            <input type="text" class="form-control" name="address2" id="address2"  placeholder="Enter address2">

                        </div>
                        <div class="col-md-6">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter city">

                        </div>
                        <div class="col-md-6">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" name="province" id="province" placeholder="Enter province">

                        </div>
                        <div class="col-md-6">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" name="country" id="country" placeholder="Enter country">
                        </div>
                        <div class="col-md-6">
                            <label for="pcode">Pin Code</label>
                            <input type="text" class="form-control" name="pcode" id="pcode" placeholder="Enter pin code">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h6>Order Details </h6>
                    <hr>
                    <table class="table table-striped table-bordered ">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                            <tr>  
                            <td>{{$item->product->name}}</td>  
                            <td>{{$item->prod_qty}}</td> 
                            <td>{{$item->product->selling_price}}</td> 
                            </tr>  
                            @endforeach
                           
                        </tbody>
                    </table>
                    <hr>
                    <button type="submit" class="btn btn-primary float-right">Place Order</button>
                 
                </div>

            </div>
        </div>
    </div>
</form>
</div>

    
@endsection