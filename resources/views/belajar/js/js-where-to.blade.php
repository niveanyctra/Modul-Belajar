@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Where To</h1>
    <a href="{{ url('/belajar/js') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/output') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">
        Tag &lt;script&gt;
    </h3>
    <p>
        Dalam HTML, kode JavaScript dimasukan diantara <span class="bg-body-secondary text-danger">&lt;script&gt;</span> dan <span class="bg-body-secondary text-danger">&lt;/script&gt;</span>.
    </p>
    <h4>Contoh</h4>
    <div class="bg-dark text-light p-3">
        <p>
            &lt;script&gt; <br>
            document.getElementById("demo").innerHTML = "My First JavaScript"; <br>
            &lt;/script&gt;
        </p>
    </div><br>
    <div class="bg-warning p-4">
        JavaScript lama mungkin menggunakan tipe atribut seperti : &lt;script type="text/javascript"&gt;. <br>
        Tipe atribut seperti itu sekarang tidak wajib. JavaScript merupakan bahasa default script dalam HTML.
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Function dan Event
    </h3>
    <p>
        <span class="bg-body-secondary text-danger">function</span> JavaScript adalah sebuah blok di kode JavaScript, yang hanya bisa di eksekusi ketika "dipanggil". <br><br>
        Misalnya, sebuah function dapat dipanggil ketika sebuah <strong>event</strong> atau <strong>peristiwa</strong> terjadi, seperti ketika mengklik sebuah tombol.
    </p>
    <hr>
    <h3 class="my-3">
        JavaScript dalam &lt;head&gt; atau &lt;body&gt;
    </h3>
    <p>
        Kamu dapat menempatkan sebuah script dalam dokumen HTML. <br><br>
        Script dapat ditempatkan di bagian <span class="bg-body-secondary text-danger">&lt;body&gt;</span>, atau di bagian <span class="bg-body-secondary text-danger">&lt;head&gt;</span> pada halaman HTML, atau pada kedua bagian tersebut.
    </p>
    <hr>
    <h3 class="my-3">
        JavaScript pada &lt;head&gt;
    </h3>
    <p>
        Pada contoh kali ini, sebuah <span class="bg-body-secondary text-danger">function</span> JavaScript ditempatkan pada bagian <span class="bg-body-secondary text-danger">&lt;head&gt;</span> pada halaman HTML. <br><br>
        Function ini dipanggil ketika sebuah tombol diklik :
    </p>
    <div class="bg-dark text-light p-3">
        &lt;!DOCTYPE html&gt; <br>
        &lt;html&gt;
        <div class="ps-4">

            &lt;head&gt;
            <div class="ps-4">

                &lt;script&gt; <br>
                function myFunction() {
                    <div class="ps-4">
                        document.getElementById("demo").innerHTML = "Paragraf Dirubah.";
                    </div>
                } <br>
                &lt;/script&gt;
            </div>
            &lt;/head&gt;<br>
            &lt;body&gt;
            <div class="ps-4">

                &lt;h1&gt;Demo JavaScript pada bagian Head&lt;/h1&gt; <br>
                &lt;p <span class="text-danger">id</span><span class="text-success">="demo"</span>&gt;Paragraf&lt;/p&gt; <br>
                &lt;button <span class="text-danger">type</span><span class="text-success">="button"</span> <span class="text-danger">onclick</span><span class="text-success">="myFunction()"</span>&gt;Cobalah&lt;/button&gt;
            </div>
            &lt;/body&gt;
        </div>
        &lt;/html&gt;
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript pada &lt;body&gt;
    </h3>
    <p>
        Pada contoh kali ini, sebuah <span class="bg-body-secondary text-danger">function</span> JavaScript ditempatkan pada bagian <span class="bg-body-secondary text-danger">&lt;body&gt;</span> pada halaman HTML. <br><br>
        Function ini dipanggil ketika sebuah tombol diklik :
    </p>
    <div class="bg-dark text-light p-3">
        &lt;!DOCTYPE html&gt; <br>
        &lt;html&gt;
        <div class="ps-4">

            &lt;body&gt;
            <div class="ps-4">

                &lt;h1&gt;Demo JavaScript pada bagian Body&lt;/h1&gt; <br>
                &lt;p <span class="text-danger">id</span><span class="text-success">="demo"</span>&gt;Paragraf&lt;/p&gt; <br>
                &lt;button <span class="text-danger">type</span><span class="text-success">="button"</span> <span class="text-danger">onclick</span><span class="text-success">="myFunction()"</span>&gt;Cobalah&lt;/button&gt;
            </div>
            <div class="ps-4">

                &lt;script&gt; <br>
                function myFunction() {
                    <div class="ps-4">
                        document.getElementById("demo").innerHTML = "Paragraf Dirubah.";
                    </div>
                } <br>
                &lt;/script&gt;
            </div>
            &lt;/body&gt;
        </div>
        &lt;/html&gt;
    </div><br>
    <div class="bg-warning p-3">
        <p>Menempatkan script di bagian bawah elemen &lt;body&gt; akan meningkatkan kecepatan tampilan web, karena interpretasi script memperlambat tampilan.</p>
    </div>
    <hr>
    <h3 class="my-3">
        External JavaScript
    </h3>
    <p>
        Script juga dapat ditempatkan di file eksternal. <br><br>
        Script eksternal praktis bila kode yang sama digunakan di banyak halaman web berbeda. <br><br>
        File JavaScript memiliki ekstensi file <strong>.js</strong>. <br><br>
        Untuk menggunakan script eksternal, masukkan nama file script di atribut <span class="bg-body-secondary text-danger">src</span> (source / sumber) pada tag <span class="bg-body-secondary text-danger">&lt;script&gt;</span> :
    </p>
    <div class="bg-dark text-light p-3">
        &lt;script <span class="text-danger">src</span><span class="text-success">="script.js"</span>&gt;&lt;/script&gt; <br>
    </div> <br>
    <p>
        Kamu dapat menempatkan referensi script eksternal di <span class="bg-body-secondary text-danger">&lt;head&gt;</span> atau <span class="bg-body-secondary text-danger">&lt;body&gt;</span> sesuka kamu.
    </p><br>
    <div class="bg-warning p-4">
        <p>Script eksternal tidak dapat memiliki tag <span class="bg-body-secondary text-danger">&lt;script&gt;</span></p>
    </div>
    <hr>
    <h3 class="my-3">
        Keuntungan Menggunakan Eksternal JavaScript
    </h3>
    <p>
        Menempatkan script dalam file eksternal memiliki beberapa keuntungan: <br><br>
        <ul>
            <li>Memisahkan HTML dan kode script</li>
            <li>Membuat HTML dan JavaScript lebih mudah dibaca dan dipelihara</li>
            <li>File JavaScript yang di-cache dapat mempercepat halaman ketika dimuat</li>
        </ul>
    </p>
    <hr>
    <h3 class="my-3">
        Referensi Eksternal
    </h3>
    <p>
        Sebuah script eksternal dapat direfernsi dengan 3 cara: <br>
        <ul>
            <li>Dengan URL lengakp (alamat website lengkap)</li>
            <li>Dengan file path atau lokasi file (seperti /js/)</li>
            <li>Tanpa file path</li>
        </ul>
    </p>
    <p>
        Berikut contoh menggunakan <strong>URL lengkap</strong> untuk menuju file myScript.js:
    </p>
    <div class="bg-dark text-light p-3">
        &lt;script <span class="text-danger">src</span><span class="text-success">="https://smkn1-cirebon.sch.id/js/myScript.js"</span>&gt;&lt;/script&gt;
    </div><br>
    <p>
        Berikut contoh menggunakan <strong>file path</strong> untuk menuju file myScript.js:
    </p>
    <div class="bg-dark text-light p-3">
        &lt;script <span class="text-danger">src</span><span class="text-success">="/js/myScript.js"</span>&gt;&lt;/script&gt;
    </div><br>
    <p>
        Berikut contoh tanpa file path untuk menuju file myScript.js:
    </p>
    <div class="bg-dark text-light p-3">
        &lt;script <span class="text-danger">src</span><span class="text-success">="myScript.js"</span>&gt;&lt;/script&gt;
    </div><br>
    <a href="{{ url('/belajar/js') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/output') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
