@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Operator</h1>
    <a href="{{ url('/belajar/php/constant') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/if-else') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection