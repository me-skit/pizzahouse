<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PizzasController;

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

//Route::get('/pizzas', 'PizzasController@index');
//Route::get('/pizzas/{id}', 'PizzasController@show');
Route::get('/pizzas', [PizzasController::class, 'index'])->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', [PizzasController::class, 'create'])->name('pizzas.create');
Route::post('/pizzas', [PizzasController::class, 'store'])->name('pizzas.store');
Route::get('/pizzas/{id}', [PizzasController::class, 'show'])->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', [PizzasController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');

Auth::routes([
  'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
