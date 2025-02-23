<?php
//Chamando os controllers
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\CategoriasController;
//Chamando os controllers

use Illuminate\Support\Facades\Route;

//Páginas públicas
Route::get('/', [HomeController::class, 'inicio'])->name('home');
//Páginas públicas



//Páginas que somente usuários logados podem acessar
Route::middleware(['auth'])->group(function () {
    Route::get('/todos_cursos', [CursosController::class, 'todos_cursos'])->name('todos_cursos');
    Route::get('/categorias/create', [CursosController::class, 'cadastrar_categoria'])->name('cadastrar_categoria');
});
//Páginas que somente usuários logados podem acessar



//Páginas que somente o adm deve acessar
Route::get('/admin', [UsuarioController::class, 'adm'])->name('painel_adm')->middleware('auth', 'permission:adm');
//Páginas com permissões especiais


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
