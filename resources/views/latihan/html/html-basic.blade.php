@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.html')
<section class="main">
    <div>
        <h6>Lengkapi potongan kode dibawah!</h6>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat posisi text ke tengah?</h6>
        <form action="{{route('cekJawaban')}}" method="get">
        <div class="bg-warning px-3 py-2">
            <pre>

                &lt;p align="<input type="text" name="jawaban1" id="inputan">"&gt;Text&lt;p&gt;
            </pre>

        </div>
        <div class="bg-warning px-3 py-2">
            <pre>

                &lt;p align="<input type="text" name="jawaban2" id="inputan">"&gt;Text&lt;p&gt;
            </pre>

        </div>
        <div class="bg-warning px-3 py-2">
            <pre>

                &lt;p align="<input type="text" name="jawaban3" id="inputan">"&gt;Text&lt;p&gt;
            </pre>

        </div>
        <div class="bg-warning px-3 py-2">
            <pre>

                &lt;p align="<input type="text" name="jawaban4" id="inputan">"&gt;Text&lt;p&gt;
            </pre>

        </div>
        <div class="bg-warning px-3 py-2">
            <pre>

                &lt;p align="<input type="text" name="jawaban5" id="inputan">"&gt;Text&lt;p&gt;
            </pre>
            <input type="submit" value="Kirim Jawaban">
        </div>
    </form>
        @if (isset($cekjawab))
            <p>benar : {{$cekjawab}}</p>
            {{-- <p>salah</p> --}}
        @endif
    </div>
</section>
@endsection
