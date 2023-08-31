@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Class</h1>
    <a href="{{ url('/belajar/html/block-inline') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/id') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
