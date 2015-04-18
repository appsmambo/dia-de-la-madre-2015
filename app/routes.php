<?php

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@index'));
Route::post('/registro', array('as' => 'registro', 'uses' => 'HomeController@ajaxRegistro'));
