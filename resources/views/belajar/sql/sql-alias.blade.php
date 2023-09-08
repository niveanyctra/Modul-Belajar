@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Alias</h1>
    <a href="{{ url('/belajar/sql/count-sum-avg') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/join') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Pada SQL kita bisa mengubah nama kolom yang akan ditampilkan di result-set dengan sintaks <mark>ALIAS</mark>/<mark>AS</mark></p>
    <hr>
    <h4 class="my-3">Contoh</h4>
    <div class="bg-dark text-light p-2">
        SELECT AVG(nilai) FROM nilaiSiswa;
    </div>
    <p>Sintaks diatas akan menghasilkan result-set :</p>
    <table class="table-bordered">
        <tr>
            <th>AVG(nilai)</th>
        </tr>
        <tr>
            <td>80</td>
        </tr>
    </table>
    <p>Kita bisa mengubah nama kolom menggunakan <mark>ALIAS</mark>/<mark>AS</mark></p>
        <div class="bg-dark text-light p-2">
        SELECT AVG(nilai) AS Rata-rata FROM nilaiSiswa;
    </div><br>
        <table class="table-bordered">
        <tr>
            <th>Rata-rata</th>
        </tr>
        <tr>
            <td>80</td>
        </tr>
    </table>
    <br>
    <div class="bg-warning p-4">
        <strong>Note :</strong> Sintaks <mark>ALIAS</mark>/<mark>AS</mark> <strong>HANYA</strong> mengubah nama kolom pada result-set dan tidak akan mempengaruhi tabel dalam database.
    </div>
    <br>
        <a href="{{ url('/belajar/sql/count-sum-avg') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/join') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
