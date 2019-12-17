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
    return view('index');
});

Auth::routes();

// Route::get('/eventpage', 'EventpageController@index' );

Route::get('/register',function() {
    return view('auth.register');
});

Route::get('/home', 'HomeController@index')->name('home');

/* Route::post('/profile/store','ProfileController@store')->name('profile.store');
 */
Route::get('/search','SearchController@index')->name('search');
Route::get('/search/results', 'SearchController@search')->name('search.search');
// Route::delete('/proflie/{id}', 'ThemeController@destroy')->name('theme.destroy');
Route::resource('/events','EventController');
Route::resource('/theme','ThemeController');
Route::delete('/theme', 'ThemeController@destroy')->name('theme_destroy');
Route::resource('/profile','ProfileController')->middleware('auth');
Route::delete('/profile/downgradeContributeur', 'ProfileController@destroy')->name('contributeur_destroy');
Route::post('/profile/makeContributeur', 'UpgradeContributeurController@update')->name('upgrade_contributeur');

Route::post('/event/participate/{event}', 'ParticipationController@update')->name('participate')->middleware('auth');
Route::post('/event/participatePas/{event}', 'ParticipationController@destroy')->name('participatePas')->middleware('auth');

Route::post('/event/note/{event}', 'NoteController@store')->name('review')->middleware('auth');
