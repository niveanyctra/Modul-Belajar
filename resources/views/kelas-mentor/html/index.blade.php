@extends('layouts.main')
@section('content')
<div class="wrapper-sidebar">
    <div class="container-fluid px-5 py-4">
        <h6>#BelajarBersama</h6>
        <h1 class="fw-bolder display-5">Kelas HTML</h1>
        <span class="text-wrap d-block" style="width: 487px;">Belajar hal yang paling mendasar untuk menambah wawasan dari para mentor.</span>
    </div>
    <div class="row px-5">
        {{-- sidebar --}}
        @include('layouts.kelas-mentor.sidebar')
        {{-- main content --}}
        <div class="col-10">

            <div class="d-flex justify-content-center flex-wrap img-mentor">
                @foreach ($posts as $data)
                <!-- <div class="col-sm-3  text-center {{ $data->level }}">
                    <a href="{{ url('/kelas-mentor/html/'.$data->slug)}}">{{$data->title}} </a><br>
                    <h6>{{$data->users->name}}</h6>
                </div> -->
                <!-- card mode -->
                <div class="card m-3 {{ $data->level }}" style="width: 18rem;">
                    <img src="https://dummyimage.com/600x400/000/fff" class="card-img-top" alt="Dummy image">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ url('/kelas-mentor/html/'.$data->slug)}}">{{$data->title}}</a></h5>
                        <p class="card-text">{{ $data->users->name }}</p>
                        @include('layouts.kelas-mentor.display-tool')
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>

</script>
@endsection
