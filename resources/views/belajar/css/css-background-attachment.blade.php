@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Background Attachment</h1>
    <a href="{{ url('/belajar/css/background-repeat') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/background-shorthand') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

