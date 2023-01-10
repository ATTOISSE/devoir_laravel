<?php

use App\Http\Controllers\PhaseController;
use App\Http\Controllers\projetController;
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

Route::get('projet.index',[projetController::class,'index'])->name('projets');
Route::get('projet.affichage',[projetController::class,'affichage'])->name('affichage');
Route::post('projet.store',[projetController::class,'store'])->name('projet');
Route::get('detail.{detail}',[projetController::class,'detail'])->name('detail');
Route::get('phase.index',[PhaseController::class,'index'])->name('phase');
Route::post('phase.store',[PhaseController::class,'store'])->name('phases');
Route::get('phase.affichage',[PhaseController::class,'affichage'])->name('phaffichage');

