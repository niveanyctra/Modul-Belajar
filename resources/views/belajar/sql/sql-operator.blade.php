@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Operator</h1>
    <a href="{{ url('/belajar/sql/order-by') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/insert') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
