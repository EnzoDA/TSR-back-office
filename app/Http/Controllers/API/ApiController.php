<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Epreuve;
use App\Models\Examen;
use App\Models\Formation;
use App\Models\Salle;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // API Epreuves
     //Récuperer toutes les épreuves
    public function allEpreuves()
    {
        $epreuves = Epreuve::all();
        return response()->json($epreuves);
    }
    //Récuprer une seule épreuve
    public function epreuve(Request $request)
    {
        $epreuve = Epreuve::find($request->id);
        return response()->json($epreuve);
    }
    public function epreuveBydate($date)
    {
       $epreuvesDate=Examen::where('date','LIKE','%'.$date.'%')->get();
       $epreuves=$epreuvesDate->load('epreuve')->pluck('epreuve')->unique();
       return response()->json($epreuves);
    }

        // API Examens
     public function allExamens()
     {
         $examens = Examen::all();
         return response()->json($examens);
     }
     public function examen(Request $request)
     {
         $examen = Examen::find($request->id);
         return response()->json($examen);
     }


          // API Formations
          public function allFormations()
          {
              $formations = Formation::all();
              return response()->json($formations);
          }
          public function formation(Request $request)
          {
              $formation = Formation::find($request->id);
              return response()->json($formation);
          }
          public function formationBydate($date)
          {
             $formationsDate=Examen::where('date','LIKE','%'.$date.'%')->get();
             $formations=$formationsDate->load('formation')->pluck('formation')->unique();
             return response()->json($formations);
          }


         // API Salle
         public function allSalles()
         {
             $salles = Salle::all();
             return response()->json($salles);
         }
         public function salle(Request $request)
         {
             $salle = Salle::find($request->id);
             return response()->json($salle);
         }

         public function salleBydate($date)
         {
            $sallesDate=Examen::where('date','LIKE','%'.$date.'%')->get();
            $salles=$sallesDate->load('salle')->pluck('salle')->unique();
            return response()->json($salles);
         }



    //

    public function index()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
