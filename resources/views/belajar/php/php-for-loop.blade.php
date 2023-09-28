@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP For Loop</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/do-while-loop') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/foreach-loop') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Perulangan <span class="mark">for</span> akan terus mengulang blok kode sampai batas yang ditentukan</p>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        &lt;?php <br>
for ($x = 0; $x <= 10; $x++) { <br>
  echo "nomor: $x &lt;br&gt;"; <br>
} <br>
?> <br>
    </div>
    <p>Pada potongan kode diatas kita mengulang variabel $x yang dimulai dari 0 yang berulang sampai nilainya kurang dari atau sama dengan 10</p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/do-while-loop') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/foreach-loop') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
