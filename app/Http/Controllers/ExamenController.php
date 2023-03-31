<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Examen;
use App\Models\Salle;
use App\Models\Formation;
use App\Models\Epreuve;

class ExamenController extends Controller
{
    //
    public function lesExamens()
    {
        $ex = Examen::all();
        return view('backoffice.gestionexamen',compact('ex'));
    }

    public function unExamen($id)
    {
        $ex = Examen::find($id);
        $formation = Formation::all();
        $epreuve = Epreuve::all();
        $salle = Salle::all();
        return view('backoffice.modifexamen',compact('ex', 'formation', 'epreuve', 'salle'));
    }

    public function creerExamen(Request $request)
    {
        $examen = new Examen;
        $examen->repere=$request->repere;
        $examen->dictionnaire=$request->dictionnaire;
        $examen->calculatrice = $request->calculatrice;
        $examen->estdematerialise=$request->estdematerialise;
        $examen->commentaire=$request->commentaire;
        $examen->regle=$request->regle;
        $examen->date = $request->date;
        $examen->created_at= time();
        $examen->formation_id=$request->formation_id;
        $examen->epreuve_id = $request->epreuve_id;
        $examen->salle_id=$request->salle_id;
        $examen->save();
        return redirect()->route('examensliste');
    }

    public function supprimerExamen($id)
    {
        Examen::destroy($id);
        return redirect()->route('examensliste');
    }

    public function modifierExamen(Request $request){
        $examen = Examen::find($request->id);
        $examen->repere=$request->repere;
        $examen->dictionnaire=$request->dictionnaire;
        $examen->calculatrice = $request->calculatrice;
        $examen->estdematerialise=$request->estdematerialise;
        $examen->commentaire=$request->commentaire;
        $examen->regle=$request->regle;
        $examen->date = $request->date;
        $examen->updated_at=time();
        $examen->formation_id=$request->formation_id;
        $examen->epreuve_id = $request->epreuve_id;
        $examen->salle_id=$request->salle_id;

        $examen->save();
        return redirect()->route('examensliste');
    }

    public function creationExamen(){
        $formation = Formation::all();
        $epreuve = Epreuve::all();
        $salle = Salle::all();
        return view('backoffice.creationexamen', compact('formation', 'epreuve', 'salle'));
    }
}
