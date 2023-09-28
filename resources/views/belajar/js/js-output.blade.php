@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Output</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/js/where-to') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/js/statement') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Display Possibilities
    </h3>
    <p>
        JavaScript dapat "menampilkan" data dalam berbagai cara: <br>
        <ul>
            <li>Menulis ke dalam elemen HTML, menggunakan <span class="mark">innerHTML</span>.</li>
            <li>Menulis ke dalam output HTML menggunakan <span class="mark">document.write()</span>.</li>
            <li>Menulis ke dalam kotak peringatan, menggunakan <span class="mark">window.alert()</span>.</li>
            <li>Menulis ke dalam konsol browser, menggunakan <span class="mark">console.log()</span>.</li>
        </ul>
    </p>
    <hr>
    <h3 class="my-3">
        Menggunakan innerHTML
    </h3>
    <p>
        Untuk mengakses sebuah elemen HTML, JavaScript dapat menggunakan metode <span class="mark">document.getElementById(id)</span>. <br><br>
        Atribut<span class="mark">id</span> mendefinisikan elemen HTML. Properti <span class="mark">innerHTML</span> mendefinisikan konten HTML:
    </p>
    <div class="code">
        &lt;!DOCTYPE html&gt; <br>
        &lt;html&gt;
        <div class="ps-4">

            &lt;body&gt;
            <div class="ps-4">

                &lt;h1&gt;Demo JavaScript&lt;/h1&gt; <br>
                &lt;p <span class="t-red">id</span><span class="t-green">="demo"</span>&gt;&lt;/p&gt; <br>
            </div>
            <div class="ps-4">

                &lt;script&gt; <br>
                    <div class="ps-4">
                        document.getElementById("demo").innerHTML = 5 + 6;
                    </div>
                &lt;/script&gt;
            </div>
            &lt;/body&gt;
        </div>
        &lt;/html&gt;
    </div><br>
    <hr>
    <h3 class="my-3">
        Menggunakan document.write()
    </h3>
    <p>
        Untuk tujuan pengujian, akan lebih mudah menggunakan <span class="mark">document.write()</span>.
    </p>
    <div class="code">
        &lt;!DOCTYPE html&gt; <br>
        &lt;html&gt;
        <div class="ps-4">

            &lt;body&gt;
            <div class="ps-4">

                &lt;h1&gt;Demo JavaScript&lt;/h1&gt; <br>
                &lt;p&gt;Hello!&lt;/p&gt; <br>
            </div>
            <div class="ps-4">

                &lt;script&gt; <br>
                    <div class="ps-4">
                        document.write(5 + 6);
                    </div>
                &lt;/script&gt;
            </div>
            &lt;/body&gt;
        </div>
        &lt;/html&gt;
    </div><br>
    <div class="note">
        <p>
            Menggunakan document.write() setelah dokumen HTML dimuat, akan <strong>menghapus semua HTML yang ada</strong>:
        </p>
    </div><br>
    <div class="code">
        &lt;!DOCTYPE html&gt; <br>
        &lt;html&gt;
        <div class="ps-4">

            &lt;body&gt;
            <div class="ps-4">

                &lt;h1&gt;Demo JavaScript&lt;/h1&gt; <br>
                &lt;p&gt;Hello!&lt;/p&gt; <br>
            </div>
            <div class="ps-4">

                &lt;button <span class="t-red">type</span><span class="t-green">="button"</span> <span class="t-red">onclick</span><span class="t-green">="document.write(5 + 6)"</span>&gt;Cobalah&lt;/button&gt;
            </div>
            &lt;/body&gt;
        </div>
        &lt;/html&gt;
    </div><br>
    <div class="note">
        <p>Metode document.write() seharusnya hanya digunakan untuk pengujian.</p>
    </div>
    <hr>
    <h3 class="my-3">
        Menggunakan window.alert()
    </h3>
    <p>
        Kamu dapat menggunakan kotak peringatan untuk menampilkan data:
    </p>
    <div class="code">
        &lt;!DOCTYPE html&gt; <br>
        &lt;html&gt;
        <div class="ps-4">

            &lt;body&gt;
            <div class="ps-4">

                &lt;h1&gt;Demo JavaScript&lt;/h1&gt; <br>
                &lt;p&gt;Hello!&lt;/p&gt; <br>
            </div>
            <div class="ps-4">

                &lt;script&gt; <br>
                    <div class="ps-4">
                        window.alert(5 + 6);
                    </div>
                &lt;/script&gt;
            </div>
            &lt;/body&gt;
        </div>
        &lt;/html&gt;
    </div><br>
    <p>
        Kamu dapat melewati keyword <span class="mark">window</span>. <br><br>
        Dalam JavaScript, objek window adalah objek cakupan global. Ini berarti bahwa variabel, properti, dan metode secara default adalah milik objek window. Ini juga berarti bahwa menentukan kata kunci <span class="mark">window</span> adalah opsional:
    </p>
    <div class="code">
        &lt;!DOCTYPE html&gt; <br>
        &lt;html&gt;
        <div class="ps-4">

            &lt;body&gt;
            <div class="ps-4">

                &lt;h1&gt;Demo JavaScript&lt;/h1&gt; <br>
                &lt;p&gt;Hello!&lt;/p&gt; <br>
            </div>
            <div class="ps-4">

                &lt;script&gt; <br>
                    <div class="ps-4">
                        alert(5 + 6);
                    </div>
                &lt;/script&gt;
            </div>
            &lt;/body&gt;
        </div>
        &lt;/html&gt;
    </div>
    <hr>
    <h3 class="my-3">
        Menggunakan console.log()
    </h3>
    <p>
        Untuk tujuan debugging, Anda dapat memanggil metode <span class="mark">console.log()</span> di browser untuk menampilkan data.
    </p>
    <div class="code">
        &lt;!DOCTYPE html&gt; <br>
        &lt;html&gt;
        <div class="ps-4">

            &lt;body&gt;
            <div class="ps-4">

                &lt;script&gt; <br>
                    <div class="ps-4">
                        console.log(5 + 6);
                    </div>
                &lt;/script&gt;
            </div>
            &lt;/body&gt;
        </div>
        &lt;/html&gt;
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Print
    </h3>
    <p>
        JavaScript tidak memiliki objek print atau metode print. <br><br>
        Anda tidak dapat mengakses output perangkat dari JavaScript. <br><br>
        Satu-satunya pengecualian adalah Anda dapat memanggil metode <span class="mark">window.print()</span> di browser untuk mencetak konten jendela saat ini.
    </p>
    <div class="code">
        &lt;!DOCTYPE html&gt; <br>
        &lt;html&gt;
        <div class="ps-4">

            &lt;body&gt;
            <div class="ps-4">
                &lt;button <span class="t-red">onclick</span><span class="t-green">="window.print()"</span>&gt;Print halaman ini&lt;/button&gt;
            </div>
            &lt;/body&gt;
        </div>
        &lt;/html&gt;
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/js/where-to') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/js/statement') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
