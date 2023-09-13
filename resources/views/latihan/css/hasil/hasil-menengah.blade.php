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
        <h6 class="fw-semibold">Set warna hijau sebagai background sebuah judul</h6>
        <div @if ($jawab1 == 'background-color')
                class="benar"
            @else
                class="salah"
            @endif>
                <div class="code">
                    h1 {
                        <div class="ps-4">
                            <input type="text" name="jawaban1" readonly value="{{ $jawab1 }}"> : green;
                        </div>
                    }
                </div>
                {{$cek1}}
        </div>

        <h2 class="my-3">Soal 2</h2>
        <h6 class="fw-semibold">Tetapkan "gunung.png" sebagai background sebuah halaman web</h6>
        <div @if ($jawab2 == 'url("gunung.png")')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                body {
                    <div class="ps-4">
                        background-image : <input type="text" name="jawaban2" readonly value="{{ $jawab2 }}">;
                    </div>
                }
            </div>
            {{$cek2}}
        </div>

        <h2 class="my-3">Soal 3</h2>
        <h6 class="fw-semibold">Tetapkan padding atas untuk elemen &lt;h1&gt; sebesar 30 pixel</h6>
        <div @if ($jawab3 == 'padding-top')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                h1 {
                    <div class="ps-4">
                        <input type="text" name="jawaban3" readonly value="{{ $jawab3 }}"> : 30px;
                    </div>
                }
            </div>
            {{$cek3}}
        </div>

        <h2 class="my-3">Soal 4</h2>
        <h6 class="fw-semibold">Tetapkan lebar dari elemen &lt;h1&gt; menjadi "50%"</h6>
        <div @if ($jawab4 == 'width')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                h1 {
                    <div class="ps-4">
                        <input type="text" name="jawaban4" readonly value="{{ $jawab4 }}"> : 50%;
                    </div>
                }
            </div>
            {{$cek4}}
        </div>

        <h2 class="my-3">Soal 5</h2>
        <h6 class="fw-semibold">Hapus garis bawah dari sebuah link</h6>
        <div @if ($jawab5 == 'none')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                a {
                    <div class="ps-4">
                        text-decoration : <input type="text" name="jawaban5" readonly value="{{ $jawab5 }}">;
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
