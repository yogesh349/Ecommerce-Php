<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
    <header>
        <nav>
            <div class="first_sec">
                <div id="hamburger">
                    <img src="{{asset('images/hamburger.jpg')}}" alt="" width="60px" height="53px">
        
                </div>
                <div id="ham-items">
                  <div>Electronic Accessories</div>
                  <div>Sports And OutDoor</div>
                  <div>Mens Fashion</div>
                  <div>Women Fashion</div>
                  <div>Health And Beauty</div>
                  <div>Electronic Accessories</div>
                  <div>Electronic Accessories</div>
                  <div>Electronic Accessories</div>
                  </div>  
                <div id="logo">
                    <img src="{{asset('images/tlogo.jpg')}}" alt=""  width="65px" height="50px">
                </div>

            </div>
            <div class="second_sec">
                <form action="" method="get">
                    <input type="search" name="search" id="search">
                    <input type="submit" value="Search">
                </form>
            </div>
            <div class="thrid_sec">
               <a href=""><img src="{{asset('images/cart.png')}}" alt="" width="50px" height="38px"></a> 
            </div>
            
        </nav>


    </header>

    

    @yield('carosal')
      <div class="box">
        <div class="item">
          <img src="{{asset('images/jacket.avif')}}" alt="" class="box_img">

          <div class="price-name-cart-sec">
            <div class="price-name-sec">
              <section>Product Title</section>
              <div>$500</div>
            </div>
            <div class="cart-sec">
              <a href=""><img src="{{asset("images/cart.png")}}" alt="" width="47px" height="24px" class="cart-box-img"></a> 
            </div>
          </div>

         
          
        </div>
        <div class="item">
          <img src="{{asset('images/jacket.avif')}}" alt=""  class="box_img">
          <div class="price-name-cart-sec">
            <div class="price-name-sec">
              <section>Product Title</section>
              <div>$500</div>
            </div>
            <div class="cart-sec">
              <a href=""><img src="{{asset("images/cart.png")}}" alt="" width="47px" height="24px" class="cart-box-img"></a> 
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
              <a href=""><img src="{{asset("images/cart.png")}}" alt="" width="47px" height="24px" class="cart-box-img"></a> 
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
             <a href=""><img src="{{asset("images/cart.png")}}" alt="" width="47px" height="24px" class="cart-box-img"></a> 
            </div>
          </div>

        </div>

        </div>

        @yield('cart')






 
  
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

