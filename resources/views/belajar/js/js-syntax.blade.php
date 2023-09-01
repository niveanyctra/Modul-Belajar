@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Syntax</h1>
    <a href="{{ url('/belajar/js/statement') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/comment') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
