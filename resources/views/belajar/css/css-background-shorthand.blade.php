@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Background Shorthand</h1>
    <a href="{{ url('/belajar/css/background-attachment') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/background-border') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

