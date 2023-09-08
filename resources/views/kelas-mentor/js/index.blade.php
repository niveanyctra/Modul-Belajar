@extends('layouts.main')
@section('content')
<div class="wrapper-sidebar">
    <div class="container-fluid px-5 py-4">
        <h6>#BelajarBersama</h6>
        <h1 class="fw-bolder display-5">Kelas JavaScript</h1>
        <span class="text-wrap d-block" style="width: 487px;">Belajar hal yang paling mendasar untuk menambah wawasan dari para mentor.</span>
    </div>
    <div class="row px-5">
        {{-- sidebar --}}
        @include('layouts.kelas-mentor.sidebar')
        {{-- main content --}}
        <div class="col-10">

            <div class="row">
                @foreach ($posts as $data)

                <div class="col-sm-3  text-center {{ $data->level }}">
                    <a href="{{ url('/kelas-mentor/js/'.$data->slug)}}">{{$data->title}} </a><br>
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