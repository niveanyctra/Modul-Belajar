@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Alter/Pindah Tabel</h1>
    <a href="{{ url('/belajar/sql/db-drop-table') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-constraint') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
