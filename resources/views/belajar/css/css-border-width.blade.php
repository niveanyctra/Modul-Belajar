@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Border Width</h1>
    <a href="{{ url('/belajar/css/border') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/border-color') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

