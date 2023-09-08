@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Pengenalan</h1>
    <a href="{{ url('/') }}" class="btn btn-success">Home</a>
    <a href="{{ url('/belajar/sql/syntax') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>
        SQL adalah bahasa yang digunakan untuk menyimpan, memanipulasi dan mengambil data dari dalam database <br><br>
        SQL merupakan singkatan dari Structure Query Language.

    </p>
    <hr>
    <h4 class="my-4">Contoh</h4>
    <div class="bg-dark text-light p-2">
        SELECT * FROM siswa;
    </div>
    <p>Pada contoh diatas kita akan mengambil semua data dari tabel siswa</p>
    <a href="{{ url('/') }}" class="btn btn-success">Home</a>
    <a href="{{ url('/belajar/sql/syntax') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
