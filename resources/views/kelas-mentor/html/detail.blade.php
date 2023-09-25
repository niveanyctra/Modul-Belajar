@extends('layouts.main')
@section('content')
<div class="container">
    <h1>{{$posts->title}}</h1>
    <p>Release date {{$posts->created_at->format('F Y')}}   Last updated {{$posts->updated_at->format('F Y')}}</p>
    <div class="text-center">
        <iframe style="max-width: calc(100% - 30px); width:660px;height: max-content; min-height:345px" src="https://www.youtube.com/embed/{{$posts->id_yt}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="my-3">
        <button class="btn btn-secondary" type="button" onclick="document.getElementById('about').style.display='block',document.getElementById('tool').style.display='none'">About</button>
        <button class="btn btn-secondary" type="button" onclick="document.getElementById('about').style.display='none',document.getElementById('tool').style.display='block'">Tool</button>
    </div>
    <div id="about">
        <h4>Tingkatkan Skillmu</h4>
        <article class="text-justify mt-3">
            {!! $posts->about !!}
        </article>
    </div>
    @include('layouts.kelas-mentor.tool')
    <div >
        <h5 class="my-3">Belajar dari mentor</h5>
        <div class="card border-0" style="width: max-content; background: linear-gradient(rgb(255, 255, 255), rgb(255, 255, 255), rgb(255, 255, 255), rgb(241, 159, 35));;">
            <div class="card-body p-3">
                <a href="{{url('/mentor/'.$posts->users->username)}}" class="fw-light font-dark">
                    <h3>{{$posts->users->name}}</h3>
                </a>
                <p>&commat;{{ $posts->users->username }}</p>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
