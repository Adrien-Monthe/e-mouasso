@php use Carbon\Carbon; @endphp
@extends('frontend.layouts.app')

@section('additional_meta')

    <meta property="og:image" content="{{ asset('') }}"/>
    <meta property="og:description"
          content=""/>
    <meta property="og:keywords"
          content=""/>

    <meta property="og:url" content="{{ route('blog' ) }}"/>

    <meta property="og:title" content=""/>

@endsection

@section('page-title', __('blog.page-title'))

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(/frontend/images/backgrounds/page-header-bg.jpg);">
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
                <h2>@lang('blog.page-title')</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">@lang('navigation.nav-home')</a></li>
                        <li><span>/</span></li>
                        <li>@lang('blog.page-title')</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News Page Start-->
    <section class="news-page">
        <div class="container">
            <div class="row">

                @foreach($blogs as $blog)
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="{{ asset( $blog->image_path ?  :  'frontend/images/Blog/default-blog-image.webp')}}" alt="">
                                    <a href="{{ route('single_blog_page', [app()->getLocale(), $blog->codename ] ) }}">
                                        <span class="news-one__plus"></span>
                                    </a>
                                </div>
                                <div class="news-one__date">
                                    <p>{{ Carbon::parse($blog->created_at)->isoFormat('Do MMM, YYYY') }}</p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="news-one__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-tags"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{  $blog->category ? $blog->category->name : ''  }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <span>/</span>
                                        <div class="icon">
                                            <span class="fas fa-comments"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ sizeof($blog->comments) }} @lang('blog.comments')</p>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('single_blog_page', [app()->getLocale(),$blog->codename ] ) }}">{{ $blog->title }}</a></h3>
                                <p class="news-one__text">{{ substr($blog->short_description, 0, 60)."..."  }}
                                </p>
                            </div>
                            <div class="news-one__hover">
                                <div class="news-one__hover-content">
                                    <h3 class="news-one__hover-title"><a href="{{ route('single_blog_page', [app()->getLocale(),$blog->codename ] ) }}">{{ $blog->title }}</a></h3>
                                    <p class="news-one__hover-text">{{ substr($blog->short_description, 0, 60)."..."  }}
                                    </p>
                                </div>
                                <div class="news-one__hover-btn-box">
                                    <a href="{{ route('single_blog_page', [app()->getLocale(),$blog->codename ] ) }}">@lang('general.read-more')<span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                @endforeach

            </div>
        </div>
    </section>
    <!--News Page End-->
@endsection


