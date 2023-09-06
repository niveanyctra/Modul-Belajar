@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Display</h1>
    <a href="{{ url('/belajar/css/grid') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/media-query') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

