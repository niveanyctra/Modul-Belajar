@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Fleksibel Boks</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/css/dimensi') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/css/grid') }}" class="btn btn-success">Selanjutnya</a>
    </div>
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
        <li><span class="mark">flex-direction</span></li>
        <li><span class="mark">flex-wrap</span></li>
        <li><span class="mark">flex-flow</span></li>
        <li><span class="mark">justify-content</span></li>
        <li><span class="mark">align-item</span></li>
        <li><span class="mark">align-content</span></li>
    </ul>
    <p>Pastikan sebelum menggunakan properti diatas anda harus menambahkan <span class="mark">display : flex</span></p>
    <hr>
    <h3 class="my-3">flex-direction</h3>
    <p>
        <span class="mark">flex-direction</span> mendefinisikan kemana arah flex untuk penumpukan. Anda bisa mengisi value dengan <span class="mark">row</span> jika ingin secara horizontal dan <span class="mark">column</span> jika ingin secara vertikal
    </p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/css/dimensi') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/css/grid') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection

