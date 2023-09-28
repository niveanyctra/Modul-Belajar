@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Form Input Tipe</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/form-atribut') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/input-atribut') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Berikut ini merupakan tipe dari tag <span class="mark">&lt;input&gt;</span> :</p>
    <table class="table table-striped">
        <tr>
            <th>Tipe</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>Button</td>
            <td>Untuk membuat input berupa tombol</td>
        </tr>
        <tr>
            <td>Checkbox</td>
            <td>Untuk membuat input berupa opsi checkbox</td>
        </tr>
        <tr>
            <td>Color</td>
            <td>Untuk membuat input berupa pilihan warna</td>
        </tr>
        <tr>
            <td>Date</td>
            <td>Untuk membuat input berupa tanggal</td>
        </tr>
        <tr>
            <td>Datetime-local</td>
            <td>Untuk membuat input berupa tanggal di lokasi saat ini</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>Untuk membuat input berupa Email</td>
        </tr>
        <tr>
            <td>hidden</td>
            <td>Untuk membuat input tersembunyi biasanya memiliki value yang sudah diatur</td>
        </tr>
        <tr>
            <td>Image</td>
            <td>Untuk membuat input berupa gambar</td>
        </tr>
        <tr>
            <td>Month</td>
            <td>Untuk membuat input berupa bulan</td>
        </tr>
        <tr>
            <td>Number</td>
            <td>Untuk membuat input berupa angka</td>
        </tr>
        <tr>
            <td>Password</td>
            <td>Untuk membuat input berupa password yang ditampilkan sebagai asteriks atau titik</td>
        </tr>
        <tr>
            <td>Radio</td>
            <td>Untuk membuat input berupa opsi radio</td>
        </tr>
        <tr>
            <td>Range</td>
            <td>Untuk membuat input berupa jarak</td>
        </tr>
        <tr>
            <td>Reset</td>
            <td>Untuk menghapus input yang sebelumnya dibuat</td>
        </tr>
        <tr>
            <td>search</td>
            <td>Untuk membuat input berupa pencarian</td>
        </tr>
        <tr>
            <td>Submit</td>
            <td>Untuk mengirim input</td>
        </tr>
        <tr>
            <td>tel</td>
            <td>Untuk membuat input berupa nomor telepon</td>
        </tr>
        <tr>
            <td>Text</td>
            <td>Untuk membuat input berupa text</td>
        </tr>
        <tr>
            <td>Time</td>
            <td>Untuk membuat input berupa waktu</td>
        </tr>
        <tr>
            <td>URL</td>
            <td>Untuk membuat input berupa URL</td>
        </tr>
        <tr>
            <td>week</td>
            <td>Untuk membuat input berupa minggu</td>
        </tr>
    </table>
    <div class="note">
        <strong>Note :</strong> default tipe input adalah text
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/form-atribut') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/input-atribut') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
