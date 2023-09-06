@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Database Menampilkan Data</h1>
    <a href="{{ url('/belajar/php/database-connect') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/database-create') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
