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
    .dropdown-menu .dropdown-item {
        align-items: center;
        display: flex;
        gap: 14px;
        min-width: 300px;
        /* padding: 53px 33px 52px 34px!important; */
        min-width: -webkit-max-content;
        min-width: -moz-max-content;
        min-width: max-content;
        position: relative;
        transition: all .3s ease-in-out;
        white-space: normal!important;
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content;
    }
    .dropdown-menu[aria-labelledby=listAlurBelajarDropdown] .dd-item-list {
    display: flex;
    flex-direction: column;
    row-gap: 24px;
}

.side-list a{
    text-decoration: none;
    color: rgb(255, 255, 255);
}
@media (min-width: 992px) {
  .sidenavbar,
  .sidenavbar-collapse {
    flex-direction: column;
  }
  .sidenavbar-expand-lg .sidenavbar-nav {
    flex-direction: column;
  }
  .sidenavbar {
    width: 100%;
    height: 100vh;
    align-items: flex-start;
  }
  .sidenavbar-brand {
    margin-left: 0.5em;
    padding-bottom: 0;
    border-bottom: 4px solid #464646;
  }
  form input {
    margin-bottom: 0.7em;
  }
}
    </style>
</head>

<body>
    @include('layouts.navbar')
    @yield('content')
</body>

</html>
