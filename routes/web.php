<?php

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('addtour','tourcontroller@load');

Route::get('adddeparturedate','departuredatecontroller@load');
Route::get('addadmin','admincontroller@load');
Route::get('applicationform','applicationformcontroller@load');
Route::get('viewprofit','viewprofitcontroller@load');
