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
                <h6 class="fw-semibold">Bagaimana cara untuk membuat posisi text ke tengah?</h6>
                <div class="code">
                    &lt;p align="<input type="text" name="jawaban1">"&gt;Text&lt;p&gt;
                </div>
                <div class="btn btn-success" onclick="soal2()">Lanjut</div>
            </div>
            <div style="display: none" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk membuat posisi text ke kanan?</h6>
                <div class="code">
                    &lt;p align="<input type="text" name="jawaban2">"&gt;Text&lt;p&gt;
                </div>
                <div class="btn btn-success" onclick="soal1()">Kembali</div>
                <div class="btn btn-success" onclick="soal3()">Lanjut</div>
            </div>
            <div style="display: none" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Apa atribut yang tepat untuk menampilkan gambar?</h6>
                <div class="code">
                    &lt;img <input type="text" name="jawaban3">="image.jpg"&gt;
                </div>
                <div class="btn btn-success" onclick="soal2()">Kembali</div>
                <div class="btn btn-success" onclick="soal4()">Lanjut</div>
            </div>
            <div style="display: none" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk mengatur tinggi gambar dibawah?</h6>
                <div class="code">
                    &lt;img src="image.jpg" <input type="text" name="jawaban4">="100"&gt;
                </div>
                <div class="btn btn-success" onclick="soal3()">Kembali</div>
                <div class="btn btn-success" onclick="soal5()">Lanjut</div>
            </div>
            <div style="display: none" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk mengatur lebar gambar dibawah?</h6>
                <div class="code">
                    &lt;img src="image.jpg" <input type="text" name="jawaban5">="100"&gt;
                </div>
                <div class="btn btn-success" onclick="soal4()">Kembali</div>
                <div class="btn btn-success" onclick="soal6()">Lanjut</div>
            </div>
            <div style="display: none" id="soal6">
                <h2 class="my-3">Soal 6</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk membuat warna text menjadi merah?</h6>
                <div class="code">
                    &lt;p style="<input type="text" name="jawaban6">:red;"&gt;Text&lt;p&gt;
                </div>
                <div class="btn btn-success" onclick="soal5()">Kembali</div>
                <div class="btn btn-success" onclick="soal7()">Lanjut</div>
            </div>
            <div style="display: none" id="soal7">
                <h2 class="my-3">Soal 7</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk mengatur ukuran text menjadi 12pt?</h6>
                <div class="code">
                    &lt;p style="font-size:<input type="text" name="jawaban7">;"&gt;Text&lt;p&gt;
                </div>
                <div class="btn btn-success" onclick="soal6()">Kembali</div>
                <div class="btn btn-success" onclick="soal8()">Lanjut</div>
            </div>
            <div style="display: none" id="soal8">
                <h2 class="my-3">Soal 8</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk mengarahkan sebuah hyperlink?</h6>
                <div class="code">
                    &lt;a <input type="text" name="jawaban8">="smkn1cirebon.go.id"&gt;Text&lt;a&gt;
                </div>
                <div class="btn btn-success" onclick="soal7()">Kembali</div>
                <div class="btn btn-success" onclick="soal9()">Lanjut</div>
            </div>
            <div style="display: none" id="soal9">
                <h2 class="my-3">Soal 9</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk membuat heading paling kecil?</h6>
                <div class="code">
                    &lt;<input type="text" name="jawaban9">&gt;Text&lt;/<input type="text" name="jawaban9">&gt;
                </div>
                <div class="btn btn-success" onclick="soal8()">Kembali</div>
                <div class="btn btn-success" onclick="soal10()">Lanjut</div>
            </div>
            <div style="display: none" id="soal10" >
                <h2 class="my-3">Soal 10</h2>
                <h6 class="fw-semibold">Bagaimana cara untuk membuat text berwarna biru?</h6>
                <div class="code">
                    &lt;p style="color:<input type="text" name="jawaban10">:"&gt;Text&lt;p&gt;
                </div>
                <div class="btn btn-success" onclick="soal9()">Kembali</div>
                <input type="submit" value="Kirim Jawaban">
            </div>
        </form>
    </div>
</section>
@endsection
