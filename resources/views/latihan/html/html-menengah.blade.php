@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.html')
<section class="main">
    <div>
        <h1 class="my-5">Latihan :</h1>
        <h6>Lengkapi potongan kode dibawah!</h6>
        @csrf
        <form action="{{route('cekHTMLMenengah')}}" method="post">
            <div class="soal" id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk mengubah font menjadi italic?</h6>
                <div class="code">
                    &lt;<input type="text" name="jawaban1" id="jawaban1" value="{{ old('jawaban1') }}">&gt;Text&lt;/<input type="text" name="jawaban1" value="{{ old('jawaban1') }}">&gt;
                </div>
                <div class="btn btn-primary" onclick="soal(2)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Tipe yang digunakan untuk favicon adalah</h6>
                <div class="code">
                    &lt;link type="<input type="text" name="jawaban2"> href="/images/favicon.ico"&gt;
                </div>
                <div class="btn btn-danger" onclick="soal(1)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(3)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Relasi yg tepat untuk favicon adalah</h6>
                <div class="code">
                    &lt;link rel="<input type="text" name="jawaban3">" href="/images/favicon.ico"&gt;
                </div>
                <div class="btn btn-danger" onclick="soal(2)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(4)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk mengatur tinggi gambar dibawah?</h6>
                <div class="code">
                    &lt;img src="image.jpg" <input type="text" name="jawaban4">="100"&gt;
                </div>
                <div class="btn btn-danger" onclick="soal(3)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(5)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk mengatur lebar gambar dibawah?</h6>
                <div class="code">
                    &lt;img src="image.jpg" <input type="text" name="jawaban5">="100"&gt;
                </div>
                <div class="btn btn-danger" onclick="soal(4)">Kembali</div>
                <input type="submit" class="btn btn-danger bg-success" value="Kirim Jawaban">
            </div>
        </form>
    </div>
</section>
@endsection
