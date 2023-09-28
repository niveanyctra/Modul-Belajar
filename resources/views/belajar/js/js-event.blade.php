@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Event</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/js/object') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/js/string-method') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>
        Event adalah sesiatu yang akan terjadi pada elemen HTML ketika kita melakukan sesuatu pada elemen tersebut.
    </p>
    <p>Berikut contoh event pada halaman HTML</p>
    <ul>
        <li>Halaman HTML selesai dimuat</li>
        <li>Form HTML yang terubah</li>
        <li>Tombol HTML yang diklik</li>
    </ul>
    <p>
        JavaScript akan mengeksekusi aksi yang akan dilakukan ketika ada event yang terdeteksi
    </p>
    <p>Berikut daftar event yang biasa dipakai pada HTML</p>
    <table class="table table-striped">
        <tr>
            <th>Event</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>onchange</td>
            <td>Ketika elemen HTML berubah</td>
        </tr>
        <tr>
            <td>onclick</td>
            <td>Ketika elemen HTML diklik</td>
        </tr>
        <tr>
            <td>onmouseover</td>
            <td>Ketika user menggerakkan mouse kedalam elemen HTML</td>
        </tr>
        <tr>
            <td>onmouseout</td>
            <td>Ketika user menggerakkan mouse keluar elemen HTML</td>
        </tr>
        <tr>
            <td>onkeydown</td>
            <td>Ketika user menekan keyboard/td>
        </tr>
        <tr>
            <td>onload</td>
            <td>Ketika browser selesai memuat halaman HTML</td>
        </tr>
    </table>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/js/object') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/js/string-method') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
