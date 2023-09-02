@extends('layouts.main')
@section('content')
<div class="wrapper-sidebar">

    <div class="row">
        {{-- sidebar --}}
        <div class="col-4 bg-primary ps-4" style="min-height: 100vh; height: 100%">
            <h6 class="pt-2">Urutkan</h6>
            <div class="fw-semibold">
                <a href="{{url('/kelas-mentor/php?level=mudah')}}" class="btn btn-danger">Mudah</a>
                <a href="{{url('/kelas-mentor/php?level=menengah')}}" class="btn btn-danger">Menengah</a>
                <a href="{{url('/kelas-mentor/php')}}" class="btn btn-danger">Semua</a>

            </div>
        </div>
        {{-- main content --}}
        <div class="col-8">

            <div class="row">
                @foreach ($posts as $data)

                    <div class="col-sm-3  text-center">
                         <a href="{{ url('/kelas-mentor/php/'.$data->slug)}}">{{$data->title}} </a><br>
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
