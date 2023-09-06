@extends('layouts.main')
@section('content')
<div class="wrapper-sidebar">

    <div class="row">
        {{-- sidebar --}}
        @include('layouts.kelas-mentor.sidebar')
        {{-- main content --}}
        <div class="col-10">

            <div class="row">
                @foreach ($posts as $data)

                    <div class="col-sm-3  text-center {{ $data->level }}">
                         <a href="{{ url('/kelas-mentor/css/'.$data->slug)}}">{{$data->title}} </a><br>
                        <h6>{{$data->users->name}}</h6>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>

</script>
@endsection
