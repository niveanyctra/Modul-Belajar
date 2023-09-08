@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Background Image</h1>
    <a href="{{ url('/belajar/css/background-color') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/background-repeat') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>
        Kita bisa mengatur sebuah elemen agar memiliki gambar di latar belakang dengan mengguanakan properti <span class="mark">background-image</span> dengan value url() yang merujuk pada file gambar yang ingin kita tampilkan
    </p>
    <hr>
    <h4 class="my-3">
        Contoh
    </h4>
    <div class="code">
            p{
            <div class="ps-4">
                background-image: url("gambar.png");<br>
            </div>
        } <br>
    </div><br>
    <p>Pada contoh diatas kita akan memberikan gambar latar belakang pada elemen &lt;p&gt; <br> <br>
    Kita juga bisa menggunakan class dan id untuk menambahkan gambar
    </p>
    <a href="{{ url('/belajar/css/background-color') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/background-repeat') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

