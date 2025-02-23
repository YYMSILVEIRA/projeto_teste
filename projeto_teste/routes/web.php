<?php
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursosController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/todos_cursos', [CursosController::class, 'todos_cursos'])->name('todos_cursos');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/'); // Redireciona para a tela de inicio
})->name('logout');

Route::get('/', [HomeController::class, 'inicio'])->name('home');

Route::get('/usuario/login', [UsuarioController::class, 'login'])->name('login');

Route::post('/usuario/valida_login', [UsuarioController::class, 'valida_login'])->name('validar_login');

Route::get('/usuario/create', [UsuarioController::class, 'create'])->name('usuario.create');

Route::post('/usuario/store', [UsuarioController::class, 'store'])->name('usuario.store');

