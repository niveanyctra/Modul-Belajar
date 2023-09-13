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
        <h6 class="fw-semibold">Buatlah fungsi bernama sekolah</h6>
        <div @if ($jawab1 == 'sekolah()')
                class="benar"
            @else
                class="salah"
            @endif>
                <div class="code">
                    function <input type="text" readonly value="{{$jawab1}}" name="jawaban1">{<br>
                        <br>
                    }
                </div>
                {{$cek1}}
        </div>

        <h2 class="my-3">Soal 2</h2>
        <h6 class="fw-semibold">Buat fungsi sekolah untuk menampilkan alert dengan teks SMKN 1 Cirebon</h6>
        <div @if ($jawab2 = 'SMKN 1 Cirebon')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    function sekolah(){<br>
                    alert ("<input type="text" readonly value="{{$jawab2}}" name="jawaban2">"); <br>
                    }
                </div>
            {{$cek2}}
        </div>

        <h2 class="my-3">Soal 3</h2>
        <h6 class="fw-semibold">>Buatlah tombol yang ketika diklik akan menampilkan alert</h6>
        <div @if ($jawab3 == 'onclick')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    &lt;button <input type="text" readonly value="{{$jawab3}}" name="jawaban3">="alert('halo')"&gt;Klik Aku&lt;/button&gt;
                </div>
            {{$cek3}}
        </div>

        <h2 class="my-3">Soal 4</h2>
        <h6 class="fw-semibold">Buatlah tombol yang ketika diklik akan menjalankan fungsi sekolah</h6>
        <div @if ($jawab4 == 'sekolah()')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    &lt;button onclick="<input type="text" readonly value="{{$jawab4}}" name="jawaban4">"&gt;Klik Aku&lt;/button&gt;
                </div>
            {{$cek4}}
        </div>

        <h2 class="my-3">Soal 5</h2>
        <h6 class="fw-semibold">Buatlah elemen yang ketika diklik akan menjadi merah</h6>
        <div @if ($jawab5 == 'onclick')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    &lt;div <input type="text" readonly value="{{$jawab5}}" name="jawaban5">="this.style.backgroundColor='red'"&gt;&lt;/div&gt;
                </div>
            {{$cek5}}
        </div>

        <a href="{{url('/latihan/js/basic')}}" class="btn btn-primary">Coba Lagi</a>
        <a href="{{url('/latihan/js/menengah')}}" class="btn btn-primary">Lanjut</a>
    </div>
</section>
@endsection
