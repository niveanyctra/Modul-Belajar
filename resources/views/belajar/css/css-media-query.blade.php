@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Media Query</h1>
    <a href="{{ url('/belajar/css/display') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/background-color') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Media query digunakan untuk mengatur tampilan menjadi responsif dengan membedakan tampilan berdasarkan ukuran layar pengguna</p><br>
    <hr>
    <h4 class="my-3">Contoh</h4>
    <div class="p-3 contohmq1">
        <div class="p-2 contohmq2">&nbsp;</div>
    </div>
    <br>
    <p>
        Pada contoh diatas jika anda membuka halaman ini di laptop atau desktop, maka garis luar berwarna biru dan didalamnya berwarna oranye. Tetapi jika anda membuka halaman ini di tablet atau smartphone, maka garis luar akan berwarna oranye dan didalamnya berwarna biru <br><br>
        <strong>Tip :</strong> Kamu bisa memperkecil browser untuk melihat perubahannya
    </p>
    <hr>
    <h4 class="my-3">Sintaks Media Query</h4>
    <p>Kita bisa membuat media query dengan sintaks berikut :</p>
    <div class="code">
        .contoh1{
            <div class="ps-4">
                background-color: tomato;<br>
            </div>
        } <br>
        .contoh2{
            <div class="ps-4">
                background-color: dodgerblue;<br>
            </div>
        } <br>
        @media screen and (max-width: 720px){
            <div class="ps-4">
        .contoh1{
            <div class="ps-4">
                background-color: dodgerblue;<br>
            </div>
        } <br>
        .contoh2{
            <div class="ps-4">
                background-color: tomato;<br>
            </div>
        }
            </div>
        }
    </div>
    <br>
    <p>Pada potongan kode diatas kita menggunakan media query yang akan mempengaruhi ukuran layar pengguna dibawah 720px yang menyebabkan warna dari class contoh satu menjadi dodger blue dan contoh2 menjadi tomato. Namun jika layar pengguna lebih besar dari 720px maka class contoh1 adalah tomato dan contoh2 menjadi dodger blue.</p>
    <a href="{{ url('/belajar/css/display') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/background-color') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

