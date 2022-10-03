<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\StationnementController;
use App\http\Controllers\PersonneController;
use App\http\Controllers\VoitureController;
use App\http\Controllers\AuthentificationController;


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

Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

/* routes concernants le stationnement */
Route::get('/stationnement', StationnementController::class . '@display')->name('stationnement');
Route::post('/stationnement/create', StationnementController::class . '@create')->name('stationnement.create');
Route::post('/stationnement/update/{id}', StationnementController::class . '@update')->name('stationnement.update');
Route::post('/stationnement/delete/{id}', StationnementController::class . '@delete')->name('stationnement.delete');


/*route uniquement des personnes  */
route::get('/personne', personneController::class . '@display')->name('personne');
route::post('/personne/update/{id}', personneController::class . '@update')->name('personne.update');
route::post('/personne/delete/{id}', personneController::class . '@delete')->name('personne.delete');


/*routes des voiture  */
route::get('/voiture', voitureController::class . '@display')->name('voiture');
route::post('/voiture/update/{id}', voitureController::class . '@update')->name('voiture.update');
route::post('/voiture/detele/{id}', voitureController::class . '@delete')->name('voiture.delete');


route::get('/', AuthentificationController::class .'@display')->name('login');
route::get('/register', AuthentificationController::class .'@displayRegister')->name('register');
route::post('/register/added', AuthentificationController::class .'@register')->name('register.create');
route::post('/login',AuthentificationController::class . '@login')->name('login.validate');
route::get('/logout', AuthentificationController::class . '@logout')->name('logout');


