@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Alias</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/count-sum-avg') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/join') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Pada SQL kita bisa mengubah nama kolom yang akan ditampilkan di result-set dengan sintaks <span class="mark">ALIAS</span>/<span class="mark">AS</span></p>
    <hr>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
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
    <p>Kita bisa mengubah nama kolom menggunakan <span class="mark">ALIAS</span>/<span class="mark">AS</span></p>
        <div class="code">
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
    <div class="note">
        <strong>Note :</strong> Sintaks <span class="mark">ALIAS</span>/<span class="mark">AS</span> <strong>HANYA</strong> mengubah nama kolom pada result-set dan tidak akan mempengaruhi tabel dalam database.
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/count-sum-avg') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/join') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
