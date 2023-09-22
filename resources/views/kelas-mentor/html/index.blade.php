@extends('layouts.main')
@section('content')
<div class="wrapper-sidebar" style="overflow-x:hidden">
    <div class="container-fluid px-5 py-4">
        <h6>#BelajarBersama</h6>
        <h1 class="fw-bolder display-5">Kelas HTML</h1>
        <p >Belajar hal yang paling mendasar untuk menambah wawasan dari para mentor.</p>
    </div>
    <div class="row">
        {{-- sidebar --}}
        @include('layouts.kelas-mentor.sidebar')
        {{-- main content --}}
        <div class="col-10">
        <div class="row" style="padding-left: 40px">

            <div class="d-flex justify-content-center flex-wrap img-mentor">
                @foreach ($posts as $data)
                <!-- <div class="col-sm-3  text-center {{ $data->level }}">
                    <a href="{{ url('/kelas-mentor/html/'.$data->slug)}}">{{$data->title}} </a><br>
                    <h6>{{$data->users->name}}</h6>
                </div> -->
                <!-- card mode -->
                <div class="card m-3 {{ $data->level }}" style="width: 18rem;">
                    <a href="{{ u rl('/kelas-mentor/html/'.$data->slug)}}">
                        <img src="https://i.ytimg.com/vi/{{ $data->id_yt }}/hq720.jpg?sqp=-oaymwEcCOgCEMoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCqB6b521V89qG2JHe5M_f8H_ak6w" class="card-img-top" alt="{{ $data->slug }}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ url('/kelas-mentor/html/'.$data->slug)}}">{{$data->title}}</a></h5>
                        <p class="card-text">{{ $data->users->name  }}</p>
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
