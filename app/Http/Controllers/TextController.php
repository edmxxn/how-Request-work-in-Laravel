<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    public function ShowText(String $text, String $a,String $b,String $c,String $d){
        if ($text === 'show') {
            $hasil1 = $a.$b.$c.$d;

            return response()->json(['show' => $hasil1]);
        }
        if ($text === 'reverse') {
            $hasil2 = $d.$c.$b.$a;

            return response()->json(['reverse' => $hasil2]);
        }
        if ($text === 'both') {
            $hasil1 = $a.$b.$c.$d;
            $hasil2 = $d.$c.$b.$a;

            return response()->json(['both' => $hasil1, 'reverse' => $hasil2]);
        }
        else {
            return response()->json(['error' => 'error']);
        }
    }
}