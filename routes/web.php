<?php
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EsperaController;
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
Route::get('/create', [UsuarioController::class, 'create'])->name('usuario.create');
Route::get('/edit/', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::put('/update/{id}', [UsuarioController::class, 'update'])->name('usuario.update');
Route::get('/show/{id}', [UsuarioController::class, 'show'])->name('usuario.show');


Route::get('/e1', [EsperaController::class, 'index'])->name('espera.index');
Route::get('/list', [EsperaController::class, 'list'])->name('espera.list');
Route::get('/nurselist', [EsperaController::class, 'nurselist'])->name('espera.nurselist');
Route::post('/store', [EsperaController::class, 'store'])->name('espera.store');
Route::get('/show/{id}', [EsperaController::class, 'show'])->name('espera.show');
Route::delete('/destroy/{id}', [EsperaController::class, 'destroy'])->name('espera.destroy');

