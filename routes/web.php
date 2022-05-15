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

Route::get('/', function () {
    return view('welcome');
});



       
Route::get('invoice','App\Http\Controllers\InvoiceController@index')->name('invoice.index');

Route::get('invoice/create','App\Http\Controllers\InvoiceController@create')->name('invoice.create');
Route::get('invoice/doc','App\Http\Controllers\InvoiceController@doc');

Route::post('invoice/save','App\Http\Controllers\InvoiceController@store')->name('invoice.store');

	
Route::get('invoice/{invoice}/edit','App\Http\Controllers\InvoiceController@edit')->name('invoice.edit')->middleware('auth');

Route::put('invoice/{invoice}/update','App\Http\Controllers\InvoiceController@update')->name('invoice.update')->middleware('auth');

Route::delete('invoice/{invoice}/destroy','App\Http\Controllers\InvoiceController@destroy')->name('invoice.destroy')->middleware('auth');



Route::get('/dashboard', 'App\Http\Controllers\InvoiceController@index')->name('dashboard')->middleware(['auth']);

Route::get('invoice/{invoice}/pdf','App\Http\Controllers\InvoiceController@pdf_print')->name('invoice.pdf')->middleware(['auth']);

require __DIR__.'/auth.php';


//function () {
   // return view('dashboard');