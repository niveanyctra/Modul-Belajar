@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Komentar</h1>
    <a href="{{ url('/belajar/css/how-to') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/color') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Komentar dalam CSS tidak akan terbaca di browser, namun akan membantu dokumen CSS agar lebih mudah dibaca</p>
    <hr>
    <h3 class="mt-3">Contoh</h3>
    <div class="code">

    <div class="t-green">/* Ini sebuah komentar */</div>

    </div>
<p>Potongan kode diatas merupakan contoh komentar dalam CSS. Komentar umumnya akan berwarna hijau di text editor. Pastikan menggunakan tanda "/*" pada awal komentar dan "*/" diakhir komentar</p>
    <a href="{{ url('/belajar/css/how-to') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/color') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

