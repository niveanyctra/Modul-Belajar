@extends('layouts.main')
@section('content')
{{ $user->name }}
<div class="row">
    @foreach ($posts as $data)

        <div class="col-sm-3  text-center">
            <a href="{{ url("/kelas-mentor/$data->category/$data->id")}}">{{$data->title}} </a><br>
            {{-- <h5>{{$data->users->name}}</h5> --}}
        </div>
    @endforeach
</div>
@endsection
