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
Route::get('/', 'HomeViewController@index');



//Route::get('/tournaments/{tournament}', 'TournamentsController@show');


//Route::get('/', function () {
//    $tournaments = App\Tournaments::all();
//    return view('index', ['tournaments' => $tournaments]);
//});
//
//Route::get('/tournaments/{tournaments}', function ($id) {
//    $tournament = App\Tournaments::find($id);
//    return view('show', ['tournament' => $tournament]);
//});


