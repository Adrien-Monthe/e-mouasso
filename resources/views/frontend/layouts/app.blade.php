<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<head>

     @include('frontend.layouts.meta')

    @include('frontend.layouts.css')

</head>

<body class="body header-fixed">

<!-- preloade -->
<div class="preload preload-container">
    <div class="preload-logo"></div>
</div>
<!-- /preload -->

<div id="wrapper">
    <div id="page" class="clearfix">

        @include('frontend.layouts.top-bar')

        @include('frontend.layouts.header')

        @yield('content')

        @include('frontend.layouts.footer')

        <!-- Bottom -->
    </div>
    <!-- /#page -->
</div>
<!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->

@include('frontend.layouts.scripts')

</body>


<!-- Mirrored from themesflat.co/html/lowlead/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2023 06:35:46 GMT -->
</html>
