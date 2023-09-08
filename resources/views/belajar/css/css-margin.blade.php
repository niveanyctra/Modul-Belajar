@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Margin</h1>
    <a href="{{ url('/belajar/css/color') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/padding') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Margin digunakan untuk mengatur jarak antar elemen diluar border. Value dari margin antara lain 'auto', 'jarak'-jarak spesifik menggunakan satuan unit, '%'-presentase berdasarkan container. Value negatif diperbolehkan dalam margin</p>
    <hr>
    <h4 class="my-3">
        Contoh
    </h4>
    <div class="code">
        &lt;div style="border: 1px solid black; margin-top:20px"&gt;&lt;/div&gt;<br>
        &lt;div style="border: 1px solid black; margin-top:20px"&gt;&lt;/div&gt;<br>
        &lt;div style="border: 1px solid black; margin-top:20px"&gt;&lt;/div&gt;<br>
    </div>
    <div style="border: 1px solid black; margin-top:20px">&nbsp;</div>
    <div style="border: 1px solid black; margin-top:20px">&nbsp;</div>
    <div style="border: 1px solid black; margin-top:20px">&nbsp;</div>
    <p>Elemen diatas adalah contoh margin, elemen tersebut tidak bersinggungan karena memiliki margin</p>
    <hr>
    <h3 class="my-3">Margin Individual Sides</h3>
    <p>CSS memiliki properti untuk setiap sisi bagian margin</p>
    <ul>
        <li><mark>margin-top</mark></li>
        <li><mark>margin-bottom</mark></li>
        <li><mark>margin-left</mark></li>
        <li><mark>margin-right</mark></li>
    </ul>
    <a href="{{ url('/belajar/css/color') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/padding') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

