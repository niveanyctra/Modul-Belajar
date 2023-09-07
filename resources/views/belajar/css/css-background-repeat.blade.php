@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Background Repeat</h1>
    <a href="{{ url('/belajar/css/background-image') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/background-attachment') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Jika ukuran elemen lebih besar dari gambar, maka gambar di latar belakan akan berulang memenuhi elemen. </p><br>
        <div class="bg-dark text-light p-3">
            p{
            <div class="ps-4">
                background-image: url("gambar.png");<br>
                background-repeat: no-repeat;
            </div>
        } <br>
    </div><br>
    <p>Kita bisa mengatur perulangan gambar dengan properti <mark>background-repeat</mark> dengan value <mark>repeat-x</mark> untuk perulangan secara horizontal dan <mark>repeat-y</mark> untuk perulangan secara vertikal, serta <mark>no-repeat</mark> jika tidak menginginkan gambar berulang
    </p>
    <a href="{{ url('/belajar/css/background-image') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/background-attachment') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

