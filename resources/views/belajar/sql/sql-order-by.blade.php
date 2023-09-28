@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Order By</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/where') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/operator') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <h3 class="my-3">Sintaks ORDER BY SQL</h3>
    <p>
        Sintaks <span class="mark">ORDER BY</span> digunakan untuk mengurutkan result-set dengan urutan menaik atau menurun. <br><br>
        Sintaks <span class="mark">ORDER BY</span> akan mengurutkan secara menaik, namun kita bisa mengaturnya dengan kata kunci <span class="mark">DESC</span> untuk menaik dan <span class="mark">ASC</span> untuk menurun.

    </p>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        SELECT * FROM nilaiSiswa ORDER BY nilai DESC;
    </div><br>
    <p>Sintaks tersebut akan mengambil semua kolom dari tabel nilaiSiswa dan akan diurutkan berdasarkan nilai terbesar</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Rasy</td>
                <td>90</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rozaan</td>
                <td>90</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Arip</td>
                <td>80</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Slamet Kopling</td>
                <td>75</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Rehan Batagor</td>
                <td>70</td>
            </tr>
        </tbody>
    </table>
    <br>
    <p>Kita juga bisa memasukan dua kolom sebagai kondisi pada sintaks <span class="mark">ORDER BY</span>.</p>
        <div class="code">
        SELECT * FROM nilaiSiswa ORDER BY nilai,nama;
    </div><br>
    <p>Pada sintaks diatas kita akan mengurutkan berdasarkan nilai dan jika ada kolom nama dengan nilai yang sama, maka akan diurutkan berdasarkan nama dari A-Z</p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/sql/where') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/sql/operator') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
