{{--{{dd($article)}}--}}
@extends('layouts.user')
@section('body')

    @php $locale = session()->get('locale'); @endphp

    @if (session('status'))
        <div class="alert alert-{{session('status')}}">
            <a aria-label="AdibIT" href="#" class="close" data-dismiss="alert"
               aria-label="close">&times;</a> {{ session('message') }}
        </div>
    @endif
    @php
        function limitWord($string, $limit){
            $words = explode(" ",$string);
            $output = implode(" ",array_splice($words,0,$limit));
            $output = $output . ' ...';
            return $output;
        }
    @endphp 
 
<style>

</style>

    <!-- Important Links -->
    <section id="important_links" class="main-content">
        <!-- Content -->
        <div class="content important_links animated" data-animation="fadeInUp" data-animation-delay="300">
            <!-- Important Links Carousel-->
            <div id="carousel-example-generic" class="carousel slide important_links_slide" data-ride="carousel">
                <!-- Slides Wrapper -->
                <div class="carousel-inner welcome-banner">
                    <!-- Slide -->
                    <div class="item active">
                        <div class="welcome-banner-text">
                            <h1 class="main_title_a">
                                @if($locale == 'tr')
                                    Hakkımızda
                                @elseif($locale == 'ar')
                                    حول الموقع
                                @else
                                    About  Site
                                @endif
                            </h1>
                            <div id="textAbout0" style="display: none">

                                {!!  trans('sentence.home.service_text') !!}

                            </div>
                            <div id="textAbout1" style="text-align: left;">

                                {!!  trans('sentence.home.service_text') !!}

                            </div>
{{--                            --}}
                            <a  class="more_a" id="btnabout" href="#btnabout" onclick="  document.getElementById('textAbout0').style.display = 'block';  document.getElementById('textAbout1').style.display = 'none'; document.getElementById('btnabout').style.display = 'none';">
                                {{trans('sentence.home.view_more')}}
                            </a>
                            {{-- <a  class="load-more" id="btnabout" download href="{{url('adib/new/images/adib_resume_English.pdf')}}"  >
                                @if($locale == 'tr')
                                    özgeçmiş al
                                @elseif($locale == 'ar')
                                    احصل على سيرة ذاتية
                                @else
                                    Get a resume
                                @endif
                            </a> --}}
                        </div>
                    </div>
                    <!-- End Slide -->

                </div>
                <!-- End Slides Wrapper -->

            </div>
            <!-- End Important Links Carousel-->
        </div>
        <!-- End Content -->
    </section>
    <!-- End Important Links -->

    <style>
        .owl-wrapper{
            display: flex !important;
            width: 100% !important;
        }
    </style>
    <section id="newServies" class="main-content">
        
        <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
            @if($locale == 'tr')
                Hizmetler
            @elseif($locale == 'ar')
                خدمات‌
            @else
                services
            @endif
        </h1>
        <div style="max-width: 1400px;margin: auto;">

            <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
                {{-- {{trans('sentence.home.article')}} --}}
            </h1>
            <div class="team-items slide-boxes">
                @foreach ($services as $item)
                    <a href="{{$item->page=='active'?route('user-service-show',[app()->getLocale(),$item->slug]):'#'}}" class="item animated" data-animation="rollIn" data-animation-delay="0">
                        <div style="
                        display: block;
                        width: 150px;
                        border: 10px solid #F5F5F5;
                        border-radius: 500px;
                        margin: 0px auto 15px auto;
                        padding: 20px;
                        position: relative;
                        -webkit-transition: all 0.3s;
                        -moz-transition: all 0.3s;
                        transition: all 0.3s;
                        background: #2D728B;">
                            <img src="{{ $item->icon_hover?url($item->icon_hover):url('adib/icon_2.png') }}" alt="{{$item->title}}" style="background: transparent;border: none;"/>
                        </div>
                        <h5 style="margin:30px 0">{{$item->title}}</h5>
                        <div class="xs-hidden">
                            {!! $item->short_text !!}
                        </div>

                        {{-- <div style="display: flex;justify-content: center;align-items: center;margin-top: 60px;">
                            <a class="load-more"  href="{{$item->page=='active'?route('user-service-show',[app()->getLocale(),$item->slug]):'#'}}">trans('sentence.home.view') </a>
                        </div> --}}
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- <section id="servies" class="main-content">
        <div class="content">

            <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
                @if($locale == 'tr')
                    Hizmetler
                @elseif($locale == 'ar')
                    خدمات‌
                @else
                    services
                @endif
            </h1>

            <ul class="about-contents slide-boxes"> 
            @foreach(App\Service::where('lang' ,  session()->get('locale'))->orderBy('sort' , 'ASC')->get()->chunk(4) as $key_ch=>$values)
                @foreach($values as $key=>$value)

                        <li class="about box animated" data-animation="rotateInDownLeft" data-animation-delay="300">
                            <a style="display: flex;justify-content: center;align-items: center;padding: 20px;cursor: grab !important"
                               href="{{$value->page=='active'?route('user-service-show',[app()->getLocale(),$value->slug]):'#'}}"
                               class="about-logo">
                                <img src="{{ $value->icon_hover?url($value->icon_hover):url('adib/icon_2.png') }}"
                                     class="icon_2" alt="{{$value->title}}">

                            </a>
                            <h3>{{$value->title}}</h3>
                            <p> {!! $value->short_text !!}</p>
                           <a href="#" class="more_b"><i class="fa fa-plus"></i></a>
                        </li>

                    @endforeach
                @endforeach

            </ul>

            <div class="clear"></div>


        </div>
    </section> --}}


