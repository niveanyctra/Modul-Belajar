@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Table Size</h1>
    <a href="{{ url('/belajar/html/table-border') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/table-padding-spacing') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
