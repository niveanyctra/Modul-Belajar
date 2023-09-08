@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Object</h1>
    <a href="{{ url('/belajar/js/function') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/event') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>
        Object merupakan variabel yang memiliki beberapa property dan method yang berbeda-beda
        pada tiap object dan setiap property memiliki beberapa value yang berbeda beda.
    </p>
    <hr>
    <h4 class="my-3">
        Contoh
    </h4>
    <p>
        Kita akan membuat object siswa dengan property nama, kelas dan alamat.
    </p>
    <div class="code">
        <span class="t-blue">const</span> siswa = {<br>
            <div class="ps-3">
                nama: "Arip", <br>
                kelas: "XII RPL 1", <br>
                nama: "Cirebon", <br>
            </div>

        }
    </div>
    <hr>
    <h3 class="my-3">Mengakses properti object</h3>
    <p>Kita bisa mengakses properti object dengan dua cara yaitu :</p>
    <div class="code">
        namaObject.namaProperti
    </div>
    <p>Atau :</p>
    <div class="code">
        namaObject["namaProperti"]
    </div>
    <a href="{{ url('/belajar/js/function') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/event') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
