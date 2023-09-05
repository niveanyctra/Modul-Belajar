@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Form</h1>
    <a href="{{ url('/belajar/html/other-list') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/form-atribut') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Form dalam HTML biasa digunakan untuk menampung input dari user yang biasanya dikirim ke server untuk diproses</p>
    <hr>
    <h6 class="my-3">
        Contoh Form
    </h6>
    <label for="">Nama</label><br>
    <input type="text"><br>
    <label for="">Kelas</label><br>
    <input type="text"><br>
    <input type="submit" class="mt-1" value="Kirim">
    <hr>
    <h3 class="my-3">Elemen &lt;form&gt;</h3>
    <p>Elemen <span class="bg-body-secondary text-danger">&lt;form&gt;</span> digunakan untuk membuat form dalam HTML untuk menampung input user <br><br>
        <span class="bg-body-secondary text-danger">&lt;form&gt;</span> digunakan sebagai penampung elemen input, berikut daftar elemen input:
    </p>
<ul>
    <li><span class="bg-body-secondary text-danger">&lt;input&gt;</span></li>
    <li><span class="bg-body-secondary text-danger">&lt;label&gt;</span></li>
    <li><span class="bg-body-secondary text-danger">&lt;select&gt;</span></li>
    <li><span class="bg-body-secondary text-danger">&lt;option&gt;</span></li>
    <li><span class="bg-body-secondary text-danger">&lt;textarea&gt;</span></li>
    <li><span class="bg-body-secondary text-danger">&lt;button&gt;</span></li>
    <li><span class="bg-body-secondary text-danger">&lt;fieldset&gt;</span></li>
    <li><span class="bg-body-secondary text-danger">&lt;legend&gt;</span></li>
    <li><span class="bg-body-secondary text-danger">&lt;datalist&gt;</span></li>
    <li><span class="bg-body-secondary text-danger">&lt;output&gt;</span></li>
    <li><span class="bg-body-secondary text-danger">&lt;optgroup&gt;</span></li>
</ul>
<hr>
<h3 class="my-3">Input Berupa Text</h3>
<p>
    Kita bisa mendefinisikan input berupa text dengan tag <span class="bg-body-secondary text-danger">&lt;input type="text"&gt;</span> ini hanya akan memuat input satu baris
</p>
<div class="bg-dark text-light p-2">
    &lt;form&gt;
    <div class="p-4">
        &lt;input <span class="text-danger">type</span>=<span class="text-success">"text"</span>
    </div>
    &lt;/form&gt;
</div>
<hr>
<h3 class="my-3">Elemen &lt;label&gt;</h3>
<p>
    Elemen <span class="bg-body-secondary text-danger">&lt;label&gt;</span> digunakan untuk memberi keterangan pada input dengan menggunakan atribut <span class="bg-body-secondary text-danger">id</span> pada <span class="bg-body-secondary text-danger">&lt;input&gt;</span><br><br>
    Elemen <span class="bg-body-secondary text-danger">&lt;label&gt;</span> dapat membantu user karena user cenderung lebih fokus pada input
</p>
<hr>
<h3 class="my-3">Input Radio</h3>
<p>Input radio didefinisikan dengan tag <span class="bg-body-secondary text-danger">&lt;input type="radio"&gt;</span><br><br>
Input radio hanya memperbolehkan user untuk memilih <strong>SATU</strong> opsi yang disediakan
</p>
<div class="bg-dark text-light p-2">
    &lt;form&gt;
    <div class="ps-4">
        &lt;p&gt;Pilih opsi&lt;/p&gt;<br>
        &lt;input <span class="text-danger">type</span>=<span class="text-success">"radio"</span>&gt;opsi 1<br>
        &lt;input <span class="text-danger">type</span>=<span class="text-success">"radio"</span>&gt;opsi 2<br>
        &lt;input <span class="text-danger">type</span>=<span class="text-success">"radio"</span>&gt;opsi 3<br>
    </div>
    &lt;/form&gt;
</div>
<p>Potongan kode diatas akan menghasilkan form sebagai berikut :</p>
<p>Pilih opsi</p>
<form action="">
    <input type="radio" name="" id="">opsi 1
    <input type="radio" name="" id="">opsi 2
    <input type="radio" name="" id="">opsi 3
</form>
<hr>
<h3 class="my-3">
    Input checkbox
</h3>
<p>Input checkbox memungkinkan user memilih satu atau lebih opsi yang diberikan <br><br>
    Input ini didefinisikan dengan tag <span class="bg-body-secondary text-danger">&lt;input type="checkbox"&gt;</span>
</p>
<div class="bg-dark text-light p-2">
    &lt;form&gt;
    <div class="ps-4">
        &lt;p&gt;Pilih opsi&lt;/p&gt;<br>
        &lt;input <span class="text-danger">type</span>=<span class="text-success">"checkbox"</span>&gt;opsi 1<br>
        &lt;input <span class="text-danger">type</span>=<span class="text-success">"checkbox"</span>&gt;opsi 2<br>
        &lt;input <span class="text-danger">type</span>=<span class="text-success">"checkbox"</span>&gt;opsi 3<br>
    </div>
    &lt;/form&gt;
</div>
<p>Pilih opsi</p>
<form action="">
    <input type="checkbox" name="" id="">opsi 1<br>
    <input type="checkbox" name="" id="">opsi 2<br>
    <input type="checkbox" name="" id="">opsi 3<br>
</form>
<hr>
<h3 class="my-3">Tombol Submit</h3>
<p>Tombol submit didefinisikan dengan tag <span class="bg-body-secondary text-danger">&lt;input type="submit"&gt;</span><br><br>
Tombol submit digunakan untuk mengirim form yang nantinya akan diproses oleh server
</p>
<div class="bg-warning p-4">
    <strong>Note :</strong> form yang diproses akan dipelajari di materi PHP
</div>
<hr>
<h3 class="my-3">
    Atribut name pada elemen &lt;input&gt;
</h3>
<p>Semua input field <strong>WAJIB</strong> memiliki atribut <span class="bg-body-secondary text-danger">name</span> sebelum dikirim ke server <br><br>
Jika input field tidak memiliki atribut <span class="bg-body-secondary text-danger">name</span> maka value dari input field tersebut tidak akan terkirim ke server
</p>
<br>
    <a href="{{ url('/belajar/html/other-list') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/form-atribut') }}" class="btn btn-success">Selanjutnya</a>

</section>
@endsection
