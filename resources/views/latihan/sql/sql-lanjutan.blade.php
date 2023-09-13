@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.sql')
<section class="main">
    <div>
        <h1 class="my-5">Latihan :</h1>
        <h6>Lengkapi potongan kode dibawah!</h6>
        @csrf
        <form action="{{route('cekSQLLanjutan')}}" method="post">
            <div id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Tampilkan nilai rata rata dari tabel nilai dengan kelas "XII RPL 1"</h6>
                <div class="code">
                    SELECT <input type="text" name="jawaban1"> FROM nilai WHERE kelas = "XII RPL 1";
                </div>
                <div class="btn btn-success" onclick="soal2()">Lanjut</div>
            </div>
            <div style="display: none" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Tampilkan tabel nilai dimana nilai diantara 70 dan 90</h6>
                <div class="code">
                    SELECT * FROM nilai WHERE nilai <input type="text" name="jawaban2"> 70 AND 90;
                </div>
                <div class="btn btn-success" onclick="soal1()">Kembali</div>
                <div class="btn btn-success" onclick="soal3()">Lanjut</div>
            </div>
            <div style="display: none" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Tampilkan tabel nilai dengan nilai lebih dari 80</h6>
                <div class="code">
                    SELECT * FROM nilai WHERE nilai <input type="text" name="jawaban3"> 80;
                </div>
                <div class="btn btn-success" onclick="soal2()">Kembali</div>
                <div class="btn btn-success" onclick="soal4()">Lanjut</div>
            </div>
            <div style="display: none" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Tampilkan tabel siswa yang memiliki nama berawalan huruf a</h6>
                <div class="code">
                    SELECT * FROM siswa WHERE nama LIKE <input type="text" name="jawaban4">;
                </div>
                <div class="btn btn-success" onclick="soal3()">Kembali</div>
                <div class="btn btn-success" onclick="soal5()">Lanjut</div>
            </div>
            <div style="display: none" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Gabungkan tabel siswa dan nilai dengan JOIN yang tepat</h6>
                <div class="code">
                    SELECT * FROM nilai <br> <input type="text" name="jawaban5"> siswa <br>
                    ON nilai.nis = siswa.nis;
                </div>
                <div class="btn btn-success" onclick="soal4()">Kembali</div>
                <input type="submit" value="Kirim Jawaban">
            </div>
        </form>
    </div>
</section>
@endsection
