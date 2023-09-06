@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Form Input Atribut</h1>
    <a href="{{ url('/belajar/html/input-type') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">Daftar Atribut pada tag <span class="bg-body-secondary text-danger">&lt;input&gt;</span></h3>
    <table class="table table-striped">
        <tr>
            <th>Atribut</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>Value</td>
            <td>Untuk menentukan value dari sebuah input</td>
        </tr>
        <tr>
            <td>readonly</td>
            <td>Untuk membuat sebuah input tidak bisa diedit</td>
        </tr>
        <tr>
            <td>disabled</td>
            <td>Untuk membuat sebuah input tidak bisa diedit dan saat mengirimkan form, input tersebut tidak ikut terkirim</td>
        </tr>
        <tr>
            <td>size</td>
            <td>Untuk menentukan panjang karakter dari sebuah input</td>
        </tr>
        <tr>
            <td>maxlength</td>
            <td>Untuk menentukan batas maksimal karakter dari sebuah input</td>
        </tr>
        <tr>
            <td>max&min</td>
            <td>Untuk menentukan batas maksimal dan minimal karakter dari sebuah input</td>
        </tr>
        <tr>
            <td>multiple</td>
            <td>Untuk membuat input dapat menampung lebih dari satu value(hanya bisa digunakan untuk tipe email dan file)</td>
        </tr>
        <tr>
            <td>placeholder</td>
            <td>Untuk memberikan panduan singkat pada input</td>
        </tr>
        <tr>
            <td>required</td>
            <td>Untuk mendefinisikan bahwa input harus diisi</td>
        </tr>
        <tr>
            <td>autocomplete</td>
            <td>Untuk memberikan akses pada user dengan mengisi form otomatis berdasarkan input sebelumnya</td>
        </tr>
    </table>
    <br>
        <a href="{{ url('/belajar/html/input-type') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
