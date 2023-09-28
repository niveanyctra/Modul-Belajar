@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Tipe Data</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/echo-print') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/string') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>
        Variabel bisa menyimpan data dengan beragam tipe data yang tersedia dalam PHP <br><br>
        Berikut ini tipe data yang tersedia dalam PHP :
    </p>
    <ul>
        <li>String - Dapat menyimpan huruf dan angka dalam ""</li>
        <li>Integer - Dapat menyimpan angka non-desimal diantara -2.147.483.648 dan 2.147.483.647</li>
        <li>Float - Dapat menyimpan angka desimal atau bilangan eksponen juga sering disebut double</li>
        <li>Boolean - hanya memiliki dua value yaitu true dan false</li>
        <li>Array - Dapat menyimpan beberapa value dalam satu variabel  </li>
        <li>Object - Dapat menyimpan data dari objek pada Object Oriented Programing</li>
        <li>Null - Null tidak memiliki value</li>
    </ul>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/echo-print') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/string') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
