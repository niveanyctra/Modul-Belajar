@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.html')
<section class="main">
    <div>
        <h1 class="my-5">Latihan :</h1>
        <h6>Lengkapi potongan kode dibawah!</h6>
        @csrf
        <form action="{{route('cekHTMLBasic')}}" method="post">
            <div id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk membuat text paragraf?</h6>
                <div class="code">
                    &lt;<input type="text" name="jawaban1">&gt;Text&lt;/<input type="text" name="jawaban1">&gt;
                </div>
                <div class="btn btn-primary" onclick="soal2()">Lanjut</div>
            </div>
            <div style="display: none" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Buatkan judul dengan ukuran paling besar</h6>
                <div class="code">
                    &lt;<input type="text" name="jawaban2">&gt;Judul&lt;/<input type="text" name="jawaban2">&gt;
                </div>
                <div class="btn btn-danger" onclick="soal1()">Kembali</div>
                <div class="btn btn-primary" onclick="soal3()">Lanjut</div>
            </div>
            <div style="display: none" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Masukkan tag yang tepat untuk membuat baris baru</h6>
                <div class="code">
                    &lt;p&gt;
                    <div class="ps-4">
                        paragraf 1 <br>
                        <input type="text" name="jawaban3"> <br>
                        paragraf 2
                    </div>
                    &lt;p&gt;
                </div>
                <div class="btn btn-danger" onclick="soal2()">Kembali</div>
                <div class="btn btn-primary" onclick="soal4()">Lanjut</div>
            </div>
            <div style="display: none" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Buatkan garis horizontal diantara judul dan paragraf</h6>
                <div class="code">
                    &lt;h4&gt; Judul &lt;/h4&gt; <br>
                    <input type="text" name="jawaban4"> <br>
                    &lt;p&gt; Text paragraf &lt;/p&gt;
                </div>
                <div class="btn btn-danger" onclick="soal3()">Kembali</div>
                <div class="btn btn-primary" onclick="soal5()">Lanjut</div>
            </div>
            <div style="display: none" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Buatkan judul dengan ukuran paling kecil</h6>
                <div class="code">
                    &lt;<input type="text" name="jawaban5">&gt;Judul&lt;/<input type="text" name="jawaban5">&gt;
                </div>
                <div class="btn btn-danger" onclick="soal4()">Kembali</div>
                <input type="submit"class="btn btn-primary bg-success" value="Kirim Jawaban">
            </div>
        </form>
    </div>
</section>
@endsection
