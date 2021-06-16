<?php

use Illuminate\Support\Facades\Route;


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

/**
 * Routes pour Dashboard
 */

Route::get('/', 'DashboardController@index')->name('index');

/**
 * Routes pour Bordereau
 */
Route::get('/bordereau', 'BordereauController@index')->name('bordereau.index');
Route::get('/bordereau/print', 'BordereauController@printBordereau')->name('bordereau.printBordereau');
Route::post('/bordereau/saisie', 'BordereauController@store')->name('bordereau.store');


/**
 * Routes pour civilite
 */
Route::resource('civilite', CiviliteController::class);

/**
 * Routes pour titres
 */
Route::resource('titres', TitresController::class);
Route::get('titre.destroyV', 'TitresController@destroyV')->name('titre.destroyV');
Route::get('titre.destroyP', 'TitresController@destroyP')->name('titre.destroyP');

/**
 * Routes pour fonctions
 */
Route::resource('fonctions', FonctionsController::class);
Route::get('fonction.destroyV', 'FonctionsController@destroyV')->name('fonction.destroyV');
Route::get('fonction.destroyP', 'FonctionsController@destroyP')->name('fonction.destroyP');

/**
 * Routes pour types (missions, personnels, réunions)
 */
Route::resource('types', TypesController::class);
Route::get('types.destroyP', 'TypesController@destroyP')->name('types.destroyP');
Route::get('types.destroyR', 'TypesController@destroyR')->name('types.destroyR');
Route::get('types.destroyM', 'TypesController@destroyM')->name('types.destroyM');

