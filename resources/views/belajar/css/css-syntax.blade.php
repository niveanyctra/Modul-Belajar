@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Syntax</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/css') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/css/selector') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <br>
    <h3 class="my-3">
        Sintaks CSS
    </h3>
    <div class="code">
        <span class="t-red">h1</span> {
            <div class="ps-4">

                <span class="t-red">color</span>: <span class="t-green">red</span>;<br>
                <span class="t-red">text-align</span>: <span class="t-green">center</span>;
            </div>
        }
    </div>
    <p>
        Pada contoh diatas adalah potongan kode dari sintaks CSS dengan penjelasan sebagai berikut :
    </p>
    <ul>
        <li><span class="mark">h1</span> merupakan selector, kamu bisa membuat selector dengan semua tag HTML, nama class dan nama id</li>
        <li><span class="mark">color</span> dan <span class="mark">text-align</span> merupakan properti yang digunakan untuk mendesain</li>
        <li>Teks berwarna hijau merupakan value dari properti yang digunakan</li>
    </ul>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/css') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/css/selector') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection

