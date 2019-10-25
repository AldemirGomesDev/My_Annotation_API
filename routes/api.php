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

// Route::get('/ok', function(){
//     return ['Status => ' => true];
// });
  
// Route::middleware('auth:api')->group( function () {
//     Route::resource('annotation', 'AnnotationController');
//     Route::get('/ok', function(){
//         return ['status' => true];
//     });
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return ['status' => true];
});
Route::resource('annotation', 'AnnotationController');
    Route::get('ok', function(){
        return ['statuss' => true];
    });



