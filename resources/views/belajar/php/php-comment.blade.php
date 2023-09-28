@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Komentar</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/syntax') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/variable') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
        <p>Komentar dalam PHP tidak akan terbaca di browser, namun akan membantu dokumen PHP agar lebih mudah dibaca</p>
    <hr>
    <h3 class="mt-3">Contoh</h3>
    <div class="code">
    &lt;?php
    <div class="t-green">/* Ini sebuah komentar */</div>
    ?>
    </div>
    <p>Potongan kode diatas merupakan contoh komentar dalam PHP. Komentar umumnya akan berwarna hijau di text editor. Pastikan menggunakan tanda "/*" pada awal komentar dan "*/" diakhir komentar</p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/syntax') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/variable') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
