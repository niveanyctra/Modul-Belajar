@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Grid</h1>
    <a href="{{ url('/belajar/css/flexbox') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/display') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">
        Grid
    </h3>
    <p>Grid merupakan modul yang digunakan untuk layouting dalam CSS <br><br>
        Grid membuat desain fleksibel dan responsif tanpa pengaturan lain <br><br>
        Perbedaan yang mencolok antara grid fan flex-box adalah grid mengatur dua dimensi yaitu vertikal dan horizontal sementara flex-box hanya mengatur secara horizontal

    </p>
    <div class="d-grid bg-info">
        <div class="bg-warning p-4 m-1 text-center">1</div>
        <div class="bg-warning p-4 m-1 text-center">2</div>
        <div class="bg-warning p-4 m-1 text-center">3</div>
        <div class="bg-warning p-4 m-1 text-center">4</div>
        <div class="bg-warning p-4 m-1 text-center">5</div>
    </div>
    <p>Anda bisa membuat grid dengan menggunakan <span class="mark">display: grid</span></p>
    <a href="{{ url('/belajar/css/flexbox') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/display') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