{{-- start price --}}
    <!-- Prices Section -->
    <section id="prices" class="main-content" style="background: #f5f5f5">
        <!-- Content -->
        <div class="content prices">

            <!-- Main Title -->
            <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
                @if($locale == 'tr')
                    Paketler
                @elseif($locale == 'ar')
                    جداول التسعير
                @else
                    Pricing Tables
                @endif
            </h1>

            <div class="plans-prices">
                <!-- Pricing Table -->
                <div class="plan-price no-margin-left mb-30 animated" data-animation="rollIn" data-animation-delay="100">
                    <!-- Plan Header -->
                    <h1>
                        @if($locale == 'tr')
                            BAŞLANGIÇ
                        @elseif($locale == 'ar')
                            بداية
                        @else
                        Starter
                        @endif
                    </h1>
                    <!-- Plan Price -->
                    <div class="circle-price">
                        <h2>2000<span class="other-price"> TL
                                @if($locale == 'tr')
                                    Başlangıç Fiyatı
                                @elseif($locale == 'ar')
                                    يبدأ
                                @else
                                    STARTS
                                @endif
                            </span></h2>
                    </div>
                    <!-- Pricing List -->
                    <ul>
                        <li><span>
                                @if($locale == 'tr')
                                KURUMSAL WEB SİTESİ WORDPRESS
                                @elseif($locale == 'ar')
                                    موقع الشركة على شبكة الإنترنت
                                @else
                                    CORPORATE WEBSITE WORDPRESS
                                @endif
                            </span></li>
                        <li><span>5 GB</span>
                            @if($locale == 'tr')
                                HAFIZA
                            @elseif($locale == 'ar')
                                ذاكرة
                            @else
                                MEMORY
                            @endif

                        </li>
                        <li><span>10 GB </span>
                            @if($locale == 'tr')
                                 BANT GENİŞLİĞİ
                            @elseif($locale == 'ar')
                                عرض النطاق
                            @else
                                BAND WIDTH
                            @endif
                           </li>
                        <li><span>12</span>
                            @if($locale == 'tr')
                                AYLIK DESTEK
                            @elseif($locale == 'ar')
                                دعم شهري
                            @else
                                MONTHLY SUPPORT
                            @endif
                        </li>
                    </ul>
                    <a class="buy-button" href="#myModalSlider"
                       data-toggle="modal" data-target="#myModalSlider">
                        @if($locale == 'tr')
                            TEKLİF AL
                        @elseif($locale == 'ar')
                            احصل على عرض
                        @else
                            GET OFFER
                        @endif

                    </a>
                </div>

                <!-- Pricing Table -->
                <div class="plan-price animated" data-animation="rollIn" data-animation-delay="300">
                    <!-- Plan Header -->
                    <h1>
                        @if($locale == 'tr')
                            Orta Düzey
                        @elseif($locale == 'ar')
                            اساسي
                        @else
                            Standard
                        @endif
                        </h1>
                    <!-- Plan Price -->
                    <div class="circle-price">
                        <h2>2500<span class="other-price"> TL
                                      @if($locale == 'tr')
                                    Başlangıç Fiyatı
                                @elseif($locale == 'ar')
                                    يبدأ
                                @else
                                    STARTS
                                @endif
                            </span></h2>
                    </div>
                    <!-- Pricing List -->
                    <ul>
                        <li><span>
                                                    @if($locale == 'tr')
                                    E-TİCARET WEB SİTESİ WORDPRESS
                                @elseif($locale == 'ar')
                                    عالم التجارة الإلكترونية
                                @else
                                    E-COMMERCE WEBSITE WORDPRESS
                                @endif
                                </span></li>
                        <li><span>10 GB</span>
                            @if($locale == 'tr')
                                HAFIZA
                            @elseif($locale == 'ar')
                                ذاكرة
                            @else
                                MEMORY
                            @endif</li>
                        <li><span>20 GB </span>
                            @if($locale == 'tr')
                                BANT GENİŞLİĞİ
                            @elseif($locale == 'ar')
                                عرض النطاق
                            @else
                                BAND WIDTH
                                @endif
                        </li>
                        <li><span>12</span>
                            @if($locale == 'tr')
                                AYLIK DESTEK
                            @elseif($locale == 'ar')
                                دعم شهري
                            @else
                                MONTHLY SUPPORT
                            @endif
                        </li>
                    </ul>
                    <a class="buy-button" href="#myModalSlider"
                       data-toggle="modal" data-target="#myModalSlider">
                        @if($locale == 'tr')
                            TEKLİF AL
                        @elseif($locale == 'ar')
                            احصل على عرض
                        @else
                            GET OFFER
                        @endif
                    </a>
                </div>

                <!-- Pricing Table -->
                <div class="plan-price active animated plan-bootom" data-animation="rollIn" data-animation-delay="500">
                    <!-- Plan Header -->
                    <h1>
                        @if($locale == 'tr')
                            İleri Düzey
                        @elseif($locale == 'ar')
                            احترافي
                        @else
                            Professional
                        @endif
                        </h1>
                    <!-- Plan Price -->
                    <div class="circle-price">
                        <h2>5000<span class="other-price"> TL
                                      @if($locale == 'tr')
                                    Başlangıç Fiyatı
                                @elseif($locale == 'ar')
                                    يبدأ
                                @else
                                    STARTS
                                @endif
                            </span></h2>
                    </div>
                    <!-- Pricing List -->
                    <ul>
                        <li><span>
                                          @if($locale == 'tr')
                                    KURUMSAL WEB SİTESİ ÖZEL TASARIMI
                                @elseif($locale == 'ar')
                                    تصميم موقع الشركة المخصص
                                @else
                                    CORPORATE WEBSITE CUSTOM DESIGN
                                @endif
                                </span></li>
                        <li><span>5 GB</span>
                            @if($locale == 'tr')
                                HAFIZA
                            @elseif($locale == 'ar')
                                ذاكرة
                            @else
                                MEMORY
                            @endif</li>
                        <li><span>10 GB </span>
                            @if($locale == 'tr')
                                BANT GENİŞLİĞİ
                            @elseif($locale == 'ar')
                                عرض النطاق
                            @else
                                BAND WIDTH
                            @endif
                        </li>
                        <li><span>12</span>
                            @if($locale == 'tr')
                                AYLIK DESTEK
                            @elseif($locale == 'ar')
                                دعم شهري
                            @else
                                MONTHLY SUPPORT
                            @endif </li>
                    </ul>
                    <a class="buy-button" href="#myModalSlider"
                       data-toggle="modal" data-target="#myModalSlider">
                        @if($locale == 'tr')
                            TEKLİF AL
                        @elseif($locale == 'ar')
                            احصل على عرض
                        @else
                            GET OFFER
                        @endif
                    </a>
                </div>

                <!-- Pricing Table -->
                <div class="plan-price no-margin-right animated plan-bootom" data-animation="rollIn"
                     data-animation-delay="700">
                    <!-- Plan Header -->
                    <h1>
                        @if($locale == 'tr')
                            Özel Fırsat
                        @elseif($locale == 'ar')
                            الممتازة
                        @else
                            Premium
                        @endif
                        </h1>
                    <!-- Plan Price -->
                    <div class="circle-price">
                        <h2>8500<span class="other-price"> TL
                                      @if($locale == 'tr')
                                    Başlangıç Fiyatı
                                @elseif($locale == 'ar')
                                    يبدأ
                                @else
                                    STARTS
                                @endif
                            </span></h2>
                    </div>
                    <!-- Pricing List -->
                    <ul>
                        <li><span>
                                    @if($locale == 'tr')
                                    E-TİCARET WEB SİTESİ ÖZEL TASARIMI
                                @elseif($locale == 'ar')
                                    تصميم خاص لموقع التجارة الإلكترونية
                                @else
                                    E-COMMERCE WEBSITE SPECIAL DESIGN
                                @endif
                              </span></li>
                        <li><span>10 GB</span>
                            @if($locale == 'tr')
                                HAFIZA
                            @elseif($locale == 'ar')
                                ذاكرة
                            @else
                                MEMORY
                            @endif</li>
                        <li><span>20 GB </span>
                            @if($locale == 'tr')
                                BANT GENİŞLİĞİ
                            @elseif($locale == 'ar')
                                عرض النطاق
                            @else
                                BAND WIDTH
                            @endif
                        </li>
                        <li><span>12</span>
                            @if($locale == 'tr')
                                AYLIK DESTEK
                            @elseif($locale == 'ar')
                                دعم شهري
                            @else
                                MONTHLY SUPPORT
                            @endif
                            </li>
                    </ul>
                    <a class="buy-button" href="#myModalSlider"
                       data-toggle="modal" data-target="#myModalSlider">
                        @if($locale == 'tr')
                            TEKLİF AL
                        @elseif($locale == 'ar')
                            احصل على عرض
                        @else
                            GET OFFER
                        @endif</a>
                </div>
                <div class="clear"></div>

            </div>
            <!-- End Pricing plans -->
        </div>
        <!-- End Content -->
    </section>
    <!-- End Prices Section -->



    <!-- Portfolio -->
    <section id="portfolio" style="background: none" class="main-content">
        <!-- Content -->
        <div class="content">

            <!-- Main Title -->
            <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
                @if($locale == 'tr')
                    Referanslarımız
                @elseif($locale == 'ar')
                    لدينا محفظة
                @else
                    our Portfolio
                @endif
            </h1>

            <!-- Works -->
            <div class="works">
                <!-- Filter -->
                <div class="items animated pretty-lightbox-a" data-animation="fadeInUp" data-animation-delay="700">


                @foreach($customers as $customer)

                    <!-- Item -->
                        <div class="work col-xs-4 printing photography">
                            <div class="work-inner">
                                <div class="work-img">
                                    <img style="height: 40vh;object-fit: cover"
                                         src="{{$customer->site?url($customer->site->path):'' }}"
                                         alt="{{ $customer->title}}"/>
                                    <div class="mask">
                                        <a class="button zoom" href="{{$customer->site?url($customer->site->path):'' }}"
                                           data-rel="prettyPhoto[gallery]"><i class="fa fa-film"></i></a>
                                        <a class="button detail" href="{{$customer->url}}"><i
                                                    class="fa fa-link"></i></a>
                                    </div>
                                    <div class="work-desc">
                                        <h4>{{ $customer->title}} </h4>
                                    </div>
                                </div>
                                <h4 class="title-img" style="transition: 0.5s;position:relative;z-index: 100;padding: 10px 0;background: #F26341;text-align: center; margin: 0;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px; color: #fff;"> {{ $customer->title}} </h4>
                            </div>
                        </div>
                        <!-- End Item -->
                    @endforeach


                    <div class="clear"></div>

                </div>
                <!-- End Filter -->
                <div style="display: flex;justify-content: center;align-items: center;margin-top:50px">
                    <a class="load-more" href="{{ route('user-gallery') }}">{{trans('sentence.home.view_more')}} </a>
                </div>
            </div>
            <!-- End Works -->
        </div>
        <!-- End Content -->
    </section>
    <!-- End Portfolio Section -->


    <!-- History Section -->
{{--    <section id="history" class="main-content">--}}
{{--        <!-- Parallax Overlay -->--}}
{{--        <div class="parallax-overlay">--}}
{{--            <!-- Toons -->--}}
{{--            <div class="toons toons2">--}}
{{--                <!-- Content -->--}}
{{--                <div class="content">--}}

