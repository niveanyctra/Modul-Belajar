@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.sql')
<section class="main">
    <h1>SQL Join</h1>
    <a href="{{ url('/belajar/sql/alias') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/group-by') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Klausa <mark>JOIN</mark> berfungsi untuk menghubungkan beberapa tabel berdasarkan kolom yang saling terkait antara tabel tersebut</p>
    <hr>
    <h3 class="my-3">Inner Join</h3>
    <p><mark>INNER JOIN</mark> akan menghubungkan tabel berdasarkan nilai yang cocok pada kedua tabel</p>
    <h4 class="my-3">Sintaks</h4>
    <div class="bg-dark text-light p-2">
        SELECT nama_kolom <br>
        FROM tabel1 <br>
        INNER JOIN tabel2 <br>
        ON tabel1.nama_kolom = tabel2.nama_kolom;
    </div>
    <hr>
    <h4 class="my-3">Contoh</h4>
    <p>Tabel Nilai</p>
    <table class="table table-bordered">
        <tr>
            <th>NIS</th>
            <th>Pelajaran</th>
            <th>Nilai</th>
        </tr>
        <tr>
            <td>111</td>
            <td>Basis Data</td>
            <td>90</td>
        </tr>
        <tr>
            <td>111</td>
            <td>Pemrograman Web</td>
            <td>90</td>
        </tr>
        <tr>
            <td>112</td>
            <td>Pemrograman Web</td>
            <td>80</td>
        </tr>
        <tr>
            <td>113</td>
            <td>Desain Grafis</td>
            <td>70</td>
        </tr>
    </table>
    <p>Tabel Siswa</p>
    <table class="table table-bordered">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <tr>
            <td>111</td>
            <td>Arip</td>
            <td>XII RPL 1</td>
        </tr>
        <tr>
            <td>112</td>
            <td>Messi</td>
            <td>XII RPL 1</td>
        </tr>
        <tr>
            <td>113</td>
            <td>Sage</td>
            <td>XII RPL 1</td>
        </tr>
    </table>
    <p>Kita akan menghubungkan kedua tabel tersebut dengan klausa <mark>INNER JOIN</mark></p>
        <div class="bg-dark text-light p-2">
        SELECT siswa.nama, nilai.nilai <br>
        FROM nilai <br>
        INNER JOIN siswa <br>
        ON siswa.nis = nilai.nis;
    </div>
    <p>Sintaks diatas akan menghasilkan tabel sebagai berikut :</p>
    <table class="table table-bordered">
        <tr>
            <th>siswa.nama</th>
            <th>nilai.nilai</th>
        </tr>
        <tr>
            <td>Arip</td>
            <td>90</td>
        </tr>
        <tr>
            <td>Arip</td>
            <td>90</td>
        </tr>
        <tr>
            <td>Messi</td>
            <td>80</td>
        </tr>
        <tr>
            <td>Sage</td>
            <td>70</td>
        </tr>
    </table>
    <hr>
    {{-- Left Join --}}
        <h3 class="my-3">Left Join</h3>
    <p><mark>LEFT JOIN</mark> akan menghubungkan tabel berdasarkan nilai yang cocok pada tabel pertama</p>
    <h4 class="my-3">Sintaks</h4>
    <div class="bg-dark text-light p-2">
        SELECT nama_kolom <br>
        FROM tabel1 <br>
        LEFT JOIN tabel2 <br>
        ON tabel1.nama_kolom = tabel2.nama_kolom;
    </div>
    <hr>
    <h4 class="my-3">Contoh</h4>
    <p>Tabel Nilai</p>
    <table class="table table-bordered">
        <tr>
            <th>NIS</th>
            <th>Pelajaran</th>
            <th>Nilai</th>
        </tr>
        <tr>
            <td>111</td>
            <td>Basis Data</td>
            <td>90</td>
        </tr>
        <tr>
            <td>111</td>
            <td>Pemrograman Web</td>
            <td>90</td>
        </tr>
        <tr>
            <td>112</td>
            <td>Pemrograman Web</td>
            <td>80</td>
        </tr>
        <tr>
            <td>113</td>
            <td>Desain Grafis</td>
            <td>70</td>
        </tr>
    </table>
    <p>Tabel Siswa</p>
    <table class="table table-bordered">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <tr>
            <td>111</td>
            <td>Arip</td>
            <td>XII RPL 1</td>
        </tr>
        <tr>
            <td>112</td>
            <td>Messi</td>
            <td>XII RPL 1</td>
        </tr>
        <tr>
            <td>113</td>
            <td>Sage</td>
            <td>XII RPL 1</td>
        </tr>
        <tr>
            <td>114</td>
            <td>Magnus</td>
            <td>XII RPL 1</td>
        </tr>
    </table>
    <p>Kita akan menghubungkan kedua tabel tersebut dengan klausa <mark>LEFT JOIN</mark></p>
        <div class="bg-dark text-light p-2">
        SELECT siswa.nama, nilai.nilai <br>
        FROM nilai <br>
        LEFT JOIN siswa <br>
        ON siswa.nis = nilai.nis;
    </div>
    <p>Sintaks diatas akan menghasilkan tabel sebagai berikut :</p>
    <table class="table table-bordered">
        <tr>
            <th>siswa.nama</th>
            <th>nilai.nilai</th>
        </tr>
        <tr>
            <td>Arip</td>
            <td>90</td>
        </tr>
        <tr>
            <td>Arip</td>
            <td>90</td>
        </tr>
        <tr>
            <td>Messi</td>
            <td>80</td>
        </tr>
        <tr>
            <td>Sage</td>
            <td>70</td>
        </tr>
    </table>
    <hr>
    {{-- right join --}}
        <h3 class="my-3">Right Join</h3>
    <p><mark>RIGHT JOIN</mark> akan menghubungkan tabel berdasarkan nilai yang cocok pada tabel kedua</p>
    <h4 class="my-3">Sintaks</h4>
    <div class="bg-dark text-light p-2">
        SELECT nama_kolom <br>
        FROM tabel1 <br>
        RIGHT JOIN tabel2 <br>
        ON tabel1.nama_kolom = tabel2.nama_kolom;
    </div>
    <hr>
    <h4 class="my-3">Contoh</h4>
    <p>Tabel Nilai</p>
    <table class="table table-bordered">
        <tr>
            <th>NIS</th>
            <th>Pelajaran</th>
            <th>Nilai</th>
        </tr>
        <tr>
            <td>111</td>
            <td>Basis Data</td>
            <td>90</td>
        </tr>
        <tr>
            <td>111</td>
            <td>Pemrograman Web</td>
            <td>90</td>
        </tr>
        <tr>
            <td>112</td>
            <td>Pemrograman Web</td>
            <td>80</td>
        </tr>
        <tr>
            <td>113</td>
            <td>Desain Grafis</td>
            <td>70</td>
        </tr>
    </table>
    <p>Tabel Siswa</p>
    <table class="table table-bordered">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <tr>
            <td>111</td>
            <td>Arip</td>
            <td>XII RPL 1</td>
        </tr>
        <tr>
            <td>112</td>
            <td>Messi</td>
            <td>XII RPL 1</td>
        </tr>
        <tr>
            <td>113</td>
            <td>Sage</td>
            <td>XII RPL 1</td>
        </tr>
        <tr>
            <td>114</td>
            <td>Magnus</td>
            <td>XII RPL 1</td>
        </tr>
    </table>
    <p>Kita akan menghubungkan kedua tabel tersebut dengan klausa <mark>RIGHT JOIN</mark></p>
        <div class="bg-dark text-light p-2">
        SELECT siswa.nama, nilai.nilai <br>
        FROM nilai <br>
        RIGHT JOIN siswa <br>
        ON siswa.nis = nilai.nis;
    </div>
    <p>Sintaks diatas akan menghasilkan tabel sebagai berikut :</p>
    <table class="table table-bordered">
        <tr>
            <th>siswa.nama</th>
            <th>nilai.nilai</th>
        </tr>
        <tr>
            <td>Arip</td>
            <td>90</td>
        </tr>
        <tr>
            <td>Arip</td>
            <td>90</td>
        </tr>
        <tr>
            <td>Messi</td>
            <td>80</td>
        </tr>
        <tr>
            <td>Sage</td>
            <td>70</td>
        </tr>
        <tr>
            <td>Magnus</td>
            <td><i>null</i></td>
        </tr>
    </table>
    <br>
        <a href="{{ url('/belajar/sql/alias') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/sql/group-by') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
