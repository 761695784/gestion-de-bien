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
   public function ajouter(){
    return view('biens.ajouter') ;
  }

  public function ajouter_bien_traitement(Request $request){

    $request->validate([
        'image' =>'required',
        'nom' =>'required',
        'categorie'=>'required',
        'adresse'=>'required',
        'DatePubli' =>'required|date',            
        'statut' =>'nullable',
        'description' =>'required',
    ]);

    $bien = new Bien();
    $bien->image= $request->image;
    $bien->nom = $request->nom;
    $bien->categorie= $request->categorie;
    $bien->adresse = $request->adresse;
    $bien->DatePubli=$request->DatePubli;
    $bien->statut = $request->has('statut');
    $bien->description= $request->desription;
    $bien->save();

    return redirect('/ajouter')->with('status', 'bien ajouté avec succès.');
}





























}
