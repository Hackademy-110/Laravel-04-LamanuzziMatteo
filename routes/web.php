<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DBcontroller;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ShowYourselfController;

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
//routing generico
Route::get('/', [PublicController::class, 'Home'])->name('welcome');
Route::get('/chi-siamo',[PublicController::class, 'Personale'])->name('personale');
Route::get('/contattaci',[PublicController::class,'Contatti'])->name('contatta');
Route::get('/grazie',[PublicController::class,'Grazie'])->name('grazie');
Route::get('/login',[PublicController::class,'Login'])->name('auth');
//post invio mail e invio dati sul DB
Route::post('/invia-mail',[PublicController::class,'InviaMail'])->name('invioForm');
//routing immagini
Route::get('/chi-sei',[DBcontroller::class,'image'])->name('chiSei');
Route::post('/invia-img',[ShowYourselfController::class,''])->name('image.submit');
//form iscrizione
Route::post('/iscrizione',[UsersController::class,'store'])->name('user.add');