@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Border Shorthand</h1>
    <a href="{{ url('/belajar/css/border-side') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/border-rounded') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

