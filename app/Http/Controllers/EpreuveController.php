<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Epreuve;
use App\Models\Examen;

class EpreuveController extends Controller
{
    //
    public function lesEpreuves()
    {
        $epreuves = Epreuve::all();
        return view('backoffice/gestionepreuve',compact('epreuves'));
    }

    public function trouverEpreuve($id)
    {
        $e = Epreuve::find($id);
        return view('epreuve',compact('e, exams'));
    }

    public function trouverEpreuveModifier($id)
    {
        $e = Epreuve::find($id);
        $exams = Examen::all();
        return view('backoffice/modifepreuve',compact('e', 'exams'));
    }

    public function creerEpreuve(Request $request)
    {
        $e = new Epreuve;
        $e->matiere=$request->matiere;
        $e->description=$request->description;
        $e->debutepreuve=$request->debutepreuve;
        $e->finepreuve=$request->finepreuve;
        $e->miseenloge=$request->miseenloge;
        $e->created_at=time();
        $e->save();
        return redirect()->route('epreuvesliste');
    }

    public function supprimerEpreuve($id)
    {
        Epreuve::destroy($id);
        return redirect()->route('epreuvesliste');
    }

    public function modifierEpreuve(Request $request){
        $epreuve = Epreuve::find($request->id);
        $epreuve->matiere=$request->matiere;
        $epreuve->description=$request->description;
        $epreuve->debutepreuve=$request->debutepreuve;
        $epreuve->finepreuve=$request->finepreuve;
        $epreuve->miseenloge=$request->miseenloge;
        $epreuve->updated_at=$request->datemodif;

        $epreuve->save();
        return redirect()->route('epreuvesliste');
    }
}
