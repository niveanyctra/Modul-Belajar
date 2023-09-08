@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Syntax</h1>
    <a href="{{ url('/belajar/sql') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/select') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">Tabel Database</h3>
    <p>
        Database terdiri dari beberapa tabel. Setiap tabel dibedakan berdasarkan nama (contoh "Siswa", "Kelas", dll.). Setiap tabel memiliki record (baris) yang berisi data.
    </p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>JK</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Arip</td>
                <td>XII RPL 1</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rozaan</td>
                <td>XII RPL 1</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Rasy</td>
                <td>XII RPL 1</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Slamet Kopling</td>
                <td>XII RPL 1</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Rehan Batagor</td>
                <td>XII RPL 1</td>
                <td>Laki-laki</td>
            </tr>

        </tbody>
    </table>
    <p>Pada tabel diatas terdapat lima record untuk tiap data siswa dan empat kolom untuk nama field(No, Nama, Kelas,JK)</p>
    <hr>
    <h3 class="my-3">Contoh Sintaks SQL</h3>
    <div class="bg-dark text-light p-2">
        SELECT * FROM siswa;
    </div><br>
    <p>Kita bisa mengambil data menggunakan <mark>SELECT</mark>.</p>
    <div class="bg-warning p-4">
        <strong>Note :</strong> Semua sintaks SQL <strong>TIDAK</strong> sensitif huruf besar-kecil, jadi <mark>select</mark> dan <mark>SELECT</mark> memiliki makna yang sama. <br><br>
        <strong>Note :</strong> Tanda titik koma (';') dalam SQL digunakan untuk memisahkan sintaks SQL yang digunakan, namun ada beberapa sistem database yang tidak perlu menggunakan titik koma (';').
    </div>
    <br>
        <a href="{{ url('/belajar/sql') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/select') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
