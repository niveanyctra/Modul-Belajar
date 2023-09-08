@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Auto Increment</h1>
    <a href="{{ url('/belajar/sql/db-default') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-view') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>
        Auto increment memungkinkan nomor unik tergenerate untuk mengisi kolom ketika ada record baru. Auto increment biasanya digunakan pada Primary Key.
    </p>
    <h4 class="my-3">Sintaks</h4>
    <div class="code">
    CREATE TABLE siswa ( <br>
    NIS int NOT NULL AUTO_INCREMENT, <br>
    nama varchar(255) NOT NULL, <br>
    alamat text, <br>
    jk varchar(255) DEFAULT 'Laki-laki' <br>
);
    </div>
    <p><span class="mark">AUTO_INCREMENT</span> akan memulai angka pada 1 dan akan bertambah ketika ada record baru
    <br><br>
    Dengan <span class="mark">AUTO_INCREMENT</span> kita tidak perlu menambahkan value pada kolom NIS lagi karena akan tergenerate secara otomatis.
    </p>
    <div class="code">
        INSERT INTO siswa VALUES('Arip', 'Cirebon', 'Laki-laki');
    </div>
    <br>
        <a href="{{ url('/belajar/sql/db-default') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-view') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
