@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Padding</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/css/margin') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/css/dimensi') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Padding digunakan untuk mengatur jarak antar elemen didalam border. Value dari padding antara lain 'auto', 'jarak'-jarak spesifik menggunakan satuan unit, '%'-presentase berdasarkan container. Value negatif <strong>TIDAK</strong> diperbolehkan dalam margin</p>
    <hr>
    <h4 class="my-3">
        Contoh
    </h4>
    <div class="code">
        &lt;div style="border: 1px solid black; padding:20px"&gt;&lt;/div&gt;<br>
    </div><br>
    <div style="border: 1px solid black; padding:20px">Hello World</div>
    <p>Elemen diatas adalah contoh padding, elemen tersebut memiliki jarak antara teks dan border karena memiliki padding</p>
    <hr>
    <h3 class="my-3">Padding Individual Sides</h3>
    <p>CSS memiliki properti untuk setiap sisi bagian padding</p>
    <ul>
        <li><span class="mark">padding-top</span></li>
        <li><span class="mark">padding-bottom</span></li>
        <li><span class="mark">padding-left</span></li>
        <li><span class="mark">padding-right</span></li>
    </ul>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/css/margin') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/css/dimensi') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection

