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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/category_view', 'HomeController@category');
//Route::get('/select_user_type', 'beerlyController@insert_establishment_owner');
//Route::get('/establishment_dashboard', 'establishmentController@dashboard');
//Route::get('/establishment_profile', 'establishmentController@est_profile');
//Route::get('/establishment_promo', 'establishmentController@est_promo');

Route::group(['middleware' => 'auth'], function () {
Route::get('/category_view', 'establishmentController@category');
Route::post('/select_user_type', 'establishmentController@update_owner_type');
Route::post('/select_promoter', 'establishmentController@update_event_promoter');
Route::post('/select_artist', 'establishmentController@update_artist');
Route::get('/establishment_dashboard', 'establishmentController@dashboard');
Route::get('/establishment_profile', 'establishmentController@est_profile');
Route::get('/establishment_promo', 'establishmentController@est_promo');

Route::get('/event_dashboard', 'establishmentController@event_dashboard');
Route::get('/event_profile', 'establishmentController@event_profile');
Route::get('/event_promo', 'establishmentController@event_promo');
});
