<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function Calculate(Request $request)
    {   
        // $pars = $request->all();
        $type = $request->a;
        $bil1 = $request->b1;
        $bil2 = $request->b2;

        if ($type === 'tambah') {
            $hasil = $bil1 + $bil2;
            $res = [
                "bilangan 1" => $bil1, 
                "bilangan 2" => $bil2, 
                "Hasil" => $hasil, 
            ];
            return response()->json($res);
        }
        if ($type === 'kurang') {
            $hasil = $bil1 - $bil2;
            $res = [
                "bilangan 1" => $bil1, 
                "bilangan 2" => $bil2, 
                "Hasil" => $hasil, 
            ];
            return response()->json($res);
        }
        if ($type === 'bagi') {
            $hasil = $bil1 / $bil2;
            $res = [
                "bilangan 1" => $bil1, 
                "bilangan 2" => $bil2, 
                "Hasil" => $hasil, 
            ];
            return response()->json($res);
        }
        if ($type === 'kali') {
            $hasil = $bil1 * $bil2;
            $res = [
                "bilangan 1" => $bil1, 
                "bilangan 2" => $bil2, 
                "Hasil" => $hasil, 
            ];
            return response()->json($res);
        }
        else {
            return response()->json(['ERROR']);
        }
    }
}