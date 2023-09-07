@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Border</h1>
    <a href="{{ url('/belajar/css/background-shorthand') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/border-width') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Border menentukan garis luar yang ditampilkan dari sebuah elemen</p>
    <span class="border border-dark p-2">Contoh border</span>
    <span class="border-bottom border-dark p-2">Contoh border</span>
    <span class="border-top border-dark p-2">Contoh border</span>
    <span class="border-start border-dark p-2">Contoh border</span>
    <span class="border-end border-dark p-2">Contoh border</span>
    <hr>
    <h3 class="my-3">Border Style</h3>
    <p>Kita bisa menentukan desain border dengan properti <mark>border-style</mark>. Berikut daftar value dari properti <mark>border-style</mark></p>
    <ul>
        <li><mark>dotted</mark> - Untuk membuat border titik-titik</li>
        <li><mark>dashed</mark> - Untuk membuat border garis putus-putus</li>
        <li><mark>solid</mark> - Untuk membuat border garis solid</li>
        <li><mark>groved</mark> - Untuk membuat border 3D menonjol keluar</li>
        <li><mark>ridge</mark> - Untuk membuat border 3D menonjol kedalam</li>
        <li><mark>inset</mark> - Untuk membuat border 3D dengan bayangan dalam</li>
        <li><mark>outset</mark> - Untuk membuat border 3D dengan bayangan luar</li>
        <li><mark>none</mark> - Untuk elemen tanpa border</li>
        <li><mark>hidden</mark> - Untuk membuat border tidak terlihat</li>
    </ul>
        <a href="{{ url('/belajar/css/background-shorthand') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/border-width') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

