@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Membuat Tabel</h1>
    <a href="{{ url('/belajar/sql/db-backup-db') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-drop-table') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Kita bisa membuat tabel di database dengan sintaks <span class="mark">CREATE TABLE</span>.</p>
    <h4 class="my-3">Sintaks</h4>
    <div class="code">
        CREATE TABLE nama_tabel ( <br>
        nama_kolom1 tipedata, <br>
        nama_kolom2 tipedata, <br>
        nama_kolom3 tipedata, <br>
        nama_kolom4 tipedata, <br>
        . . . . . <br>
        );
    </div>
    <hr>
    <h3 class="my-3">
        Contoh
    </h3>
    <p>Kita akan membuat tabel siswa dengan kolom NIS, nama, alamat, kelas</p>
    <div class="code">
        CREATE TABLE siswa ( <br>
        NIS int, <br>
        nama varchar(255), <br>
        alamat text, <br>
        kelas varchar(255), <br>
        );
    </div>
        <a href="{{ url('/belajar/sql/db-backup-db') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-drop-table') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
