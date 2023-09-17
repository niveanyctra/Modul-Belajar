@extends('layouts.main')
@section('content')
    <div class="container d-flex align-items-center vh-100">
        <div>
            {{-- Bagusan NeverGonnaGiveYouUp :/ --}}
            <h4 style="color: #008572;">#ProgrammerMuda</h4>
            <h1 class="fw-bolder display-3">Change your future with coding </h1>
            <p>
                Siapkan masa depan yang cerah <br>
                Modul ini menyediakan pembelajaran untuk kelas X - XII
            </p>
        </div>
        <div>
            <img class="gbr1" src="{{ url('img/uwong.png') }}" alt="" width="378px">
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-center vh-100" style="background-color: #FFD6A5;">
        <div class="d-flex justify-content-center">
            <div class="d-grid text-center align-items-center">
                <h1 class="fw-bold display-4">HTML</h1>
                <h6 class="fw-bold">Bahasa untuk memuat halaman web</h6>
                <div class="buttons">
                    <a href="" class="button-1">Tutorial</a>
                    <a href="" class="button-2">Latihan</a>
                    <a href="" class="button-3">Kelas Mentor</a>
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
