@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Function</h1>
    <a href="{{ url('/belajar/php/switch') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/session') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
