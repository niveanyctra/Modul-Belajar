@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Operator</h1>
    <a href="{{ url('/belajar/php/math') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/if-else') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Pada modul ini kita hanya akan menbahas tentang :</p>
    <ul>
        <li>Operator aritmatika</li>
        <li>Operator penugasan</li>
        <li>Operator perbandingan</li>
        <li>Operator kenaikan/penurunan</li>
        <li>Operator logika</li>
    </ul>
    <hr>
    <h3 class="my-3">Operator Aritmatika</h3>
    <table class="table table-bordered">
        <tr>
            <th>Operator</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>+</td>
            <td>Penjumlahan</td>
        </tr>
        <tr>
            <td>-</td>
            <td>Pengurangan</td>
        </tr>
        <tr>
            <td>*</td>
            <td>Perkalian</td>
        </tr>
        <tr>
            <td>/</td>
            <td>Pembagian</td>
        </tr>
        <tr>
            <td>%</td>
            <td>Modulus</td>
        </tr>
        <tr>
            <td>**</td>
            <td>Perpangkatan</td>
        </tr>
    </table>
        <hr>
        <h3 class="my-3">Operator Penugasan</h3>
        <table class="table table-bordered">
        <tr>
            <th>Operator</th>
            <th>Contoh</th>
            <th>Sama seperti</th>
        </tr>
        <tr>
            <td>=</td>
            <td>x = y</td>
            <td>x = y</td>
        </tr>
        <tr>
            <td>+=</td>
            <td>x += y</td>
            <td>x = x + y</td>
        </tr>
        <tr>
            <td>-=</td>
            <td>x -= y</td>
            <td>x = x - y</td>
        </tr>
        <tr>
            <td>*=</td>
            <td>x *= y</td>
            <td>x = x * y</td>
        </tr>
        <tr>
            <td>/=</td>
            <td>x /= y</td>
            <td>x = x / y</td>
        </tr>
        <tr>
            <td>%=</td>
            <td>x %= y</td>
            <td>x = x % y</td>
        </tr>
        <tr>
            <td>**=</td>
            <td>x **= y</td>
            <td>x = x ** y</td>
        </tr>

    </table>
    <hr>
    <h3 class="my-3">
        Operator kenaikan
    </h3>
    <table class="table table-bordered">
        <tr>
            <th>Operator</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>==</td>
            <td>Sama dengan</td>
        </tr>
        <tr>
            <td>===</td>
            <td>Sama value dan tipe data dengan</td>
        </tr>
        <tr>
            <td>!=</td>
            <td>Tidak sama dengan</td>
        </tr>
        <tr>
            <td>></td>
            <td>Lebih besar dari</td>
        </tr>
        <tr>
            <td><</td>
            <td>Lebih kecil dari</td>
        </tr>
        <tr>
            <td>>=</td>
            <td>Lebih besar dari atau sama dengan</td>
        </tr>
        <tr>
            <td><=</td>
            <td>Lebih kecil dari atau sama dengan</td>
        </tr>
    </table>
    <hr><h3 class="my-3">Operator kenaikan/penurunan</h3>
    <table class="table table-bordered">
        <tr>
            <th>Operator</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>++x;</td>
            <td>Menambahkan 1 lalu mengembalikan $x</td>
        </tr>
        <tr>
            <td>x++;</td>
            <td>mengembalikan $x lalu menambah 1</td>
        </tr>
        <tr>
            <td>--x;</td>
            <td>mengurangi satu lalu mengembalikan x</td>
        </tr>
        <tr>
            <td>x--;</td>
            <td>mengembalikan x lalu mengurangi 1</td>
        </tr>
    </table>
    <hr>
    <h3 class="my-3">Operator logika</h3>
    <table class="table table-bordered">
        <tr>
            <th>Operator</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>and</td>
            <td>jika keduanya true maka akan jalan</td>
        </tr>
        <tr>
            <td>or</td>
            <td>Jika salah satu true maka akan jalan</td>
        </tr>
        <tr>
            <td>xor</td>
            <td>jika salah satu true tapi tidak keduanya maka akan jalam</td>
        </tr>
        <tr>
            <td>&&</td>
            <td>Jika keduanya true maka akan jalan</td>
        </tr>
        <tr>
            <td>||</td>
            <td>Jika salah satunya true maka akan jalan</td>
        </tr>
        <tr>
            <td>!</td>
            <td>Jika false akan jalan</td>
        </tr>
    </table>
        <a href="{{ url('/belajar/php/math') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/php/if-else') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
