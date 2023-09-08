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
        Kita bisa menghapus data yang sebelumnya sudah dimasukan kedalam tabel dengan sintaks <span class="mark">DELETE</span>.

    </p>
    <div class="code">
        DELETE siswa
        WHERE nama = 'Arip';
    </div><br>
    <p>Sintaks diatas akan menghapus record tabel siswa yang memiliki record nama 'Arip'</p>
    <div class="note">
        <strong>Note :</strong> Klausa <span class="mark">WHERE</span> penting dalam sintaks <span class="mark">DELETE</span>, tanpa klausa <span class="mark">WHERE</span> maka semua record akan terhapus!
    </div><br>
        <a href="{{ url('/belajar/sql/update') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/select-top') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
