@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Komentar</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/formatting') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/favicon') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Komentar dalam HTML tidak akan terbaca di browser, namun akan membantu dokumen HTML agar lebih mudah dibaca</p>
    <hr>
    <h3 class="mt-3">Contoh</h3>
    <div class="code">

    <div class="t-green">&lt;!-- Ini sebuah komentar --&gt;</div>

    </div>
    <p>Potongan kode diatas merupakan contoh komentar dalam HTML. Komentar umumnya akan berwarna hijau di text editor. Pastikan menggunakan tanda "!" pada awal komentar</p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/formatting') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/favicon') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
