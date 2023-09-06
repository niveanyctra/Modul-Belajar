@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Group By</h1>
    <a href="{{ url('/belajar/sql/join') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/having') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
