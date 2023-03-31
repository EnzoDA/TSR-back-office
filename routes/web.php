<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EpreuveController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\AlerteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('backoffice/dashboard');
    })->name('dashboard');
});

Route::get('backoffice/dashboardtemplate', function () {
    return view('backoffice/dashboardtemplate');
});

Route::get('backoffice/gestionepreuve', [EpreuveController::class, 'lesEpreuves'])->middleware('auth', 'web')->name('epreuvesliste');

Route::post('backoffice/modifepreuve/{id}', [EpreuveController::class, 'trouverEpreuveModifier'])->middleware('auth', 'web')->name('modifepreuve');

Route::post('backoffice/modifepreuveencours', [EpreuveController::class, 'modifierEpreuve'])->middleware('auth', 'web')->name('modifepreuveencours');

Route::post('backoffice/supprimerepreuve/{id}', [EpreuveController::class, 'supprimerEpreuve'])->middleware('auth', 'web')->name('supprimerepreuve');

Route::get('backoffice/creationepreuve', function () {
    return view('backoffice/creationepreuve');
})->middleware('auth', 'web')->name('creationepreuve');

Route::post('backoffice/creationepreuveencours', [EpreuveController::class, 'creerEpreuve'])->middleware('auth', 'web')->name('creerepreuve');

Route::get('backoffice/gestionsalle', [SalleController::class, 'lesSalles'])->middleware('auth', 'web')->name('salleliste');

Route::get('backoffice/gestionexamen', [ExamenController::class, 'lesExamens'])->middleware('auth', 'web')->name('examensliste');

Route::post('backoffice/modifexamen/{id}', [ExamenController::class, 'unExamen'])->middleware('auth', 'web')->name('modificationexamen');

Route::post('backoffice/modifexamenencours', [ExamenController::class, 'modifierExamen'])->middleware('auth', 'web')->name('modifexamenencours');

Route::post('backoffice/supprimerexamen/{id}', [ExamenController::class, 'supprimerExamen'])->middleware('auth', 'web')->name('supprimerexamen');

Route::get('backoffice/creationexamen', [ExamenController::class, 'creationExamen'])->middleware('auth', 'web')->name('creationexamen');

Route::post('backoffice/creationexamenencours', [ExamenController::class, 'creerExamen'])->middleware('auth', 'web')->name('creerexamen');

Route::get('backoffice/gestionalerte', [AlerteController::class, 'lesAlertes'])->middleware('auth', 'web')->name('alertesliste');

Route::post('backoffice/modifalerte/{id}', [AlerteController::class, 'trouverAlerteModifer'])->middleware('auth', 'web')->name('modificationalerte');

Route::post('backoffice/modifalerteencours', [AlerteController::class, 'modifierAlerte'])->middleware('auth', 'web')->name('modifalerteencours');

Route::get('backoffice/creationalerte', [AlerteController::class, 'creationAlerte'])->middleware('auth', 'web')->name('creationalerte');

Route::post('backoffice/creationalerteencours', [AlerteController::class, 'creerAlerte'])->middleware('auth', 'web')->name('creeralerte');

Route::post('backoffice/modifsalle/{id}', [SalleController::class, 'editSalle'])->middleware('auth', 'web')->name('modifsalle');

Route::post('backoffice/updatesalle/{id}', [SalleController::class, 'modifierSalle'])->middleware('auth', 'web')->name('salleupdate');

Route::get('backoffice/creationsalle', [SalleController::class, 'creationSalle'])->middleware('auth', 'web')->name('creationsalle');

Route::post('backoffice/creesalle', [SalleController::class, 'creerSalle'])->middleware('auth', 'web')->name('creesalle');

Route::delete('backoffice/deletesalle/{id}', [SalleController::class, 'supprimerSalle'])->middleware('auth', 'web')->name('salledelete');

Route::get('backoffice/gestionformation', [FormationController::class, 'lesFormations'])->middleware('auth', 'web')->name('formationsliste');

Route::post('backoffice/modifformation/{id}', [FormationController::class, 'trouverFormationModifer'])->middleware('auth', 'web')->name('modificationformation');

Route::post('backoffice/modifformationencours', [FormationController::class, 'modifierFormation'])->middleware('auth', 'web')->name('modifformationeencours');

Route::post('backoffice/supprimerformation/{id}', [FormationController::class, 'supprimerFormation'])->middleware('auth', 'web')->name('supprimerformation');

Route::get('backoffice/creationformation', [FormationController::class, 'creationFormation'])->middleware('auth', 'web')->name('creationformation');

Route::post('backoffice/creationformationcours', [FormationController::class, 'creerFormation'])->middleware('auth', 'web')->name('creerformation');

Route::get('storage/app/{chemin}', [AlerteController::class, 'voirPdf'])->middleware('auth', 'web')->name('afficherPdf');

Route::post('backoffice/supprimeralerte/{id}', [AlerteController::class, 'supprimerAlerte'])->middleware('auth', 'web')->name('supprimeralerte');

