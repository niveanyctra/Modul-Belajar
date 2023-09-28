@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Exists</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/having') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/comment') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>
        Operator <span class="mark">EXIST</span> digunakan untuk menguji keberadaan record apa pun di subquery. <br><br>

        Operator <span class="mark">EXISTS</span> mengembalikan TRUE jika subquery mengembalikan satu atau lebih record.
    </p>
    <h4 class="my-3">
        Sintaks
    </h4>
    <div class="code">
        SELECT nama_kolom
        FROM nama_tabel
        WHERE EXISTS
        (SELECT nama_kolom FROM nama_tabel WHERE kondisi);
    </div>
        <hr>
    <h4 class="my-3">Contoh</h4>
    <p>Kita memiliki tabel siswa dengan result-set seperti berikut :</p>
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <tr>
            <td>Arip</td>
            <td>XII RPL 1</td>
            <td>Cirebon</td>
        </tr>
        <tr>
            <td>Rozaan</td>
            <td>XII RPL 1</td>
            <td>Cirebon</td>
        </tr>
        <tr>
            <td>Ronaldo</td>
            <td>XII RPL 1</td>
            <td>Bandung</td>
        </tr>
        <tr>
            <td>Windah</td>
            <td>XII RPL 1</td>
            <td>Cirebon</td>
        </tr>
        <tr>
            <td>Basudara</td>
            <td>XII RPL 1</td>
            <td>Bandung</td>
        </tr>
    </table>
    <p>Kita akan mengambil alamat dan mencari alamat dengan siswa yang tinggal di alamat tersebut kurang dari tiga</p>
    <div class="code">
        SELECT alamat <br>
        FROM siswa <br>
        WHERE EXIST <br>
        (SELECT COUNT(nama) FROM siswa GROUP BY alamat HAVING COUNT(nama) < 3);
    </div>
    <p>Sintaks tersebut akan menghasilkan tabel seperti berikut</p>
    <table class="table table-bordered">
        <tr>
            <th>alamat</th>
        </tr>
        <tr>
            <td>Bandung</td>
        </tr>
    </table>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/having') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/comment') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
