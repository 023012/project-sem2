<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">
        <title>Dashboard HONO</title>
        @include('admin.partials.styles')
        @stack('styles')
      </head>
<body>
    <div class="vertical  light ">
        <div class="wrapper">
            @include('admin.partials.header')
            @include('admin.partials.aside')
            @yield('content')
        </div>
    </div>
    @include('admin.partials.scripts')
    @stack('scripts')
</body>
</html>
