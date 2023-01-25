<?php

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
// ==========ROUTES RDV===============
Route::get('RDV',
[RendezvousController::class, 'index'])->name('RDV.index');

/* Zoom RDV*/
Route::get('/RDV/{id}/', 
[RendezvousController::class, 'show'])->name('RDV.show');

/* Modifier RDV */
Route::get('/RDV/{id}/modifier/',
[RendezvousController::class, 'edit'])->name('RDV.edit');

/*Enregistrer RDV*/
Route::patch('/RDV/{id}/modifier', 
[RendezvousController::class, 'update'])->name('RDV.update');

/* Delete RDV */
Route::delete('/RDV/{id}', 
[RendezvousController::class, 'destroy'])->name('RDV.destroy');

/*Afficher le formulaire de création d'un RDV*/ 
Route::get('RDV/create',
[RendezvousController::class, 'create'])->name('RDV.create');

/* Traiter les champs du formulaire RDV */
Route::post('RDV',
[RendezvousController::class, 'store'])->name('RDV.store');
