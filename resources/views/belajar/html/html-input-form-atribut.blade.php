@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Form Input Form Atribut</h1>
    <a href="{{ url('/belajar/html/input-atribut') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
