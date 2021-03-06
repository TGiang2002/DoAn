<!DOCTYPE html>
<html lang="zxx">

<head>

   <base href="{{ asset('/')}}">
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') | Web Sneaker</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">
</head>

<body>
    <!-- Start coding here -->
    <div id="preloder">
        <div class="loader">

        </div>
    </div>
    <!--------->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope">
                            giang@gmail.com
                        </i>
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone">
                            0123456789
                        </i>
                    </div>
                </div>
                <div class="ht-right">
                    <a href="./login" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <!-- <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width: 300px;">
                            <option value='yt' data-image="front/img/flag-1/jpg" 
                            data-imagecss="flag yt" data-title="English">English</option>
                            <option value='yu' data-image="front/img/flag-2/jpg" 
                            data-imagecss="flag yu" data-title="VietName">VietName</option>
                        </select>
                    </div>  -->
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>

                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="inner-header">
               <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="">
                            <p style="font-size: 40px; font-family:'Courier New', Courier, monospace;text-align:center;margin-top:10px;" >
                                TGT
                        </p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <form action="shop">
                    <div class="advanced-search">
                        <!-- <button type="button" class="category-btn">All Categories</button> -->
                        <div class="input-group">
                            <input name="search" type="text" placeholder="b???n c???n g???">
                            <button type="submit"><i class="ti-search"></i></button>
                        </div>
                    </div>
                    </form>

                </div>
                <div class="col-lg-3 col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#">
                                <i class="icon_heart_alt">
                                    <span>1</span>
                                </i>
                            </a>
                        </li>
                        <li class="cart-icon">
                            <a href="./cart">
                                <i class="icon_bag_alt">
                                    <!-- <span>3</span> -->
                                </i>
                            </a>
                          
                        </li>
                        <!-- <li class="cart-price">$150.000</li> -->
                    </ul>
                </div>
               </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <nav class="nav-menu moblie-menu">
                    <ul>
                        <li class="{{(request()->segment(1)=='') ? 'active' :''}}"><a href="./">Home</a></li>
                        <li  class="{{(request()->segment(1)=='shop') ? 'active' :''}}"><a href="./shop">Shop</a></li>
                        <li  class="{{(request()->segment(1)=='collection') ? 'active' :''}}"><a href="./collection">Collection</a>
                            <ul class="dropdown">
                                <li><a href="">Men's</a></li>
                                <li><a href="">WomMen's</a></li>
                                <li><a href="">Kid's</a></li>

                            </ul>
                        </li>
                        <li  class="{{(request()->segment(1)=='blog') ? 'active' :''}}"><a href="./blog">Blog</a></li>
                        <li  class="{{(request()->segment(1)=='contact') ? 'active' :''}}"><a href="./contact">Contact</a></li>
                        <li  class="{{(request()->segment(1)=='page') ? 'active' :''}}"><a href="./page">Pages</a>
                            <ul class="dropdown">
                                <li><a href="blog-details.html">Blog details</a></li>
                                <li><a href="shopping-cart.html">Shopping cart</a></li>
                                <li><a href="check-out.html">Check out</a></li>
                                <li><a href="faq.html">Fag</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
<!---------->

<!------BODY HERE--------->

@yield('body')

<!----------->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-1.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-2.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-3.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-4.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-5.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---Footer-->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="front/img/footer-logo.png" height="25" alt="">
                        </a>
                    </div>
                    <ul>
                        <li>L?? V??n Vi??t TpHCM</li>
                        <li>Phone:5535532</li>
                        <li>Email:giang@gmail.com</li>
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>

                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="">About us</a></li>
                            <li><a href="">Checkout</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Serivius</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="">My Account</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Shopping Cart</a></li>
                            <li><a href="">Shop</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                    <h5>Join Our Newsletter Now</h5>
                    <p> Get E-mail update about our latest shop and special offers</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter your mail">
                        <button type="button">Subscribe</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright:Nh??m TGT
                        </div>
                        <div class="payment-pic">
                            <img src="front/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Js Plugins -->


    <script src="front/js/jquery-3.3.1.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/jquery-ui.min.js"></script>
    <script src="front/js/jquery.countdown.min.js"></script>
    <script src="front/js/jquery.nice-select.min.js"></script>
    <script src="front/js/jquery.zoom.min.js"></script>
    <script src="front/js/jquery.dd.min.js"></script>
    <script src="front/js/jquery.slicknav.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/main.js"></script>
</body>

</html>