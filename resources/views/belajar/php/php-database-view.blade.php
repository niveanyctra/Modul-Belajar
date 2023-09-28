@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Database Menampilkan Data</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/database-connect') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/database-create') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Kita bisa menampilkan data dalam database ke halaman web dengan PHP dan MySQL dengan cara berikut ini :</p>
    <div class="code">
        &lt;?php <br>
        $conn = mysqli_connect('localhost','root','','siswa'); <br>
        $query = mysqli_query($conn, "SELECT * FROM SISWA"); <br>
        foreach($query as $data){
            <div class="ps-4">echo $data['nama']</div>
        } <br>
        ?>
    </div>
    <p>Pada potongan kode diatas kita melakukan koneksi dan melakukan sintaks SQL yaitu <span class="mark">SELECT</span> yang akan menampilkan data dengan perulangan <span class="mark">foreach</span> yang terus berulang sampai data pada tabel siswa habis</p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/database-connect') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/database-create') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
