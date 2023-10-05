@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.sql')
<section class="main">
    <div>
        <h1 class="my-5">Latihan :</h1>
        <h6>Lengkapi potongan kode dibawah!</h6>
        @csrf
        <form action="{{route('cekSQLMenengah')}}" method="post">
            <div id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk memasukkan data ke tabel siswa?</h6>
                <div class="code">
                    <input type="text" name="jawaban1"> siswa <br>
                    VALUES ("Arip","XII RPL 1","Laki-laki");
                </div>
                <div class="btn btn-success" onclick="soal2()">Lanjut</div>
            </div>
            <div style="display: none" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk mengubah data tabel siswa dengan nama "Arip"?</h6>
                <div class="code">
                    <input type="text" name="jawaban2"> siswa SET nama="Messi",kelas="XII RPL 1",jk="Laki-laki" WHERE nama = "Arip";
                </div>
                <div class="btn btn-success" onclick="soal1()">Kembali</div>
                <div class="btn btn-success" onclick="soal3()">Lanjut</div>
            </div>
            <div style="display: none" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Hapus semua record pada tabel siswa</h6>
                <div class="code">
                    <input type="text" name="jawaban3"> siswa;
                </div>
                <div class="btn btn-success" onclick="soal2()">Kembali</div>
                <div class="btn btn-success" onclick="soal4()">Lanjut</div>
            </div>
            <div style="display: none" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Hapus record dari tabel siswa dengan nama "Arip"</h6>
                <div class="code">
                    DELETE siswa <input type="text" name="jawaban4"> nama = "Arip";
                </div>
                <div class="btn btn-success" onclick="soal3()">Kembali</div>
                <div class="btn btn-success" onclick="soal5()">Lanjut</div>
            </div>
            <div style="display: none" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Tampilkan nilai tertinggi dari tabel nilai</h6>
                <div class="code">
                    SELECT <input type="text" name="jawaban5"> FROM nilai;
                </div>
                <div class="btn btn-success" onclick="soal4()">Kembali</div>
                <input type="submit" value="Kirim Jawaban">
            </div>
        </form>
    </div>
</section>
@endsection
