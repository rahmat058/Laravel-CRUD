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


// Pages routes Here

Route::get('/addcontact', 'AdminController@addContact');

Route::get('/allcontact', 'AdminController@allContact');

Route::get('/dashboard', 'AdminController@dashboard');

Route::post('/save_contact', 'AdminController@saveContact');

Route::get('/delete_contact/{contact_id}', 'AdminController@deleteContact');

Route::get('/edit_contact/{contact_id}', 'AdminController@editContact');

Route::post('/contact_update/{contact_id}', 'AdminController@contactUpdate');
