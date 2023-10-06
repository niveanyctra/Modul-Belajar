@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.sql')
<section class="main">
    <div>
        <h1 class="my-5">Latihan :</h1>
        <h6>Lengkapi potongan kode dibawah!</h6>
        @csrf
        <form action="{{route('cekSQLBasic')}}" method="post">
            <div class="soal" id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk mengambil semua data dari tabel siswa?</h6>
                <div class="code">
                    <input type="text" name="jawaban1"> * FROM siswa;
                </div>
                <div class="btn btn-primary" onclick="soal(2)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk mengambil hanya nama dari tabel siswa?</h6>
                <div class="code">
                    SELECT <input type="text" name="jawaban2"> FROM siswa
                </div>
                <div class="btn btn-danger" onclick="soal(1)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(3)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Bagaimana cara menampilkan data dari tabel siswa dengan nama "Arip"</h6>
                <div class="code">
                    SELECT * FROM siswa <input type="text" name="jawaban3"> nama = "Arip";
                </div>
                <div class="btn btn-danger" onclick="soal(2)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(4)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Bagaimana cara menampilkan data dari tabel siswa dengan kelas selain "XII RPL 1"</h6>
                <div class="code">
                    SELECT * FROM siswa <input type="text" name="jawaban4"> kelas = "XII RPL 1";
                </div>
                <div class="btn btn-danger" onclick="soal(3)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(5)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Urutkan tabel siswa berdasarkan nama</h6>
                <div class="code">
                    SELECT * FROM siswa <input type="text" name="jawaban5"> nama;
                </div>
                <div class="btn btn-danger" onclick="soal(4)">Kembali</div>
                <input type="submit" class="btn btn-danger bg-success" value="Kirim Jawaban">

            </div>

        </form>
    </div>
</section>
@endsection
