<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-overlayscrollbars-initialize>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SMK NEGERI 1 CIREBON | PPLG - Menjadi Seorang Web Developer</title>
    <link rel="icon" href="{{ url('img/logo.png') }}">

    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Overlay Scrollbars --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.3.0/styles/overlayscrollbars.min.css" integrity="sha512-MMVRaRR0pB97w1tzt6+29McVwX+YsQcSlIehGCGqFsC+KisK3d2F/xRxFaGMN7126EeC3A6iYRhdkr5nY8fz3Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha512-tu2VesH7qQi/IX4MN47Zw0SCia4hgBgu4xY/fP/gV2XcqdZsIh1B5wbSy4Mk5AhkkfTj/XMDQt86wzsZIsxPSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/4f5ac69095.js" crossorigin="anonymous"></script>
</head>

<body data-overlayscrollbars-initialize>
    @include('layouts.navbar')
    <div>
        @yield('content')
    </div>
    <!-- yield sidebar ini nggak kepake kah guys? -->
    @yield('sidebar')
    @yield('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script id="rendered-js">
        $(function() {
            $('.toggle-menu').click(function(e) {
                e.preventDefault();
                $('.sidebar').toggleClass('toggled');
            });
        });
    </script>
    <script>
        window.onbeforeunload = function() {
            sessionStorage.setItem("sidebarScroll", document.querySelector(".sidebar").scrollTop);

            sessionStorage.setItem("contentScroll", document.querySelector(".main").scrollTop);
        };

        window.onload = function() {
            document.querySelector(".sidebar").scrollTop = sessionStorage.getItem("sidebarScroll");

            document.querySelector(".main").scrollTop = sessionStorage.getItem("contentScroll");
        };
    </script>
</body>
</html>
