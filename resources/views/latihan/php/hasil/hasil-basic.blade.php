@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.php')
<section class="main">
    <div>
        <h1 class="my-2">Hasil</h1>
        <hr>
        @csrf

        <h2 class="my-3">Soal 1</h2>
        <h6 class="fw-semibold">Masukkan bagian yang hilang dari kode di bawah ini untuk menampilkan "Hello World".</h6>
        <div @if ($jawab1 == 'echo')
                class="benar"
            @else
                class="salah"
            @endif>
                <div class="code">
                    <input type="text" name="jawaban1" readonly value="{{ $jawab1 }}"> "Hello World!";
                </div>
                {{$cek1}}
        </div>

        <h2 class="my-3">Soal 2</h2>
        <h6 class="fw-semibold">Masukan tag pembuka yang benar untuk script php</h6>
        <div @if ($jawab2 == "<?php")
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                <input type="text" name="jawaban2" readonly value="{{ $jawab2 }}"> <br>
                echo "Halo"; <br>
                ?>
            </div>
            {{$cek2}}
        </div>

        <h2 class="my-3">Soal 3</h2>
        <h6 class="fw-semibold">Buat variable sekolah dengan value "SMKN 1 Cirebon"</h6>
        <div @if ($jawab3 == '$sekolah')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                <input type="text" name="jawaban3" readonly value="{{ $jawab3 }}"> = "SMKN 1 Cirebon";
            </div>
            {{$cek3}}
        </div>

        <h2 class="my-3">Soal 4</h2>
        <h6 class="fw-semibold">Statement dalam PHP harus diakhiri dengan karakter khusus, yaitu</h6>
        <div @if ($jawab4 == ';')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                echo "Hello World" <input type="text" name="jawaban4" readonly value="{{ $jawab4 }}">
            </div>
            {{$cek4}}
        </div>

        <h2 class="my-3">Soal 5</h2>
        <h6 class="fw-semibold">Dapatkan length dari string "Hello Wolrds"</h6>
        <div @if ($jawab5 == 'strlen')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                echo <input type="text" name="jawaban5" readonly value="{{ $jawab5 }}">("Hello World");
            </div>
            {{$cek5}}
        </div>

        <a href="{{url('/latihan/php/basic')}}" class="btn btn-primary">Coba Lagi</a>
        <a href="{{url('/latihan/php/menengah')}}" class="btn btn-primary">Lanjut</a>
    </div>
</section>
@endsection
