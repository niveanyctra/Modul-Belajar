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
        <h6 class="fw-semibold">Bagaimana cara untuk membuat text paragraf?</h6>
        <div @if ($jawab1 == 'p')
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
        <h6 class="fw-semibold">Buatkan judul dengan ukuran paling besar</h6>
        <div @if ($jawab2 == 'h1')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                &lt;<input readonly type="text" value="{{$jawab2}}" name="jawaban2" id="inputan">&gt;Judul&lt;/<input readonly type="text" value="{{$jawab2}}" name="jawaban2" id="inputan">&gt;
            </div>
            {{$cek2}}
        </div>

        <h2 class="my-3">Soal 3</h2>
        <h6 class="fw-semibold">Masukkan tag yang tepat untuk membuat baris baru</h6>
        <div @if ($jawab3 == '<br>')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                &lt;p&gt;
                    <div class="ps-4">
                        paragraf 1 <br>
                        <input readonly type="text" value="{{$jawab3}}" name="jawaban3" id="inputan"> <br>
                        paragraf 2
                    </div>
                &lt;p&gt;
            </div>
            {{$cek3}}
        </div>

        <h2 class="my-3">Soal 4</h2>
        <h6 class="fw-semibold">Buatkan garis horizontal diantara judul dan paragraf</h6>
        <div @if ($jawab4 == '<hr>')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                &lt;h4&gt; Judul &lt;/h4&gt; <br>
                <input readonly type="text" value="{{$jawab4}}" name="jawaban4" id="inputan"> <br>
                &lt;p&gt; Text paragraf &lt;/p&gt;
            </div>
            {{$cek4}}
        </div>

        <h2 class="my-3">Soal 5</h2>
        <h6 class="fw-semibold">Buatkan judul dengan ukuran paling kecil</h6>
        <div @if ($jawab5 == 'h6')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                &lt;<input readonly type="text" value="{{$jawab5}}" name="jawaban5" id="inputan">&gt;Judul&lt;/<input readonly type="text" value="{{$jawab5}}" name="jawaban5" id="inputan">&gt;
            </div>
            {{$cek5}}
        </div>

        <a href="{{url('/latihan/html/basic')}}" class="btn btn-primary">Coba Lagi</a>
        <a href="{{url('/latihan/html/menengah')}}" class="btn btn-primary">Lanjut</a>
    </div>
</section>
@endsection
