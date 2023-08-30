@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Object</h1>
    <a href="{{ url('/belajar/js/function') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/event') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
