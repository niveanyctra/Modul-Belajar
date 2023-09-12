@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP While Loop</h1>
    <a href="{{ url('/belajar/php/loop') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/do-while-loop') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Perulangan <span class="mark">while</span> akan terus menjalankan blok kode ketika kondisi spesifik bernilai true</p>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        &lt;?php <br>
$x = 1; <br>
 <br>
while($x <= 5) { <br>
  echo "angka : $x &lt;br&gt;"; <br>
  $x++; <br>
} <br>
?>
    </div>
    <p>Pada potongan kode diatas kita melakukan perulangan pada variabel $x yang dimulai dari 1 dan akan terus berlanjut sampai $x bernilai lebih kecil atau sama dengan 5</p>
        <a href="{{ url('/belajar/php/loop') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/do-while-loop') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
