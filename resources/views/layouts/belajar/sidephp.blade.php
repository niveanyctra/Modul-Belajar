@extends('layouts.main')
@section('sidebar')
<div class="wrapper-sidebar">

    <div class="row">
        <div class="col-4">
            <nav class="container ps-3 sidenavbar sidenavbar-expand-lg navbar-light bs-side-navbar" style="background-color:rgb(241, 241, 241);">
                <h6 class="pt-2">PHP Dasar</h6>
                <div class="side-list"><a href="{{url('/belajar/php')}}">Perkenalan PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/dasar')}}">Dasar PHP</a></div>
            </nav>
        </div>
        <div class="col-8">
            @yield('belajarPHP')
        </div>
    </div>
</div>
@endsection
