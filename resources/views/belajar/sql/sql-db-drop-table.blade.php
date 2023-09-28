@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Menghapus Tabel</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/db-create-table') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/db-alter-table') }}" class="btn btn-success">Selanjutnya</a>
    </div>
            <hr>
    <p>Kita bisa menghapus database dengan sintaks <span class="mark">DROP TABLE</span></p>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        DROP TABLE siswa;
    </div>
    <div class="note">
        <strong>Note :</strong> Hati-hati dalam menghapus tabel karena kita akan kehilangan semua informasi yang ada didalam tabel!
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/db-create-table') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/db-alter-table') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
