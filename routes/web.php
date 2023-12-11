<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'Home'])->name('welcome');
Route::get('/chi-siamo',[PublicController::class, 'Personale'])->name('personale');
Route::get('/contattaci',[PublicController::class,'Contatti'])->name('contatta');
Route::get('/grazie',[PublicController::class,'Grazie'])->name('grazie');

Route::post('/invia-mail',[PublicController::class,'InviaMail'])->name('invioForm');