@extends('layouts.user')

@php $locale = session()->get('locale'); @endphp

@section('body')

<section>
    <ul class="breadcrumb" style="margin-bottom: 0;border-bottom: 1px solid #CCCBC9;border-radius: unset !important">
        <li><a href="{{url('/')}}"><!--{{trans('sentence.navigation.home')}}--> <span style="    color: #202E37 !important;" class="fa fa-reply "></span></a></li>
        <li style="color: #F26341 !important">{{trans('sentence.navigation.templates')}} </li>
    </ul>
</section>
  <section id="portfolio" class="main-content">
        <!-- Content -->
        <div class="content">

            <!-- Main Title -->
            <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
                {{trans('sentence.templates.title')}}
            </h1>

            <!-- Works -->
            <div class="works">

                <!-- Filter Navigation -->
                <div id="" class="filter-menu inline animated" data-animation=""
                     data-animation-delay="500">
                    <ul id="" class="filters option-set" data-option-key="">
                        @php
                            $pars_url=parse_url(url()->current());
                            $route=isset(explode('/',$pars_url['path'])[2]) ? true : '';
                        @endphp
                        <li  style="margin-top: 35px;" ><a href="{{ route('user-gallery') }}"  style="border: 1px solid #CCCBC9" data-option-value="*" class=" {{\Request::route()->getName()=='user-gallery'?'selected':''}}">{{trans('sentence.templates.all')}}</a></li>
                        @foreach($categories as $value)
                            <li  style="margin-top: 35px;" ><a href="{{route('user-tem-cat' , [$locale , $value->slug])}}" style="border: 1px solid #CCCBC9"  class="{{isset($slugs) && $value->slug==$slugs?'selected':''}}" >{{$value->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- End Filter Navigation -->

                <!-- Filter -->
                <div class="items animated pretty-lightbox-a" data-animation="fadeInUp" data-animation-delay="700">
                
                @foreach($customers as $customer)
                    <!-- Item show added style -> layout.user -->
                        <div id="dev-new-code-customers" class="work col-xs-4 printing photography">
                            <div class="work-inner">
                                <div class="work-img">
                                    <img src="{{$customer->site?url($customer->site->path):'' }}" alt="{{ $customer->title}}"/>
                                    <div class="mask">
                                        <a class="button zoom" href="{{$customer->site?url($customer->site->path):'' }}" alt="{{ $customer->title}}"
                                           data-rel="prettyPhoto[gallery]"><i class="fa fa-film"></i></a>
                                        <a class="button detail" href="{{$customer->url}}"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="work-desc">
                                        <h4>{{ $customer->title}}</h4>

                                    </div>
                                </div>
                            </div>
                            <h4 class="title-img">{{ $customer->title}}</h4>
                        </div>
                        <!-- End Item -->

                    @endforeach

                    <div class="clear"></div>

                </div>
                <!-- End Filter -->

                <div style="display: flex;justify-content: center;align-items: center;    position: relative;    top: 45px;">
                        <div >
                            {{$customers->links()}}
                        </div>
                </div>
            </div>
            <!-- End Works -->
        </div>
        <!-- End Content -->
    </section>


@endsection