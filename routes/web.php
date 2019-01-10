<?php
use App\Models\Agency;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('agencies', 'AgencyController');

Route::resource('brands', 'BrandController');

Route::resource('cars', 'CarController');

Route::resource('users', 'UserController');
Route::resource('clients', 'ClientController');
Route::post('/clients/addClient', 
    [ 'as' => 'clients.addClient', 
      'uses' => 'clientController@addClient'
    ]);

Route::resource('bookings', 'BookingController');
Route::get('bookingshistory', 'BookingController@bookingHistory')->name('bookinghistory');

Route::resource('invoices', 'InvoiceController');
Route::post('/search', 'SearchController@filter');
Route::resource('reglages', 'ReglageController');

Route::get('car_prices','CarController@carPrices');
