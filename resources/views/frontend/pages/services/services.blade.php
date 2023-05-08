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
    <div class="page-header__bg" style="background-image: {{url('frontend/images/backgrounds/page-header-bg.jpg')}};">
    </div>
    <div class="page-header__shape-2 float-bob-x">
        <img src="{{url('frontend/images/shapes/page-header-shape-2.png')}}" alt="">
    </div>
    <div class="page-header__shape-1 float-bob-y">
        <img src="{{url('frontend/images/shapes/page-header-shape-1.png')}}" alt="">
    </div>
    <div class="page-header__shape-3 float-bob-x">
        <img src="{{url('frontend/images/shapes/page-header-shape-3.png')}}" alt="">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Services</h2>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home', app()->getLocale()) }}">@lang('menu_home')</a></li>
                    <li><span>/</span></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Services Page Start-->
<section class="services-page">
    <div class="container">
        <div class="row">
            <!--Services Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="services-page__single">
                    <div class="services-page__img-box">
                        <div class="services-page__img">
                            <img src="{{url('frontend/images/services/services-page-1-1.jpg')}}" alt="">
                        </div>
                        <div class="services-page__icon">
                            <span class="icon-pie-chart"></span>
                        </div>
                    </div>
                    <div class="services-page__content">
                        <h3 class="services-page__title"><a href="{{ route('consultationjuridiques', app()->getLocale()) }}">@lang('services.legal_consultations')</a></h3>
                        <p class="services-page__text">@lang('services.go')</p>
                        <a href="{{ route('consultationjuridiques', app()->getLocale()) }}" class="services-page__read-more">@lang('services.read_more')</a>
                    </div>
                    <div class="services-page__hover-single">
                        <div class="services-page__hover-img"
                            style="background-image: {{url('frontend/images/services/services-page-hover-img-1.jpg')}};">
                        </div>
                        <div class="services-page__hover-content-box">
                            <div class="services-page__hover-icon">
                                <span class="icon-pie-chart"></span>
                            </div>
                            <div class="services-page__hover-content">
                                <h3 class="services-page__hover-title"><a href="{{ route('consultationjuridiques', app()->getLocale()) }}">@lang('services.legal_consultations')</a></h3>
                                <p class="services-page__hover-text">@lang('services.go')</p>
                                <a href="{{ route('consultationjuridiques', app()->getLocale()) }}" class="services-page__hover-read-more">@lang('services.read_more')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Page Single End-->
            <!--Services Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="services-page__single">
                    <div class="services-page__img-box">
                        <div class="services-page__img">
                            <img src="{{url('frontend/images/services/services-page-1-2.jpg')}}" alt="">
                        </div>
                        <div class="services-page__icon">
                            <span class="icon-insurance"></span>
                        </div>
                    </div>
                    <div class="services-page__content">
                        <h3 class="services-page__title"><a href="{{ route('recouvrementetcréances', app()->getLocale()) }}">@lang('services.debt_collection_&_recovery')</a></h3>
                        <p class="services-page__text">@lang('services.gor')</p>
                        <a href="{{ route('recouvrementetcréances', app()->getLocale()) }}" class="services-page__read-more">@lang('services.read_more')</a>
                    </div>
                    <div class="services-page__hover-single">
                        <div class="services-page__hover-img"
                            style="background-image: {{url('frontend/images/services/services-page-hover-img-2.jpg')}};">
                        </div>
                        <div class="services-page__hover-content-box">
                            <div class="services-page__hover-icon">
                                <span class="icon-insurance"></span>
                            </div>
                            <div class="services-page__hover-content">
                                <h3 class="services-page__hover-title"><a
                                        href="{{ route('recouvrementetcréances', app()->getLocale()) }}">@lang('services.debt_collection_&_recovery')</a></h3>
                                <p class="services-page__hover-text">@lang('services.gor')</p>
                                <a href="{{ route('recouvrementetcréances', app()->getLocale()) }}" class="services-page__hover-read-more">@lang('services.read_more')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Page Single End-->
            <!--Services Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="services-page__single">
                    <div class="services-page__img-box">
                        <div class="services-page__img">
                            <img src="{{url('frontend/images/services/services-page-1-3.jpg')}}" alt="">
                        </div>
                        <div class="services-page__icon">
                            <span class="icon-money-bag"></span>
                        </div>
                    </div>
                    <div class="services-page__content">
                        <h3 class="services-page__title"><a href="{{ route('assistancesjuridiques', app()->getLocale()) }}">@lang('services.legal_and_administrative_support')</a></h3>
                        <p class="services-page__text">@lang('services.gos')</p>
                        <a href="{{ route('assistancesjuridiques', app()->getLocale()) }}" class="services-page__read-more">@lang('services.read_more')</a>
                    </div>
                    <div class="services-page__hover-single">
                        <div class="services-page__hover-img"
                            style="background-image: {{url('frontend/images/services/services-page-hover-img-3.jpg')}};">
                        </div>
                        <div class="services-page__hover-content-box">
                            <div class="services-page__hover-icon">
                                <span class="icon-money-bag"></span>
                            </div>
                            <div class="services-page__hover-content">
                                <h3 class="services-page__hover-title"><a href="{{ route('assistancesjuridiques', app()->getLocale()) }}">@lang('services.legal_and_administrative_support')</a></h3>
                                <p class="services-page__hover-text">@lang('services.gos')</p>
                                <a href="{{ route('assistancesjuridiques', app()->getLocale()) }}" class="services-page__hover-read-more">@lang('services.read_more')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Page Single End-->
            <!--Services Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="services-page__single">
                    <div class="services-page__img-box">
                        <div class="services-page__img">
                            <img src="{{url('frontend/images/services/services-page-1-4.jpg')}}" alt="">
                        </div>
                        <div class="services-page__icon">
                            <span class="icon-profile"></span>
                        </div>
                    </div>
                    <div class="services-page__content">
                        <h3 class="services-page__title"><a href="{{ route('auditjuridique', app()->getLocale()) }}">@lang('services.legal_and_social_audit')</a></h3>
                        <p class="services-page__text">@lang('services.got')</p>
                        <a href="{{ route('auditjuridique', app()->getLocale()) }}" class="services-page__read-more">@lang('services.read_more')</a>
                    </div>
                    <div class="services-page__hover-single">
                        <div class="services-page__hover-img"
                            style="background-image: {{url('frontend/images/services/services-page-hover-img-4.jpg')}};">
                        </div>
                        <div class="services-page__hover-content-box">
                            <div class="services-page__hover-icon">
                                <span class="icon-profile"></span>
                            </div>
                            <div class="services-page__hover-content">
                                <h3 class="services-page__hover-title"><a
                                        href="{{ route('auditjuridique', app()->getLocale()) }}">@lang('services.legal_and_social_audit')</a></h3>
                                <p class="services-page__hover-text">@lang('services.got')</p>
                                <a href="{{ route('auditjuridique', app()->getLocale()) }}" class="services-page__hover-read-more">@lang('services.read_more')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Page Single End-->
            <!--Services Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="services-page__single">
                    <div class="services-page__img-box">
                        <div class="services-page__img">
                            <img src="{{url('frontend/images/services/services-page-1-5.jpg')}}" alt="">
                        </div>
                        <div class="services-page__icon">
                            <span class="icon-income"></span>
                        </div>
                    </div>
                    <div class="services-page__content">
                        <h3 class="services-page__title"><a href="{{ route('avislégal', app()->getLocale()) }}">@lang('services.legal_disclaimer')</a></h3>
                        <p class="services-page__text">@lang('services.gon')</p>
                        <a href="{{ route('avislégal', app()->getLocale()) }}" class="services-page__read-more">@lang('services.read_more')</a>
                    </div>
                    <div class="services-page__hover-single">
                        <div class="services-page__hover-img"
                            style="background-image: {{url('frontend/images/services/services-page-hover-img-5.jpg')}};">
                        </div>
                        <div class="services-page__hover-content-box">
                            <div class="services-page__hover-icon">
                                <span class="icon-income"></span>
                            </div>
                            <div class="services-page__hover-content">
                                <h3 class="services-page__hover-title"><a href="{{ route('avislégal', app()->getLocale()) }}">@lang('services.legal_disclaimer')</a></h3>
                                <p class="services-page__hover-text">@lang('services.gon')</p>
                                <a href="{{ route('avislégal', app()->getLocale()) }}" class="services-page__hover-read-more">@lang('services.read_more')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Page Single End-->
            <!--Services Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="services-page__single">
                    <div class="services-page__img-box">
                        <div class="services-page__img">
                            <img src="{{url('frontend/images/services/services-page-1-6.jpg')}}" alt="">
                        </div>
                        <div class="services-page__icon">
                            <span class="icon-mortgage-loan"></span>
                        </div>
                    </div>
                    <div class="services-page__content">
                        <h3 class="services-page__title"><a href="{{ route('juridictionsciviles', app()->getLocale()) }}">@lang('services.representation_and_assistance_in_civil_courts')</a></h3>
                        <p class="services-page__text">@lang('services.gox')</p>
                        <a href="{{ route('juridictionsciviles', app()->getLocale()) }}" class="services-page__read-more">@lang('services.read_more')</a>
                    </div>
                    <div class="services-page__hover-single">
                        <div class="services-page__hover-img"
                            style="background-image: {{url('frontend/images/services/services-page-hover-img-6.jpg')}};">
                        </div>
                        <div class="services-page__hover-content-box">
                            <div class="services-page__hover-icon">
                                <span class="icon-mortgage-loan"></span>
                            </div>
                            <div class="services-page__hover-content">
                                <h3 class="services-page__hover-title"><a href="{{ route('juridictionsciviles', app()->getLocale()) }}">@lang('services.representation_and_assistance_in_civil_courts')</a>
                                </h3>
                                <p class="services-page__hover-text">@lang('services.gox')</p>
                                <a href="{{ route('juridictionsciviles', app()->getLocale()) }}" class="services-page__hover-read-more">@lang('services.read_more')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Page Single End-->
        </div>
    </div>
</section>
<!--Services Page End-->


@endsection
