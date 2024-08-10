<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegitigaController extends Controller
{
    public function index()
    {
        return view('segitiga');
    }

    public function hitung(Request $request)
    {
        $alas = $request->alas;
        $tinggi = $request->tinggi;

        $luas = 0.5 * $alas * $tinggi;

        return view('segitiga', compact('luas', 'alas', 'tinggi'));
    }

}
