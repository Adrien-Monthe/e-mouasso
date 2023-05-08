@extends('frontend.layouts.app')

@section('additional_meta')

    <meta property="og:image" content="{{ asset('') }}"/>
    <meta property="og:description"
          content=""/>
    <meta property="og:keywords"
          content=""/>

    <meta property="og:url" content="{{ route('home') }}"/>

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
            <h2>@lang('services.debt_collection_&_recovery')</h2>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">@lang('menu_home')</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><span>/</span></li>
                    <li>@lang('services.debt_collection_&_recovery')</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Services Details Start-->
<section class="services-details">
    <div class="container">
        <div class="row">

            @include('frontend.layouts.services.menu')

            <div class="col-xl-8 col-lg-7">
                <div class="services-details__right">
                    <div class="services-details__img">
                        <img src="{{url('frontend/images/services/services-details-img-1.jpg')}}" alt="">
                        <div class="services-details__icon">
                            <span class="icon-insurance"></span>
                        </div>
                    </div>
                    <h3 class="services-details__title-1">@lang('services.debt_collection_&_recovery')</h3>
                    <p class="services-details__text-1">@lang('services.fa')</p>
                    <div class="services-details__text-box">
                        <p class="services-details__text-box-text">@lang('services.far')</p>
                    </div>
                    <p class="services-details__text-2">
                        @lang('services.fan')</p>
                    <div class="services-details__points">
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="services-details__points-single">
                                    <div class="icon">
                                        <span class="icon-writer"></span>
                                    </div>
                                    <div class="content">
                                        <h3>@lang('services.business_solution')</h3>
                                        <p>@lang('services.fas')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="services-details__points-single">
                                    <div class="icon">
                                        <span class="icon-data-analysis"></span>
                                    </div>
                                    <div class="content">
                                        <h3>@lang('services.market_rules')</h3>
                                        <p>@lang('services.fax')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-details__benefit">
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="services-details__benefit-img">
                                    <img src="{{url('frontend/images/services/services-details-benefit-img.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="services-details__benefit-content">
                                    <h3 class="services-details__benefit-title">@lang('services.our_benefits')</h3>
                                    <p class="services-details__benefit-text">@lang('services.faw')</p>
                                    <ul class="services-details__benefit-points list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>@lang('services.recovering_outstanding_debts')</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>@lang('services.improving_cash_flow')</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>@lang('services.protecting_credit_ratings')</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>@lang('services.maintaining_positive_relationships_with_customers')</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services Details End-->

@endsection
