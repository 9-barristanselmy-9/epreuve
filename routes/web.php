<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EpreuveController;
use App\Http\Controllers\MatController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('vue1');
    
});


Route::get('/epreuve',[EpreuveController::class,'output'])->name('epreuve');
Route::get('/epreuveAdd',[EpreuveController::class,'store'])->name('epreuve');

Route::get('/matiere',[MatController::class,'output'])->name('matiere');
Route::get('/matiereAdd',[MatController::class,'store'])->name('matiere');

Route::post('/epreuve',[EpreuveController::class,'insert'])->name('InsertEpreuve');

