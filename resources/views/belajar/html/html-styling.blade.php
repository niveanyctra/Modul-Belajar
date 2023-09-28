@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Style</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/atribut') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/formatting') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <h3 class="mt-3">Style HTML</h3>
    <p>Style digunakan untuk menambahkan desain pada elemen HTML yang membuat tampilan halaman HTML terlihat lebih bagus dengan mengubah warna,font,ukuran dsb.</p>
    <h3 class="mt-3">Jenis Style HTML</h3>
    <p>Styling dalam HTML memiliki tiga jenis yaitu :</p>
    <ul>
        <li>Inline Style - Yaitu jenis style yang terletak di dalam tag elemen html</li>
        <li>Internal Style - Yaitu jenis style yang terletak di dalam tag &lt;style&gt; yang disimpan dalam tag &lt;head&gt;</li>
        <li>Eksternal Style - Yaitu jenis style yang terletak di file eksternal</li>
    </ul>
    <hr>
    <h3 class="mt-3">Struktur Umum Styling</h3>
    <p>Styling memiliki struktur umum sebagai berikut :</p>
    <div class="code">

    &lt;namatag <span class="t-red">style</span>=<span class="t-green">"property:<span class="t-blue">value</span>"</span>&gt; &lt;/namatag&gt;

    </div>
    <ul>
        <li>Kode berwarna merah menunjukan atribut yang digunakan</li>
        <li>Kode berwarna hijau menunjukan property style yang digunakan. Contoh : font-size,color,background-color, dll</li>
        <li>Kode berwarna biru menunjukan value yang menentukan property yang digunakan</li>
    </ul>
    <hr>
    <h3 class="mt-3">Contoh</h3>
        <div class="code">

        &lt;p <span class="t-red">style</span>=<span class="t-green">"color:<span class="t-blue">blue</span>"</span>&gt;Ini teks berwarna biru&lt;/p&gt;

    </div>
    <h6 class="mt-2">Hasilnya :</h6>
    <div class="bg-body-secondary px-2 py-2 rounded-1 my-2">
        <p style="color: blue">Ini teks berwarna biru</p>
    </div>
    <p>Potongan kode diatas merupakan salah satu contoh inline styling dengan <span class="mark">color</span> sebagai property dan <span class="mark">blue</span> sebagai value</p>
    <hr>
    <h3 class="mt-3">Property Yang Umum Digunakan Pada Styling</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Property</th>
                <th>Kegunaan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>color</td>
                <td>Untuk mengubah warna text</td>
            </tr>
            <tr>
                <td>background-color</td>
                <td>Untuk mengubah warna background</td>
            </tr>
            <tr>
                <td>font-size</td>
                <td>Untuk mengubah ukuran text</td>
            </tr>
            <tr>
                <td>font-family</td>
                <td>Untuk mengubah jenis font</td>
            </tr>
            <tr>
                <td>text-align</td>
                <td>Untuk mengatur posisi text ke kanan,kiri ataupun tengah</td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/atribut') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/formatting') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
