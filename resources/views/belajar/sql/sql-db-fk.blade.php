@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Foreign Key</h1>
    <a href="{{ url('/belajar/sql/db-pk') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-default') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p><span class="mark">FOREIGN KEY</span> digunakan untuk tindakan yang akan merusak relasi antar tabel <br><br>
        <span class="mark">FOREIGN KEY</span> Adalah kolom yang value nya berasal dari <span class="mark">PRIMARY KEY</span> tabel lain
    </p>
    <hr>
    <h4 class="my-3">Contoh</h4>
    <p>Tabel Siswa :</p>
    <table class="table table-bordered">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
        <tr>
            <td>111</td>
            <td>Arip</td>
            <td>Cirebon</td>
        </tr>
        <tr>
            <td>112</td>
            <td>Messi</td>
            <td>Cirebon</td>
        </tr>
        <tr>
            <td>113</td>
            <td>Magnus</td>
            <td>Cirebon</td>
        </tr>
    </table><br>
    <p>Tabel Nilai :</p>
    <table class="table table-bordered">
        <tr>
            <th>NIS</th>
            <th>Nilai</th>
        </tr>
        <tr>
            <td>111</td>
            <td>90</td>
        </tr>
        <tr>
            <td>112</td>
            <td>80</td>
        </tr>
        <tr>
            <td>113</td>
            <td>85</td>
        </tr>
    </table>
    <br>
    <p>Pada kedua tabel tersebut sama-sama memiliki kolom NIS, tetapi kolom NIS dalam tabel siswa adalah Primary Key dan kolom NIS di tabel nilai adalah Foreign Key</p>
    <hr>
    <h3 class="my-3">Cara Membuat Foreign Key</h3>
    <p>Untuk membuat foreign key kamu bisa menggunakan sintaks dibawak ini :</p>
    <h6 class="my-2">Pada CREATE TABLE</h6>
    <div class="code">
        CREATE TABLE nilai ( <br>
        id_nilai int NOT NULL, <br>
        NIS int, <br>
        Nilai int NOT NULL, <br>
        PRIMARY KEY (id_nilai), <br>
        CONSTRAINT FK_NilaiSiswa FOREIGN KEY (NIS) <br>
        REFERENCES siswa(NIS) <br>
);
    </div>
    <h6 class="my-2">Pada ALTER TABLE</h6>
    <div class="code">
        ALTER TABLE nilai <br>
        ADD CONSTRAINT FK_NilaiSiswa <br>
        FOREIGN KEY (NIS) REFERENCES siswa(NIS); <br>
    </div>
    <hr>
    <h4 class="my-3">Menghapus Foreign Key</h4>
    <p>Kita bisa mengapus Foreign Key menggunakan sintaks berikut</p>
    <div class="code">
        ALTER TABLE nilai <br>
        DROP FOREIGN KEY FK_NilaiSiswa;
    </div>
    <br>
        <a href="{{ url('/belajar/sql/db-pk') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-default') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
