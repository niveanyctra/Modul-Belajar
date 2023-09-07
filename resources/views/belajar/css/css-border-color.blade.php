@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Border Color</h1>
    <a href="{{ url('/belajar/css/border-width') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/border-side') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Kita bisa menentukan warna border dengan properti <mark>border-color</mark> <br><br>
        Value dari border-color adalah satuan warna seperti HEX, RGB, RGBA dan HSL.
    </p>
        <div class="bg-dark text-light p-3">
            p{
            <div class="ps-4">
                border-style: solid;<br>
                border-color: red;<br>
            </div>
        } <br>
    </div><br>
    <p>Pada potongan kode diatas kita memiliki elemen &lt;p&gt; yang akan diatur warna bordernya dengan warna merah</p>
        <a href="{{ url('/belajar/css/border-width') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/border-side') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

