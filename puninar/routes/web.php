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



Route::get('/number1','Number1Controller@index') ;

// Route::get('/number1_create','Number1Controller@create') ;
// Route::get('/number1_read','Number1Controller@read') ;



Route::get('/number2',function() {
	return view('number2') ;
}) ;

Route::get('/number3',function() {
	return view('number3') ;
}) ;

Route::get('/number4',function() {
	return view('number4') ;
}) ;


Route::get('/number5',function() {
	return view('number5') ;
}) ;



Route::get('/number6',function() {
	return view('number6') ;
}) ;



Route::get('/number7',function() {
	return view('number7') ;
}) ;


Route::get('/seeAllTable','Number1Controller@seeAllTable'  ) ;


