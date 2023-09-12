@extends('layouts.main')
@section('content')
<div class="text-center">
    <h1>{{$posts->title}}</h1>
    <p>Release date {{$posts->created_at->format('F Y')}}   Last updated {{$posts->updated_at->format('F Y')}}</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$posts->id_yt}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <br>
    <button type="button" onclick="document.getElementById('about').style.display='block',document.getElementById('tool').style.display='none'">About</button>
    <button type="button" onclick="document.getElementById('about').style.display='none',document.getElementById('tool').style.display='block'">Tool</button>
    <div id="about">
        <h4>Tingkatkan Skillmu</h4>
        {{$posts->about}} <br>
        {{ $posts->about2 }}
    </div>
    @include('layouts.kelas-mentor.tool')

    <h5>Belajar dari mentor</h5>
    <div>
        <a href="{{url('/mentor/'.$posts->users->username)}}" class="fw-light font-dark">
            <h6>{{$posts->users->name}}</h6>
        </a>
        <p>&commat;{{ $posts->users->username }}</p>
    </div>
</div>
@include('layouts.footer')
@endsection
