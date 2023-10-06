@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.css')
<section class="main">
    <div>
        <h1 class="my-5">Latihan :</h1>
        <h6>Lengkapi potongan kode dibawah!</h6>
        @csrf
        <form action="{{route('cekCSSBasic')}}" method="post">
            <div class="soal" id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Set warna merah untuk semua elemen &lt;p&gt;</h6>
                <div class="code">
                    <input type="text" name="jawaban1"> {
                        <div class="ps-4">
                            color : red;
                        </div>
                    }
                </div>
                <div class="btn btn-primary" onclick="soal(2)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Set warna merah untuk class "tanda"</h6>
                <div class="code">
                    <input type="text" name="jawaban2"> {
                        <div class="ps-4">
                            color : red;
                        </div>
                    }
                </div>
                <div class="btn btn-danger" onclick="soal(1)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(3)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Set warna merah untuk id "tanda"</h6>
                <div class="code">
                    <input type="text" name="jawaban3"> {
                        <div class="ps-4">
                            color : red;
                        </div>
                    }
                </div>
                <div class="btn btn-danger" onclick="soal(2)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(4)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Set warna merah untuk elemen &lt;p&gt; dan &lt;h1&gt;, kelompokan elemen untuk meminimalisir code</h6>
                <div class="code">
                    <input type="text" name="jawaban4"> {
                        <div class="ps-4">
                            color : red;
                        </div>
                    }
                </div>
                <div class="btn btn-danger" onclick="soal(3)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(5)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Masukan bagian yang hilang untuk melengkapi CSS dibawah ini</h6>
                <div class="code">
                    p {
                        <div class="ps-4">
                            color <input type="text" name="jawaban5"> red;
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
