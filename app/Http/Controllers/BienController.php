<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;

class BienController extends Controller
{
   public function liste(){
    $biens = Bien::all();
    return view('biens.liste',compact('biens'));
   }
   public function ajouter_bien ( ){
    return view('biens/ajouter') ;
  }
}
