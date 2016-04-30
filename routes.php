<?php

Route::group(['prefix' => 'backend'], function () {

	Route::get('login', 'Igniweb\Foundation\Controllers\Backend\AuthController@login');

});
