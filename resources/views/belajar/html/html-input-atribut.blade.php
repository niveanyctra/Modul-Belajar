@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Form Input Atribut</h1>
    <a href="{{ url('/belajar/html/input-type') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">Daftar Atribut pada tag <span class="mark">&lt;input&gt;</span></h3>
    <table class="table table-striped">
        <tr>
            <th>Atribut</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>Value</td>
            <td>Untuk menentukan value dari sebuah input</td>
        </tr>
        <tr>
            <td>readonly</td>
            <td>Untuk membuat sebuah input tidak bisa diedit</td>
        </tr>
        <tr>
            <td>disabled</td>
            <td>Untuk membuat sebuah input tidak bisa diedit dan saat mengirimkan form, input tersebut tidak ikut terkirim</td>
        </tr>
        <tr>
            <td>size</td>
            <td>Untuk menentukan panjang karakter dari sebuah input</td>
        </tr>
        <tr>
            <td>maxlength</td>
            <td>Untuk menentukan batas maksimal karakter dari sebuah input</td>
        </tr>
        <tr>
            <td>max&min</td>
            <td>Untuk menentukan batas maksimal dan minimal karakter dari sebuah input</td>
        </tr>
        <tr>
            <td>multiple</td>
            <td>Untuk membuat input dapat menampung lebih dari satu value(hanya bisa digunakan untuk tipe email dan file)</td>
        </tr>
        <tr>
            <td>placeholder</td>
            <td>Untuk memberikan panduan singkat pada input</td>
        </tr>
        <tr>
            <td>required</td>
            <td>Untuk mendefinisikan bahwa input harus diisi</td>
        </tr>
        <tr>
            <td>autocomplete</td>
            <td>Untuk memberikan akses pada user dengan mengisi form otomatis berdasarkan input sebelumnya</td>
        </tr>
    </table>
    <hr>
    <h3 class="my-3">
        Contoh
    </h3>
    <div class="code">
        &lt;form action="aksi_form.php" method="post"&gt;
        <div class="ps-4">

            &lt;label for="nama"&gt;Nama&lt;/label&gt;<br>
            &lt;input type="text" name="nama" id="nama" required placeholder="Masukkan nama"&gt;<br>
            &lt;label for="kelas"&gt;Kelas&lt;/label&gt;<br>
            &lt;input type="text" name="kelas" id="kelas" required placeholder="Masukkan kelas"&gt;<br>
        </div>
    &lt;/form&gt;
    </div><br>
    <p>Potongan kode diatas akan menghasilkan form dibawah ini :</p>
    <form action="aksi_form.php" method="post">
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" required placeholder="Masukkan nama"><br>
        <label for="kelas">Kelas</label><br>
        <input type="text" name="kelas" id="kelas" required placeholder="Masukkan kelas"><br>
    </form><br>
    <p>Dalam form tersebut terdapat atribut <span class="mark">required</span> yang mengharuskan user untuk mengisi field input dan juga atribut <span class="mark">placeholder</span> yang memberikan text bantuan dalam field input</p>
        <a href="{{ url('/belajar/html/input-type') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
