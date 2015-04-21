<?php

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@index'));
Route::get('/participa', array('as' => 'index', 'uses' => 'HomeController@participa'));
Route::get('/reto', array('as' => 'index', 'uses' => 'HomeController@reto'));
Route::get('/galeria', array('as' => 'index', 'uses' => 'HomeController@galeria'));
Route::post('/registro', array('as' => 'registro', 'uses' => 'HomeController@ajaxRegistro'));