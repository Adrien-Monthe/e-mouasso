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

    <section class="tf-map">
        <iframe class="map-content"
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7302.453092836291!2d90.47477022812872!3d23.77494577893369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1627293157601!5m2!1svi!2s" allowfullscreen="" loading="lazy"></iframe>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="wrap-map">
                        <div class="box-map" >
                            <h3>Contact 24/7 <span>Head Office</span></h3>
                            <div class="inner">
                                <h4>Location</h4>
                                <p>18/2, Topkhana Road, Macca Surgical</p>
                                <p>Market, Melbourne, Australia.</p>
                            </div>
                            <div class="inner">
                                <h4>Email</h4>
                                <a href="email:info@lowlead.com"><p>info.lowlead@gmail.com</p></a>
                            </div>
                            <div class="inner">
                                <h4>Phone</h4>
                                <a href="tel:0123456789"><p>+66 555 999 222 00</p></a>
                            </div>

                            <div class="inner">
                                <h4>Website</h4>
                                <a href="#"><p>info@lowlead.com</p></a>
                            </div>
                            <div class="inner">
                                <h4>Status</h4>
                                <p>Completed </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section flat-contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="comments">
                        <div id="respond" class="respond-comment">
                            <h3 class="title-comment2">Good Contacts</h3>
                            <p class="text pl-2"> Nunc velit metus, volutpat elementum euismod eget, cursus nec nunc.</p>
                            <form method="post" id="contactform" class="comment-form form-submit"
                                  action="https://themesflat.co/html/lowlead/contact/contact-process.php" accept-charset="utf-8"
                                  novalidate="novalidate">
                                <div class="text-wrap clearfix">
                                    <fieldset class="name-wrap style-text">
                                        <input type="text" id="name" class="tb-my-input" name="name"
                                               tabindex="1" placeholder="Your Full Name" value="" size="32"
                                               aria-required="true" required="">
                                    </fieldset>
                                    <fieldset class="email-wrap style-text">
                                        <input type="email" id="email" class="tb-my-input" name="email"
                                               tabindex="2" placeholder="info.lawlead@gmail.com" value="" size="32"
                                               aria-required="true" required="">
                                    </fieldset>
                                    <fieldset class="phone-wrap style-text">
                                        <input type="tel" id="phone" class="tb-my-input" name="phone"
                                               tabindex="1" placeholder="+55 (121) 234 444" value="" size="32"
                                               aria-required="true" required="">
                                    </fieldset>
                                    <fieldset class="site-wrap style-text">
                                        <input type="text" id="site" class="tb-my-input" name="site"
                                               tabindex="1" placeholder="Enter Your Address" value="" size="32"
                                               aria-required="true" required="">
                                    </fieldset>
                                </div>
                                <fieldset class="message-wrap">
                                            <textarea id="comment-message" name="message" rows="3" tabindex="4"
                                                      placeholder="Additional Message"
                                                      aria-required="true"></textarea>
                                </fieldset>
                                <p class="text-call"> Call us 24/7 at 869-5414-5 or fill out the form below to receive a free and
                                    confidential initial consultation.</p>
                                <button name="submit" type="submit" id="comment-reply"
                                        class="button btn-submit-comment btn-1 btn-10"><span>Submit Request</span></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
