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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/login');

Route::post('/login', 'Auth\LoginController@login');

Route::redirect('/home', '/profile');

Route::get('unautorized', function () {

    return view('errors.403');

});

Route::get('/404', function () {

    return abort(404);

});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/search-results', 'HomeController@search');
Route::get('/success', 'HomeController@success');
Route::get('/book-now', 'HomeController@book');

// Route::get('/customerinfo', 'BookingController@storeinfo');
Route::post('/storeinfo', 'BookingController@storeinfo');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'Auth\LoginController@logout');
    //User
    Route::get('/profile', 'UserController@profile');

    Route::post('/savepaymentlink', 'Test\PaymentController@savepaymentlink');

    Route::post('/saveuser', 'UserController@saveuser');
    Route::get('/bookings', 'BookingController@bookings');
    Route::get('/deletebookings/{id}', 'BookingController@deletebookings');
    Route::get('/bookingsdetails/{id}', 'BookingController@detail');

});
