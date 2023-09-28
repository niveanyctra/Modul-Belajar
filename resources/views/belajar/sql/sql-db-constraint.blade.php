@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Constraint</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/db-alter-table') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/db-pk') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>SQL constraint digunakan untuk menentukan aturan untuk data dalam tabel</p>
    <hr>
    <h3 class="my-3">Membuat Constraint</h3>
    <p>Constraint dapat dibuat dengan sintaks <span class="mark">CREATE TABLE</span> atau <span class="mark">ALTER TABLE</span></p>
    <h4 class="my-3">Sintaks</h4>
    <div class="code">
        CREATE TABLE nama_tabel ( <br>
        nama_kolom1 tipedata constraint, <br>
        nama_kolom2 tipedata constraint, <br>
    nama_kolom3 tipedata constraint, <br>
    .... <br>
);
    </div>
    <br>
    <p>Berikut constraint yang biasa digunakan dalam database :</p>
    <ul>
        <li><span class="mark">NOT NULL</span> - Memastikan bahwa kolom tidak boleh memiliki nilai NULL/kosong</li>
        <li><span class="mark">UNIQUE</span> - Memastikan semua nilai dalam kolom berbeda</li>
        <li><span class="mark">PRIMARY KEY</span> - Secara unik mengidentifikasi setiap baris dalam sebuah tabel</li>
        <li><span class="mark">FOREIGN KEY</span> - Mencegah tindakan yang akan merusak hubungan antar tabel</li>
        <li><span class="mark">CHECK</span> - Memastikan bahwa nilai dalam kolom memenuhi kondisi tertentu</li>
        <li><span class="mark">DEFAULT</span> - Menetapkan nilai default untuk kolom jika tidak ada nilai yang ditentukan</li>
        <li><span class="mark">UNIQUE</span> - Digunakan untuk membuat dan mengambil data dari database dengan sangat cepat</li>
    </ul>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/db-alter-table') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/db-pk') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
