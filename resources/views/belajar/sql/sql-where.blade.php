@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Where</h1>
    <a href="{{ url('/belajar/sql/select') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/order-by') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">Klausa WHERE SQL</h3>
    <p>
        Klausa <mark>WHERE</mark> digunakan untuk memfilter record. <br><br>
        Dengan klausa ini data yang ditampilkan hanya data yang memenuhi kondisi yang spesifik.
    </p>
    <div class="bg-warning p-4">
        <strong>Note :</strong> Klausa <mark>WHERE</mark> tidak hanya digunakan pada sintaks <mark>SELECT</mark>, tetapi juga digunakan dalam sintaks lain seperti <mark>UPDATE</mark> dan <mark>DELETE</mark>
    </div>
    <hr>
    <h4 class="my-3">Contoh</h4>
    <div class="bg-dark text-light p-2">
        SELECT * FROM siswa WHERE nama = 'Arip';
    </div><br>
    <p>Pada sintaks diatas kita akan mengambil semua kolom dari tabel siswa yang memiliki kolom nama dengan record 'Arip'</p>
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

        </tbody>
    </table>
    <br>
        <a href="{{ url('/belajar/sql/select') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/order-by') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
