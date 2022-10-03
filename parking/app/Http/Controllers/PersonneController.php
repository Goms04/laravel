<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personne;

class PersonneController extends Controller
{
    //fonction d'affichage de la page voiture
    public function display(){
        $personne = personne::all();
        return view('personne', compact('personne'));
    }


    //to update a person from the database
    public function update(Request $request, $id){

        $personne = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_naissance' => 'required',
            'email' => 'required',
            'sexe' => 'required',
        ]);

        $pers = personne::find($id);
        $pers->update($personne);
        return redirect()->route('personne')->with('message',' The Person updated successfully.');

    }
    //to deete a person from the database
    public function delete($id){

        $pers = personne::find($id);
        $pers->destroy($id);

        return redirect()->route('personne')->with('message','Entité supprimée avec succès');
    }

}
