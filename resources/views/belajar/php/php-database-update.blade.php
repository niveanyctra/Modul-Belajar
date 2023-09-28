@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Database Update Data</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/database-create') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/database-delete') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Kita dapat mengubah data dalam database MySQL melalui sintaks PHP dengan cara sebagai berikut :</p>
    <div class="code">
        &lt;?php <br>
        $conn = mysqli_connect('localhost','root','','siswa'); <br>
        $sql = "UPDATE siswa('nama','kelas','jk') SET('Messi','XII RPL 1','Laki-laki') WHERE nama = "Arip"; <br>
        $query = mysqli_query($conn, $sql); <br>
        if(!$query){
            <div class="ps-4">
                echo "Data gagal diubah";
            </div>
        }else{
            <div class="ps-4">
                echo "Data berhasil diubah";
            </div>
        } <br>
        ?>
    </div>
    <p>Pada potongan kode diatas kita akan mengubah data dalam database dan akan melakukan pengecekan dengan klausa <span class="mark">if</span> dengan kondisi berbeda</p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/database-create') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/database-delete') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
