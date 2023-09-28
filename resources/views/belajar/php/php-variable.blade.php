@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Variable</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/comment') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/echo-print') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>
        Kita bisa membuat variabel dalam PHP dengan tanda <span class="mark">$</span>. Variabel biasanya digunakan untuk menyimpan informasi. Adapun beberapa peraturan dalam penulisan variabel sebagai berikut :
    </p>
    <ul>
        <li>Sebuah variabel harus diawali tanda <span class="mark">&</span> dan dilanjutkan dengan nama variabel</li>
        <li>Variabel harus dawali dengan huruf atau garis bawah(_)</li>
        <li>Nama variabel tidak dapat diawali dengan angka</li>
        <li>Nama variabel hanya bisa mengandung huruf besar-kecil, angka, dan garis bawah</li>
        <li>Variabel peka terhadap huruf besar-kecil (<span class="mark">$nama</span> dan <span class="mark">$NAMA</span> adalah variabel yang berbeda)</li>
    </ul>
    <hr>
    <h3 class="my-3">
        Memanggil Variabel
    </h3>
    <p>Kita dapat memanggil variabel dengan sintaks <span class="mark">echo</span></p>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        &lt;?php <br>
        $nama = "Arip"; <br>
        echo "Halo, namaku" .$nama. "; <br>
        ?>

    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/comment') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/echo-print') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
