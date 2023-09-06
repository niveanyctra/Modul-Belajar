@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Database Koneksi</h1>
    <a href="{{ url('/belajar/php/database') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/database-view') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
