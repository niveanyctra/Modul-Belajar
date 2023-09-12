@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.css')
<section class="main">
    <div>
        <h1 class="my-5">Latihan :</h1>
        <h6>Lengkapi potongan kode dibawah!</h6>
        @csrf
        <form action="{{route('cekCSSMenengah')}}" method="post">
            <div id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Set warna hijau sebagai background sebuah judul</h6>
                <div class="code">
                    h1 {
                        <div class="ps-4">
                            <input type="text" name="jawaban1"> : green;
                        </div>
                    }
                </div>
                <div class="btn btn-success" onclick="soal2()">Lanjut</div>
            </div>
            <div style="display: none" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Tetapkan "gunung.png" sebagai background sebuah halaman web</h6>
                <div class="code">
                    body {
                        <div class="ps-4">
                            background-image : <input type="text" name="jawaban2">;
                        </div>
                    }
                </div>
                <div class="btn btn-success" onclick="soal1()">Kembali</div>
                <div class="btn btn-success" onclick="soal3()">Lanjut</div>
            </div>
            <div style="display: none" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Tetapkan padding atas untuk elemen &lt;h1&gt; sebesar 30 pixel</h6>
                <div class="code">
                    h1 {
                        <div class="ps-4">
                            <input type="text" name="jawaban3"> : 30px;
                        </div>
                    }
                </div>
                <div class="btn btn-success" onclick="soal2()">Kembali</div>
                <div class="btn btn-success" onclick="soal4()">Lanjut</div>
            </div>
            <div style="display: none" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Tetapkan lebar dari elemen &lt;h1&gt; menjadi "50%"</h6>
                <div class="code">
                    h1 {
                        <div class="ps-4">
                            <input type="text" name="jawaban4"> : 50%;
                        </div>
                    }
                </div>
                <div class="btn btn-success" onclick="soal3()">Kembali</div>
                <div class="btn btn-success" onclick="soal5()">Lanjut</div>
            </div>
            <div style="display: none" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Hapus garis bawah dari sebuah link</h6>
                <div class="code">
                    a {
                        <div class="ps-4">
                            text-decoration : <input type="text" name="jawaban5">;
                        </div>
                    }
                </div>
                <div class="btn btn-success" onclick="soal4()">Kembali</div>
                <input type="submit" value="Kirim Jawaban">
            </div>
        </form>
    </div>
</section>
@endsection
