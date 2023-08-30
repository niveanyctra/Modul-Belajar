@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Form Atribut</h1>
    <a href="{{ url('/belajar/html/form') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/form-element') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
