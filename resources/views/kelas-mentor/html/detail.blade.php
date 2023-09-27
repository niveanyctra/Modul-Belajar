@extends('layouts.main')
@section('content')
<div class="container">
    <div class="text-center">
    <h1 class="fw-bolder my-4">{{$posts->title}}</h1>
        <div class="d-flex mb-4 justify-content-center gap-5">
            <p>Release date {{$posts->created_at->format('F Y')}}</p>
            <p>Last updated {{$posts->updated_at->format('F Y')}}</p>
        </div>
        <iframe style="max-width: calc(100% - 30px); width:660px;height: max-content; min-height:345px" src="https://www.youtube.com/embed/{{$posts->id_yt}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="my-3 d-flex justify-content-start gap-4">
        <button class="btn btn-secondary" type="button" onclick="document.getElementById('about').style.display='block',document.getElementById('tool').style.display='none'">About</button>
        <button class="btn btn-secondary" type="button" onclick="document.getElementById('about').style.display='none',document.getElementById('tool').style.display='block'">Tool</button>
    </div>
    <div id="about">
        <h2 class="fw-bolder">Tingkatkan Skillmu</h2>
        <article class="text-justify mt-3">
            {!! $posts->about !!}
        </article>
    </div>
    @include('layouts.kelas-mentor.tool')
    <div >
        <h2 class="my-3 fw-bolder">Belajar dari mentor</h2>
        <div class="card border-0 px-5" style="box-shadow: 2px 2px 4px; width: max-content;">
            <div class="card-body p-3">
                <a href="{{url('/mentor/'.$posts->users->username)}}" >
                    <h1 class="fw-bolder text-dark">{{$posts->users->name}}</h1>
                </a>
                <p>&commat;{{ $posts->users->username }}</p>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
