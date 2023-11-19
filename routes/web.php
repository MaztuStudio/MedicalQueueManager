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
Route::get('/', [UsuarioController::class, 'index'])->name('personas.index');
Route::get('/create', [UsuarioController::class, 'create'])->name('personas.create');
Route::post('/store', [UsuarioController::class, 'store'])->name('personas.store');
Route::get('/edit', [UsuarioController::class, 'edit'])->name('personas.edit');
Route::put('/update/{id}', [UsuarioController::class, 'update'])->name('personas.update');
Route::get('/show/{id}', [UsuarioController::class, 'show'])->name('personas.show');
Route::delete('/destroy/{id}', [UsuarioController::class, 'destroy'])->name('personas.destroy');

