<!doctype html>
<html lang="en" class="theme-fs-md">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Solo Glance</title>
    @include('layouts.header_files')
</head>

<body>
<!-- loader Start -->
{{--<div id="loading">--}}
{{--    <div id="loading-center">--}}
{{--    </div>--}}
{{--</div>--}}
<!-- loader END -->
<div class="wrapper">
    @include('layouts.sidebar')
    @include('layouts.nav_bar')
    @include('layouts.right_sidebar')
    @yield('content')
</div>
@include('layouts.footer')
@include('layouts.footer_files')


</body>
</html>
