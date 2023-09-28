@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Border Shorthand</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/css/border-side') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/css/border-rounded') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Kita bisa menghemat penulisan border dengan cara sebagai berikut :</p>
        <div class="code">
            p{
            <div class="ps-4">
                border: 1px solid black;
            </div>
        } <br>
    </div><br>
    <p>Potongan kode diatas dapat menghemat penulisan menjadi lebih singkat</p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/css/border-side') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/css/border-rounded') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection

