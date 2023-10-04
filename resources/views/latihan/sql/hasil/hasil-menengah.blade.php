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
        <h6 class="fw-semibold">Bagaimana cara untuk memasukkan data ke tabel siswa?</h6>
        <div @if ($jawab1 = 'INSERT INTO')
                class="benar"
            @else
                class="salah"
            @endif>
                <div class="code">
                    <input type="text" readonly value="{{$jawab1}}" name="jawaban1"> siswa <br>
                    VALUES ("Arip","XII RPL 1","Laki-laki");
                </div>
                {{$cek1}}
        </div>

        <h2 class="my-3">Soal 2</h2>
        <h6 class="fw-semibold">Bagaimana cara untuk mengubah data tabel siswa dengan nama "Arip"?</h6>
        <div @if ($jawab2 = 'UPDATE')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    <input type="text" readonly value="{{$jawab2}}" name="jawaban2"> siswa SET nama="Messi",kelas="XII RPL 1",jk="Laki-laki" WHERE nama = "Arip";
                </div>
            {{$cek2}}
        </div>

        <h2 class="my-3">Soal 3</h2>
        <h6 class="fw-semibold">Hapus semua record pada tabel siswa</h6>
        <div @if ($jawab3 = 'DELETE')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    <input type="text" readonly value="{{$jawab3}}" name="jawaban3"> siswa;
                </div>
            {{$cek3}}
        </div>

        <h2 class="my-3">Soal 4</h2>
        <h6 class="fw-semibold">Hapus record dari tabel siswa dengan nama "Arip"</h6>
        <div @if ($jawab4 = 'Where')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    DELETE siswa <input type="text" readonly value="{{$jawab4}}" name="jawaban4"> nama = "Arip";
                </div>
            {{$cek4}}
        </div>

        <h2 class="my-3">Soal 5</h2>
        <h6 class="fw-semibold">Tampilkan nilai tertinggi dari tabel nilai</h6>
        <div @if ($jawab5 = 'max(nilai)')
            class="benar"
        @else
            class="salah"
        @endif>
                <div class="code">
                    SELECT <input type="text" readonly value="{{$jawab5}}" name="jawaban5"> FROM nilai;
                </div>
            {{$cek5}}
        </div>

        <a href="{{url('/latihan/sql/menengah')}}" class="btn btn-primary">Coba Lagi</a>
        <a href="{{url('/latihan/sql/lanjutan')}}" class="btn btn-primary">Lanjut</a>
    </div>
</section>
@endsection
