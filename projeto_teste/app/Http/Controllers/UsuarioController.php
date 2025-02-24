<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Importa o modelo do usuário (caso esteja usando um)
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    // Método para exibir o formulário
    public function create()
    {
        return view('usuario.create');
    }

    public function login()
    {
        return view('usuario.login');
    }
    public function adm(){
        return view('usuario.admin');
    }
    public function cadastrar_usuario()
    {
        return view('usuario.cadastrar');
    }
    public function listar_usuario()
    {
        return view('usuario.listar');
    }
    public function editar_usuario($id){
        return view('usuario.editar', ['id' => $id]);
    }
    public function valida_login(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Tentativa de autenticação
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            // Caso as credenciais sejam válidas
            return redirect()->route('todos_cursos')->with('success', 'Login realizado com sucesso!');
        } else {
            // Caso as credenciais sejam inválidas
            return redirect()->route('login')->withErrors(['email' => 'Credenciais inválidas.']);
        }
    }

    // Método para processar os dados do formulário
    public function store(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'nome' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed', // Confirmação da senha
        ]);

        // Salva os dados no banco
        User::create([
            'name' => $request->nome,
            'email' => $request->email,
            'password' => bcrypt($request->password,) // Defina a senha padrão ou gere dinamicamente
        ]);

        // Redireciona com uma mensagem de sucesso
        return redirect()->route('usuario.create')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
