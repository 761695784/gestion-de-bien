<?php

use App\Http\Controllers\BienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/liste', function () {
//     return view('biens.liste');
// });


Route::get('/liste', [ BienController:: class,'liste' ]);



// la route pour ajouter un bien
 Route::get('/ajouter',[BienController::class,'ajouter']);

 Route::POST('/ajouter', [BienController::class, 'ajouter_bien_traitement']);

 Route::get('/modifier_bien/{id}', [BienController::class, 'modifier_bien']);

 Route::POST('/modifier/traitement', [BienController::class, 'modifier_traitement']);

 Route::get('/supprimer_bien/{id}', [BienController::class, 'supprimer_bien']);

 Route::get('/details/{id}', [BienController::class, 'details'])->name('details');