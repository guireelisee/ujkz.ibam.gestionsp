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

Route::resource('dashboard', DashboardController::class);
Route::resource('bordereau', BordereauController::class);
Route::post('bordereau/print', 'BordereauController@print')->name('bordereau.print');
