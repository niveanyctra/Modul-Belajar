@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Database Tambah Data</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/database-view') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/database-update') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>
        Kita dapat menambah database MySQL melalui sintaks PHP dengan cara berikut :
    </p>
    <div class="code">
        &lt;?php <br>
        $conn = mysqli_connect('localhost','root','','siswa'); <br>
        $sql = "INSERT INTO siswa('nama','kelas','jk') VALUES('Arip','XII RPL 1','Laki-laki')"; <br>
        $query = mysqli_query($conn, $sql); <br>
        if(!$query){
            <div class="ps-4">
                echo "Data gagal dibuat";
            </div>
        }else{
            <div class="ps-4">
                echo "Data berhasil dibuat";
            </div>
        } <br>
        ?>
    </div>
    <p>Pada potongan kode diatas kita akan memasukkan data dalam database dan akan melakukan pengecekan dengan klausa <span class="mark">if</span> dengan kondisi berbeda</p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/database-view') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/database-update') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
