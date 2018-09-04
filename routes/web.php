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
    return view('home');
});

route::get('calendari', ['as' => 'calendari', 'uses' => 'CalendarisController@index']);
Route::get('modalcalendar', function () {
    return view('menus.includes.modalCalendar');
});