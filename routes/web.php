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
Route::post('types/edit_personnel', 'TypesController@edit_personnel')->name('types.edit_personnel');
Route::post('types/edit_reunion', 'TypesController@edit_reunion')->name('types.edit_reunion');
Route::post('types/edit_mission', 'TypesController@edit_mission')->name('types.edit_mission');
