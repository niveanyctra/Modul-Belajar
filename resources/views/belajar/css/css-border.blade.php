@extends('layouts.main')
@section('content')
<header>
    <div class="container-fluid">
        <a href="#" class="toggle-menu fontawesome-reorder"></a>
        <nav class="sub-nav">
            <a href="{{ url('/belajar/html') }}">
                <span>Belajar HTML</span>
            </a>
            <a href="{{ url('/belajar/css') }}" class="active">
                <span>Belajar CSS</span>
            </a>
            <a href="{{ url('/belajar/php') }}">
                <span>Belajar PHP</span>
            </a>
            <a href="{{ url('/belajar/js') }}">
                <span>Belajar JS</span>
            </a>
            <a href="{{ url('/belajar/sql') }}">
                <span>Belajar SQL</span>
            </a>
        </nav>
    </div>
</header>
<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">CSS Tutorial</h3>
            <a href="{{url('/belajar/css')}}">CSS Pengenalan</a>
            <a href="{{url('/belajar/css/syntax')}}">CSS Syntax</a>
            <a href="{{url('/belajar/css/selector')}}">CSS Selector</a>
            <a href="{{url('/belajar/css/how-to')}}">CSS Cara Menggunakan</a>
            <a href="{{url('/belajar/css/comment')}}">CSS Komentar</a>
            <a href="{{url('/belajar/css/color')}}">CSS Warna</a>
            <a href="{{url('/belajar/css/margin')}}">CSS Margin</a>
            <a href="{{url('/belajar/css/padding')}}">CSS Padding</a>
            <a href="{{url('/belajar/css/dimensi')}}">CSS Height/Width</a>
        <h3 class="sidebar-header">CSS Backgorund</h3>
            <a href="{{ url('/belajar/css/background-color') }}">Background Color</a>
            <a href="{{ url('/belajar/css/background-image') }}">Background Image</a>
            <a href="{{ url('/belajar/css/background-repeat') }}">Background Repeat</a>
            <a href="{{ url('/belajar/css/background-attachment') }}">Background Attachment</a>
            <a href="{{ url('/belajar/css/background-shorthand') }}">Background Shorthand</a>
        <h3 class="sidebar-header">CSS Border</h3>
            <a href="{{ url('/belajar/css/border') }}" class="active">Border</a>
            <a href="{{ url('/belajar/css/border-width') }}">Border Width</a>
            <a href="{{ url('/belajar/css/border-color') }}">Border Color</a>
            <a href="{{ url('/belajar/css/border-side') }}">Border Side</a>
            <a href="{{ url('/belajar/css/border-shorthand') }}">Border Shorthand</a>
            <a href="{{ url('/belajar/css/border-rounded') }}">Rounded Border</a>
    </nav>
</aside>

<section class="main">
    <h1>CSS Border</h1>
    <a href="{{ url('/belajar/css/background-shorthand') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/border-width') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

