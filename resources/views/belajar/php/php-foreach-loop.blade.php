@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Foreach Loop</h1>
    <a href="{{ url('/belajar/php/for-loop') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/break-continue') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Perulangan <span class="mark">foreach</span> akan mengulang blok kode untuk tiap elemen dalam array</p>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        &lt;?php <br>
$warna = array("merah", "hijau", "biru", "kuning"); <br>
 <br>
foreach ($warna as $value) { <br>
  echo "$value &lt;br>"; <br>
} <br>
?>
    </div>
    <p>Pada potongan kode diatas kita mengulang variabel $warna sebagai $value dan akan diulang sampai semua value dari array habis</p>
        <a href="{{ url('/belajar/php/for-loop') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/form-handling') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
