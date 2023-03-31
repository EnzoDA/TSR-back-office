<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salle;

class SalleController extends Controller
{
    //
    public function lesSalles()
    {
        $salles = Salle::all();
        return view('backoffice/gestionsalle',compact('salles'));
    }

    public function uneSalle($id)
    {
        $s = Salle::find($id);
        return view('salle',compact('s'));
    }
    public function creationSalle()
    {
        $salles = Salle::all();
        return view('backoffice/creationsalle',compact('salles'));
    }
    public function creerSalle(Request $request)
    {
        $s = new Salle;
        $s->nom=$request->nom;
        $s->save();
        return redirect()->route('salleliste');
    }
    public function editSalle($id)
    {
        $salle= Salle::find($id);
        return view('backoffice/modifsalle',compact('salle'));
    }
    public function modifierSalle(Request $request,$id)
    {
        $s=Salle::find($id);
        $s->nom=$request->nom;
        $s->save();
        return redirect()->route('salleliste');
    }

    public function supprimerSalle($id)
    {
        $salle=Salle::destroy($id);
        return redirect()->route('salleliste');
    }
}
