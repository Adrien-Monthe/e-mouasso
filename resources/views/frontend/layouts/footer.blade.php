<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer__shape-1 float-bob-x">
        <img src="/frontend/images/shapes/site-footer-shape-1.png" alt="">
    </div>
    <div class="site-footer__bg" style="background-image: url(/frontend/images/backgrounds/site-footer-bg.png);">
    </div>
    <div class="site-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="{{ route('home', app()->getLocale()) }}"><img style="max-width: 75px; float: left;
margin-right: 10px;" src="/frontend/images/resources/logo-4.png" alt=""></a>
                        </div>
                        <p class="footer-widget__about-text" style="text-align: justify">Nous sommes un Cabinet d’Avocats qui a pour ambitions de fournir à sa clientèle des prestations juridiques de haute qualité dans un environnement juridique et judiciaire très complexe.</p>
                        <div class="site-footer__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__link">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Explore</h3>
                        </div>
                        <ul class="footer-widget__link-list list-unstyled">
                            <li><a href="{{ route('services') }}">@lang('navigation.nav-services')</a></li>
                            <li><a href="{{ route('about') }}">@lang('navigation.nav-about')</a></li>
                            <li><a href="portfolio.html">Latest Projects</a></li>
                            <li><a href="team.html">Our Team</a></li>
                            <li><a href="{{ route('contact') }}">@lang('navigation.nav-contact')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__newsletter">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">@lang('footer.newsletter')</h3>
                        </div>
                        <form class="footer-widget__newsletter-form mc-form" data-url="MC_FORM_URL"
                              novalidate="novalidate">
                            <div class="footer-widget__newsletter-form-input-box">
                                <input type="email" placeholder="@lang('contact.email')" name="EMAIL">
                                <button type="submit" class="footer-widget__newsletter-btn"><span
                                        class="fas fa-paper-plane"></span></button>
                            </div>
                        </form>
                        <div class="mc-form__response"></div>
                        <ul class="footer-widget__Contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-envelope"></span>
                                </div>
                                <div class="text">
                                    <a href="mailto:needhelp@company.com">info@e-mouassoandpartners.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-phone-square"></span>
                                </div>
                                <div class="text">
                                    <a href="tel:+237699374564">+237 699-374-564</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="footer-widget__column footer-widget__portfolio">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">@lang('footer.gallery')</h3>
                        </div>
                        <ul class="footer-widget__portfolio-list list-unstyled clearfix">
                            <li>
                                <div class="footer-widget__portfolio-img">
                                    <img src="/frontend/images/project/footer-widget-portfolio-img-1.jpg" alt="">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget__portfolio-img">
                                    <img src="/frontend/images/project/footer-widget-portfolio-img-2.jpg" alt="">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget__portfolio-img">
                                    <img src="/frontend/images/project/footer-widget-portfolio-img-3.jpg" alt="">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget__portfolio-img">
                                    <img src="/frontend/images/project/footer-widget-portfolio-img-4.jpg" alt="">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget__portfolio-img">
                                    <img src="/frontend/images/project/footer-widget-portfolio-img-5.jpg" alt="">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget__portfolio-img">
                                    <img src="/frontend/images/project/footer-widget-portfolio-img-6.jpg" alt="">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">© Copyright 2023 Designed By <a href="https://genzis.net/">Genzis</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->
