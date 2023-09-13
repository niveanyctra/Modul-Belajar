@extends('layouts.main')
@section('content')
    <div class="container d-flex align-items-center vh-100">
        <div>
            <h6>#NeverGonnaGiveYourUp</h6>
            <h1 class="fw-bolder display-3">Halo, Selamat datang sobat pplg</h1>
            <span>Modul ini menyediakan pembelajaran untuk kelas X - XII</span>
        </div>
        <div>
            <img src="{{ url('img/uwong.png') }}" alt="" width="378px">
        </div>
    </div>
    <div class="d-flex align-items-center bg-danger justify-content-center vh-100">
        
    </div>
    @include('layouts.footer')
@endsection
