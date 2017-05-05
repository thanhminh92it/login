<?php

Route::group(['middleware' => 'web', 'prefix' => 'login', 'namespace' => 'Modules\Login\Http\Controllers'], function()
{
    Route::get('/', 'LoginController@index');
    Route::post('/', 'LoginController@login');
    Route::post('/registry', 'LoginController@registry');
    Route::get('/logout', 'LoginController@logout');
});
