@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Count, Sum dan Average</h1>
    <a href="{{ url('/belajar/sql/min-max') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/alias') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
