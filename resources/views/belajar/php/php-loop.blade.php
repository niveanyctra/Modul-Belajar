@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Loop</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/function') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/while-loop') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>
        Kita bisa melakukan loop atau perulangan dalam PHP. Berikut adalah cara melakukan perulangan dalam PHP :
    </p>
    <ul>
        <li><span class="mark">while</span></li>
        <li><span class="mark">do while</span></li>
        <li><span class="mark">for</span></li>
        <li><span class="mark">foreach</span></li>
        <li><span class="mark">break</span></li>
    </ul>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/function') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/while-loop') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
