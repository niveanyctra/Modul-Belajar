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
        <h6 class="fw-semibold">Ganti kata "SMA" menjadi "SMK"</h6>
        <div @if ($jawab1 == 'str_replace')
                class="benar"
            @else
                class="salah"
            @endif>
                <div class="code">
                    $oldtxt = "SMA"; <br>
                    $newtxt = <input type="text" name="jawaban1">("SMA", "SMK", $oldtxt);
                </div>
                {{$cek1}}
        </div>

        <h2 class="my-3">Soal 2</h2>
        <h6 class="fw-semibold">Kalikan 10 dengan 5</h6>
        <div @if ($jawab2 == '*')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                echo 10 <input type="text" name="jawaban2" readonly value="{{ $jawab2 }}"> 5;
            </div>
            {{$cek2}}
        </div>

        <h2 class="my-3">Soal 3</h2>
        <h6 class="fw-semibold">Keluarkan "Hello World" jika $a lebih besar dari $b.</h6>
        <div @if ($jawab3 == 'if')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                $a = 50; <br>
                $b = 30; <br>
                <input type="text" name="jawaban3" readonly value="{{ $jawab3 }}"> ($a > $b) {
                    <div class="ps-4">
                        echo "Hello World";
                    </div>
                }
            </div>
            {{$cek3}}
        </div>

        <h2 class="my-3">Soal 4</h2>
        <h6 class="fw-semibold">Buat switch statement yang akan menampilkan "Halo" jika $warna adalah "merah", dan "selamat datang" jika $warna adalah "hijau".</h6>
        <div @if ($jawab4 == '$warna')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                switch (<input type="text" name="jawaban4" readonly value="{{ $jawab4 }}">) {
                    <div class="ps-4">
                        case "red":
                            <div class="ps-4">
                                echo "Halo"; <br>
                                break;
                            </div>
                        case "green":
                            <div class="ps-4">
                                echo "selamat datang"; <br>
                                break;
                            </div>
                    </div>
                }
            </div>
            {{$cek4}}
        </div>

        <h2 class="my-3">Soal 5</h2>
        <h6 class="fw-semibold">Keluarkan $i selama $i kurang dari 6.</h6>
        <div @if ($jawab5 == 'while')
            class="benar"
        @else
            class="salah"
        @endif>
        <div class="code">
            $i = 1; <br>
            <input type="text" name="jawaban5" readonly value="{{$jawab5}}"> ($i > 6) {
                <div class="ps-4">
                    echo $i; <br>
                    $i++;
                </div>
            }
        </div>
            {{$cek5}}
        </div>

        <a href="{{url('/latihan/php/menengah')}}" class="btn btn-primary">Coba Lagi</a>
        <a href="{{url('/latihan/php/lanjutan')}}" class="btn btn-primary">Lanjut</a>
    </div>
</section>
@endsection
