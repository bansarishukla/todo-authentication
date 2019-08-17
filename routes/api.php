<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('tasks', 'TaskController@index');
Route::post('tasks', 'TaskController@store');
Route::delete('tasks/{id}', 'TaskController@destroy');
