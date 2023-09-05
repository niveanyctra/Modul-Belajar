@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Table Padding & Spacing</h1>
    <a href="{{ url('/belajar/html/table-size') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/table-colspan-rowspan') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
