@extends('layouts.main')
@section('content')
<div class="wrapper-sidebar">

    <div class="row">
        {{-- sidebar --}}
        <div class="col-4 bg-primary ps-4" style="min-height: 100vh; height: 100%">
            <h6 class="pt-2">Urutkan</h6>
            <div class="fw-semibold">
                @csrf
                <form action="{{url('/kelas-mentor/css?level=mudah')}}" method="get">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="level" id="mudah" value="mudah">
                        <label class="form-check-label" for="mudah">
                            Mudah
                        </label>
                    </div>
                    <form action="{{url('/kelas-mentor/css?level=mudah')}}" method="get">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="level" id="menengah" value="menengah">
                        <label class="form-check-label" for="menengah">
                            Menengah
                        </label>
                    </div>
                    <input type="submit" value="Urutkan" class="btn btn-sm btn-info">
                </form>

            </div>
        </div>
        {{-- main content --}}
        <div class="col-8">

            <div class="row">
                @foreach ($posts as $data)

                    <div class="col-sm-3  text-center">
                         <a href="{{ url('/kelas-mentor/css/'.$data->id)}}">{{$data->title}} </a><br>
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
