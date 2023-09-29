@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="p-5 text-center">
        <h2 class="fw-bold">Kelas Online <br> Bersama Para <br> Guru, Mentor, Instruktur dan Alumni</h2>
    </div>
    <div class="d-flex gap-5 row">
        <div class="col-lg-1"></div>
        <div class="col-lg-2">
            <div class="">
                <div class="card border-0 ps-2 pe-5" style="box-shadow: 2px 2px 4px; width: max-content;">
                    <div class="card-body">
                        <h4 class="fw-bolder text-dark">{{$user->name}}</h4>
                        <p>
                            &commat;{{ $user->username }} <br>
                            Mentor sejak {{$user->created_at->format('d F Y')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="d-flex justify-content-center flex-wrap img-mentor">
                    @foreach ($posts as $data)
                    <!-- card mode -->
                    <div class="card rounded-4 col-6 mx-3 mb-5 {{ $data->level }}" style="width: 24rem;">
                        <a href="{{ url('/kelas-mentor/'.$data->category.'/'.$data->slug)}}">
                            <img src="https://i.ytimg.com/vi/{{ $data->id_yt }}/hq720.jpg?sqp=-oaymwEcCOgCEMoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCqB6b521V89qG2JHe5M_f8H_ak6w" class="card-img-top rounded-top-4" alt="{{ $data->slug }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ url('/kelas-mentor/'.$data->category.'/'.$data->slug)}}">{{$data->title}}</a></h5>
                            <p class="card-text">{{ $data->users->name }}</p>
                            @include('layouts.kelas-mentor.display-tool')
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
