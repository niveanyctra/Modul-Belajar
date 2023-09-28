@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Form Required</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/form-handling') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/database') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Kita bisa membuat validasi data bahwa data harus diisi dalam PHP. Validasi ini berguna untuk mengeceh bahwa user telah mengirim form tanpa adanya data kosong</p>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        &lt;?php <br>
        $nama = $_POST['nama'];<br>
        $namaErr = ""; <br>
        if(empty($nama)){
            <div class="ps-4">
                $namaErr = "Nama tidak boleh kosong!";
            </div>
        }
    </div>
    <p>
        Pada potongan kode tersebut kita membuat validasi jika nama tidak diisi oleh user maka akan menampilkan error
    </p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/form-handling') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/database') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
