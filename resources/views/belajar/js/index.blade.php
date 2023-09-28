@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Pengenalan</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/') }}" class="btn btn-success">Home</a>
        <a href="{{ url('/belajar/js/where-to') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Dapat Mengubah Konten HTML
    </h3>
    <p>
        Salah satu dari banyak metode JavaScript HTML adalah <span class="mark">getElementById()</span> . <br><br>
        Contoh di baawah ini "mencari" elemen HTML (dengan id="demo"), dan mengubah konten elemen HTML (innerHTML) menjadi "Halo JavaScript".
    </p>
    <h4>Contoh</h4>
    <div class="code">
        document.getElementById(<span class="t-green">"demo"</span>).innerHTML = <span class="t-green">"Halo JavaScript"</span>;
    </div><br>
    <div class="note">
        <p>JavaScript menerima tanda kutip ganda dan tunggal</p>
    </div> <br>
    <h4>Contoh</h4>
    <div class="code">
        document.getElementById(<span class="t-green">'demo'</span>).innerHTML = <span class="t-green">'Halo JavaScript'</span>;
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Dapat Mengubah Value Atribut HTML
    </h3>
    <p>
        Dalam contoh dibawah ini JavaScript mengubah value dari atribut <span class="mark">src</span> (source / sumber) dari tag <span class="mark">&lt;img&gt;</span> :
    </p>
    <div class="bg-secondary text-light p-3">
        <button onclick="document.getElementById('myImage').src='{{ asset('img/belajar/js/bola-lampu-nyala.gif') }}'">Turn on the light</button>

        <img id="myImage" src="{{ asset('img/belajar/js/bola_lampu-mati.gif') }}" style="width:100px">

        <button onclick="document.getElementById('myImage').src='{{ asset('img/belajar/js/bola_lampu-mati.gif') }}'">Turn off the light</button>
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Dapat Mengubah Style HTML (CSS)
    </h3>
    <p>
        Mengubah style dari elemen HTML, adalah variasi dari mengubah atribut HTML :
    </p>
    <div class="code">
        <p>document.getElementById("demo").style.fontSize = "35px";</p>
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Dapat Menyembunyikan Elemen HTML
    </h3>
    <p>
        Menyembunyikan elemen HTML hanya bisa dirubah dengan mengganti style <span class="mark">display</span> :
    </p>
    <div class="code">
        <p>document.getElementById("demo").style.display = "none";</p>
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Dapat Manampilkan Elemen HTML
    </h3>
    <p>
        Menampilkan elemen HTML juga hanya bisa dirubah dengan mengganti style <span class="mark">display</span> :
    </p>
    <div class="code">
        <p>document.getElementById("demo").style.display = "block";</p>
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Dapat Mencari Elemen HTML dengan Class
    </h3>
    <p>
        JavaScript tidak hanya dapat menemukan elemen HTML melalui atribut <span class="mark">id</span> namun juga dapat melalui atribut <span class="mark">class</span> :
    </p>
    <h3>Contoh</h3>
    <div class="code">
        <p>document.getElementsByClassName("demo");</p>
    </div><br>
    <div class="note">
        <p><strong>Note :</strong> Namun perlu diketahui jika ingin mengubah style elemen HTML melalui <span class="mark">class</span> berbeda dengan <span class="mark">id</span></p>
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/') }}" class="btn btn-success">Home</a>
        <a href="{{ url('/belajar/js/where-to') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
