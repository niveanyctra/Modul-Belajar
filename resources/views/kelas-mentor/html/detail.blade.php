@extends('layouts.main')
@section('content')
<h5>{{$posts->title}}</h5>
<a href="{{url('/mentor/'.$posts->users->username)}}" class="fw-light font-dark">by : {{$posts->users->name}}</a><br>
<p>Release date {{$posts->created_at->format('F, Y')}}</p>
<p>Last Update {{$posts->created_at->format('F, Y')}}</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/{{$posts->id_yt}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<p>{{$posts->content}}</p>
@include('layouts.kelas-mentor.tool')
<a href="{{url('/kelas-mentor/html')}}">Lihat Lainnya</a>
@endsection
