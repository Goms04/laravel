<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Personne;
use App\Models\Voiture;
use App\Models\Stationnement;


class StationnementController extends Controller
{
    //fonction d'afffichage
    public function display(){
        $stationnement = stationnement::all();

        //here I create the link with the stationnnement's name route
        return view('stationnement', compact('stationnement'));
    }

    //controller d'ajout a la base de données
    public function create(Request $request){
        $request->validate([
            'nom' => 'string',

        ]);

        //Here I just create the person in order to recycle his id
        $personne=Personne::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_naissance' => $request->date_naissance,
            'sexe' => $request->sexe,
            'email' => $request->email,
        ]);
        //je crée la voiture pour pouvoir récupérer son id. tha's why I put this in the variable $voiture
        $voiture=voiture::create([
            'marque' => $request->marque,
            'model' => $request->model,
            'couleur' => $request->couleur,
            'immatriculation' => $request->immatriculation,
            'disponible' => $request->disponible,
        ]);

        //he is the expplit creation on the stationnement tuple
        stationnement::create([
            'heure' => $request->heure,
            'recupere' => $request->recupere,
            'personne_id' => $personne->id,
            'voiture_id' => $voiture->id,
        ]);

        return redirect()->route('stationnement')->with('message','Stationnement created successfully.');

    }

    //la fonction consistant a supprimer une entité de la base de données
    public function delete($id){
        $stat=stationnement::find($id);
        $stat->destroy($id);
        return redirect()->route('stationnement')->with('message', 'Entité supprimée avec succès');
    }



    public function update(Request $request, $id)
    {
        // dd($request->all());
        $stationnement = $request->validate([
            'heure' => 'required',
            'recupere' => 'required',
        ]);

        $st = Stationnement::find($id);
// dd($st);ù

//here is the modification of voiture column (disponible) when we turn recupere on 1 which is "true"
        if($request->recupere == 1){
            Voiture::whereId($st->voiture_id)->update([
                'disponible' => 0
            ]
            );
        }
        $st->update($stationnement);
        return redirect()->route('stationnement')->with('success','Stationnement updated successfully.');
    }

}
