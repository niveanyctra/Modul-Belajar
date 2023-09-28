@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Database Koneksi</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/database') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/database-view') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Sebelum menggunakan database dalam PHP kita harus melakukan koneksi antara database dan PHP dengan sintaks dibawah ini :</p>
    <p>Versi Singkat :</p>
    <div class="code">
        &lt;?php <br>
        $koneksi = mysqli_connect('localhost','root','','namadatabase'); <br>
        if (!$koneksi){
            <div class="ps-4">
                echo "Koneksi gagal";
            </div>
        } <br>
        ?>

    </div>
    <p>Versi Panjang</p>
    <div class="code">
        &lt;?php <br>
        $namaserver = 'localhost'; <br>
        $username = 'root'; <br>
        $password = ''; <br>
        $namadatabase = 'namadatabase'; <br>
        <br>
        $koneksi = mysqli_connect($namaserver,$username,$password,$namadatabase); <br>
        ?>

    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/database') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/database-view') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
