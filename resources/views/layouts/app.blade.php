<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SMK NEGERI 1 CIREBON | PPLG - Menjadi Seorang Web Developer</title>
        <link rel="icon" href="{{ url('img/logo.png') }}">

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- DataTables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/trix.js') }}"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }
        /* dashboard */
        .small-box {
            border-radius: 0.25rem;
            box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%);
            display: block;
            margin-bottom: 20px;
            position: relative;
            color: white;
        }
        .small-box>.inner {
            padding: 10px;
        }
        .small-box h3 {
            font-size: 2.2rem;
            font-weight: 700;
            margin: 0 0 10px;
            padding: 0;
            white-space: nowrap;
        }
        .small-box h3, .small-box p {
            z-index: 5;
        }
        .small-box .icon {
            color: rgba(0,0,0,.15);
            z-index: 0;
        }
        .small-box .icon>i.fa, .small-box .icon>i.fab, .small-box .icon>i.fad, .small-box .icon>i.fal, .small-box .icon>i.far, .small-box .icon>i.fas, .small-box .icon>i.ion {
            font-size: 70px;
            top: 20px;
        }
        .small-box .icon>i, .small-box .icon>svg{
            font-size: 90px;
            position: absolute;
            right: 15px;
            top: 15px;
            transition: -webkit-transform .3s linear;
            transition: transform .3s linear;
            transition: transform .3s linear,-webkit-transform .3s linear;
        }
        .small-box>.small-box-footer {
            background-color: rgba(0,0,0,.1);
            color: rgba(255,255,255,.8);
            display: block;
            padding: 3px 0;
            position: relative;
            text-align: center;
            text-decoration: none;
            z-index: 10;
        }
        /* end dashboard */
    </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            {{-- @include('layouts.navigation') --}}
            @if (Auth::user()->role == 'super admin')
                @include('layouts.navigation-superadmin')
            @elseif (Auth::user()->role == 'admin')
                @include('layouts.navigation-admin')
            @elseif (Auth::user()->role == 'teacher')
                @include('layouts.navigation-teacher')
            @elseif (Auth::user()->role == 'mentor')
                @include('layouts.navigation-mentor')
            @elseif (Auth::user()->role == 'user')
                @include('layouts.navigation-user')
            @endif

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

        <!-- DataTables -->
        <script>
            let table = new DataTable('#example');
        </script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    </body>
</html>
