@extends('layouts.main')
@section('sidebar')
<div class="row">
    <div class=" col-2">

        <nav class="container ps-3 sidenavbar sidenavbar-expand-lg navbar-light bs-side-navbar" style="background-color:rgb(241, 241, 241);">
            <h6 class="pt-2">HTML Dasar</h6>
            <div class="side-list"><a href="{{url('/belajar/html')}}">Perkenalan HTML</a></div>
            <div class="side-list"><a href="{{url('/belajar/html/dasar')}}">Dasar HTML</a></div>
            <div class="side-list"><a href="{{url('/belajar/html/elemen')}}">Elemen HTML</a></div>
            <div class="side-list"><a href="{{url('/belajar/html/atribut')}}">Atribut HTML</a></div>
            <div class="side-list"><a href="{{url('/belajar/html/heading')}}">Heading HTML</a></div>
            <div class="side-list"><a href="{{url('/belajar/html/paragraf')}}">Paragraf HTML</a></div>
            <h6 class="pt-2">HTML Menengah</h6>
            <div class="side-list"><a href="{{url('/belajar/html/styling')}}">Style HTML</a></div>
            <div class="side-list"><a href="{{url('/belajar/html/formatting')}}">Formatting HTML</a></div>
            <div class="side-list"><a href="{{url('/belajar/html/style')}}">Style HTML</a></div>
            <div class="side-list"><a href="{{url('/belajar/html/style')}}">Style HTML</a></div>
            <div class="side-list"><a href="{{url('/belajar/html/style')}}">Style HTML</a></div>
        </nav>
        </div>
    <div class="col-10">
        @yield('kelasHTML')
    </div>
</div>
@endsection
