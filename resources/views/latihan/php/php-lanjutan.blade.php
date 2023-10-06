@extends('layouts.main')
@section('content')
@include('layouts.latihan.subnav')
@include('layouts.latihan.sidebar.php')
<section class="main">
    <div>
        <h1 class="my-5">Latihan :</h1>
        <h6>Lengkapi potongan kode dibawah!</h6>
        @csrf
        <form action="{{route('cekPHPLanjutan')}}" method="post">
            <div class="soal" id="soal1">
                <h2 class="my-3">Soal 1</h2>
                <h6 class="fw-semibold">Loop item dalam array $warna</h6>
                <div class="code">
                    $warna = array("merah", "hijau", "biru", "kuning");  <br> <br>
                    <input type="text" name="jawaban1"> ($warna as $x) {
                        <div class="ps-4">
                            echo $x;
                        </div>
                    }
                </div>
                <div class="btn btn-primary" onclick="soal(2)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal2">
                <h2 class="my-3">Soal 2</h2>
                <h6 class="fw-semibold">Jika formulir di bagian putih di bawah ini terkirim, bagaimana Anda dapat menampilkan value dari field "nama" di welcome.php?</h6>
                <div class="code">
                    <div class="m-2 p-2 bg-white text-dark">
                        &lt;form action="welcome.php" method="get"&gt; <br>
                            Nama: &lt;input type="text" name="nama"&gt;<br>
                        &lt;/form&gt;
                    </div>
                    &lt;html&gt; <br>
                    &lt;body&gt; <br> <br>

                    Selamat Datang &lt;?php echo <input type="text" name="jawaban2">; ?&gt; <br><br>

                    &lt;/body&gt; <br>
                    &lt;/html&gt;
                </div>
                <div class="btn btn-danger" onclick="soal(1)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(3)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal3">
                <h2 class="my-3">Soal 3</h2>
                <h6 class="fw-semibold">Gunakan operator perbandingan yang tepat untuk mengecek apakah $a TIDAK sama dengan $b.</h6>
                <div class="code">
                    var_dump($a <input type="text" name="jawaban3"> $b);
                </div>
                <div class="btn btn-danger" onclick="soal(2)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(4)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal4">
                <h2 class="my-3">Soal 4</h2>
                <h6 class="fw-semibold">Tambahkan bagian yang akan menampilkan "Terima Kasih" jika $warna bukan "merah" atau "hijau".</h6>
                <div class="code">
                    switch ($color) {
                        <div class="ps-4">
                            case "red":
                                <div class="ps-4">
                                    echo "Halo"; <br>
                                    break;
                                </div>
                            case "green":
                                <div class="ps-4">
                                    echo "selamat datang"; <br>
                                    break;
                                </div>
                            <input type="text" name="jawaban4">
                                <div class="ps-4">
                                    echo "Terima kasih";
                                </div>
                        </div>
                    }
                </div>
                <div class="btn btn-danger" onclick="soal(3)">Kembali</div>
                <div class="btn btn-primary" onclick="soal(5)">Lanjut</div>
            </div>
            <div style="display: none" class="soal" id="soal5">
                <h2 class="my-3">Soal 5</h2>
                <h6 class="fw-semibold">Jika formulir di bagian putih di bawah ini terkirim, bagaimana Anda dapat menampilkan value dari field "nama_kota" di welcome.php?</h6>
                <div class="code">
                    <div class="m-2 p-2 bg-white text-dark">
                        &lt;form action="welcome.php" method="post"&gt; <br>
                            Nama Kota: &lt;input type="text" name="nama_kota"&gt;<br>
                        &lt;/form&gt;
                    </div>
                    &lt;html&gt; <br>
                    &lt;body&gt; <br> <br>

                    Selamat Datang di &lt;?php echo <input type="text" name="jawaban5">; ?&gt; <br><br>

                    &lt;/body&gt; <br>
                    &lt;/html&gt;
                </div>
                <div class="btn btn-danger" onclick="soal(4)">Kembali</div>
                <input type="submit" class="btn btn-danger bg-success" value="Kirim Jawaban">
            </div>
        </form>
    </div>
</section>
@endsection
