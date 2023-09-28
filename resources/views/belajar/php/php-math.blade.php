@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Math</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/number') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/operator') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    Pada halaman ini kita akan menjelaskan operasi matematika dalam PHP
    <hr>
    <h3 class="my-3">Fungsi pi()</h3>
    <p>Fungsi pi() akan menampilkan nilai dari pi</p>
    <hr>
    <h3 class="my-3">Fungsi min() dan max()</h3>
    <p>Fungsi min() dan max() akan menampilkan nilai terkecil dan terbesar dalam daftar argumen</p>
    <hr>
    <h3 class="my-3">Fungsi abs()</h3>
    <p>Fungsi abs() akan menampilkan nilai positif dari sebuah angka</p>
    <hr>
    <h3 class="my-3">Fungsi sqrt()</h3>
    <p>Fungsi sqrt() akan menampilkan nilai akar dua dari sebuah angka</p>
    <hr>
    <h3 class="my-3">Fungsi round()</h3>
    <p>Fungsi round() akan menampilkan nilai pembulatan dari sebuah angka</p>
    <hr>
    <h3 class="my-3">Fungsi rand()</h3>
    <p>Fungsi rand() akan menampilkan nilai acak</p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/number') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/operator') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
