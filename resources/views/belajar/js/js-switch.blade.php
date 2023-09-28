@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Switch</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/js/if-else') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/js/loop') }}" class="btn btn-success">Selanjutnya</a>
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
        const hari = new Date().getDay(); <br>
        switch(hari){
            <div class="ps-3">
                case 0:
                <div class="ps-3">
                    hari = "Senin"; <br>
                    break;
                </div>
            </div>
            <div class="ps-3">
                case 1:
                <div class="ps-3">
                    hari = "Selasa"; <br>
                    break;
                </div>
            </div>
            <div class="ps-3">
                case 2:
                <div class="ps-3">
                    hari = "Rabu"; <br>
                    break;
                </div>
            </div>
            <div class="ps-3">
                case 3:
                <div class="ps-3">
                    hari = "Kamis"; <br>
                    break;
                </div>
            </div>
            <div class="ps-3">
                case 4:
                <div class="ps-3">
                    hari = "Jumat"; <br>
                    break;
                </div>
            </div>
            <div class="ps-3">
                case 5:
                <div class="ps-3">
                    hari = "Sabtu"; <br>
                    break;
                </div>
            </div>
            <div class="ps-3">
                case 6:
                <div class="ps-3">
                    hari = "Minggu"; <br>
                    break;
                </div>
            </div>
            <div class="ps-3">
                default:
                <div class="ps-3">
                    hari = "Hari tidak diketahui"; <br>
                    break;
                </div>
            </div>
        }
    </div>
    <p>
        Pada kode diatas kita mengembalikan nama hari berdasarkan ekspresi hari yang akan memberikan output berdasarkan kondisi yang berbeda dan jika tidak ada kondisi yang terpenuhi maka akan menjalankan blok kode yang ada di blok default.
    </p>
    <div class="note">
        <strong>Note :</strong> Pastikan memberikan <span class="mark">break</span> pada akhir blok kode. Bila tidak, blok kode berikutnya akan tereksekusi walaupun kondisinya tidak memenuhi
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/js/if-else') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/js/loop') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
