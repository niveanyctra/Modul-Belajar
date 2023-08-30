@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Assignment</h1>
    <a href="{{ url('/belajar/js/arithmetic') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/data-type') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
