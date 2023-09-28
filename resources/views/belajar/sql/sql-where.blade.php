@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Where</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/select') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/order-by') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <h3 class="my-3">Klausa WHERE SQL</h3>
    <p>
        Klausa <span class="mark">WHERE</span> digunakan untuk memfilter record. <br><br>
        Dengan klausa ini data yang ditampilkan hanya data yang memenuhi kondisi yang spesifik.
    </p>
    <div class="note">
        <strong>Note :</strong> Klausa <span class="mark">WHERE</span> tidak hanya digunakan pada sintaks <span class="mark">SELECT</span>, tetapi juga digunakan dalam sintaks lain seperti <span class="mark">UPDATE</span> dan <span class="mark">DELETE</span>
    </div>
    <hr>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
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
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/select') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/order-by') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
