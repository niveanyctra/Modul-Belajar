@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Pengenalan</h1>
    <a href="{{ url('/') }}" class="btn btn-success">Home</a>
    <a href="{{ url('/belajar/php/syntax') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">
        Apa itu PHP
    </h3>
    <ul>
        <li>PHP merupakan singkatan dari Hypertext Prepocessor</li>
        <li>PHP banyak digunakan oleh publik dan merupakan open source scripting language</li>
        <li>Sintaks PHP dijalankan dalam server</li>
        <li>PHP gratis untuk di download dan digunakan</li>
    </ul>
    <hr>
    <h3 class="my-3">Apa saja yang bisa dilakukan PHP</h3>
    <ul>
        <li>PHP dapat membuat tampilan halaman menjadi dinamis</li>
        <li>PHP dapat membuat,membuka,menulis,menghapus dan menutup file dalam server</li>
        <li>PHP dapat mendapatkan data dari form yang dikirim</li>
        <li>PHP dapat mengirim dan menerima cookies</li>
        <li>PHP dapat menambah,menghapus dan mengubah data dalam database</li>
        <li>PHP dapat mengatur has akses user</li>
        <li>PHP dapat digunakan untuk mengenkripsi data</li>
    </ul>
    <hr>
    <h3 class="my-3">Apa saja yang diperlukan sebelum menggunakan PHP</h3>
    <p>Berikut ini hal yang harus disiapkan sebelum menggunakan PHP</p>
    <ul>
        <li>Sebuah web server</li>
        <li>Menginstal PHP</li>
        <li>Menginstal Database</li>
    </ul>
    <p>Kita akan menggunakan XAMPP pada modul ini <a href="https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.1.17/xampp-windows-x64-8.1.17-0-VS16-installer.exe" class="text-dark">Install XAMPP Disini</a></p>
        <a href="{{ url('/') }}" class="btn btn-success">Home</a>
    <a href="{{ url('/belajar/php/syntax') }}" class="btn btn-success">Selanjutnya</a>  
</section>
@endsection
