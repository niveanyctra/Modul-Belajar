@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Syntax</h1>
    <a href="{{ url('/belajar/php') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/comment') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
