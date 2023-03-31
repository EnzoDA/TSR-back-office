<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// API EPREUVES
Route::get('/api/Epreuves', [ApiController::class,'allEpreuves'])->name("allEpreuves");
Route::get('/api/epreuve/{id}', [ApiController::class,'epreuve'])->name("epreuve");
Route::get('/api/Epreuves/date/{date}', [ApiController::class,'epreuveBydate'])->name("epreuveBydate");

// API EXAMENS
Route::get('/api/Examens', [ApiController::class,'allExamens'])->name("allExamens");
Route::get('/api/examen/{id}', [ApiController::class,'examen'])->name("examen");

// API FORMATIONS
Route::get('/api/Formations', [ApiController::class,'allFormations'])->name("allFormations");
Route::get('/api/formation/{id}', [ApiController::class,'formation'])->name("formation");
Route::get('/api/Formations/date/{date}', [ApiController::class,'formationBydate'])->name("formationBydate");

// API SALLES
Route::get('/api/Salles', [ApiController::class,'allSalles'])->name("allSalles");
Route::get('/api/salle/{id}', [ApiController::class,'salle'])->name("salle");
Route::get('/api/salles/date/{date}',[ApiController::class,'salleBydate'])->name("salleBydate");


