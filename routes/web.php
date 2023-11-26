<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EpreuveController;
use App\Http\Controllers\MatController;
use App\Http\Controllers\ContactController;



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
    return view('epreuve');
});

//select all epreuves

Route::resource('epreuve', EpreuveController::class);
Route::resource('matiere', MatController::class);

//Route::get('/epreuve',[EpreuveController::class,'output'])->name('epreuve');
//select all matiere
//Route::get('/matiere',[MatController::class,'output'])->name('matiere');

//add epreuve
//Route::get('/insertEpreuve',[EpreuveController::class,'show'])->name('insertEpreuve');
//Route::post('/insertEpreuve',[EpreuveController::class,'insert'])->name('insertEpreuve');
//add mateire
//Route::get('/insertMatiere',[MatController::class,'show'])->name('insertMatiere');
//Route::post('/insertMatiere',[MatController::class,'insert'])->name('insertMatiere');
//update epreuve

//Route::get('/update-epreuve/{id}',[EpreuveController::class,'update']);
//Route::post('/updateEpreuve',[EpreuveController::class,'updateTraitement'])->name('updateEpreuve');
// delete epreuve
//Route::get('/update-epreuve/{id}',[EpreuveController::class,'destroy']);

//resource route 
Route::resource('contacts', ContactController::class);
