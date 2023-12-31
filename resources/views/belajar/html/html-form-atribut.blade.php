@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Form Atribut</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/form') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/input-type') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <h3 class="my-3">
        Atribut Action
    </h3>
    <p>Atribut <span class="mark">action</span> mendefinisikan aksi yang akan dilakukan ketika user mengirimkan form <br><br>
    Form akan terkirim ketika user mengklik tombol submit
    </p>
    <div class="code">
        &lt;form action="aksi_form.php"&gt;
        <div class="ps-4">
            &lt;input <span class="t-red">type</span>=<span class="t-green">"text"</span>&gt;
        </div>
        &lt;/form&gt;
    </div><br>
    <p>Pada potongan kode diatas user akan mengirim form ke server dengan aksi di server pada file "aksi_form.php"</p>
    <hr>
    <h3 class="my-3">Atribut Target</h3>
    <p>
        Atribut <span class="mark">target</span> akan menampilkan dimana respon setelah user mengirim form <br>
        Atribut <span class="mark">target</span> memiliki value :
    </p>
    <table class="table table-striped">
        <tr>
            <th>Value</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>_blank</td>
            <td>Respon akan ditampilkan di halaman baru</td>
        </tr>
        <tr>
            <td>_self</td>
            <td>Respon akan ditampilkan di halaman sekarang</td>
        </tr>
        <tr>
            <td>_parent</td>
            <td>Respon akan ditampilkan di frame parent</td>
        </tr>
        <tr>
            <td>_top</td>
            <td>Respon akan ditampilkan di seluruh halaman</td>
        </tr>
        <tr>
            <td><i>framename</i></td>
            <td>Respon akan ditampilkan di frame lain di iframe</td>
        </tr>
    </table>
    <hr>
    <h3 class="my-3">Atribut Method</h3>
    <p>Atribut <span class="mark">method</span> akan mendefinisikan HTTP Method yang digunakan ketika mengirimkan data dari form <br><br>
    Atribut <span class="mark">method</span> memiliki dua value yaitu GET dan POST <br><br>
    Default HTTP Method ketika mengirim form adalah GET</p>
    <h4 class="my-3">Hal yang harus diperhatikan saat menggunakan method</h4>
    <h5>Method GET</h5>
    <ul>
        <li>Value dari form yang dikirimkan akan tampil di URL</li>
        <li>JANGAN PERNAH mengirimkan data penting menggunakan method GET</li>
        <li>Panjang URL dibatasi hanya 2048 karakter</li>
        <li>Pengiriman form dapat masuk dalam bookmark oleh user</li>
        <li>Method GET sangat berguna untuk pencarian data menggunakan query string</li>
    </ul>
    <h5>Method POST</h5>
    <ul>
        <li>Value dari form yang dikirimkan ke dalam HTTP Request(tidak tampil di URL)</li>
        <li>Panjang data yang dikirimkan tidak memiliki limitasi</li>
        <li>Pengiriman form tidak dapat masuk dalam bookmark oleh user</li>
    </ul>
    <div class="note">
        <strong>Note :</strong> Selalu gunakan POST untuk mengirimkan data pribadi
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/form') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/input-type') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
