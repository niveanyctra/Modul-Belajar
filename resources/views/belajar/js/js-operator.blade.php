@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Operator</h1>
    <a href="{{ url('/belajar/js/const') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/arithmetic') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>
        Pada modul ini kita hanya kan membahas operator
    </p>
    <ul>
        <li>Operator aritmatika</li>
        <li>Operator penugasan</li>
        <li>Operator perbandingan</li>
        <li>Operator logika</li>
    </ul>
    <hr>
    <h3 class="my-3">Operator aritmatika</h3>
    <p>Operator aritmatika digunakan untuk melakukan perhitungan pada bilangan</p>
    <p>Berikut ini daftar operator aritmatika yang umum digunakan pada JavaScript :</p>
    <table class="table table-sriped">
        <tr>
            <th>Operator</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>+</td>
            <td>Penjumlahan</td>
        </tr>
        <tr>
            <td>-</td>
            <td>Pengurangan</td>
        </tr>
        <tr>
            <td>*</td>
            <td>Perkalian</td>
        </tr>
        <tr>
            <td>**</td>
            <td>Eksponen</td>
        </tr>
        <tr>
            <td>/</td>
            <td>Pembagian</td>
        </tr>
        <tr>
            <td>%</td>
            <td>Modulus</td>
        </tr>
        <tr>
            <td>++</td>
            <td>Terus bertambah</td>
        </tr>
        <tr>
            <td>--</td>
            <td>Terus berkurang</td>
        </tr>
    </table>
    <hr>
    <h3 class="my-3">Operator penugasan</h3>
    <p>Operator penugasan digunakan untuk melakukan pemberian nilai pada variabel</p>
    <p>Berikut ini daftar operator penugasan yang umum digunakan pada JavaScript :</p>
    <table class="table table-sriped">
        <tr>
            <th>Operator</th>
            <th>Contoh</th>
            <th>Sama seperti</th>
        </tr>
        <tr>
            <td>=</td>
            <td>x = y</td>
            <td>x = y</td>
        </tr>
        <tr>
            <td>+=</td>
            <td>x += y</td>
            <td>x = x + y</td>
        </tr>
        <tr>
            <td>-=</td>
            <td>x -= y</td>
            <td>x = x - y</td>
        </tr>
        <tr>
            <td>*=</td>
            <td>x *= y</td>
            <td>x = x * y</td>
        </tr>
        <tr>
            <td>/=</td>
            <td>x /= y</td>
            <td>x = x / y</td>
        </tr>
        <tr>
            <td>%=</td>
            <td>x %= y</td>
            <td>x = x % y</td>
        </tr>
        <tr>
            <td>**=</td>
            <td>x **= y</td>
            <td>x = x ** y</td>
        </tr>
    </table>
        <hr>
    <h3 class="my-3">Operator perbandingan</h3>
    <p>Operator perbandingan digunakan untuk melakukan perbandingan pada bilangan atau kata</p>
    <p>Berikut ini daftar operator perbandingan yang umum digunakan pada JavaScript :</p>
    <table class="table table-sriped">
        <tr>
            <th>Operator</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>==</td>
            <td>Sama dengan</td>
        </tr>
        <tr>
            <td>===</td>
            <td>Sama value dan tipe data dengan</td>
        </tr>
        <tr>
            <td>!=</td>
            <td>Tidak sama dengan</td>
        </tr>
        <tr>
            <td>></td>
            <td>Lebih besar dari</td>
        </tr>
        <tr>
            <td><</td>
            <td>Lebih kecil dari</td>
        </tr>
        <tr>
            <td>>=</td>
            <td>Lebih besar dari atau sama dengan</td>
        </tr>
        <tr>
            <td><=</td>
            <td>Lebih kecil dari atau sama dengan</td>
        </tr>
        <tr>
            <td>?</td>
            <td>Operator kondisional</td>
        </tr>
    </table>
    <hr>
    <h3 class="m-3">Operator Logika</h3>
    <table class="table table-striped">
        <tr>
            <th>Operator</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>&&</td>
            <td>Logika AND</td>
        </tr>
        <tr>
            <td>||</td>
            <td>Logika OR</td>
        </tr>
        <tr>
            <td>!</td>
            <td>Logika NOT</td>
        </tr>
    </table>
    <br>
        <a href="{{ url('/belajar/js/const') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/arithmetic') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
