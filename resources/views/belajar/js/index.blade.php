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
        <h3 class="sidebar-header">JavaScript Dasar</h3>
            <a href="{{url('/belajar/js')}}" class="active">Perkenalan JavaScript</a>
            <a href="{{url('/belajar/js/dasar')}}">Dasar JavaScript</a>
    </nav>
</aside>

<section class="main">
    index
</section>
@endsection
