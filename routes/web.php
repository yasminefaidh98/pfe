<?php
use App\Http\Controllers\std_matierepremiereController;
  

use Illuminate\Support\Facades\Route;

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
Route::resource('/articles', std_matierepremiereController::class);
Route::resource('/show', std_matierepremiereController::class);
Route::resource('/edit', std_matierepremiereController::class);
Route::resource('/destroy', std_matierepremiereController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
