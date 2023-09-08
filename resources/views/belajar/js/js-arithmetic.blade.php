@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Aritmatika</h1>
    <a href="{{ url('/belajar/js/operator') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/assignment') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">Operator aritmatika</h3>
    <p>Operator aritmatika digunakan untuk melakukan perhitungan pada bilangan</p>
    <p>Berikut ini daftar operator aritmatika yang umum digunakan pada JavaScript :</p>
    <table class="table table-sriped">
        <tr>
            <th>Operator</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>+</td>
            <td>Penjumlahan</td>
        </tr>
        <tr>
            <td>-</td>
            <td>Pengurangan</td>
        </tr>
        <tr>
            <td>*</td>
            <td>Perkalian</td>
        </tr>
        <tr>
            <td>**</td>
            <td>Eksponen</td>
        </tr>
        <tr>
            <td>/</td>
            <td>Pembagian</td>
        </tr>
        <tr>
            <td>%</td>
            <td>Modulus</td>
        </tr>
        <tr>
            <td>++</td>
            <td>Terus bertambah</td>
        </tr>
        <tr>
            <td>--</td>
            <td>Terus berkurang</td>
        </tr>
    </table>
    <p>Contoh :</p>
    <div class="code">
        <span class="t-blue">var</span> x = 2; <br>
        <span class="t-blue">var</span> y = 9; <br>
        <span class="t-blue">var</span> z = x + y; <br>
        <span class="t-green">// Maka variabel z memiliki nilai dari x + y</span>

    </div>
<br>
    <a href="{{ url('/belajar/js/operator') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/assignment') }}" class="btn btn-success">Selanjutnya</a>

</section>
@endsection
