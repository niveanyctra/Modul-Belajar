@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Let</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/js/variable') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/js/const') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <h6 class="my-3">Berikut ini hal yang harus diperhatikan dalam menggunakan <span class="mark">let</span></h6>
    <ul>
        <li>Variabel <span class="mark">let</span> <strong>tidak bisa</strong> di deklarasi ulang</li>
        <li>Variabel <span class="mark">let</span> harus <strong>dideklarasi</strong> sebelum digunakan</li>
        <li>Variabel <span class="mark">let</span> memiliki <strong>Block Scope</strong></li>
    </ul>
    <hr>
    <h3 class="my-3">Deklarasi Ulang</h3>
    <p>Dengan variabel <span class="mark">let</span> kita tidak bisa melakukan deklarasi ulang</p>
    <div class="code">
        <span class="t-blue">let</span> x = <span class="t-green">"Arip"</span>; <br>
        <span class="t-blue">let</span> x = 0 ;
    </div>
    <p>Tetapi kita bisa melakukan hal yang sama dengan <span class="mark">var</span></p>
    <div class="code">
        <span class="t-blue">var</span> x = <span class="t-green">"Arip"</span>; <br>
        <span class="t-blue">var</span> x = 0 ;
    </div>
    <hr>
    <h3 class="my-3">Block Scope</h3>
    <p>
        Variabel yang dideklarasikan menggunakan <span class="mark">let</span> dan <span class="mark">const</span> dalam blok {} tidak bisa diakses dari luar blok. Berbeda dengan variabel yang dideklarasikan menggunakan <span class="mark">var</span>
    </p>
    <div class="code">
        {<br>

            <span class="t-blue">let</span> x = 2; <br>
            <span class="t-blue">var</span> y = 4;<br>
        } <br>
        <span class="t-green">// x TIDAK BISA digunakan disini</span> <br>
        <span class="t-green">// y BISA digunakan disini</span>
    </div>
    <p>Kita juga bisa menggunakan nama variabel <span class="mark">let</span> yang sama di blok yang <strong>berbeda</strong></p>
    <div class="code">
        {<br>

            <span class="t-blue">let</span> x = 2; <br>
        } <br>
        { <br>
            <span class="t-blue">let</span> x = 9; <br>
        }
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/js/variable') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/js/const') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
