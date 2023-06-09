@extends('backend.layouts.app')

@section('page-title', __('home.page-title'))

@section('content')
    <div class="pagetitle">
        <h1>Contact</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ol>
        </nav>
    </div>
    <section class="section contact">
        <div class="row gy-4">
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box card"><i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>Akwa Rue Sylvanie,<br>Douala, Cameroun</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card"><i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>+237 699 787 494<br>+237 691 795 848</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card"><i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p><a href="#">info@genzis.net</a><br><a href="#">adrien.monthe@genzis.net</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card"><i class="bi bi-clock"></i>
                            <h3>Open Hours</h3>
                            <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card p-4">
                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">
                            <div class="col-md-6"><input type="text" name="name" class="form-control"
                                                         placeholder="Your Name" required></div>
                            <div class="col-md-6 "><input type="email" class="form-control" name="email"
                                                          placeholder="Your Email" required></div>
                            <div class="col-md-12"><input type="text" class="form-control" name="subject"
                                                          placeholder="Subject" required></div>
                            <div class="col-md-12"><textarea class="form-control" name="message" rows="6"
                                                             placeholder="Message" required></textarea></div>
                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                <button type="submit">Send Message</button>
                            </div>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
