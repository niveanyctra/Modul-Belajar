@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Select</h1>
    <a href="{{ url('/belajar/sql/syntax') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/where') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
