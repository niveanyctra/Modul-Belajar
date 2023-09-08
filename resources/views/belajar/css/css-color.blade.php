@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Warna</h1>
    <a href="{{ url('/belajar/css/comment') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/margin') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Warna dalam CSS bisa diatur dengan value yang sudah ditentukan atau dengan value RGB,HEX,HSL,RGBA,HSLA.</p>
    <hr>
    <h3 class="my-3">
        Background Color
    </h3>
    <p>Kita bisa mengatur warna background pada CSS menggunakan properti <span class="mark">background-color</span> yang akan menghasilkan elemen seperti berikut :</p>
    <div class="bg-info text-center p-2">
        <h2>Hello World</h2>
    </div>
    <hr>
    <h3 class="my-3">
        Text Color
    </h3>
    <p>Kita juga bisa mengatur warna text dengan property <span class="mark">color</span> sehingga dapat menghasilkan text sebagai berikut :</p>
    <h4 class="text-info">Hello World</h4>
    <p class="text-danger">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, deserunt.</p>
    <p class="text-warning">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, deserunt.</p>
    <hr>
    <h3 class="my-3">
        Border Color
    </h3>

    <p>Selain warna text dan backgroun, kita juga bisa mengatur warna background dengan properti <span class="mark">border-color</span> yang akan menghasilkan elemen seperti berikut :</p>
    <h4 style="border:2px solid tomato">Hello World</h4>
    <a href="{{ url('/belajar/css/comment') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/margin') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

