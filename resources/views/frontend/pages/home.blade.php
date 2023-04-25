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

    <!-- title page -->
    <section class="slider home">
        <div class="swiper-container mainslider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-item">
                        <div class="flat-slider">
                            <div class="img-slider">
                                <img class="img-item" src="/frontend/images/slider/slider-home1-1.jpg" alt=""><div class="overlay"></div>
                            </div>
                            <div class="container">
                                <div class="content">
                                    <div class="heading">
                                        <h1>The best success in <br> history is ours.</h1>
                                    </div>
                                    <div class="flat-bt-slider">
                                        <div class="sc-btn-top">
                                            <a href="contact.html" class="sc-button btn-1 btn-2"><span>Discover More
                                                        </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-item">
                        <div class="flat-slider">
                            <div class="img-slider">
                                <img class="img-item" src="/frontend/images/slider/slider-home1-2.jpg" alt=""><div class="overlay"></div>
                            </div>
                            <div class="container">
                                <div class="content">
                                    <div class="heading">
                                        <h1>The best success in <br> history is ours.</h1>
                                    </div>
                                    <div class="flat-bt-slider">
                                        <div class="sc-btn-top">
                                            <a href="contact.html" class="sc-button btn-1 btn-2"><span>Discover More
                                                        </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-item">
                        <div class="flat-slider">
                            <div class="img-slider">
                                <img class="img-item" src="/frontend/images/slider/slider-home1-3.jpg" alt=""><div class="overlay"></div>
                            </div>
                            <div class="container">
                                <div class="content">
                                    <div class="heading">
                                        <h1>The best success in <br> history is ours.</h1>
                                    </div>
                                    <div class="flat-bt-slider">
                                        <div class="sc-btn-top">
                                            <a href="contact.html" class="sc-button btn-1 btn-2"><span>Discover More
                                                        </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-custom-slider">
            <div class="swiper-button-next button-slide-custom-next"></div>
            <div class="swiper-button-prev button-slide-custom-prev"></div>
        </div>
    </section>

    <section class="tf-section2 flat-practice">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="heading-section center">
                        <h5 class="text-u text-color-4 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">What We Are Expart At</h5>
                        <h2 class="title-section wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Legal <span class="text-color-3">Practice</span> Areas</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="swiper-container carousel-1 show-boder ">
                        <div class="swiper-wrapper slider-style">
                            <div class="swiper-slide">
                                <div class="practice-box blog-box hover-img wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1600ms">
                                    <div class="box-img relative">
                                        <div class="media">
                                            <img class="img-item" src="/frontend/images/box-item/practice-1.jpg" alt="">
                                            <a href="practice-details.html" class="icon-practice absolute" ><img src="/frontend/images/icon/icon-practice.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="content flex-two">
                                        <div class="title-box flex-three">
                                            <h1>C</h1>
                                            <div class="inner">
                                                <p>Real Specialist</p>
                                                <h3><a href="practice-details.html">ar <span>Accidents Law.</span></a></h3>
                                            </div>
                                        </div>
                                        <div class="sc-btn-button">
                                            <a href="practice-details.html" class="sc-button btn-1"><span><i class="fal fa-long-arrow-right link-icon "></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="practice-box blog-box hover-img  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1800ms">
                                    <div class="box-img relative">
                                        <div class="media">
                                            <img class="img-item" src="/frontend/images/box-item/practice-2.jpg" alt="">
                                            <a href="practice-details.html" class="icon-practice absolute" ><img src="/frontend/images/icon/icon-practice.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="content flex-two">
                                        <div class="title-box flex-three">
                                            <h1>M</h1>
                                            <div class="inner">
                                                <p>Legal Advice</p>
                                                <h3><a href="practice-details.html">edical Lawyer.</a></h3>
                                            </div>
                                        </div>
                                        <div class="sc-btn-button">
                                            <a href="practice-details.html" class="sc-button btn-1"><span><i class="fal fa-long-arrow-right link-icon "></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="practice-box blog-box hover-img  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
                                    <div class="box-img relative">
                                        <div class="media">
                                            <img class="img-item" src="/frontend/images/box-item/practice-3.jpg" alt="">
                                            <a href="practice-details.html" class="icon-practice absolute" ><img src="/frontend/images/icon/icon-practice.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="content flex-two">
                                        <div class="title-box flex-three">
                                            <h1>W</h1>
                                            <div class="inner">
                                                <p>Tenant Dispute</p>
                                                <h3><a href="practice-details.html">orker Injuries Law.</a></h3>
                                            </div>
                                        </div>
                                        <div class="sc-btn-button">
                                            <a href="practice-details.html" class="sc-button btn-1"><span><i class="fal fa-long-arrow-right link-icon "></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="practice-box blog-box hover-img">
                                    <div class="box-img relative">
                                        <div class="media">
                                            <img class="img-item" src="/frontend/images/box-item/practice-1.jpg" alt="">
                                            <a href="practice-details.html" class="icon-practice absolute" ><img src="/frontend/images/icon/icon-practice.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="content flex-two">
                                        <div class="title-box flex-three">
                                            <h1>C</h1>
                                            <div class="inner">
                                                <p>Real Specialist</p>
                                                <h3><a href="practice-details.html">ar <span>Accidents Law.</span></a></h3>
                                            </div>
                                        </div>
                                        <div class="sc-btn-button">
                                            <a href="practice-details.html" class="sc-button btn-1"><span><i class="fal fa-long-arrow-right link-icon "></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="practice-box blog-box hover-img">
                                    <div class="box-img relative">
                                        <div class="media">
                                            <img class="img-item" src="/frontend/images/box-item/practice-2.jpg" alt="">
                                            <a href="practice-details.html" class="icon-practice absolute" ><img src="/frontend/images/icon/icon-practice.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="content flex-two">
                                        <div class="title-box flex-three">
                                            <h1>M</h1>
                                            <div class="inner">
                                                <p>Legal Advice</p>
                                                <h3><a href="practice-details.html">edical Lawyer.</a></h3>
                                            </div>
                                        </div>
                                        <div class="sc-btn-button">
                                            <a href="practice-details.html" class="sc-button btn-1"><span><i class="fal fa-long-arrow-right link-icon "></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination center"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- flat about-->
    <section class="flat-about">
        <div class="mark-a absolute">A</div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="image-wrapper">
                        <div class="media">
                            <img class="image-1" src="/frontend/images/box-item/about-1.jpg" alt="images">
                            <img class="image-2" src="/frontend/images/box-item/about-2.jpg" alt="images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="about-box">
                        <h2 class="tf-title">Lawlead Over <span class="text-color-3">20+ Years</span> Experience Helping Our Injured People. </h2>
                        <h4 class="text-color-3 text-t fw-6">Nam eu leo nec diam efficitur aliquet lacinia at tellus Locas.</h4>
                        <p class="text-t pl-2">Fusce eu eros nec felis venenatis fermentum sit amet eget turpis. Integer tempus massa ac arcu sollicitudin sollicitudin.
                            Vivamus neque urna, iaculis et orci id, euismod tempor arcu.</p>
                        <div class="signature flex-three">
                            <ul class="flex">
                                <li class="img-author"><img src="/frontend/images/box-item/about-3.jpg" alt="images">  </li>
                                <li class="img-author"><img src="/frontend/images/box-item/about-4.jpg" alt="images">  </li>
                                <li class="img-author"><img src="/frontend/images/box-item/about-5.jpg" alt="images">  </li>
                            </ul>
                            <div class="img-signature">
                                <img class="img-1" src="/frontend/images/box-item/about-6.png" alt="images">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- flat icon practice -->
    <section class="tf-section flat-icon-practice">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="wrapper-icon flex wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="box-icon flex-three">
                            <svg id="Layer_1" height="50" viewBox="0 0 48 48" width="50" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m.75 0a.75.75 0 0 0 -.75.75v46.5a.75.75 0 0 0 1.5 0v-46.5a.75.75 0 0 0 -.75-.75z"/><path d="m12.375 0a.75.75 0 0 0 -.75.75v46.5a.75.75 0 0 0 1.5 0v-46.5a.75.75 0 0 0 -.75-.75z"/><path d="m24 0a.75.75 0 0 0 -.75.75v46.5a.75.75 0 0 0 1.5 0v-46.5a.75.75 0 0 0 -.75-.75z"/><path d="m35.625 0a.75.75 0 0 0 -.75.75v46.5a.75.75 0 0 0 1.5 0v-46.5a.75.75 0 0 0 -.75-.75z"/><path d="m47.25 0a.75.75 0 0 0 -.75.75v46.5a.75.75 0 0 0 1.5 0v-46.5a.75.75 0 0 0 -.75-.75z"/><path d="m32.887 34.39h-6.016a.75.75 0 0 0 -.75.75v3.56a.75.75 0 0 0 .75.75h6.016a.75.75 0 0 0 .75-.75v-3.56a.75.75 0 0 0 -.75-.75zm-.75 3.559h-4.516v-2.059h4.516z"/><path d="m22.354 21.066a6.469 6.469 0 0 1 -1.917-1.605l-.007-.01a14.16 14.16 0 0 1 -2.984-8.628c0-4.516 2.538-6.019 4.668-6.484a.75.75 0 0 0 -.32-1.466c-3.716.813-5.848 3.71-5.848 7.95a15.992 15.992 0 0 0 3.205 9.439v2.093l-1.463 1.32-3.541 1.864a.75.75 0 1 0 .7 1.327l2.213-1.166-.96 4.564a.751.751 0 0 0 .92.881l2.05-.525 2.368 1.947a.75.75 0 1 0 .954-1.158l-2.659-2.189a.747.747 0 0 0 -.662-.147l-1.252.32.986-4.705.779-.7 1.632 4.384a.75.75 0 0 0 1.406-.523l-1.971-5.293v-.815a6.793 6.793 0 0 0 1.014.66.75.75 0 1 0 .689-1.332z"/><path d="m10.419 43.546-3.252-.365 1.086-11.657a2.381 2.381 0 0 1 1.272-1.9l.9-.468a.75.75 0 1 0 -.69-1.332l-.906.469a3.878 3.878 0 0 0 -2.074 3.089l-1.155 12.393a.749.749 0 0 0 .664.814l.341.039-.286 2.538a.749.749 0 0 0 .665.834.615.615 0 0 0 .085 0 .749.749 0 0 0 .744-.666l.287-2.534 2.152.241a.606.606 0 0 0 .085 0 .75.75 0 0 0 .083-1.495z"/><path d="m39.164 28.3-.9-.468a.75.75 0 1 0 -.69 1.332l.9.467a2.382 2.382 0 0 1 1.274 1.9l1.086 11.657-3.252.365a.75.75 0 0 0 .083 1.495.606.606 0 0 0 .085 0l2.15-.248.286 2.539a.749.749 0 0 0 .744.666.615.615 0 0 0 .086-.005.749.749 0 0 0 .661-.829l-.286-2.538.341-.039a.749.749 0 0 0 .664-.814l-1.155-12.39a3.877 3.877 0 0 0 -2.077-3.09z"/><path d="m33.853 25.539-3.541-1.864-1.463-1.32v-2.093a15.992 15.992 0 0 0 3.205-9.439c0-4.24-2.132-7.137-5.848-7.95a.759.759 0 0 0 -.893.573.751.751 0 0 0 .573.893c2.13.465 4.668 1.968 4.668 6.484a14.16 14.16 0 0 1 -2.984 8.628l-.007.01a6.469 6.469 0 0 1 -1.917 1.605.75.75 0 1 0 .689 1.332 6.793 6.793 0 0 0 1.014-.66v.815l-1.971 5.293a.75.75 0 0 0 1.406.523l1.632-4.384.779.7.986 4.705-1.252-.32a.752.752 0 0 0 -.662.147l-2.667 2.192a.75.75 0 0 0 .954 1.158l2.368-1.947 2.05.525a.751.751 0 0 0 .92-.881l-.952-4.564 2.213 1.165a.75.75 0 1 0 .7-1.327z"/></svg>
                        </div>
                        <div class="content flex-two">
                            <a href="practice-details-sidebar.html"><h3>Criminal Law</h3></a>
                            <a href="practice-details-sidebar.html" class="button-icon"><i class="fal fa-long-arrow-right link-icon"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="wrapper-icon active flex  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="box-icon flex-three">
                            <svg height="50" viewBox="0 0 512 512" width="50pt" xmlns="http://www.w3.org/2000/svg"><path d="m499.546875 403.972656h-26.546875v-3.007812c0-6.613282-5.378906-11.992188-11.992188-11.992188h-110.597656c26.460938-15.105468 48.539063-36.289062 64.683594-61.386718l17.574219 6.453124c3.972656 1.457032 8.042969 2.148438 12.046875 2.148438 14.289062 0 27.746094-8.804688 32.949218-22.980469l6.132813-16.699219c.683594-1.867187.601563-3.929687-.234375-5.734374-.835938-1.804688-2.355469-3.203126-4.222656-3.890626l-19.308594-7.085937c-7.4375-2.734375-15.402344-2.863281-22.824219-.457031 2.460938-8.316406 4.355469-16.847656 5.648438-25.546875h17.582031c19.332031 0 35.0625-15.726563 35.0625-35.0625v-17.789063c0-4.140625-3.359375-7.5-7.5-7.5h-20.566406c-9.246094 0-17.664063 3.605469-23.9375 9.476563-1.46875-12.027344-4.09375-23.800781-7.820313-35.199219h11.804688c19.332031 0 35.0625-15.730469 35.0625-35.0625v-17.789062c0-4.144532-3.359375-7.5-7.5-7.5h-20.566407c-16.28125 0-30.003906 11.152343-33.929687 26.21875-3.890625-6.820313-8.222656-13.4375-13-19.816407-3.535156-4.71875-7.300781-9.261719-11.265625-13.617187h3.996094c19.332031 0 35.0625-15.730469 35.0625-35.0625v-17.789063c0-4.144531-3.359375-7.5-7.5-7.5h-20.566406c-19.332032 0-35.0625 15.726563-35.0625 35.0625v3.066407c-9.550782-7.402344-19.796876-13.886719-30.5625-19.332032 13.992187-4.605468 24.125-17.792968 24.125-33.308594v-17.789062c0-4.140625-3.355469-7.5-7.5-7.5h-20.5625c-19.335938 0-35.0625 15.730469-35.0625 35.0625v17.789062c0 1.140626.261718 2.214844.714843 3.183594.652344 2.398438 2.472657 4.425782 5.023438 5.210938 34.457031 10.648437 65.414062 32.496094 87.160156 61.515625 22.480469 30.003906 34.363281 65.738281 34.363281 103.34375 0 73.390625-46.378906 138.683593-115.53125 162.867187h-7.878906c-21.40625 0-40.101562 11.765625-50 29.160156-9.898438-17.394531-28.59375-29.160156-50-29.160156h-8.875c-69.152344-24.183594-115.535156-89.476562-115.535156-162.867187 0-37.605469 11.882812-73.339844 34.367187-103.34375 21.746094-29.019531 52.699219-50.867188 87.160157-61.515625 2.550781-.785156 4.371093-2.8125 5.023437-5.210938.453125-.96875.714844-2.042968.714844-3.183594v-17.789062c0-19.332031-15.726563-35.0625-35.0625-35.0625h-20.566407c-4.140624 0-7.5 3.359375-7.5 7.5v17.789062c0 15.515626 10.132813 28.699219 24.128907 33.308594-10.765625 5.445313-21.011719 11.929688-30.566407 19.332032v-3.066407c0-19.335937-15.726562-35.0625-35.058593-35.0625h-20.570313c-4.140625 0-7.5 3.355469-7.5 7.5v17.789063c0 19.332031 15.730469 35.0625 35.0625 35.0625h3.996094c-3.964844 4.355468-7.730469 8.898437-11.265625 13.617187-4.777344 6.378907-9.109375 12.996094-12.996094 19.816407-3.929687-15.066407-17.652343-26.21875-33.933593-26.21875h-20.566407c-4.140625 0-7.5 3.355468-7.5 7.5v17.789062c0 19.332031 15.730469 35.0625 35.0625 35.0625h11.804688c-3.726563 11.398438-6.347657 23.171875-7.820313 35.199219-6.273437-5.871094-14.6875-9.476563-23.9375-9.476563h-20.566406c-4.140625 0-7.5 3.359375-7.5 7.5v17.789063c0 19.335937 15.730469 35.0625 35.0625 35.0625h17.582031c1.292969 8.699219 3.191407 17.230469 5.648438 25.546875-7.421875-2.40625-15.386719-2.277344-22.824219.457031l-19.308594 7.085937c-1.867187.6875-3.386718 2.085938-4.222656 3.890626-.835938 1.804687-.917969 3.867187-.234375 5.734374l6.132813 16.699219c5.203124 14.179688 18.65625 22.980469 32.949218 22.980469 4.003906 0 8.074219-.691406 12.046875-2.148438l17.574219-6.453124c16.144531 25.097656 38.222656 46.28125 64.683594 61.386718h-109.597656c-6.613282 0-11.992188 5.378906-11.992188 11.992188v3.007812h-27.546875c-6.867187 0-12.453125 5.585938-12.453125 12.453125v81.714844c0 7.625 6.207031 13.832031 13.835938 13.832031h484.328124c7.628907 0 13.835938-6.207031 13.835938-13.832031v-81.714844c0-6.867187-5.585938-12.453125-12.453125-12.453125zm-44.683594-110.097656 12.265625 4.503906-3.542968 9.660156c-3.816407 10.382813-15.363282 15.730469-25.75 11.917969l-12.265626-4.503906 3.546876-9.65625c1.847656-5.03125 5.542968-9.042969 10.40625-11.292969 4.859374-2.253906 10.308593-2.476562 15.339843-.628906zm-20.449219-151.449219c0-11.0625 9-20.0625 20.0625-20.0625h13.066407v10.289063c0 11.0625-9 20.0625-20.0625 20.0625h-13.066407zm-47.203124-67.566406c0-11.058594 9-20.058594 20.0625-20.058594h13.066406v10.289063c0 11.0625-9 20.0625-20.0625 20.0625h-13.066406zm-69.566407-39.796875c0-11.0625 9-20.0625 20.0625-20.0625h13.066407v10.289062c0 11.0625-9 20.0625-20.0625 20.0625h-13.066407zm129.726563 193.441406c0-11.0625 9-20.0625 20.0625-20.0625h13.066406v10.289063c0 11.0625-9 20.0625-20.0625 20.0625h-13.066406zm-286.144532-203.214844v-10.289062h13.066407c11.0625 0 20.0625 9 20.0625 20.0625v10.289062h-13.066407c-11.0625 0-20.0625-9-20.0625-20.0625zm-69.566406 39.800782v-10.289063h13.066406c11.0625 0 20.0625 9 20.0625 20.058594v10.292969h-13.066406c-11.0625 0-20.0625-9-20.0625-20.0625zm-47.203125 67.5625v-10.289063h13.066407c11.0625 0 20.0625 9 20.0625 20.0625v10.289063h-13.066407c-11.0625 0-20.0625-9-20.0625-20.0625zm29.707031 187.304687c-10.382812 3.8125-21.933593-1.535156-25.746093-11.917969l-3.546875-9.660156 12.265625-4.503906c5.03125-1.847656 10.476562-1.625 15.34375.628906 4.863281 2.25 8.554687 6.261719 10.402343 11.292969l3.546876 9.65625zm-9.535156-81.164062h-13.066406c-11.0625 0-20.0625-9-20.0625-20.0625v-10.289063h13.066406c11.0625 0 20.0625 9 20.0625 20.0625zm241.871094 165.179687h151.5v15h-151.5c-16.203125 0-30.855469 6.75-41.316406 17.574219 4.484375-18.660156 21.300781-32.574219 41.316406-32.574219zm151.5 30v13h-151.5c-15.808594 0-30.148438 6.417969-40.554688 16.78125 5.421876-17.242187 21.550782-29.78125 40.554688-29.78125zm-403-30h151.5c20.015625 0 36.832031 13.914063 41.316406 32.574219-10.460937-10.824219-25.113281-17.574219-41.316406-17.574219h-13c-4.140625 0-7.5 3.359375-7.5 7.5 0 4.144532 3.359375 7.5 7.5 7.5h13c19.003906 0 35.132812 12.539063 40.554688 29.78125-10.40625-10.363281-24.746094-16.78125-40.554688-16.78125h-151.5v-13h108.5c4.140625 0 7.5-3.355468 7.5-7.5 0-4.140625-3.359375-7.5-7.5-7.5h-108.5zm-40 15h25v31.011719c0 6.609375 5.378906 11.988281 11.992188 11.988281h154.507812c20.875 0 38.269531 15.132813 41.824219 35h-233.324219zm482 78h-232.324219c3.554688-19.867187 20.949219-35 41.824219-35h154.507812c6.613282 0 11.992188-5.378906 11.992188-11.988281v-31.011719h24zm0 0"/><path d="m111 224.472656c0 80.230469 65.269531 145.5 145.5 145.5s145.5-65.269531 145.5-145.5c0-80.226562-65.269531-145.5-145.5-145.5s-145.5 65.273438-145.5 145.5zm15.222656 7.5h44.890625c1.035157 35.332032 9.355469 68.390625 23.703125 93.773438 4.378906 7.746094 9.1875 14.539062 14.339844 20.335937-46.40625-18.128906-79.972656-62.089843-82.933594-114.109375zm137.777344-137.234375c15.261719 3.085938 29.644531 15.535157 41.125 35.84375 13.109375 23.195313 20.734375 53.636719 21.75 86.390625h-62.875zm62.875 137.234375c-1.015625 32.753906-8.640625 63.199219-21.75 86.390625-11.480469 20.308594-25.863281 32.757813-41.125 35.847657v-122.238282zm-77.875 122.238282c-15.261719-3.089844-29.644531-15.539063-41.125-35.847657-13.109375-23.195312-20.734375-53.636719-21.75-86.390625h62.875zm54.847656-8.128907c5.148438-5.796875 9.957032-12.589843 14.335938-20.335937 14.347656-25.382813 22.667968-58.441406 23.703125-93.773438h44.894531c-2.964844 52.019532-36.53125 95.980469-82.933594 114.109375zm82.929688-129.109375h-44.890625c-1.035157-35.328125-9.355469-68.386718-23.703125-93.769531-4.378906-7.746094-9.1875-14.539063-14.339844-20.335937 46.40625 18.128906 79.972656 62.085937 82.933594 114.105468zm-177.417969-114.183594c-11.734375 13.074219-21.558594 31.082032-28.367187 52.917969-1.230469 3.953125.976562 8.160157 4.929687 9.390625 3.957031 1.234375 8.160156-.972656 9.394531-4.925781 11.441406-36.722656 31.554688-60.917969 53.6875-65.425781v122.226562h-62.875c.296875-9.445312 1.144532-18.796875 2.554688-27.886718.632812-4.09375-2.171875-7.925782-6.265625-8.558594-4.097657-.632813-7.925781 2.171875-8.558594 6.265625-1.523437 9.84375-2.433594 19.964843-2.738281 30.179687h-44.898438c2.964844-52.09375 36.625-96.105468 83.136719-114.183594zm0 0"/></svg>
                        </div>
                        <div class="content flex-two">
                            <a href="practice-details-sidebar.html"><h3>Business Law</h3></a>
                            <a href="practice-details-sidebar.html" class="button-icon"><i class="fal fa-long-arrow-right link-icon "></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="wrapper-icon flex wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="box-icon flex-three">
                            <svg height="50" viewBox="0 0 16.933333 16.933334" width="50" xmlns="http://www.w3.org/2000/svg"><g transform="translate(0 -280.067)"><path id="path3912" d="m3.9692674 280.59632c-.7283211 0-1.3224007.59356-1.322398 1.32189v12.17238c0 .72832.5940769 1.32188 1.322398 1.32188.3606959.008.3606959-.53717 0-.52916-.4443147 0-.7953004-.3484-.7953004-.79272 0-.44431.350983-.7953.7953004-.7953 3.2631381.00053 6.5243656 0 9.7885516 0v1.32447c0 .15115-.112392.26354-.263551.26355h-5.2926992c-.360696-.008-.360696.53717 0 .52916h5.2926992c.43516 0 .793234-.35755.793234-.79271v-1.58802-11.6427c0-.43516-.358072-.79272-.793234-.79272zm0 .52917h9.5250006c.151156 0 .263551.11239.263551.26355v11.37708h-9.7885516c-.2995268 0-.5731933.10455-.7953004.27389v-11.1218c0-.44432.3509857-.79272.7953004-.79272zm4.4968844 2.63963c-.146177.002-.262614.12151-.260966.26768v.54157c-.8918998.0585-1.1834971.50709-1.8515674.51677-.2459752 0-.5106988-.0975-.6082321-.18759-.2708699-.25006-.6086819.14743-.3725863.37517.1745351.16837.4446958.26312.5927302.29663l-.9131247 2.05517c-.014579.0339-.021616.0706-.021193.10749 0 0-.0037.31878.1601972.64647.163838.32769.5063226.67541 1.1616876.67541.6553623 0 .9983576-.34772 1.1622034-.67541.1638511-.32769.1596791-.64647.1596791-.64647.000529-.0369-.0066-.0736-.02119-.10749l-.9126039-2.05362c.5410279-.0859.8588059-.4844 1.7249589-.48576v.002c.869511 0 1.18714.39971 1.7290912.48576l-.9126052 2.05362c-.01458.0339-.02172.0706-.02119.10749 0 0-.0041.31878.159678.64647.163846.32769.506842.67541 1.1622032.67541.655365 0 .99785-.34772 1.161685-.67541.163907-.32769.160198-.64647.160198-.64647.000529-.0369-.0066-.0736-.02119-.10749l-.91313-2.05517c.148029-.0335.418195-.12826.59273-.29662.236093-.22775-.101717-.62524-.372586-.37517-.09754.09-.362257.18758-.608232.18758-.6680702-.01-.9596682-.4583-1.8515672-.51676v-.54157c.0016-.14622-.114792-.26608-.260967-.26768v-.001c-.0016-.00001-.0027-.001-.0041-.001zm.0031 1.85157c-.132323 0-.264067.0882-.264067.26458v3.7083h-1.0717732c-.3572139.0243-.3329199.53791.012409.52917.8837952-.00015 1.7609952.002 2.6448012.002.3452972.009.3695942-.5049.01241-.52917h-1.071779v-3.7083c0-.17503-.129715-.26267-.260967-.26407v-.003zm-2.1161502.39067.6500892 1.46451h-1.2996669zm4.2302324.002.649573 1.46451h-1.2996662zm-4.9764395 1.99212h1.49293s-.09326.52917-.746207.52917c-.6529467 0-.746723-.52917-.746723-.52917zm4.2297143.002h1.4929322s-.09378.52917-.746723.52917c-.6529522 0-.7462092-.52917-.7462092-.52917zm-5.8673422 5.82083c-.3531209 0-.3531209.52968 0 .52968h2.909906v1.21492l-.6071976-.60772c-.1032034-.10256-.2699014-.10256-.3731048 0l-.6077135.60772v-.4222c0-.35286-.5291667-.35286-.5291667 0v1.05885c-.00159.23759.2864776.35686.4532021.18759l.871265-.87127.8707464.87127c.1668648.16589.4510008.0477.4511358-.18759v-1.85166h5.5567657c.353121 0 .353121-.52968 0-.52968z" /></g></svg>
                        </div>
                        <div class="content flex-two">
                            <a href="practice-details-sidebar.html"><h3>Education Law</h3></a>
                            <a href="practice-details-sidebar.html" class="button-icon"><i class="fal fa-long-arrow-right link-icon "></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="wrapper-icon flex wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1700ms">
                        <div class="box-icon flex-three">
                            <svg enable-background="new 0 0 480 480" height="50" viewBox="0 0 480 480" width="50" xmlns="http://www.w3.org/2000/svg"><path d="m16.294 398.91v58c0 4.418-3.582 8-8 8s-8-3.582-8-8v-58c0-4.418 3.582-8 8-8s8 3.582 8 8zm115.851-134.364c-.103 4.353-3.664 7.812-7.994 7.812-15.265 0-31.848-8.653-40.877-24.205h-13.692c-29.383 0-53.288 23.905-53.288 53.289v54.09h45.706v-11.622c0-4.418 3.582-8 8-8s8 3.582 8 8v113c0 4.418-3.582 8-8 8s-8-3.582-8-8v-85.379h-54c-5.222 0-9.126-4.964-7.706-10.123v-59.967c0-38.206 31.082-69.289 69.288-69.289h12.336l5.85-17.659c-21.475-12.869-33.847-35.734-33.847-59.559 0-12.82 0-76.251 0-89.012 0-28.029 22.804-50.833 50.833-50.833h109.536c4.418 0 8 3.582 8 8v23.123c0 38.598-31.402 70-70 70h-82.369v38.722c0 30.427 25.901 55.904 58.139 53.074 27.162-2.389 48.438-25.952 48.438-53.644v-15.509c0-4.418 3.582-8 8-8s8 3.582 8 8v15.509c0 23.228-11.424 44.727-30.12 57.681l7.591 25.198c1.543 5.122-2.292 10.31-7.663 10.31-3.438 0-6.614-2.233-7.657-5.694l-6.685-22.192c-14.607 5.613-30.845 6.003-45.522 1.41l-5.946 17.95c5.486 10.347 16.128 17.057 27.84 17.332 4.416.105 7.912 3.77 7.809 8.187zm-62.224-164.333h82.369c29.775 0 54-24.225 54-54v-15.123h-101.536c-19.207 0-34.833 15.626-34.833 34.833zm366.593 136.704c-4.102-1.648-8.758.336-10.408 4.436-1.649 4.099.337 8.759 4.436 10.408 20.325 8.178 33.459 27.62 33.459 49.531v18.618c0 4.418 3.582 8 8 8s8-3.582 8-8v-18.618c-.001-28.477-17.07-53.746-43.487-64.375zm-42.307 10.41c-3.438 0-6.614-2.233-7.657-5.694l-6.687-22.199c-14.033 5.373-30.258 6.176-45.593 1.351l-5.968 18.017c5.495 10.363 16.154 17.086 27.887 17.361 4.417.104 7.913 3.77 7.81 8.187-.103 4.353-3.664 7.812-7.994 7.812-17.32 0-35.732-10.962-43.67-29.718-.757-1.788-.838-3.791-.227-5.634l7.496-22.627c-20.941-12.581-33.908-35.382-33.908-60.152v-30.87c0-4.56 3.832-8.136 8.099-7.999 34.211.406 68.658-4.715 102.07-15.932 13.858-4.651 28.563 5.501 28.563 20.495v34.875c0 22.002-10.598 43.751-30.142 57.237l7.585 25.181c1.543 5.122-2.292 10.309-7.664 10.309zm14.22-92.727v-34.875c0-1.831-.851-3.493-2.334-4.561-3.738-2.688-4.201-.17-27.076 5.741-25.134 6.491-51.108 9.934-77.321 10.255v22.87c0 27.731 21.308 51.329 48.509 53.722 32.287 2.844 58.222-22.7 58.222-53.152zm-131.065 229.147 7.259 22.73c1.344 4.209-.979 8.71-5.188 10.055-4.215 1.344-8.712-.982-10.055-5.188l-6.707-21c-14.788 4.772-30.61 4.729-45.226.04l-5.882 18.066c5.27 10.553 15.838 17.419 27.636 17.714 4.417.11 7.908 3.78 7.797 8.197-.108 4.349-3.668 7.8-7.993 7.8-15.381 0-32.285-8.881-41.084-25.251h-15.919c-17.645 0-32 14.355-32 32v8c0 4.418-3.582 8-8 8s-8-3.582-8-8v-8c0-26.467 21.533-48 48-48h15.191l5.566-17.096c-21.962-12.848-36.757-36.674-36.757-63.904 0-47.823 44.947-83.275 91.569-71.875v-132.873c0-54.932 44.69-99.622 99.623-99.622 54.932 0 99.622 44.69 99.622 99.622v82.148c0 4.418-3.582 8-8 8s-8-3.582-8-8v-82.148c0-46.109-37.513-83.622-83.622-83.622-46.11 0-83.623 37.513-83.623 83.622v138.834c52.096 26.64 54.267 100.095 3.793 129.751zm20.638-63.837c0-31.981-26.019-58-58-58s-58 26.019-58 58 26.019 58 58 58 58-26.018 58-58zm21.706 86.179c-3.942-2.002-8.756-.427-10.755 3.511-2.001 3.939-.429 8.755 3.511 10.755 10.819 5.493 17.538 16.435 17.538 28.555v8c0 4.418 3.582 8 8 8s8-3.582 8-8v-8c0-18.177-10.075-34.586-26.294-42.821zm152.294-50.558h-54v-11.621c0-4.418-3.582-8-8-8s-8 3.582-8 8v113c0 4.418 3.582 8 8 8s8-3.582 8-8v-85.379h46v85.379c0 4.418 3.582 8 8 8s8-3.582 8-8v-93.379c0-4.418-3.582-8-8-8z"/></svg>
                        </div>
                        <div class="content flex-two">
                            <a href="practice-details-sidebar.html"><h3>Family Law</h3></a>
                            <a href="practice-details-sidebar.html" class="button-icon"><i class="fal fa-long-arrow-right link-icon "></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="wrapper-icon flex wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1700ms">
                        <div class="box-icon flex-three">
                            <svg height="50" viewBox="0 0 32 32" width="50" xmlns="http://www.w3.org/2000/svg"><g id="Layer_10" data-name="Layer 10"><path d="m29.65 28.08a2.34 2.34 0 0 0 1.84-2.29 2.32 2.32 0 0 0 -.58-1.53 1.85 1.85 0 0 0 .11-.63 1.87 1.87 0 1 0 -3.75 0 1.85 1.85 0 0 0 .11.63 2.31 2.31 0 0 0 -.58 1.53 2.34 2.34 0 0 0 1.84 2.29v2.17h-2.15v-20.72l-12.49-5.11v4.7l-11.55-4.7v25.82h-1.95v1h30.5v-1h-1.35zm-1.84-2.29a1.33 1.33 0 0 1 .5-1l.35-.28-.24-.38a.87.87 0 1 1 1.47 0l-.24.38.34.28a1.34 1.34 0 1 1 -2.18 1zm-12.81-19.88 10.52 4.29v18.1h-10.52zm-1 5.8h-1.6v1h1.6v2.48h-1.6v1h1.6v2.48h-1.6v1h1.6v2.9h-1.6v1h1.6v2.75h-4.75v-.75h1.49v-1h-1.49v-2.65h1.49v-1h-1.49v-2.65h1.49v-1h-1.49v-2.64h1.49v-1h-1.49v-2.63h1.49v-1h-1.49v-1.72l4.75 1.93zm-6.8 15.6v2.93h-1.11v-2.92zm1 0h1.05v2.93h-1.08zm2.08 0h1.08v2.93h-1.11zm-2-19.45v18.46h-4.83v-20.41zm-4.83 19.46h1.64v2.93h-1.64zm8.88 2.93v-2.93h1.67v2.93zm2.64 0v-.94h10.52v.94z"/><path d="m4.47 12.9h1.78v1h-1.78z"/><path d="m4.47 15.19h1.78v1h-1.78z"/><path d="m4.47 17.48h1.78v1h-1.78z"/><path d="m4.47 19.77h1.78v1h-1.78z"/><path d="m4.47 22.06h1.78v1h-1.78z"/><path d="m21.88 12.9h1.78v1h-1.78z"/><path d="m21.88 15.19h1.78v1h-1.78z"/><path d="m21.88 17.48h1.78v1h-1.78z"/><path d="m21.88 19.77h1.78v1h-1.78z"/><path d="m21.88 22.06h1.78v1h-1.78z"/><path d="m21.88 24.35h1.78v1h-1.78z"/><path d="m16.8 12.9h1.78v1h-1.78z"/><path d="m16.8 15.19h1.78v1h-1.78z"/><path d="m16.8 17.48h1.78v1h-1.78z"/><path d="m16.8 19.77h1.78v1h-1.78z"/><path d="m16.8 22.06h1.78v1h-1.78z"/><path d="m16.8 24.35h1.78v1h-1.78z"/><path d="m4.47 24.35h1.78v1h-1.78z"/></g></svg>
                        </div>
                        <div class="content flex-two">
                            <a href="practice-details-sidebar.html"><h3>Real Estate Law</h3></a>
                            <a href="practice-details-sidebar.html" class="button-icon"><i class="fal fa-long-arrow-right link-icon "></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="wrapper-icon flex wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1700ms">
                        <div class="box-icon flex-three">
                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 64 64" width="50" height="50"><path d="M20,36A11,11,0,1,0,31,47,11,11,0,0,0,20,36Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,20,56Z"/><path d="M51,50a4,4,0,1,0,4,4A4,4,0,0,0,51,50Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,51,56Z"/><path d="M18,27.5v4.65A15,15,0,1,0,29,59h15.8A8,8,0,0,0,59,54a7.87,7.87,0,0,0-1-3.86v-12A4.18,4.18,0,0,0,53.82,34H52V27.5a2.51,2.51,0,0,0-1.91-2.42l1.68-1.22A4.34,4.34,0,0,0,47,16.64l-6.1,3.67a1.08,1.08,0,0,1-1.32-.17L38,18.57a8.78,8.78,0,0,0-15,6.21V25H21V18.46a4.47,4.47,0,0,0-3.12-4.25A3,3,0,0,0,15,12H8a3,3,0,0,0,0,6h7a3,3,0,0,0,2.7-1.71A2.45,2.45,0,0,1,19,18.46v7.05A2.51,2.51,0,0,0,18,27.5ZM15,16H8a1,1,0,0,1,0-2h7a1,1,0,0,1,0,2ZM7,47A13,13,0,1,1,20,60,13,13,0,0,1,7,47ZM31.15,57A15,15,0,0,0,20,32V27.5a.5.5,0,0,1,.5-.5h29a.5.5,0,0,1,.5.5V46.07A8,8,0,0,0,43,54a7.9,7.9,0,0,0,.59,3ZM51,60a6,6,0,1,1,6-6A6,6,0,0,1,51,60Zm2.82-24A2.19,2.19,0,0,1,56,38.18v9.58a8,8,0,0,0-4-1.69V36ZM25,24.78A6.77,6.77,0,0,1,36.57,20l1.57,1.57a3.1,3.1,0,0,0,3.77.47L48,18.36a2.34,2.34,0,0,1,3,.53,2.38,2.38,0,0,1,.51,1.46,2.3,2.3,0,0,1-1,1.89L46.79,25H25Z"/><path d="M38,8a6,6,0,1,0-6,6A6,6,0,0,0,38,8ZM28,8a4,4,0,1,1,4,4A4,4,0,0,1,28,8Z"/></svg>
                        </div>
                        <div class="content flex-two">
                            <a href="practice-details-sidebar.html"><h3>Personal Injury</h3></a>
                            <a href="practice-details-sidebar.html" class="button-icon"><i class="fal fa-long-arrow-right link-icon "></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="wrapper-icon flex wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1800ms">
                        <div class="box-icon flex-three">
                            <svg enable-background="new 0 0 508.115 508.115" height="50" viewBox="0 0 508.115 508.115" width="50" xmlns="http://www.w3.org/2000/svg"><g><path d="m408.771 53.508c-3.255-2.562-7.971-2-10.532 1.256s-1.999 7.971 1.256 10.532c44.283 34.847 73.936 83.19 85.048 136.979-12.36-12.416-29.458-20.11-48.32-20.11-22.162 0-41.886 10.625-54.357 27.042-1.575-23.041-5.349-50.594-14.409-78.766-15.683-48.768-43.181-86.761-81.931-113.33 30.348 4.081 59.693 14.032 86.215 29.375 3.585 2.074 8.173.849 10.248-2.737 2.074-3.585.849-8.173-2.737-10.248-37.887-21.917-81.179-33.501-125.194-33.501-66.878 0-129.753 26.044-177.045 73.335-47.291 47.292-73.335 110.167-73.335 177.045 0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5c0-29.342 23.876-53.214 53.225-53.214 29.343 0 53.215 23.872 53.215 53.214 0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5c0-29.342 23.877-53.214 53.225-53.214 15.796 0 29.999 6.926 39.754 17.891v233.857c0 8.738-7.104 15.847-15.847 15.847-8.732 0-15.836-7.109-15.836-15.847v-6.634c0-27.105-41.922-27.62-41.922-.355v8.426c0 31.851 25.913 57.764 57.764 57.764s57.763-25.913 57.763-57.764v-235.291c9.757-10.968 23.964-17.894 39.765-17.894 29.342 0 53.214 23.872 53.214 53.214 0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5c0-29.342 23.877-53.214 53.226-53.214 29.342 0 53.214 23.872 53.214 53.214 0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5c0-77.272-34.87-149.028-95.667-196.872zm-160.674 201.41c1.37 1.797 3.527 2.961 5.961 2.961s4.591-1.165 5.961-2.961v155.277h-11.922zm-54.754-72.752c-20.701 0-39.277 9.269-51.8 23.871 1.523-19.228 4.675-41.34 11.215-63.874 1.155-3.978-1.134-8.139-5.112-9.293-3.978-1.155-8.139 1.134-9.293 5.112-7.393 25.473-10.655 50.254-12.095 71.234-12.468-16.422-32.192-27.05-54.355-27.05-18.837 0-35.915 7.671-48.272 20.055 20.191-96.729 99.941-171.856 199.001-185.13-31.282 21.459-55.306 50.424-71.627 86.439-1.709 3.773-.037 8.217 3.736 9.927 1.004.455 2.056.67 3.091.67 2.854 0 5.581-1.638 6.836-4.406 17.734-39.136 45.253-69.302 81.89-89.833v187.832c-12.328-16.164-33.093-25.554-53.215-25.554zm66.676 268.186c0 23.58-19.184 42.764-42.764 42.764s-42.763-19.184-42.763-42.764v-8.426c0-7.849 11.922-7.665 11.922.355v6.634c0 17.009 13.833 30.847 30.847 30.847 17.003 0 30.836-13.838 30.836-30.847v-23.719h11.922zm54.764-268.186c-20.112 0-40.9 9.39-53.226 25.552v-187.841c81.426 45.567 100.558 128.509 105.054 186.204-12.52-14.628-31.109-23.915-51.828-23.915z"/><path d="m96.806 395.057c4.142 0 7.5-3.358 7.5-7.5v-6.163c11.025-2.273 20.811-11.716 20.222-23.54-.579-11.614-10.341-18.067-20.222-21.807v-14.972c3.456 1.34 5.779 3.163 5.902 3.262 3.17 2.631 7.875 2.212 10.53-.946 2.665-3.171 2.255-7.902-.916-10.567-.384-.323-6.54-5.4-15.517-7.384v-6.318c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v6.595c-9.093 2.454-16.204 10.002-16.647 19.613-.529 11.452 7.295 17.022 16.647 20.9v19.005c-2.785-1.165-5.266-2.862-7.194-4.99-2.781-3.069-7.524-3.303-10.594-.521-3.069 2.782-3.303 7.524-.521 10.594 4.708 5.196 11.207 8.897 18.309 10.619v6.622c.001 4.14 3.359 7.498 7.501 7.498zm12.671-35.369c-.469 2.631-2.895 4.887-5.171 5.998 0-4.46 0-8.919 0-13.379 2.532 1.376 5.772 4.018 5.171 7.381zm-20.212-29.778c-2.536-2.003-2.018-5.617.041-7.649 0 1.077-.513 7.442-.041 7.649z"/><path d="m156.04 381.74c-3.215-2.611-7.94-2.122-10.55 1.092-11.973 14.739-29.718 23.192-48.684 23.192-34.565 0-62.686-28.121-62.686-62.686s28.121-62.686 62.686-62.686 62.686 28.121 62.686 62.686c0 3.282-.255 6.577-.759 9.793-.641 4.092 2.157 7.929 6.249 8.57 4.091.639 7.929-2.157 8.57-6.249.624-3.982.94-8.058.94-12.114 0-42.836-34.85-77.686-77.686-77.686s-77.686 34.85-77.686 77.686 34.85 77.686 77.686 77.686c23.504 0 45.492-10.473 60.326-28.734 2.612-3.215 2.122-7.938-1.092-10.55z"/><path d="m428.649 275.09h-61.568c-16.485 0-29.896 13.411-29.896 29.896v76.706c0 16.485 13.412 29.896 29.896 29.896h61.568c16.485 0 29.896-13.412 29.896-29.896v-76.706c0-16.485-13.411-29.896-29.896-29.896zm14.896 106.601c0 8.214-6.683 14.896-14.896 14.896h-61.568c-8.214 0-14.896-6.683-14.896-14.896v-76.706c0-8.214 6.683-14.896 14.896-14.896h61.568c8.214 0 14.896 6.682 14.896 14.896z"/><path d="m376.326 328.401h28.973c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-28.973c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z"/><path d="m418.799 343.899h-42.474c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h42.474c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"/></g></svg>
                        </div>
                        <div class="content flex-two">
                            <a href="practice-details-sidebar.html"><h3>Insurance Defense</h3></a>
                            <a href="practice-details-sidebar.html" class="button-icon"><i class="fal fa-long-arrow-right link-icon "></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="wrapper-icon flex wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1800ms">
                        <div class="box-icon flex-three">
                            <svg height="50" viewBox="0 0 48 48" width="50" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m13.829 25.612-.815-1.365a2.748 2.748 0 0 0 -3.77-.953 2.755 2.755 0 0 0 -.953 3.771l3.747 6.28a.752.752 0 0 0 1.028.26l3.436-2.05a.753.753 0 0 0 .259-1.03zm-.889 6.317-3.363-5.635a1.253 1.253 0 0 1 1.071-1.894 1.308 1.308 0 0 1 .309.039 1.245 1.245 0 0 1 .767.573l.432.723-.982.586a.75.75 0 0 0 .385 1.394.736.736 0 0 0 .383-.107l.982-.586 2.163 3.624z"/><path d="m8.428 39.275a.75.75 0 0 0 .674-.419l1.766-3.588a.75.75 0 0 0 -.342-1l-5.132-2.529-1.429-.7a2.75 2.75 0 1 0 -2.428 4.931l6.563 3.23a.735.735 0 0 0 .328.075zm-6.228-4.651a1.25 1.25 0 0 1 1.1-2.243l.757.372-.505 1.026a.749.749 0 0 0 .342 1 .735.735 0 0 0 .33.077.747.747 0 0 0 .673-.419l.5-1.026 3.787 1.863-1.1 2.243z"/><path d="m14.942 39.377a2.725 2.725 0 0 0 -2.105-.05l-6.819 2.639a.75.75 0 0 0 -.43.97l1.444 3.73a.75.75 0 0 0 .7.48.735.735 0 0 0 .268-.046l6.82-2.638a2.75 2.75 0 0 0 .12-5.08zm-.661 3.682-.786.3-.412-1.059a.75.75 0 0 0 -1.4.541l.417 1.059-3.94 1.526-.9-2.332 6.12-2.368a1.252 1.252 0 0 1 1.62.715 1.254 1.254 0 0 1 -.719 1.618z"/><path d="m45.268 23.75a4.726 4.726 0 0 1 .848-.425c.687-.294 1.281-.548 1.481-1.1.206-.571.355-.972.356-.974a.751.751 0 0 0 -.382-.939l-2.041-.969.326-.689a.749.749 0 0 0 -.356-1l-6.683-3.17a.755.755 0 0 0 -.65 0l-1.414.69-25.507-12.1-.118-.874a.748.748 0 0 0 -.421-.578l-3.269-1.55a.751.751 0 0 0 -1 .357l-3.861 8.14a.749.749 0 0 0 .356 1l8.493 4.03-.029.059a.75.75 0 0 0 .357 1l7.3 3.463-1.2 2.521a4.367 4.367 0 0 0 2.072 5.811l7.38 3.5-2.42 12.436a2.2 2.2 0 0 0 1.427 2.488l8.613 3.023a1.9 1.9 0 0 0 .62.1 1.879 1.879 0 0 0 1.854-1.592l3.2-20.817a.75.75 0 0 0 -1.483-.229l-.506 3.292-5.411-2.568a.755.755 0 0 0 -1.028.425 3.143 3.143 0 0 1 -1.181 1.365 7.02 7.02 0 0 1 -.789.418.75.75 0 0 0 .612 1.369 8.68 8.68 0 0 0 1-.531 4.815 4.815 0 0 0 1.386-1.383l5.17 2.453-2.453 15.979a.377.377 0 0 1 -.5.3l-8.612-3.018a.694.694 0 0 1 -.45-.785l2.532-13.008a.748.748 0 0 0 -.415-.821l-7.902-3.749a2.866 2.866 0 0 1 -1.359-3.814l1.518-3.2a.751.751 0 0 0 -.357-1l-7.3-3.463 1.093-2.3 29.269 13.883c-.044 1.426.917 2.685 2.773 3.529l-.783.453-3.839-1.439a.75.75 0 0 0 -.526 1.4l4.17 1.563a.749.749 0 0 0 .638-.053l1.09-.629a1.44 1.44 0 0 0 .72-1.29 1.464 1.464 0 0 0 -.812-1.263c-1.011-.5-2.158-1.357-1.883-2.588.074-.328.165-.737.286-1.139zm-33.2-11.508-7.815-3.708 3.22-6.785 2.227 1.051.117.873a.749.749 0 0 0 .422.578l26.2 12.432a.757.757 0 0 0 .649 0l1.414-.69 5.68 2.695-.327.688a.751.751 0 0 0 .356 1l2.1 1c-.028.076-.057.157-.088.243a5.632 5.632 0 0 1 -.7.332c-.719.309-1.464.627-1.67 1.293-.046.149-.083.3-.123.448l-29.596-14.049-7.3-3.461a.75.75 0 0 0 -.643 1.355l6.619 3.14z"/><path d="m28.946 21.133-2.3-1.091-4.082-1.942a.751.751 0 0 0 -1 .357l-1.189 2.506a2.966 2.966 0 0 0 1.407 3.945l4.383 2.08a3.242 3.242 0 1 0 2.779-5.859zm-7.27 1.594a1.447 1.447 0 0 1 .056-1.118l.867-1.828 3.401 1.619a1.744 1.744 0 1 1 -1.5 3.148l-2.077-.985a1.449 1.449 0 0 1 -.747-.836zm7.455 2.083a1.742 1.742 0 0 1 -2.074.915 3.138 3.138 0 0 0 1.463-3.107 1.73 1.73 0 0 1 .611 2.192z"/></svg>
                        </div>
                        <div class="content flex-two">
                            <a href="practice-details-sidebar.html"><h3>Gun Crimes Law</h3></a>
                            <a href="practice-details-sidebar.html" class="button-icon"><i class="fal fa-long-arrow-right link-icon "></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="wrapper-icon flex wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1800ms">
                        <div class="box-icon flex-three">
                            <svg enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512" width="50" xmlns="http://www.w3.org/2000/svg"><g id="_x31_671_x2C__Ball_x2C__Beach_x2C__Plastic_x2C__Sea_x2C__Summer"><g><path d="m131.027 120.103c-39.181 16.151-68.73 61.424-68.73 105.312 0 5.628 4.567 10.195 10.195 10.195 5.633 0 10.195-4.567 10.195-10.195 0-35.516 24.648-73.492 56.11-86.461 5.205-2.142 7.685-8.103 5.543-13.308-2.146-5.21-8.108-7.69-13.313-5.543z"/><path d="m490.48 480.285h-140.468c81.968-37.434 140.469-123.133 140.469-224.291 0-135.17-104.948-244.67-234.478-244.67-130.055 0-234.485 110.019-234.485 244.67 0 65.274 24.334 126.658 68.521 172.857 21.063 22.019 45.442 39.326 71.958 51.434h-140.48c-5.628 0-10.195 4.566-10.195 10.195 0 5.633 4.567 10.194 10.195 10.194h468.963c5.638 0 10.2-4.562 10.2-10.194.001-5.628-4.562-10.195-10.2-10.195zm-303.915-12.117c5.772-16.302 12.446-30.565 19.897-42.494 30.904-49.501 68.165-49.525 99.084 0 7.44 11.929 14.114 26.192 19.892 42.494-44.038 15.862-93.237 16.44-138.873 0zm15.006-353.873c13.487 15.998 28.463 25.694 44.237 28.613v226.183c-15.773 2.914-30.75 12.61-44.231 28.608-22.453-82.492-22.732-200.14-.006-283.404zm108.856 0c22.591 82.731 22.611 200.559.01 283.409-13.487-15.997-28.458-25.699-44.236-28.613v-226.183c15.767-2.919 30.748-12.616 44.226-28.613zm159.664 141.7c0 90.724-51.678 169.032-125.807 204.324-5.539-15.454-11.884-29.285-18.937-41.278 29.733-91.605 30.043-233.539 0-326.076 7.063-12.013 13.408-25.869 18.956-41.348 76.769 36.297 125.788 115.327 125.788 204.378zm-144.633-212.218c-5.777 16.326-12.462 30.6-19.912 42.543-30.909 49.501-68.16 49.526-99.084 0-7.456-11.943-14.14-26.217-19.917-42.543 44.331-15.938 93.7-16.256 138.913 0zm-283.551 212.218c0-89.051 49.022-168.081 125.792-204.378 5.543 15.484 11.898 29.335 18.956 41.348-29.614 91.228-29.609 229.794-1.569 321.126.458 1.484 1.225 2.784 2.207 3.859-7.307 12.242-13.866 26.446-19.568 42.369-74.136-35.293-125.818-113.6-125.818-204.324z"/><path d="m21.517 439.505h20.39v20.39h-20.39z"/><path d="m62.297 439.505h20.39v20.39h-20.39z"/><path d="m429.32 439.505h20.39v20.39h-20.39z"/><path d="m470.091 439.505h20.39v20.39h-20.39z"/></g></g></svg>
                        </div>
                        <div class="content flex-two">
                            <a href="practice-details-sidebar.html"><h3>Child Crime Law</h3></a>
                            <a href="practice-details-sidebar.html" class="button-icon"><i class="fal fa-long-arrow-right link-icon "></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="wrapper-icon flex wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1800ms">
                        <div class="box-icon flex-three">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Icons" viewBox="0 0 60 60" width="50" height="50"><path d="M2.17,32.166A19.145,19.145,0,0,0,19.075,60c.3,0,.6-.008.9-.022A18.814,18.814,0,0,0,30,56.469a18.944,18.944,0,0,0,24.119-1.733,2.006,2.006,0,0,0-.622-3.3h0l-2.046-.843a2,2,0,0,0-2.06.335,12.982,12.982,0,0,1-15.046,1.237,18.826,18.826,0,0,0,2.808-5.54A2.006,2.006,0,0,0,36,44.205l-1.864-.771a2,2,0,0,0-1.628.045A1.974,1.974,0,0,0,31.462,44.7,12.835,12.835,0,0,1,30,47.905a12.867,12.867,0,0,1-1.956-5.8,2,2,0,0,0-1.224-1.694l-2.051-.847a2,2,0,0,0-2.765,1.913c.005.187.013.373.023.557a18.839,18.839,0,0,0,3.611,10.126A12.985,12.985,0,0,1,7.565,34.826a1.991,1.991,0,0,0-1-2.789l-1.87-.77A2,2,0,0,0,2.17,32.166Zm31.2,13.116,1.873.751a16.878,16.878,0,0,1-2.509,4.951,12.917,12.917,0,0,1-1.455-1.409A14.748,14.748,0,0,0,33.37,45.282Zm-9.345-3.357c-.009-.168-.016-.336-.02-.515l2.047.862a15.019,15.019,0,0,0,6.224,10.921h0c.019.014.036.029.055.042a14.969,14.969,0,0,0,18.357-.8l2.046.843,0,.009a16.98,16.98,0,0,1-22.133,1.152,16.325,16.325,0,0,1-2.742-2.658A16.88,16.88,0,0,1,24.025,41.925ZM4.1,42.774A14.966,14.966,0,0,0,26.9,53.726a18.321,18.321,0,0,0,1.467,1.457,16.823,16.823,0,0,1-8.493,2.8A17.006,17.006,0,0,1,3.935,33.115l1.872.758A14.953,14.953,0,0,0,4.1,42.774Z"/><path d="M5.827,27.543A2,2,0,0,0,7.042,29.07l2.1.864a2.008,2.008,0,0,0,1.975-.267,12.971,12.971,0,0,1,14.53-.832,18.86,18.86,0,0,0-2.567,4.841,1.99,1.99,0,0,0,1.134,2.493l1.856.766a2.018,2.018,0,0,0,1.6-.025,1.944,1.944,0,0,0,1.049-1.146A12.909,12.909,0,0,1,30,33.1a12.988,12.988,0,0,1,1.881,5.152,1.982,1.982,0,0,0,1.207,1.587l2.1.867a2.007,2.007,0,0,0,2.768-1.987,18.86,18.86,0,0,0-3.6-9.875,12.984,12.984,0,0,1,17.9,17.648,1.022,1.022,0,0,0,.469,1.47L55.6,49.142a2.037,2.037,0,0,0,.77.153,1.977,1.977,0,0,0,1.791-1.126A19.168,19.168,0,0,0,59.987,39.3,18.975,18.975,0,0,0,30,24.527,18.975,18.975,0,0,0,23.7,21.6l4.869-6.242a2.017,2.017,0,0,0-.216-2.73l-4.1-3.82A2.981,2.981,0,0,0,22.211,8H15.789a2.985,2.985,0,0,0-2.046.806l-4.1,3.821a2.018,2.018,0,0,0-.215,2.73L14.3,21.6a18.883,18.883,0,0,0-7.826,4.124A1.977,1.977,0,0,0,5.827,27.543Zm21.009,7.543-1.867-.746a16.869,16.869,0,0,1,2.293-4.326,12.818,12.818,0,0,1,1.455,1.407A14.757,14.757,0,0,0,26.836,35.086Zm13.21-12.06A17.008,17.008,0,0,1,56.362,47.292L54.5,46.526A14.976,14.976,0,0,0,33.1,27.275a18.673,18.673,0,0,0-1.467-1.458A16.821,16.821,0,0,1,40.046,23.026ZM29.4,26.556a16.325,16.325,0,0,1,2.742,2.658,16.84,16.84,0,0,1,3.816,9.64l-2.089-.876A15,15,0,0,0,20.943,25.135l1.4-1.8A16.962,16.962,0,0,1,29.4,26.556ZM20,23.092V15h6.313Zm3.107-12.621L25.8,13H21.082ZM20.922,10,19,12.4,17.078,10Zm-6.031.469L16.918,13h-4.74ZM11.716,15H18v8.084Zm3.941,8.342,1.4,1.794a14.838,14.838,0,0,0-7.152,2.949l-2.113-.863A16.845,16.845,0,0,1,15.657,23.342Z"/><path d="M53.86,0h0a5.983,5.983,0,0,0-4.368,1.9L49,2.416,48.514,1.9a5.944,5.944,0,0,0-4.333-1.9h-.054A5.974,5.974,0,0,0,39.78,1.9a6.658,6.658,0,0,0,0,9.048l8.155,8.589a1.462,1.462,0,0,0,2.13,0l8.156-8.59A6.509,6.509,0,0,0,60,6.423,6.569,6.569,0,0,0,58.222,1.9,5.97,5.97,0,0,0,53.86,0ZM48.447,13.1A1.979,1.979,0,0,0,48,14.35V16.7L41.232,9.574a4.631,4.631,0,0,1,0-6.293,4,4,0,0,1,2.908-1.275h.034a3.964,3.964,0,0,1,2.891,1.273L48,4.267V8a2,2,0,0,0,2,2h.924ZM58,6.427a4.514,4.514,0,0,1-1.23,3.146L50,16.7V14.355l2.564-3.206A1.944,1.944,0,0,0,51.04,8H50V4.269l.939-.99A4,4,0,0,1,53.856,2h0a3.99,3.99,0,0,1,2.913,1.281A4.542,4.542,0,0,1,58,6.419Z"/></svg>
                        </div>
                        <div class="content flex-two">
                            <a href="practice-details-sidebar.html"><h3>Divorce Law</h3></a>
                            <a href="practice-details-sidebar.html" class="button-icon"><i class="fal fa-long-arrow-right link-icon "></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="wrapper-icon flex wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1800ms">
                        <div class="box-icon flex-three">
                            <svg enable-background="new 0 0 64 64" height="50" viewBox="0 0 64 64" width="50" xmlns="http://www.w3.org/2000/svg"><g><path d="m15.9 30.4-5.1-1.1c-1.4-.3-2.7.8-2.7 2.2v2.1c0 1.7 1.3 2.1 2.9 2.1h5.6c1.1 0 2.2-.2 2.2-1.4v-.3c0-1.8-1.2-3.3-2.9-3.6zm-5.9 3.2c0-.1 0-.1 0-2.2 0-.2.2-.4.4-.3l5.1 1.1c.7.2 1.2.8 1.3 1.5-3.5 0-6.5 0-6.8-.1z"/><path d="m61.3 19.7-7.2-3.4c-2.4-1.1-5-1.5-7.5-1l-1.1-2.2c-.8-2-2.7-3.4-4.9-3.4h-23.4c-2.2 0-4.1 1.3-4.9 3.3l-3.9 8.1c-.9-1.3-2.4-2.1-4-2.1h-1.7c-1.5 0-2.7 1.2-2.7 2.7v1.1c0 1.5 1.2 2.7 2.7 2.7h2.6c-1.1 1.4-1.6 3.2-1.6 5v6c0 2.3.8 4.5 2.4 6.4v4.5c0 2 1.6 3.6 3.6 3.6h3.7c2 0 3.6-1.6 3.6-3.6v-1.8h20c4.4 6 11.3 8.6 11.4 8.6.2.1.4.1.7 0 .1-.1 14.9-5.5 14.9-19v-11.2c0-1.8-1.1-3.5-2.7-4.3zm-47.2-5.9c.5-1.3 1.7-2.1 3.1-2.1h23.4c1.4 0 2.6.8 3.2 2.2l.9 1.9c-.4.1-.8.3-1.2.5l-7.2 3.4c-1.6.8-2.7 2.4-2.7 4.2h-24.5c.4-.6 0 .4 5-10.1zm-12.1 9v-1.1c0-.4.3-.7.7-.7h1.7c2 0 2.7 1.8 2.9 2.1-.1.2-.2.3-.4.5h-4.2c-.4-.1-.7-.4-.7-.8zm13 24.5c0 .9-.7 1.6-1.6 1.6h-3.8c-.9.1-1.6-.7-1.6-1.6v-2.9c1.2.7 2.6 1.1 4 1.1h3zm-3.1-3.7c-3.6 0-6.4-3.5-6.4-7.2v-6c0-1.7.7-3.3 1.9-4.6h26.2v8.8h-11c-.5 0-1 .4-1 1s.4 1 1 1h11.1c.1.7.1 1.3.3 1.9h-11.4c-.5 0-1 .4-1 1s.4 1 1 1h11.8c.4 1.1.8 2.2 1.4 3.1zm50.1-8.4c0 11.1-11.2 16.2-13.2 17-7.2-2.9-13.2-9.1-13.2-17 0-3.7 0-5.7 0-11.2 0-1.1.6-2 1.6-2.5l7.2-3.4c2.9-1.4 6.1-1.4 9 0l7.2 3.4c.9.5 1.6 1.4 1.6 2.5v11.2z"/><path d="m58.6 23.8-6.6-3.1c-2-1-4.5-1-6.5 0l-6.5 3.1c-.3.2-.6.5-.6.9v10.5c0 7.9 6.9 12.2 9.9 13.7.3.1.6.1.9 0 3-1.5 9.9-5.8 9.9-13.7v-10.5c0-.4-.2-.7-.5-.9zm-1.4 11.4c0 6.4-5.6 10.2-8.4 11.7-3.3-1.8-8.4-5.4-8.4-11.7v-9.9l6-2.9c1.5-.7 3.3-.7 4.8 0l6 2.9z"/><path d="m44.9 34.9c-.4-.3-1-.2-1.4.2s-.2 1 .2 1.4l3.8 2.9c.4.3 1 .2 1.4-.2l5.6-7.3c.3-.4.2-1-.2-1.4-.4-.3-1-.2-1.4.2l-5 6.5z"/></g></svg>
                        </div>
                        <div class="content flex-two">
                            <a href="practice-details-sidebar.html"><h3>Car Accidents Law</h3></a>
                            <a href="practice-details-sidebar.html" class="button-icon"><i class="fal fa-long-arrow-right link-icon "></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="wrapper-icon flex wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1800ms">
                        <div class="box-icon flex-three">
                            <svg height="50" viewBox="0 0 48 48" width="50" xmlns="http://www.w3.org/2000/svg"><g id="Line"><path d="m41.381 9.075-17-7c-.244-.1-.518-.1-.762 0l-17 7c-.375.154-.619.52-.619.925v9.615c.009 11.61 7.07 22.31 18 26.385 10.931-4.075 17.991-14.774 18-26.385v-9.615c0-.405-.244-.771-.619-.925zm-1.381 10.54c0 10.624-6.267 20.116-16 24.3-9.733-4.184-16-13.677-16-24.3v-8.945l16-6.589 16 6.589z"/><path d="m23.341 13.248-7.98 7c-.217.19-.341.464-.341.752v3c0 .553.447 1 1 1h.997l-.017 4.997c-.012.537.462 1.014 1 1.003h12c.551 0 .998-.445 1-.997l.017-5.003h1.003c.553 0 1-.447 1-1v-3c0-.289-.125-.563-.343-.753l-8.02-7c-.378-.33-.94-.329-1.316.001zm7.679 8.206v1.546h-1c-.551 0-.998.445-1 .997l-.017 5.003h-10l.017-4.997c.013-.538-.462-1.014-1-1.003h-1v-1.547l6.982-6.124z"/></g></svg>
                        </div>
                        <div class="content flex-two">
                            <a href="practice-details-sidebar.html"><h3>Health Care Law</h3></a>
                            <a href="practice-details-sidebar.html" class="button-icon"><i class="fal fa-long-arrow-right link-icon "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- flat testimonials -->
    <section class="flat-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="testimonial-post center">
                        <h1>Testimonials</h1>
                        <div class="texts fw-4">Nam eu bibendum nulla. Cras faucibus neque a lacus sollicitudin imperdiet. Pellentesque faucibus diam sit amet justo mattis,
                            vitae tincidunt leo lacinia. Quisque eu tempor lorem. Vestibulum nec eleifend lectus.</div>
                        <div class="reviews flex-three">
                                    <span class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                            <h4 class="fw-4 text-color-3">12 April, 2022</h4>
                        </div>
                        <h3 class="fw-4">Bardem Smith</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section2 flat-case flat-themes ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="heading-section center">
                        <h5 class="text-color-4 wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1500ms">CASES WE SOLVED</h5>
                        <h2 class="title-section wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">Recent <span class="text-color-3">Case</span> Studies</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="swiper-container carousel-2 show-boder ">
                        <div class="swiper-wrapper slider-style">
                            <div class="swiper-slide">
                                <div class="case-box hover-img box-hv">
                                    <div class="media img-style hover-style">
                                        <img class="img-item" src="/frontend/images/box-item/case-1.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="inner">
                                            <p>Real Specialist</p>
                                            <h3 class="text-t"><a href="case-details.html">divorce law Cases</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="case-box hover-img box-hv">
                                    <div class="media img-style hover-style">
                                        <img class="img-item" src="/frontend/images/box-item/case-2.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="inner">
                                            <p>Real Specialist</p>
                                            <h3 class="text-t"><a href="case-details.html">Education Law Cases</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="case-box hover-img box-hv">
                                    <div class="media img-style hover-style">
                                        <img class="img-item" src="/frontend/images/box-item/case-3.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="inner">
                                            <p>Real Specialist</p>
                                            <h3 class="text-t"><a href="case-details.html">Business Law Casesvv</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="case-box hover-img box-hv">
                                    <div class="media img-style hover-style">
                                        <img class="img-item" src="/frontend/images/box-item/case-1.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="inner">
                                            <p>Real Specialist</p>
                                            <h3 class="text-t"><a href="case-details.html">divorce law Cases</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="case-box hover-img box-hv">
                                    <div class="media img-style hover-style">
                                        <img class="img-item" src="/frontend/images/box-item/case-2.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="inner">
                                            <p>Real Specialist</p>
                                            <h3 class="text-t"><a href="case-details.html">Education Law Cases</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination center"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section2 flat-video relative"><div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="video-box center">
                        <h1 class="text-color-1">As long as we can't win, You Don’t
                            Pay Money!<span class="text-color-3"> Check This Video.</span> </h1>
                        <div class="post-video">
                            <a href="https://youtu.be/MLpWrANjFbI" class="lightbox-image">
                                <svg width="24" height="25" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.856 12.36C0.856 11.784 0.84 10.912 0.808 9.744C0.792 8.416 0.784 7.424 0.784 6.768C0.784 5.664 0.824 4.68 0.904 3.816C0.984 2.792 1.248 2 1.696 1.44C2.16 0.879999 2.752 0.599999 3.472 0.599999C4.208 0.599999 5.008 0.895999 5.872 1.488C9.008 3.616 12.936 6.48 17.656 10.08C18.696 10.864 19.208 11.704 19.192 12.6C19.192 13.48 18.664 14.312 17.608 15.096C15.144 16.952 13.144 18.44 11.608 19.56C9.4 21.176 7.368 22.624 5.512 23.904C4.792 24.4 4.096 24.632 3.424 24.6C2.752 24.568 2.192 24.288 1.744 23.76C1.312 23.248 1.056 22.528 0.976 21.6C0.896 20.688 0.856 19.64 0.856 18.456C0.84 17.736 0.848 16.664 0.88 15.24C0.912 13.96 0.928 13 0.928 12.36H0.856Z" fill="white"/>
                                </svg>
                                <i class="ripple"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section2 flat-blog home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="heading-section center">
                        <h5 class=" wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1500ms">CASES WE SOLVED</h5>
                        <h2 class="title-section wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">Latest <span class="text-color-3">News</span> & Blogs</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="blog-box tf-img hover-img box-hv wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="media hover-style hv7 hv10">
                            <img class="img-item" src="/frontend/images/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="meta text-p">by <a href="#" class="user text-color-3">Themesflat  </a>  <a href="#"> Attorney</a>  </div>
                            <h3 class="fw-5"><a href="blog-details.html">Domestic Violence in California – How a Lawyer Can Help.</a></h3>
                            <div class="sc-btn-button">
                                <a href="blog-details.html" class="sc-button btn-1"><span>Discover More</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="blog-box tf-img hover-img box-hv wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1700ms">
                        <div class="media hover-style hv7 hv10">
                            <img class="img-item" src="/frontend/images/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="meta text-p">by <a href="#" class="user text-color-3">Themesflat  </a>  <a href="#"> Attorney</a>  </div>
                            <h3 class="fw-5"><a href="blog-details.html">Nulla facilisi. Aenean nisi sem, vestibulum vel lacus in.</a></h3>
                            <div class="sc-btn-button">
                                <a href="blog-details.html" class="sc-button btn-1"><span>Discover More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="blog-box tf-img hover-img box-hv wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1800ms">
                        <div class="media hover-style hv7 hv10">
                            <img class="img-item" src="/frontend/images/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="meta text-p">by <a href="#" class="user text-color-3">Themesflat  </a>  <a href="#"> Attorney</a> </div>
                            <h3 class="fw-5"><a href="blog-details.html">Fusce tincidunt commodo sapien, quis porttitor ipsum fringilla et.</a></h3>
                            <div class="sc-btn-button">
                                <a href="blog-details.html" class="sc-button btn-1"><span>Discover More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- flat brand -->
    <section class="flat-brand">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="brand-slider">
                        <div class="swiper-container carousel-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slogan-logo">
                                        <a href="#">
                                            <img src="/frontend/images/icon/logoipsum-logo.svg" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slogan-logo active">
                                        <a href="#">
                                            <img src="/frontend/images/icon/logoipsum-logo.svg" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slogan-logo">
                                        <a href="#">
                                            <img src="/frontend/images/icon/logoipsum-logo.svg" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slogan-logo">
                                        <a href="#">
                                            <img src="/frontend/images/icon/logoipsum-logo.svg" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slogan-logo">
                                        <a href="#">
                                            <img src="/frontend/images/icon/logoipsum-logo.svg" alt="images">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
