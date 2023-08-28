@extends('layouts.main')
@section('sidebar')
<div class="wrapper-sidebar">

    <div class="row">
        <div class="col-4">
            <nav class="container ps-3 sidenavbar sidenavbar-expand-lg navbar-light bs-side-navbar" style="background-color:rgb(241, 241, 241);">
                <h6 class="pt-2">PHP Dasar</h6>
                <div class="side-list"><a href="{{url('/belajar/php')}}">Perkenalan PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/dasar')}}">Dasar PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/variabel')}}">Variabel PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/tipedata')}}">Tipe data PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/operator')}}">Operator PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/ifswitch')}}">If dan Switch Clause PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/looping')}}">Looping PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/Array')}}">Array PHP</a></div>
                <h6 class="pt-2">PHP Menengah</h6>
                <div class="side-list"><a href="{{url('/belajar/php/global')}}">Global Variable PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/form')}}">Form Handling PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/include')}}">Include PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/cookies')}}">Cookies PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/session')}}">Session PHP</a></div>
                <h6 class="pt-2">PHP Lanjutan</h6>
                <div class="side-list"><a href="{{url('/belajar/php/oop')}}">OOP PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/classobject')}}">Class dan Object PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/function')}}">Function PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/inheritance')}}">Inheritance PHP</a></div>
                <div class="side-list"><a href="{{url('/belajar/php/encapsulation')}}">Encapsulation PHP</a></div>

            </nav>
        </div>
        <div class="col-8">
            @yield('belajarPHP')
        </div>
    </div>
</div>
@endsection
