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
        <h6 class="fw-semibold">Jadikan teks menjadi huruf besar</h6>
        <div @if ($jawab1 == 'toUpperCase()')
                class="benar"
            @else
                class="salah"
            @endif>
                <div class="code">
                    let txt = "Hello world"; <br>

                    txt = txt.<input type="text" readonly value="{{$jawab1}}" name="jawaban1">;
                </div>
                {{$cek1}}
        </div>

        <h2 class="my-3">Soal 2</h2>
        <h6 class="fw-semibold">Jadikan teks menjadi huruf kecil</h6>
        <div @if ($jawab2 == 'toLowerCase()')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">

                    let txt = "Hello world"; <br>
                    txt = txt.<input type="text" readonly value="{{$jawab2}}" name="jawaban2">;
                </div>
            {{$cek2}}
        </div>

        <h2 class="my-3">Soal 3</h2>
        <h6 class="fw-semibold">Ubah "world" jadi "Arip"</h6>
        <div @if ($jawab3 == 'strReplace')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    let txt = "Hello world"; <br>
                    txt = txt.<input type="text" readonly value="{{$jawab3}}" name="jawaban3">("world","Arip");
                </div>
            {{$cek3}}
        </div>

        <h2 class="my-3">Soal 4</h2>
        <h6 class="fw-semibold">Buatlah kondisi dimana jika x lebih besar dari y akan menampilkan "Hello world"</h6>
        <div @if ($jawab4 = "x > y" || "x>y" || "x >y" || "x> y")
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    if (<input type="text" readonly value="{{$jawab4}}" name="jawaban4">){
                        <div class="ps-4">
                            alert("Hello world");
                        </div>
                    }
                </div>
            {{$cek4}}
        </div>

        <h2 class="my-3">Soal 5</h2>
        <h6 class="fw-semibold">Buatlah kondisi dimana jika x tidak sama dengan y akan menampilkan "Hello world"</h6>
        <div @if ($jawab5 = "x != y" || "x!=y" || "x !=y" || "x!= y")
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    if (<input type="text" readonly value="{{$jawab5}}" name="jawaban5">){
                        <div class="ps-4">
                            alert("Hello world");
                        </div>
                    }
                </div>
            {{$cek5}}
        </div>

        <a href="{{url('/latihan/js/lanjutan')}}" class="btn btn-primary">Coba Lagi</a>
    </div>
</section>
@endsection
