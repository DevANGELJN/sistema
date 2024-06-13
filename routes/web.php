<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArchivosController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', function () {return view('admin'); });

Route::get('/',[AdminController::class, 'index'])->name('admin.index')->middleware('auth');

Route::get('/admin/usuarios',[UsuarioController::class, 'index'])->name('usuarios.index')->middleware('auth');
Route::get('/admin/usuarios/create',[UsuarioController::class, 'create'])->name('usuarios.create')->middleware('auth');
Route::post('/admin/usuarios',[UsuarioController::class, 'store'])->name('usuarios.store')->middleware('auth');
Route::get('/admin/usuarios/{id}',[UsuarioController::class, 'show'])->name('usuarios.show')->middleware('auth');
Route::get('/admin/usuarios/{id}/edit',[UsuarioController::class, 'edit'])->name('usuarios.edit')->middleware('auth');
Route::put('/admin/usuarios/{id}',[UsuarioController::class, 'update'])->name('usuarios.update')->middleware('auth');
Route::delete('/admin/usuarios/{id}',[UsuarioController::class, 'destroy'])->name('usuarios.destroy')->middleware('auth');

Route::get('/admin/archivos',[ArchivosController::class, 'index'])->name('archivos.index')->middleware('auth');