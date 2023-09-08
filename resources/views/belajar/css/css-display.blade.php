@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Display</h1>
    <a href="{{ url('/belajar/css/grid') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/media-query') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>
        Pada pelajaran HTML sebelumnya kalian telah mengenal elemen inline dan block-level<br><br>
        Pada materi ini kita akan mengubah display elemen yang sebelumnya block menjadi inline dengan properti <mark>display</mark><br><br>
    </p>
    <hr>
    <h4 class="my-3">
        Contoh
    </h4>
    <div class="code">
            <span class="t-red">span</span> {
            <div class="ps-4">

                <span class="t-red">display</span>: <span class="t-green">block</span>;<br>

            </div>
        }
    </div>
    <p>Pada potongan kode diatas kita akan mengubah elemen span menjadi elemen block-level</p>
    <hr>
    <h3 class="my-3">
        Menghilangkan Elemen
    </h3>
    <p>Cobalah contoh berikut ini :</p>
    <div border="1" class="p-3 bg-info">
        <div class="bg-warning p-4 text-center" id="contoh1">
            Contoh <br>

            <button onclick="document.getElementById('contoh1').style.display='none',getElementById('contoh2').style.display='block'">Klik Untuk Menghilangkan</button>
        </div>
        <button style="display: none;" onclick="document.getElementById('contoh1').style.display='block',getElementById('contoh2').style.display='none'" id="contoh2">Reset</button>
    </div><br>
    <p>Pada contoh diatas kita menggunakan <span class="mark">display: none</span> untuk menghilangkan sebuah elemen</p>
    <a href="{{ url('/belajar/css/grid') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/media-query') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

