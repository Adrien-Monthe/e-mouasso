<header id="header_main" class="header_1 js-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="site-header-inner">
                    <div class="wrap-box relative">
                        <div id="site-logo" class="clearfix">
                            <div id="site-logo-inner">
                                <a href="index.html" rel="home" class="main-logo">
                                    <img id="logo_header" src="/frontend/images/logo/logo.png" alt="img" width="146" height="65">
                                </a>
                            </div>
                        </div>
                        <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                        @include('frontend.layouts.navigation')
                        <div class="flat-button-top">
                            <div class="sc-btn-top">
                                <a href="{{ route('contact' ) }}" class="sc-button btn-1"><span>@lang('navigation.nav-contact')
                                            </span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
