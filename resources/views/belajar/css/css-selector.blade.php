@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Selector</h1>
    <a href="{{ url('/belajar/css/syntax') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/how-to') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

