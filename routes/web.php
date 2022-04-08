<?php

use App\Http\Controllers\CarteVisite;
use App\Http\Controllers\ProjetController;
use Illuminate\Support\Facades\Route;
use App\Models\Etudiant;
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

Route::get('/', function(){
    return view('bienvenue');
});

Route::resource('/form-inscription', ProjetController::class);
Route::get('carte-visite', function(){
    $posts=Etudiant::all();
    return view('carte-visite', ['posts'=>$posts]);
});
Route::get('show/{nom}','App\Http\Controllers\ProjetController@show')->name('show');