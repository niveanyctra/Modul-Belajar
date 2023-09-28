@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Count, Sum dan Average</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/min-max') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/alias') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <h3 class="my-3">
        Fungsi COUNT()
    </h3>
    <p>
        Fungsi <span class="mark">COUNT()</span> akan menembalikan nilai dari jumlah kolom dengan kondisi yang ditentukan
    </p>
    <h4 class="my-3">
        Contoh
    </h4>
    <div class="code">
        SELECT COUNT(nis) FROM siswa WHERE kelas = 'XII RPL 1';
    </div>
    <p>Pada sintaks diatas kita akan menghitung setiap kolom yang ada yang memiliki record kelas 'XII RPL 1'</p>
    <hr>
    <h3 class="my-3">
        Fungsi SUM()
    </h3>
    <p>
        Fungsi <span class="mark">SUM()</span> akan menjumlahkan nilai dari kolom dengan kondisi yang ditentukan
    </p>
    <h4 class="my-3">
        Contoh
    </h4>
    <div class="code">
        SELECT SUM(nilai) FROM nilaiSiswa WHERE kelas = 'XII RPL 1';
    </div>
    <p>Pada sintaks diatas kita akan menjumlahkan nilai yang memiliki record kelas 'XII RPL 1'</p>
    <hr>
    <h3 class="my-3">
        Fungsi AVG()
    </h3>
    <p>
        Fungsi <span class="mark">AVG()</span> akan menentukan rata-rata nilai dari kolom dengan kondisi yang ditentukan
    </p>
    <h4 class="my-3">
        Contoh
    </h4>
    <div class="code">
        SELECT AVG(nilai) FROM nilaiSiswa WHERE kelas = 'XII RPL 1';
    </div>
    <p>Pada sintaks diatas kita akan menentukan rata-rata nilai yang memiliki record kelas 'XII RPL 1'</p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/min-max') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/alias') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
