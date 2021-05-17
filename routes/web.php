<?php
use App\Http\Controllers\std_matierepremiereController;
use App\Http\Controllers\std_familleController;
use App\Http\Controllers\std_unitesController;
use App\Http\Controllers\std_agentController;
use App\Http\Controllers\std_documentController;






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




Route::get('/dash', function () {
    return view('dash');
});


Route::get('/', function () {
    return view('welcome');
});



Auth::routes();
//articles

Route::resource('/articles', std_matierepremiereController::class);
Route::resource('/show', std_matierepremiereController::class);
//Route::resource('/edit', std_matierepremiereController::class);
Route::resource('/destroy', std_matierepremiereController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/edit',[std_matierepremiereController::class,'update']);

//categories
Route::resource('/categories', std_familleController::class);
Route::resource('/destroy', std_familleController::class);
Route::post('/edit',[std_familleController::class,'update']);

// unites
Route::resource('/unites',std_unitesController::class);
Route::resource('/destroy', std_unitesController::class);
Route::post('/edit',[std_unitesController::class,'update']);

//ventes 
Route::resource('/ventes',std_agentController::class);
Route::resource('/destroy', std_agentController::class);
Route::post('/edit',[std_agentController::class,'update']);

//documents


Route::resource('/documents',std_documentController::class);
Route::resource('/destroy', std_documentController::class);
Route::post('/edit',[std_documentController::class,'update']);
Route::get('/ajouterf', function () {
    return view('ajouterf');
});





