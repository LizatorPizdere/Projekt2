<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfilController;
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

//Route::get('/',[WelcomeController::class, 'index']) ->name('welcome'); //ovaj index je funkcija unutar welocmeControllera, vraca view.
//Route::view('add','addMember');
Route::post('add', [ProfilController::class, 'addData']);
//Route::get('/',[WelcomeController::class, 'index']) ->name('welcome');
Route::get('add',[ProfilController::class, 'index']) ->name('addMember');