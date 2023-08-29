<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>SMK NEGERI 1 CIREBON | PPLG - Menjadi Seorang Web Developer</title>
    <link rel="icon" href="{{ url('img/logo.png') }}">

    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Overlay Scrollbars --}}
    <link href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js"></script>

    <style>
        @import url(http://weloveiconfonts.com/api/?family=fontawesome);
    </style>
</head>

<body data-overlayscrollbars-initialize>
    @include('layouts.navbar')
    <div class="">
        @yield('content')
    </div>
    @yield('sidebar')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script id="rendered-js">
        $(function() {
            $('.toggle-menu').click(function(e) {
                e.preventDefault();
                $('.sidebar').toggleClass('toggled');
            });
        });
    </script>
</body>

</html>
