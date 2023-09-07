@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Syntax</h1>
    <a href="{{ url('/belajar/css') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/selector') }}" class="btn btn-success">Selanjutnya</a>
    <br>
    <h3 class="my-3">
        Sintaks CSS
    </h3>
    <div class="bg-dark text-light p-2">
        <span class="text-warning">h1</span> {
            <div class="ps-4">

                <span class="text-danger">color</span>: <span class="text-success">red</span>;<br>
                <span class="text-danger">text-align</span>: <span class="text-success">center</span>;
            </div>
        }
    </div>
    <p>
        Pada contoh diatas adalah potongan kode dari sintaks CSS dengan penjelasan sebagai berikut :
    </p>
    <ul>
        <li><span class="bg-body-secondary text-warning">h1</span> merupakan selector, kamu bisa membuat selector dengan semua tag HTML, nama class dan nama id</li>
        <li><span class="bg-body-secondary text-danger">color</span> dan <span class="bg-body-secondary text-danger">text-align</span> merupakan properti yang digunakan untuk mendesain</li>
        <li>Teks berwarna hijau merupakan value dari properti yang digunakan</li>
    </ul>
    <a href="{{ url('/belajar/css') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/selector') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

