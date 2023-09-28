@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Update</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/insert') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/delete') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>
        Kita bisa mengubah data yang sebelumnya sudah dimasukan kedalam tabel dengan sintaks <span class="mark">UPDATE</span>.

    </p>
    <div class="code">
        UPDATE siswa
        SET kelas = 'XI RPL 1'
        WHERE nama = 'Arip';
    </div><br>
    <p>Sintaks diatas akan mengubah record kelas menjadi 'XI RPL 1' yang memiliki record nama 'Arip'</p>
    <div class="note">
        <strong>Note :</strong> Klausa <span class="mark">WHERE</span> penting dalam sintaks <span class="mark">UPDATE</span>, tanpa klausa <span class="mark">WHERE</span> maka semua record akan terubah!
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/insert') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/delete') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
