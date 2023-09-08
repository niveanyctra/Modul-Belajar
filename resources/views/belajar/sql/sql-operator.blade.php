@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Operator</h1>
    <a href="{{ url('/belajar/sql/order-by') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/insert') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>
        SQL memiliki beberapa operator yang berguna untuk mengatur kondisi yang ingin ditampilkan dalam result-set. <br><br>
        Berikut ini adalah beberapa operator dalam SQL.
    </p>
    <hr>
    {{-- Operator AND --}}
    <h3 class="my-3">Operator AND</h3>
    <p>
        Operator <span class="mark">AND</span> biasa digunakan dalam klausa <span class="mark">WHERE</span>. <br><br>
        Klausa <span class="mark">WHERE</span> dapat memiliki lebih dari satu operator <span class="mark">AND</span>

    </p><br>
    <div class="code">
        SELECT * FROM siswa WHERE nama = 'Arip' AND kelas = 'XII RPL 1';
    </div>
    <p>Pada sintaks diatas kita akan mengambil semua kolom dari tabel siswa yang memiliki record nama 'Arip' dan kelas 'XII RPL 1'.</p>
    <hr>
    {{-- Operator OR --}}
    <h3 class="my-3">Operator OR</h3>
        <p>
        Operator <span class="mark">OR</span> biasa digunakan dalam klausa <span class="mark">WHERE</span>. <br><br>
        Klausa <span class="mark">WHERE</span> dapat memiliki lebih dari satu operator <span class="mark">OR</span>

    </p><br>
    <div class="code">
        SELECT * FROM siswa WHERE nama = 'Arip' OR kelas = 'XII RPL 1';
    </div>
    <p>Pada sintaks diatas kita akan mengambil semua kolom dari tabel siswa yang memiliki record nama 'Arip' atau kelas 'XII RPL 1'.</p>
    <br>
    <div class="note">
        <strong>Perbedaan AND dan OR :</strong><br>
        <p>
            Operator AND akan berjalan jika <strong>SEMUA</strong> kondisi benar. <br>
            Operator OR akan berjalan jika <strong>SALAH SATU</strong> kondisi benar.

        </p>
    </div>
    <hr>
    {{-- Operator NOT --}}
    <h3 class="my-3">Operator NOT</h3>
    <p>
        Operator <span class="mark">NOT</span> biasa digunakan dalam klausa <span class="mark">WHERE</span>. <br><br>
        Klausa <span class="mark">WHERE</span> dapat memiliki lebih dari satu operator <span class="mark">NOT</span>

    </p><br>
    <div class="code">
        SELECT * FROM siswa WHERE NOT kelas = 'XII RPL 1';
    </div>
    <p>Pada sintaks diatas kita akan mengambil semua kolom dari tabel siswa yang memiliki record kelas selain 'XII RPL 1'.</p>
    <hr>
    {{-- Operator LIKE --}}
    <h3 class="my-3">Operator LIKE</h3>
    <p>
        Operator <span class="mark">LIKE</span> biasa digunakan dalam klausa <span class="mark">WHERE</span>. <br><br>
        Klausa <span class="mark">WHERE</span> dapat memiliki lebih dari satu operator <span class="mark">LIKE</span>

    </p><br>
    <div class="code">
        SELECT * FROM siswa WHERE nama LIKE '%Arip%';
    </div>
    <p>Pada sintaks diatas kita akan mengambil semua kolom dari tabel siswa yang memiliki record nama yang mengandung kata 'Arip' dalam recordnya.</p><br>
    <div class="note">
        <strong>Penjelasan '%' dalam operator LIKE :</strong>
        <p>
            persen(%) dalam operator LIKE menjelaskan dari mana kata yang akan dipakai. <br>
            <strong>Contoh : </strong><br>
            'A%' akan mencari record yang <strong>berawalan</strong> 'A',<br>
            '%A' akan mencari record yang <strong>berakhiran</strong> 'A',<br>
            '%A%' akan mencari record yang <strong>mengandung</strong> 'A' ditengah, awal dan akhir<br>
        </p>
    </div>
    <hr>
    {{-- Operator BETWEEN --}}
    <h3 class="my-3">Operator BETWEEN</h3>
    <p>
        Operator <span class="mark">BETWEEN</span> biasa digunakan dalam klausa <span class="mark">WHERE</span>. <br><br>
        Klausa <span class="mark">WHERE</span> dapat memiliki lebih dari satu operator <span class="mark">BETWEEN</span>

    </p><br>
    <div class="code">
        SELECT * FROM nilaiSiswa WHERE nilai BETWEEN 70 AND 90;
    </div>
    <p>Pada sintaks diatas kita akan mengambil semua kolom dari tabel nilaiSiswa yang memiliki record nilai antara 70 sampai 90.</p>
    <br>
        <a href="{{ url('/belajar/sql/order-by') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/insert') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
