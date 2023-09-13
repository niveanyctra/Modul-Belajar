@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.js')
<section class="main">
    <div>
        <h1 class="my-2">Hasil</h1>
        <hr>
        @csrf

        <h2 class="my-3">Soal 1</h2>
        <h6 class="fw-semibold">Buatlah variabel dengan nama sekolah</h6>
        <div @if ($jawab1 == 'sekolah')
                class="benar"
            @else
                class="salah"
            @endif>
                <div class="code">
                    var <input type="text" readonly value="{{$jawab1}}" name="jawaban1">
                </div>
                {{$cek1}}
        </div>

        <h2 class="my-3">Soal 2</h2>
        <h6 class="fw-semibold">Masukan nilai variabel dengan nilai SMKN 1 Cirebon</h6>
        <div @if ($jawab2 = 'SMKN 1 Cirebon')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    var sekolah = "<input type="text" readonly value="{{$jawab2}}" name="jawaban2">";
                </div>
            {{$cek2}}
        </div>

        <h2 class="my-3">Soal 3</h2>
        <h6 class="fw-semibold">Lakukan operasi penjumlahan pada dua variabel berikut ini</h6>
        <div @if ($jawab3 == '+')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    x <input type="text" readonly value="{{$jawab3}}" name="jawaban3"> y
                </div>
            {{$cek3}}
        </div>

        <h2 class="my-3">Soal 4</h2>
        <h6 class="fw-semibold">Lakukan operasi perkalian pada dua variabel berikut ini</h6>
        <div @if ($jawab4 == '*')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    x <input type="text" readonly value="{{$jawab4}}" name="jawaban4"> y
                </div>
            {{$cek4}}
        </div>

        <h2 class="my-3">Soal 5</h2>
        <h6 class="fw-semibold">Berikan Tipe data pada variabel dibawah ini</h6>
        <div @if ($jawab5 = 'string')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    var nama = "Arip" //tipe datanya adalah <input type="text" readonly value="{{$jawab5}}" name="jawaban5">
                </div>
            {{$cek5}}
        </div>

        <a href="{{url('/latihan/js/basic')}}" class="btn btn-primary">Coba Lagi</a>
        <a href="{{url('/latihan/js/menengah')}}" class="btn btn-primary">Lanjut</a>
    </div>
</section>
@endsection
