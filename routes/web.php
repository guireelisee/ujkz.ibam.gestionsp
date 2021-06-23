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

Route::get('/', 'DashboardController@index');
Route::resource('dashboard', DashboardController::class);
Route::resource('bordereau', BordereauController::class);
Route::post('bordereau/print', 'BordereauController@print')->name('bordereau.print');

Route::resource('ampliation', AmpliationController::class);

Route::resource('filiere', FiliereController::class);

Route::resource('salle', SalleController::class);

Route::resource('types', TypesController::class);
Route::resource('type_personnel', TypePersonnelController::class);
Route::resource('type_reunion', TypeReunionController::class);
Route::resource('type_mission', TypeMissionController::class);
