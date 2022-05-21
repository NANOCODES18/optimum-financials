<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from troveoption.com/pricing by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2022 14:53:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{$company_detail? $company_detail->companyname : "Name of company"}} - {{$title? $title:""}}</title>
        <link rel="icon" href="{{asset('assets/img/home-visit.png_%20type%3d_image/gif.html')}}" sizes="16x16" />
        <link rel="icon" href="{{asset('assets/img/home-visit.png_%20type%3d_image/gif.html')}}" sizes="18x18" />
        <link rel="icon" href="{{asset('assets/img/home-visit.png_%20type%3d_image/gif.html')}}" sizes="20x20" />

        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome.all.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}" />
        <link rel="stylesheet" href="{{asset('style.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
    </head>
    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Start HEader Area -->
        <header class="header">

            <!-- Header Bottom -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-xl-2 col-6">
                            <div class="logo">
                                <a href="{{route('index')}}">
                                    <!-- <img src="https://troveoption.com/assets/img/logo.png&quot; alt=&quot;logo" /> -->
                                    {{$company_detail? $company_detail->companyname : "Name of company"}}
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-xl-10 col-6">

                            <div class="canvas_open">
                                <a href="javascript:void(0)">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                            <!-- Menu -->
                            <div class="menu">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="{{route('index')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{route('about')}}">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{route('services')}}">Services</a>
                                        </li>
                                        <li>
                                            <li><a href="{{route('pricing')}}">Pricing Plans</a></li>
                                        </li>
                                        <li>
                                            <li><a href="{{route('faq')}}">Faq</a></li>
                                        </li>
                                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li>
                                            <button type="submit" class="button-1" onclick="document.location='{{route('register')}}'">Sign Up </button>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End HEader Area -->
        <!-- Start Mobile Menu Area -->
        <div class="mobile-menu-area">
            <!--offcanvas menu area start-->
            <div class="off_canvars_overlay"></div>
            <div class="offcanvas_menu">
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="mobile-logo">
                        <a href="{{route('index')}}">
                            <!-- <img src="https://troveoption.com/assets/img/logo.png&quot; alt=&quot;logo" /> -->
                            {{$company_detail? $company_detail->companyname : "Name of company"}}
                        </a>
                    </div>
                    <div id="menu" class="text-left">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="{{route('index')}}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('about')}}">About Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('services')}}">Services</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('pricing')}}">Pricing Plans</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('faq')}}">Faq</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('contact')}}">Contact Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('login')}}">Login</a>
                            </li>
                            <li class="menu-item-has-children">
                                <button type="submit" class="button-1" onclick="document.location='{{route('register')}}'">Sign Up </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--offcanvas menu area end-->












@yield('body')



















 <!-- Start Footer Area -->
 <footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top pt-70 pb-20">
        <div class="container">
            <div class="row">
                <!-- Single -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="footer-widgets-single">
                        <h2 class="title">About Company</h2>
                        <p>Here At {{$company_detail? $company_detail->companyname : "Name of company"}}<br>
                            We identify high potential assets using our intelligent financial markets systems, combined with expert advice. &nbsp;
                            We carry out risk-reward analysis to determine the risk exposure for each asset we select.
                        </p>

                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-xs-3 mb-30">
                    <div class="footer-widgets-single">
                        <h2 class="title">Quick Links</h2>
                        <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('services')}}">Services</a></li>
                            <li><a href="{{route('pricing')}}">Pricing Plans</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-xs-3 mb-30">
                    <div class="footer-widgets-single">
                        <ul>
                            <li>&nbsp;</li>
                            <li><a href="{{route('faq')}}">FAQs</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('register')}}">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="copy-text">
                        <p>Copyright © 2021 {{$company_detail? $company_detail->companyname : "Name of company"}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->
<!-- End Works About Area -->
<div class="scroll-area">
    <i class="fa fa-angle-up"></i>
</div>

<link rel="stylesheet" href="../cdn.jsdelivr.net/npm/bootstrap%404.6.1/dist/css/bootstrap.min.css">
<script src="../cdn.jsdelivr.net/npm/jquery%403.5.1/dist/jquery.slim.min.js"></script>

<div class="alert alert-dark alert-dismissible ">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong><i class="fa fa-check-circle"></i></strong> <span id="content-info"> An Investor from Granada deposited $2740.00</span>
</div>

<script>
    $('document').ready(function(){

        $('.alert-dark').hide();

        // NOTE: the number of entry in this array should be an odd number. i.e the length of the array should be an odd number
        var content = ['An Investor from Norway just withdrew $5470.00','An Investor from France deposited $7890.00','An Investor from Tunisia deposited $4150.00','An Investor from Canada just withdrew $2500.00','An Investor from Brasil deposited $12500.00','An Investor from Vietnam just withdrew $9500.00','An Investor from China deposited $22000.00','An Investor from Germany deposited $7500.00','An Investor from USA just withdrew $15200.00'];
        var i = 0;

        window.setTimeout(
            function(){
                $('.alert-dark').show();
                setInterval(function(){
                    len = content.length;
                    if (i==len) {
                        i = 0;
                    }
                    document.getElementById('content-info').innerHTML = content[i];
                    $('.alert-dark').toggle();
                    i++;
                }, 5000);
            }
            ,3000);
    });
</script>
<!-- Js File -->
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/mixitup.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/mobile-menu.js"></script>
</body>


<!-- Mirrored from troveoption.com/pricing by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2022 14:53:20 GMT -->
</html>

