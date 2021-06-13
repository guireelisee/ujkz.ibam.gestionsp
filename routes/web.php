<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BordereauController;


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

Route::get('/', [DashboardController::class, 'index'])->name('index');

/**
 * Routes pour Bordereau
 */
Route::get('/bordereau', 'BordereauController@index')->name('bordereau.index');
Route::get('/bordereau/print', 'BordereauController@printBordereau')->name('bordereau.printBordereau');
Route::post('/bordereau/saisie', 'BordereauController@store')->name('bordereau.store');


/**
 * Routes pour civlite
 */
Route::resource('<civilite>
idCivilite', CiviliteController::class);

