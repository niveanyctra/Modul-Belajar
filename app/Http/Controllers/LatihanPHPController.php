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
            # code...
            $cek1 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : echo";
        }
        if ($cek2 == "<?php") {
            # code...
            $cek2 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : <?php";
        }
        if ($cek3 == '$sekolah') {
            # code...
            $cek3 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek3 = 'Jawaban Anda Salah, Jawaban Yang Benar : $sekolah';
        }
        if ($cek4 == ";") {
            # code...
            $cek4 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : ';'";
        }
        if ($cek5 == "strlen") {
            # code...
            $cek5 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : strlen";
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        return view('latihan.php.hasil.hasil-basic',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));
        // $cek = $cek1."-".$cek2."-".$cek3."-".$cek4."-".$cek5;
        // $rep = str_replace('-', ' ', $cek);
        // $cekjawab = str_word_count($rep);

    }
    public function cekPHPMenengah(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;

        if ($cek1 == "str_replace") {
            # code...
            $cek1 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : str_replace";
        }
        if ($cek2 == "*") {
            # code...
            $cek2 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : *";
        }
        if ($cek3 == "if") {
            # code...
            $cek3 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : if";
        }
        if ($cek4 == '$warna') {
            # code...
            $cek4 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek4 = 'Jawaban Anda Salah, Jawaban Yang Benar : $warna';
        }
        if ($cek5 == "while") {
            # code...
            $cek5 = "Jawaban Anda Benar";
        }else {
            # code...
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

        if ($cek1 == "center") {
            # code...
            $cek1 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : center";
        }
        if ($cek2 == "right") {
            # code...
            $cek2 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : right";
        }
        if ($cek3 == "src") {
            # code...
            $cek3 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : src";
        }
        if ($cek4 == "height") {
            # code...
            $cek4 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : height";
        }
        if ($cek5 == "width") {
            # code...
            $cek5 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : width";
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
