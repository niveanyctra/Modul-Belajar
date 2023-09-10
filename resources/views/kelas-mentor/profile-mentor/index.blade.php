@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="card ps-4 py-2">
                <h6>{{$user->name}}</h6>
                <p>
                    &commat;{{ $user->username }} <br>
                    Mentor sejak {{$user->created_at->format('D F Y')}}
                </p>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="d-flex justify-content-center flex-wrap img-mentor">
                    @foreach ($posts as $data)
                    <!-- card mode -->
                    <div class="card col-4 m-3 {{ $data->level }}" style="width: 18rem;">
                        <a href="{{ url('/kelas-mentor/sql/'.$data->slug)}}">
                            <img src="https://i.ytimg.com/vi/{{ $data->id_yt }}/hq720.jpg?sqp=-oaymwEcCOgCEMoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCqB6b521V89qG2JHe5M_f8H_ak6w" class="card-img-top" alt="{{ $data->slug }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ url('/kelas-mentor/sql/'.$data->slug)}}">{{$data->title}}</a></h5>
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
