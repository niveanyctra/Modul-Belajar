@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Backup Database</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/db-drop-db') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/db-create-table') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Kita bisa membackup database dengan sintaks <span class="mark">BACKUP DATABASE</span> dan <span class="mark">DIFERENTIAL</span> jika kita pernah membackup database sebelumnya untuk menghemat waktu</p>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        BACKUP DATABASE siswa
        TO DISK = "C:\backups\siswa.bak";
    </div>
    <div class="note">
        <strong>Note :</strong> Pastikan kita menentukan lokasi penyimpanan backup di value TO DISK!
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/db-drop-db') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/db-create-table') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
