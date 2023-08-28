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
    <style>
@import url(http://weloveiconfonts.com/api/?family=fontawesome);
    [class*="fontawesome-"]:before {
      font-family: "fontawesome", sans-serif;
    }

    html, body {
      height: 100%;
    }


header {
    height: 30px;
  color: #fff;
  background-color: #000;
}

    .sub-nav{
        margin-left: 10px;
    }
    .sidebar, .main {
      transition: all 0.3s ease-out;
      overflow: scroll;
      -webkit-overflow-scrolling: touch;
      position: absolute;
      top: 64px;
      bottom: 0;
    }

    .sidebar {
        margin-top: 30px;
      width: 260px;
      background-color: #333;
      left: 0;
    }

    .main {
        margin-top: 30px;
      background-color: #f5f5f5;
      position: absolute;
      left: 260px;
      right: 0;
      padding: 20px;
    }

    .sidebar-header {
      background-color: #555;
      color: #ccc;
      margin: 0;
      padding: 0 20px;
      font-weight: normal;
      line-height: 2;
      text-transform: uppercase;
      font-size: 90%;
    }

    .toggle-menu {
      color: #ccc;
      text-decoration: none;
      font-size: 50px;
      float: left;
      display: block;
      position: absolute;
      left: 0;
      z-index: -1;
      opacity: 0;
      transition: opacity 0.3s ease-out;
    }
    .toggle-menu:hover {
      color: #fff;
    }
    .toggle-menu:before {
      height: 64px;
      width: 64px;
      display: block;
      text-align: center;
      line-height: 64px;
      font-size: 24px;
    }

    .nav-side a {
      color: #ccc;
      background-color: #333;
      margin-bottom: 1px;
      border-left: 10px solid transparent;
    }
    .nav-side a.active {
      border-color: #e35205;
    }

    @media all and (max-width: 1024px) {
    .sidebar.toggled {
        left: 0;
        z-index: 10;
        box-shadow: 3px 1px 10px rgba(0, 0, 0, 0.8);
      }
      .sidebar.toggled + .main {
        overflow: hidden;
      }

      .sidebar {
        left: -260px;
      }

      .main {
        margin-top: 30px;
        left: 0;
      }

      .toggle-menu {
        margin-top: -18px;
        z-index: 1;
        opacity: 1;
      }
      .sub-nav {
        margin-left: 60px;
      }
    }

    </style>
</head>

<body>
    @include('layouts.navbar')
    <div class="">
        @yield('content')
    </div>
    @yield('sidebar')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script id="rendered-js">
    $(function(){
      $('.toggle-menu').click(function(e){
        e.preventDefault();
        $('.sidebar').toggleClass('toggled');
      });
    });
</script>
</body>
</html>
