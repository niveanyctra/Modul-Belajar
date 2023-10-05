<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanJSController extends Controller
{
    public function cekJSBasic(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;

        if ($cek1 == "sekolah") {

            $cek1 = "Jawaban Anda Benar";
        }else {

            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : sekolah";
        }
        if ($cek2 == "SMKN 1 Cirebon") {

            $cek2 = "Jawaban Anda Benar";
        }else {

            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : SMKN 1 Cirebon";
        }
        if ($cek3 == "+") {

            $cek3 = "Jawaban Anda Benar";
        }else {

            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : +";
        }
        if ($cek4 == "*") {

            $cek4 = "Jawaban Anda Benar";
        }else {

            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : *";
        }
        if ($cek5 == "string") {

            $cek5 = "Jawaban Anda Benar";
        }else {

            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : string";
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;

        return view('latihan.js.hasil.hasil-basic',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));


    }
    public function cekJSMenengah(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;

        if ($cek1 == "sekolah()") {

            $cek1 = "Jawaban Anda Benar";
        }else {

            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : sekolah()";
        }
        if ($cek2 == "SMKN 1 Cirebon") {

            $cek2 = "Jawaban Anda Benar";
        }else {

            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : SMKN 1 Cirebon";
        }
        if ($cek3 == "onclick") {

            $cek3 = "Jawaban Anda Benar";
        }else {

            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : onclick";
        }
        if ($cek4 == "sekolah()") {

            $cek4 = "Jawaban Anda Benar";
        }else {

            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : sekolah()";
        }
        if ($cek5 == "onclick") {

            $cek5 = "Jawaban Anda Benar";
        }else {

            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : onclick";
        }

        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        return view('latihan.js.hasil.hasil-menengah',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));
    }
    public function cekJSLanjutan(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;

        if ($cek1 == "toUpperCase()") {

            $cek1 = "Jawaban Anda Benar";
        }else {

            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : toUpperCase()";
        }
        if ($cek2 == "toLowerCase()") {

            $cek2 = "Jawaban Anda Benar";
        }else {

            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : toLowerCase()";
        }
        if ($cek3 == "strReplace") {

            $cek3 = "Jawaban Anda Benar";
        }else {

            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : strReplace";
        }
        if ($cek4 == "x > y" || "x>y" || "x >y" || "x> y") {

            $cek4 = "Jawaban Anda Benar";
        }else {

            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : x > y";
        }
        if ($cek5 == "x != y" || "x!=y" || "x !=y" || "x!= y") {

            $cek5 = "Jawaban Anda Benar";
        }else {

            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : x != y";
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        return view('latihan.js.hasil.hasil-lanjutan',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));
    }
}
