<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function cekJawaban(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;
        if ($cek1 == "align") {
            # code...
            $cek1 = "benar";
        }else {
            # code...
            $cek1 = "";
        }
        if ($cek2 == "style") {
            # code...
            $cek2 = "benar";
        }else {
            # code...
            $cek2 = "";
        }
        if ($cek3 == "block") {
            # code...
            $cek3 = "benar";
        }else {
            # code...
            $cek3 = "";
        }
        if ($cek4 == "flex") {
            # code...
            $cek4 = "benar";
        }else {
            # code...
            $cek4 = "";
        }
        if ($cek5 == "display") {
            # code...
            $cek5 = "benar";
        }else {
            # code...
            $cek5 = "";
        }
        $cek = $cek1."-".$cek2."-".$cek3."-".$cek4."-".$cek5;
        $rep = str_replace('-', ' ', $cek);
        $cekjawab = str_word_count($rep);
        return view('latihan.html.html-basic',compact('cekjawab'));
    }
}
