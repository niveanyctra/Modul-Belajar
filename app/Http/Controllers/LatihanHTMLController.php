<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanHTMLController extends Controller
{
    public function cekHTMLBasic(Request $request){
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
        if ($cek2 == "h1") {

            $cek2 = "Jawaban Anda Benar";
        }else {

            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : h1";
        }
        if ($cek3 == "<br>") {

            $cek3 = "Jawaban Anda Benar";
        }else {

            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : <br>";
        }
        if ($cek4 == "<hr>") {

            $cek4 = "Jawaban Anda Benar";
        }else {

            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : <hr>";
        }
        if ($cek5 == "h6") {

            $cek5 = "Jawaban Anda Benar";
        }else {

            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : h6";
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;

        return view('latihan.html.hasil.hasil-basic',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));

    }
    public function cekHTMLMenengah(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;

        if ($cek1 == "i") {

            $cek1 = "Jawaban Anda Benar";
        }else if($cek1 == "em"){
            $cek1 = "Jawaban Anda Benar";
        }else {

            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : i atau em";
        }
        if ($cek2 == "image/x-icon") {

            $cek2 = "Jawaban Anda Benar";
        }else {

            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : image/x-icon";
        }
        if ($cek3 == "icon") {

            $cek3 = "Jawaban Anda Benar";
        }else {

            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : icon";
        }
        if ($cek4 == "height") {

            $cek4 = "Jawaban Anda Benar";
        }else {

            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : height";
        }
        if ($cek5 == "width") {

            $cek5 = "Jawaban Anda Benar";
        }else {

            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : width";
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        return view('latihan.html.hasil.hasil-menengah',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));
    }
    public function cekHTMLLanjutan(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;

        if ($cek1 == 'type="A"') {

            $cek1 = "Jawaban Anda Benar";
        }else {

            $cek1 = 'Jawaban Anda Salah, Jawaban Yang Benar : type="A"';
        }
        if ($cek2 == 'width="300px"') {

            $cek2 = "Jawaban Anda Benar";
        }else {

            $cek2 = 'Jawaban Anda Salah, Jawaban Yang Benar : width="300px"';
        }
        if ($cek3 == 'input type="button" value="OK"') {

            $cek3 = "Jawaban Anda Benar";
        }else {

            $cek3 = 'Jawaban Anda Salah, Jawaban Yang Benar : input type="button" value="OK"';
        }
        if ($cek4 == 'input type="radio" name="hobi"') {

            $cek4 = "Jawaban Anda Benar";
        }else {

            $cek4 = 'Jawaban Anda Salah, Jawaban Yang Benar : input type="radio" name="hobi"';
        }
        if ($cek5 == "disabled") {

            $cek5 = "Jawaban Anda Benar";
        }else {

            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : disabled";
        }
        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        return view('latihan.html.hasil.hasil-lanjutan',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));
    }
}
