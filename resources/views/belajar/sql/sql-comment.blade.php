@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Comment</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/exists') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/stored-procedure') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Kita bisa membuat komentar dalam sintaks SQL dengan diawali /* dan diakhiri */</p>
    <h4 class="my-4">
        Contoh
    </h4>
    <div class="code">
        <span class="t-green">/* SELECT * FROM siswa */</span>
    </div>
    <p>Bagian komentar tidak akan terbaca ketika menjalankan sintaks</p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/exists') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/stored-procedure') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
