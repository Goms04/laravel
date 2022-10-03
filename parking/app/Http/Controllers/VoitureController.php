<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;

class VoitureController extends Controller
{
    //affichage de la page voiture
    public function display(){
        $voiture = voiture::all();
        return view('voiture', compact('voiture'));
    }

    //to update the voiture entity's tuple
    public function update(Request $request, $id){
        $voiture = $request->validate([
            'marque'=> 'required',
            'model'=> 'required',
            'couleur'=> 'required',
            'immatriculation'=> 'required',
            'disponible'=> 'required',
        ]);

        $voit = voiture::find($id);
        $voit->update($voiture);

        return redirect()->route('voiture')->with('message',' The car updated successfully.');

    }

    //the delete controller
    public function delete($id){
        $voit = voiture::find($id);
        $voit->destroy($id);
        return redirect()->route('voiture')->with('messae','Voiture supprimée avec succès');
    }

}
