@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Height, Width, Max-width</h1>
    <a href="{{ url('/belajar/css/padding') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/flexbox') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Dimensi digunakan untuk menentukan panjang lebar dari sebuah elemen dengan properti <span class="mark">height</span>, <span class="mark">width</span> dan <span class="mark">max-width</span></p>
    <hr>
    <h3 class="my-3">Contoh</h3>
    <div class="code">
        <span class="t-red">p</span> {
            <div class="ps-4">

                <span class="t-red">width</span>: <span class="t-green">50%</span>;<br>
                <span class="t-red">height</span>: <span class="t-green">70px</span>;<br>
                <span class="t-red">background-color</span>: <span class="t-green">tomato</span>;<br>
            </div>
        }
    </div>
    <p>Potongan kode diatas akan menghasilkan elemen seperti berikut :</p>
    <p style="width: 50%;height:70px; background-color:tomato">Hello World</p>
    <hr>
    <h3 class="my-3">max-width</h3>
    <p>
        Untuk membatasi maksimal besar elemen kita bisa menggunakan properti <span class="mark">max-width</span><br><br>
        Properti <span class="mark">max-width</span> bisa diisi dengan value satuan unit seperti px, cm, persen(%), atau none(tak terbatas) <br><br>
        Jika kita menggunakan <span class="mark">width</span> dan <span class="mark">max-width</span> secara bersamaan dan value <span class="mark">width</span> lebih besar dari <span class="mark">max-width</span>,maka properti yang digunakan adalah <span class="mark">max-width</span> dan properti <span class="mark">width</span> akan diabaikan

    </p>
    <a href="{{ url('/belajar/css/padding') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/flexbox') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

