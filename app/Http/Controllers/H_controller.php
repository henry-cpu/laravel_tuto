<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class H_controller extends Controller
{
    //
    public function show()
    {
        return view('welcome');
    }

    public function viewharold()
    {
        return view('myview');
    }

    public function rechnung()
    {
        return view('myview');
    }

    public function test()
    {

        return 'Hey, my name is henry';

    }

    public function name($name)
    {

        return 'your name is ' . $name;
    }
}



