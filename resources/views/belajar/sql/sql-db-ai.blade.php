@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Auto Increment</h1>
    <a href="{{ url('/belajar/sql/db-default') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/db-view') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
