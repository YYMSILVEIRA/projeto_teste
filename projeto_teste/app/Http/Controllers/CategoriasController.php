<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function cadastrar_categoria()
    {
        return view('categorias.cadastrar');
    }
    public function listar_categoria()
    {
        return view('categorias.listar');
    }
    public function editar_categoria($id){
        return view('categorias.editar', ['id' => $id]);
    }
}
