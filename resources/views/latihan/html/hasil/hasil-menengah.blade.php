@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.html')
<section class="main">
    <div>
        <h1 class="my-2">Hasil</h1>
        <hr>
        @csrf

        <h2 class="my-3">Soal 1</h2>
        <h6 class="fw-semibold">Bagaimana cara untuk mengubah font menjadi italic?</h6>
        <div @if ($jawab1 == 'i')
                class="benar"
            @elseif ($jawab1 == 'em')
                class="benar"
            @else
                class="salah"
            @endif>
                <div class="code">
                    &lt;<input readonly type="text" value="{{$jawab1}}" name="jawaban1" id="inputan">&gt;Text&lt;/<input readonly type="text" value="{{$jawab1}}" name="jawaban1" id="inputan">&gt;
                </div>
                {{$cek1}}
        </div>

        <h2 class="my-3">Soal 2</h2>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat posisi text ke kanan?</h6>
        <div @if ($jawab2 == 'image/x-icon')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                &lt;link type="<input readonly type="text" value="{{$jawab2}}" name="jawaban2" id="inputan">" href="/images/favicon.ico"&gt;
            </div>
            {{$cek2}}
        </div>

        <h2 class="my-3">Soal 3</h2>
        <h6 class="fw-semibold">Relasi pada favicon adalah</h6>
        <div @if ($jawab3 == 'icon')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                &lt;link rel="<input readonly type="text" value="{{$jawab3}}" name="jawaban3" id="inputan">" href="/images/favicon.ico"&gt;
            </div>
            {{$cek3}}
        </div>

        <h2 class="my-3">Soal 4</h2>
        <h6 class="fw-semibold">Bagaimana cara untuk mengatur tinggi gambar dibawah?</h6>
        <div @if ($jawab4 == 'height')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                &lt;img src="image.jpg" <input readonly type="text" value="{{$jawab4}}" name="jawaban4" id="inputan">="100"&gt;
            </div>
            {{$cek4}}
        </div>

        <h2 class="my-3">Soal 5</h2>
        <h6 class="fw-semibold">Bagaimana cara untuk mengatur lebar gambar dibawah?</h6>
        <div @if ($jawab5 == 'width')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                &lt;img src="image.jpg" <input readonly type="text" value="{{$jawab5}}" name="jawaban5" id="inputan">="100"&gt;
            </div>
            {{$cek5}}
        </div>

        <a href="{{url('/latihan/html/menengah')}}" class="btn btn-primary">Coba Lagi</a>
        <a href="{{url('/latihan/html/lanjutan')}}" class="btn btn-primary">Lanjut</a>
    </div>
</section>
@endsection
