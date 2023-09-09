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
    <div style="background-color: #f8f9fa">
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
        // Sidebar save scroll
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

        // Side dan sub navbar active block ke tengah
        const sideActiveLink = document.querySelector('.sidebar a.active');
        if (sideActiveLink) {
            sideActiveLink.scrollIntoView({ block: 'center' });
        }
        const subActiveLink = document.querySelector('.sub-nav a.active');
        if (subActiveLink) {
            subActiveLink.scrollIntoView({ block: 'center' });
        }
    </script>
    // Side Navbar Latihan
    <script>
        const basicNav = document.querySelector('.nav-side .basicNav.active');
        const menengahNav = document.querySelector('.nav-side .menengahNav.active');
        const lanjutanNav = document.querySelector('.nav-side .lanjutanNav.active');
        if (basicNav) {
            var basic = document.getElementsByClassName('basic');
            for (var i=0;i<basic.length;i+=1){
            basic[i].style.display = 'block';
            }
        }
        if (menengahNav) {
            var menengah = document.getElementsByClassName('menengah');
            for (var i=0;i<menengah.length;i+=1){
            menengah[i].style.display = 'block';
            }
        }
        if (lanjutanNav) {
            var lanjutan = document.getElementsByClassName('lanjutan');
            for (var i=0;i<lanjutan.length;i+=1){
            lanjutan[i].style.display = 'block';
            }
        }
    </script>
    // Soal Latihan
    <script>
        function soal1() {
            document.getElementById("soal1").style.display = "block";
            document.getElementById("soal2").style.display = "none";
            document.getElementById("soal3").style.display = "none";
            document.getElementById("soal4").style.display = "none";
            document.getElementById("soal5").style.display = "none";
            document.getElementById("soal6").style.display = "none";
            document.getElementById("soal7").style.display = "none";
            document.getElementById("soal8").style.display = "none";
            document.getElementById("soal9").style.display = "none";
            document.getElementById("soal10").style.display = "none";
        }
        function soal2() {
            document.getElementById("soal1").style.display = "none";
            document.getElementById("soal2").style.display = "block";
            document.getElementById("soal3").style.display = "none";
            document.getElementById("soal4").style.display = "none";
            document.getElementById("soal5").style.display = "none";
            document.getElementById("soal6").style.display = "none";
            document.getElementById("soal7").style.display = "none";
            document.getElementById("soal8").style.display = "none";
            document.getElementById("soal9").style.display = "none";
            document.getElementById("soal10").style.display = "none";
        }
        function soal3() {
            document.getElementById("soal1").style.display = "none";
            document.getElementById("soal2").style.display = "none";
            document.getElementById("soal3").style.display = "block";
            document.getElementById("soal4").style.display = "none";
            document.getElementById("soal5").style.display = "none";
            document.getElementById("soal6").style.display = "none";
            document.getElementById("soal7").style.display = "none";
            document.getElementById("soal8").style.display = "none";
            document.getElementById("soal9").style.display = "none";
            document.getElementById("soal10").style.display = "none";
        }
        function soal4() {
            document.getElementById("soal1").style.display = "none";
            document.getElementById("soal2").style.display = "none";
            document.getElementById("soal3").style.display = "none";
            document.getElementById("soal4").style.display = "block";
            document.getElementById("soal5").style.display = "none";
            document.getElementById("soal6").style.display = "none";
            document.getElementById("soal7").style.display = "none";
            document.getElementById("soal8").style.display = "none";
            document.getElementById("soal9").style.display = "none";
            document.getElementById("soal10").style.display = "none";
        }
        function soal5() {
            document.getElementById("soal1").style.display = "none";
            document.getElementById("soal2").style.display = "none";
            document.getElementById("soal3").style.display = "none";
            document.getElementById("soal4").style.display = "none";
            document.getElementById("soal5").style.display = "block";
            document.getElementById("soal6").style.display = "none";
            document.getElementById("soal7").style.display = "none";
            document.getElementById("soal8").style.display = "none";
            document.getElementById("soal9").style.display = "none";
            document.getElementById("soal10").style.display = "none";
        }
        function soal6() {
            document.getElementById("soal1").style.display = "none";
            document.getElementById("soal2").style.display = "none";
            document.getElementById("soal3").style.display = "none";
            document.getElementById("soal4").style.display = "none";
            document.getElementById("soal5").style.display = "none";
            document.getElementById("soal6").style.display = "block";
            document.getElementById("soal7").style.display = "none";
            document.getElementById("soal8").style.display = "none";
            document.getElementById("soal9").style.display = "none";
            document.getElementById("soal10").style.display = "none";
        }
        function soal7() {
            document.getElementById("soal1").style.display = "none";
            document.getElementById("soal2").style.display = "none";
            document.getElementById("soal3").style.display = "none";
            document.getElementById("soal4").style.display = "none";
            document.getElementById("soal5").style.display = "none";
            document.getElementById("soal6").style.display = "none";
            document.getElementById("soal7").style.display = "block";
            document.getElementById("soal8").style.display = "none";
            document.getElementById("soal9").style.display = "none";
            document.getElementById("soal10").style.display = "none";
        }
        function soal8() {
            document.getElementById("soal1").style.display = "none";
            document.getElementById("soal2").style.display = "none";
            document.getElementById("soal3").style.display = "none";
            document.getElementById("soal4").style.display = "none";
            document.getElementById("soal5").style.display = "none";
            document.getElementById("soal6").style.display = "none";
            document.getElementById("soal7").style.display = "none";
            document.getElementById("soal8").style.display = "block";
            document.getElementById("soal9").style.display = "none";
            document.getElementById("soal10").style.display = "none";
        }
        function soal9() {
            document.getElementById("soal1").style.display = "none";
            document.getElementById("soal2").style.display = "none";
            document.getElementById("soal3").style.display = "none";
            document.getElementById("soal4").style.display = "none";
            document.getElementById("soal5").style.display = "none";
            document.getElementById("soal6").style.display = "none";
            document.getElementById("soal7").style.display = "none";
            document.getElementById("soal8").style.display = "none";
            document.getElementById("soal9").style.display = "block";
            document.getElementById("soal10").style.display = "none";
        }
        function soal10() {
            document.getElementById("soal1").style.display = "none";
            document.getElementById("soal2").style.display = "none";
            document.getElementById("soal3").style.display = "none";
            document.getElementById("soal4").style.display = "none";
            document.getElementById("soal5").style.display = "none";
            document.getElementById("soal6").style.display = "none";
            document.getElementById("soal7").style.display = "none";
            document.getElementById("soal8").style.display = "none";
            document.getElementById("soal9").style.display = "none";
            document.getElementById("soal10").style.display = "block";
        }
    </script>
    // Filter Level Kelas Mentor
    <script>
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
