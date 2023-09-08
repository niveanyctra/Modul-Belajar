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
    <p>Kita bisa menentukan desain border dengan properti <span class="mark">border-style</span>. Berikut daftar value dari properti <span class="mark">border-style</span></p>
    <ul>
        <li><span class="mark">dotted</span> - Untuk membuat border titik-titik</li>
        <li><span class="mark">dashed</span> - Untuk membuat border garis putus-putus</li>
        <li><span class="mark">solid</span> - Untuk membuat border garis solid</li>
        <li><span class="mark">groved</span> - Untuk membuat border 3D menonjol keluar</li>
        <li><span class="mark">ridge</span> - Untuk membuat border 3D menonjol kedalam</li>
        <li><span class="mark">inset</span> - Untuk membuat border 3D dengan bayangan dalam</li>
        <li><span class="mark">outset</span> - Untuk membuat border 3D dengan bayangan luar</li>
        <li><span class="mark">none</span> - Untuk elemen tanpa border</li>
        <li><span class="mark">hidden</span> - Untuk membuat border tidak terlihat</li>
    </ul>
        <a href="{{ url('/belajar/css/background-shorthand') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/border-width') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

