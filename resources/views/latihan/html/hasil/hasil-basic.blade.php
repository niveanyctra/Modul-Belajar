@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.html')
<section class="main">
    <div>
        <h6>Lengkapi potongan kode dibawah!</h6>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat posisi text ke tengah?</h6>
        @csrf
        <form action="{{route('cekBasic')}}" method="post">
        <div @if ($jawab1 != 'center')
            class="bg-danger px-3 py-2"
        @else
            class="bg-success px-3 py-2"
        @endif>
            <pre>

                &lt;p align="<input type="text" value="{{$jawab1}}" name="jawaban1" id="inputan">"&gt;Text&lt;p&gt;
            </pre>
            {{$cek1}}
        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat posisi text ke kanan?</h6>
        <div @if ($jawab2 != 'right')
            class="bg-danger px-3 py-2"
        @else
            class="bg-success px-3 py-2"
        @endif>
            <pre>

                &lt;p align="<input type="text" value="{{$jawab2}}" name="jawaban2" id="inputan">"&gt;Text&lt;p&gt;
            </pre>
            {{$cek2}}
        </div>
        <h6 class="fw-semibold">Apa atribut yang tepat untuk menampilkan gambar?</h6>
        <div @if ($jawab3 != 'src')
            class="bg-danger px-3 py-2"
        @else
            class="bg-success px-3 py-2"
        @endif>
            <pre>

                &lt;img <input type="text" value="{{$jawab3}}" name="jawaban3" id="inputan">="image.jpg"&gt;
            </pre>
            {{$cek3}}
        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk mengatur tinggi gambar dibawah?</h6>
        <div @if ($jawab4 != 'height')
            class="bg-danger px-3 py-2"
        @else
            class="bg-success px-3 py-2"
        @endif>
            <pre>

                &lt;img src="image.jpg" <input type="text" value="{{$jawab4}}" name="jawaban4" id="inputan">="100"&gt;
            </pre>
            {{$cek4}}
        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk mengatur lebar gambar dibawah?</h6>
        <div @if ($jawab5 != 'width')
            class="bg-danger px-3 py-2"
        @else
            class="bg-success px-3 py-2"
        @endif>
            <pre>

                &lt;img src="image.jpg" <input type="text" value="{{$jawab5}}" name="jawaban5" id="inputan">="100"&gt;
            </pre>
            {{$cek5}}
        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat warna text menjadi merah?</h6>
        <div @if ($jawab6 != 'color')
            class="bg-danger px-3 py-2"
        @else
            class="bg-success px-3 py-2"
        @endif>
            <pre>

                &lt;p style="<input type="text" value="{{$jawab6}}" name="jawaban6" id="inputan">:red;"&gt;Text&lt;p&gt;
            </pre>
            {{$cek6}}
        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk mengatur ukuran text menjadi 12pt?</h6>
        <div @if ($jawab7 != '12pt')
            class="bg-danger px-3 py-2"
        @else
            class="bg-success px-3 py-2"
        @endif>
            <pre>

                &lt;p style="font-size:<input type="text" value="{{$jawab7}}" name="jawaban7" id="inputan">;"&gt;Text&lt;p&gt;
            </pre>
            {{$cek7}}
        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk mengarahkan sebuah hyperlink?</h6>
        <div @if ($jawab8 != 'href')
            class="bg-danger px-3 py-2"
        @else
            class="bg-success px-3 py-2"
        @endif>
            <pre>

                &lt;a <input type="text" value="{{$jawab8}}" name="jawaban8" id="inputan">="smkn1cirebon.go.id"&gt;Text&lt;a&gt;
            </pre>
            {{$cek8}}
        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat heading paling kecil?</h6>
        <div @if ($jawab9 != 'h6')
            class="bg-danger px-3 py-2"
        @else
            class="bg-success px-3 py-2"
        @endif>
            <pre>

                &lt;<input type="text" value="{{$jawab9}}" name="jawaban9" id="inputan">&gt;Text&lt;/<input type="text" value="{{$jawab9}}" name="jawaban9" id="inputan">&gt;
            </pre>
            {{$cek9}}
        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat text berwarna biru?</h6>
        <div @if ($jawab10 != 'blue')
            class="bg-danger px-3 py-2"
        @else
            class="bg-success px-3 py-2"
        @endif>
            <pre>

                &lt;p style="color:<input type="text" value="{{$jawab10}}" name="jawaban10" id="inputan">:"&gt;Text&lt;p&gt;
            </pre>
            {{$cek10}}
        </div>

            <a href="{{url('/latihan/html/menengah')}}" class="btn btn-primary">Lanjut</a>

    </form>
    </div>
</section>
@endsection
