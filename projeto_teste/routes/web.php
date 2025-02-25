<?php
//Chamando os controllers
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\PermissoesController;
use App\Http\Controllers\DashboardController;
//Chamando os controllers

use Illuminate\Support\Facades\Route;

//Páginas públicas
Route::get('/', [HomeController::class, 'inicio'])->name('home');
Route::get('/contato', [HomeController::class, 'contato'])->name('contato');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('sobre');
//Páginas públicas



//Páginas que somente usuários logados podem acessar
Route::middleware(['auth'])->group(function () {
    Route::get('/todos_cursos', [CursosController::class, 'todos_cursos'])->name('todos_cursos');
    
});
//Páginas que somente usuários logados podem acessar



//Páginas que somente o adm deve acessar
Route::get('/admin', [UsuarioController::class, 'adm'])->name('painel_adm')->middleware('auth', 'permission:adm');
Route::get('/categorias/cadastrar', [CategoriasController::class, 'cadastrar_categoria'])->name('cadastrar_categoria')->middleware('auth', 'permission:adm');
Route::get('/categorias/listar', [CategoriasController::class, 'listar_categoria'])->name('listar_categoria')->middleware('auth', 'permission:adm');
Route::get('/categorias/editar', [CategoriasController::class, 'editar_categoria'])->name('editar_categoria')->middleware('auth', 'permission:adm');

Route::get('/permissoes/cadastrar', [PermissoesController::class, 'cadastrar_permissoes'])->name('cadastrar_permissao')->middleware('auth', 'permission:adm');
Route::get('/permissoes/listar', [PermissoesController::class, 'listar_permissoes'])->name('listar_permissao')->middleware('auth', 'permission:adm');
Route::get('/permissoes/editar', [PermissoesController::class, 'editar_permissoes'])->name('editar_permissao')->middleware('auth', 'permission:adm');

Route::get('/usuario/cadastrar', [UsuarioController::class, 'cadastrar_usuario'])->name('cadastrar_usuario')->middleware('auth', 'permission:adm');
Route::get('/usuario/listar', [UsuarioController::class, 'listar_usuario'])->name('listar_usuarios')->middleware('auth', 'permission:adm');

//Páginas com permissões especiais


//Dashboard do vendedor
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth', 'permission:vendedor');
//Dashboard do vendedor






//Rotas do fluxo de usuários
Route::get('/usuario/login', [UsuarioController::class, 'login'])->name('login');
Route::post('/usuario/valida_login', [UsuarioController::class, 'valida_login'])->name('validar_login');
Route::get('/usuario/create', [UsuarioController::class, 'create'])->name('usuario.create');
Route::post('/usuario/store', [UsuarioController::class, 'store'])->name('usuario.store');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/'); // Redireciona para a tela de inicio
})->name('logout');
//Rotas do fluxo de usuários
