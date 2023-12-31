@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.css')
<section class="main">
    <div>
        <h1 class="my-5">Latihan :</h1>
        <h6>Lengkapi potongan kode dibawah!</h6>
        @csrf
        <form action="{{route('cekCSSLanjutan')}}" method="post">
            <div class="soal" id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Gunakan shorthand padding untuk menetapkan margin atas bawah 20 pixel, dan margin kanan kiri 40 pixel</h6>
                <div class="code">
                    p {
                        <div class="ps-4">
                            padding : <input type="text" name="jawaban1">;
                        </div>
                    }
                </div>
                <div class="btn btn-primary" onclick="soal(2)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Gunakan shorthand margin untuk menetapkan margin atas 12px, margin kanan 21px, bawah 15 pixel, dan kiri 20 pixel</h6>
                <div class="code">
                    p {
                        <div class="ps-4">
                            margin : <input type="text" name="jawaban2">;
                        </div>
                    }
                </div>
                <div class="btn btn-danger" onclick="soal(1)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(3)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Buat background image hanya bisa di repeat secara vertikal</h6>
                <div class="code">
                    body {
                        <div class="ps-4">
                            background-image : url("gunung.png"); <br>
                            background-repeat : <input type="text" name="jawaban3">;
                        </div>
                    }
                </div>
                <div class="btn btn-danger" onclick="soal(2)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(4)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Gunakan properti border shorthand untuk menetapkan border "2px", "solid", "black" unruk elemen &lt;p&gt;</h6>
                <div class="code">
                    p {
                        <div class="ps-4">
                            border : <input type="text" name="jawaban4">;
                        </div>
                    }
                </div>
                <div class="btn btn-danger" onclick="soal(3)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(5)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Gunakan properti yang tepat untuk membuat border menjadi bulat</h6>
                <div class="code">
                    p {
                        <div class="ps-4">
                            border : 3px dotted blue; <br>
                            <input type="text" name="jawaban5"> : 5px;
                        </div>
                    }
                </div>
                <div class="btn btn-danger" onclick="soal(4)">Kembali</div>
                <input type="submit" class="btn btn-danger bg-success" value="Kirim Jawaban">
            </div>
        </form>
    </div>
</section>
@endsection
