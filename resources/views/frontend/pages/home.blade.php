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
                            <a href=" {{ route ('about') }}" class="main-slider__btn thm-btn">@lang('general.read-more')</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item main-slider__slide-2">
                <div class="main-slider__bg"
                     style="background-image: url(/frontend/images/backgrounds/slider-1-2.jpg);">
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
                        <h2 class="main-slider__title">Audit Juridiques<br>
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
                        <h2 class="main-slider__title">Consultation <br>
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
                <div class="col-xl-6">
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
                <div class="col-xl-6">
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
                                            <p>@lang('home.droit-travail')</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Droit Foncier </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-one__experience-box">
                                <div class="about-one__experience-icon">
                                    <span class="icon-certificate"></span>
                                </div>
                                <div class="about-one__experience-text">
                                    <p>10 Years of Consulting Experience</p>
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
                                    <span class="section-title__tagline">what we’re doing</span>
                                </div>
                                <h2 class="section-title__title">Offering the Best Consulting
                                    <br> & Finance <span>Services</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="services-one__right">
                            <p class="services-one__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                                <br> elit sed do eiusmod tempor incididunt ut labore et simply free text dolore
                                magna
                                aliqua lonm andhn.</p>
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
                                <h3 class="services-one__title"><a href="capital-market.html">Capital Market</a>
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
                                <a href="capital-market.html">Read More<span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title"><a href="insurance.html">Insurance</a></h3>
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
                                <a href="insurance.html">Read More<span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title"><a href="mutual-funds.html">Mutual Funds</a>
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
                                <a href="mutual-funds.html">Read More<span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title"><a href="portfolio-mangement.html">Portfolio
                                        Management</a></h3>
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
                                <a href="portfolio-mangement.html">Read More<span
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
                                    <span class="section-title__tagline">Human resources</span>
                                </div>
                                <h2 class="section-title__title">Let’s Grow Business
                                    with a New <span>Strategies</span></h2>
                            </div>
                            <p class="grow-business__text">Duis aute irure dolor in reprehenderit in voluptate velit
                                esse cillum dolore eu convenient scheduling, account nulla pariatur.</p>
                            <ul class="grow-business__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Lorem ipsum is not simply random text</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Making this the first true generator on the Internet</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Various versions have evolved over the years</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="grow-business__progress">
                                <h4 class="grow-business__progress-title">Consulting</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="86%">
                                        <div class="count-text">86%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="grow-business__right">
                            <div class="grow-business__shape-1 float-bob-x">
                                <img src="/frontend/images/shapes/grow-business-shape-1.png" alt="">
                            </div>
                            <ul class="grow-business__right-points list-unstyled">
                                <li>
                                    <div class="grow-business__right-points-icon">
                                        <span class="icon-experience"></span>
                                    </div>
                                    <h3 class="grow-business__right-points-title">Benefits by Investing
                                        <br> your Money</h3>
                                    <p class="grow-business__right-points-text">Sed non odio non elit porttit sit
                                        tincidunt.
                                        <br> Donec fermentum, elit sit amet</p>
                                </li>
                                <li>
                                    <div class="grow-business__right-points-icon">
                                        <span class="icon-consumer-behavior"></span>
                                    </div>
                                    <h3 class="grow-business__right-points-title">The most Time-Consuming
                                        <br> Components</h3>
                                    <p class="grow-business__right-points-text">Sed non odio non elit porttit sit
                                        tincidunt.
                                        <br> Donec fermentum, elit sit amet</p>
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
                <h3 class="video-one__title">Sinace Envision & Transofrm
                    <br> Your Business</h3>
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
                        <p class="testimonial-one__left-text">Lorem Ipsum. Proin gravida nibh vel velit auctor
                            aliquet. Aenean solldin, lorem is simply.</p>
                        <div class="testimonial-one__rounded-text">
                            <a href="testimonials.html" class="testimonial-one__curved-circle-box">
                                <div class="curved-circle">
                                        <span class="curved-circle--item">
                                            380 satisfied clients
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
                                        <p class="testimonial-one__text">Lorem ipsum is simply free text dolor
                                            not sit amet,
                                            notted adipisicing elit sed do eiusmod incididunt labore et dolore
                                            text.</p>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3><a href="testimonials.html">Aleesha Brown</a></h3>
                                        <p>Happy Client</p>
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
                                            <img src="/frontend/images/testimonial/testimonial-1-2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="testimonial-one__text">Lorem ipsum is simply free text dolor
                                            not sit amet,
                                            notted adipisicing elit sed do eiusmod incididunt labore et dolore
                                            text.</p>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3><a href="testimonials.html">Mike Hardson</a></h3>
                                        <p>Happy Client</p>
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
                                            <img src="/frontend/images/testimonial/testimonial-1-3.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="testimonial-one__text">Lorem ipsum is simply free text dolor
                                            not sit amet,
                                            notted adipisicing elit sed do eiusmod incididunt labore et dolore
                                            text.</p>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3><a href="testimonials.html">Sarah Albert</a></h3>
                                        <p>Happy Client</p>
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

    <!--Project One Start-->
    <section class="project-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Recent work lists</span>
                </div>
                <h2 class="section-title__title">Recently Completed Our
                    <br> Clients <span>Projects</span></h2>
            </div>
            <div class="project-one__bottom">
                <div class="project-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": false,
                        "margin": 30,
                        "nav": true,
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
                                "items": 3
                            },
                            "1200": {
                                "items": 3
                            }
                        }
                    }'>
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="/frontend/images/project/project-1-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="project-one__content">
                                <p>Finance</p>
                                <h3><a href="portfolio-details.html">International business
                                        <br> development</a></h3>
                                <div class="project-one__arrow">
                                    <a href="portfolio-details.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="/frontend/images/project/project-1-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="project-one__content">
                                <p>Finance</p>
                                <h3><a href="portfolio-details.html">International business
                                        <br> development</a></h3>
                                <div class="project-one__arrow">
                                    <a href="portfolio-details.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="/frontend/images/project/project-1-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="project-one__content">
                                <p>Finance</p>
                                <h3><a href="portfolio-details.html">International business
                                        <br> development</a></h3>
                                <div class="project-one__arrow">
                                    <a href="portfolio-details.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="/frontend/images/project/project-1-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="project-one__content">
                                <p>Finance</p>
                                <h3><a href="portfolio-details.html">International business
                                        <br> development</a></h3>
                                <div class="project-one__arrow">
                                    <a href="portfolio-details.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="/frontend/images/project/project-1-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="project-one__content">
                                <p>Finance</p>
                                <h3><a href="portfolio-details.html">International business
                                        <br> development</a></h3>
                                <div class="project-one__arrow">
                                    <a href="portfolio-details.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="/frontend/images/project/project-1-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="project-one__content">
                                <p>Finance</p>
                                <h3><a href="portfolio-details.html">International business
                                        <br> development</a></h3>
                                <div class="project-one__arrow">
                                    <a href="portfolio-details.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Project One End-->

    <!--Team One Start-->
    <section class="team-one">
        <div class="container">
            <div class="team-one__top">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="team-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">meet our team</span>
                                </div>
                                <h2 class="section-title__title">Meet the People Behind
                                    <br> the High <span>Success</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="team-one__right">
                            <p class="team-one__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                                elit sed do eiusmod tempor incididunt ut labore et simply free text dolore magna
                                aliqua lonm andhn.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-one__bottom">
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="/frontend/images/team/team-1-1.jpg" alt="">
                                </div>
                                <div class="team-one__hover-content">
                                    <div class="team-one__hover-arrow-box">
                                        <a href="team-details.html" class="team-one__hover-arrow"><span
                                                class="fas fa-share-alt"></span></a>
                                        <ul class="list-unstyled team-one__social">
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <h3 class="team-one__hover-title"><a href="team-details.html">Kevin Martin</a>
                                    </h3>
                                    <p class="team-one__hover-sub-title">Consultant</p>
                                    <p class="team-one__hover-text">There are many vartion of passages of available.
                                    </p>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow-box">
                                    <a href="team-details.html" class="team-one__arrow"><span
                                            class="fas fa-share-alt"></span></a>
                                </div>
                                <h3 class="team-one__title"><a href="team-details.html">Kevin Martin</a></h3>
                                <p class="team-one__sub-title">Consultant</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="/frontend/images/team/team-1-2.jpg" alt="">
                                </div>
                                <div class="team-one__hover-content">
                                    <div class="team-one__hover-arrow-box">
                                        <a href="team-details.html" class="team-one__hover-arrow"><span
                                                class="fas fa-share-alt"></span></a>
                                        <ul class="list-unstyled team-one__social">
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <h3 class="team-one__hover-title"><a href="team-details.html">Jeesica Brown</a>
                                    </h3>
                                    <p class="team-one__hover-sub-title">Consultant</p>
                                    <p class="team-one__hover-text">There are many vartion of passages of available.
                                    </p>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow-box">
                                    <a href="team-details.html" class="team-one__arrow"><span
                                            class="fas fa-share-alt"></span></a>
                                </div>
                                <h3 class="team-one__title"><a href="team-details.html">Jeesica Brown</a></h3>
                                <p class="team-one__sub-title">Consultant</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="/frontend/images/team/team-1-3.jpg" alt="">
                                </div>
                                <div class="team-one__hover-content">
                                    <div class="team-one__hover-arrow-box">
                                        <a href="team-details.html" class="team-one__hover-arrow"><span
                                                class="fas fa-share-alt"></span></a>
                                        <ul class="list-unstyled team-one__social">
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <h3 class="team-one__hover-title"><a href="team-details.html">Mike Hardson</a>
                                    </h3>
                                    <p class="team-one__hover-sub-title">Consultant</p>
                                    <p class="team-one__hover-text">There are many vartion of passages of available.
                                    </p>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow-box">
                                    <a href="team-details.html" class="team-one__arrow"><span
                                            class="fas fa-share-alt"></span></a>
                                </div>
                                <h3 class="team-one__title"><a href="team-details.html">Mike Hardson</a></h3>
                                <p class="team-one__sub-title">Consultant</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Team One End-->

    <!--Counter One Start-->
    <section class="counter-one">
        <div class="counter-one__inner">
            <div class="counter-one__shadow"></div>
            <div class="counter-one__bg"
                 style="background-image: url(/frontend/images/backgrounds/counter-one-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="counter-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">fun facts</span>
                                </div>
                                <h2 class="section-title__title">Consultancy Funfacts
                                    <br> in Great <span>Numbers</span></h2>
                            </div>
                            <p class="counter-one__text">Leverage agile frameworks to provide a robust synopsis for
                                high level overviews. Iterative approaches to corporate strategy data foster to
                                collaborative thinking.</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="counter-one__right">
                            <ul class="counter-one__count-box list-unstyled">
                                <li>
                                    <div class="counter-one__icon">
                                        <span class="icon-checking"></span>
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="886" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Projects Completed</p>
                                </li>
                                <li>
                                    <div class="counter-one__icon">
                                        <span class="icon-recommend"></span>
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="600" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Satisfied Customers</p>
                                </li>
                                <li>
                                    <div class="counter-one__icon">
                                        <span class="icon-consulting"></span>
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="960" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Expert Consultants</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="counter-one__bottom">
            <div class="container">
                <div class="counter-one__bottom-inner">
                    <p class="counter-one__bottom-text">@lang('general.need-best') <a
                            href="{{ route('contact', app()->getLocale()) }}">@lang('general.send-request')</a></p>
                    <div class="counter-one__call-box">
                        <p>@lang('general.call') <a href="tel:00237699374564">+237 699374564</a></p>
                        <div class="counter-one__call-icon">
                            <span class="icon-telephone-1"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
