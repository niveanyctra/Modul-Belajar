@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Select</h1>
    <a href="{{ url('/belajar/sql/syntax') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/where') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">
        Sintaks SELECT SQL
    </h3>
    <p>
        Sintaks <span class="mark">SELECT</span> digunakan untuk mengambil data dari database yang kemudian akan
        ditampilkan dalam tabel yang disebut result-set. <br><br>
        Kita bisa mengambil semua kolom yang ada atau hanya mengambil beberapa kolom.

    </p>
    <div class="code">
        SELECT * FROM siswa;
    </div><br>
    <p>Pada sintaks diatas kita akan mengambil semua kolom yang ada dalam tabel siswa</p>
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
    <hr>
    <p>Kita juga bisa mengambil hanya kolom nama dalam tabel tersebut</p>
        <div class="code">
        SELECT nama FROM siswa;
    </div><br>
    <p>Pada sintaks diatas kita akan mengambil kolom nama yang ada dalam tabel siswa</p>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Arip</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rozaan</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Rasy</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Slamet Kopling</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Rehan Batagor</td>
            </tr>

        </tbody>
    </table>
    <a href="{{ url('/belajar/sql/syntax') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/where') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
