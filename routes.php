<?php

Route::group(['prefix' => 'backend'], function () {

	// Auth related
	Route::get('login', 'Igniweb\Foundation\Controllers\Backend\AuthController@login');
	Route::post('auth/attempt', 'Igniweb\Foundation\Controllers\Backend\AuthController@attempt');
	Route::get('logout', 'Igniweb\Foundation\Controllers\Backend\AuthController@logout');

});
