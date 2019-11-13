<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/userlist' , 'UserController@getUserList');
Route::post('/adduser' , 'UserController@addUser');
