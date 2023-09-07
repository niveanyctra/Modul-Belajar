@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Fleksibel Boks</h1>
    <a href="{{ url('/belajar/css/dimensi') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/grid') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">
        Fleksibel Boks
    </h3>
    <p>Fleksibel boks atau flex-box merupakan modul yang digunakan untuk layouting dalam CSS <br><br>
        Flex-box membuat desain fleksibel dan responsif tanpa pengaturan lain

    </p>
    <div class="d-flex bg-info">
        <div class="bg-warning m-1 p-4">1</div>
        <div class="bg-warning m-1 p-4">2</div>
        <div class="bg-warning m-1 p-4">3</div>
        <div class="bg-warning m-1 p-4">4</div>
        <div class="bg-warning m-1 p-4">5</div>
    </div>
    <br>
    <p>Elemen diatas merupakan contoh dari flex-box. Jika tidak menggunakan flex-box, maka elemen diatas akan ditampilkan secara menurun</p>
    <hr>
    <h3 class="my-3">
        Flex-container
    </h3>
    <p>Flex-container merupakan pembungkus dari flex-box. Flex-container umumnya memiliki properti :</p>
    <ul>
        <li><mark>flex-direction</mark></li>
        <li><mark>flex-wrap</mark></li>
        <li><mark>flex-flow</mark></li>
        <li><mark>justify-content</mark></li>
        <li><mark>align-item</mark></li>
        <li><mark>align-content</mark></li>
    </ul>
    <p>Pastikan sebelum menggunakan properti diatas anda harus menambahkan <mark>display : flex</mark></p>
    <hr>
    <h3 class="my-3">flex-direction</h3>
    <p>
        <mark>flex-direction</mark> mendefinisikan kemana arah flex untuk penumpukan. Anda bisa mengisi value dengan <mark>row</mark> jika ingin secara horizontal dan <mark>column</mark> jika ingin secara vertikal
    </p>
    <a href="{{ url('/belajar/css/dimensi') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/grid') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

