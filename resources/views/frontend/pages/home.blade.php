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

@section('page-title', __('home.page-title'))

@section('content')

    <!-- Main Sllider Start -->
    <section class="main-slider">
        <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
             data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": false, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

            <div class="item main-slider__slide-1">
                <div class="main-slider__bg"
                     style="background-image: url(/frontend/images/backgrounds/slider-1-1.jpg);">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider__shadow"></div>
                <div class="main-slider__shape-1 float-bob-y">
                    <img src="/frontend/images/shapes/main-slider-shape-1.png" alt="">
                </div>
                <div class="main-slider__shape-2 img-bounce">
                    <img src="/frontend/images/shapes/main-slider-shape-2.png" alt="">
                </div>
                <div class="main-slider__shape-3">
                    <img src="/frontend/images/shapes/main-slider-shape-3.png" alt="">
                </div>
                <div class="main-slider__shape-4">
                    <img src="/frontend/images/shapes/main-slider-shape-4.png" alt="">
                </div>
                <div class="main-slider__shape-5 float-bob-x">
                    <img src="/frontend/images/shapes/main-slider-shape-5.png" alt="">
                </div>
                <div class="container">
                    <div class="main-slider__content">
                        <p class="main-slider__sub-title">E. Mouasso & Partners Law Firm</p>
                        <h2 class="main-slider__title">Assitance Administrative <br>
                            & Juridique</h2>
                        <div class="main-slider__btn-box">
                            <a href=" {{ route ('about', app()->getLocale()) }}" class="main-slider__btn thm-btn">@lang('general.read-more')</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item main-slider__slide-2">
                <div class="main-slider__bg"
                     style="background-image: url('/frontend/images/backgrounds/slider-1-2.jpg');">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider__shadow"></div>
                <div class="main-slider__shape-1 float-bob-y">
                    <img src="/frontend/images/shapes/main-slider-shape-1.png" alt="">
                </div>
                <div class="main-slider__shape-2 img-bounce">
                    <img src="/frontend/images/shapes/main-slider-shape-2.png" alt="">
                </div>
                <div class="main-slider__shape-3">
                    <img src="/frontend/images/shapes/main-slider-shape-3.png" alt="">
                </div>
                <div class="main-slider__shape-4">
                    <img src="/frontend/images/shapes/main-slider-shape-4.png" alt="">
                </div>
                <div class="main-slider__shape-5 float-bob-x">
                    <img src="/frontend/images/shapes/main-slider-shape-5.png" alt="">
                </div>
                <div class="container">
                    <div class="main-slider__content">
                        <p class="main-slider__sub-title">E. Mouasso & Partners Law Firm</p>
                        <h2 class="main-slider__title">Audit Juridique<br>
                             & Social</h2>
                        <div class="main-slider__btn-box">
                            <a href=" {{ route ('about') }}" class="main-slider__btn thm-btn"> @lang('general.read-more')</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item main-slider__slide-3">
                <div class="main-slider__bg"
                     style="background-image: url(/frontend/images/backgrounds/slider-1-3.jpg);">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider__shadow"></div>
                <div class="main-slider__shape-1 float-bob-y">
                    <img src="/frontend/images/shapes/main-slider-shape-1.png" alt="">
                </div>
                <div class="main-slider__shape-2 img-bounce">
                    <img src="/frontend/images/shapes/main-slider-shape-2.png" alt="">
                </div>
                <div class="main-slider__shape-3">
                    <img src="/frontend/images/shapes/main-slider-shape-3.png" alt="">
                </div>
                <div class="main-slider__shape-4">
                    <img src="/frontend/images/shapes/main-slider-shape-4.png" alt="">
                </div>
                <div class="main-slider__shape-5 float-bob-x">
                    <img src="/frontend/images/shapes/main-slider-shape-5.png" alt="">
                </div>
                <div class="container">
                    <div class="main-slider__content">
                        <p class="main-slider__sub-title">E. Mouasso & Partners Law Firm</p>
                        <h2 class="main-slider__title">Consultations <br>
                            Juridiques</h2>
                        <div class="main-slider__btn-box">
                            <a href=" {{ route ('about') }}" class="main-slider__btn thm-btn"> @lang('general.read-more')</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Main Sllider Start -->

    <!--About One Start-->
    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="/frontend/images/resources/about-one-img-1.jpg" alt="">
                                <div class="about-one__shape-1 float-bob-x">
                                    <img src="/frontend/images/shapes/about-one-shape-1.png" alt="">
                                </div>
                                <div class="about-one__shape-2 img-bounce">
                                    <img src="/frontend/images/shapes/about-one-shape-2.png" alt="">
                                </div>
                            </div>
                            <div class="about-one__img-2">
                                <img src="/frontend/images/resources/about-one-img-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">@lang('home.welcome-to-cabinet')</span>
                            </div>
                            <h2 class="section-title__title">@lang('home.welcome-to-cabinet-title')</h2>
                        </div>
                        <p class="about-one__text text-justify" >@lang('home.nous-sommes')</p>
                        <div class="about-one__points-and-experience">
                            <div class="about-one__points-box">
                                <ul class="about-one__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>@lang('home.droit-affaires')</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>@lang('home.droit-maritime')</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>@lang('home.droit-bancaire')</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>@lang('home.finances-inter') </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>@lang('home.contentieux-cnps') </p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="about-one__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>@lang('home.droit-travail')</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>@lang('home.droit-civil')</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>@lang('home.droit-foncier') </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>@lang('home.contentieux-fiscal') </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="about-one__experience-box">
                                <div class="about-one__experience-icon">
                                    <span class="icon-certificate"></span>
                                </div>
                                <div class="about-one__experience-text">
                                    <p>@lang('home.10-years-experience')</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-one__btn-box">
                            <div class="about-one__shape-3 float-bob-x">
                                <img src="/frontend/images/shapes/about-one-shape-3.png" alt="">
                            </div>
                            <a href=" {{ route ('about') }}" class="about-one__btn thm-btn"> @lang('general.read-more')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <!--Services One Start-->
    <section class="services-one">
        <div class="services-one__bg" style="background-image: url(/frontend/images/backgrounds/services-one-bg.png);">
        </div>
        <div class="container">
            <div class="services-one__top">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="services-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">@lang('home.what-we-are-doing')</span>
                                </div>
                                <h2 class="section-title__title">@lang('home.what-we-are-doing-title')</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="services-one__right">
                            <p class="services-one__text" style="text-align: justify">@lang('home.what-we-are-doing-text')</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-one__bottom">
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title"><a href="{{ route('consultationjuridiques', app()->getLocale()) }}">@lang('services.legal_consultations')</a>
                                </h3>
                            </div>
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="/frontend/images/services/services-1-1.jpg" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-pie-chart"></span>
                                </div>
                            </div>
                            <div class="services-one__read-more">
                                <a href="{{ route('consultationjuridiques', app()->getLocale()) }}">@lang('general.read-more')<span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title"><a href="{{ route('recouvrementetcréances', app()->getLocale()) }}">@lang('services.debt_collection_&_recovery')</a></h3>
                            </div>
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="/frontend/images/services/services-1-2.jpg" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-insurance"></span>
                                </div>
                            </div>
                            <div class="services-one__read-more">
                                <a href="{{ route('recouvrementetcréances', app()->getLocale()) }}">@lang('general.read-more')<span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title"><a href="{{ route('assistancesjuridiques', app()->getLocale()) }}">@lang('services.legal_and_administrative_support')</a>
                                </h3>
                            </div>
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="/frontend/images/services/services-1-3.jpg" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-money-bag"></span>
                                </div>
                            </div>
                            <div class="services-one__read-more">
                                <a href="{{ route('assistancesjuridiques', app()->getLocale()) }}">@lang('general.read-more')<span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title"><a href="{{ route('auditjuridique', app()->getLocale()) }}">@lang('services.legal_and_social_audit')</a></h3>
                            </div>
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="/frontend/images/services/services-1-4.jpg" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-profile"></span>
                                </div>
                            </div>
                            <div class="services-one__read-more">
                                <a href="{{ route('auditjuridique', app()->getLocale()) }}">@lang('general.read-more')<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Services One End-->

    <!--Grow Business Start-->
    <section class="grow-business">
        <div class="container">
            <div class="grow-business__inner">
                <div class="grow-business__bg"
                     style="background-image: url(/frontend/images/backgrounds/grow-business-bg.jpg);"></div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="grow-business__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">@lang('home.human_resources')</span>
                                </div>
                                <h2 class="section-title__title">@lang('home.let’s_grow_business_with_a_new')
                                    <span>@lang('home.strategies')</span></h2>
                            </div>
                            <p class="grow-business__text" style="text-align: justify">@lang('home.ba')</p>
                            <ul class="grow-business__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>@lang('home.legal_advice_and_consultations')</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>@lang('home.public_finance_litigation')</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>@lang('home.participation_in_negotiations/transactions')</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="grow-business__progress">
                                <h4 class="grow-business__progress-title">@lang('home.consulting')</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="100%">
                                        <div class="count-text">100%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="grow-business__right" style="padding: 100px 50px 110px;">
                            <div class="grow-business__shape-1 float-bob-x">
                                <img src="/frontend/images/shapes/grow-business-shape-1.png" alt="">
                            </div>
                            <ul class="grow-business__right-points list-unstyled">
                                <li>
                                    <div class="grow-business__right-points-icon">
                                        <span class="icon-experience"></span>
                                    </div>
                                    <h3 class="grow-business__right-points-title">@lang('home.why_us?')</h3>
                                    <p class="grow-business__right-points-text" style="text-align: justify">@lang('home.bar')
                                        <br>@lang('home.consulting_work_that_meets_expectations.')</p>
                                </li>
                                <li>
                                    <div class="grow-business__right-points-icon">
                                        <span class="icon-consumer-behavior"></span>
                                    </div>
                                    <h3 class="grow-business__right-points-title">@lang('home.the_importance_of_having_a')
                                        <br> @lang('home.lawyer')</h3>
                                    <p class="grow-business__right-points-text">@lang('home.we_represent_you_in_court_on_any_case.')
                                        <br>@lang('home.ban')</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Grow Business End-->

    <!--Video One Start-->
    <section class="video-one">
        <div class="video-one__bg" style="background-image: url(/frontend/images/backgrounds/video-one-bg.jpg);"></div>
        <div class="container">
            <div class="video-one__inner">
                <div class="video-one__video-link">
                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                        <div class="video-one__video-icon">
                            <img src="/frontend/images/icon/video-one-icon.png" alt="">
                            <i class="ripple"></i>
                        </div>
                    </a>
                </div>
                <h3 class="video-one__title">E. Mouasso & Partners Law Firm
                    <br>@lang('home.your-legal-partner') </h3>
                <div class="video-one__btn-box">
                    <a href=" {{ route ('about') }}" class="video-one__btn thm-btn"> @lang('general.read-more')</a>
                </div>
            </div>
        </div>
    </section>
    <!--Video One End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one__bg"
             style="background-image: url(/frontend/images/backgrounds/testimonial-one-bg.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="testimonial-one__left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">our feedbacks</span>
                            </div>
                            <h2 class="section-title__title">Clients are
                                <span>Talking</span></h2>
                        </div>
                        <p class="testimonial-one__left-text" style="text-align: justify;">@lang('home.our-feedbacks-text')</p>
                        <div class="testimonial-one__rounded-text">
                            <a href="#" class="testimonial-one__curved-circle-box">
                                <div class="curved-circle">
                                        <span class="curved-circle--item">
                                            @lang('home.380_satisfied_clients')
                                        </span>
                                </div><!-- /.curved-circle -->
                                <div class="testimonial-one__icon">
                                    <img src="/frontend/images/icon/main-slider-two-rounded-icon.png" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="testimonial-one__right">
                        <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                             data-owl-options='{
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
                                        "items": 3
                                    }
                                }
                            }'>
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <div class="testimonial-one__shape-1"></div>
                                        <div class="testimonial-one__shape-2"></div>
                                        <div class="testimonial-one__img">
                                            <img src="/frontend/images/testimonial/testimonial-1-1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="testimonial-one__text">@lang('home.bas')</p>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3><a href="#">Aleesha Brown</a></h3>
                                        <p>@lang('home.happy_client')</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <div class="testimonial-one__shape-1"></div>
                                        <div class="testimonial-one__shape-2"></div>
                                        <div class="testimonial-one__img">
                                            <img src="/frontend/images/testimonial/t2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="testimonial-one__text">@lang('home.bax')</p>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3><a href="#">Mike Hardson</a></h3>
                                        <p>@lang('home.happy_client')</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <div class="testimonial-one__shape-1"></div>
                                        <div class="testimonial-one__shape-2"></div>
                                        <div class="testimonial-one__img">
                                            <img src="/frontend/images/testimonial/t1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="testimonial-one__text">@lang('home.bat')</p>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3><a href="#">Karl Rigobert</a></h3>
                                        <p>@lang('home.happy_client')</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->

    @include('frontend.layouts.achievements.projects')

    @include('frontend.layouts.team.team-section')

    <!--Counter One Start-->
    @include('frontend.layouts.counter-section')
    <!--Counter One End-->

    <!--Brand One Start-->
    @include('frontend.layouts.brands-carousel')
    <!--Brand One End-->

    <!--Contact One Start-->
    @include('frontend.layouts.contact-section')
    <!--Contact One End-->

    <!--News One Start-->
    @include('frontend.layouts.blog.blog-section')
    <!--News One End-->

@endsection
