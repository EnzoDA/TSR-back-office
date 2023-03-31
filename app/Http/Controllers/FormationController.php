<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Epreuve;
use App\Models\Examen;

class FormationController extends Controller
{
    //
    public function lesFormations()
    {
        $f = Formation::all();
        return view('backoffice/gestionformation',compact('f'));
    }

    public function trouverFormationModifer($id){
        $formation = Formation::find($id);
        return view('backoffice.modifformation', compact('formation'));
    }

    public function uneFormation($id)
    {
        $f = Formation::find($id);
        return view('formation',compact('f'));
    }

    public function modifierFormation(Request $request){
        $formation = Formation::find($request->id);
        $formation->nom=$request->nom;
        $formation->code=$request->code;
        $formation->serie=$request->serie;
        $formation->updated_at=time();
        $formation->academie=$request->academie;
        $formation->save();
        return redirect()->route('formationsliste');
    }

    public function creerFormation(Request $request)
    {
        $f = new Formation;
        $f->nom = $request->nom;
        $f->code = $request->code;
        $f->serie = $request->serie;
        $f->academie = $request->academie;
        $f->created_at = time();
        $f->save();
        return redirect()->route('formationsliste');
    }

    public function supprimerFormation($id)
    {
        Formation::destroy($id);
        return redirect()->route('formationsliste');
    }

    public function creationFormation(){
        $examen = Examen::all();
        $epreuve = Epreuve::all();
        return view('backoffice.creationformation', compact('examen', 'epreuve'));
    }
}
