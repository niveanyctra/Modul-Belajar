@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Syntax</h1>
    <a href="{{ url('/belajar/php') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/comment') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Sintaks PHP dijalankan dalam server dan hasil HTML nya akan ditampilkan dalam browser</p>
    <hr>
    <h3 class="my-3">Sintaks PHP Dasar</h3>
    <p>Sintaks PHP dapat diletakkan dimanapun dalam dokumen</p>
    <p>Sintaks PHP diawali dengan <span class="mark">&lt;?php</span> dan diakhiri dengan <span class="mark">?></span></p>
    <p>Dalam sintaks PHP biasanya terdapat tag HTML dan beberapa skrip PHP</p>
    <hr>
    <h3 class="my-3">PHP Case Sensitive</h3>
    <p>
        Sintaks, class, dan fungsi PHP tidak peka terhadap huruf besar-kecil. Namun variabel dalam PHP peka terhadap huruf besar-kecil.
    </p>
    <hr>
    <h4 class="my-3">Contoh Sintaks PHP</h4>
    <div class="code">
        &lt;?php <br>
        echo "Hello World!";
        ?>
    </div>
    <strong>Note :</strong><span>Semua pernyataan PHP harus diakhiri dengan titik koma (;)!</span>
    <a href="{{ url('/belajar/php') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/comment') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
