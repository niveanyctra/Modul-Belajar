@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Update</h1>
    <a href="{{ url('/belajar/sql/insert') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/delete') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>
        Kita bisa mengubah data yang sebelumnya sudah dimasukan kedalam tabel dengan sintaks <mark>UPDATE</mark>.

    </p>
    <div class="bg-dark text-light p-2">
        UPDATE siswa
        SET kelas = 'XI RPL 1'
        WHERE nama = 'Arip';
    </div><br>
    <p>Sintaks diatas akan mengubah record kelas menjadi 'XI RPL 1' yang memiliki record nama 'Arip'</p>
    <div class="bg-warning p-4">
        <strong>Note :</strong> Klausa <mark>WHERE</mark> penting dalam sintaks <mark>UPDATE</mark>, tanpa klausa <mark>WHERE</mark> maka semua record akan terubah!
    </div><br>
        <a href="{{ url('/belajar/sql/insert') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/delete') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
