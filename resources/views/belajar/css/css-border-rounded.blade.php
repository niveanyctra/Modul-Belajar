@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Rounded Border</h1>
    <a href="{{ url('/belajar/css/border-shorthand') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

