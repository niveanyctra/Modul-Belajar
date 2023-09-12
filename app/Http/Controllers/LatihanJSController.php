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
        $cek6 = $request->jawaban6;
        $cek7 = $request->jawaban7;
        $cek8 = $request->jawaban8;
        $cek9 = $request->jawaban9;
        $cek10 = $request->jawaban10;

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
        if ($cek6 == "color") {
            # code...
            $cek6 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek6 = "Jawaban Anda Salah, Jawaban Yang Benar : color";
        }
        if ($cek7 == "12pt") {
            # code...
            $cek7 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek7 = "Jawaban Anda Salah, Jawaban Yang Benar : 12pt";
        }
        if ($cek8 == "href") {
            # code...
            $cek8 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek8 = "Jawaban Anda Salah, Jawaban Yang Benar : href";
        }
        if ($cek9 == "h6") {
            # code...
            $cek9 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek9 = "Jawaban Anda Salah, Jawaban Yang Benar : h6";
        }
        if ($cek10 == "blue") {
            # code...
            $cek10 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek10 = "Jawaban Anda Salah, Jawaban Yang Benar : blue";
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        $jawab6 = $request->jawaban6;
        $jawab7 = $request->jawaban7;
        $jawab8 = $request->jawaban8;
        $jawab9 = $request->jawaban9;
        $jawab10 = $request->jawaban10;
        return view('latihan.js.hasil.hasil-basic',compact('cek1','cek2','cek3','cek4','cek5','cek6','cek7','cek8','cek9','cek10',
        'jawab1','jawab2','jawab3','jawab4','jawab5','jawab6','jawab7','jawab8','jawab9','jawab10'));
        // $cek = $cek1."-".$cek2."-".$cek3."-".$cek4."-".$cek5;
        // $rep = str_replace('-', ' ', $cek);
        // $cekjawab = str_word_count($rep);

    }
    public function cekJSMenengah(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;
        $cek6 = $request->jawaban6;
        $cek7 = $request->jawaban7;
        $cek8 = $request->jawaban8;
        $cek9 = $request->jawaban9;
        $cek10 = $request->jawaban10;

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
        if ($cek6 == "color") {
            # code...
            $cek6 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek6 = "Jawaban Anda Salah, Jawaban Yang Benar : color";
        }
        if ($cek7 == "12pt") {
            # code...
            $cek7 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek7 = "Jawaban Anda Salah, Jawaban Yang Benar : 12pt";
        }
        if ($cek8 == "href") {
            # code...
            $cek8 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek8 = "Jawaban Anda Salah, Jawaban Yang Benar : href";
        }
        if ($cek9 == "h6") {
            # code...
            $cek9 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek9 = "Jawaban Anda Salah, Jawaban Yang Benar : h6";
        }
        if ($cek10 == "blue") {
            # code...
            $cek10 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek10 = "Jawaban Anda Salah, Jawaban Yang Benar : blue";
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        $jawab6 = $request->jawaban6;
        $jawab7 = $request->jawaban7;
        $jawab8 = $request->jawaban8;
        $jawab9 = $request->jawaban9;
        $jawab10 = $request->jawaban10;
        return view('latihan.js.hasil.hasil-menengah',compact('cek1','cek2','cek3','cek4','cek5','cek6','cek7','cek8','cek9','cek10',
        'jawab1','jawab2','jawab3','jawab4','jawab5','jawab6','jawab7','jawab8','jawab9','jawab10'));
    }
    public function cekJSLanjutan(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;
        $cek6 = $request->jawaban6;
        $cek7 = $request->jawaban7;
        $cek8 = $request->jawaban8;
        $cek9 = $request->jawaban9;
        $cek10 = $request->jawaban10;

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
        if ($cek6 == "color") {
            # code...
            $cek6 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek6 = "Jawaban Anda Salah, Jawaban Yang Benar : color";
        }
        if ($cek7 == "12pt") {
            # code...
            $cek7 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek7 = "Jawaban Anda Salah, Jawaban Yang Benar : 12pt";
        }
        if ($cek8 == "href") {
            # code...
            $cek8 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek8 = "Jawaban Anda Salah, Jawaban Yang Benar : href";
        }
        if ($cek9 == "h6") {
            # code...
            $cek9 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek9 = "Jawaban Anda Salah, Jawaban Yang Benar : h6";
        }
        if ($cek10 == "blue") {
            # code...
            $cek10 = "Jawaban Anda Benar";
        }else {
            # code...
            $cek10 = "Jawaban Anda Salah, Jawaban Yang Benar : blue";
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        $jawab6 = $request->jawaban6;
        $jawab7 = $request->jawaban7;
        $jawab8 = $request->jawaban8;
        $jawab9 = $request->jawaban9;
        $jawab10 = $request->jawaban10;
        return view('latihan.js.hasil.hasil-lanjutan',compact('cek1','cek2','cek3','cek4','cek5','cek6','cek7','cek8','cek9','cek10',
        'jawab1','jawab2','jawab3','jawab4','jawab5','jawab6','jawab7','jawab8','jawab9','jawab10'));
    }
}
