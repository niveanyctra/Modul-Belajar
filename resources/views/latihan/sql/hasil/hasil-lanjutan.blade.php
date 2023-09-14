@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.sql')
<section class="main">
    <div>
        <h1 class="my-2">Hasil</h1>
        <hr>
        @csrf

        <h2 class="my-3">Soal 1</h2>
        <h6 class="fw-semibold">Tampilkan nilai rata rata dari tabel nilai dengan kelas "XII RPL 1"</h6>
        <div @if ($jawab1 = 'avg(nilai)')
                class="benar"
            @else
                class="salah"
            @endif>
                <div class="code">
                    SELECT <input type="text" readonly value="{{$jawab1}}" name="jawaban1"> FROM nilai WHERE kelas = "XII RPL 1";
                </div>
                {{$cek1}}
        </div>

        <h2 class="my-3">Soal 2</h2>
        <h6 class="fw-semibold">Tampilkan tabel nilai dimana nilai diantara 70 dan 90</h6>
        <div @if ($jawab2 = 'BETWEEN')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    SELECT * FROM nilai WHERE nilai <input type="text" readonly value="{{$jawab2}}" name="jawaban2"> 70 AND 90;
                </div>
            {{$cek2}}
        </div>

        <h2 class="my-3">Soal 3</h2>
        <h6 class="fw-semibold">Tampilkan tabel nilai dengan nilai lebih dari 80</h6>
        <div @if ($jawab3 == '>')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    SELECT * FROM nilai WHERE nilai <input type="text" readonly value="{{$jawab3}}" name="jawaban3"> 80;
                </div>
            {{$cek3}}
        </div>

        <h2 class="my-3">Soal 4</h2>
        <h6 class="fw-semibold">Tampilkan tabel siswa yang memiliki nama berawalan huruf a</h6>
        <div @if ($jawab4 = '%a')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    SELECT * FROM siswa WHERE nama LIKE <input type="text" readonly value="{{$jawab4}}" name="jawaban4">;
                </div>
            {{$cek4}}
        </div>

        <h2 class="my-3">Soal 5</h2>
        <h6 class="fw-semibold">Gabungkan tabel siswa dan nilai dengan JOIN yang tepat</h6>
        <div @if ($jawab5 = 'INNER JOIN')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    SELECT * FROM nilai <br> <input type="text" readonly value="{{$jawab5}}" name="jawaban5"> siswa <br>
                    ON nilai.nis = siswa.nis;
                </div>
            {{$cek5}}
        </div>

        <a href="{{url('/latihan/sql/lanjutan')}}" class="btn btn-primary">Coba Lagi</a>
    </div>
</section>
@endsection
