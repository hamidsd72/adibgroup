<!DOCTYPE html>
@php $locale = session()->get('locale'); @endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ $titleSeo }}</title>
    {{--  start  code soroush--}}
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/style.css')}}">
{{--    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/font-awesome.css')}}">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/FontAwesome.otf">
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/prettyPhoto.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/player/YTPlayer.css')}}">
    <link rel="icon" href="{{url('/1-removebg-preview.png')}}" type="image/png">
    {{--    font google--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    {{--    <!-- some code for meta content -->--}}

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T4RDM5DPGC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-T4RDM5DPGC');
    </script>
    <meta name="google-site-verification" content="bh13Ym2wtZE5Rc6mlkly6QBlnRilqOqOps8KimEEpgU" />
    <meta name="description" content="{{$descriptionSeo}}"/>
    <meta name="keywords" content="{{$keywordsSeo}}">
    <link rel="canonical" href="{{$url_page}}"/>
    <meta property="og:locale" content="fa_IR"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{{url('/1-removebg-preview.png')}}"/>
    <meta property="og:title" content="{{$titleSeo}}"/>
    <meta property="og:description" content="{{$descriptionSeo}}"/>
    <meta property="og:url" content="{{$url_page}}"/>
    <meta property="og:site_name" content="adib.com.tr"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    {{--  end  code soroush--}}
    <style>
        @media (max-width: 650px) {
            #slid2_btn {
                right: -8vw !important;
                position: relative !important
            }
            #home1{
                top: 44px !important;
            }
        }

        @keyframes pulse {
            0% {
                -moz-box-shadow: 0 0 0 0 rgba(27, 89, 141, 1);
                box-shadow: 0 0 0 0 rgba(27, 89, 141, 1);
            }
            90% {
                -moz-box-shadow: 0 0 35px 20px rgba(27, 89, 141, 0);
                box-shadow: 0 0 35px 20px rgba(27, 89, 141, 0);
            }
            100% {
                -moz-box-shadow: 0 0 0 0 rgba(27, 89, 141, 0);
                box-shadow: 0 0 0 0 rgba(27, 89, 141, 0);
            }
        }

        .wat_sapp {
            position: fixed;
            text-align: center;
            bottom: 6%;
            left: 2%;
            z-index: 999;
            animation-name: text-focus-in;
            animation-duration: 2.2s;
            animation-timing-function: linear;
            animation-delay: 0s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
            animation-fill-mode: backwards;
        }

        .wat_sapp img {
            width: 48%;
            border-radius: 50px !important;
            box-shadow: 0 0 50px 11px #2D3E48;
            margin-bottom: 5px;
            animation: pulse 2s infinite;
        }

        .wat_sapp p {
            animation: pulse2 2s infinite;
        }
        .contact-social {
            margin-bottom: 0px;
        }
        .contact-social a {
            height: 44px;
            line-height: 44px;
            margin: 0 6px 0;
            width: 44px;
        }
        .about {
            margin: 0px 17px;
        } 
        .team-items .owl-wrapper-outer .owl-wrapper .owl-item .item img {
            max-width: -webkit-fill-available !important;
        }
        #blog .content {
            max-width: 90%;
            margin: 0px;
        }
        .team-items .owl-wrapper-outer .owl-wrapper .owl-item .item {
            min-height: 440px;
        }
            @media only screen and (min-width: 992px) {
            .main_title_a {
                margin-top: 40px;
            }
        } 
        .important_links {
            padding: 30px 0px;
        }
        .welcome-banner-text a.more_a {
            padding: 10px;
        } 
        a.load-more {
            padding: 10px;
        }
        @media only screen and (max-width: 640px) {
            .plans-prices .plan-price {
                width: 95%;
                margin: 0px 10px;
            }
        }
        @media only screen and (max-width: 640px) {
            .no-margin-left {
                margin-bottom: 20px !important;
            }
        }
        @media only screen and (max-width: 640px) {
            .owl-carousel .owl-wrapper, .owl-carousel .owl-item .about {
                margin: 0px !important;
            }
        }
        @media only screen and (max-width: 640px) {
            #servies .owl-carousel {
                width: 94% !important;
            }
        }
        @media only screen and (min-width: 992px) {
            .mt-lg-82 {
                margin-top: 82px;
            }
        }
        @media only screen and (min-width: 992px) {
            .pt-lg-44 {
                padding-top: 44px;
            }
        }
        @media only screen and (min-width: 992px) {
            .pr-lg-320 {
                padding-right: 320px;
            }
        }
        .mb-30 {
            margin-bottom: 30px !important;
        }
        @media only screen and (max-width: 640px) {
            #portfolio .work-img img {
                display: none;
            }
        } 
        .balon:after, .parallax-overlay:after, .overlay1:after, .overlay2:after {
            background: transparent;
        }
        @media only screen and (min-width: 992px) {
            #newServies .owl-carousel .owl-wrapper, .owl-carousel .owl-item {
                min-width: 25% !important;
            } 
        }
        #newServies .team-items .owl-wrapper-outer .owl-wrapper .owl-item .item {
            border: none;
            background: transparent;
            box-shadow: 0 0 1px 1px transparent inset, inset 0 0 10px 3px transparent;
        }
        #newServies .team-items .owl-wrapper-outer .owl-wrapper .owl-item .item p {
            font-size: 15px;
            padding: 0px 20px;
        }
 
        @media only screen and (min-width: 992px) {
            #newcoustomer .owl-carousel .owl-wrapper, .owl-carousel .owl-item {
                min-width: 25% !important;
                max-height: 450px;

            } 
        }
        #newcoustomer .team-items .owl-wrapper-outer .owl-wrapper .owl-item .item {
            border: none;
            background: transparent;
            box-shadow: 0 0 1px 1px transparent inset, inset 0 0 10px 3px transparent;
        }
        #newcoustomer .owl-carousel .owl-wrapper-outer {
            margin-top: 60px;
        }
        @media only screen and (max-width: 640px) {
            #newServies .team-items .owl-buttons {
                top: 12px;
            }
        }
        @media only screen and (max-width: 640px) {
            #newServies .owl-carousel .owl-wrapper-outer {
                margin-top: 60px;
            }
            .xs-hidden{
                display: none;
            }
        }
        #newcoustomer .team-items .owl-wrapper-outer .owl-wrapper .owl-item .item:hover img {
            /* background: black !important; */
            border: 5px solid #2d728b !important;
        }
        #newcoustomer .team-items .owl-wrapper-outer .owl-wrapper .owl-item .item:hover h4 {
            color: black !important;
            font-size: 20px;
        }
        #newServies .team-items .owl-wrapper-outer .owl-wrapper .owl-item .item:hover div {
            /*background: #f26341  !important;*/
        }
        #newServies .team-items .owl-wrapper-outer .owl-wrapper .owl-item .item:hover h5 {
            color: black !important;
            font-size: 16px;
        }
        #dev-new-code-customers .work-inner {
            border-radius: 9px 9px 0px 0px;
        }
        #dev-new-code-customers .work-img {
            background: transparent;
        }
        #dev-new-code-customers .work-inner .work-img img {
            object-fit: cover;
            object-position: 0 0%;
            height: 40vh;
        }
        #dev-new-code-customers .title-img {
            transition: 0.5s;
            position:relative;
            z-index: 100;
            padding: 10px 0;
            background: #F26341;
            text-align: center;
            margin: 0;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            color: #fff;
        }
        #laravel-session .session-alert {
            padding-top: 10px;
            padding-bottom: 0px;
            margin: 0px;
            background: #202E37;
            border-radius: 0px;
        }
        #laravel-session .session-alert .session-body {
            color: white;
        }
        #form-contact .row div {
            margin-bottom: 14px;
        }
        @media (max-width: 640px) {
            #laravel-session .session-alert {
                padding: 20px 0px;
                margin-top: 100px;
            }
            #laravel-session .session-alert .session-body {
                margin: 0px;
                font-size: 14px;
            }
            #pagetop .content .col-xs-9 {
                width: 100%;
                padding: 0px;
            }
            #pagetop .content .col-xs-9 ul {
                max-width: 34%;
            }
            #pagetop .content .col-xs-9 span.details-on-top {
                font-size: 12px;
                padding: 0px 4px;
            }
        }
    </style>

