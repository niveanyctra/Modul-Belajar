@extends('layouts.main')
@section('content')
<div class="container d-flex align-items-center vh-100">
    <div>
        {{-- Bagusan NeverGonnaGiveYouUp :/ --}}
        <h4 style="color: #008572;">#ProgrammerMuda</h4>
        <h1 class="fw-bolder display-3">Change your future with coding </h1>
        <p>
            Siapkan masa depan yang cerah <br>
            Modul ini menyediakan pembelajaran untuk kelas X - XII
        </p>
    </div>
    <div class="d-none d-lg-block">
        <img src="{{ url('img/uwong.png') }}" alt="" width="378px">
    </div>
</div>
<div class="d-flex align-items-center justify-content-center py-cstm" style="background-color: #FFD6A5; min-height: max-content;">
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column text-center align-items-center justify-content-center">
            <h1 class="fw-bold display-1 p-3">HTML</h1>
            <h6 class="fw-bold p-2">Bahasa untuk membuat halaman web</h6>
            <div class="buttons">
                <a href="{{ url('/belajar/html') }}" class="button-1">Tutorial</a>
                <a href="{{ url('/latihan/html/basic') }}" class="button-2">Latihan</a>
                <a href="{{ url('/kelas-mentor/html') }}" class="button-3">Kelas Mentor</a>
            </div>
        </div>
        <div class="d-none d-md-grid align-items-center ms-5">
            <div class="kartu">
                <h5 class="py-2">HTML Example:</h5>
                <div class="code">
                    &lt;!DOCTYPE html&gt; <br>
                    &lt;html&gt;
                    <div class="ps-4">
                        &lt;head&gt;
                        <div class="ps-4">
                            &lt;title&gt;Judul Halaman&lt;/title&gt;
                        </div>
                        &lt;/head&gt;<br>
                        &lt;body&gt;
                        <div class="ps-4">
                            &lt;h1&gt;Hello World&lt;/h1&gt;
                        </div>
                        &lt;/body&gt;
                    </div>
                    &lt;/html&gt;
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex align-items-center justify-content-center py-cstm" style="background-color: #86DAFD;">
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column text-center align-items-center justify-content-center">
            <h1 class="fw-bold display-1 p-3">CSS</h1>
            <h6 class="fw-bold p-2">Bahasa untuk mempercantik halaman web</h6>
            <div class="buttons">
                <a href="{{ url('/belajar/css') }}" class="button-1">Tutorial</a>
                <a href="{{ url('/latihan/css/basic') }}" class="button-2">Latihan</a>
                <a href="{{ url('/kelas-mentor/css') }}" class="button-3">Kelas Mentor</a>
            </div>
        </div>
        <div class="d-none d-md-grid align-items-center ms-5">
            <div class="kartu">
                <h5 class="py-2">CSS Example:</h5>
                <div class="code">
                    <span class="t-red">h1</span> {
                    <div class="ps-4">

                        <span class="t-red">color</span>: <span class="t-green">red</span>;<br>
                        <span class="t-red">text-align</span>: <span class="t-green">center</span>;
                    </div>
                    }
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex align-items-center justify-content-center py-cstm" style="background-color: #809BCE;">
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column text-center align-items-center justify-content-center">
            <h1 class="fw-bold display-1 p-3">PHP</h1>
            <h6 class="fw-bold p-2">Bahasa pemrograman server web</h6>
            <div class="buttons">
                <a href="{{ url('/belajar/php') }}" class="button-1">Tutorial</a>
                <a href="{{ url('/latihan/php/basic') }}" class="button-2">Latihan</a>
                <a href="{{ url('/kelas-mentor/php') }}" class="button-3 bg-white text-dark">Kelas Mentor</a>
            </div>
        </div>
        <div class="d-none d-md-grid align-items-center ms-5">
            <div class="kartu">
                <h5 class="py-2">PHP Example:</h5>
                <div class="code">
                    &lt;?php <br>
                    echo "Hello World!";<br>
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex align-items-center justify-content-center py-cstm" style="background-color: #FFED74;">
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column text-center align-items-center justify-content-center">
            <h1 class="fw-bold display-3 p-3">JavaScript</h1>
            <h6 class="fw-bold p-2">Bahasa pemrograman untuk halaman web</h6>
            <div class="buttons">
                <a href="{{ url('/belajar/js') }}" class="button-1">Tutorial</a>
                <a href="{{ url('/latihan/js/basic') }}" class="button-2 bg-white text-dark">Latihan</a>
                <a href="{{ url('/kelas-mentor/js') }}" class="button-3">Kelas Mentor</a>
            </div>
        </div>
        <div class="d-none d-md-grid align-items-center ms-5">
            <div class="kartu">
                <h5 class="py-2">JavaScript Example:</h5>
                <div class="code">
                    &lt;button <span class="t-red">onclick</span>="<span class="t-green">myFunction()</span>"&gt;Click Me!&lt;/button&gt;<br><br>
                    &lt;script&gt;<br>
                    function <span class="t-blue">myFunction()</span> {
                    <div class="ps-4">
                        let x = document.getElementById("demo");<br>
                        x.style.fontSize = "25px";<br>
                        x.style.color = "red";
                    </div>
                    } <br>
                    &lt;/script&gt;
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex align-items-center justify-content-center py-cstm" style="background-color: #7EFDD0;">
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column text-center align-items-center justify-content-center">
            <h1 class="fw-bold display-1 p-3">SQL</h1>
            <h6 class="fw-bold p-2">Bahasa untuk menggunakan Database</h6>
            <div class="buttons">
                <a href="{{ url('/belajar/sql') }}" class="button-1 bg-white text-dark">Tutorial</a>
                <a href="{{ url('/latihan/sql/basic') }}" class="button-2">Latihan</a>
                <a href="{{ url('/kelas-mentor/sql') }}" class="button-3">Kelas Mentor</a>
            </div>
        </div>
        <div class="d-none d-md-grid align-items-center ms-5">
            <div class="kartu">
                <h5 class="py-2">SQL Example:</h5>
                <div class="code">
                    SELECT * FROM siswa <br>
                    WHERE kelas LIKE "X RPL 1";
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4 py-3">
    <div class="mb-3">
        <h1 class="fw-bolder display-5 mt-5">Alur Belajar</h1>
        <h2 class="fw-bold">Raih Mimpimu</h2>
    </div>
    <div class="d-flex gap-4 justify-content-center pt-3">
        <div class="kartu alur" style="background-color: white">
            <div class="gambar">
                Ini ambar
            </div>
            <div class="judul">
                <h4 class="fw-bolder">Berkarir sebagai Front End Developer</h4>
            </div>
            <div class="app">
                <div class="bg-black" style="width: 50px; height: 50px;"></div>
            </div>
        </div>
        <div class="kartu alur" style="background-color: white">
            <div class="gambar">
                Ini ambar
            </div>
            <div class="judul">
                <h4 class="fw-bolder">Berkarir sebagai Back End Developer</h4>
            </div>
            <div class="app mx-auto">
                <div class="bg-black" style="width: 50px; height: 50px;"></div>
                <div class="bg-black" style="width: 50px; height: 50px;"></div>
                <div class="bg-black" style="width: 50px; height: 50px;"></div>
                <div class="bg-black" style="width: 50px; height: 50px;"></div>
                <div class="bg-black" style="width: 50px; height: 50px;"></div>
            </div>
        </div>
        <div class="kartu alur" style="background-color: white">
            <div class="gambar">
                Ini ambar
            </div>
            <div class="judul">
                <h4 class="fw-bolder">Berkarir sebagai UX Design Developer</h4>
            </div>
            <div class="app">
                <div class="bg-black" style="width: 50px; height: 50px;"></div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 pt-3 pb-5">
    <div class="mb-3">
        <h1 class="fw-bolder display-5 mt-5">Kelas Online</h1>
        <h2 class="fw-bold">Belajar Dari Para Mentor</h2>
    </div>
    <div class="d-flex justify-content-center flex-wrap img-mentor pt-3">
        <div class="card m-3 {" style="width: 14rem;">
            <a href="{{ url('/kelas-mentor/html/')}}">
                <img src="https://i.ytimg.com/vi_webp/vcSJ3w2PZ_A/maxresdefault.webp?v=6512c3c4" class="card-img-top" alt="">
            </a>
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/kelas-mentor/html/')}}">Judul Ini</a></h5>
                <p class="card-text">Lesti Kembang Api</p>
                <div id="display-tool">
                    <div class="row gap-1">
                        <div class="me-3 col-2">
                            <img src="{{ asset('img/tools/logo_vs_code.png') }}" class="" alt="" height="40px">
                        </div>
                        <div class="me-3 col-2">
                            <img src="{{ asset('img/javascript-logomark-rounded.svg') }}" class="" alt="" height="40px">
                        </div>
                        <div class="me-3 col-2">
                            <img src="{{ asset('img/tools/logo_php.png') }}" class="" alt="" height="40px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card m-3 {" style="width: 14rem;">
            <a href="{{ url('/kelas-mentor/html/')}}">
                <img src="https://i.ytimg.com/vi_webp/vcSJ3w2PZ_A/maxresdefault.webp?v=6512c3c4" class="card-img-top" alt="">
            </a>
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/kelas-mentor/html/')}}">Judul Ini</a></h5>
                <p class="card-text">Lesti Kembang Api</p>
                <div id="display-tool">
                    <div class="row gap-1">
                        <div class="me-3 col-2">
                            <img src="{{ asset('img/tools/logo_vs_code.png') }}" class="" alt="" height="40px">
                        </div>
                        <div class="me-3 col-2">
                            <img src="{{ asset('img/javascript-logomark-rounded.svg') }}" class="" alt="" height="40px">
                        </div>
                        <div class="me-3 col-2">
                            <img src="{{ asset('img/tools/logo_php.png') }}" class="" alt="" height="40px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card m-3 {" style="width: 14rem;">
            <a href="{{ url('/kelas-mentor/html/')}}">
                <img src="https://i.ytimg.com/vi_webp/vcSJ3w2PZ_A/maxresdefault.webp?v=6512c3c4" class="card-img-top" alt="">
            </a>
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/kelas-mentor/html/')}}">Judul Ini</a></h5>
                <p class="card-text">Lesti Kembang Api</p>
                <div id="display-tool">
                    <div class="row gap-1">
                        <div class="me-3 col-2">
                            <img src="{{ asset('img/tools/logo_vs_code.png') }}" class="" alt="" height="40px">
                        </div>
                        <div class="me-3 col-2">
                            <img src="{{ asset('img/javascript-logomark-rounded.svg') }}" class="" alt="" height="40px">
                        </div>
                        <div class="me-3 col-2">
                            <img src="{{ asset('img/tools/logo_php.png') }}" class="" alt="" height="40px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card m-3 {" style="width: 14rem;">
            <a href="{{ url('/kelas-mentor/html/')}}">
                <img src="https://i.ytimg.com/vi_webp/vcSJ3w2PZ_A/maxresdefault.webp?v=6512c3c4" class="card-img-top" alt="">
            </a>
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/kelas-mentor/html/')}}">Judul Ini</a></h5>
                <p class="card-text">Lesti Kembang Api</p>
                <div id="display-tool">
                    <div class="row gap-1">
                        <div class="me-3 col-2">
                            <img src="{{ asset('img/tools/logo_vs_code.png') }}" class="" alt="" height="40px">
                        </div>
                        <div class="me-3 col-2">
                            <img src="{{ asset('img/javascript-logomark-rounded.svg') }}" class="" alt="" height="40px">
                        </div>
                        <div class="me-3 col-2">
                            <img src="{{ asset('img/tools/logo_php.png') }}" class="" alt="" height="40px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vh-100 d-flex justify-content-center align-items-center mt-5" style="background: #181230;">
<div class="container d-flex h-100 justify-content-center align-items-center">
    <div class="text-white">
        <h1 class="fw-bolder display-3">Bergabung Bersama Kami di Discord Community</h1>
    </div>
    <div class="d-none d-lg-block bg-white rounded-4" style="height: 100%;width: 75%;">
    </div>
</div>
</div>
@include('layouts.footer')
@endsection