@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Padding</h1>
    <a href="{{ url('/belajar/css/margin') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/dimensi') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Padding digunakan untuk mengatur jarak antar elemen didalam border. Value dari padding antara lain 'auto', 'jarak'-jarak spesifik menggunakan satuan unit, '%'-presentase berdasarkan container. Value negatif <strong>TIDAK</strong> diperbolehkan dalam margin</p>
    <hr>
    <h4 class="my-3">
        Contoh
    </h4>
    <div class="bg-dark text-light p-3">
        &lt;div style="border: 1px solid black; padding:20px"&gt;&lt;/div&gt;<br>
    </div><br>
    <div style="border: 1px solid black; padding:20px">Hello World</div>
    <p>Elemen diatas adalah contoh padding, elemen tersebut memiliki jarak antara teks dan border karena memiliki padding</p>
    <hr>
    <h3 class="my-3">Padding Individual Sides</h3>
    <p>CSS memiliki properti untuk setiap sisi bagian padding</p>
    <ul>
        <li><mark>padding-top</mark></li>
        <li><mark>padding-bottom</mark></li>
        <li><mark>padding-left</mark></li>
        <li><mark>padding-right</mark></li>
    </ul>
    <a href="{{ url('/belajar/css/margin') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/dimensi') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

