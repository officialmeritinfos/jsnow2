
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.7, maximum-scale=0.7,user-scalable=yes">
    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="AI-integrated Financial and asset management company"/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->logo)}}" />
    @stack('css')
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('home/css/all.min.css')}}">
    <!-- progress bar -->
    <link rel="stylesheet" href="{{asset('home/css/jQuery-plugin-progressbar.css')}}">
    <!-- mean menu -->
    <link rel="stylesheet" href="{{asset('home/css/meanmenu.css')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('home/css/fontawesome.min.css')}}">
    <!-- slick -->
    <link rel="stylesheet" href="{{asset('home/css/slick.css')}}">
    <!-- nice select -->
    <link rel="stylesheet" href="{{asset('home/css/nice-select.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.css')}}">
    <!-- style -->
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{asset('home/css/responsive.css')}}">
</head>

<body>
@inject('injected','App\Defaults\Custom')
<!-- preloader -->
{{--<div id="loading">--}}
{{--    <div id="loading-center">--}}
{{--        <div id="loading-center-absolute">--}}
{{--            <div class="object" id="object_four"></div>--}}
{{--            <div class="object" id="object_three"></div>--}}
{{--            <div class="object" id="object_two"></div>--}}
{{--            <div class="object" id="object_one"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- topbar starts -->
<div class="top-bar">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            @if(!empty($web->phone))
                <div class="phone">
                    <div class="icon">
                        <img src="{{asset('home/images/phone.png')}}" alt="phone">
                    </div>
                    <div class="text">
                        <p>Chat on Whatsapp</p>
                        <span class="bold">{{$web->phone}}</span>
                    </div>
                </div>
            @endif

            <div class="clock">
                <div class="icon">
                    <img src="{{asset('home/images/clock.png')}}" alt="phone">
                </div>
                <div class="text">
                    <p>Sunday - Saturday:</p>
                    <span class="bold">24/7</span>
                </div>
            </div>

            <div class="envelope">
                <div class="icon">
                    <img src="{{asset('home/images/envelope.png')}}" alt="phone">
                </div>
                <div class="text">
                    <p>Contact Us:</p>
                    <span class="bold">{{$web->email}}</span>
                </div>
            </div>

            <div class="location">
                <div class="icon">
                    <img src="{{asset('home/images/location.png')}}" alt="phone">
                </div>
                <div class="text">
                    <p>{!! $web->address !!}</p>
                </div>
            </div>

            <div class="social-icon">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-dribbble"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-pinterest"></i>
                </a>

            </div>
        </div>
    </div>
</div>
<!-- topbar ends -->

<!-- header starts-->
<header class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="site-logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('home/images/'.$web->logo)}}" alt="company logo">
                    </a>
                </div>
            </div>

            <div class="col-lg-10 col-md-6 col-sm-4 d-flex justify-content-end">
                <nav class="main-menu" id="mobile-menu">
                    <ul>

                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>

                        <li>
                            <a href="{{url('about')}}">About</a>
                        </li>

                        <li>
                            <a href="#">Services +</a>
                            <ul class="submenu">
                                @foreach($injected->getServices() as $service)
                                    <li ><a href="{{route('service.details',['id'=>$service->id])}}" >{{$service->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a data-scroll href="#">Pages +</a>
                            <ul class="submenu">
                                <li ><a href="{{url('plans')}}" >Plans</a></li>
                                <li ><a href="{{url('faqs')}}" >Frequently Asked Questions</a></li>
                                <li ><a href="{{url('terms')}}" >Terms & Conditions</a></li>
                                <li ><a href="{{url('privacy')}}" >Privacy policy</a></li>
                            </ul>
                        </li>

                        <li>
                            <a data-scroll href="#">Account +</a>
                            <ul class="submenu">
                                <li ><a href="{{route('login')}}" >Login</a></li>

                                <li ><a href="{{route('register')}}" >Register</a></li>
                            </ul>
                        </li>

                        <li>
                            <a data-scroll href="{{url('contact')}}">Contact</a>
                        </li>

                        <li class="button header-cta">
                            <a href="{{route('register')}}"><span>Get Started <i class="fas fa-arrow-right"></i></span> </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-12">
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</header>
<!-- header ends-->

@yield('content')


<!-- footer -->
<footer class="footer">
    <div class="container">

        <div class="row widgets">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget">
                    <a href="{{url('/')}}">
                        <img src="{{asset('home/images/'.$web->logo)}}" alt="logo">
                    </a>
                    <p></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-center">
                <div class="widget w-text">
                    <h5>Need Help?</h5>
                    <ul>
                        <li><a href="{{url('contact')}}">Support</a></li>
                        <li><a href="{{route('register')}}">Get Started</a></li>
                        <li><a href="{{url('terms')}}">Terms Of use</a></li>
                        <li><a href="{{url('privacy')}}">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-center">
                <div class="widget w-text">
                    <h5>Learn More</h5>
                    <ul>
                        <li><a href="{{url('about')}}">About</a></li>
                        <li><a href="{{url('plans')}}">Plans</a></li>
                        <li><a href="{{route('login')}}">Customer</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 d-center">
                <div class="widget w-text">
                    <h5>Get In Touch</h5>
                    <ul>
                        <li><a href="#">{!! $web->address !!}</a></li>
                        <li><a href="#">{{$web->email}} <br>
                            {{$web->phone}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-menu text-center">
                    <p>© 2009 - {{date('Y')}} <span>{{$siteName}}</span>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- back to top button -->
<div class="top-btn ">
    <i class="fas fa-chevron-up "></i>
</div>

<!-- jquery -->
<script src="{{asset('home/js/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<!-- progress bar -->
<script src="{{asset('home/js/jQuery-plugin-progressbar.js')}}"></script>
<!-- fontawesome js-->
<script src="{{asset('home/js/all.min.js')}}"></script>
<!-- mean menu js -->
<script src="{{asset('home/js/jquery.meanmenu.min.js')}}"></script>
<!-- fontawesome js -->
<script src="{{asset('home/js/fontawesome.min.js')}}"></script>
<!-- slick js-->
<script src="{{asset('home/js/slick.min.js')}}"></script>
<!-- nice select js-->
<script src="{{asset('home/js/jquery.nice-select.min.js')}}"></script>
<!-- magnific popup js-->
<script src="{{asset('home/js/jquery.magnific-popup.js')}}"></script>
<!-- isotope  js-->
<script src="{{asset('home/js/isotope.pkgd.min.js')}}"></script>
<!-- iconify -->
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js')}}"></script>
<!-- main -->
<script src="{{asset('home/js/app.js')}}"></script>
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
        $(".notifier .txt")(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->
</body>
</html>
