@extends('layouts.main')
@section('sidebar')
<div class="row">
    <div class="col-2">
        <nav class="container ps-3 sidenavbar sidenavbar-expand-lg navbar-light bs-side-navbar" style="background-color:rgb(241, 241, 241);">
            <h6 class="pt-2">JavaScript Dasar</h6>
            <div class="side-list"><a href="{{url('/belajar/js')}}">Perkenalan JavaScript</a></div>
            <div class="side-list"><a href="{{url('/belajar/js/dasar')}}">Dasar JavaScript</a></div>
        </nav>
    </div>
    <div class="col-10">
        @yield('belajarJS')
    </div>
</div>
@endsection