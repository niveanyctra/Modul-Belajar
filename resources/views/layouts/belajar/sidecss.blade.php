@extends('layouts.main')
@section('sidebar')
<div class="wrapper-sidebar">

    <div class="row">
        <div class="col-4">
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
                <div class="side-list"><a href="{{url('/belajar/css/boxmodel')}}">Box Model CSS</a></div>
                <div class="side-list"><a href="{{url('/belajar/css/formatting')}}">Formatting CSS</a></div>
                <div class="side-list"><a href="{{url('/belajar/css/links')}}">Links CSS</a></div>
                <div class="side-list"><a href="{{url('/belajar/css/display')}}">Display CSS</a></div>
                <div class="side-list"><a href="{{url('/belajar/css/posisi')}}">Posisi CSS</a></div>
                <div class="side-list"><a href="{{url('/belajar/css/zindex')}}">Z-index CSS</a></div>
                <div class="side-list"><a href="{{url('/belajar/css/overflow')}}">Overflow CSS</a></div>
                <div class="side-list"><a href="{{url('/belajar/css/display')}}">Display CSS</a></div>
                <div class="side-list"><a href="{{url('/belajar/css/responsive')}}">Responsive CSS</a></div>
                <h6 class="pt-2">CSS Lanjutan</h6>
                <div class="side-list"><a href="{{url('/belajar/css/mquery')}}">Media Query CSS</a></div>
                <div class="side-list"><a href="{{url('/belajar/css/variable')}}">Variabel CSS</a></div>
                <div class="side-list"><a href="{{url('/belajar/css/shadow')}}">Shadow CSS</a></div>
                <div class="side-list"><a href="{{url('/belajar/css/animasi')}}">Animasi CSS</a></div>
                <div class="side-list"><a href="{{url('/belajar/css/flexbox')}}">Flexbox CSS</a></div>

        </div>
        <div class="col-8">
            @yield('belajarCSS')
        </div>
    </div>
</div>
@endsection
