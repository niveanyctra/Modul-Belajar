@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.php')
<section class="main">
    <div>
        <h1 class="my-5">Latihan :</h1>
        <h6>Lengkapi potongan kode dibawah!</h6>
        @csrf
        <form action="{{route('cekPHPMenengah')}}" method="post">
            <div id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Ganti kata "SMA" menjadi "SMK"</h6>
                <div class="code">
                    $oldtxt = "SMA"; <br>
                    $newtxt = <input type="text" name="jawaban1">("SMA", "SMK", $oldtxt);
                </div>
                <div class="btn btn-success" onclick="soal2()">Lanjut</div>
            </div>
            <div style="display: none" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Kalikan 10 dengan 5.</h6>
                <div class="code">
                    echo 10 <input type="text" name="jawaban2"> 5;
                </div>
                <div class="btn btn-success" onclick="soal1()">Kembali</div>
                <div class="btn btn-success" onclick="soal3()">Lanjut</div>
            </div>
            <div style="display: none" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Keluarkan "Hello World" jika $a lebih besar dari $b.</h6>
                <div class="code">
                    $a = 50; <br>
                    $b = 30; <br>
                    <input type="text" name="jawaban3"> ($a > $b) {
                        <div class="ps-4">
                            echo "Hello World";
                        </div>
                    }
                </div>
                <div class="btn btn-success" onclick="soal2()">Kembali</div>
                <div class="btn btn-success" onclick="soal4()">Lanjut</div>
            </div>
            <div style="display: none" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Buat switch statement yang akan menampilkan "Halo" jika $warna adalah "merah", dan "selamat datang" jika $warna adalah "hijau".</h6>
                <div class="code">
                    switch (<input type="text" name="jawaban4">) {
                        <div class="ps-4">
                            case "red":
                                <div class="ps-4">
                                    echo "Halo"; <br>
                                    break;
                                </div>
                            case "green":
                                <div class="ps-4">
                                    echo "selamat datang"; <br>
                                    break;
                                </div>
                        </div>
                    }
                </div>
                <div class="btn btn-success" onclick="soal3()">Kembali</div>
                <div class="btn btn-success" onclick="soal5()">Lanjut</div>
            </div>
            <div style="display: none" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Keluarkan $i selama $i kurang dari 6.</h6>
                <div class="code">
                    $i = 1; <br>
                    <input type="text" name="jawaban5"> ($i > 6) {
                        <div class="ps-4">
                            echo $i; <br>
                            $i++;
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
