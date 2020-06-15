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
    return view('welcome');
});

Route::get('getFormForInsertTeams' , 'TeamController@getTeamName' );

Route::post('insertTeams', 'TeamController@insertTeam');

Route::get('getFormForInsertMatchDetails' , 'TeamController@getMatchDetails');

Route::post('insertMatchDetails', 'TeamController@insertDetailsOfMatches');