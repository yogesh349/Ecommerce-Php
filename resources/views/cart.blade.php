@extends('layout.layout')
@section('title','Cart')
@section('cart')


    <div class="container" style="margin-top:100px;">
            <div class="cart_sec">
                <div class="cart_collec">
                    @php
                    $total =0;   
                    @endphp
                    @foreach ($cart as $item)
                    <div class="cart_item_product" style="box-shadow: 0px 2px 0px 0px #ddd9d9;">
                        <div class="item_img_cart_text product_data">
                           <div class="item_img">
                            <img src="{{asset('storage/product_image/'.$item->product->image)}}" alt="" width="200px" height="180px" style="
                                border-radius: 15px;">
                           </div>  
                           <div class="product_text">
                            <section class="cart_text">{{$item->product->name}}</section>
                            <section class="cart_text">Rs {{$item->product->selling_price}}</section>
                            <section class="cart_text">Color: Black</section> 
                           

                            
                            <div class="input-group mb-3 mt-3" style="width: 190px">
                                <span class="mr-2 ml-2" style="margin-top: 4px;">Quantity</span>
                                <button class="input-group-text decrement-btn changeQuantity">-</button>
                                <input type="hidden" class="prod_id" value="{{$item->product->id}}" >
                                 <input type="text" class="form-control text-center bg-white product-qty" disabled value="{{$item->prod_qty}}">
                                 <button class="input-group-text increment-btn changeQuantity">+</button>
                               </div>
                           </div>

                           @php
                           $total+=$item->product->selling_price*$item->prod_qty;
                           @endphp

                          
                        </div>
                       
                        <div class="delete_cart">
                            <div class="delete_icon">
                                <input type="hidden" class="cart_id" value="{{$item->id}}" >
                               <a href=""><img src="{{asset('images/delete.png')}}" alt="" width="33px" height="32px" class="delete_cart_img"></a> 
                            </div>
                            {{-- <div class="total_amount">
                               <span class="total_amnt">Total: $900</span> 
                            </div> --}}
                        </div>
                    </div>       
                    @endforeach


                </div>
               
        
        
                <div class="proceed_items" style="height:350px;">
                 olores recusandae, quasi asperiores cum magni voluptate!
             <div>
                Rs.  {{$total}}
                
            </div> 
            <a href="{{route('checkout')}}" class="btn btn-outline-success">Proceed To Checkout</a>
                </div>

        </div>


    </div>
    


    
@endsection