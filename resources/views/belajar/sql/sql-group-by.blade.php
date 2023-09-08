@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Group By</h1>
    <a href="{{ url('/belajar/sql/join') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/having') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Sintaks <span class="mark">GROUP BY</span> digunakan untuk mengelompokan kolom yang memiliki nilai yang sama.</p>
    <hr>
    <h4 class="my-3">Sintaks</h4>
    <p>Kita bisa menggunakan <span class="mark">GROUP BY</span> menggunakan contoh sintaks berikut</p>
    <div class="code">
        SELECT nama_kolom <br>
        FROM nama_tabel <br>
        WHERE kondisi <br>
        GROUP BY nama_kolom;
    </div><hr>
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
    <p>Kita akan mengelompokan berdasarkan alamat dengan menghitung jumlah siswa yang tinggal di alamat tersebut</p>
    <div class="code">
        SELECT COUNT(nama),alamat <br>
        FROM siswa <br>
        GROUP BY alamat;
    </div>
    <p>Sintaks tersebut akan menghasilkan tabel seperti berikut</p>
    <table class="table table-bordered">
        <tr>
            <th>COUNT(nama)</th>
            <th>alamat</th>
        </tr>
        <tr>
            <td>3</td>
            <td>Cirebon</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Bandung</td>
        </tr>
    </table>
    <br>
        <a href="{{ url('/belajar/sql/join') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/having') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
