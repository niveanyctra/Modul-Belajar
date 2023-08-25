@extends('layouts.main')
@section('sidebar')
<div class="row">
    <div class="col-2">
        <nav></nav>
    </div>
    <div class="col-10">
        @yield('kelasJS')
    </div>
</div>
@endsection