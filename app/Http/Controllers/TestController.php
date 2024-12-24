<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function zeina()
    {
        return view('index');
    }

    public function printName($name = 'Zeina')
    {
        dd("Hello $name from printName function!");
    }
}
