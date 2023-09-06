@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Alias</h1>
    <a href="{{ url('/belajar/sql/count-sum-avg') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/join') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
