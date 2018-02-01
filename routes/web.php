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

Route::get('/', 'PageController@index');
Route::get('/index', 'PageController@index');
Route::get('/partners', 'PageController@partners');
Route::get('/contact', 'PageController@contact');

Route::get('/about/tedx-and-ted', 'AboutController@tedxandted');
Route::get('/about/team', 'AboutController@team');

Route::get('/event/schedule', 'EventController@schedule');
Route::get('/event/speakers', 'EventController@speakers');
Route::get('/event/speaker/{name}', 'EventController@speaker');
Route::get('/event/revolution', 'EventController@revolution');

Route::get('/vrijwilliger/registreer', 'VolunteerController@create');
Route::post('/vrijwilliger/registreer', 'VolunteerController@store');
Route::get('/vrijwilliger/UvntFWAvF3r7ksst/export', 'VolunteerController@export');