<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanSQLController extends Controller
{
    public function cekSQLBasic(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;

        if ($cek1 = "SELECT") {

            $cek1 = "Jawaban Anda Benar";
        }else {

            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : SELECT";
        }
        if ($cek2 = "nama") {

            $cek2 = "Jawaban Anda Benar";
        }else {

            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : nama";
        }
        if ($cek3 = "WHERE") {

            $cek3 = "Jawaban Anda Benar";
        }else {

            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : WHERE";
        }
        if ($cek4 = "WHERE NOT") {

            $cek4 = "Jawaban Anda Benar";
        }else {

            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : WHERE NOT";
        }
        if ($cek5 = "ORDER BY") {

            $cek5 = "Jawaban Anda Benar";
        }else {

            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : ORDER BY";
        }

        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        return view('latihan.sql.hasil.hasil-basic',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));


    }
    public function cekSQLMenengah(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;


        if ($cek1 = "INSERT INTO") {

            $cek1 = "Jawaban Anda Benar";
        }else {

            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : INSERT INTO";
        }
        if ($cek2 = "UPDATE") {

            $cek2 = "Jawaban Anda Benar";
        }else {

            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : UPDATE";
        }
        if ($cek3 = "DELETE") {

            $cek3 = "Jawaban Anda Benar";
        }else {

            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : DELETE";
        }
        if ($cek4 = "WHERE") {

            $cek4 = "Jawaban Anda Benar";
        }else {

            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : WHERE";
        }
        if ($cek5 = "max(nilai)") {

            $cek5 = "Jawaban Anda Benar";
        }else {

            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : max(nilai)";
        }

        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;
        return view('latihan.sql.hasil.hasil-menengah',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));
    }
    public function cekSQLLanjutan(Request $request){
        $cek1 = $request->jawaban1;
        $cek2 = $request->jawaban2;
        $cek3 = $request->jawaban3;
        $cek4 = $request->jawaban4;
        $cek5 = $request->jawaban5;


        if ($cek1 = "avg(nilai)") {

            $cek1 = "Jawaban Anda Benar";
        }else {

            $cek1 = "Jawaban Anda Salah, Jawaban Yang Benar : avg(nilai)";
        }
        if ($cek2 = "BETWEEN") {

            $cek2 = "Jawaban Anda Benar";
        }else {

            $cek2 = "Jawaban Anda Salah, Jawaban Yang Benar : BETWEEN";
        }
        if ($cek3 == ">") {

            $cek3 = "Jawaban Anda Benar";
        }else {

            $cek3 = "Jawaban Anda Salah, Jawaban Yang Benar : >";
        }
        if ($cek4 = "a%") {

            $cek4 = "Jawaban Anda Benar";
        }else {

            $cek4 = "Jawaban Anda Salah, Jawaban Yang Benar : a%";
        }
        if ($cek5 = "INNER JOIN") {

            $cek5 = "Jawaban Anda Benar";
        }else {

            $cek5 = "Jawaban Anda Salah, Jawaban Yang Benar : INNER JOIN";
        }

        $jawab1 = $request->jawaban1;
        $jawab2 = $request->jawaban2;
        $jawab3 = $request->jawaban3;
        $jawab4 = $request->jawaban4;
        $jawab5 = $request->jawaban5;

        return view('latihan.sql.hasil.hasil-lanjutan',compact('cek1','cek2','cek3','cek4','cek5',
        'jawab1','jawab2','jawab3','jawab4','jawab5'));
    }
}
