@extends('layout.layout')
@section('title','Cart')
@section('cart')


    <div class="container">
 
            <div class="cart_sec">
                <div class="cart_collec">
                    <div class="cart_item_product" style="border: 2px solid black">
                        <div class="item_img_cart_text">
                           <div class="item_img">
                            <img src="{{asset('images/jacket.avif')}}" alt="" width="200px" height="180px" style="
                                border-radius: 15px;">
                           </div>  
                           <div class="product_text">
                            <section class="cart_text">Product Title</section>
                            <section class="cart_text">$500</section>
                            <section class="cart_text">Color: Black</section>
                        </div>
                        </div>
                       
                        <div class="delete_cart">
                            <div class="delete_icon">
                               <a href=""><img src="{{asset('images/delete.png')}}" alt="" width="33px" height="32px" class="img_in_cart"></a> 
                            </div>
                            <div class="total_amount">
                               <span class="total_amnt">Total: $900</span> 
                            </div>
                        </div>
                    </div>
                    <div class="cart_item_product" style="border: 2px solid black">
                        <div class="item_img_cart_text">
                           <div class="item_img">
                            <img src="{{asset('images/jacket.avif')}}" alt="" width="200px" height="180px" style="
                                border-radius: 15px;">
                           </div>  
                           <div class="product_text">
                            <section class="cart_text">Product Title</section>
                            <section class="cart_text">$500</section>
                            <section class="cart_text">Color: Black</section>
                        </div>
                        </div>
                       
                        <div class="delete_cart">
                            <div class="delete_icon">
                               <a href=""><img src="{{asset('images/delete.png')}}" alt="" width="33px" height="32px" class="img_in_cart"></a> 
                            </div>
                            <div class="total_amount">
                               <span class="total_amnt">Total: $900</span> 
                            </div>
                        </div>
                    </div>

                </div>
               
        
        
                <div class="proceed_items" style="border: 2px solid black">
                 olores recusandae, quasi asperiores cum magni voluptate!
                </div>

        </div>


    </div>
    


    
@endsection