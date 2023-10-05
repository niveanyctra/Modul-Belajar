@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.js')
<section class="main">
    <div>
        <h1 class="my-5">Latihan :</h1>
        <h6>Lengkapi potongan kode dibawah!</h6>
        @csrf
        <form action="{{route('cekJSMenengah')}}" method="post">
            <div id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Buatlah fungsi bernama sekolah</h6>
                <div class="code">
                    function <input type="text" name="jawaban1">{<br>
                        <br>
                    }
                </div>
                <div class="btn btn-primary" onclick="soal2()">Lanjut</div>
            </div>
            <div style="display: none" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Buat fungsi sekolah untuk menampilkan alert dengan teks SMKN 1 Cirebon</h6>
                <div class="code">
                    function sekolah(){<br>
                    alert ("<input type="text" name="jawaban2">"); <br>
                    }
                </div>
                <div class="btn btn-danger" onclick="soal1()">Kembali</div>
                <div class="btn btn-primary" onclick="soal3()">Lanjut</div>
            </div>
            <div style="display: none" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Buatlah tombol yang ketika diklik akan menampilkan alert</h6>
                <div class="code">
                    &lt;button <input type="text" name="jawaban3">="alert('halo')"&gt;Klik Aku&lt;/button&gt;
                </div>
                <div class="btn btn-danger" onclick="soal2()">Kembali</div>
                <div class="btn btn-primary" onclick="soal4()">Lanjut</div>
            </div>
            <div style="display: none" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Buatlah tombol yang ketika diklik akan menjalankan fungsi sekolah</h6>
                <div class="code">
                    &lt;button onclick="<input type="text" name="jawaban4">"&gt;Klik Aku&lt;/button&gt;
                </div>
                <div class="btn btn-danger" onclick="soal3()">Kembali</div>
                <div class="btn btn-primary" onclick="soal5()">Lanjut</div>
            </div>
            <div style="display: none" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Buatlah elemen yang ketika diklik akan menjadi merah</h6>
                <div class="code">
                    &lt;div <input type="text" name="jawaban5">="this.style.backgroundColor='red'"&gt;&lt;/div&gt;
                </div>
                <div class="btn btn-danger" onclick="soal4()">Kembali</div>
                <input type="submit" class="btn btn-danger bg-success" value="Kirim Jawaban">
            </div>
            </div>
        </form>
    </div>
</section>
@endsection
