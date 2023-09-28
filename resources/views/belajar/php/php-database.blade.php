@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Database</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/form-require') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/database-connect') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Kita bisa melakukan koneksi dengan database dengan PHP</p>
    <p>Database yang sering digunakan dengan PHP adalah MySQL</p>
    <p>
        Kita dapat menampilkan, menambah, memanipulasi dan menghapus data dalam database menggunakan PHP dengan sintaks MySQL
        <a href="{{url('/belajar/sql')}}" class="text-dark">Pelajari SQL Disini</a>
    </p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/form-require') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/database-connect') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
