@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP For Loop</h1>
    <a href="{{ url('/belajar/php/do-while-loop') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/foreach-loop') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
