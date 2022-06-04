<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CrudController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/people',[Crudcontroller::class,'store'])->name('criar');
Route::put('/people/{id}',[Crudcontroller::class,'update'])->name('atualizar');
Route::get('/people',[Crudcontroller::class,'index'])->name('listarTodos');       
Route::get('/people/{id}',[Crudcontroller::class,'show'])->name('listar');
Route::delete('/people/{id}',[Crudcontroller::class,'destroy'])->name('deletar');





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
