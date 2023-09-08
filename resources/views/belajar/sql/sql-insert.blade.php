@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Insert</h1>
    <a href="{{ url('/belajar/sql/operator') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/update') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>
        Kita bisa menambah record dalam database dengan sintaks <span class="mark">INSERT INTO</span>.<br><br>
        Ada dua cara untuk menggunakan sintaks <span class="mark">INSERT INTO</span> yaitu : <br><br>
        1. Menulis nama kolom kemudian value yang akan ditambah kedalam tabel
        <div class="code">
            INSERT INTO siswa ('nama','kelas','jk')<br>
            VALUES ('Udin','X RPL 1','Laki-laki');
        </div><br>
        2. Tidak menulis nama kolom, namun langsung memberikan value yang akan ditambah kedalam tabel. Hal ini diperbolehkan namun kita harus mastikan urutan value sama dengan urutan kolom dalam tabel <br>
        <div class="code">
            INSERT INTO siswa
            VALUES ('Udin','X RPL 1','Laki-laki');
        </div><br>

    </p>
    <p>Kita juga bisa menambah beberapa record dalam satu sintaks <span class="mark">INSERT INTO</span> dengan cara berikut :</p>
        <div class="code">
            INSERT INTO siswa <br>
            VALUES ('Udin','X RPL 1','Laki-laki'), <br>
            VALUES ('Messi','X RPL 1','Laki-laki'), <br>
            VALUES ('Ronaldo','X RPL 1','Laki-laki');
        </div><br>
    <a href="{{ url('/belajar/sql/operator') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/update') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
