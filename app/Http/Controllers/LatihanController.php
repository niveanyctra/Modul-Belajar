<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function cekJawaban(Request $request){
        $cek = $request->inputan;
        return view('latihan.html.index',compact('cek'));
    }
}
