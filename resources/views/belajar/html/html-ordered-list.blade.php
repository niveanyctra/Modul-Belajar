@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Ordered List</h1>
    <a href="{{ url('/belajar/html/unordered-list') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/other-list') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
