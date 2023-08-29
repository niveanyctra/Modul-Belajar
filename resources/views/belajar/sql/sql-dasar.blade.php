@extends('layouts.main')
@section('content')
<header>
    <div class="container-fluid">
        <a href="#" class="toggle-menu fontawesome-reorder"></a>
        <nav class="sub-nav">
            <a href="{{ url('/belajar/html') }}">
                <span>Belajar HTML</span>
            </a>
            <a href="{{ url('/belajar/css') }}">
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
        <h3 class="sidebar-header">SQL Dasar</h3>
            <a href="{{url('/belajar/sql')}}">Perkenalan SQL</a>
            <a href="{{url('/belajar/sql/dasar')}}" class="active">dasar SQL</a>
    </nav>
</aside>

<section class="main">
    Dasar
</section>
@endsection
