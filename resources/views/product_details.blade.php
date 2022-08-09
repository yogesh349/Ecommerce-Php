@extends('layout.layout')
@section('title','Cart')

@section('content')

<div class="details_head mt-5">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nemo tempore alias, adipisci temporibus ad ipsum quas ullam dignissimos omnis? Nihil sequi dolorem earum natus?

</div>
<div class="container mt-5 mb-5">

    <div class="block_p_details">
        <div class="product_image">
            <img src="{{asset('storage/product_image/'.$product->image)}}" alt="" width="400px">
            
        </div>
        <div class="product_detail">
            <div class="p_name_trending">
                <h1>{{$product->name}}</h1>
                <div class="trending">
                @if ($product->trending=='1')
                <button type="button" class="btn btn-danger">Trending</button>
                @endif
                   
                </div>

            </div>
            <div class="line">
            </div>

           <div class="price_p">
            <span style="padding-right: 25px">Original Price : {{$product->original_price}}</span> 
            <span>Selling Price  <span  style="text-decoration: line-through;">{{$product->selling_price}}</span></span>
            </div> 

          <div class="desc mb-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid omnis fugit reprehenderit? Consequuntur, quaerat dolores? Quibusdam animi odio odit suscipit alias aut nihil est voluptas cumque tempora impedit in minima repellat quo, accusamus provident.

          </div>

            <div class="line">
            </div>
            @if ($product->qty > 0)
            <button type="button" class="btn btn-success btn-sm mt-3">In Stock</button>  
            @else
            <button type="button" class="btn btn-success btn-sm mt-3">Out of Stock</button>
            @endif
          
            
            <div class="add_to_cart_wishlist mt-4">
                
                <div class="row">
                    <span class="mt-2 col-md-1 ">Quantity</span>
                    <input type="hidden" value="{{$product->id}}" class="prod_id">
                    <div class="col-md-4" >
                        <div class="input-group mb-3" style="width: 130px">
                           <button class="input-group-text decrement-btn">-</button>
                            <input type="text" class="form-control text-center bg-white product-qty" disabled value="1">
                            <button class="input-group-text increment-btn">+</button>
                        </div>
                    </div>

                    <div class="col-md">
                        <button type="button" class="btn btn-success addToWishList btn-sm mr-4 ">Add to Wishlist <i class="fa fa-heart"></i></button>
                        @if ($product->qty > 0)
                       <button type="button" class="btn btn-primary btn-sm addToCartbtn">Add to Cart <i class="fa fa fa-shopping-cart"></i></button>
                       @endif
                    </div>
                </div>

               


       
            </div>
           
    
        </div>

    </div>
</div>
    
@endsection