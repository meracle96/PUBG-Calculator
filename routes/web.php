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

Route::get('/', 'PagesController@index')->name('front.home');

Route::get('/add-tournament', 'PagesController@addTournament')->name('front.addTournament');
Route::post('/add-tournament', 'PagesController@addTournamentPost')->name('front.addTournament.post');

Route::get('/add-teams', 'PagesController@addTeams')->name('front.addTeams');
Route::post('/add-teams', 'PagesController@addTeamsPost')->name('front.addTeams.post');

Route::get('/add-point', 'PagesController@addPoint')->name('front.addPoint');
Route::post('/add-point', 'PagesController@addPointPost')->name('front.addPoint.post');

Route::get('/tournament', 'PagesController@tournaments')->name('front.tournaments');
Route::get('/tournament/{id}', 'PagesController@tournamentsDetail')->name('front.tournamentsDetail');
Route::post('/tournament/{id}', 'PagesController@tournamentsDetailPost')->name('front.tournamentsDetailPost');

Route::get('/result/{id_tournament}/{match}', 'GuestController@perMatch')->name('guest.resultPerMatch');
Route::get('/result/{id_tournament}', 'GuestController@finalScore')->name('guest.finalScore');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
