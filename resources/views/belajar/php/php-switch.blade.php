@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Switch</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/if-else') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/function') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
        <p>
        Pernyataan <span class="mark">switch</span> digunakan untuk melakukan aksi yang berbeda tergantung kondisi yang berbeda.
    </p>
    <h5 class="my-3">Cara kerja switch</h5>
    <ul>
        <li>Ekspresi switch hanya dievaluasi satu kali</li>
        <li>Nilai ekspresi akan dibandingkan dengan nilai tiap kondisi</li>
        <li>Jika tidak ada kecocokan maka akan mengeksekusi blok default</li>
    </ul>
        <hr>
    <h3 class="my-3">Contoh</h3>
    <div class="code">
        &lt;?php <br>
        $warna = "merah"; <br>
        switch($warna){
            <div class="ps-3">
                case "merah":
                <div class="ps-3">
                    echo "Warna merah" <br>
                    break;
                </div>
            </div>
            <div class="ps-3">
                case "kuning":
                <div class="ps-3">
                    echo "Warna kuning" <br>
                    break;
                </div>
            </div>
            <div class="ps-3">
                case "hijau":
                <div class="ps-3">
                    echo "Warna hijau" <br>
                    break;
                </div>
            </div>

            <div class="ps-3">
                default:
                <div class="ps-3">
                    $warna = "Warna tidak diketahui"; <br>
                    break;
                </div>
            </div>
        } <br>
        ?>
    </div>

    <div class="note">
        <strong>Note :</strong> Pastikan memberikan <span class="mark">break</span> pada akhir blok kode. Bila tidak, blok kode berikutnya akan tereksekusi walaupun kondisinya tidak memenuhi
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/if-else') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/function') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
