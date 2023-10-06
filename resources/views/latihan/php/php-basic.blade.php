@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.php')
<section class="main">
    <div>
        <h1 class="my-5">Latihan :</h1>
        <h6>Lengkapi potongan kode dibawah!</h6>
        @csrf
        <form action="{{route('cekPHPBasic')}}" method="post">
            <div class="soal" id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Masukkan bagian yang hilang dari kode di bawah ini untuk menampilkan "Hello World".</h6>
                <div class="code">
                    <input type="text" name="jawaban1"> "Hello World!";
                </div>
                <div class="btn btn-danger" onclick="soal(2)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Masukan tag pembuka yang benar untuk script php</h6>
                <div class="code">
                    <input type="text" name="jawaban2"> <br>
                    echo "Halo"; <br>
                    ?>
                </div>
                <div class="btn btn-danger" onclick="soal(1)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(3)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Buat variable sekolah dengan value "SMKN 1 Cirebon"</h6>
                <div class="code">
                    <input type="text" name="jawaban3"> = "SMKN 1 Cirebon";
                </div>
                <div class="btn btn-danger" onclick="soal(2)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(4)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Statement dalam PHP harus diakhiri dengan karakter khusus, yaitu</h6>
                <div class="code">
                    echo "Hello World" <input type="text" name="jawaban4">
                </div>
                <div class="btn btn-danger" onclick="soal(3)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(5)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Dapatkan length dari string "Hello World"</h6>
                <div class="code">
                    echo <input type="text" name="jawaban5">("Hello World");
                </div>
                <div class="btn btn-danger" onclick="soal(4)">Kembali</div>
                <input type="submit" class="btn btn-danger bg-success" value="Kirim Jawaban">
            </div>
        </form>
    </div>
</section>
@endsection
