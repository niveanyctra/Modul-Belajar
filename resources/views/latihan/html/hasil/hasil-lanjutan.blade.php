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
        <h6 class="fw-semibold">Bagaimana cara untuk membuat posisi text ke tengah?</h6>
        <div @if ($jawab1 == 'center')
                class="benar"
            @else
                class="salah"
            @endif>
                <pre>
                    &lt;p align="<input readonly type="text" value="{{$jawab1}}" name="jawaban1" id="inputan">"&gt;Text&lt;p&gt;
                </pre>
                {{$cek1}}
        </div>

        <h2 class="my-3">Soal 2</h2>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat posisi text ke kanan?</h6>
        <div @if ($jawab2 == 'right')
            class="benar"
        @else
            class="salah"
        @endif>
            <pre>
                &lt;p align="<input readonly type="text" value="{{$jawab2}}" name="jawaban2" id="inputan">"&gt;Text&lt;p&gt;
            </pre>
            {{$cek2}}
        </div>

        <h2 class="my-3">Soal 3</h2>
        <h6 class="fw-semibold">Apa atribut yang tepat untuk menampilkan gambar?</h6>
        <div @if ($jawab3 == 'src')
            class="benar"
        @else
            class="salah"
        @endif>
            <pre>
                &lt;img <input readonly type="text" value="{{$jawab3}}" name="jawaban3" id="inputan">="image.jpg"&gt;
            </pre>
            {{$cek3}}
        </div>

        <h2 class="my-3">Soal 4</h2>
        <h6 class="fw-semibold">Bagaimana cara untuk mengatur tinggi gambar dibawah?</h6>
        <div @if ($jawab4 == 'height')
            class="benar"
        @else
            class="salah"
        @endif>
            <pre>
                &lt;img src="image.jpg" <input readonly type="text" value="{{$jawab4}}" name="jawaban4" id="inputan">="100"&gt;
            </pre>
            {{$cek4}}
        </div>

        <h2 class="my-3">Soal 5</h2>
        <h6 class="fw-semibold">Bagaimana cara untuk mengatur lebar gambar dibawah?</h6>
        <div @if ($jawab5 == 'width')
            class="benar"
        @else
            class="salah"
        @endif>
            <pre>
                &lt;img src="image.jpg" <input readonly type="text" value="{{$jawab5}}" name="jawaban5" id="inputan">="100"&gt;
            </pre>
            {{$cek5}}
        </div>

        <h2 class="my-3">Soal 6</h2>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat warna text menjadi merah?</h6>
        <div @if ($jawab6 == 'color')
            class="benar"
        @else
            class="salah"
        @endif>
            <pre>
                &lt;p style="<input readonly type="text" value="{{$jawab6}}" name="jawaban6" id="inputan">:red;"&gt;Text&lt;p&gt;
            </pre>
            {{$cek6}}
        </div>

        <h2 class="my-3">Soal 7</h2>
        <h6 class="fw-semibold">Bagaimana cara untuk mengatur ukuran text menjadi 12pt?</h6>
        <div @if ($jawab7 == '12pt')
            class="benar"
        @else
            class="salah"
        @endif>
            <pre>
                &lt;p style="font-size:<input readonly type="text" value="{{$jawab7}}" name="jawaban7" id="inputan">;"&gt;Text&lt;p&gt;
            </pre>
            {{$cek7}}
        </div>

        <h2 class="my-3">Soal 8</h2>
        <h6 class="fw-semibold">Bagaimana cara untuk mengarahkan sebuah hyperlink?</h6>
        <div @if ($jawab8 == 'href')
            class="benar"
        @else
            class="salah"
        @endif>
            <pre>
                &lt;a <input readonly type="text" value="{{$jawab8}}" name="jawaban8" id="inputan">="smkn1cirebon.go.id"&gt;Text&lt;a&gt;
            </pre>
            {{$cek8}}
        </div>

        <h2 class="my-3">Soal 9</h2>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat heading paling kecil?</h6>
        <div @if ($jawab9 == 'h6')
            class="benar"
        @else
            class="salah"
        @endif>
            <pre>
                &lt;<input readonly type="text" value="{{$jawab9}}" name="jawaban9" id="inputan">&gt;Text&lt;/<input readonly type="text" value="{{$jawab9}}" name="jawaban9" id="inputan">&gt;
            </pre>
            {{$cek9}}
        </div>

        <h2 class="my-3">Soal 10</h2>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat text berwarna biru?</h6>
        <div @if ($jawab10 == 'blue')
            class="benar"
        @else
            class="salah"
        @endif>
            <pre>
                &lt;p style="color:<input readonly type="text" value="{{$jawab10}}" name="jawaban10" id="inputan">:"&gt;Text&lt;p&gt;
            </pre>
            {{$cek10}}
        </div>

        <a href="{{url('/latihan/html/basic')}}" class="btn btn-primary">Coba Lagi</a>
        <a href="{{url('/latihan/html/menengah')}}" class="btn btn-primary">Lanjut</a>
    </div>
</section>
@endsection
