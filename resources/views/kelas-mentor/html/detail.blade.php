@extends('layouts.main')
@section('content')
<h5>{{$posts->title}}</h5>
<p class="fw-light">by : {{$posts->author}}</p><br>
<p>{{$posts->content}}</p>

<iframe width="560" height="315" src="https://www.youtube.com/embed/{{$posts->id_yt}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<a href="{{route('indexHTML')}}">Lihat Lainnya</a>
@endsection
