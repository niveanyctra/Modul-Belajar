<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SMK NEGERI 1 CIREBON | PPLG - Menjadi Seorang Web Developer</title>
    <link rel="icon" href="{{ url('img/logo.png') }}">

    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

    <!-- NonCDN bootstrap -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/docs.css') }}" rel="stylesheet">
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- CDN bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- Overlay Scrollbars -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.3.0/styles/overlayscrollbars.min.css" integrity="sha512-MMVRaRR0pB97w1tzt6+29McVwX+YsQcSlIehGCGqFsC+KisK3d2F/xRxFaGMN7126EeC3A6iYRhdkr5nY8fz3Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha512-tu2VesH7qQi/IX4MN47Zw0SCia4hgBgu4xY/fP/gV2XcqdZsIh1B5wbSy4Mk5AhkkfTj/XMDQt86wzsZIsxPSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/4f5ac69095.js" crossorigin="anonymous"></script>
</head>

<body>
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
        let sidebar = document.querySelector(".sidebar");
        let topSidebar = sessionStorage.getItem("sidebar-scroll");
        if (topSidebar !== null) {
            sidebar.scrollTop = parseInt(topSidebar, 10);
        }
        // let main = document.querySelector(".main");
        // let topMain = sessionStorage.getItem("main-scroll");
        // if (topMain !== null) {
        // main.scrollTop = parseInt(topMain, 10);
        // }

        window.addEventListener("beforeunload", () => {
            sessionStorage.setItem("sidebar-scroll", sidebar.scrollTop);
            sessionStorage.removeItem("sidebarSrcroll");
        });
        const activeLink = document.querySelector('.sidebar a.active');
        if (activeLink) {
            activeLink.scrollIntoView({ block: 'center' });
        }

        function levelCheck() {
            if (document.getElementById('mudahCheck').checked) {
                var mudah = document.getElementsByClassName('mudah');
                for (var i=0;i<mudah.length;i+=1){
                mudah[i].style.display = 'block';
                }
                var menengah = document.getElementsByClassName('menengah');
                for (var i=0;i<menengah.length;i+=1){
                menengah[i].style.display = 'none';
                }
            }
            else if (document.getElementById('menengahCheck').checked) {
                var mudah = document.getElementsByClassName('mudah');
                for (var i=0;i<mudah.length;i+=1){
                mudah[i].style.display = 'none';
                }
                var menengah = document.getElementsByClassName('menengah');
                for (var i=0;i<menengah.length;i+=1){
                menengah[i].style.display = 'block';
                }
            }
            else{
                var mudah = document.getElementsByClassName('mudah');
                for (var i=0;i<mudah.length;i+=1){
                mudah[i].style.display = 'block';
                }
                var menengah = document.getElementsByClassName('menengah');
                for (var i=0;i<menengah.length;i+=1){
                menengah[i].style.display = 'block';
                }
            }
        }
    </script>
</body>
</html>
