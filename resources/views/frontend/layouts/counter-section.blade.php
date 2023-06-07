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
                                <span class="section-title__tagline">@lang('home.fun_facts')</span>
                            </div>
                            <h2 class="section-title__title">@lang('home.consultancy_funfacts')</h2>
                        </div>
                        <p class="counter-one__text">@lang('home.bav')</p>
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
                                <p class="counter-one__text">@lang('home.projects_completed')</p>
                            </li>
                            <li>
                                <div class="counter-one__icon">
                                    <span class="icon-recommend"></span>
                                </div>
                                <div class="counter-one__count count-box">
                                    <h3 class="count-text" data-stop="600" data-speed="1500">00</h3>
                                </div>
                                <p class="counter-one__text">@lang('home.satisfied_customers')</p>
                            </li>
                            <li>
                                <div class="counter-one__icon">
                                    <span class="icon-consulting"></span>
                                </div>
                                <div class="counter-one__count count-box">
                                    <h3 class="count-text" data-stop="08" data-speed="1500">00</h3>
                                </div>
                                <p class="counter-one__text">@lang('home.expert_consultants')</p>
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
                    <p>@lang('general.call') <a href="tel:00237699374564">+237 233-424-213</a></p>
                    <div class="counter-one__call-icon">
                        <span class="icon-telephone-1"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Counter One End-->
