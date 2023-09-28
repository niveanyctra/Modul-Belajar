@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Min dan Max</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/select-top') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/count-sum-avg') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <h3 class="my-3">
        Fungsi min() dan max() SQL
    </h3>
    <p>
        Fungsi <span class="mark">min()</span> akan menghasilkan nilai terkecil dari kolom yang dipilih <br>
        Fungsi <span class="mark">max()</span> akan menghasilkan nilai terbesar dari kolom yang dipilih <br>
    </p>
    <hr>
    <h4 class="my-3">Contoh min()</h4>
    <div class="code">
        SELECT min(nilai) FROM nilaiSiswa;
    </div>
    <p>Pada sintaks diatas kita akan mengambil nilai terkecil dari tabel nilaiSiswa</p>
    <hr>
    <h4 class="my-3">Contoh max()</h4>
    <div class="code">
        SELECT max(nilai) FROM nilaiSiswa;
    </div>
    <p>Pada sintaks diatas kita akan mengambil nilai terbesar dari tabel nilaiSiswa</p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/select-top') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/count-sum-avg') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
