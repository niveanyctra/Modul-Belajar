@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Primary Key</h1>
    <a href="{{ url('/belajar/sql/db-constraint') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-fk') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
