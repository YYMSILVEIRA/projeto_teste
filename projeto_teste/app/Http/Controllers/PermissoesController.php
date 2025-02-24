<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissoesController extends Controller
{
    public function cadastrar_permissoes()
    {
        return view('permissoes.cadastrar');
    }
    public function listar_permissoes()
    {
        return view('permissoes.listar');
    }
    public function editar_permissoes($id){
        return view('permissoes.editar', ['id' => $id]);
    }
}
