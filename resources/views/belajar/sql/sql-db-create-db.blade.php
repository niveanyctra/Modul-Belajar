@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Membuat Database</h1>
    <a href="{{ url('/belajar/sql/function') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-drop-db') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Kita bisa membuat database dengan sintaks <span class="mark">CREATE DATABASE</span></p>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        CREATE DATABASE siswa;
    </div>
    <div class="note">
        <strong>Note :</strong> Pastikan kita memiliki admin privilage sebelum membuat database!
    </div>
    <a href="{{ url('/belajar/sql/function') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-drop-db') }}" class="btn btn-success">Selanjutnya</a>

</section>
@endsection
