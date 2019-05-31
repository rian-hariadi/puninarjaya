<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

 
 // PowerUnits Table  (Number 3)
Route::get('apipowerunit','ApiPowerUnitController@index'  ) ;
Route::post('apipowerunit','ApiPowerUnitController@store'  ) ;
Route::get('apipowerunit/delete/{id}','ApiPowerUnitController@delete'  ) ;
Route::get('apipowerunit/truncate','ApiPowerUnitController@truncate'  ) ;
Route::post('apipowerunit/edit/{id}','ApiPowerUnitController@edit'  ) ;

