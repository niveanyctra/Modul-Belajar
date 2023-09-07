@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Backup Database</h1>
    <a href="{{ url('/belajar/sql/db-drop-db') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-create-table') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
