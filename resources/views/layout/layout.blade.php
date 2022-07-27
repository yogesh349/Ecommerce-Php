<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
  <header>
    <nav>
      <div class="first_sec">
        <div id="hamburger">
          <a href=""><img src="{{asset('images/hamburger.jpg')}}" alt="" width="60px" height="53px" id="ham_img"></a>

        </div>
        <div id="ham-items">
          <div class="ham_item"> <a href="{{route('cart')}}">Electronic Accessories</a></div>
          <div class="ham_item"><a href="">Sports And OutDoor</a> </div>
          <div class="ham_item"><a href="">Mens Fashion</a></div>
          <div class="ham_item"><a href=""> Women Fashion</a></div>
          <div class="ham_item"><a href=""> Health And Beauty</a> </div>
          <div class="ham_item"><a href=""> Health And Beauty</a></div>
          <div class="ham_item"><a href=""> Health And Beauty</a></div>
          <div class="ham_item"><a href=""> Health And Beauty</a></div>
        </div>
        <div id="logo">
          <img src="{{asset('images/tlogo.jpg')}}" alt="" width="65px" height="50px">
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
  @yield('trending-p')
 {{-- category --}}

 @yield('content')

  @yield('cart')
  @yield('form-category')


  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the upcoming
            programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code
            wants to be simple. We will help programmers build up concepts in different programming languages that
            include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
            <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
            <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
            <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
            <li><a href="http://scanfcode.com/category/android/">Android</a></li>
            <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="http://scanfcode.com/about/">About Us</a></li>
            <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
            <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
            <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
            <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
            <a href="#">Scanfcode</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>








  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  {{--
  <script src="asset('js/jquery-3"></script> --}}
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/script.js')}}"></script>
  @yield('script')
</body>

</html>