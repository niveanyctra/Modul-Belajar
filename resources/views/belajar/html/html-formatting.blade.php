@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Formatting</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/styling') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/comment') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>HTML memiliki beberapa tag spesial yang digunakan untuk menentukan format text seperti :</p>
    <ul>
        <li><span class="mark">&lt;b&gt;</span> dan <span class="mark">&lt;strong&gt;</span> digunakan untuk membuat font menjadi bold Contoh <b>Bold</b></li>
        <li><span class="mark">&lt;i&gt;</span> dan <span class="mark">&lt;em&gt;</span> digunakan untuk membuat font menjadi italic Contoh <i>Italic</i></li>
        <li><span class="mark">&lt;small&gt;</span> digunakan untuk membuat font menjadi labih kecil Contoh <small>Small</small></li>
        <li><span class="mark">&lt;mark&gt;</span> digunakan untuk menandai font dengan warna background yang berbeda Contoh <mark>mark</mark></li>
        <li><span class="mark">&lt;del&gt;</span> digunakan untuk menambah garis di tengah font Contoh <del>del</del></li>
        <li><span class="mark">&lt;ins&gt;</span> digunakan untuk menambah garis di bawah font Contoh <ins>ins</ins></li>
        <li><span class="mark">&lt;sup&gt;</span> digunakan untuk membuat font menjadi kecil dan berada di atas Contoh <sup>sup</sup></li>
        <li><span class="mark">&lt;sub&gt;</span> digunakan untuk membuat font menjadi besar dan berada di bawah Contoh <sub>sub</sub></li>

    </ul>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/styling') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/comment') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
