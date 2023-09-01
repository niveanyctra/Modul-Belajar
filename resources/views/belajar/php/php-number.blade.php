@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Angka</h1>
    <a href="{{ url('/belajar/php/string') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/math') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
