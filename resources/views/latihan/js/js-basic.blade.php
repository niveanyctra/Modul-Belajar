@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.js')
<section class="main">
    <div>
        <h1 class="my-5">Latihan :</h1>
        <h6>Lengkapi potongan kode dibawah!</h6>
        @csrf
        <form action="{{route('cekJSBasic')}}" method="post">
            <div class="soal" id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Buatlah variabel dengan nama sekolah</h6>
                <div class="code">
                    var <input type="text" name="jawaban1">
                </div>
                <div class="btn btn-primary" onclick="soal(2)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Masukan nilai variabel dengan nilai SMKN 1 Cirebon</h6>
                <div class="code">
                    var sekolah = "<input type="text" name="jawaban2">";
                </div>
                <div class="btn btn-danger" onclick="soal(1)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(3)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibo ld">Lakukan operasi penjumlahan pada dua variabel berikut ini</h6>
                <div class="code">
                    x <input type="text" name="jawaban3"> y
                </div>
                <div class="btn btn-danger" onclick="soal(2)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(4)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Lakukan operasi perkalian pada dua variabel berikut ini</h6>
                <div class="code">
                    x <input type="text" name="jawaban4"> y
                </div>
                <div class="btn btn-danger" onclick="soal(3)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(5)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Berikan Tipe data pada variabel dibawah ini</h6>
                <div class="code">
                    var nama = "Arip" //tipe datanya adalah <input type="text" name="jawaban5">
                </div>
                <div class="btn btn-danger" onclick="soal(4)">Kembali</div>
                <input type="submit" class="btn btn-danger bg-success" value="Kirim Jawaban">
            </div>

        </form>
    </div>
</section>
@endsection
