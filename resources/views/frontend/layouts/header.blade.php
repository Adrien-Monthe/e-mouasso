<header class="main-header">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__logo">
                    <a href="{{ route('home',app()->getLocale()) }}"><img src="/frontend/images/resources/logo-3.png" alt=""></a>
                </div>
                <div class="main-menu__call">
                    <div class="main-menu__call-icon">
                        <span class="icon-telephone"></span>
                    </div>
                    <div class="main-menu__call-content">
                        <p class="main-menu__call-sub-title">Contactez Nous</p>
                        <h5 class="main-menu__call-number"><a href="tel:237699374564">+237 233-424-213</a></h5>
                    </div>
                </div>
                <div class="main-menu__wrapper-inner-content">
                    <div class="main-menu__top">
                        <div class="main-menu__top-inner">
                            <div class="main-menu__top-left">
                                <ul class="list-unstyled main-menu__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="info@e-mouassoandpartners.com">info@e-mouassoandpartners.com</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-map-marker"></i>
                                        </div>
                                        <div class="text">
                                            <p>B.P. 4926 Douala, Cameroun</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu__top-right">
                                <ul class="list-unstyled main-menu__top-menu">
                                    <li><a href="{{ route('about',app()->getLocale()) }}">@lang('navigation.nav-about')</a></li>
                                    <li><a href="{{ route('faqs',app()->getLocale()) }}">FAQ</a></li>
                                    <li><a href="{{ route('contact',app()->getLocale()) }}">@lang('navigation.nav-contact')</a></li>
                                </ul>
                                <div class="main-menu__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu__bottom">
                        <div class="main-menu__bottom-inner">
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="">
                                        <a href="{{ route('home',app()->getLocale()) }}">@lang('navigation.nav-home') </a>

                                    </li>
                                    <li class="">
                                        <a href="{{ route('about',app()->getLocale()) }}">@lang('navigation.nav-about')</a>
                                    </li>
                                    {{--<li class="dropdown">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="team.html">Our Team</a></li>
                                            <li><a href="team-details.html">Team Details</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                            <li><a href="careers.html">Careers</a></li>
                                            <li><a href="faq.html">Faqs</a></li>
                                        </ul>
                                    </li> --}}
                                    <li class="dropdown">
                                        <a href="{{ route('services',app()->getLocale()) }}">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('consultationjuridiques', app()->getLocale()) }}">@lang('services.legal_consultations')</a></li>
                                            <li><a href="{{ route('recouvrementetcréances', app()->getLocale()) }}">@lang('services.debt_collection_&_recovery')</a></li>
                                            <li><a href="{{ route('assistancesjuridiques', app()->getLocale()) }}">@lang('services.legal_and_administrative_support')</a></li>
                                            <li><a href="{{ route('auditjuridique', app()->getLocale()) }}">@lang('services.legal_and_social_audit')</a></li>
                                            <li><a href="{{ route('avislégal', app()->getLocale()) }}">@lang('services.legal_disclaimer')</a></li>
                                            <li><a href="{{ route('juridictionsciviles', app()->getLocale()) }}">@lang('services.representation_and_assistance_in_civil_courts')</a></li>

                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="{{ route('blog', app()->getLocale()) }}">@lang('navigation.nav-blog')</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact', app()->getLocale()) }}">Contact</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">{{ strtoupper(app()->getLocale()) }}</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('home', ['fr']) }}">Francais</a></li>
                                            <li><a href="{{ route('home', ['en']) }}">English</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu__right">
                                <div class="main-menu__search-box">
                                    <a href="#"
                                       class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                </div>
                                <div class="main-menu__btn-box">
                                    <a href="contact.html" class="thm-btn main-menu__btn">Free Consultation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
