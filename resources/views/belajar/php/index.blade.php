@extends('layouts.main')
@section('content')
<header>
    <div class="container-fluid">
        <a href="#" class="toggle-menu fontawesome-reorder"></a>
        <nav class="sub-nav">
            <a href="a">aaa</a>
        </nav>
    </div>
</header>
<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">PHP Dasar</h3>
            <a href="{{url('/belajar/php')}}" class="active">Perkenalan PHP</a>
            <a href="{{url('/belajar/php/dasar')}}">Dasar PHP</a>
            <a href="{{url('/belajar/php/variabel')}}">Variabel PHP</a>
            <a href="{{url('/belajar/php/tipedata')}}">Tipe data PHP</a>
            <a href="{{url('/belajar/php/operator')}}">Operator PHP</a>
            <a href="{{url('/belajar/php/ifswitch')}}">If dan Switch Clause PHP</a>
            <a href="{{url('/belajar/php/looping')}}">Looping PHP</a>
            <a href="{{url('/belajar/php/Array')}}">Array PHP</a>
        <h3 class="sidebar-header">PHP Menengah</h3>
            <a href="{{url('/belajar/php/global')}}">Global Variable PHP</a>
            <a href="{{url('/belajar/php/form')}}">Form Handling PHP</a>
            <a href="{{url('/belajar/php/include')}}">Include PHP</a>
            <a href="{{url('/belajar/php/cookies')}}">Cookies PHP</a>
            <a href="{{url('/belajar/php/session')}}">Session PHP</a>
        <h3 class="sidebar-header">PHP Lanjutan</h3>
            <a href="{{url('/belajar/php/oop')}}">OOP PHP</a>
            <a href="{{url('/belajar/php/classobject')}}">Class dan Object PHP</a>
            <a href="{{url('/belajar/php/function')}}">Function PHP</a>
            <a href="{{url('/belajar/php/inheritance')}}">Inheritance PHP</a>
            <a href="{{url('/belajar/php/encapsulation')}}">Encapsulation PHP</a>
    </nav>
</aside>

<section class="main">
Index
</section>
@endsection
