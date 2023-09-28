@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Background Color</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/css/dimensi') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/css/background-image') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <h3 class="my-3">CSS background-color</h3>
    <p>Properti background-color akan menentukan warna dari background sebuah elemen. <br><br>
        Value dari background-color antara lain :
        <ul>
            <li>Nama warna yang tersedia; red, tomato, dodgerblue, dll.</li>
            <li>Warna menggunakan kode HEX; "#fff000"</li>
            <li>Warna menggunakan kode RGB; "rgb(255,0,0)"</li>
        </ul>
    </p>
    <hr>
    <h3 class="my-3">
        Opacity/Transparansi
    </h3>
    <p>Kita bisa mengatur transparansi warna latar belakang dengan menggunakan properti <span class="mark">opacity</span>. Semakin kecil nilai opacity maka warna akan semakin transparan</p>
    <div class="d-flex">
        <div class="p-4" style="background-color: green;opacity:1">Opacity 1</div>
        <div class="p-4" style="background-color: green;opacity:0.8">Opacity 0.8</div>
        <div class="p-4" style="background-color: green;opacity:0.4">Opacity 0.4</div>
        <div class="p-4" style="background-color: green;opacity:0.1">Opacity 0.1</div>
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/css/dimensi') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/css/background-image') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection

