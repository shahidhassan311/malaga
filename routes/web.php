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

//
//Route::post('/charge', 'CheckoutController@charge');
//
//Route::get('/search', 'CheckoutController@index_page');
//Route::get('/request', 'CheckoutController@request_page');
//Route::post('/request_search', 'CheckoutController@request_search');

//Route::get('/', 'HomeController@index_page');

Auth::routes();

Route::get('/home', function(){
    return redirect('/dashboard');
});

//mail
Route::post('/send','MailController@send');
Route::post('/contact_form','MailController@contact_form');

//website
Route::get('/', 'WebController@index');
Route::get('/rentals', 'WebController@rentals');
Route::get('/about', 'WebController@about');
Route::get('/contact', 'WebController@contact');
Route::get('/require', 'WebController@requirements');
Route::get('/invest', 'WebController@investment');
Route::get('/legal', 'WebController@legal_services');
Route::get('/privacy', 'WebController@privacy_policy');
Route::get('/management', 'WebController@property_management');

Route::get('/property_collection', 'WebController@property_collection');
Route::get('/property_collection_details/{id}', 'WebController@property_collection_details');
Route::post('/search_filter', 'WebController@search_filter');


Route::group(['middleware' => ['auth']], function() {

    Route::get('/dashboard', 'AdminpanelController@dashboard');

    Route::get('/properties', 'AdminpanelController@properties');
    Route::get('/properties_detail/{id}', 'AdminpanelController@properties_detail');
    Route::get('/properties_delete/{id}', 'AdminpanelController@properties_delete');
    Route::get('/property_image_delete/{id}/{string}', 'AdminpanelController@property_image_delete');
    Route::get('/property_update_get/{id}', 'AdminpanelController@property_update_get');
    Route::post('/property_update_store/{id}', 'AdminpanelController@property_update_store');
    Route::get('/properties_status/{id}/{string}', 'AdminpanelController@properties_status');
    Route::get('/add_property', 'AdminpanelController@add_property');
    Route::post('/add_property_store', 'AdminpanelController@add_property_store');

});
