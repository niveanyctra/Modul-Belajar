@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.html')
<section class="main">
    <div>
        <h6>Lengkapi potongan kode dibawah!</h6>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat posisi text ke tengah?</h6>
        <div class="bg-warning px-3 py-2">
            <form action="{{route('cekJawaban')}}" method="get">
            <pre>

                &lt;p align="<input type="text" name="inputan" value="{{request('inputan')}}" id="inputan">"&gt;Text&lt;p&gt;
            </pre>
            <input type="submit" value="Kirim Jawaban">
            </form>
        </div>
        @if (isset($cek))

        @if ($cek == "align")
            <p>benar</p>
        @else
            <p>salah</p>
        @endif
        @endif
    </div>
</section>
@endsection
