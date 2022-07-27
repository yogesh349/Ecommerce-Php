@extends('layout.layout')
@section('title','Home')
@section('carosal')
<div class="carasoul">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset("images/cara2.jpg")}}" alt="First slide" height="450px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset("images/cara2.jpg")}}" alt="Second slide" height="450px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset("images/cara2.jpg")}}" alt="Third slide" height="450px">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    
       

</div>
    
@endsection

@section('trending-p')
<div class="container">
    <h2 class="mt-5">Trending Products</h2>
    <div class="box trending-carousel owl-carousel owl-theme mb-5">
        <div class="item ">
              <img src="{{asset('images/jacket.avif')}}" alt="" class="box_img">
    
          <div class="price-name-cart-sec">
            <div class="price-name-sec">
              <section>Product Title</section>
              <div>$500</div>
            </div>
            <div class="cart-sec">
              <a href=""><img src="{{asset("images/cart.png")}}" alt="" width="47px" height="24px"
                  class="cart-box-img"></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{{asset('images/jacket.avif')}}" alt="" class="box_img">
          <div class="price-name-cart-sec">
            <div class="price-name-sec">
              <section>Product Title</section>
              <div>$500</div>
            </div>
            <div class="cart-sec">
              <a href=""><img src="{{asset("images/cart.png")}}" alt="" width="47px" height="24px"
                  class="cart-box-img"></a>
            </div>
          </div>
        </div>
    
        <div class="item">
          <img src="{{asset('images/jacket.avif')}}" alt="" class="box_img">
          <div class="price-name-cart-sec">
            <div class="price-name-sec">
              <section>Product Title</section>
              <div>$500</div>
            </div>
            <div class="cart-sec">
              <a href=""><img src="{{asset("images/cart.png")}}" alt="" width="47px" height="24px"
                  class="cart-box-img"></a>
            </div>
          </div>
        </div>
    
        <div class="item">
          <img src="{{asset('images/jacket.avif')}}" alt="" class="box_img">
          <div class="price-name-cart-sec">
            <div class="price-name-sec">
              <section>Product Title</section>
              <div>$500</div>
            </div>
            <div class="cart-sec">
              <a href=""><img src="{{asset("images/cart.png")}}" alt="" width="47px" height="24px"
                  class="cart-box-img"></a>
            </div>
          </div>
        </div>
        <div class="item">
            <img src="{{asset('images/jacket.avif')}}" alt="" class="box_img">
            <div class="price-name-cart-sec">
              <div class="price-name-sec">
                <section>Product Title</section>
                <div>$500</div>
              </div>
              <div class="cart-sec">
                <a href=""><img src="{{asset("images/cart.png")}}" alt="" width="47px" height="24px"
                    class="cart-box-img"></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('images/jacket.avif')}}" alt="" class="box_img">
            <div class="price-name-cart-sec">
              <div class="price-name-sec">
                <section>Product Title</section>
                <div>$500</div>
              </div>
              <div class="cart-sec">
                <a href=""><img src="{{asset("images/cart.png")}}" alt="" width="47px" height="24px"
                    class="cart-box-img"></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('images/jacket.avif')}}" alt="" class="box_img">
            <div class="price-name-cart-sec">
              <div class="price-name-sec">
                <section>Product Title</section>
                <div>$500</div>
              </div>
              <div class="cart-sec">
                <a href=""><img src="{{asset("images/cart.png")}}" alt="" width="47px" height="24px"
                    class="cart-box-img"></a>
              </div>
            </div>
          </div>
          <div class="item">
          <img src="{{asset('images/jacket.avif')}}" alt="" class="box_img">
          <div class="price-name-cart-sec">
            <div class="price-name-sec">
              <section>Product Title</section>
              <div>$500</div>
            </div>
            <div class="cart-sec">
              <a href=""><img src="{{asset("images/cart.png")}}" alt="" width="47px" height="24px"
                  class="cart-box-img"></a>
            </div>
          </div>
        </div>
        <div class="item">
            <img src="{{asset('images/jacket.avif')}}" alt="" class="box_img">
            <div class="price-name-cart-sec">
              <div class="price-name-sec">
                <section>Product Title</section>
                <div>$500</div>
              </div>
              <div class="cart-sec">
                <a href=""><img src="{{asset("images/cart.png")}}" alt="" width="47px" height="24px"
                    class="cart-box-img"></a>
              </div>
            </div>
          </div>
    
      </div>


</div>  
@endsection

@section('content')
<div class="p-5">
    <div class="container">
        <div class="row">
            <h2>Trending Category</h2>
            <div class="box trending-carousel owl-carousel owl-theme">
                @foreach ($category as $item)
                <div class="item">
                    <div class="card">
                        <img src="{{asset('storage/category_file/'. $item->image)}}" alt="" height="250px" >
                        <div class="card-body">
                            <h5>{{$item->name}}</h5>
                            <span class="float-start">{{$item->selling_price}}</span>
                            <span class="float-start">{{$item->original_price}}</span>
                        </div>
                    </div>
                </div>
                    
                @endforeach

            </div>

        </div>
       
    </div>
</div>
    
@endsection

@section('script')
<script>
    $('.trending-carousel').owlCarousel({
    loop:true,
    margin:5,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>
    
@endsection
