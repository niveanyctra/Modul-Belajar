@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Count, Sum dan Average</h1>
    <a href="{{ url('/belajar/sql/min-max') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/alias') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">
        Fungsi COUNT()
    </h3>
    <p>
        Fungsi <mark>COUNT()</mark> akan menembalikan nilai dari jumlah kolom dengan kondisi yang ditentukan
    </p>
    <h4 class="my-3">
        Contoh
    </h4>
    <div class="bg-dark text-light p-2">
        SELECT COUNT(nis) FROM siswa WHERE kelas = 'XII RPL 1';
    </div>
    <p>Pada sintaks diatas kita akan menghitung setiap kolom yang ada yang memiliki record kelas 'XII RPL 1'</p>
    <hr>
    <h3 class="my-3">
        Fungsi SUM()
    </h3>
    <p>
        Fungsi <mark>SUM()</mark> akan menjumlahkan nilai dari kolom dengan kondisi yang ditentukan
    </p>
    <h4 class="my-3">
        Contoh
    </h4>
    <div class="bg-dark text-light p-2">
        SELECT SUM(nilai) FROM nilaiSiswa WHERE kelas = 'XII RPL 1';
    </div>
    <p>Pada sintaks diatas kita akan menjumlahkan nilai yang memiliki record kelas 'XII RPL 1'</p>
    <hr>
    <h3 class="my-3">
        Fungsi AVG()
    </h3>
    <p>
        Fungsi <mark>AVG()</mark> akan menentukan rata-rata nilai dari kolom dengan kondisi yang ditentukan
    </p>
    <h4 class="my-3">
        Contoh
    </h4>
    <div class="bg-dark text-light p-2">
        SELECT AVG(nilai) FROM nilaiSiswa WHERE kelas = 'XII RPL 1';
    </div>
    <p>Pada sintaks diatas kita akan menentukan rata-rata nilai yang memiliki record kelas 'XII RPL 1'</p>
        <a href="{{ url('/belajar/sql/min-max') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/alias') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
