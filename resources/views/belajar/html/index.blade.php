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
        <h3 class="sidebar-header">HTML Dasar</h3>
            <a href="{{url('/belajar/html')}}" class="active">Perkenalan HTML</a>
            <a href="{{url('/belajar/html/dasar')}}">Dasar HTML</a>
            <a href="{{url('/belajar/html/elemen')}}">Elemen HTML</a>
            <a href="{{url('/belajar/html/atribut')}}">Atribut HTML</a>
            <a href="{{url('/belajar/html/heading')}}">Heading HTML</a>
            <a href="{{url('/belajar/html/paragraf')}}">Paragraf HTML</a>
            <a href="{{url('/belajar/html/br')}}">Baris Baru HTML</a>
        <h3 class="sidebar-header">HTML Menengah</h3>
            <a href="{{url('/belajar/html/styling')}}">Style HTML</a>
            <a href="{{url('/belajar/html/formatting')}}">Formatting HTML</a>
            <a href="{{url('/belajar/html/block')}}">Block Element HTML</a>
            <a href="{{url('/belajar/html/inline')}}">Inline Element HTML</a>
            <a href="{{url('/belajar/html/hyperlink')}}">Hyperlink HTML</a>
            <a href="{{url('/belajar/html/table')}}">Table HTML</a>
            <a href="{{url('/belajar/html/list')}}">List HTML</a>
            <a href="{{url('/belajar/html/image')}}">Image HTML</a>
            <a href="{{url('/belajar/html/form')}}">Form HTML</a>
            <a href="{{url('/belajar/html/class')}}">Class HTML</a>
            <a href="{{url('/belajar/html/id')}}">Id HTML</a>
        <h3 class="sidebar-header">HTML Lanjutan</h3>
            <a href="{{url('/belajar/html/iframe')}}">Iframe HTML</a>
            <a href="{{url('/belajar/html/media')}}">Media HTML</a>
            <a href="{{url('/belajar/html/method')}}">Method HTTP</a>
    </nav>
</aside>

<section class="main">
    Index
</section>
@endsection
