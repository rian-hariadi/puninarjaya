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
    return view('onlinetest');
});





Route::post('number1','PowerUnitController@index') ;


Route::get('/number2','Number2Controller@index') ;



Route::get('/number4','Number4Controller@index') ;


Route::get('/number5',function() {
	return view('number5') ;
}) ;



Route::get('/number6',function() {
	return view('number6') ;
}) ;



Route::get('/number7','Number7Controller@index') ;


Route::get('/seeAllTable','Number1Controller@seeAllTable'  ) ;





// Corporations Table
Route::get('corporation','CorporationController@index'  ) ;
Route::post('corporation','CorporationController@store'  ) ;
Route::get('corporation/delete/{id}','CorporationController@delete'  ) ;
Route::get('corporation/truncate','CorporationController@truncate'  ) ;
Route::post('corporation/edit/{id}','CorporationController@edit'  ) ;


 // Locations Table
Route::get('location','LocationController@index'  ) ;
Route::post('location','LocationController@store'  ) ;
Route::get('location/delete/{id}','LocationController@delete'  ) ;
Route::get('location/truncate','LocationController@truncate'  ) ;
Route::post('location/edit/{id}','LocationController@edit'  ) ;


// Types Table
Route::get('type','TypeController@index'  ) ;
Route::post('type','TypeController@store'  ) ;
Route::get('type/delete/{id}','TypeController@delete'  ) ;
Route::get('type/truncate','TypeController@truncate'  ) ;
Route::post('type/edit/{id}','TypeController@edit'  ) ;


 // PowerUnits Table
Route::get('powerunit','PowerUnitController@index'  ) ;
Route::post('powerunit','PowerUnitController@store'  ) ;
Route::get('powerunit/delete/{id}','PowerUnitController@delete'  ) ;
Route::get('powerunit/truncate','PowerUnitController@truncate'  ) ;
Route::post('powerunit/edit/{id}','PowerUnitController@edit'  ) ;





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
