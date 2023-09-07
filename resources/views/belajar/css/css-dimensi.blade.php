@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Height, Width, Max-width</h1>
    <a href="{{ url('/belajar/css/padding') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/flexbox') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Dimensi digunakan untuk menentukan panjang lebar dari sebuah elemen dengan properti <mark>height</mark>, <mark>width</mark> dan <mark>max-width</mark></p>
    <hr>
    <h3 class="my-3">Contoh</h3>
    <div class="bg-dark text-light p-2 ">
        <span class="text-warning">p</span> {
            <div class="ps-4">

                <span class="text-danger">width</span>: <span class="text-success">50%</span>;<br>
                <span class="text-danger">height</span>: <span class="text-success">70px</span>;<br>
                <span class="text-danger">background-color</span>: <span class="text-success">tomato</span>;<br>
            </div>
        }
    </div>
    <p>Potongan kode diatas akan menghasilkan elemen seperti berikut :</p>
    <p style="width: 50%;height:70px; background-color:tomato">Hello World</p>
    <hr>
    <h3 class="my-3">max-width</h3>
    <p>
        Untuk membatasi maksimal besar elemen kita bisa menggunakan properti <mark>max-width</mark><br><br>
        Properti <mark>max-width</mark> bisa diisi dengan value satuan unit seperti px, cm, persen(%), atau none(tak terbatas) <br><br>
        Jika kita menggunakan <mark>width</mark> dan <mark>max-width</mark> secara bersamaan dan value <mark>width</mark> lebih besar dari <mark>max-width</mark>,maka properti yang digunakan adalah <mark>max-width</mark> dan properti <mark>width</mark> akan diabaikan

    </p>
    <a href="{{ url('/belajar/css/padding') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/flexbox') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

