@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Math</h1>
    <a href="{{ url('/belajar/php/number') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/operator') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
