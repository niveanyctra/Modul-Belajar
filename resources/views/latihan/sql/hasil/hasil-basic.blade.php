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
        <h6 class="fw-semibold">Bagaimana cara untuk mengambil semua data dari tabel siswa?</h6>
        <div @if ($jawab1 = 'SELECT')
                class="benar"
            @else
                class="salah"
            @endif>
                <div class="code">
                    <input type="text" readonly value="{{$jawab1}}" name="jawaban1"> * FROM siswa;
                </div>
                {{$cek1}}
        </div>

        <h2 class="my-3">Soal 2</h2>
        <h6 class="fw-semibold">Bagaimana cara untuk mengambil hanya nama dari tabel siswa?</h6>
        <div @if ($jawab2 == 'nama')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    SELECT <input type="text" readonly value="{{$jawab2}}" name="jawaban2"> FROM siswa
                </div>
            {{$cek2}}
        </div>

        <h2 class="my-3">Soal 3</h2>
        <h6 class="fw-semibold">Bagaimana cara menampilkan data dari tabel siswa dengan nama "Arip"</h6>
        <div @if ($jawab3 = 'WHERE')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    SELECT * FROM siswa <input type="text" readonly value="{{$jawab3}}" name="jawaban3"> nama = "Arip";
                </div>
            {{$cek3}}
        </div>

        <h2 class="my-3">Soal 4</h2>
        <h6 class="fw-semibold">Bagaimana cara menampilkan data dari tabel siswa dengan kelas selain "XII RPL 1"</h6>
        <div @if ($jawab4 = 'WHERE NOT')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    SELECT * FROM siswa <input type="text" readonly value="{{$jawab4}}" name="jawaban4"> kelas = "XII RPL 1";
                </div>
            {{$cek4}}
        </div>

        <h2 class="my-3">Soal 5</h2>
        <h6 class="fw-semibold">Urutkan tabel siswa berdasarkan nama</h6>
        <div @if ($jawab5 = 'ORDER BY')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    SELECT * FROM siswa <input type="text" readonly value="{{$jawab5}}" name="jawaban5"> nama;
                </div>
            {{$cek5}}
        </div>

        <a href="{{url('/latihan/sql/basic')}}" class="btn btn-primary">Coba Lagi</a>
        <a href="{{url('/latihan/sql/menengah')}}" class="btn btn-primary">Lanjut</a>
    </div>
</section>
@endsection
