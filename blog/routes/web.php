<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PermisosController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsuariosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function (){
    //rutas de empleado
    Route::get('/empleados', [EmpleadosController::class, 'index'])->name('empleados.index');
    Route::get('/empleados/create', [EmpleadosController::class, 'create'])->name('empleados.create');
    Route::post('/empleados/create', [EmpleadosController::class, 'store'])->name('empleados.store');
    Route::get('/empleados/edit/{id}', [EmpleadosController::class, 'edit'])->name('empleados.edit');
    Route::patch('/empleados/edit/{id}', [EmpleadosController::class, 'update'])->name('empleados.update');
    Route::delete('/empleados/delete/{id}', [EmpleadosController::class, 'destroy'])->name('empleados.delete');

    //rutas de departamentos
    Route::get('/departamentos', [DepartamentosController::class, 'index'])->name('departamentos.index');
    Route::get('/departamentos/create', [DepartamentosController::class, 'create'])->name('departamentos.create');
    Route::post('/departamentos/create', [DepartamentosController::class, 'store'])->name('departamentos.store');
    Route::get('/departamentos/edit/{id}', [DepartamentosController::class, 'edit'])->name('departamentos.edit');
    Route::patch('/departamentos/edit/{id}', [DepartamentosController::class, 'update'])->name('departamentos.update');
    Route::delete('/departamentos/delete/{id}', [DepartamentosController::class, 'destroy'])->name('departamentos.delete');
 
    //rutas de empresa
    Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas.index');
    Route::get('/empresas/create', [EmpresaController::class, 'create'])->name('empresas.create');
    Route::post('/empresas/create', [EmpresaController::class, 'store'])->name('empresas.store');
    Route::get('/empresas/edit/{id}', [EmpresaController::class, 'edit'])->name('empresas.edit');
    Route::patch('/empresas/edit/{id}', [EmpresaController::class, 'update'])->name('empresas.update');
    Route::delete('/empresas/delete/{id}', [EmpresaController::class, 'destroy'])->name('empresas.delete');

    //rutas de permisos
    Route::get('/permisos', [PermisosController::class, 'index'])->name('permisos.index');
    Route::get('/permisos/create', [PermisosController::class, 'create'])->name('permisos.create');
    Route::post('/permisos/create', [PermisosController::class, 'store'])->name('permisos.store');
    Route::get('/permisos/edit/{id}', [PermisosController::class, 'edit'])->name('permisos.edit');
    Route::patch('/permisos/edit/{id}', [PermisosController::class, 'update'])->name('permisos.update');
    Route::delete('/permisos/delete/{id}', [PermisosController::class, 'destroy'])->name('permisos.delete');

    //rutas de roles
    Route::get('/roles', [RolesController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RolesController::class, 'create'])->name('roles.create');
    Route::post('/roles/create', [RolesController::class, 'store'])->name('roles.store');
    Route::get('/roles/edit/{id}', [RolesController::class, 'edit'])->name('roles.edit');
    Route::patch('/roles/edit/{id}', [RolesController::class, 'update'])->name('roles.update');
    Route::delete('/roles/delete/{id}', [RolesController::class, 'destroy'])->name('roles.delete');

    //usuarios
    Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
    Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create');
    Route::post('/usuarios/create', [UsuariosController::class, 'store'])->name('usuarios.store');
    Route::get('/usuarios/edit/{id}', [UsuariosController::class, 'edit'])->name('usuarios.edit');
    Route::patch('/usuarios/edit/{id}', [UsuariosController::class, 'update'])->name('usuarios.update');
    Route::delete('/usuarios/delete/{id}', [UsuariosController::class, 'destroy'])->name('usuarios.delete');
    
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
