@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Margin</h1>
    <a href="{{ url('/belajar/css/color') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/padding') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

