@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Stored Procedure</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/comment') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/db-create-db') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <h3 class="my-3">
        Apa itu stored procedure?
    </h3>
    <p>
        Stored procedure adalah cara menyimpan kode SQL yang bisa digunakan berkali-kali. <br> <br>
        Dengan stored procedure kita bisa mendapatkan result-set hanya dengan memanggil stored procedure tanpa menulis ulang kode.
    </p>
    <h4 class="my-4">Sintaks</h4>
    <div class="code">
        CREATE PROCEDURE nama_prosedur <br>
        AS <br>
        sintaks_sql <br>
        GO;
    </div>
    <hr>
    <h4 class="my-3">Contoh</h4>
    <p>Kita akan membuat prosedur dengan nama SiswaMenurun yang mengambil nama siswa dan mengurutkan secara menurun</p>
    <div class="code">
        CREATE PROCEDURE SiswaMenurun <br>
        AS <br>
        SELECT nama FROM siswa <br>
        ORDER BY(nama) DESC <br>
        GO;
    </div>
    <p>Dengan prosedur tersebut kita bisa menjalankan sintaks hanya dengan memanggil prosedur dengan :</p>
    <div class="code">
        EXEC SiswaMenurun;
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/comment') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/db-create-db') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
