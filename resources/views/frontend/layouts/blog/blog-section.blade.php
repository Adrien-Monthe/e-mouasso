<!--News One Start-->
<section class="news-one">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">@lang('blog.our-news-update')</span>
            </div>
            <h2 class="section-title__title">@lang('blog.our-news-update-text')</h2>
        </div>
        <div class="row">
            @foreach($recent_blogs as $blog)
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="{{ asset( $blog->image_path ?  :  'frontend/images/Blog/default-blog-image.webp')}}" alt="">
                                <a href="{{ route('single_blog_page', [$blog->codename ] ) }}">
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
<!--News One End-->
