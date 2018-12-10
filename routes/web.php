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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/uplate', 'UplateController@index')->name('uplate');
Route::get('/uplate/{uplatio_id}', 'UplateController@uplata')->name('uplate.uplata');
Route::get('/nova/uplata', 'UplateController@create')->name('uplate.nova');

Route::get('/isplate', 'IsplateController@index')->name('isplate');
Route::get('/isplate/{potrosio_id}', 'IsplateController@trosak')->name('isplate.trosak');
Route::get('/isplate/mjesec/{mjesec}', 'IsplateController@mjesec')->name('isplate.mjesec');
Route::get('/nova/isplata', 'IsplateController@create')->name('isplate.nova');




Route::post('/uplate', 'UplateController@store')->name('uplate.store');
Route::post('/isplate', 'IsplateController@store')->name('isplate.store');
