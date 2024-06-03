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
 Route::get('/ajouter',[BienController::class,'ajouter_bien']);