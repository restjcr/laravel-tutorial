<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/list','ProductsController@list');

Route::post('/create','ProductsController@create');

Route::put('/update/{product}','ProductsController@update');

Route::delete('/delete/{product}','ProductsController@delete');
