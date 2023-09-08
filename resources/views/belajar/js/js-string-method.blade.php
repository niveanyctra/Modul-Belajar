@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript String Method</h1>
    <a href="{{ url('/belajar/js/event') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/if-else') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>JavaScript memiliki fungsi untuk memanipulasi string. berikut ini adalah daftar fungsi dan deskripsinya :</p>
    <table class="table table-striped">
        <tr>
            <th>Fungsi</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>length</td>
            <td>Berfungsi untuk mengukur panjang string berdasarkan huruf</td>
        </tr>
        <tr>
            <td>slice()</td>
            <td>Berfungsi untuk memotong string berdasarkan dua parameter dan tiap string dimulai dari indeks 0 dan bisa menggunakan minus yang akan dihitung dari akhir string</td>
        </tr>
        <tr>
            <td>substring()</td>
            <td>Memiliki fungsi yang mirip dengan slice() tetapi akan menghitung minus dengan indeks 0</td>
        </tr>
        <tr>
            <td>substr()</td>
            <td>Hampir mirip dengan fungsi slice() tetapi parameter kedua adalah panjang dari string yang akan dipotong</td>
        </tr>
        <tr>
            <td>replace()</td>
            <td>Berfungsi untuk mangubah value string, memiliki dua parameter dengan parameter pertama adalah bagian string yang akan diganti dan parameter kedua adalah pengganti parameter pertama. Fungsi ini peka terhadap besar-kecil</td>
        </tr>
        <tr>
            <td>replaceAll()</td>
            <td>Fungsi ini memungkinkan kita untuk mengganti string secara spesifik</td>
        </tr>
        <tr>
            <td>toUpperCase()</td>
            <td>Fungsi ini memungkinkan kita untuk mengubah string menjadi huruf besar</td>
        </tr>
        <tr>
            <td>toLowerCase()</td>
            <td>Fungsi ini memungkinkan kita untuk mengubah string menjadi huruf kecil</td>
        </tr>
        <tr>
            <td>concat()</td>
            <td>Fungsi ini memungkinkan kita untuk menggabungkan beberapa string</td>
        </tr>
        <tr>
            <td>trim()</td>
            <td>Fungsi ini berguna untuk menghapus spasi kosong pada kedua bagian string</td>
        </tr>
        <tr>
            <td>trimStart()</td>
            <td>Fungsi ini berguna untuk menghapus spasi kosong pada bagian awal string</td>
        </tr>
        <tr>
            <td>trimEnd()</td>
            <td>Fungsi ini berguna untuk menghapus spasi kosong pada bagian akhir string</td>
        </tr>
        <tr>
            <td>padStart()</td>
            <td>Fungsi ini berguna untuk menambah jarak string dari bagian awal</td>
        </tr>
        <tr>
            <td>padEnd()</td>
            <td>Fungsi ini berguna untuk menambah jarak string dari bagian akhir</td>
        </tr>
        <tr>
            <td>charAt()</td>
            <td>Fungsi ini akan mengembalikan huruf berdasarkan parameternya dimulai dari indeks 0</td>
        </tr>
        <tr>
            <td>charCodeAt()</td>
            <td>Fungsi ini akan mengembalikan kede dalam UTF-16 berdasarkan parameternya dimulai dari indeks 0</td>
        </tr>
        <tr>
            <td>split()</td>
            <td>Fungsi ini akan mengubah string menjadi array dengan menentukan penisahan dengan parameter yang diberikan</td>
        </tr>
    </table>
        <a href="{{ url('/belajar/js/event') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/if-else') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
