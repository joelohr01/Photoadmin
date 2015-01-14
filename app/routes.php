<?php

Route::get('/', array('uses' => 'HomeController@home'));

Route::get('/login', array('uses' => 'HomeController@showLogin'));
Route::post('/login', array('uses' => 'HomeController@doLogin'));