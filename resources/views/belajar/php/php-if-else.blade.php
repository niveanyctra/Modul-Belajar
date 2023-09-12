@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Statement if...else...elseif</h1>
    <a href="{{ url('/belajar/php/operator') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/switch') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
        <p>
        If else merupakan pernyataan kondisional berdasarkan parameter yang diberikan yang akan memberikan tindakan berbeda tergantung kondisi
    </p>
    <hr>
    <h3 class="my-3">Pernyataan If</h3>
    <p>
        Pernyataan <span class="mark">if</span> <strong>hanya</strong> akan dijalankan bila kondisi benar
    </p>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        &lt;?php
        if($kelas = "X RPL 1"){
            <div class="ps-2">

                &teks = "Halo kelas X RPL 1";
            </div>
        }
        ?>
    </div>
    <p>Pada potongan kode diatas kita mengembalikan teks dengan value "Halo kelas X RPL 1" jika dan hanya jika kelasnya memiliki value "X RPL 1"</p>
    <hr>
    <h3 class="my-3">Pernyataan if else</h3>
    <p>
        Pada pernyataan <span class="mark">if</span> <span class="mark">else</span> kita memiliki kondisi salah dan benar.
    </p>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        &lt;?php
                if($kelas = "X RPL 1"){
            <div class="ps-2">
                &teks = "Halo murid SMKN 1 Cirebon kelas X RPL 1";
            </div>
        }else{
            <div class="ps-2">
                &teks = "Halo murid SMKN 1 Cirebon";
            </div>
        }
        ?>
    </div>
    <p>Pada pernyataan diatas jika kelas memiliki value "X RPL 1" maka akan mengembalikan teks "Halo murid SMKN 1 Cirebon kelas X RPL 1", sedangkan jika valuenya bukan "X RPL 1" akan mengembalikan teks "Halo murid SMKN 1 Cirebon"</p>
    <hr>
    <h3 class="my-3">Pernyataan if else else if</h3>
    <p>
        Pernyataan ini akan dijalankan berdasarkan kondisi yang terpenuhi dan akan memiliki tindakan berbeda tiap kondisi yang terpenuhi
    </p>
    <h4 class="my-3">
        Contoh
    </h4>
    <div class="code">
        &lt;?php

        if($kelas = "X RPL 1"){
            <div class="ps-2">
                &teks = "Halo murid SMKN 1 Cirebon kelas X RPL 1";
            </div>
        }elseif($kelas = "XI RPL 1"){
            <div class="ps-2">
                &teks = "Halo murid SMKN 1 Cirebon kelas XI RPL 1";
            </div>
        }elseif($kelas = "XII RPL 1"){
            <div class="ps-2">
               teks = "Halo murid SMKN 1 Cirebon kelas XII RPL 1";
            </div>
        }else{
            <div class="ps-2">
                teks = "Halo murid SMKN 1 Cirebon";
            </div>
        }
        ?>
    </div>
    <p>
        Pada pernyataan diatas teks yang dikembalikan akan berbeda tergantung kondisi yang terpenuhi dan jika tak satupun kondisi terpenuhi, maka akan mengembalikan value pada pernyataan else
    </p>
    <a href="{{ url('/belajar/php/operator') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/switch') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
