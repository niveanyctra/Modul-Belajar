@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Default</h1>
    <a href="{{ url('/belajar/sql/db-fk') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-ai') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>
        Kita bisa menggunakan Constraint <span class="mark">DEFAULT</span> untuk mengatur nilai default dari sebuah kolom
    </p>
    <h4 class="my-3">Contoh</h4>
    <p>Kita akan mengatur nilai default dari kolom jk</p>
    <div class="code">
    CREATE TABLE siswa ( <br>
    NIS int NOT NULL, <br>
    nama varchar(255) NOT NULL, <br>
    alamat text, <br>
    jk varchar(255) DEFAULT 'Laki-laki' <br>
);
</div>
<h4 class="my-3">Pada ALTER TABLE</h4>
<p>Kita juga bisa menambahkan nilai defaut dengan sintaks <span class="mark">ALTER TABLE</span></p>
<div class="code">
ALTER TABLE siswa <br>
ALTER jk SET DEFAULT 'Laki-laki';
</div>
<h4 class="my-3">Menghapus Default</h4>
<p>Kita juga bisa menghapus nilai defaut dengan sintaks <span class="mark">ALTER TABLE</span></p>
<div class="code">
ALTER TABLE siswa <br>
ALTER jk DROP DEFAULT;
</div>
    <a href="{{ url('/belajar/sql/db-fk') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-ai') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
