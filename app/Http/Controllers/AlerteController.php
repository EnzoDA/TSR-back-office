<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alerte;
use App\Models\Examen;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Support\Str;



class AlerteController extends Controller
{
    public function lesAlertes()
    {
        $alertes = Alerte::all();
        return view('backoffice.gestionalerte',compact('alertes'));
    }

    public function uneAlerte($id)
    {
        $a = Alerte::find($id);
        return view('salle',compact('a'));
    }


    public function creationAlerte(){
        $examen = Examen::all();
        return view('backoffice.creationalerte',compact('examen'));
    }

    public function creerAlerte(Request $request)
    {
        $alerte = new Alerte;
        $alerte->titre=$request->titre;
        $alerte->description=$request->description;
        $alerte->terminee=$request->terminee;
        $alerte->created_at=time();
        $alerte->examen_id=$request->examenid;

        $pdfFile = $request->file('pdf');
        $chemin = $pdfFile->store('pdfalertestorage');

        $url = Storage::url($chemin);

        $alerte->pdf = $url;

        $alerte->save();
        return redirect()->route('alertesliste');
    }


    public function supprimerAlerte($id)
    {
        Alerte::destroy($id);
        return redirect()->route('alertesliste');
    }

    public function trouverAlerteModifer($id){
        $alerte = Alerte::find($id);
        $examen = Examen::all();
        return view('backoffice.modifalerte', compact('alerte', 'examen'));
    }

    public function modifierAlerte(Request $request){
        $alerte = Alerte::find($request->id);
        $alerte->updated_at=time();
        $alerte->titre=$request->titre;
        $alerte->description=$request->description;
        $alerte->terminee=$request->terminee;
        $alerte->examen_id=$request->examenid;

        $fichierpdf = $request->pdf;
        $destination_path = 'public/storage';
        $fichier_name = $fichierpdf->getClientOriginalName();
        $path = $fichierpdf->storeAs($destination_path, $fichier_name);

        $alerte->pdf = $path;

        $alerte->save();
        return redirect()->route('alertesliste');
    }

    public function voirPdf($chemin){
        $url = url('app/'. $chemin);
        return redirect()->$url;
    }
}
