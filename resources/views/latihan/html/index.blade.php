@extends('layouts.main')
@section('content')
<header>
    <div class="container-fluid">
        <a href="#" class="toggle-menu fontawesome-reorder"></a>
        <nav class="sub-nav">
            <a href="{{ url('/latihan/html') }}">
                <span>Latihan HTML</span>
            </a>
            <a href="{{ url('/latihan/css') }}">
                <span>Latihan CSS</span>
            </a>
            <a href="{{ url('/latihan/php') }}">
                <span>Latihan PHP</span>
            </a>
            <a href="{{ url('/latihan/js') }}">
                <span>Latihan JS</span>
            </a>
            <a href="{{ url('/latihan/sql') }}">
                <span>Latihan SQL</span>
            </a>
        </nav>
    </div>
</header>
<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">Contents</h3>
        <a href="" class="active">Link</a>
    </nav>
</aside>

<section class="main">

</section>
@endsection
