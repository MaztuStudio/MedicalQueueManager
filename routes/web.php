<?php
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [UsuarioController::class, 'index'])->name('usuario.index');
Route::get('/list', [UsuarioController::class, 'list'])->name('usuario.list');
Route::get('/create', [UsuarioController::class, 'create'])->name('usuario.create');
Route::post('/store', [UsuarioController::class, 'store'])->name('usuario.store');
Route::get('/edit/', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::put('/update/{id}', [UsuarioController::class, 'update'])->name('usuario.update');
Route::get('/show/{id}', [UsuarioController::class, 'show'])->name('usuario.show');
Route::delete('/destroy/{id}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');

