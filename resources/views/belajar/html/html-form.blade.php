@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Form</h1>
    <a href="{{ url('/belajar/html/other-list') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/form-atribut') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
