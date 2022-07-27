@extends('layout.layout')
@section('title')
{{$category->name}}
@endsection



@section('trending-p')
<div class="container">
    <h2 class="mt-5">Trending Products</h2>
    <div class="box mb-5">
        
        
    @foreach ($product as $item)
        <div class="item">
          <img src="{{asset('storage/product_image/'.$item->image)}}" alt="" class="box_img">
          <div class="price-name-cart-sec">
            <div class="price-name-sec">
              <section>{{$item->name}}</section>
              <div>Rs. {{$item->selling_price}}</div>
            </div>
            <div class="cart-sec">
              <a href=""><img src="{{asset("images/cart.png")}}" alt="" width="47px" height="24px"
                  class="cart-box-img"></a>
            </div>
          </div>
        </div>
        @endforeach


</div>  
</div>
@endsection