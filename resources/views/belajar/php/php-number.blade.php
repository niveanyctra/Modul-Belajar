@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Angka</h1>
    <a href="{{ url('/belajar/php/string') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/math') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>PHP memiliki dua tipe data yang mengandung nomor yaitu Integer dan Float</p>
<hr>
<h3 class="my-3">PHP Integer</h3>
<p>Integer dalam PHP adalah nomor tanpa desimal dengan nomor diantara -2147483648 dan 2147483647 dalam sistem 32bit dan diantara -9223372036854775808 dan 9223372036854775807 pada sistem 64bit value yang lebih besar atau lebih kecil akan didimpan sebagai float</p>
<hr>
<h3 class="my-3">PHP Float/Double</h3>
<p>
Float adalah tipe data dengan desimal dan bilangan eksponen yang bisa disimpan sampai 1.7976931348623E+308(Tergantung platform) dan memiliki presisi maksimum 14 digit
</p>
    <a href="{{ url('/belajar/php/string') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/math') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
