@extends('frontend.layouts.app')

@section('additional_meta')

    <meta property="og:image" content="{{ asset('') }}"/>
    <meta property="og:description"
          content=""/>
    <meta property="og:keywords"
          content=""/>

    <meta property="og:url" content="{{ route('home' ) }}"/>

    <meta property="og:title" content=""/>

@endsection

@section('page-title', __('about.page-title'))

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background:url('/frontend/images/backgrounds/project-two-bg.jpg');">
        </div>
        <div class="page-header__shape-2 float-bob-x">
            <img src="{{url('/frontend/images/shapes/page-header-shape-2.png')}}" alt="">
        </div>
        <div class="page-header__shape-1 float-bob-y">
            <img src="{{url('/frontend/images/shapes/page-header-shape-1.png')}}" alt="">
        </div>
        <div class="page-header__shape-3 float-bob-x">
            <img src="{{url('/frontend/images/shapes/page-header-shape-3.png')}}" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>@lang('navigation.nav-about')</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">@lang('navigation.nav-home')</a></li>
                        <li><span>/</span></li>
                        <li>@lang('navigation.nav-about') </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Four Start-->
    <section class="about-four">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-four__left">
                        <div class="about-four__img-box">
                            <div class="about-four__img">
                                <img src="{{url('/frontend/images/resources/12.jpg')}}" alt="">
                            </div>
                            <div class="about-four__img-two">
                                <img src="{{url('/frontend/images/resources/11.jpg')}}" alt="">
                            </div>
                            <div class="about-four__shape-1 img-bounce"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-four__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">@lang('about.welcome_to_agency')</span>
                            </div>
                            <h2 class="section-title__title">@lang('about.qui-sommes-nous')</h2>
                        </div>
                        <p class="about-four__text">@lang('about.fa')</p>
                        <ul class="about-four__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>@lang('services.legal_consultations')</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>@lang('services.debt_collection_&_recovery')</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>@lang('services.legal_and_administrative_support')</p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-four__btn-box">
                            <a href="#" class="thm-btn about-four__btn">@lang('about.discover_more')</a>
                            <div class="about-four__shape-2 float-bob-x">
                                <img src="{{url('/frontend/images/shapes/about-four-shape-1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Four End-->

    <!--Expectation One Start-->
    <section class="expectation-one">
        <div class="expectation-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
             style="background-image: {{url('/frontend/images/backgrounds/expectation-one-bg.jpg')}};"></div>
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">@lang('about.recent_work_lists')</span>
            </div>
            <h2 class="section-title__title" >@lang('about.consultancy_work_that_meets')
                </h2>
        </div>
        <div class="expectation-one__inner">
            <div class="container">
                <ul class="expectation-one__points list-unstyled">
                    <li>
                        <div class="icon">
                            <span class="icon-strategy"></span>
                        </div>
                        <h3 class="expectation-one__title"><a href="#">@lang('about.saving_and_strategy')</a></h3>
                        <p class="expectation-one__text" style="text-align: justify">@lang('about.far')</p>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="icon-conversation"></span>
                        </div>
                        <h3 class="expectation-one__title"><a href="#">@lang('about.hr_business_consulting')</a></h3>
                        <p class="expectation-one__text" style="text-align: justify">@lang('about.fan')</p>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="icon-planning"></span>
                        </div>
                        <h3 class="expectation-one__title"><a href="#">@lang('about.business_planning')</a></h3>
                        <p class="expectation-one__text" style="text-align: justify">@lang('about.fas')</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Expectation One End-->

    @include('frontend.layouts.team.team-section-2')

    <!--Testimonial Two Start-->
    <section class="testimonial-two about-page-testimonial">
        <div class="testimonial-two__bg-box">
            <div class="testimonial-two__bg"
                 style="background-image: {{url('/frontend/images/backgrounds/testimonial-two-bg.png')}};"></div>
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">@lang('about.our_testimonials')</span>
                </div>
                <h2 class="section-title__title">@lang('about.our-testimonials-heading')</h2>
            </div>
            <div class="testimonial-two__bottom">
                <div class="testimonial-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": false,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 2
                            },
                            "992": {
                                "items": 2
                            },
                            "1200": {
                                "items": 2
                            }
                        }
                    }'>
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__shape-1">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-1.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__shape-2">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-2.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__shape-3">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-3.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__shape-4">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-4.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__client-img-and-info">
                                <div class="testimonial-two__client-img">
                                    <img src="{{url('/frontend/images/testimonial/testimonial-2-1.jpg')}}" alt="">
                                </div>
                                <div class="testimonial-two__client-info">
                                    <h3><a href="#">Mike Hardson</a></h3>
                                    <p>CO Founder</p>
                                </div>
                            </div>
                            <p class="testimonial-two__text">Exercitation ullamco laboris nisi ut aliquip ex ea ex
                                commodo consequat duis aute aboris nisi ut aliquip irure reprehederit in voluptate
                                velit esse.</p>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__shape-1">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-1.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__shape-2">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-2.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__shape-3">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-3.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__shape-4">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-4.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__client-img-and-info">
                                <div class="testimonial-two__client-img">
                                    <img src="{{url('/frontend/images/testimonial/testimonial-2-2.jpg')}}" alt="">
                                </div>
                                <div class="testimonial-two__client-info">
                                    <h3><a href="#">Sarah Albert</a></h3>
                                    <p>CO Founder</p>
                                </div>
                            </div>
                            <p class="testimonial-two__text">Exercitation ullamco laboris nisi ut aliquip ex ea ex
                                commodo consequat duis aute aboris nisi ut aliquip irure reprehederit in voluptate
                                velit esse.</p>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__shape-1">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-1.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__shape-2">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-2.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__shape-3">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-3.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__shape-4">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-4.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__client-img-and-info">
                                <div class="testimonial-two__client-img">
                                    <img src="{{url('/frontend/images/testimonial/testimonial-2-3.jpg')}}" alt="">
                                </div>
                                <div class="testimonial-two__client-info">
                                    <h3><a href="#">Christine Eve</a></h3>
                                    <p>CO Founder</p>
                                </div>
                            </div>
                            <p class="testimonial-two__text">Exercitation ullamco laboris nisi ut aliquip ex ea ex
                                commodo consequat duis aute aboris nisi ut aliquip irure reprehederit in voluptate
                                velit esse.</p>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__shape-1">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-1.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__shape-2">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-2.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__shape-3">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-3.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__shape-4">
                                <img src="{{url('/frontend/images/shapes/testimonial-two-shape-4.png')}}" alt="">
                            </div>
                            <div class="testimonial-two__client-img-and-info">
                                <div class="testimonial-two__client-img">
                                    <img src="{{url('/frontend/images/testimonial/testimonial-2-4.jpg')}}" alt="">
                                </div>
                                <div class="testimonial-two__client-info">
                                    <h3><a href="#">Michale Robert</a></h3>
                                    <p>CO Founder</p>
                                </div>
                            </div>
                            <p class="testimonial-two__text">Exercitation ullamco laboris nisi ut aliquip ex ea ex
                                commodo consequat duis aute aboris nisi ut aliquip irure reprehederit in voluptate
                                velit esse.</p>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Two End-->

<!--Brand One Start-->
@include('frontend.layouts.brands-carousel')
<!--Brand One End-->





@endsection
