<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>HONO</title>

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    @include('site.partials.styles')

</head>

<body>
    @include('site.partials.header')
    @yield('content')
    @include('site.partials.footer')

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>
    @include('site.partials.modal_quickview_cart')
    @include('site.partials.modal_add_cart')
    @include('site.partials.scripts')
</body>
</html>
