@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Warna</h1>
    <a href="{{ url('/belajar/css/comment') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/margin') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

