@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Pengenalan</h1>
    <a href="{{ url('/') }}" class="btn btn-success">Home</a>
    <a href="{{ url('/belajar/js/where-to') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