</head>
<body data-spy="scroll" data-target=".nav-menu" data-offset="50" style="overflow-x: hidden !important">
{{--modal--}}
<div id="myModalSlider" class="modal fade pt-0" role="dialog">
    <div class="modal-dialog modal-lg mt-0">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="height: 50px;padding: 0 20px;display: flex; align-items: center;">
                <div style="width: 100%;text-align: center;    color: #F26341;font-weight: 700;">{{__('sentence.form.text1')}}</div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p class="text-center my-0" style="padding: 8px 0">{{__('sentence.form.text2')}}</p>
                <div class="container-fluid">
                    <form class="row frm_send" action="{{route('form-post-slider',app()->getLocale())}}" method="post">
                        {{csrf_field()}}
                        <div class="col-md-6" style="margin-top: 5px">
                            <input type="text" class="form-control" name="full_name"
                                   placeholder="* {{__('sentence.form.name')}}">
                        </div>
                        <div class="col-md-6" style="margin-top: 5px">
                            <input type="text" class="form-control" name="email"
                                   placeholder="{{__('sentence.form.email')}}">
                        </div>
                        <div class="col-md-6" style="margin-top: 5px">
                            <input type="text" class="form-control" name="mobile"
                                   placeholder="* {{__('sentence.form.mobile')}}">
                        </div>
                        {{-- <div class="col-md-6" style="margin-top: 5px">
                            <input type="text" class="form-control" name="city"
                                   placeholder="{{__('sentence.form.city')}}">
                        </div> --}}
                        <div class="col-md-6" style="margin-top: 5px">
                            <input type="text" class="form-control" name="subject"
                                   placeholder="{{__('sentence.form.subject')}}">
                        </div>
                        <div class="col-md-12" style="margin-top: 5px">
                            <textarea class="form-control px-2" name="text" placeholder="* {{__('sentence.form.text')}}"
                                      rows="5"></textarea>
                        </div>
                        <div class="col-md-12" style="margin-top: 5px">
                            <button type="submit" class="btn"
                                    style="background: #F26341;color: #fff;padding: 6px 40px">{{__('sentence.form.btn')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Page Loader-->
<div id="pageloader">
    <div class="loader-item">
        <img src="{{url("adib/new/images/loading.gif")}}" alt='Loading...'/>
    </div>
</div>

<!-- End Page Loader-->
<!-- Home Section -->
<section id="home" style="position: sticky !important;top: 0 !important;z-index: 1002!important;">
    <!-- Top Bar Section -->
    <section id="pagetop">
        <!-- Content -->
        <div class="content pagetop">

            <!-- Top Details-->
            <div class="col-xs-9" style="display: flex;justify-content: space-evenly;align-items: center;">
                <ul class="parch" style="display: flex">
                    <li><a href="{{url('en')}}"><img style="width: 25px"   src="{{url('adib/new/images/en.png')}}" alt="icon">
                            @if($locale=='en' )
{{--                                <i class="fa fa-check lang_checked"></i>--}}
                            @endif
                        </a></li>
                    <li><a href="{{url('tr')}}">
                            <img style="width: 25px" src="{{url('adib/new/images/tr.png')}}"  alt="icon">
                            @if($locale=='tr' )
{{--                                <i class="fa fa-check lang_checked"></i>--}}
                            @endif
                        </a></li>
                    <li><a href="{{url('ar')}}">
                            <img style="width: 25px" src="{{url('adib/new/images/ar.png')}}" alt="icon">
                            @if($locale=='ar' )
{{--                                <i class="fa fa-check lang_checked"></i>--}}
                            @endif
                        </a></li>
                    <li><a href="https://adib-it.com/fa">
                            <img style="width: 25px" src="{{url('adib/new/images/fa.png')}}" alt="icon">
                        </a></li>
                </ul>
{{--                    <div class="languages drop">--}}
{{--                        @if($locale=='tr' )--}}
{{--                            <img style="width: 25px"   src="{{url('adib/new/images/tr.png')}}" alt="icon tr">--}}
{{--                        @elseif($locale == 'ar')--}}
{{--                            <img style="width: 25px"   src="{{url('adib/new/images/ar.png')}}" alt="icon ar">--}}
{{--                        @elseif($locale == 'en')--}}
{{--                            <img style="width: 25px"   src="{{url('adib/new/images/en.png')}}" alt="icon en">--}}
{{--                        @elseif($locale == 'fa')--}}
{{--                            <img style="width: 25px"   src="{{url('adib/new/images/fa.png')}}" alt="icon fa">--}}

{{--                        @else--}}
{{--                            <a href="#"><i class="fa fa-globe"></i> </a>--}}
{{--                        @endif--}}

{{--                        <div class="languages-panel">--}}
{{--                            <ul class="content">--}}
{{--                                <li><a href="{{url('en')}}"><img style="width: 25px"   src="{{url('adib/new/images/en.png')}}" alt="icon">--}}
{{--                                        english--}}
{{--                                        @if($locale=='en' )<i class="fa fa-check lang_checked"></i>@endif--}}
{{--                                    </a></li>--}}
{{--                                --}}{{--                                <li class="active"><a href="{{url('en')}}">english <i class="fa fa-check lang_checked"></i></a></li>--}}
{{--                                <li><a href="{{url('tr')}}">--}}
{{--                                        <img style="width: 25px" src="{{url('adib/new/images/tr.png')}}"  alt="icon">--}}
{{--                                        turkish--}}
{{--                                        @if($locale=='tr' )<i class="fa fa-check lang_checked"></i>@endif--}}
{{--                                    </a></li>--}}
{{--                                <li><a href="{{url('ar')}}">--}}
{{--                                        <img style="width: 25px" src="{{url('adib/new/images/ar.png')}}" alt="icon">--}}
{{--                                        arabic--}}
{{--                                        @if($locale=='ar' )<i class="fa fa-check lang_checked"></i>@endif--}}
{{--                                    </a></li>--}}
{{--                                <li><a href="https://adib-it.com/fa">--}}
{{--                                        <img style="width: 25px" src="{{url('adib/new/images/fa.png')}}" alt="icon">--}}
{{--                                        Persian--}}
{{--                                    </a></li>--}}


{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- End Languages DropDown-->
                    <span class="details-on-top hidden-in-mobile-a"><i class="fa fa-map-marker"></i> {{substr(trans('sentence.footer.address'),0,20)}}<a href="#scroll_address" class="scroll" style="color: #F26341 ">...</a></span>
                    <span class="details-on-top"><i class="fa fa-mobile"></i>(+90) 531 7677479</span>
                    <span class="details-on-top"><i class="fa fa-envelope"></i>info@adib.com.tr</span>
                </div>
            </div>
            <!-- End Top Details-->

            <!-- Top Social Media-->
            <div class="col-xs-3 right hidden-in-mobile-a">
                <div class="top-social-media">
                    <a href="https://twitter.com/Adib_IT_Group"><i class="fa fa-twitter"></i></a>
                    <a href="https://t.me/Adibit"><i class="fa fa-telegram"></i></a>
                    <a href="https://instagram.com/adibgrup?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/adib-it-890926173/"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.aparat.com/adibwebdesign"><i class="fa fa-youtube"></i></a>
                    <a href="https://www.pinterest.com/adibitc"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
            <!-- End Social Media-->
            <div class="clear"></div>
        </div>
        <!-- End Content -->
    </section>
    <!-- End Top Bar Section -->
</section>
<section id="home1" style="position: sticky !important;top: 54px;z-index: 1001!important;">
    <!-- Navigation Section -->
    <section id="navigation" class="shadow">
        <!-- Content -->
        <div class="content navigation">
            <!-- Logo -->
            <div class="logo" style="display: flex;    justify-content: center;    align-items: center;height: 100%;">
                <a class="scroll" style="display: inline;margin-top: 0;" href="#home"><img
                            src="{{url('/1-removebg-preview.png')}}"
                            style="    width: 41px;position: relative; " alt="Logo"/>
                    @if($locale == 'tr')
                        <span style="font-family: 'Dancing Script', cursive;font-size: 25px;color: #fff;position: relative;top: 4px;margin-left: 6px">ADIB-GRUP</span>
                    @else
                        <span style="font-family: 'Dancing Script', cursive;font-size: 25px;color: #fff;position: relative;top: 4px;margin-left: 6px">ADIB-GROUP</span>
                    @endif
                </a>
            </div>
            <!-- End Logo -->

            <!-- Nav Menu -->
            @php
                $Menu = App\Menu::where('id','!=','4')->get();
                $ProductCategory= App\ProductCategory::all();
                $service=App\Service::get();
                $product = App\Product::all();
            @endphp
            <div class="nav-menu">
                <ul class="nav main-nav">
                    @if(trans('sentence.menu.home') != 'null')
                        <li style="position: relative"
                            class=" {{ (request()->is('tr')) ? 'active' : '' }}{{ (request()->is('en')) ? 'active' : '' }}{{ (request()->is('ar')) ? 'active' : '' }}">
                            <a class="scroll" aria-label="AdibIT"  href="{{ url(session()->get('locale')??$locale) }}">{{trans('sentence.menu.home')}}</a>
                            <a href="#slider" style=";top: -100000px;position: absolute;    opacity: 0;"></a>
                        </li>
                    @endif

                    @if(trans('sentence.menu.aboutUs') != 'null')
                        <li><a class="scroll"
                               @if(request()->is('tr') || request()->is('en') || request()->is('ar')) href="#important_links"
                               @else href="{{url($locale."#important_links")}}" @endif >{{trans('sentence.menu.aboutUs')}}</a>
                        </li>
                    @endif

                    @if(trans('sentence.menu.service') != 'null')
                    <li><a class="scroll" aria-label="AdibIT"
                           @if(request()->is('tr') || request()->is('en') || request()->is('ar')) href="#newServies"
                           @else href="{{url($locale."#newServies")}}" @endif >{{trans('sentence.menu.service')}}</a>
                    </li>
                    @endif


                    @if($locale == 'tr' || $locale == 'ar'  || $locale == 'en')  
                                      <li><a class="scroll"
                           @if(request()->is('tr') || request()->is('en') || request()->is('ar')) href="#prices"
                           @else href="{{url($locale."#prices")}}" @endif >
                            @if($locale == 'tr')
                                Paketler
                            @elseif($locale == 'ar')
                                السعر
                            @else
                                price
                            @endif
                        </a></li>
                    @endif

                     @if(trans('sentence.menu.templates') != 'null')
                        <li class="{{ (request()->segment(2) == 'Portfolio-design-site') ? 'active' : '' }}"><a
                                    class="scroll"
                                    @if(request()->is('tr') || request()->is('en') || request()->is('ar')) href="#portfolio"
                                    @else href="{{url($locale."#portfolio")}}" @endif >{{trans('sentence.menu.templates')}}</a>
                        </li>
                    @endif

                    @if(trans('sentence.menu.customers') != 'null')
                        <li><a class="scroll" aria-label="AdibIT"
                               @if(request()->is('tr') || request()->is('en') || request()->is('ar')) href="#coustomer"
                               @else href="{{url($locale."#coustomer")}}" @endif >{{trans('sentence.menu.customers')}}</a>
                        </li>
                    @endif

                    @if(trans('sentence.menu.articles') != 'null')
                        <li><a class="scroll"
                               @if(request()->is('tr') || request()->is('en') || request()->is('ar')) href="#blog"
                               @else href="{{url($locale."#blog")}}" @endif> {{trans('sentence.menu.articles')}}</a>
                        </li>
                    @endif
                
                    @if(trans('sentence.menu.hire') != 'null' and $locale == 'fa')
                        <li><a class="scroll" href="{{route('employment-form')}}"> {{trans('sentence.menu.hire')}}</a>
                        </li>
                    @endif
                    @if(trans('sentence.menu.analyze') != 'null' and $locale == 'fa')
                        <li><a class="scroll" href="{{url('order')}}">{{trans('sentence.menu.analyze')}}</a></li>
                    @endif
                    @if(trans('sentence.menu.news') != 'null' and $locale == 'fa')
                        <li><a class="scroll"
                               href="{{ route('user-news-list1') }}">   {{trans('sentence.menu.news')}}</a></li>
                    @endif
                    @if(trans('sentence.menu.transCAD') != 'null')
                        <li><a class="scroll" href="{{ route('trans-cad') }}">{{trans('sentence.menu.transCAD')}}</a>
                        </li>
                    @endif
        
                    @if(trans('sentence.menu.contactUs') != 'null')
                        <li><a class="scroll" href="#contact"> {{trans('sentence.menu.contactUs')}}</a></li>
                    @endif

{{--                        menu histort start      --}}
{{--                    @if($locale == 'tr' || $locale == 'ar'  ||$locale == 'en')--}}
{{--                        <li><a class="scroll" aria-label="AdibIT"--}}
{{--                               @if(request()->is('tr') || request()->is('en') || request()->is('ar')) href="#history"--}}
{{--                               @else href="{{url($locale."#history")}}" @endif >--}}
{{--                                @if($locale == 'tr')--}}
{{--                                    Tarih--}}
{{--                                @elseif($locale == 'ar')--}}
{{--                                    التاريخ--}}
{{--                                @else--}}
{{--                                    history--}}
{{--                                @endif--}}
{{--                            </a></li>--}}
{{--                    @endif--}}
                        {{--                        menu histort end        --}}

                </ul>
            </div>
            <!-- End Nav Menu -->

            <!-- Dropdown Menu For Mobile Devices-->
            <div class="dropdown mobile-drop"
                 style="position:sticky!important;;top: 0!important;z-index: 99!important;">
                <a data-toggle="dropdown" class="mobile-menu" href="#"><i class="fa fa-bars"></i></a>
                <ul class="nav dropdown-menu " style="width: 96.5vw;" role="menu">
                    @if(trans('sentence.menu.home') != 'null')
                    <li style="position: relative"
                        class=" {{ (request()->is('tr')) ? 'active' : '' }}{{ (request()->is('en')) ? 'active' : '' }}{{ (request()->is('ar')) ? 'active' : '' }}">
                        <a class="scroll" aria-label="AdibIT"  href="{{ url(session()->get('locale')??$locale) }}">{{trans('sentence.menu.home')}}</a>
                        <a href="#slider" style=";top: -100000px;position: absolute;    opacity: 0;"></a>
                    </li>
                    @endif
                    @if(trans('sentence.menu.aboutUs') != 'null')
                    <li><a class="scroll"
                           @if(request()->is('tr') || request()->is('en') || request()->is('ar')) href="#important_links"
                           @else href="{{url($locale."#important_links")}}" @endif >{{trans('sentence.menu.aboutUs')}}</a>
                    </li>
                    @endif
                        @if(trans('sentence.menu.service') != 'null')
                            <li><a class="scroll" aria-label="AdibIT"
                                   @if(request()->is('tr') || request()->is('en') || request()->is('ar')) href="#newServies"
                                   @else href="{{url($locale."#newServies")}}" @endif >{{trans('sentence.menu.service')}}</a>
                            </li>
                        @endif
                @if($locale == 'tr' || $locale == 'ar'  || $locale == 'en')  
                                  <li><a class="scroll"
                       @if(request()->is('tr') || request()->is('en') || request()->is('ar')) href="#prices"
                       @else href="{{url($locale."#prices")}}" @endif >
                        @if($locale == 'tr')
                            Paketler
                        @elseif($locale == 'ar')
                            السعر
                        @else
                            price
                        @endif
                    </a></li>
            @endif
                 @if(trans('sentence.menu.templates') != 'null')
                    <li class="{{ (request()->segment(2) == 'Portfolio-design-site') ? 'active' : '' }}"><a
                                class="scroll"
                                @if(request()->is('tr') || request()->is('en') || request()->is('ar')) href="#portfolio"
                                @else href="{{url($locale."#portfolio")}}" @endif >{{trans('sentence.menu.templates')}}</a>
                    </li>
                @endif
                @if(trans('sentence.menu.customers') != 'null')
                    <li><a class="scroll" aria-label="AdibIT"
                           @if(request()->is('tr') || request()->is('en') || request()->is('ar')) href="#coustomer"
                           @else href="{{url($locale."#coustomer")}}" @endif >{{trans('sentence.menu.customers')}}</a>
                    </li>
                @endif
                @if(trans('sentence.menu.articles') != 'null')
                    <li><a class="scroll"
                           @if(request()->is('tr') || request()->is('en') || request()->is('ar')) href="#blog"
                           @else href="{{url($locale."#blog")}}" @endif> {{trans('sentence.menu.articles')}}</a>
                    </li>
                @endif
                {{-- @if(trans('sentence.menu.service') != 'null')
                    <li><a class="scroll" aria-label="AdibIT"
                           @if(request()->is('tr') || request()->is('en') || request()->is('ar')) href="#services"
                           @else href="{{url($locale."#services")}}" @endif >{{trans('sentence.menu.service')}}</a>
                    </li>
                @endif --}}
            
                @if(trans('sentence.menu.hire') != 'null' and $locale == 'fa')
                    <li><a class="scroll" href="{{route('employment-form')}}"> {{trans('sentence.menu.hire')}}</a>
                    </li>
                @endif
                @if(trans('sentence.menu.analyze') != 'null' and $locale == 'fa')
                    <li><a class="scroll" href="{{url('order')}}">{{trans('sentence.menu.analyze')}}</a></li>
                @endif
                @if(trans('sentence.menu.news') != 'null' and $locale == 'fa')
                    <li><a class="scroll"
                           href="{{ route('user-news-list1') }}">   {{trans('sentence.menu.news')}}</a></li>
                @endif
                @if(trans('sentence.menu.transCAD') != 'null')
                    <li><a class="scroll" href="{{ route('trans-cad') }}">{{trans('sentence.menu.transCAD')}}</a>
                    </li>
                @endif
    
                @if(trans('sentence.menu.contactUs') != 'null')
                    <li><a class="scroll" href="#contact"> {{trans('sentence.menu.contactUs')}}</a></li>
                @endif
                </ul>
            </div>
            <!-- End Dropdown Menu For Mobile Devices-->
            <div class="clear"></div>
        </div>
        <!-- End Content -->
    </section>
    <!-- End Navigation Section -->
</section>
<div id="laravel-session">
    @if (session()->has('flash_message'))
        <div class="alert alert-secondary alert-dismissible show session-alert" role="alert">
            <h1 class="main_title_a session-body">{!! session()->get('flash_message') !!}</h1>
        </div>
        <script>
            setTimeout(function() { $(".session-alert").alert('close') }, 9000);
        </script>
    @endif
    @if (session()->has('err_message'))
        <div class="alert alert-secondary alert-dismissible show session-alert" role="alert">
            <h1 class="main_title_a session-body">{!! session()->get('err_message') !!}</h1>
        </div>
        <script>
            setTimeout(function() { $(".session-alert").alert('close') }, 9000);
        </script>
    @endif
</div>
@if(request()->is('tr') || request()->is('en') || request()->is('ar'))
    <section id="home2" style="">
        <!-- Revolution Slider -->
        <section id="slider">
            <div class="tp-banner">
                <ul>
                    <!-- Slide -->
                    <li class="revslide" data-transition="random" data-slotamount="7" data-masterspeed="800">
                        <!-- MAIN IMAGE -->
{{--                        <img src="https://arwen.ideal-theme.com/html/arwen/images/rev-slider/slide1.jpg" alt="slidebg1"--}}
{{--                             data-bgfit="cover"--}}
{{--                             data-bgposition="center top" data-bgrepeat="no-repeat">--}}

                        <img src="{{url("adib/new/images/slid_1.jpg")}}" alt="slidebg1"
                             data-bgfit="cover"
                             data-bgposition="center top" data-bgrepeat="no-repeat">
                        <!-- Layer 1 -->
                        <div class="tp-caption sft customout"
                             data-x="center"
                             data-y="100"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="1400"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            {{-- <h4 class="rev-text rev-title-d">
                                @if($locale == 'tr')
                                Profesyonel Sosyal Medya Yönetim Hizmeti
                                @elseif($locale == 'ar')
                                    إدارة احترافية لوسائل التواصل الاجتماعي
                                @else
                                    PROFESSIONAL SOCIAL MEDIA MANAGEMENT
                                @endif
                            </h4> --}}
                        </div>

                        <!-- Layer 2 -->
                        <div class="tp-caption sft customout "
                             data-x="center"
                             data-y="210"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="1700"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                             <h4 class="rev-text rev-title-d">
                                @if($locale == 'tr')
                                Profesyonel Sosyal Medya Yönetim Hizmeti
                                @elseif($locale == 'ar')
                                    إدارة احترافية لوسائل التواصل الاجتماعي
                                @else
                                    PROFESSIONAL SOCIAL MEDIA MANAGEMENT
                                @endif
                            </h4>
                        </div>

                        <!-- Layer 3 -->
                        <div class="tp-caption sft customout "
                             data-x="center"
                             data-y="300"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="2000"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            <div>
                                {{-- <a class="white-button "
                                    style="margin-top: 45px;position: relative;z-index: 10000;left: -20vw" href="#">
                                    @if($locale == 'tr')
                                        İncele
                                    @elseif($locale == 'ar')
                                        مراجعة
                                    @else
                                        Review
                                    @endif
                                </a> --}}
                            </div>
                        </div>
                    </li>

                    <!-- Slide -->
                    <li class="revslide" data-transition="random" data-slotamount="7" data-masterspeed="800">
                        <!-- MAIN IMAGE -->
                        <img src="{{url('/adib/new/images/rev-slider/slide2.jpg')}}" alt="slidebg2" data-bgfit="cover"
                             data-bgposition="center top" data-bgrepeat="no-repeat">

                        <!-- Layer 1 -->
                        <div class="tp-caption lfb customout"
                             data-x="0"
                             data-y="120"
                             data-customin="x:0;y:50;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="1200"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                        >
                            <img src="https://arwen.ideal-theme.com/html/arwen/images/rev-slider/write.png" alt=""/>
                        </div>


                        <!-- Layer 2 -->
                        <div class="tp-caption lft customout"
                             data-x="1000"
                             data-y="150"
                             data-customin="x:0;y:50;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="1500"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                        >
                            <img src="{{url('/adib/new/images/rev-slider/balon.png')}}" alt=""/>
                        </div>

                        <!-- Layer 3 -->
                        <div class="tp-caption  lft customout"
                             data-x="300"
                             data-y="50"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="2000"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            <h1 class="rev-text rev-title-a" style="    position: relative;    left: -55px;top:-4px">
                                @if($locale == 'tr')
                                    Hayalini kurduğunuz En Güzel Fikirleri En kısa
                                    <br/>
                                    Sürede Hayata Geçiriyoruz
                                @elseif($locale == 'ar')
                                    نحن نصنع أفكارك بأفضل طريقة
                                @else
                                    We create your ideas in the best way
                                @endif

                            </h1>
                        </div>

                        <!-- Layer 4 -->
                        <div class="tp-caption  skewfromrightshort customout hidden-in-mobile-a"
                             data-x="300"
                             data-y="100"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="2300"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            <h2 class="rev-text-b rev-title-b">
                                @if($locale == 'tr')
                                    <br/>
                                    <br/>
                                    Web Tasarım /Mobil Uygulama /Google Reklamcılığı/ Instagram Gönderi Tasarımı
                                @elseif($locale == 'ar')
                                    تصميم موقع - تصميم تطبيقات - اعلان على جوجل
                                    <br>
                                    تصاميم منشورات إنستغرام
                                @else
                                    Website design - App design - Advertising on Google
                                    <br>
                                    Instagram post designs
                                @endif

                            </h2>
                        </div>

                        <!-- Layer 5 -->
                        <div class="tp-caption customin customout"
                             data-x="600"
                             data-y="210"
                             data-customin="x:50;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="2900"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                        >
                            <h3 class="rev-text rev-title-c"><i class="fa fa-laptop"></i>
                                @if($locale == 'tr')
                                    WEB SİTESİ TASARIMI
                                @elseif($locale == 'ar')
                                    تصميم الموقع
                                @else
                                    WEBSITE DESIGN
                                @endif

                            </h3>
                        </div>

                        <!-- Layer 6 -->
                        <div class="tp-caption customin customout hidden-in-mobile-c"
                             data-x="600"
                             data-y="310"
                             data-customin="x:50;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="3200"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                        >
                            <h3 class="rev-text rev-title-c"><i class="fa fa-html5"></i>
                                @if($locale == 'tr')
                                    Google’da reklamcılık
                                @elseif($locale == 'ar')
                                    الإعلان على جوجل
                                @else
                                    Advertising on Google
                                @endif

                            </h3>
                        </div>

                        <!-- Layer 7 -->
                        <div class="tp-caption customin customout "
                             data-x="600"
                             data-y="410"
                             data-customin="x:50;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="3800"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                        >
                            <a class="white-button scroll" id="slid2_btn" href="#about">
                                @if($locale == 'tr')
                                    Detaya git
                                @elseif($locale == 'ar')
                                    اكثر
                                @else
                                    More
                                @endif

                            </a>
                        </div>

                        <!-- Layer 8 -->
                        <div class="tp-caption customin customout hidden-in-mobile-a"
                             data-x="740"
                             data-y="410"
                             data-customin="x:50;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="4100"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                        >
                            <a class="red-button" href="#">
                                @if($locale == 'tr')
                                    Şimdi sipariş ver
                                @elseif($locale == 'ar')
                                    اطلب الان
                                @else
                                    order now
                                @endif

                            </a>
                        </div>
                    </li>

                    <!-- Slide -->
                    <li class="revslide" data-transition="random" data-slotamount="7" data-masterspeed="800">
                        <!-- MAIN IMAGE -->
                            {{--                        <img src="https://arwen.ideal-theme.com/html/arwen/images/rev-slider/slide3.jpg" alt="slidebg3"--}}
                            {{--                             data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">--}}

                            <img src="{{url("adib/new/images/slid_2_back.jpg")}}" alt="slidebg3"
                                                 data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">

                        <!-- Layer 1 -->
                        <div class="tp-caption sfb customout"
                             data-x="200"
                             data-y="270"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="900"
                             data-start="900"
                             data-easing="Power4.easeOut"
                             data-endspeed="1300"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            {{--                            <img src="https://arwen.ideal-theme.com/html/arwen/images/rev-slider/earth.png" alt="earth"/>--}}
{{--                                                        <img src="{{url("adib/new/images/slid_2_back.jpg")}}" alt="earth"/>--}}
                        </div>

                        <!-- Layer 2 -->
                        <div class="tp-caption sfl customout"
                             data-x="0"
                             data-y="50"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="900"
                             data-start="1200"
                             data-easing="Power4.easeOut"
                             data-endspeed="900"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            <h6 class="rev-text rev-title-d" style="padding-left: 10px;">

                                @if($locale == 'tr')
                                    Neden bizi seçmelisiniz ?
                                @elseif($locale == 'ar')
                                    لماذا أخترتنا؟
                                @else
                                    WHY CHOOSE US?
                                @endif

                            </h6>
                        </div>


                        <!-- Layer 4 -->
                        <div class="tp-caption sfb customout hidden-in-mobile-a"
                             data-x="0"
                             data-y="160"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="900"
                             data-start="1800"
                             data-easing="Power4.easeOut"
                             data-endspeed="900"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            <h2 class="rev-text-b rev-title-d" style="margin-bottom: 20px;font-size: 20px">
                                @if($locale == 'tr')
                                    MARKANIZI KURUN, GERİSİNİ ADİB'E BIRAKIN
                                <br>
                                    {{-- web sitesini ortaya çıkarıyoruz.
                                    Dahası var... --}}
                                @elseif($locale == 'ar')
                                    نحن نؤمن بقوة الاجتماع وجها لوجه! تمشيا مع مطالبك
                                    أحلامك <br>
                                    نكشف الموقع.
                                    هناك المزيد...
                                @else
                                    We believe in the power of meeting face to face! In line with your demands
                                    your dreams <br>
                                    We reveal the website.
                                    There's more...
                                @endif

                            </h2>
                        </div>

                        <!-- Layer 5 -->
                        <div class="tp-caption sfb customout"
                             data-x="0"
                             data-y="255"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="900"
                             data-start="2100"
                             data-easing="Power4.easeOut"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            <h3 class="rev-text rev-title-c"><i class="fa fa-desktop"></i>
                                @if($locale == 'tr')
                                    Özel Web Tasarım /Kurumsal Web Tasarım / E - Ticaret Web Tasarım
                                @elseif($locale == 'ar')
                                    تصميم مخصص - موقع الشركة - موقع التجارة الإلكترونية
                                @else
                                    CUSTOM DESIGN - CORPORATE WEBSITE - E COMMERCE WEBSITE
                                @endif

                            </h3>
                        </div>

                        <!-- Layer 6 -->
                      {{--  <div class="tp-caption sfb customout"
                             data-x="900"
                             data-y="30"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="900"
                             data-start="2700"
                             data-easing="Power4.easeOut"
                             data-endspeed="900"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
--}}{{--                            <img src="https://arwen.ideal-theme.com/html/arwen/images/rev-slider/girl.png" alt="check"/>--}}{{--
                            <img src="{{url("adib/new/images/slid_2_girl.png")}}" style="width: 250px;" alt="check"/>
                        </div>--}}

                        <!-- Layer 7 -->
                        <div class="tp-caption sft customout "

                             data-x="750"
                             data-y="30"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="900"
                             data-start="3000"
                             data-easing="Power4.easeOut"
                             data-endspeed="900"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
{{--                            <img src="https://arwen.ideal-theme.com/html/arwen/images/rev-slider/gull.png" alt="check"/>--}}
                            <img src="{{url("adib/new/images/slid_2_mark.png")}}" style="width: 100px;" alt="check"/>
                        </div>

                        <!-- Layer 8 -->
                        <div class="tp-caption customin customout hidden-in-mobile-b hidden-in-mobile-c"
                             data-x="0"
                             data-y="370"
                             data-customin="x:50;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="2500"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                        >
                            <a class="white-button" href="https://adib.com.tr/tr#prices">
                                @if($locale == 'tr')
                                    HEMEN TEKLİF AL
                                @elseif($locale == 'ar')
                                    احصل على العرض الآن
                                @else
                                    GET OFFER NOW
                                @endif

                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Revolution Slider -->
    </section>
    <!-- End Home-->
@endif
@yield('body')
<!-- Contact Section -->
<section id="contact" class="main-content">
    <!-- Google Map -->
    <div>
        <iframe title="My Address Google Map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.705289174937!2d28.81324251541415!3d41.00982327930059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa4873f7c17a5%3A0xe887685eb757e1d1!2zxLBzdFdlc3Q!5e0!3m2!1sen!2s!4v1647819021463!5m2!1sen!2s"
                width="100%" height="250" frameborder="0" class="border_0" allowfullscreen></iframe>
    </div>
    <!-- End Google Map -->

    <!-- Content -->
    <div class="content" id="scroll_address">

        <!--Contact Info-->
        <div class="col-md-6 animated mt-lg-82" data-animation="fadeInLeft" data-animation-delay="300">

            <!-- Main Title -->
            <h1 class="main_title_a align-left">
                {{trans('sentence.footer.tel')}}
            </h1>

            <!-- Address -->
            <address class="pt-lg-44">
                <p style="display: flex"><i class="fa fa-map-marker"></i><i class="fa fa-minus"></i> <span>{{trans('sentence.footer.address')}}</span></p>
                <p><i class="fa fa-add1 fa-mobile"></i><i class="fa fa-minus"></i>(+90) 531 7677479</p>
                <p><i class="fa fa-phone  "></i><i class="fa fa-minus"></i>(+90) 212 9246096</p>
                <p><i class="fa fa-add3 fa-envelope"></i><i class="fa fa-minus"></i> info@adib.com.tr</p>
                {{--                <p><i class="fa fa-globe"></i><i class="fa fa-minus"></i>www.yoursite.com</p>--}}
            </address>
            <!-- End Address -->

            <!-- Social Media Icons -->
            <div class="contact-social" style="display: flex;justify-content: center;flex-wrap: wrap;align-items: center;">
                <a href="https://twitter.com/Adib_IT_Group"><i class="fa fa-twitter"></i></a>
                <a href="https://t.me/Adibit"><i class="fa fa-telegram"></i></a>
                <a href="https://instagram.com/adibgrup?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/adib-it-890926173/"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.aparat.com/adibwebdesign"><i class="fa fa-youtube"></i></a>
                <a href="https://www.pinterest.com/adibitc"><i class="fa fa-pinterest"></i></a>
            </div>
            <!-- End Social Media Icons -->

        </div>
        <!--End Contact Info-->


    </div>
    <!-- End Content -->
</section>
<!-- End Contact Section -->
<!--Contact Form-->
<div class="col-md-6 animated pr-lg-320" data-animation="fadeInRight" data-animation-delay="600">

    <!-- Main Title -->
    <h1 class="main_title_a align-left" style="padding: 35px;text-align: center !important">
        @if($locale=='tr' )
            Bize ulaşın
        @elseif($locale == 'ar')
            ابقى على تواصل
        @else
            Get  in touch
        @endif
    </h1>
    <form id="form-contact" action="{{route('form-post-slider',app()->getLocale())}}" method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control " name="full_name" id="full_name"
                       placeholder=" @if($locale=='tr' ) AD SOYAD @elseif($locale == 'ar')اسم   @else name @endif" required oninvalid="this.setCustomValidity('{{trans('sentence.form.reqired1')}}')">
            </div>
            <div class="col-md-6 col-sm-6">
                <input type="email" class="form-control" name="email" id="email"
                       placeholder="@if($locale=='tr' ) E-POSTA @elseif($locale == 'ar')البريد الإلكتروني @else email @endif"
                       required oninvalid="this.setCustomValidity('{{trans('sentence.form.reqired2')}}')">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <input type="tel" class="form-control" name="mobile" id="mobile"
                       placeholder="@if($locale=='tr' ) TELEFON  @elseif($locale == 'ar')  هاتف     @else phone @endif"
                       required oninvalid="this.setCustomValidity('{{trans('sentence.form.reqired1')}}')">
            </div>
            <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control" name="subject" id="subject"
                       placeholder="  @if($locale=='tr' ) BAŞLIK @elseif($locale == 'ar')  موضوعات     @else  Subject @endif"
                       required oninvalid="this.setCustomValidity('{{trans('sentence.form.reqired1')}}')">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
<textarea class="form-control" name="text" id="text" required
          placeholder="@if($locale=='tr' ) MESAJINIZ @elseif($locale == 'ar') رسالة  @else message @endif"
          rows="9"></textarea>
            </div>
        </div>
        <p>
            <button class="btn" id="submit" type="submit" name="submit" style="margin-bottom: 15px" value="Submit">
                @if($locale=='tr' )
                    GÖNDER
                @elseif($locale == 'ar')
                    يقدم
                @else Submit
                @endif
            </button>
        </p>

    </form>

</div>
<!--End Contact Form-->
<div class="clear"></div>
<!-- Footer Section -->
<section id="footer" class="main-content">
    <div class="content footer">
        <div class="col-xs-12 align-center">

            <!-- Go To Top -->
            <div id="go-top" class="animated" data-animation="fadeInUp" data-animation-delay="0">
                <a href="#home" class="scroll"><i class="fa fa-chevron-up"></i></a>
            </div><!-- End Go To Top -->

            <p class="footer-text copyright animated" data-animation="fadeInUp" data-animation-delay="700">
                @if($locale == 'tr')
                    Copyright © 2022 - ADIB.COM.TR . Her hakkı saklıdır.
                @elseif($locale == 'ar')
                    حقوق النشر © 2022 - ADIB.COM.TR. كل الحقوق محفوظة.
                @else
                    Copyright © 2022 - ADIB.COM.TR . All Rights Reserved.
                @endif
            </p><!-- End Site Copyright -->

        </div>
        <div class="clear"></div>
    </div>
    <!-- End Footer Content -->
</section>

<div class="wat_sapp wat_sapp1">
    <a target="_blank" rel="noreferrer" href="https://api.whatsapp.com/send?phone=+905317677479">
        <img class="social_img" src="{{url('adib/whatss4.png')}}" alt="whatsapp adib">
    </a>
</div>
<!-- End Footer Section -->

<script type="text/javascript" src="{{url('/adib/new/js/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/modernizr-latest.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/SmoothScroll.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.parallax-1.1.3.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/rev-slider/jquery.themepunch.plugins.min.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/rev-slider/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.mb.YTPlayer.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.mapmarker.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/scripts.js')}}"></script>

<script type = "text/javascript">
    jQuery(document).ready(function($) {
        $('.slide-boxes').trigger('stop.owl.autoplay');
    });
</script>
</body>
</html>
