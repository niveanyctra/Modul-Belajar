<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanPHPController extends Controller
{
    public function cekPHPBasic(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;

        if ($cek1 == "echo") {

            $cek1 = "Jawaban Anda Benar";
        }else {

            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : echo";
        }
        if ($cek2 == "<?php") {

            $cek2 = "Jawaban Anda Benar";
        }else {

            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : <?php";
        }
        if ($cek3 == '$sekolah') {

            $cek3 = "Jawaban Anda Benar";
        }else {

            $cek3 = 'Jawaban Anda Salah, Jawaban Yang Benar : $sekolah';
        }
        if ($cek4 == ";") {

            $cek4 = "Jawaban Anda Benar";
        }else {

            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : ';'";
        }
        if ($cek5 == "strlen") {

            $cek5 = "Jawaban Anda Benar";
        }else {

            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : strlen";
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        return view('latihan.php.hasil.hasil-basic',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));


    }
    public function cekPHPMenengah(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;

        if ($cek1 == "str_replace") {

            $cek1 = "Jawaban Anda Benar";
        }else {

            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : str_replace";
        }
        if ($cek2 == "*") {

            $cek2 = "Jawaban Anda Benar";
        }else {

            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : *";
        }
        if ($cek3 == "if") {

            $cek3 = "Jawaban Anda Benar";
        }else {

            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : if";
        }
        if ($cek4 == '$warna') {

            $cek4 = "Jawaban Anda Benar";
        }else {

            $cek4 = 'Jawaban Anda Salah, Jawaban Yang Benar : $warna';
        }
        if ($cek5 == "while") {

            $cek5 = "Jawaban Anda Benar";
        }else {

            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : while";
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        return view('latihan.php.hasil.hasil-menengah',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));
    }
    public function cekPHPLanjutan(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;

        if ($cek1 == "foreach") {

            $cek1 = "Jawaban Anda Benar";
        }else {

            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : foreach";
        }
        if ($cek2 == '$_GET["nama"]') {

            $cek2 = "Jawaban Anda Benar";
        }else {

            $cek2 = 'Jawaban Anda Salah, Jawaban Yang Benar : $_GET["nama"]';
        }
        if ($cek3 == "!=") {

            $cek3 = "Jawaban Anda Benar";
        }else {

            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : !=";
        }
        if ($cek4 == "default:") {

            $cek4 = "Jawaban Anda Benar";
        }else {

            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : default:";
        }
        if ($cek5 == '$_POST["nama_kota"]') {

            $cek5 = "Jawaban Anda Benar";
        }else {

            $cek5 = 'Jawaban Anda Salah, Jawaban Yang Benar : $_POST["nama_kota"]';
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        return view('latihan.php.hasil.hasil-lanjutan',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));
    }
}
