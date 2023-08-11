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

@section('page-title', __('contact.page-title'))

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(/frontend/images/services/services-2-2.jpg);">
        </div>
        <div class="page-header__shape-2 float-bob-x">
            <img src="/frontend/images/shapes/page-header-shape-2.png" alt="">
        </div>
        <div class="page-header__shape-1 float-bob-y">
            <img src="/frontend/images/shapes/page-header-shape-1.png" alt="">
        </div>
        <div class="page-header__shape-3 float-bob-x">
            <img src="/frontend/images/shapes/page-header-shape-3.png" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>@lang('navigation.nav-contact')</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="#">@lang('navigation.nav-home')</a></li>
                        <li><span>/</span></li>
                        <li>@lang('navigation.nav-contact')</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-page__left">
                        <div class="contact-page__form-box">
                            <form action="https://thegenius.co/html/sinace//frontend/inc/sendemail.php"
                                  class="contact-page__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-page__input-box">
                                            <input type="text" placeholder="@lang('contact.name')" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-page__input-box">
                                            <input type="email" placeholder="@lang('contact.phonenumber')" name="phonenumber">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-page__input-box">
                                            <input type="email" placeholder="@lang('contact.email')" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-page__input-box text-message-box">
                                            <textarea name="message" placeholder="@lang('contact.message')"></textarea>
                                        </div>
                                        <div class="contact-page__btn-box">
                                            <button type="submit" class="thm-btn contact-page__btn">@lang('contact.send-message')</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="contact-page__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">@lang('contact.contact-us')</span>
                            </div>
                            <h2 class="section-title__title">@lang('contact.have-questions') @lang('contact.contact-with-us') <span>@lang('contact.anytime')</span></h2>
                        </div>
                        <ul class="contact-page__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone-1"></span>
                                </div>
                                <div class="text">
                                    <p>@lang('contact.talk-to-expert')</p>
                                    <h3><a href="tel:00237699374564">+237 233-424-213</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p>@lang('contact.talk-to-expert')</p>
                                    <h3><a href="mailto:info@e-mouassoandpartners.com">info@e-mouassoandpartners.com</a></h3>
                                    <h3><a href="mailto:mouassolawfirm@gmail.com">mouassolawfirm@gmail.com</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>@lang('contact.visit-anytime')</p>
                                    <h3>B.P. 4926, NIKI Akwa, Douala</h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->

    <!--Google Map Start-->

    <div class="mapouter"><div class="gmap_canvas"><iframe style="width: 100%" height="510" id="gmap_canvas" src="https://maps.google.com/maps?q=niki akwa Douala&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:510px;width:100%;}</style><a href="https://embedgooglemap.2yu.co">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:510px;width:100%;}</style></div></div>

    <!--Google Map End-->


@endsection
