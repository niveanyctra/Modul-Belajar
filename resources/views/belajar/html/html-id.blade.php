@extends('layouts.main')
@section('content')
<header>
    <div class="container-fluid">
        <a href="#" class="toggle-menu fontawesome-reorder"></a>
        <nav class="sub-nav">
            <a href="{{ url('/belajar/html') }}" class="active">
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
        <h3 class="sidebar-header">HTML Tutorial</h3>
            <a href="{{url('/belajar/html')}}">HTML Pengenalan</a>
            <a href="{{url('/belajar/html/dasar')}}">HTML Dasar</a>
            <a href="{{url('/belajar/html/element')}}">HTML Element</a>
            <a href="{{url('/belajar/html/atribut')}}">HTML Atribut</a>
            <a href="{{url('/belajar/html/heading')}}">HTML Heading</a>
            <a href="{{url('/belajar/html/paragraf')}}">HTML Paragraf</a>
            <a href="{{url('/belajar/html/styling')}}">HTML Style</a>
            <a href="{{url('/belajar/html/formatting')}}">HTML Formatting</a>
            <a href="{{url('/belajar/html/quotation')}}">HTML Quotation</a>
            <a href="{{url('/belajar/html/comment')}}">HTML Komentar</a>
            <a href="{{url('/belajar/html/color')}}">HTML Warna</a>
            <a href="{{url('/belajar/html/css')}}">HTML CSS</a>
            <a href="{{url('/belajar/html/link')}}">HTML Link</a>
            <a href="{{url('/belajar/html/image')}}">HTML Foto</a>
            <a href="{{url('/belajar/html/favicon')}}">HTML Favicon</a>
            <a href="{{url('/belajar/html/page-title')}}">HTML Title Halaman</a>
            <a href="{{url('/belajar/html/block-inline')}}">HTML Block & Inline</a>
            <a href="{{url('/belajar/html/class')}}">HTML Class</a>
            <a href="{{url('/belajar/html/id')}}" class="active">HTML Id</a>
        <h3 class="sidebar-header">HTML Table</h3>
            <a href="{{url('/belajar/html/table')}}">Table</a>
            <a href="{{url('/belajar/html/table-border')}}">Table Border</a>
            <a href="{{url('/belajar/html/table-size')}}">Table Size</a>
            <a href="{{url('/belajar/html/table-header')}}">Table Header</a>
            <a href="{{url('/belajar/html/table-padding-spacing')}}">Padding & Spacing</a>
            <a href="{{url('/belajar/html/table-colspan-rowspan')}}">Colspan & Rowspan</a>
            <a href="{{url('/belajar/html/table-styling')}}">Table Styling</a>
            <a href="{{url('/belajar/html/table-colgroup')}}">Table Colgroup</a>
        <h3 class="sidebar-header">HTML List</h3>
            <a href="{{url('/belajar/html/list')}}">List</a>
            <a href="{{url('/belajar/html/unordered-list')}}">Unordered List</a>
            <a href="{{url('/belajar/html/ordered-list')}}">Ordered List</a>
            <a href="{{url('/belajar/html/other-list')}}">Other List</a>
        <h3 class="sidebar-header">HTML Form</h3>
            <a href="{{ url('/belajar/html/form') }}">Form</a>
            <a href="{{ url('/belajar/html/form') }}">Form Atribut</a>
            <a href="{{ url('/belajar/html/form') }}">Form Element</a>
            <a href="{{ url('/belajar/html/form') }}">Input Tipe</a>
            <a href="{{ url('/belajar/html/form') }}">Input Atribut</a>
            <a href="{{ url('/belajar/html/form') }}">Input Form Atribut</a>
    </nav>
</aside>

<section class="main">
    <h1>HTML Id</h1>
    <a href="{{ url('/belajar/html/class') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/table') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
