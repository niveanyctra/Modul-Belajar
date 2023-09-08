@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Background Attachment</h1>
    <a href="{{ url('/belajar/css/background-repeat') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/background-shorthand') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Kita bisa mengatur background untuk bisa discroll atau fixed dengan properti <mark>background-attachment</mark></p><br>
            <div class="code">
            p{
            <div class="ps-4">
                background-image: url("gambar.png");<br>
                background-repeat: no-repeat;<br>
                background-position: top;<br>
                background-attachment: fixed;
            </div>
        } <br>
    </div><br>
    <p>Pada potongan kode diatas kita mengatur background agar tidak ikut ketika discroll dan terletak di atas elemen</p>
        <a href="{{ url('/belajar/css/background-repeat') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/background-shorthand') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

