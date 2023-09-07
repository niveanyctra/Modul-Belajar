@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Background Shorthand</h1>
    <a href="{{ url('/belajar/css/background-attachment') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/border') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Kita bisa menghemat penulisan background dengan cara sebagai berikut :</p>
        <div class="bg-dark text-light p-3">
            p{
            <div class="ps-4">
                background: url("gambar.png") fixed no-repeat top;
            </div>
        } <br>
    </div><br>
    <p>Potongan kode diatas dapat menghemat penulisan menjadi lebih singkat</p>
    <a href="{{ url('/belajar/css/background-attachment') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/border') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

