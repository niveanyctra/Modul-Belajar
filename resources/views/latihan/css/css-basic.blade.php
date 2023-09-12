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
            <div id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Set warna merah untuk semua elemen &lt;p&gt;</h6>
                <div class="code">
                    <input type="text" name="jawaban1"> {
                        <div class="ps-4">
                            color : red;
                        </div>
                    }
                </div>
                <div class="btn btn-success" onclick="soal2()">Lanjut</div>
            </div>
            <div style="display: none" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Set warna merah untuk class "tanda"</h6>
                <div class="code">
                    <input type="text" name="jawaban2"> {
                        <div class="ps-4">
                            color : red;
                        </div>
                    }
                </div>
                <div class="btn btn-success" onclick="soal1()">Kembali</div>
                <div class="btn btn-success" onclick="soal3()">Lanjut</div>
            </div>
            <div style="display: none" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Set warna merah untuk id "tanda"</h6>
                <div class="code">
                    <input type="text" name="jawaban3"> {
                        <div class="ps-4">
                            color : red;
                        </div>
                    }
                </div>
                <div class="btn btn-success" onclick="soal2()">Kembali</div>
                <div class="btn btn-success" onclick="soal4()">Lanjut</div>
            </div>
            <div style="display: none" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Set warna merah untuk elemen &lt;p&gt; dan &lt;h1&gt;, kelompokan elemen untuk meminimalisir code</h6>
                <div class="code">
                    <input type="text" name="jawaban4"> {
                        <div class="ps-4">
                            color : red;
                        </div>
                    }
                </div>
                <div class="btn btn-success" onclick="soal3()">Kembali</div>
                <div class="btn btn-success" onclick="soal5()">Lanjut</div>
            </div>
            <div style="display: none" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Masukan bagian yang hilang untuk melengkapi CSS dibawah ini</h6>
                <div class="code">
                    p {
                        <div class="ps-4">
                            color <input type="text" name="jawaban5"> red;
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
