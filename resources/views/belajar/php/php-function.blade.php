@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Function</h1>
    <a href="{{ url('/belajar/php/switch') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/session') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>
        PHP memiliki lebih dari 1000 built-in function yang bisa dipanggil untuk menyelesaikan suatu masalah. <br><br>
        Adapun kita bisa membuat fungsi sendiri dalam PHP
    </p>
    <hr>
    <h3 class="my-3">Fungsi Buatan Dalam PHP</h3>
    <p>
        Berikut ini hal yang harus diperhatikan dalam membuat fungsi.
    </p>
    <ul>
        <li>Fungsi adalah pernyataan blok yang bisa digunakan terus menerus dalam suatu program</li>
        <li>Fungsi tidak akan langsung berjalan ketika halaman dimuat</li>
        <li>Fungsi akan dijalankan ketika dilakukan pemanggilan</li>
    </ul>
    <h4 class="my-4">
        Contoh
    </h4>
    <div class="code">
        &lt;?php <br>
        function hello(){
            <div class="ps-4">
                echo "Hello World!";
            </div>
        } <br>
        hello(); <span class="t-green">// Memanggil fungsi</span><br>
        ?>
    </div>
        <a href="{{ url('/belajar/php/switch') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/session') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
