<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function inicio()
    {
        return view('inicio'); 
    }
    public function contato()
    {
        return view('contato'); 
    }
    public function sobre()
    {
        return view('sobre'); 
    }
}
