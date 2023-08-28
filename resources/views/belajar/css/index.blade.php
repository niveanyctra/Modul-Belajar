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
        <h3 class="sidebar-header">CSS Dasar</h3>
            <a href="{{url('/belajar/css')}}" class="active">Perkenalan CSS</a>
            <a href="{{url('/belajar/css/dasar')}}">Dasar CSS</a>
            <a href="{{url('/belajar/css/selector')}}">Selector CSS</a>
            <a href="{{url('/belajar/css/color')}}">Color CSS</a>
            <a href="{{url('/belajar/css/background')}}">Background CSS</a>
            <a href="{{url('/belajar/css/border')}}">Border CSS</a>
            <a href="{{url('/belajar/css/margin')}}">Margin CSS</a>
            <a href="{{url('/belajar/css/padding')}}">Padding CSS</a>
            <a href="{{url('/belajar/css/ukuran')}}">Ukuran CSS</a>
        <h3 class="sidebar-header">CSS Menengah</h3>
            <a href="{{url('/belajar/css/boxmodel')}}">Box Model CSS</a>
            <a href="{{url('/belajar/css/formatting')}}">Formatting CSS</a>
            <a href="{{url('/belajar/css/links')}}">Links CSS</a>
            <a href="{{url('/belajar/css/display')}}">Display CSS</a>
            <a href="{{url('/belajar/css/posisi')}}">Posisi CSS</a>
            <a href="{{url('/belajar/css/zindex')}}">Z-index CSS</a>
            <a href="{{url('/belajar/css/overflow')}}">Overflow CSS</a>
            <a href="{{url('/belajar/css/display')}}">Display CSS</a>
            <a href="{{url('/belajar/css/responsive')}}">Responsive CSS</a>
        <h3 class="sidebar-header">CSS Lanjutan</h3>
            <a href="{{url('/belajar/css/mquery')}}">Media Query CSS</a>
            <a href="{{url('/belajar/css/variable')}}">Variabel CSS</a>
            <a href="{{url('/belajar/css/shadow')}}">Shadow CSS</a>
            <a href="{{url('/belajar/css/animasi')}}">Animasi CSS</a>
            <a href="{{url('/belajar/css/flexbox')}}">Flexbox CSS</a>
    </nav>
</aside>

<section class="main">
    Index
</section>
@endsection

