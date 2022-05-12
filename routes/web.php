<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Crudcontroller;

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
Route::get('/',[Crudcontroller::class,'index'])->name('pagina-principal');
Route::post('novo',[Crudcontroller::class,'store'])->name('novo');
Route::get('{id}/update',[Crudcontroller::class,'update'])->name('update');
Route::put('/{id}',[Crudcontroller::class,'edit'])->name('edit');
Route::get('/{id}/delete',[Crudcontroller::class,'delete'])->name('delete');







