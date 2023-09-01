@extends('layouts.main')
@section('content')
<h5>{{$posts->title}}</h5>
<p class="fw-light">by : {{$posts->users->name}}</p><br>
<p>Release date {{$posts->created_at}}</p>
<p>Last Update {{$posts->updated_at}}</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/{{$posts->id_yt}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<p>{{$posts->content}}</p>
@include('layouts.kelas-mentor.tool')
<a href="{{url('/kelas-mentor/js')}}">Lihat Lainnya</a>
@endsection
