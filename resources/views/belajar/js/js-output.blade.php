@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Output</h1>
    <a href="{{ url('/belajar/js/where-to') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/statement') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">
        JavaScript Display Possibilities
    </h3>
    <p>
        JavaScript dapat "menampilkan" data dalam berbagai cara: <br>
        <ul>
            <li>Menulis ke dalam elemen HTML, menggunakan <span class="bg-body-secondary text-danger">innerHTML</span>.</li>
            <li>Menulis ke dalam output HTML menggunakan <span class="bg-body-secondary text-danger">document.write()</span>.</li>
            <li>Menulis ke dalam kotak peringatan, menggunakan <span class="bg-body-secondary text-danger">window.alert()</span>.</li>
            <li>Menulis ke dalam konsol browser, menggunakan <span class="bg-body-secondary text-danger">console.log()</span>.</li>
        </ul>
    </p>
    <hr>
    <h3 class="my-3">
        Menggunakan innerHTML
    </h3>
    <p>
        Untuk mengakses sebuah elemen HTML, JavaScript dapat menggunakan metode <span class="bg-body-secondary text-danger">document.getElementById(id)</span>. <br><br>
        Atribut<span class="bg-body-secondary text-danger">id</span> mendefinisikan elemen HTML. Properti <span class="bg-body-secondary text-danger">innerHTML</span> mendefinisikan konten HTML:  
    </p>
    <div class="bg-dark text-light p-3">
        &lt;!DOCTYPE html&gt; <br>
        &lt;html&gt;
        <div class="ps-4">

            &lt;body&gt;
            <div class="ps-4">

                &lt;h1&gt;Demo JavaScript&lt;/h1&gt; <br>
                &lt;p <span class="text-danger">id</span><span class="text-success">="demo"</span>&gt;&lt;/p&gt; <br>
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
        Untuk tujuan pengujian, akan lebih mudah menggunakan <span class="bg-body-secondary text-danger">document.write()</span>. 
    </p>
    <div class="bg-dark text-light p-3">
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
    <div class="bg-warning p-4">
        <p>
            Menggunakan document.write() setelah dokumen HTML dimuat, akan <strong>menghapus semua HTML yang ada</strong>:
        </p>
    </div><br>
    <div class="bg-dark text-light p-3">
        &lt;!DOCTYPE html&gt; <br>
        &lt;html&gt;
        <div class="ps-4">

            &lt;body&gt;
            <div class="ps-4">

                &lt;h1&gt;Demo JavaScript&lt;/h1&gt; <br>
                &lt;p&gt;Hello!&lt;/p&gt; <br>
            </div>
            <div class="ps-4">

                &lt;button <span class="text-danger">type</span><span class="text-success">="button"</span> <span class="text-danger">onclick</span><span class="text-success">="document.write(5 + 6)"</span>&gt;Cobalah&lt;/button&gt;
            </div>
            &lt;/body&gt;
        </div>
        &lt;/html&gt;
    </div><br>
    <div class="bg-warning p-4">
        <p>Metode document.write() seharusnya hanya digunakan untuk pengujian.</p>
    </div>
    <hr>
    <h3 class="my-3">
        Menggunakan window.alert()
    </h3>
    <p>
        Kamu dapat menggunakan kotak peringatan untuk menampilkan data:
    </p>
    <div class="bg-dark text-light p-3">
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
        Kamu dapat melewati keyword <span class="bg-body-secondary text-danger">window</span>. <br><br>
        Dalam JavaScript, objek window adalah objek cakupan global. Ini berarti bahwa variabel, properti, dan metode secara default adalah milik objek window. Ini juga berarti bahwa menentukan kata kunci <span class="bg-body-secondary text-danger">window</span> adalah opsional:
    </p>
    <div class="bg-dark text-light p-3">
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
        Untuk tujuan debugging, Anda dapat memanggil metode <span class="bg-body-secondary text-danger">console.log()</span> di browser untuk menampilkan data.
    </p>
    <div class="bg-dark text-light p-3">
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
        Satu-satunya pengecualian adalah Anda dapat memanggil metode <span class="bg-body-secondary text-danger">window.print()</span> di browser untuk mencetak konten jendela saat ini.
    </p>
    <div class="bg-dark text-light p-3">
        &lt;!DOCTYPE html&gt; <br>
        &lt;html&gt;
        <div class="ps-4">

            &lt;body&gt;
            <div class="ps-4">
                &lt;button <span class="text-danger">onclick</span><span class="text-success">="window.print()"</span>&gt;Print halaman ini&lt;/button&gt;
            </div>
            &lt;/body&gt;
        </div>
        &lt;/html&gt;
    </div>
    <a href="{{ url('/belajar/js/where-to') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/statement') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
