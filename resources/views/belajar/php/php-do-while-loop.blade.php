@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Do While Loop</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/while-loop') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/for-loop') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Perulangan <span class="mark">do...while</span> akan mengulang blok kode sekali lalu akan mengulang selama kondisi bernilai true</p>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        &lt;?php <br>
$x = 1; <br>
 <br>
do { <br>
  echo "nomor: $x &lt;br&gt;"; <br>
  $x++; <br>
} while ($x <= 5); <br>
?> <br>
    </div>
    <p>Pada potongan kode diatas kita menampilkan variabel $x dan akan dilulang jika $x kurang dari atau sama dengan 5</p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/while-loop') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/for-loop') }}" class="btn btn-success">Selanjutnya</a>
    </div>

</section>
@endsection
