@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Pengenalan</h1>
    <a href="{{ url('/') }}" class="btn btn-success">Home</a>
    <a href="{{ url('/belajar/sql/syntax') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
