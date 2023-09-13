@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.html')
<section class="main">
    <div>
        <h1 class="my-5">Latihan :</h1>
        <h6>Lengkapi potongan kode dibawah!</h6>
        @csrf
        <form action="{{route('cekHTMLLanjutan')}}" method="post">
            <div id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Gunakan atribut yang tepat untuk menampilkan huruf (huruf besar ABC) bukan angka</h6>
                <div class="code">
                    &lt;ol <input type="text" name="jawaban1">&gt;
                        <div class="ps-4">
                            &lt;li&gt; Rizki &lt;/li&gt; <br>
                            &lt;li&gt; Rizki &lt;/li&gt; <br>
                            &lt;li&gt; Rizki &lt;/li&gt;
                        </div>
                    &lt;ol&gt;
                </div>
                <div class="btn btn-success" onclick="soal2()">Lanjut</div>
            </div>
            <div style="display: none" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Gunakan CSS style untuk membuat lebar tabel menjadi 300 pixel</h6>
                <div class="code">
                    &lt;table <input type="text" name="jawaban2"> &gt;
                        <div class="ps-4">
                            &lt;tr&gt;
                                <div class="ps-4">
                                    &lt;td&gt; Rizki &lt;/td&gt; <br>
                                    &lt;td&gt; Rizki &lt;/td&gt; <br>
                                    &lt;td&gt; Rizki &lt;/td&gt;
                                </div>
                            &lt;/tr&gt;
                        </div>
                    &lt;/table&gt;
                </div>
                <div class="btn btn-success" onclick="soal1()">Kembali</div>
                <div class="btn btn-success" onclick="soal3()">Lanjut</div>
            </div>
            <div style="display: none" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Pada form di bawah ini, tambahkan bidang input dengan tipe "button" dan value "OK".</h6>
                <div class="code">
                    &lt;form&gt; <br>
                    &lt;<input type="text" name="jawaban3" id="">&gt; <br>
                    &lt;/form&gt;
                </div>
                <div class="btn btn-success" onclick="soal2()">Kembali</div>
                <div class="btn btn-success" onclick="soal4()">Lanjut</div>
            </div>
            <div style="display: none" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Tambahkan dua input radio button dengan nama "hobi".</h6>
                <div class="code">
                    &lt;form&gt; <br>
                    &lt;<input type="text" name="jawaban4" id=""> value="membaca"&gt; Membaca <br>
                    &lt;<input type="text" name="jawaban4" id=""> value="menulis"&gt; Menulis <br>
                    &lt;/form&gt;
                </div>
                <div class="btn btn-success" onclick="soal3()">Kembali</div>
                <div class="btn btn-success" onclick="soal5()">Lanjut</div>
            </div>
            <div style="display: none" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Disable form input dibawah ini</h6>
                <div class="code">
                    &lt;form&gt; <br>
                    &lt;input type="text" <input type="text" name="jawaban5" id="">&gt; <br>
                    &lt;/form&gt;
                </div>
                <div class="btn btn-success" onclick="soal4()">Kembali</div>
                <input type="submit" value="Kirim Jawaban">
            </div>
        </form>
    </div>
</section>
@endsection
