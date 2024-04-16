<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{!! config('app.name') !!} - @yield('title')</title>
    <!-- Favicon icon -->
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="./images/favicon.png"
    />
    <!-- Custom Stylesheet -->

    <link rel="stylesheet" href="{!! asset('front/css/style.css') !!}" />
    <link rel="stylesheet" href="{!! asset('front/css/custom.css') !!}" />
</head>

<body>
<div id="preloader"><i>.</i><i>.</i><i>.</i></div>

<div id="main-wrapper">
    <div class="authincation">
        <div class="container h-100">
            @include('errors-and-messages')
            @yield('content')
        </div>
    </div>
</div>

<script src="{!! asset('front/vendor/jquery/jquery.min.js') !!}"></script>
<script src="{!! asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

<script src="{!! asset('front/js/scripts.js') !!}"></script>
<script></script>
</body>
</html>
