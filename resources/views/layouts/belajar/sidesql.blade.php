@extends('layouts.main')
@section('sidebar')
<div class="row">
    <div class="col-2">
        <nav class="container ps-3 sidenavbar sidenavbar-expand-lg navbar-light bs-side-navbar" style="background-color:rgb(241, 241, 241);">
            <h6 class="pt-2">SQL Dasar</h6>
            <div class="side-list"><a href="{{url('/belajar/sql')}}">Perkenalan SQL</a></div>
            <div class="side-list"><a href="{{url('/belajar/sql/dasar')}}">dasar SQL</a></div>
        </nav>
    </div>
    <div class="col-10">
        @yield('belajarSQL')
    </div>
</div>
@endsection
