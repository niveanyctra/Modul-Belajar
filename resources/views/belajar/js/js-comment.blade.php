@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Komentar</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/js/syntax') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/js/variable') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>
        Komentar JavaScript dapat digunakan untuk menjelaskan kode JavaScript, dan membuatnya lebih mudah dibaca. <br><br>
        Komentar JavaScript juga dapat digunakan untuk mencegah eksekusi, saat menguji kode alternatif.
    </p>
    <hr>
    <h3 class="my-3">Komentar Baris Tunggal</h3>
    <p>
        Komentar satu baris diawali dengan <span class="mark"> // </span> <br><br>
        Teks apa pun di antara <span class="mark"> // </span> dan akhir baris akan diabaikan oleh JavaScript (tidak akan dieksekusi). <br><br>
        Contoh ini menggunakan komentar satu baris sebelum setiap baris kode:
    </p>
    <div class="code">
        <span class="t-green">// Change heading:</span> <br>
        document.getElementById("myH").innerHTML = "My First Page"; <br><br>

        <span class="t-green">// Change paragraph:</span> <br>
        document.getElementById("myP").innerHTML = "My first paragraph.";
    </div>
    <hr>
    <h3 class="my-3">
        Komentar pada Banyak Baris
    </h3>
    <p>
        Komentar pada banyak baris diawali dengan <span class="mark"> /* </span> dan diakhiri dengan <span class="mark"> */ </span>. <br><br>
        Teks apa pun di antara <span class="mark"> /* </span> dan <span class="mark"> */ </span> akan diabaikan oleh JavaScript. <br><br>
        Contoh ini menggunakan komentar multi-baris (blok komentar) untuk menjelaskan kode:
    </p>
    <div class="code">
        <span class="t-green">
            /* <br>
            Code dibawah ini akan mengganti <br>
            judul dengan id = "myH" <br>
            dan paragraf dengan id = "myP" <br>
            dalam halaman web saya: <br>
            */ <br>
        </span>
        document.getElementById("myH").innerHTML = "My First Page"; <br>
        document.getElementById("myP").innerHTML = "My first paragraph.";
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/js/syntax') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/js/variable') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
