<!--Contact One Start-->
<section class="contact-one">
    <div class="contact-one__bg" style="background-image: url(/frontend/images/backgrounds/contact-one-bg.jpg);">
    </div>
    <div class="contact-one__shape-1 float-bob-x">
        <img src="/frontend/images/shapes/contact-one-shape-1.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact-one__left">
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
            <div class="col-xl-6 col-lg-6">
                <div class="contact-one__right">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">@lang('contact.contact-us')</span>
                        </div>
                        <h2 class="section-title__title">@lang('contact.have-questions') @lang('contact.contact-with-us') <span>@lang('contact.anytime')</span></h2>
                    </div>
                    <ul class="contact-one__points list-unstyled">
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
<!--Contact One End-->
