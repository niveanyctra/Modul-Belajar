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
        <h6 class="fw-semibold">Gunakan shorthand padding untuk menetapkan margin atas bawah 20 pixel, dan margin kanan kiri 40 pixel</h6>
        <div @if ($jawab1 == '20px 40px')
                class="benar"
            @else
                class="salah"
            @endif>
                <div class="code">
                    p {
                        <div class="ps-4">
                            padding : <input type="text" name="jawaban1" readonly value="{{ $jawab1 }}">;
                        </div>
                    }
                </div>
                {{$cek1}}
        </div>

        <h2 class="my-3">Soal 2</h2>
        <h6 class="fw-semibold">Gunakan shorthand margin untuk menetapkan margin atas 12px, margin kanan 21px, bawah 15 pixel, dan kiri 20 pixel</h6>
        <div @if ($jawab2 == '12px 21px 15px 20px')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                p {
                    <div class="ps-4">
                        margin : <input type="text" name="jawaban2" readonly value="{{ $jawab2 }}">;
                    </div>
                }
            </div>
            {{$cek2}}
        </div>

        <h2 class="my-3">Soal 3</h2>
        <h6 class="fw-semibold">Buat background image hanya bisa di repeat secara vertikal</h6>
        <div @if ($jawab3 == 'repeat-y')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                body {
                    <div class="ps-4">
                        background-image : url("gunung.png"); <br>
                        background-repeat : <input type="text" name="jawaban3" readonly value="{{ $jawab3 }}">;
                    </div>
                }
            </div>
            {{$cek3}}
        </div>

        <h2 class="my-3">Soal 4</h2>
        <h6 class="fw-semibold">BGunakan properti border shorthand untuk menetapkan border "2px", "solid", "black" unruk elemen &lt;p&gt;</h6>
        <div @if ($jawab4 == '2px solid black')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                p {
                    <div class="ps-4">
                        border : <input type="text" name="jawaban4" readonly value="{{ $jawab4 }}">;
                    </div>
                }
            </div>
            {{$cek4}}
        </div>

        <h2 class="my-3">Soal 5</h2>
        <h6 class="fw-semibold">Gunakan properti yang tepat untuk membuat border menjadi bulat</h6>
        <div @if ($jawab5 == 'border-radius')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                p {
                    <div class="ps-4">
                        border : 3px dotted blue; <br>
                        <input type="text" name="jawaban5" readonly value="{{ $jawab5 }}"> : 5px;
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
