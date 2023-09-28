@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL View</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/db-ai') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>
        View dalam SQL adalah data virtual berdasarkan result-set. Perbedaan view dan stored procedure adalah view akan menyimpan dalam bentuk tabel result-set, sedangkan stored procedure akan menyimpan dalam bentuk sintaks.
    </p>
    <h4 class="my-3">Cara membuat view</h4>
    <div class="code">
        CREATE VIEW XIIRPL1 AS <br>
        SELECT * FROM siswa WHERE kelas = 'XII RPL 1';
    </div>
    <p>Kita dapat memanggil view menggunakan <span class="mark">SELECT</span> dan bisa mengambil kolom yang spesifik</p>
    <div class="code">
        SELECT nama FROM XIIRPL1;
    </div>
    <hr>
    <h3 class="my-3">
        Mengubah view
    </h3>
    <p>Kita dapat mengubah view dengan sintaks berikut</p>
    <div class="code">
        CREATE OR REPLACE VIEW XIIRPL1 AS <br>
        SELECT nama,kelas FROM siswa WHERE kelas = 'XII RPL 1';
    </div>
    <hr>
    <h3 class="my-3">
        Menghapus view
    </h3>
    <p>Kita dapat menghapus view dengan sintaks berikut</p>
    <div class="code">
        DROP VIEW XIIRPL1;
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/db-ai') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
