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
            <a href="{{ url('/belajar/php') }}" class="active">
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
        <h3 class="sidebar-header">PHP Tutorial</h3>
            <a href="{{url('/belajar/php')}}">PHP Pengenalan</a>
            <a href="{{url('/belajar/php/syntax')}}">PHP Syntax</a>
            <a href="{{ url('/belajar/php/comment') }}" class="active">PHP Komentar</a>
            <a href="{{ url('/belajar/php/variable') }}">PHP Variable</a>
            <a href="{{ url('/belajar/php/echo-print') }}">PHP Echo / Print</a>
            <a href="{{ url('/belajar/php/data-type') }}">PHP Tipe Data</a>
            <a href="{{ url('/belajar/php/string') }}">PHP String</a>
            <a href="{{ url('/belajar/php/number') }}">PHP Angka</a>
            <a href="{{ url('/belajar/php/math') }}">PHP Math</a>
            <a href="{{ url('/belajar/php/constant') }}">PHP Constants</a>
            <a href="{{ url('/belajar/php/operator') }}">PHP Operator</a>
            <a href="{{ url('/belajar/php/if-else') }}">PHP If...Else...Elseif</a>
            <a href="{{ url('/belajar/php/switch') }}">PHP Switch</a>
            <a href="{{ url('/belajar/php/function') }}">PHP Function</a>
        <h3 class="sidebar-header">PHP Loop</h3>
            <a href="{{ url('/belajar/php/loop') }}">Loop</a>
            <a href="{{ url('/belajar/php/while-loop') }}">While Loop</a>
            <a href="{{ url('/belajar/php/do-while-loop') }}">Do While Loop</a>
            <a href="{{ url('/belajar/php/for-loop') }}">For Loop</a>
            <a href="{{ url('/belajar/php/foreach-loop') }}">Foreach Loop</a>
            <a href="{{ url('/belajar/php/break-continue') }}">Break/Continue</a>
    </nav>
</aside>

<section class="main">
    <h1>PHP Komentar</h1>
    <a href="{{ url('/belajar/php/syntax') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/variable') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
