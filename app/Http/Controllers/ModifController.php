<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modif;

class ModifController extends Controller
{
    //
    public function lesModifs()
    {
        $m = Modif::all();
        return view('modif',compact('m'));
    }

    public function uneModif($id)
    {
        $m = Modif::find($id);
        return view('modif',compact('m'));
    }

    public function creerModif(Request $request)
    {
        $m = new Modif;
        $m->name=$request->name;
        $m->description=$request->description;
        $m->save();
        return view('modif');
    }

    public function supprimerModif($id)
    {
        Modif::destroy($id);
        return view('modif');
    }
}
