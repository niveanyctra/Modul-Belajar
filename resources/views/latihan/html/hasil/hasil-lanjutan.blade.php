@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.html')
<section class="main">
    <div>
        <h1 class="my-2">Hasil</h1>
        <hr>
        @csrf

        <h2 class="my-3">Soal 1</h2>
        <h6 class="fw-semibold">Gunakan atribut yang tepat untuk menampilkan huruf (huruf besar ABC) bukan angka</h6>
        <div @if ($jawab1 == 'type="A"')
                class="benar"
            @else
                class="salah"
            @endif>
                <div class="code">
                    &lt;ol <input type="text" name="jawaban1" id="inputan" readonly value="{{ $jawab1 }}">&gt;
                        <div class="ps-4">
                            &lt;li&gt; Rizki &lt;/li&gt; <br>
                            &lt;li&gt; Rizki &lt;/li&gt; <br>
                            &lt;li&gt; Rizki &lt;/li&gt;
                        </div>
                    &lt;ol&gt;
                </div>
                {{$cek1}}
        </div>

        <h2 class="my-3">Soal 2</h2>
        <h6 class="fw-semibold">Gunakan CSS style untuk membuat lebar tabel menjadi 300 pixel</h6>
        <div @if ($jawab2 == 'width="300px"')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                &lt;table <input type="text" name="jawaban2" readonly value="{{ $jawab2 }}"> &gt;
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
            {{$cek2}}
        </div>

        <h2 class="my-3">Soal 3</h2>
        <h6 class="fw-semibold">Pada form di bawah ini, tambahkan bidang input dengan tipe "button" dan value "OK".</h6>
        <div @if ($jawab3 == 'input type="button" value="OK"')
            class="benar"
        @else
            class="salah"
        @endif>
        <div class="code">
            &lt;form&gt; <br>
            &lt;<input type="text" name="jawaban3" id="">&gt; <br>
            &lt;/form&gt;
        </div>
            {{$cek3}}
        </div>

        <h2 class="my-3">Soal 4</h2>
        <h6 class="fw-semibold">Tambahkan dua input radio button dengan nama "hobi".</h6>
        <div @if ($jawab4 == 'input type="radio" name="hobi"')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                &lt;form&gt; <br>
                &lt;<input type="text" name="jawaban4" readonly value="{{ $jawab4 }}" id=""> value="membaca"&gt; Membaca <br>
                &lt;<input type="text" name="jawaban4" readonly value="{{ $jawab4 }}" id=""> value="menulis"&gt; Menulis <br>
                &lt;/form&gt;
            </div>
            {{$cek4}}
        </div>

        <h2 class="my-3">Soal 5</h2>
        <h6 class="fw-semibold">Bagaimana cara untuk mengatur lebar gambar dibawah?</h6>
        <div @if ($jawab5 == 'disabled')
            class="benar"
        @else
            class="salah"
        @endif>
            <div class="code">
                &lt;form&gt; <br>
                &lt;input type="text" <input type="text" name="jawaban5" id="" readonly value="{{ $jawab5 }}">&gt; <br>
                &lt;/form&gt;
            </div>
            {{$cek5}}
        </div>

        <a href="{{url('/latihan/html/lanjutan')}}" class="btn btn-primary">Coba Lagi</a>
    </div>
</section>
@endsection
