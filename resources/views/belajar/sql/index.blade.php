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
        <h3 class="sidebar-header">SQL Dasar</h3>
            <a href="{{url('/belajar/sql')}}" class="active">Perkenalan SQL</a>
            <a href="{{url('/belajar/sql/dasar')}}">dasar SQL</a>
    </nav>
</aside>

<section class="main">
    index
</section>
@endsection
