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

Route::get('/ok', function(){
    return ['Status => ' => true];
});

Route::get('annotation', 'AnnotationController@index');
Route::get('annotation/{id}', 'AnnotationController@show');
Route::post('annotation', 'AnnotationController@store');
Route::put('annotation/{id}', 'AnnotationController@update');
Route::delete('annotation/{id}', 'AnnotationController@destroy');
  
// Route::middleware('auth:api')->group( function () {
//     Route::get('annotation', 'AnnotationController@index');
//     Route::get('annotation/{id}', 'AnnotationController@show');
//     Route::post('annotation', 'AnnotationController@store');
//     Route::put('annotation/{id}', 'AnnotationController@update');
//     Route::delete('annotation/{id}', 'AnnotationController@destroy');
// });

// Route::middleware('auth:api')->get('/user', function (Request $request) {
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return ['status' => true];
//     return ['status' => true];
// });




