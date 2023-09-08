@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL LIMIT</h1>
    <a href="{{ url('/belajar/sql/delete') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/min-max') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Kita bisa memilih tabel teratas dalam database menggunakan sintaks <span class="mark">LIMIT</span>. Sintaks ini akan memilih record teratas dengan batas yang ditentukan dalam tabel</p>
    <div class="code">
        SELECT nama FROM siswa <br>
        LIMIT 5;
    </div><br>
<p>Pada sintaks diatas kita akan mengambil lima kolom teratas pada tabel siswa</p>
    <a href="{{ url('/belajar/sql/delete') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/min-max') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
