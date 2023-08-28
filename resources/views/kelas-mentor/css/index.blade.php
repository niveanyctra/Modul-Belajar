@extends('layouts.main')
@section('content')

<div class="row">
    @foreach ($posts as $data)

        <div class="col-sm-3 text-center">
             <a href="{{ url('/kelas-mentor/css/'.$data->id)}}">{{$data->title}} </a><br>
            <h6>{{$data->author}}</h6>
        </div>
        @endforeach
    </div>

@endsection
