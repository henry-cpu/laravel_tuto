<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artikelController extends Controller
{
    public function showArtikel($n)
    {
        return view('artikel1')->with('number', $n);
    }
}
