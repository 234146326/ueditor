<?php

Route::get('ueditor', '\\xuying\\ueditor\\UeditorController@index')
    ->header('Access-Control-Allow-Origin','*')
    ->header('Access-Control-Allow-Methods','GET,POST,OPTIONS,DELETE,PUT')
    ->header('Access-Control-Allow-Headers','Origin,Content-Type, Accept, Authorization, X-Request-With')
    ->header('Access-Control-Allow-Credentials', 'true')
    ->header('Access-Control-Allow-Headers', 'X-Requested-With,X_Requested_With')
    ->allowCrossDomain();

Route::post('ueditor', '\\xuying\\ueditor\\UeditorController@index')
    ->header('Access-Control-Allow-Origin','*')
    ->header('Access-Control-Allow-Methods','GET,POST,OPTIONS,DELETE,PUT')
    ->header('Access-Control-Allow-Headers','Origin,Content-Type, Accept, Authorization, X-Request-With')
    ->header('Access-Control-Allow-Credentials', 'true')
    ->header('Access-Control-Allow-Headers', 'X-Requested-With,X_Requested_With')
    ->allowCrossDomain();