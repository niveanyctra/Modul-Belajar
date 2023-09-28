@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Session</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/function') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/loop') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>
        Saat Anda bekerja dengan suatu aplikasi, Anda membukanya, melakukan beberapa perubahan, lalu menutupnya. Komputer mengetahui siapa Anda. Ia tahu kapan Anda memulai aplikasi dan kapan Anda mengakhirinya. Namun di internet ada satu masalah: server web tidak mengetahui siapa Anda atau apa yang Anda lakukan, karena alamat HTTP tidak mempertahankan status.
    </p>

    <p>
        Variabel session memecahkan masalah ini dengan menyimpan informasi pengguna untuk digunakan di beberapa halaman (misalnya nama pengguna, warna favorit, dll). Secara default, variabel session bertahan hingga pengguna menutup browser.
    </p>
    <hr>
    <h3 class="my-3">Memulai Session</h3>
    <p>Untuk memulai session kita bisa menggunakan fungsi <span class="mark">session_start()</span> dan variabel session diatur dalam variabel global yaitu $_SESSION</p>
    <hr>
    <h3 class="my-3">Menghapus Session</h3>
    <p>Untuk menghapus session kita dapat menggunakan fungsi <span class="mark">session_destroy()</span></p>
    <hr>
    <h4 class="my-3">
        Contoh
    </h4>
    <div class="code">
        &lt;?php
        <span class="t-green">// Memulai session</span> <br>
    session_start(); <br>
    ?&gt; <br>
    &lt;!DOCTYPE html&gt; <br>
    &lt;html&gt; <br>
    &lt;body&gt; <br>

    &lt;?php <br>
    <span class="t-green">// Mengatur variabel session</span> <br>
    $_SESSION["warnafav"] = "merah"; <br>
    $_SESSION["hewanfav"] = "kucing"; <br>
    ?&gt; <br>

    &lt;/body&gt; <br>
    &lt;/html&gt; <br>
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/function') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/loop') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
