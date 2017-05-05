<?php

Route::group(['middleware' => ['web','checkuser'], 'prefix' => 'home', 'namespace' => 'Modules\Home\Http\Controllers'], function()
{
    Route::get('/', 'HomeController@index');
});
