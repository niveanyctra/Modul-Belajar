<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanCSSController extends Controller
{
    public function cekCSSBasic(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;

        if ($cek1 == "p") {
            # code...
            $cek1 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : p";
        }
        if ($cek2 == ".tanda") {
            # code...
            $cek2 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : .tanda";
        }
        if ($cek3 == "#tanda") {
            # code...
            $cek3 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : #tanda";
        }
        if ($cek4 == "p, h1") {
            # code...
            $cek4 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : p, h1";
        }
        if ($cek5 == ":") {
            # code...
            $cek5 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : ':'";
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        return view('latihan.css.hasil.hasil-basic',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));
        // $cek = $cek1."-".$cek2."-".$cek3."-".$cek4."-".$cek5;
        // $rep = str_replace('-', ' ', $cek);
        // $cekjawab = str_word_count($rep);

    }
    public function cekCSSMenengah(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;

        if ($cek1 == "background-color") {
            # code...
            $cek1 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : background-color";
        }
        if ($cek2 == 'url("gunung.png")') {
            # code...
            $cek2 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek2 = 'Jawaban Anda Salah, Jawaban Yang Benar : url("gunung.png")';
        }
        if ($cek3 == "padding-top") {
            # code...
            $cek3 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : padding-top";
        }
        if ($cek4 == "width") {
            # code...
            $cek4 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : width";
        }
        if ($cek5 == "none") {
            # code...
            $cek5 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : none";
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        return view('latihan.css.hasil.hasil-menengah',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));
    }
    public function cekCSSLanjutan(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;

        if ($cek1 == "20px 40px") {
            # code...
            $cek1 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : 20px 40px";
        }
        if ($cek2 == "12px 21px 15px 20px") {
            # code...
            $cek2 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : 12px 21px 15px 20px";
        }
        if ($cek3 == "repeat-y") {
            # code...
            $cek3 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : repeat-y";
        }
        if ($cek4 == "2px solid black") {
            # code...
            $cek4 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : 2px solid black";
        }
        if ($cek5 == "border-radius") {
            # code...
            $cek5 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : border-radius";
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        return view('latihan.css.hasil.hasil-lanjutan',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));
    }
}
