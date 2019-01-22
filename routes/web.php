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

Route::get('/', 'PagesController@index');
Route::get('contact_us', 'PagesController@contactus');
Route::get('upcoming_events', 'PagesController@upcomingEvents');
Auth::routes();

Route::get('/home', 'HomeController@index');
//Route::get('my_events', 'HomeController@myEvents');
Route::get('add_event', 'HomeController@addEvent');
Route::get('add_preferences', 'HomeController@addPreferences');


//Route::get('event_approval', 'EventApprovalController@index');
Route::resource('event_approval', 'EventApprovalController');
Route::resource('request_approval', 'RequestApprovalController');

Route::resource('events','EventController');
Route::resource('preferences','PreferencesController');

