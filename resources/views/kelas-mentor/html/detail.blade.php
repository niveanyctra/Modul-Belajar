@extends('layouts.main')
@section('content')
<h5>{{$posts->title}}</h5>
<p class="fw-light">by : {{$posts->author}}</p><br>
<p>{{$posts->content}}</p>
<a href="{{route('indexHTML')}}">Lihat Lainnya</a>
@endsection
