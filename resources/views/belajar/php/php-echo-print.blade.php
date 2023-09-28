@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Statement echo dan print</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/variable') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/data-type') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Dalam PHP kita bisa menampilkan teks menggunakan pernyataan <span class="mark">echo</span> dan <span class="mark">print</span></p>
    <p>Perbedaan <span class="mark">echo</span> dan <span class="mark">print</span> adalah <span class="mark">print</span> hanya memiliki satu argumen sedangkan <span class="mark">echo</span> dapat memiliki beberapa parameter.</p>
    <p>Kedua pernyataan ini dapat mengandung tag HTML</p>
    <h4 class="my-3">Contoh</h4>
    <div class="code">
        &lt;?php <br>
        $nama = "Arip"; <br>
        echo "Hello World!&lt;br>"; <br>
        echo "Namaku ".$nama."; <br>
        ?>

    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/variable') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/data-type') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
