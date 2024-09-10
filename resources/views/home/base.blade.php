
<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->logo)}}" />
    @stack('css')
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="{{asset('home/css/icons.css')}}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.css')}}">
    <!-- slick slider menu css file -->
    <link rel="stylesheet" href="{{asset('home/css/slick.min.css')}}">
    <!-- animate animation css file -->
    <link rel="stylesheet" href="{{asset('home/css/animate.min.css')}}">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <!-- template main style css file -->
    <link rel="stylesheet" href="{{asset('home/style.css')}}">
    <style>
        /* Custom CSS for the Float widget */
        .telegram-float-widget {
            position: fixed;
            left: 10px;
            /* Adjust the left positioning as needed */
            bottom: 25rem;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }

        .whatsapp-float-widget {
            position: fixed;
            left: 70px;
            /* Adjust the left positioning as needed */
            bottom: 10px;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }
    </style>
    <style>
        .watkey {
            z-index: 9;
            position: fixed;
            bottom: 40px;
            left: 15px;
            padding: 4px;
            border: 1px solid #0d9f16;
            border-radius: 50%;
        }

    </style>
</head>

<body class="body-wrapper">
@inject('injected','App\Defaults\Custom')

<!-- header end -->
<header class="header header-1 transparent header-2">
    <div class="top-header d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3">
                    <div class="header-logo">
                        <div class="logo">
                            <a href="{{url('index')}}">
                                <img src="{{asset('home/images/'.$web->logo)}}" alt="logo" style="width: 100px;">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-9">
                    <div class="header-right-socail d-flex justify-content-end align-items-center">
                        @if(!empty($web->phone))
                            <a class="header-contact d-none d-md-flex align-items-center">
                                <div class="icon color-yellow">
                                    <i class="icon-phone"></i>
                                </div>
                                <div class="text">
                                    <span class="mb-2 d-block fw-normal color-white">Call Us Today</span>
                                    <h5 class="fw-600 color-white">{{$web->phone}}</h5>
                                </div>
                            </a>
                        @endif

                        <a href="mailto:{{$web->email}}" class="header-contact d-none d-md-flex align-items-center">
                            <div class="icon color-yellow">
                                <i class="icon-email"></i>
                            </div>
                            <div class="text">
                                <span class="mb-2 d-block fw-normal color-white">E-mail Us</span>
                                <h5 class="fw-600 color-white">{{$web->email}}</h5>
                            </div>
                        </a>

                        <a class="header-contact d-none d-md-flex align-items-center">
                            <div class="icon color-yellow">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="text">
                                <span class="mb-2 d-block fw-normal color-white">Our Address</span>
                                <h5 class="fw-600 color-white">{!! $web->address !!}</h5>
                            </div>
                        </a>

                        <a class="header-contact d-none d-md-flex align-items-center">
                            <div class="icon color-yellow">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="text">
                                <span class="mb-2 d-block fw-normal color-white">Open Every Day</span>
                                <h5 class="fw-600 color-white">8am : 12pm</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-wraper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between border-top">
                        <div class="header-logo d-block d-xl-none">
                            <div class="logo">
                                <a href="{{url('index')}}">
                                    <img src="{{asset('home/images/'.$web->logo)}}" style="width: 150px;" alt="logo">
                                </a>
                            </div>
                        </div>

                        <div class="social-profile last_no_bullet d-xl-block d-none">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>

                        <div class="header-menu d-none d-xl-block">
                            <div class="main-menu">
                                <ul>
                                    <li>
                                        <a href="{{url('index')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{url('about')}}">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Services</a>

                                        <ul>
                                            @foreach($injected->getServices() as $service)
                                                <li><a href="{{route('service.details',['id'=>$service->id])}}" >{{$service->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a>Pages</a>

                                        <ul>
                                            <li><a href="{{url('plans')}}" >Plans</a></li>
                                            <li><a href="{{url('faqs')}}" >Frequently Asked Questions</a></li>
                                            <li><a href="{{url('terms')}}" >Terms & Conditions</a></li>
                                            <li><a href="{{url('privacy')}}">Privacy policy</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Portal</a>

                                        <ul>
                                            <li><a href="{{route('login')}}">Login</a></li>

                                            <li><a href="{{route('register')}}">Register</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="header-right d-flex align-items-center">

                            <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                                <div class="mobile-nav-wrap">
                                    <div id="hamburger">
                                        <i class="fal fa-bars"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- mobile menu - responsive menu  -->
<div class="mobile-nav mobile-nav-yellow">
    <button type="button" class="close-nav">
        <i class="fal fa-times-circle"></i>
    </button>

    <nav class="sidebar-nav">
        <div class="navigation">
            <div class="consulter-mobile-nav">
                <ul>
                    <li>
                        <a href="{{url('index')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{url('about')}}">About</a>
                    </li>
                    <li>
                        <a href="#">Our Services</a>

                        <ul>
                            @foreach($injected->getServices() as $service)
                                <li><a href="{{route('service.details',['id'=>$service->id])}}" >{{$service->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a>Pages</a>

                        <ul>
                            <li><a href="{{url('plans')}}" >Plans</a></li>
                            <li><a href="{{url('faqs')}}" >Frequently Asked Questions</a></li>
                            <li><a href="{{url('terms')}}" >Terms & Conditions</a></li>
                            <li><a href="{{url('privacy')}}">Privacy policy</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Portal</a>

                        <ul>
                            <li><a href="{{route('login')}}">Login</a></li>

                            <li><a href="{{route('register')}}">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="sidebar-nav__bottom mt-20">
                <div class="sidebar-nav__bottom-contact-infos mb-20">
                    <h6 class="color-black mb-5">Contact Info</h6>

                    <ul>
                        <li><a><i class="fal fa-clock"></i> Mon – Fri: 8.00 – 18.00</a></li>
                        <li><a href="mailto:{{$web->email}}"><i class="icon-email"></i>{{$web->email}}</a></li>
                        @if(!empty($web->phone))
                            <li>
                                <a  class="header-contact d-flex align-items-center">
                                    <div class="icon">
                                        <i class="icon-call"></i>
                                        <!-- <img src="{{asset('home/img/icon/phone-1.svg')}}" alt=""> -->
                                    </div>
                                    <div class="text">
                                        <span class="font-la mb-5 d-block fw-500">Contact For Support</span>
                                        <h5 class="fw-500">{{$web->phone}}</h5>
                                    </div>
                                </a>
                            </li>
                        @endif

                    </ul>
                </div>

                <div class="sidebar-nav__bottom-social">
                    <h6 class="color-black mb-5">Follow On:</h6>

                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="offcanvas-overlay"></div> <!-- offcanvas-overlay -->
<!-- header end -->

@yield('content')

<!--<div class="telegram-float-widget">
    <a href="https://wa.me/{{$web->phone}}" target="_blank">
        <img src="https://cdn2.iconfinder.com/data/icons/social-media-applications/64/social_media_applications_23-whatsapp-256.png" alt="" width="50">
    </a>
</div>-->
<!-- footer start -->
<footer class="footer-1 footer-2 overflow-hidden" style="background-image: url({{asset('home/img/footer/footer-bg-2.png')}});">

    <div class="footer-top mb-xs-25 mb-sm-30 mb-md-35 mb-lg-40 mb-50 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-footer-wid site_info_box">
                        <a href="{{url('/')}}" class="d-block mb-20">
                            <img src="{{asset('home/images/'.$web->logo)}}" alt="">
                        </a>

                        <div class="description font-la color-white">
                            <p>
                                We are a business inclined profitable investment company with all the right tools and experts
                                to help you grow your investment
                            </p>
                        </div>
                    </div>
                </div
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-between">

            <div class="col-md-4 col-xl-4">
                <div class="single-footer-wid contact_widget">
                    <h4 class="wid-title mb-30 color-white">Working Time</h4>

                    <div class="contact-wrapper pt-30 pr-30 pb-30 pl-30">
                        <div class="wid-contact pb-30 mb-25">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-clock"></i>
                                    </div>

                                    <div class="contact-info font-la color-white">
                                        <p>Mon - Sat / 08am : 9pm</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="far fa-clock"></i>
                                    </div>

                                    <div class="contact-info font-la color-white">
                                        <p>Sat. - Sun / 08am : 5pm</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="far fa-map"></i>
                                    </div>

                                    <div class="contact-info font-la color-white">
                                        <p>{!! $web->address !!}</p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div> <!-- /.col-lg-3 - single-footer-wid -->

            <div class="col-md-4 col-xl-4">
                <div class="single-footer-wid pl-xl-10 pl-50">
                    <h4 class="wid-title mb-30 color-white">Quick Link</h4>

                    <ul>
                        <li >
                            <a href="{{url('terms')}}">Legal Information</a>
                        </li>
                        <li >
                            <a  href="{{url('privacy')}}">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div> <!-- /.col-lg-2 - single-footer-wid -->

            <div class="col-md-4 col-xl-4">
                <div class="single-footer-wid pl-xl-10 pl-50">
                    <h4 class="wid-title mb-30 color-white">Resource Link</h4>

                    <ul>
                        <li >
                            <a  href="{{url('contact')}}">Contact</a>
                        </li>
                        <li >
                            <a href="{{url('about')}}">Knowledge Base</a>
                        </li>
                        <li >
                            <a  href="{{url('faq')}}">FAQs</a>
                        </li>
                        <li >
                            <a  href="{{url('/')}}">System Status</a>
                        </li>
                    </ul>
                </div>
            </div> <!-- /.col-lg-2 - single-footer-wid -->


        </div>
    </div>

    <div class="footer-bottom overflow-hidden">
        <div class="container">
            <div class="footer-bottom-content d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="coppyright text-center text-md-start">
                    &copy; 2016 -  {{date('Y')}} <a href="{{url('/')}}">{{$siteName}}</a> | All Rights Reserved.
                </div>

                <div class="footer-bottom-list last_no_bullet">
                    <ul>
                        <li><a href="{{url('terms')}}">Terms & Conditions</a></li>
                        <li><a href="{{url('privacy')}}">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!--  ALl JS Plugins
====================================== -->
<script src="{{asset('home/js/jquery.min.js')}}"></script>
<script src="{{asset('home/js/modernizr.min.js')}}"></script>
<script src="{{asset('home/js/jquery.easing.js')}}"></script>
<script src="{{asset('home/js/popper.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/js/slick.min.js')}}"></script>
<script src="{{asset('home/js/scrollUp.min.js')}}"></script>
<script src="{{asset('home/js/counterup.min.js')}}"></script>
<script src="{{asset('home/js/jquery.sticky-kit.js')}}"></script>
<script src="{{asset('home/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('home/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('home/js/active.js')}}"></script>
<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->
@stack('js')

</body>
</html>
