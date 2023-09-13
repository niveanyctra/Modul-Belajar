@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.css')
<section class="main">
    <div>
        <h1 class="my-2">Hasil</h1>
        <hr>
        @csrf

        <h2 class="my-3">Soal 1</h2>
        <h6 class="fw-semibold">Set warna merah untuk semua elemen &lt;p&gt;</h6>
        <div @if ($jawab1 == 'p')
                class="benar"
            @else
                class="salah"
            @endif>
                <div class="code">
                    <input type="text" name="jawaban1" readonly value="{{ $jawab1 }}"> {
                        <div class="ps-4">
                            color : red;
                        </div>
                    }
                </div>
                {{$cek1}}
        </div>

        <h2 class="my-3">Soal 2</h2>
        <h6 class="fw-semibold">Set warna merah untuk class "tanda"</h6>
        <div @if ($jawab2 == '.tanda')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                <input type="text" name="jawaban2" readonly value="{{ $jawab2 }}"> {
                    <div class="ps-4">
                        color : red;
                    </div>
                }
            </div>
            {{$cek2}}
        </div>

        <h2 class="my-3">Soal 3</h2>
        <h6 class="fw-semibold">Set warna merah untuk id "tanda"</h6>
        <div @if ($jawab3 == '#tanda')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                <input type="text" name="jawaban3" readonly value="{{ $jawab3 }}"> {
                    <div class="ps-4">
                        color : red;
                    </div>
                }
            </div>
            {{$cek3}}
        </div>

        <h2 class="my-3">Soal 4</h2>
        <h6 class="fw-semibold">Set warna merah untuk elemen &lt;p&gt; dan &lt;h1&gt;, kelompokan elemen untuk meminimalisir code</h6>
        <div @if ($jawab4 == 'p, h1')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                <input type="text" name="jawaban4" readonly value="{{ $jawab4 }}"> {
                    <div class="ps-4">
                        color : red;
                    </div>
                }
            </div>
            {{$cek4}}
        </div>

        <h2 class="my-3">Soal 5</h2>
        <h6 class="fw-semibold">Masukan bagian yang hilang untuk melengkapi CSS dibawah ini</h6>
        <div @if ($jawab5 == ':')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                p {
                    <div class="ps-4">
                        color <input type="text" name="jawaban5" readonly value="{{ $jawab5 }}"> red;
                    </div>
                }
            </div>
            {{$cek5}}
        </div>

        <a href="{{url('/latihan/css/basic')}}" class="btn btn-primary">Coba Lagi</a>
        <a href="{{url('/latihan/css/menengah')}}" class="btn btn-primary">Lanjut</a>
    </div>
</section>
@endsection
