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
        <div class="bg-warning px-3 py-2">
            <pre>

                &lt;p align="<input type="text" name="jawaban1" id="inputan">"&gt;Text&lt;p&gt;
            </pre>

        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat posisi text ke kanan?</h6>
        <div class="bg-warning px-3 py-2">
            <pre>

                &lt;p align="<input type="text" name="jawaban2" id="inputan">"&gt;Text&lt;p&gt;
            </pre>

        </div>
        <h6 class="fw-semibold">Apa atribut yang tepat untuk menampilkan gambar?</h6>
        <div class="bg-warning px-3 py-2">
            <pre>

                &lt;img <input type="text" name="jawaban3" id="inputan">="image.jpg"&gt;
            </pre>

        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk mengatur tinggi gambar dibawah?</h6>
        <div class="bg-warning px-3 py-2">
            <pre>

                &lt;img src="image.jpg" <input type="text" name="jawaban4" id="inputan">="100"&gt;
            </pre>

        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk mengatur lebar gambar dibawah?</h6>
        <div class="bg-warning px-3 py-2">
            <pre>

                &lt;img src="image.jpg" <input type="text" name="jawaban5" id="inputan">="100"&gt;
            </pre>

        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat warna text menjadi merah?</h6>
        <div class="bg-warning px-3 py-2">
            <pre>

                &lt;p style="<input type="text" name="jawaban6" id="inputan">:red;"&gt;Text&lt;p&gt;
            </pre>

        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk mengatur ukuran text menjadi 12pt?</h6>
        <div class="bg-warning px-3 py-2">
            <pre>

                &lt;p style="font-size:<input type="text" name="jawaban7" id="inputan">;"&gt;Text&lt;p&gt;
            </pre>

        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk mengarahkan sebuah hyperlink?</h6>
        <div class="bg-warning px-3 py-2">
            <pre>

                &lt;a <input type="text" name="jawaban8" id="inputan">="smkn1cirebon.go.id"&gt;Text&lt;a&gt;
            </pre>

        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat heading paling kecil?</h6>
        <div class="bg-warning px-3 py-2">
            <pre>

                &lt;<input type="text" name="jawaban9" id="inputan">&gt;Text&lt;/<input type="text" name="jawaban9" id="inputan">&gt;
            </pre>

        </div>
        <h6 class="fw-semibold">Bagaimana cara untuk membuat text berwarna biru?</h6>
        <div class="bg-warning px-3 py-2">
            <pre>

                &lt;p style="color:<input type="text" name="jawaban10" id="inputan">:"&gt;Text&lt;p&gt;
            </pre>
            
        </div>

            <input type="submit" value="Kirim Jawaban">

    </form>
    </div>
</section>
@endsection