{{--                    <!--White Title-->--}}
{{--                    <div class="section-title-white animated" data-animation="fadeInUp" data-animation-delay="300">--}}
{{--                        <h1>--}}
{{--                            @if($locale == 'tr')--}}
{{--                                ŞİRKET TARİHÇESİ--}}
{{--                            @elseif($locale == 'ar')--}}
{{--                                تاريخ الشركة--}}
{{--                            @else--}}
{{--                            company history--}}
{{--                            @endif--}}
{{--                        </h1>--}}
{{--                        <div class="seperator"><span class="white_line"></span></div>--}}
{{--                    </div>--}}
{{--                    <!--End White Title-->--}}

{{--                    <!-- History Timeline -->--}}
{{--                    <ul class="history-timeline list-unstyled pretty-lightbox-b">--}}

{{--                        <!-- History Year -->--}}
{{--                        <li class="year">2013</li>--}}

{{--                        <!-- Item -->--}}
{{--                        <li class="timeline-item animated" data-animation="fadeInRight" data-animation-delay="50">--}}
{{--                            <div class="timeline-image">--}}
{{--                                <a class="" href="images/big-image.jpg" data-rel="prettyPhoto[gallery]">--}}
{{--                                    <span class="image-overlay"></span>--}}
{{--                                    <span class="image-zoom"><i class="fa fa-search"></i></span>--}}
{{--                                    <img src="{{url('adib/new/images/timeline/img2.jpg')}}" title="" alt=""/>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <h4>Your Event Title Here</h4>--}}
{{--                            <div class="article">--}}
{{--                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum--}}
{{--                                has been the industry's standard dummy text ever since the 1500s, when an unknown--}}
{{--                                printer took a galley of type and scrambled it to make a type specimen book.--}}
{{--                            </div>--}}
{{--                            <span class="date"><i class="fa fa-calendar-o"></i> 13 JUN 2013</span>--}}
{{--                            <a class="read-more" href="#">Read More</a>--}}
{{--                        </li>--}}
{{--                        <!-- End Item -->--}}

{{--                        <!-- Item -->--}}
{{--                        <li class="timeline-item animated" data-animation="fadeInLeft" data-animation-delay="50">--}}
{{--                            <div class="timeline-image">--}}
{{--                                <a class="" href="images/big-image.jpg" data-rel="prettyPhoto[gallery]">--}}
{{--                                    <span class="image-overlay"></span>--}}
{{--                                    <span class="image-zoom"><i class="fa fa-search"></i></span>--}}
{{--                                    <img src="{{url('adib/new/images/timeline/img2.jpg')}}" title="" alt=""/>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <h4>Your Event Title Here</h4>--}}
{{--                            <div class="article">--}}
{{--                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum--}}
{{--                                has been the industry's standard dummy text ever since the 1500s, when an unknown--}}
{{--                                printer took a galley of type and scrambled it to make a type specimen book.--}}
{{--                            </div>--}}
{{--                            <span class="date"><i class="fa fa-calendar-o"></i> 18 JUN 2013</span>--}}
{{--                            <a class="read-more" href="#">Read More</a>--}}
{{--                        </li>--}}
{{--                        <!-- End Item -->--}}

{{--                        <!-- Item -->--}}
{{--                        <li class="timeline-item animated" data-animation="fadeInRight" data-animation-delay="100">--}}
{{--                            <div class="timeline-image">--}}
{{--                                <a class="" href="images/big-image.jpg" data-rel="prettyPhoto[gallery]">--}}
{{--                                    <span class="image-overlay"></span>--}}
{{--                                    <span class="image-zoom"><i class="fa fa-search"></i></span>--}}
{{--                                    <img src="{{url('adib/new/images/timeline/img2.jpg')}}" title="" alt=""/>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <h4>Your Event Title Here</h4>--}}
{{--                            <div class="article">--}}
{{--                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum--}}
{{--                                has been the industry's standard dummy text ever since the 1500s, when an unknown--}}
{{--                                printer took a galley of type and scrambled it to make a type specimen book.--}}
{{--                            </div>--}}
{{--                            <span class="date"><i class="fa fa-calendar-o"></i> 02 FEB 2013</span>--}}
{{--                            <a class="read-more" href="#">Read More</a>--}}
{{--                        </li>--}}
{{--                        <!-- End Item -->--}}

{{--                        <!-- Item -->--}}
{{--                        <li class="timeline-item animated" data-animation="fadeInLeft" data-animation-delay="100">--}}
{{--                            <div class="timeline-image">--}}
{{--                                <a class="" href="images/big-image.jpg" data-rel="prettyPhoto[gallery]">--}}
{{--                                    <span class="image-overlay"></span>--}}
{{--                                    <span class="image-zoom"><i class="fa fa-search"></i></span>--}}
{{--                                    <img src="{{url('adib/new/images/timeline/img2.jpg')}}" title="" alt=""/>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <h4>Your Event Title Here</h4>--}}
{{--                            <div class="article">--}}
{{--                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum--}}
{{--                                has been the industry's standard dummy text ever since the 1500s, when an unknown--}}
{{--                                printer took a galley of type and scrambled it to make a type specimen book.--}}
{{--                            </div>--}}
{{--                            <span class="date"><i class="fa fa-calendar-o"></i> 07 FEB 2013</span>--}}
{{--                            <a class="read-more" href="#">Read More</a>--}}
{{--                        </li>--}}
{{--                        <!-- End Item -->--}}

{{--                        <div class="clear"></div>--}}

{{--                        <!-- History Year -->--}}
{{--                        <li class="year">2014</li>--}}


{{--                        <!-- Item -->--}}
{{--                        <li class="timeline-item animated" data-animation="fadeInLeft" data-animation-delay="150">--}}
{{--                            <div class="timeline-image">--}}
{{--                                <a class="" href="images/big-image.jpg" data-rel="prettyPhoto[gallery]">--}}
{{--                                    <span class="image-overlay"></span>--}}
{{--                                    <span class="image-zoom"><i class="fa fa-search"></i></span>--}}
{{--                                    <img src="{{url('adib/new/images/timeline/img2.jpg')}}" title="" alt=""/>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <h4>Your Event Title Here</h4>--}}
{{--                            <div class="article">--}}
{{--                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum--}}
{{--                                has been the industry's standard dummy text ever since the 1500s, when an unknown--}}
{{--                                printer took a galley of type and scrambled it to make a type specimen book.--}}
{{--                            </div>--}}
{{--                            <span class="date"><i class="fa fa-calendar-o"></i> 16 AUG 2014</span>--}}
{{--                            <a class="read-more" href="#">Read More</a>--}}
{{--                        </li>--}}
{{--                        <!-- End Item -->--}}

{{--                        <!-- Item -->--}}
{{--                        <li class="timeline-item animated" data-animation="fadeInRight" data-animation-delay="150">--}}
{{--                            <div class="timeline-image">--}}
{{--                                <a class="" href="images/big-image.jpg" data-rel="prettyPhoto[gallery]">--}}
{{--                                    <span class="image-overlay"></span>--}}
{{--                                    <span class="image-zoom"><i class="fa fa-search"></i></span>--}}
{{--                                    <img src="{{url('adib/new/images/timeline/img2.jpg')}}" title="" alt=""/>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <h4>Your Event Title Here</h4>--}}
{{--                            <div class="article">--}}
{{--                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum--}}
{{--                                has been the industry's standard dummy text ever since the 1500s, when an unknown--}}
{{--                                printer took a galley of type and scrambled it to make a type specimen book.--}}
{{--                            </div>--}}
{{--                            <span class="date"><i class="fa fa-calendar-o"></i> 25 AUG 2014</span>--}}
{{--                            <a class="read-more" href="#">Read More</a>--}}
{{--                        </li>--}}
{{--                        <!-- End Item -->--}}

{{--                        <div class="clear"></div>--}}
{{--                        <a class="load-more" href="#">{{trans('sentence.home.view_more')}} </a>--}}
{{--                        <div class="clear"></div>--}}

{{--                    </ul>--}}
{{--                    <!-- End History Timeline -->--}}

{{--                </div>--}}
{{--                <!-- End Content -->--}}
{{--                <span class="pattern1"></span>--}}

{{--            </div>--}}
{{--            <!-- End Toons -->--}}
{{--        </div>--}}
{{--        <!-- End Parallax Overlay -->--}}
{{--    </section>--}}

 

@if($locale == 'tr')
<section id="newcoustomer" style="background: #f5f5f5" style="margin: 2%;">
    <div class="content">
        <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300" style="margin: 0px 0px 30px" id="coustomer">
                    Müşterilerimiz
                @elseif($locale == 'ar')
                    عميل
                @else
                    customer
                @endif
            </h1>

            <style>
                .owl-wrapper{
                    display: flex !important;
                    width: 100% !important;
                }
            </style>
            <div style="max-width: 1400px;margin: auto"> 
    
                <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
                    {{-- {{trans('sentence.home.article')}} --}}
                </h1>
                <div class="team-items slide-boxes">
                    @foreach($customer_icon->take(6) as $item)
                        @if($item->photo)
                            <a href="{{ $item->url }}" class="item animated" data-animation="rollIn" data-animation-delay="0">
                                <div >
                                    <img src="{{ url($item->photo->path) }}" alt="{{ $item->title }}" 
                                    style="background: transparent;border: none;
                                    display: block;
                                    width: 150px;
                                    border: 3px solid #f26341;
                                    border-radius: 500px;
                                    margin: 0px auto 15px auto;
                                    padding: 10px;
                                    position: relative;
                                    -webkit-transition: all 0.3s;
                                    -moz-transition: all 0.3s;
                                    transition: all 0.3s; 
                                    background: #ffffff;"/>
                                </div>
                                <h4>{{ mb_substr($item->title,0,17, "utf-8") }}</h4>
                                {{-- <div style="display: flex;justify-content: center;align-items: center;margin-top: 60px;">
                                    <a class="load-more"  href="{{$item->page=='active'?route('user-service-show',[app()->getLocale(),$item->slug]):'#'}}">trans('sentence.home.view') </a>
                                </div> --}}
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
            {{-- <ul class="about-contents slide-boxes">
 
                @foreach($customer_icon->take(6) as $val)
                    @if($val->photo)

                        <li class="about box animated" data-animation="rotateInDownLeft" data-animation-delay="300" >
                            <a  style="display: flex;justify-content: center;align-items: center;padding: 10px" href="{{ $val->url }}"
                               class="about-logo">
                                <img style="border-radius: 50%" src="{{ url($val->photo->path) }}" alt="{{ $val->title }}" class="icon_2" >
                            </a>
                            <h4>{{ mb_substr($val->title,0,17, "utf-8") }}</h4>
                        </li>
                    @endif
                @endforeach
            </ul> --}}
            <div style="display: flex;justify-content: center;align-items: center;margin-top: 30px;">
                <a class="load-more" href="{{ route('user-news-list' , $locale) }} ">{{trans('sentence.home.view_more')}} </a>
            </div>
            {{-- <div class="clear"></div> --}}
        </div>
    </div>

</section>
    <!-- End About Section-->

    @if(count($article) > 0)
        <style>
            .owl-wrapper{
                display: flex !important;
                width: 100% !important;
            }
        </style>
        <!-- Our Team Section -->
        <section id="blog" class="main-content">
            <!-- Content -->
            <div style="margin: 2% 14%;" >

                <!-- Main Title -->
                <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
                    {{trans('sentence.home.article')}}
                </h1>
                <!-- Team -->
                <div class="team-items slide-boxes">
                    @foreach($article as $row)
                    <!-- Member -->
                        <div class="item animated" data-animation="rollIn" data-animation-delay="0">
                            <img src="{{ $row->home ? url($row->home) : '' }}" alt="{{ $row->title }}"  style="height: 150px;object-fit: cover" />
                            <h5 style="margin:30px 0">{{ $row->title }} </h5>
                            <p>{!! substr($row->short_text , 0 , 50) !!}...</p>
                            <div style="display: flex;justify-content: center;align-items: center;margin-top: 60px;">
                                <a class="load-more"  href="{{ route('user-article-show',[$locale , $row->slug])}}">{{trans('sentence.home.view')}} </a>
                            </div>
                        </div>
                    <!-- End Member -->
                    @endforeach
                </div>
                <!-- End Team -->
                <div style="display: flex;justify-content: center;align-items: center;margin-top: 30px;">
                    <a class="load-more" href="{{ route('user-article-list' , $locale) }} ">{{trans('sentence.home.view_more')}} </a>
                </div>
            </div>
            <!-- End Content -->
        </section>
        <!-- End Our Team Section -->
    @endif



    <!-- Clients Section -->
    <section id="our-clients" class="main-content animated" data-animation="fadeInUp" data-animation-delay="500">
        <div class="content">
            <!-- Clients Carousel -->
            <div class="our-clients-carousel">
                <div class="item"><img src="{{url('adib/new/images/clients/our-clients/logo1.png')}}" alt=""></div>
                <div class="item"><img src="{{url('adib/new/images/clients/our-clients/logo2.png')}}" alt=""></div>
                <div class="item"><img src="{{url('adib/new/images/clients/our-clients/logo3.png')}}" alt=""></div>
                <div class="item"><img src="{{url('adib/new/images/clients/our-clients/logo4.png')}}" alt=""></div>
                <div class="item"><img src="{{url('adib/new/images/clients/our-clients/logo5.png')}}" alt=""></div>
                <div class="item"><img src="{{url('adib/new/images/clients/our-clients/logo6.png')}}" alt=""></div>
            </div>
            <!-- End Clients Carousel -->
        </div>
    </section>
    <!-- End Our Clients Section -->

    @if(count($article) > 0)

    <!-- Client Say -->
    {{-- <section id="client-say">
        <div class="parallax-overlay">
            <!-- Content -->
            <div class="content">
                <!-- White Title -->
                <div class="section-title-white">
                    <h1>{{trans('sentence.home.article')}}</h1>
                    <div class="seperator"><span class="white_line"></span></div>
                </div>

                <!-- Client Say Carousel -->
                <div class="client-say-carousel">
                    <div id="carousel-client-say" class="carousel slide">
                        <!-- slides Wrapper -->
                        <div class="carousel-inner">
                            @foreach($article as $row)
                            <!-- Slide 1 -->
                            <div class="item @if($loop->index ==0) active @endif">
                                <div class="clients-say-item">
                                    <img alt="Client Name"  src="{{ $row->home ? url($row->home) : '' }}" />
                                    <div class="client-comment-block">
                                        <p class="client-comment">
                                            {!! $row->short_text !!}
                                        </p>
                                        <h3 class="client-name-and-jop">
                                            <i class="fa fa-caret-right"></i>
                                            <span class="client-name"> {{substr( $row->updated_at,0 ,10)}}</span>
                                            <i class="fa fa-angle-right"></i>
                                            <span class="client-jop"><a style="    font-size: 14px !important;padding: 10px 20px !important;" class="load-more"  href="{{ route('user-article-show',[$locale , $row->slug])}}">{{trans('sentence.home.view')}}  </a></span>
                                        </h3>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <!-- End Slide 1 -->
                                @endforeach
                        </div>
                        <!-- End slides Wrapper -->

                        <!-- Controls -->
                        <a class="left carousel-control s-controls" href="#carousel-client-say" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right carousel-control s-controls" href="#carousel-client-say" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <!-- End Controls -->
                    </div>
                </div>
                <!-- End Client Say Carousel -->

            </div>
            <!-- End Content -->
            <span class="pattern1"></span>
        </div>
        <!-- End parallax-overlay -->
    </section> --}}
    <!-- End Client Say Section -->
    @endif
    <!-- Services Section -->
    {{-- <section id="services" class="main-content">
        <!-- Content -->
        <div class="content">

            <!-- Main Title -->
            <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
                @if($locale == 'tr')
                    Hizmetlerimiz
                @elseif($locale == 'ar')
                    خدماتنا
                @else
                    Our Services
                @endif
            </h1>

            <!-- Icons Blocks -->
             <div class="col-md-4">
                <!-- Item -->
                <div class="services-box animated" data-animation-delay="700" data-animation="fadeInDown" style="  flex-wrap: wrap ; flex-direction: column;    display: flex;">
                    <h4 style="width: 300px;text-align: center; font-weight: bold;font-size: 22px;">
                        <a href="#">
                            @if($locale == 'tr')
                                Dijital Pazarlama
                            @elseif($locale == 'ar')
                                التسويق الرقمي
                            @else
                                Digital Marketing
                            @endif
                        </a>
                        </h4>
                    <div style="    display: flex;    justify-content: center;">
                        <div class="services-box-icon">
                            <i class="fa  fa-comments-o"></i>
                        </div>
                        <div class="feature-box-info">
                            <p style="margin:10px;width: 50vw">
                                @if($locale == 'tr')
                                    Gelen Pazarlama <br>
                                    Arama Motoru Optimizasyonu(SEO)<br>
                                    Sosyal medya pazarlamacılığı<br>
                                    Arama Motoru Pazarlaması (SEM)<br>
                                    Eposta pazarlama<br>
                                    Analitik Danışmanlık<br>
                                @elseif($locale == 'ar')
                                    التسويق الداخلي<br>
                                    تحسين محركات البحث (SEO)<br>
                                    تسويق وسائل الاعلام الاجتماعية<br>
                                    تسويق محرك البحث (SEM)<br>
                                    التسويق عبر البريد الإلكتروني<br>
                                    استشارة التحليلات<br>
                                @else
                                    Inbound Marketing<br>
                                    Search Engine Optimization(SEO)<br>
                                    Social Media Marketing<br>
                                    Search Engine Marketing(SEM)<br>
                                    Email Marketing<br>
                                    Analytics Consultation<br>
                                @endif
                            </p>
                        </div>
                    </div>

                </div>
                <!-- End Item -->
                <!-- Item -->
                <div class="services-box push-top animated" data-animation-delay="900" data-animation="fadeInDown" style="    flex-wrap: wrap;flex-direction: column;      display: flex;">
                    <h4 style="width: 300px;text-align: center; font-weight: bold;font-size: 22px;">
                        <a href="#">
                            @if($locale == 'tr')
                                markalaşma
                            @elseif($locale == 'ar')
                                العلامة التجارية
                            @else
                                Branding
                            @endif
                        </a>
                        </h4>
                    <div style="    display: flex;    justify-content: center;">
                    <div class="services-box-icon">
                        <i class="fa fa-file-o"></i>
                    </div>
                    <div class="feature-box-info">
                        <p style="margin:10px;width: 50vw">
                            @if($locale == 'tr')
                                Logo ve Marka Kimliği<br>
                                Grafik Tasarım<br>
                                Paket dizaynı<br>
                                Infographics Tasarımı<br>
                                Baskı dizaynı<br>
                                Yaratıcı Kopya Yazma<br>
                                Instagram yönetimi<br>
                            @elseif($locale == 'ar')
                                هوية العلامة التجارية والشعار<br>
                                التصميم الجرافيكي<br>
                                تصميم الطرد<br>
                                تصميم الرسوم البيانية<br>
                                تصميم وطباعة<br>
                                كتابة نسخ إبداعية<br>
                                إدارة Instagram<br>
                            @else
                                Logo & Brand Identity<br>
                                Graphic Design<br>
                                Package Design<br>
                                Infographics Design<br>
                                Print Design<br>
                                Creative Copy Writing<br>
                                Instagram administration<br>
                            @endif

                        </p>
                    </div>
                    </div>
                </div>
                <!-- End Item -->
            </div>

            <div class="col-md-4">
                <!-- Item -->
                <div class="services-box animated" data-animation-delay="1100" data-animation="fadeInDown" style="  flex-wrap: wrap;  flex-direction: column;     display: flex;">
                    <h4 style="width: 300px;text-align: center; font-weight: bold;font-size: 22px;">
                        <a href="#">
                            @if($locale == 'tr')
                                Web Geliştirme
                            @elseif($locale == 'ar')
                                تطوير الشبكة
                            @else
                                Web Development
                            @endif
                        </a>
                      </h4>
                    <div style="    display: flex;    justify-content: center;">
                    <div class="services-box-icon">
                        <i class="fa fa-film"></i>
                    </div>
                    <div class="feature-box-info">
                        <p style="margin:10px;width: 50vw">
                            @if($locale == 'tr')
                                WordPress Geliştirme<br>
                                E-ticaret Geliştirme<br>
                                PHP-Laravel Geliştirme<br>
                                Düğüm JS Geliştirme<br>
                                React JS Geliştirme<br><br>
                            @elseif($locale == 'ar')
                                تطوير ووردبريس<br>
                                تطوير التجارة الإلكترونية<br>
                                تطوير PHP-Laravel<br>
                                تطوير Node JS<br>
                                رياكت تطوير JS<br><br>
                            @else
                                WordPress Development<br>
                                Ecommerce Development<br>
                                PHP-Laravel Development<br>
                                Node JS Development<br>
                                React JS Development<br><br>
                            @endif
                        </p>
                    </div>
                </div>
                </div>
                <!-- End Item -->
                <!-- Item -->
                <div class="services-box push-top animated" data-animation-delay="1300" data-animation="fadeInDown" style="  flex-wrap: wrap;   flex-direction: column;   display: flex;">
                    <h4 style="width: 300px;text-align: center; font-weight: bold;font-size: 22px;">
                        <a href="#">
                            @if($locale == 'tr')
                                Mobil uygulama
                            @elseif($locale == 'ar')
                                تطبيق الهاتف المحمول
                            @else
                                Mobile App
                            @endif
                        </a>
                        </h4>
                    <div style="    display: flex;    justify-content: center;">
                    <div class="services-box-icon">
                        <i class="fa fa-puzzle-piece"></i>
                    </div>
                    <div class="feature-box-info">
                        <p style="margin:10px;width: 50vw">
                            @if( $locale == 'tr')
                                Android Uygulama Geliştirme<br>
                                iOS Uygulama Geliştirme<br>
                                Yerel Uygulamalara Tepki Ver<br>
                                Web Uygulaması<br>
                            @elseif($locale == 'ar')
                                تطوير تطبيقات أندرويد<br>
                                تطوير تطبيقات iOS<br>
                                تفاعل مع التطبيقات الأصلية<br>
                                تطبيق الويب<br>
                            @else
                                Android App Development<br>
                                iOS App Development<br>
                                React Native Apps<br>
                                Web Application<br>
                            @endif

                        </p>
                    </div>
                    </div>
                </div>
                <!-- End Item -->
            </div>

            <div class="col-md-4 clearfix">
                <!-- Item -->
                <div class="services-box animated" data-animation-delay="1500" data-animation="fadeInDown"  style=" flex-wrap: wrap;    flex-direction: column;      display: flex;">
                    <h4 style="width: 300px;text-align: center;    font-weight: bold;font-size: 22px;">
                        <a href="#">
                            @if($locale == 'tr')
                                Video Prodüksiyonları
                            @elseif($locale == 'ar')
                                إنتاجات الفيديو
                            @else
                                Video Productions
                            @endif
                        </a>
                      </h4>
                    <div style="    display: flex;    justify-content: center;">
                    <div class="services-box-icon">
                        <i class="fa fa-link"></i>
                    </div>
                    <div class="feature-box-info">
                        <p style="margin:10px;width: 50vw">
                            @if($locale == 'tr')
                                Açıklayıcı Video<br>
                                2D Animasyon Videoları<br>
                                3D Hareketli Videolar<br>
                                Beyaz Tahta Animasyonu<br>
                                Hareketli Animasyon Grafikleri<br><br>
                            @elseif($locale == 'ar')
                                فيديو توضيحي
                                فيديو الرسوم المتحركة ثنائية الأبعاد<br>
                                مقاطع فيديو متحركة ثلاثية الأبعاد<br>
                                أنيميشن السبورة البيضاء<br>
                                الرسوم المتحركة المتحركة<br><br>
                            @else
                                Explainer Videos<br>
                                2D Animated Videos<br>
                                3D Animated Videos<br>
                                Whiteboard Animation<br>
                                Motion Animation Graphics<br><br>
                            @endif
                             </p>
                    </div>
                    </div>
                </div>
                <!-- End Item -->
                <!-- Item -->
                <div class="services-box push-top animated" data-animation-delay="1700" data-animation="fadeInDown"  style=" display: flex;  flex-wrap: wrap;  flex-direction: column; ">

                       <h4 style="width: 300px;text-align: center; font-weight: bold;font-size: 22px;">
                           <a href="#">
                               @if($locale == 'tr')
                                   Yazılım geliştirme
                               @elseif($locale == 'ar')
                                   تطوير البرمجيات
                               @else
                                   Software Development
                               @endif
                           </a>
                           </h4>
                    <div style="    display: flex;    justify-content: center;">
                    <div class="services-box-icon">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <div class="feature-box-info">
                        <p style="margin:10px;width: 50vw">
                            @if($locale == 'tr')
                                Web Uygulama Geliştirme<br>
                                AI ve ML - Python, TensorFlow<br>
                                MEAN/MERN Yığın Geliştirme<br>
                                Blok Zinciri Geliştirme<br>
                                IoT Uygulamaları<br>
                                Büyük Veri Hizmeti<br>
                            @elseif($locale == 'ar')
                                تطوير تطبيقات الويب<br>
                                AI & ML - Python و TensorFlow<br>
                                تنمية المكدس MEAN / MERN<br>
                                تطوير BlockChain<br>
                                تطبيقات إنترنت الأشياء<br>
                                خدمة البيانات الضخمة<br>
                            @else
                                Web Application Development<br>
                                AI & ML - Python, TensorFlow<br>
                                MEAN/MERN Stack Development<br>
                                BlockChain Development<br>
                                IoT Applications<br>
                                Big Data Service<br>
                            @endif
                        </p>
                    </div>
                    </div>
                </div>
                <!-- End Item -->
            </div>
            <!-- End Icons Blocks -->
            <div class="clear"></div>
            <div class="col-12" style="display: flex;justify-content: center;align-items: center;margin-top:50px">
                <a class="load-more" href="{{route('user-service-detail')}}">{{trans('sentence.home.view_more')}} </a>
            </div>
        </div>
        <!-- End Content -->
    </section> --}}
    <!-- End Services Section -->

    <!-- Features -->
    <section id="features" class="parallax-section">
        <!-- Overlay1 -->
        <div class="overlay1">
            <!-- Toons -->
            <div class="toons toons1">
                <!-- Content -->
                <div class="content">
                    <div class="section-title-white animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="300">
                        <h1 style="color: #FFFFFF;background: rgba(0,0,0,0.7);margin: 15px;padding: 16px 0;border-radius: 5px;">
                            @if($locale == 'tr')
                                ADİB EMLAK CRM
                            @elseif($locale == 'ar')
                                ادیب  هو تصميم رائع
                            @else
                                ADIB IS A AWESOME DESIGN
                            @endif
                        </h1>
                        <div class="seperator">
                            <span class="white_line"></span>
                        </div>
                        <div data-animation="fadeInUp" data-animation-delay="0" class="animated fadeInUp visible">
                            {!! __('sentence.site-p') !!}
                        </div>
                    </div>
                    <div style="position: relative;overflow: hidden">
                        <img id="desktopThree" src="{{ url('source/assets/img/desktop3.png') }}" alt="desktop3" title="" class="desktop3 gadg clas_3">
                        <img id="laptopThree" style=" position: absolute; top: 16%; right: 4%;" src="{{ url('source/assets/img/laptop3.png') }}" alt="laptop3" title="" class="laptop3 gadg clas_4">
                        <img id="tabThree" style="position: absolute;top: 10%;left: 40%" src="{{ url('source/assets/img/tab3.png') }}" alt="tab3" title="" class="tab3 gadg clas_5">
                        <img id="phoneThree" style=" position: absolute; top: 33%; right: 4%;" src="{{ url('source/assets/img/phone3.png') }}" alt="phone3" title="" class="phone3 gadg clas_6">
                    </div>
                </div>
{{--                <div class="content">--}}

{{--                    <!--White Title-->--}}
{{--                    <div class="section-title-white animated" data-animation="fadeInUp" data-animation-delay="300">--}}
{{--                        <h1>--}}
{{--                            @if($locale == 'tr')--}}
{{--                                ADİB EMLAK CRM--}}
{{--                            @elseif($locale == 'ar')--}}
{{--                                ادیب  هو تصميم رائع--}}
{{--                            @else--}}
{{--                                ADIB IS A AWESOME DESIGN--}}
{{--                            @endif--}}

{{--                        </h1>--}}
{{--                        --}}{{-- <div class="seperator"><span class="white_line"></span></div>--}}
{{--                        <p data-animation="fadeInUp" data-animation-delay="0" class="animated">--}}
{{--                        </p> --}}
{{--                        <div class="" style="margin-top: 20pxw;">--}}
{{--                            <div class="col-md-6">--}}
{{--                                {!! __('sentence.site-p') !!}--}}
{{--                            </div>--}}
{{--                            <!--End White Title-->--}}

{{--                            <div class="col-md-6" style="position: relative;overflow: hidden;margin: 30px 0px;">--}}
{{--                                <img id="desktopThree" src="{{ url('source/assets/img/desktop3.png') }}" alt="desktop3"--}}
{{--                                     title=""--}}
{{--                                     class="desktop3 gadg clas_3">--}}
{{--                                --}}{{-- <img id="laptopThree" src="{{ url('source/assets/img/laptop3.png') }}" alt="laptop3"--}}
{{--                                     title=""--}}
{{--                                     class="laptop3 gadg clas_4"> --}}
{{--                                <img id="tabThree" style="position: absolute;top: 10%;left: 40%"--}}
{{--                                     src="{{ url('source/assets/img/tab3.png') }}" alt="tab3" title=""--}}
{{--                                     class="tab3 gadg clas_5">--}}
{{--                                <img id="phoneThree" style="position: absolute;top: 33%;right: 4%;" src="{{ url('source/assets/img/phone3.png') }}" alt="phone3" title="" class="phone3 gadg clas_6">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- End Content -->
            </div>
            <!-- End toons -->
        </div>
        <!-- End overlay1 -->
    </section>
    <!-- End Features -->



    <!-- Prices Section -->
    {{-- <section id="prices" class="main-content">
        <!-- Content -->
        <div class="content prices">

            <!-- Main Title -->
            <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
                @if($locale == 'tr')
                    Fiyatları listesi
                @elseif($locale == 'ar')
                    جداول التسعير
                @else
                Pricing Tables
                @endif
            </h1>

            <div class="plans-prices">
                <!-- Pricing Table -->
                <div class="plan-price no-margin-left animated" data-animation="rollIn" data-animation-delay="100">
                    <!-- Plan Header -->
                    <h1>
                        @if($locale == 'tr')
                            BAŞLANGIÇ
                        @elseif($locale == 'ar')
                            بداية
                        @else
                        Starter
                        @endif
                    </h1>
                    <!-- Plan Price -->
                    <div class="circle-price">
                        <h2>2<span class="other-price">.000 ₺
                                @if($locale == 'tr')
                                BAŞLIYOR
                                @elseif($locale == 'ar')
                                    يبدأ
                                @else
                                    STARTS
                                @endif
                            </span></h2>
                    </div>
                    <!-- Pricing List -->
                    <ul>
                        <li><span>
                                @if($locale == 'tr')
                                KURUMSAL WEB SİTESİ WORDPRESS
                                @elseif($locale == 'ar')
                                    موقع الشركة على شبكة الإنترنت
                                @else
                                    CORPORATE WEBSITE WORDPRESS
                                @endif
                            </span></li>
                        <li><span>5 GB</span>
                            @if($locale == 'tr')
                                HAFIZA
                            @elseif($locale == 'ar')
                                ذاكرة
                            @else
                                MEMORY
                            @endif

                        </li>
                        <li><span>10 GB </span>
                            @if($locale == 'tr')
                                 BANT GENİŞLİĞİ
                            @elseif($locale == 'ar')
                                عرض النطاق
                            @else
                                BAND WIDTH
                            @endif
                           </li>
                        <li><span>12</span>
                            @if($locale == 'tr')
                                AYLIK DESTEK
                            @elseif($locale == 'ar')
                                دعم شهري
                            @else
                                MONTHLY SUPPORT
                            @endif
                        </li>
                    </ul>
                    <a class="buy-button" href="#myModalSlider"
                       data-toggle="modal" data-target="#myModalSlider">
                        @if($locale == 'tr')
                            TEKLİF AL
                        @elseif($locale == 'ar')
                            احصل على عرض
                        @else
                            GET OFFER
                        @endif

                    </a>
                </div>

                <!-- Pricing Table -->
                <div class="plan-price animated" data-animation="rollIn" data-animation-delay="300">
                    <!-- Plan Header -->
                    <h1>
                        @if($locale == 'tr')
                            STANDART
                        @elseif($locale == 'ar')
                            اساسي
                        @else
                            Standard
                        @endif
                        </h1>
                    <!-- Plan Price -->
                    <div class="circle-price">
                        <h2>2<span class="other-price">.500 ₺
                                      @if($locale == 'tr')
                                    BAŞLIYOR
                                @elseif($locale == 'ar')
                                    يبدأ
                                @else
                                    STARTS
                                @endif
                            </span></h2>
                    </div>
                    <!-- Pricing List -->
                    <ul>
                        <li><span>
                                                    @if($locale == 'tr')
                                    E-TİCARET WEB SİTESİ WORDPRESS
                                @elseif($locale == 'ar')
                                    عالم التجارة الإلكترونية
                                @else
                                    E-COMMERCE WEBSITE WORDPRESS
                                @endif
                                </span></li>
                        <li><span>10 GB</span>
                            @if($locale == 'tr')
                                HAFIZA
                            @elseif($locale == 'ar')
                                ذاكرة
                            @else
                                MEMORY
                            @endif</li>
                        <li><span>20 GB </span>
                            @if($locale == 'tr')
                                BANT GENİŞLİĞİ
                            @elseif($locale == 'ar')
                                عرض النطاق
                            @else
                                BAND WIDTH
                                @endif
                        </li>
                        <li><span>12</span>
                            @if($locale == 'tr')
                                AYLIK DESTEK
                            @elseif($locale == 'ar')
                                دعم شهري
                            @else
                                MONTHLY SUPPORT
                            @endif
                        </li>
                    </ul>
                    <a class="buy-button" href="#myModalSlider"
                       data-toggle="modal" data-target="#myModalSlider">
                        @if($locale == 'tr')
                            TEKLİF AL
                        @elseif($locale == 'ar')
                            احصل على عرض
                        @else
                            GET OFFER
                        @endif
                    </a>
                </div>

                <!-- Pricing Table -->
                <div class="plan-price active animated plan-bootom" data-animation="rollIn" data-animation-delay="500">
                    <!-- Plan Header -->
                    <h1>
                        @if($locale == 'tr')
                            Profesyonel
                        @elseif($locale == 'ar')
                            احترافي
                        @else
                            Professional
                        @endif
                        </h1>
                    <!-- Plan Price -->
                    <div class="circle-price">
                        <h2>5<span class="other-price">.000 ₺
                                      @if($locale == 'tr')
                                    BAŞLIYOR
                                @elseif($locale == 'ar')
                                    يبدأ
                                @else
                                    STARTS
                                @endif
                            </span></h2>
                    </div>
                    <!-- Pricing List -->
                    <ul>
                        <li><span>
                                          @if($locale == 'tr')
                                    KURUMSAL WEB SİTESİ ÖZEL TASARIMI
                                @elseif($locale == 'ar')
                                    تصميم موقع الشركة المخصص
                                @else
                                    CORPORATE WEBSITE CUSTOM DESIGN
                                @endif
                                </span></li>
                        <li><span>5 GB</span>
                            @if($locale == 'tr')
                                HAFIZA
                            @elseif($locale == 'ar')
                                ذاكرة
                            @else
                                MEMORY
                            @endif</li>
                        <li><span>10 GB </span>
                            @if($locale == 'tr')
                                BANT GENİŞLİĞİ
                            @elseif($locale == 'ar')
                                عرض النطاق
                            @else
                                BAND WIDTH
                            @endif
                        </li>
                        <li><span>12</span>
                            @if($locale == 'tr')
                                AYLIK DESTEK
                            @elseif($locale == 'ar')
                                دعم شهري
                            @else
                                MONTHLY SUPPORT
                            @endif </li>
                    </ul>
                    <a class="buy-button" href="#myModalSlider"
                       data-toggle="modal" data-target="#myModalSlider">
                        @if($locale == 'tr')
                            TEKLİF AL
                        @elseif($locale == 'ar')
                            احصل على عرض
                        @else
                            GET OFFER
                        @endif
                    </a>
                </div>

                <!-- Pricing Table -->
                <div class="plan-price no-margin-right animated plan-bootom" data-animation="rollIn"
                     data-animation-delay="700">
                    <!-- Plan Header -->
                    <h1>
                        @if($locale == 'tr')
                            Ödül
                        @elseif($locale == 'ar')
                            الممتازة
                        @else
                            Premium
                        @endif
                        </h1>
                    <!-- Plan Price -->
                    <div class="circle-price">
                        <h2>8<span class="other-price">.500 ₺
                                      @if($locale == 'tr')
                                    BAŞLIYOR
                                @elseif($locale == 'ar')
                                    يبدأ
                                @else
                                    STARTS
                                @endif
                            </span></h2>
                    </div>
                    <!-- Pricing List -->
                    <ul>
                        <li><span>
                                    @if($locale == 'tr')
                                    E-TİCARET WEB SİTESİ ÖZEL TASARIMI
                                @elseif($locale == 'ar')
                                    تصميم خاص لموقع التجارة الإلكترونية
                                @else
                                    E-COMMERCE WEBSITE SPECIAL DESIGN
                                @endif
                              </span></li>
                        <li><span>10 GB</span>
                            @if($locale == 'tr')
                                HAFIZA
                            @elseif($locale == 'ar')
                                ذاكرة
                            @else
                                MEMORY
                            @endif</li>
                        <li><span>20 GB </span>
                            @if($locale == 'tr')
                                BANT GENİŞLİĞİ
                            @elseif($locale == 'ar')
                                عرض النطاق
                            @else
                                BAND WIDTH
                            @endif
                        </li>
                        <li><span>12</span>
                            @if($locale == 'tr')
                                AYLIK DESTEK
                            @elseif($locale == 'ar')
                                دعم شهري
                            @else
                                MONTHLY SUPPORT
                            @endif
                            </li>
                    </ul>
                    <a class="buy-button" href="#myModalSlider"
                       data-toggle="modal" data-target="#myModalSlider">
                        @if($locale == 'tr')
                            TEKLİF AL
                        @elseif($locale == 'ar')
                            احصل على عرض
                        @else
                            GET OFFER
                        @endif</a>
                </div>
                <div class="clear"></div>

            </div>
            <!-- End Pricing plans -->
        </div>
        <!-- End Content -->
    </section> --}}
    <!-- End Prices Section -->

@endsection
