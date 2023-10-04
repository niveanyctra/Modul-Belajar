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

            $cek1 = "Jawaban Anda Benar";
        }else {

            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : p";
        }
        if ($cek2 == ".tanda") {

            $cek2 = "Jawaban Anda Benar";
        }else {

            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : .tanda";
        }
        if ($cek3 == "#tanda") {

            $cek3 = "Jawaban Anda Benar";
        }else {

            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : #tanda";
        }
        if ($cek4 == "p, h1") {

            $cek4 = "Jawaban Anda Benar";
        }else {

            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : p, h1";
        }
        if ($cek5 == ":") {

            $cek5 = "Jawaban Anda Benar";
        }else {

            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : ':'";
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        return view('latihan.css.hasil.hasil-basic',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));


    }
    public function cekCSSMenengah(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;

        if ($cek1 == "background-color") {

            $cek1 = "Jawaban Anda Benar";
        }else {

            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : background-color";
        }
        if ($cek2 == 'url("gunung.png")') {

            $cek2 = "Jawaban Anda Benar";
        }else {

            $cek2 = 'Jawaban Anda Salah, Jawaban Yang Benar : url("gunung.png")';
        }
        if ($cek3 == "padding-top") {

            $cek3 = "Jawaban Anda Benar";
        }else {

            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : padding-top";
        }
        if ($cek4 == "width") {

            $cek4 = "Jawaban Anda Benar";
        }else {

            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : width";
        }
        if ($cek5 == "none") {

            $cek5 = "Jawaban Anda Benar";
        }else {

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

            $cek1 = "Jawaban Anda Benar";
        }else {

            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : 20px 40px";
        }
        if ($cek2 == "12px 21px 15px 20px") {

            $cek2 = "Jawaban Anda Benar";
        }else {

            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : 12px 21px 15px 20px";
        }
        if ($cek3 == "repeat-y") {

            $cek3 = "Jawaban Anda Benar";
        }else {

            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : repeat-y";
        }
        if ($cek4 == "2px solid black") {

            $cek4 = "Jawaban Anda Benar";
        }else {

            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : 2px solid black";
        }
        if ($cek5 == "border-radius") {

            $cek5 = "Jawaban Anda Benar";
        }else {

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
