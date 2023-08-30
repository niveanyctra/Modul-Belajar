@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Foto atau Image</h1>
    <a href="{{ url('/belajar/html/link') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/favicon') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
