@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Alter/Pindah Tabel</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/db-drop-table') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/db-constraint') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Kita bisa menambah, mengubah, menghapus bahkan memodifikasi kolom dalam tabel menggunakan sintaks <span class="mark">ALTER TABLE</span></p>
   <hr>
    <h3 class="my-3">ALTER TABLE - ADD column</h3>
    <p>Kita bisa menambah kolom pada tabel dengan sintaks berikut :</p>
    <div class="code">
        ALTER TABLE nama_table <br>
        ADD nama_kolom tipedata;
    </div>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        ALTER TABLE siswa <br>
        ADD no_hp int(10);
    </div>
    <hr>
    <h3 class="my-3">ALTER TABLE - DROP column</h3>
    <p>Kita bisa menghapus kolom pada tabel dengan sintaks berikut :</p>
    <div class="code">
        ALTER TABLE nama_table <br>
        DROP COLUMN nama_kolom;
    </div>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        ALTER TABLE siswa <br>
        DROP COLUMN alamat;
    </div>
    <hr>
    <h3 class="my-3">ALTER TABLE - RENAME column</h3>
    <p>Kita bisa mengubah nama kolom pada tabel dengan sintaks berikut :</p>
    <div class="code">
        ALTER TABLE nama_table <br>
        RENAME COLUMN nama_lama to nama_baru;
    </div>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        ALTER TABLE siswa <br>
        RENAME COLUMN alamat to alamat_siswa;
    </div>
    <hr>
    <h3 class="my-3">ALTER TABLE - ALTER column</h3>
    <p>Kita bisa mengubah kolom pada tabel dengan sintaks berikut :</p>
    <div class="code">
        ALTER TABLE nama_table <br>
        ALTER column nama_kolom tipedata;
    </div>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        ALTER TABLE siswa <br>
        ALTER column no_tlp int(20);
    </div>
    <p>Sintaks diatas akan mengubah panjang tipedata yang diperbolehkan ketika mengisi kolom sebanyak 20</p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/db-drop-table') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/db-constraint') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
