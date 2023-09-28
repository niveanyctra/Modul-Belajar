@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Function</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/js/data-type') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/js/object') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <div class="info">
        Function dalam JavaScript digunakan untuk mengeksekusi kode yang dimasukan kedalam fungsi <br>
        Function akan dieksekusi ketika dipanggil.
    </div>
    <h4 class="my-3">Sintaks</h4>
    <p>Kita bisa membuat function dengan sintaks berikut</p>
    <div class="code">
        <span class="t-blue">function</span> namaFungsi(parameter1, parameter2){ <br>
            <span class="t-green">// Kode yang akan dieksekusi</span> <br>
        }
    </div>
    <hr>
    <h4 class="my-3">Contoh</h4>
    <p>Dibawah ini kita akan membuat fungsi yang mengembalikan nilai dari perkalian</p>
    <div class="code">
        <span class="t-blue">let</span> x =fungsiKali(5, 2); <br><br>
        <span class="t-blue">function</span> fungsiKali(a, b){ <br>
            <span class="t-blue">return</span> a * b; <br>

        }
    </div>
    <p>
        Pada potongan kode diatas kita membuat fungsi bernama fungsiKali yang akan mengembalikan nilai dari parameter a dan b yang dikali dan dipanggil oleh variabel x yang memberi parameter a dengan nilai 5 dan parameter b dengan nilai 2.
    </p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/js/data-type') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/js/object') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
