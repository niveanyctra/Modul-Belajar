@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Unordered List</h1>
    <a href="{{ url('/belajar/html/list') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/ordered-list') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
