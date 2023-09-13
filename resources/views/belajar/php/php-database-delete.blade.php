@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Database Delete Data</h1>
    <a href="{{ url('/belajar/php/database-update') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
        <p>Kita dapat menghapus data dalam database MySQL melalui sintaks PHP dengan cara sebagai berikut :</p>
    <div class="code">
        &lt;?php <br>
        $conn = mysqli_connect('localhost','root','','siswa'); <br>
        $sql = "DELETE siswa WHERE nama = "Arip"; <br>
        $query = mysqli_query($conn, $sql); <br>
        if(!$query){
            <div class="ps-4">
                echo "Data gagal dihapus";
            </div>
        }else{
            <div class="ps-4">
                echo "Data berhasil dihapus";
            </div>
        } <br>
        ?>
    </div>
    <p>Pada potongan kode diatas kita akan menghapus data dalam database dan akan melakukan pengecekan dengan klausa <span class="mark">if</span> dengan kondisi berbeda</p>
    <a href="{{ url('/belajar/php/database-update') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
