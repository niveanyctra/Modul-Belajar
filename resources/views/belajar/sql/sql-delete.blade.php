@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Delete</h1>
    <a href="{{ url('/belajar/sql/update') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/select-top') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
