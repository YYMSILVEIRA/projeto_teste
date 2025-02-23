<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function inicio()
    {
        return view('inicio'); // Certifique-se de ter a view 'home.blade.php' em 'resources/views'
    }
}
