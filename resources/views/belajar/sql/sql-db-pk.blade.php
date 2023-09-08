@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Primary Key</h1>
    <a href="{{ url('/belajar/sql/db-constraint') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-fk') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>
        Constraint <span class="mark">PRIMARY KEY</span> mengidentifikasikan setiap record secara unik <br><br>
        Primary key harus memiliki value unik dan tidak boleh NULL/kosong. <br><br>
        Setiap tabel hanya bisa memiliki satu primary key.
    </p><hr>
    <h3 class="my-3">Cara Membuat Primary Key</h3>
    <p>Kita akan membuat tabel siswa dengan kolom NIS, nama, alamat dan kelas dan juga membuat kolom NIS sebagai primary key</p>
    <div class="code">
        CREATE TABLE siswa ( <br>
            NIS int NOT NULL, <br>
            nama varchar(255) NOT NULL, <br>
            alamat text, <br>
            kelas varchar(255), <br>
            PRIMARY KEY (NIS) <br>
        );
    </div><br>
        <a href="{{ url('/belajar/sql/db-constraint') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-fk') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
