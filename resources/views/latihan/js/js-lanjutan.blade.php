@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.js')
<section class="main">
    <div>
        <h1 class="my-5">Latihan :</h1>
        <h6>Lengkapi potongan kode dibawah!</h6>
        @csrf
        <form action="{{route('cekJSLanjutan')}}" method="post">
            <div id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Jadikan teks menjadi huruf besar</h6>
                <div class="code">
                    let txt = "Hello world"; <br>

                    txt = txt.<input type="text" name="jawaban1">;
                </div>
                <div class="btn btn-success" onclick="soal2()">Lanjut</div>
            </div>
            <div style="display: none" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Jadikan teks menjadi huruf kecil</h6>
                <div class="code">

                    let txt = "Hello world"; <br>
                    txt = txt.<input type="text" name="jawaban2">;
                </div>
                <div class="btn btn-success" onclick="soal1()">Kembali</div>
                <div class="btn btn-success" onclick="soal3()">Lanjut</div>
            </div>
            <div style="display: none" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Ubah "world" jadi "Arip"</h6>
                <div class="code">
                    let txt = "Hello world"; <br>
                    txt = txt.<input type="text" name="jawaban3">("world","Arip");
                </div>
                <div class="btn btn-success" onclick="soal2()">Kembali</div>
                <div class="btn btn-success" onclick="soal4()">Lanjut</div>
            </div>
            <div style="display: none" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Buatlah kondisi dimana jika x lebih besar dari y akan menampilkan "Hello world"</h6>
                <div class="code">
                    if (<input type="text" name="jawaban4">){
                        <div class="ps-4">
                            alert("Hello world");
                        </div>
                    }
                </div>
                <div class="btn btn-success" onclick="soal3()">Kembali</div>
                <div class="btn btn-success" onclick="soal5()">Lanjut</div>
            </div>
            <div style="display: none" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Buatlah kondisi dimana jika x tidak sama dengan y akan menampilkan "Hello world"</h6>
                <div class="code">
                    if (<input type="text" name="jawaban5">){
                        <div class="ps-4">
                            alert("Hello world");
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
