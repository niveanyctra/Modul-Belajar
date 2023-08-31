@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Link atau Hyperlink</h1>
    <a href="{{ url('/belajar/html/css') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/image') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
