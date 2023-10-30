<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FabriController;
use App\Models\Fabri;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




//etudiants.

Route::get('/form', function () {
    return view('enregistrement');
});
Route::post('/formu', [FabriController::class, 'create'])->name('register2');

Route::get('/authen', [FabriController::class, 'authen2'])->name('authen2');



Route::post('/traitement_connexion', [FabriController::class, 'login'])->name('login');
Route::get('/logout', [FabriController::class, 'logout'])->name('deconnexion');



Route::get('/espace2', function () {
    return view('espace_etudiant');
});
Route::get('/reservation', function () {
    return view('reservation');
});
Route::post('/commande', [FabriController::class, 'reservation'])->name('reservation');

Route::get('/reserve', [FabriController::class, 'statut'])->name('statut_reservation');



//admin.

Route::get('/register', function () {
    return view('admin.inscription');
});
Route::post('/formulaire', [FabriController::class, 'create1'])->name('register1');

Route::get('/login', [FabriController::class, 'formlogin'])->name('formlogin');

Route::post('/logintraitement', [FabriController::class, 'login1'])->name('login1');
Route::get('/deconnexion', [FabriController::class, 'logout1'])->name('deconnexion1');
Route::get('/espace1', function () {
    return view('admin.espace_admin');
});

Route::get('/access', [FabriController::class, 'reservation1'])->name('statut_reservation1');
Route::get('/confirmation/{id}', [FabriController::class, 'approuver'])->name('confirmation1');
Route::get('/annulation/{id}', [FabriController::class, 'annuler'])->name('annulation1');

Route::get('/gestion_reservation', [FabriController::class, 'reservation2'])->name('statut_reservation2');
Route::get('/confirmation2/{id}', [FabriController::class, 'approuver2'])->name('confirmation2');
Route::get('/annulation2/{id}', [FabriController::class, 'annuler2'])->name('annulation2');