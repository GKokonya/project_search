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

/**Get Home welcome page */
Route::get('/', function () {
    return view('welcome');
});


/**Get Contact form page */

Route::get('/contact', 'SendEmailController@index');

Route::post('/sendemail/send', 'SendEmailController@send');


Auth::routes([
    'register'=>false
]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', 'HomeController@index');

/*Start of devices routes */
Route::get('/devices','BlacklistedDevicesController@index');
Route::get('/devices/create','BlacklistedDevicesController@create')->middleware('auth');

Route::post('/devices', 'BlacklistedDevicesController@store');
//Route::get('/devices/{id}', 'BlacklistedDevicesController@show');
Route::post('/devices', 'BlacklistedDevicesController@show');

//Route::post('/devices', 'App\Http\Controllers\BlacklistedDevicesController@store');
/*End of devices routes */
