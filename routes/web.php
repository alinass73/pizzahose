<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Middleware\Authenticate;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\OrderController;
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

Route::get('/pizza', [App\Http\Controllers\PizzaController::class,'index'])->name('pizzas.index');
Route::get('/pizza/create', [App\Http\Controllers\PizzaController::class,'create'])->name('pizza.create');
Route::get('/pizza/{id}', [App\Http\Controllers\PizzaController::class,'show'])->name('pizza.show');
Route::post('/pizza',[App\Http\Controllers\PizzaController::class,'store'])->name('pizza.store');
Route::delete('/pizza/{id}',[App\Http\Controllers\PizzaController::class,'destroy'])->name('pizza.destroy');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


