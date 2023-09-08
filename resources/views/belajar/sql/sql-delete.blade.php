@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Delete</h1>
    <a href="{{ url('/belajar/sql/update') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/select-top') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
        <p>
        Kita bisa menghapus data yang sebelumnya sudah dimasukan kedalam tabel dengan sintaks <mark>DELETE</mark>.

    </p>
    <div class="bg-dark text-light p-2">
        DELETE siswa
        WHERE nama = 'Arip';
    </div><br>
    <p>Sintaks diatas akan menghapus record tabel siswa yang memiliki record nama 'Arip'</p>
    <div class="bg-warning p-4">
        <strong>Note :</strong> Klausa <mark>WHERE</mark> penting dalam sintaks <mark>DELETE</mark>, tanpa klausa <mark>WHERE</mark> maka semua record akan terhapus!
    </div><br>
        <a href="{{ url('/belajar/sql/update') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/select-top') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
