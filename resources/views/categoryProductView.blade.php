@extends('layout.layout')
@section('title')
{{$category->name}}
@endsection



@section('trending-p')
<div class="container">
    <h2 class="mt-5">Trending Products</h2>
    <div class="box mb-5">
        
        
    @foreach ($product as $item)
    <a href="{{route('prodcut_details',['slug'=>$item->slug,'id'=>$item->id])}}">
        <div class="item">
          <img src="{{asset('storage/product_image/'.$item->image)}}" alt="" class="box_img">
          <div class="price-name-cart-sec">
            <div class="price-name-sec">
              <section class="text-dark text-decoration-none">{{$item->name}}</section>
              <div class="text-dark text-decoration-none">Rs. {{$item->selling_price}}</div>
            </div>
            <div class="cart-sec">
              <a href=""><img style="width: 40px;margin-top: 16px;" src="{{asset("images/cart.png")}}" alt="" height="24px"
                  class="cart-box-img"></a>
            </div>
          </div>
        </div>
    </a>
        @endforeach


</div>  
</div>
@endsection