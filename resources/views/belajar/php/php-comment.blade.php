@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Komentar</h1>
    <a href="{{ url('/belajar/php/syntax') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/variable') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
