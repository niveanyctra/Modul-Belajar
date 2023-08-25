@extends('layouts.main')
@section('sidebar')
<div class="row">
    <div class="col-2">
                <nav class="container ps-3 sidenavbar sidenavbar-expand-lg navbar-light bs-side-navbar" style="background-color:rgb(241, 241, 241);">
            <h6 class="pt-2">CSS Dasar</h6>
            <div class="side-list"><a href="{{url('/belajar/css/perkenalan')}}">Perkenalan CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/dasar')}}">Dasar CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/selector')}}">Selector CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/color')}}">Color CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/background')}}">Background CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/border')}}">Border CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/margin')}}">Margin CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/padding')}}">Padding CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/ukuran')}}">Ukuran CSS</a></div>
            <h6 class="pt-2">CSS Menengah</h6>
            <div class="side-list"><a href="{{url('/belajar/css/style')}}">Style CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/formatting')}}">Formatting CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/hyperlink')}}">Hyperlink CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/table')}}">Table CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/list')}}">List CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/image')}}">Image CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/form')}}">Form CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/class')}}">Class CSS</a></div>
            <div class="side-list"><a href="{{url('/belajar/css/id')}}">Id CSS</a></div>
            <h6 class="pt-2">CSS Lanjutan</h6>
            <div class="side-list"><a href="{{url('/belajat/css/media')}}">Media CSS</a></div>
            <div class="side-list"><a href="{{url('/belajat/css/method')}}">Method HTTP</a></div>

    </div>
    <div class="col-10">
        @yield('belajarCSS')
    </div>
</div>
@endsection
