@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Pengenalan</h1>
    <a href="{{ url('/') }}" class="btn btn-success">Home</a>
    <a href="{{ url('/belajar/html/dasar') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
