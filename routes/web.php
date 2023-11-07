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

//select all epreuves
Route::get('/epreuve',[EpreuveController::class,'output'])->name('epreuve');
//select all matiere
Route::get('/matiere',[MatController::class,'output'])->name('matiere');

//add epreuve
Route::get('/insertEpreuve',[EpreuveController::class,'show'])->name('insertEpreuve');
Route::post('/insertEpreuve',[EpreuveController::class,'insert'])->name('insertEpreuve');
//add mateire
Route::get('/insertMatiere',[MatController::class,'show'])->name('insertMatiere');
Route::post('/insertMatiere',[MatController::class,'insert'])->name('insertMatiere');

