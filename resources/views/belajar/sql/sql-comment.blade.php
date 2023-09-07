@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Comment</h1>
    <a href="{{ url('/belajar/sql/exists') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/function') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
