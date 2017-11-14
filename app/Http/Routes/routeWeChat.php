<?php

Route::group(['prefix' => '', 'namespace' => 'WeChat' ,'domain'=> $domain], function () {

    Route::get('/',                       ['as' => 'users.index',                 'uses' => 'UserController@index']);

    Route::get('login',                   ['as' => 'users.auth.index',            'uses' => 'AuthController@index']);

    Route::post('login',                  ['as' => 'users.auth.login',            'uses' => 'AuthController@login']);

    Route::get('logout',                  ['as' => 'users.auth.logout',           'uses' => 'AuthController@logout']);

    Route::get('register',                ['as' => 'users.auth.register',         'uses' => 'AuthController@getRegister']);

    Route::post('register',               ['as' => 'users.auth.register',         'uses' => 'AuthController@postRegister']);

    Route::post('password/reset',         ['as' => 'users.password.reset',        'uses' => 'PasswordController@reset']);

    Route::post('password/email',         ['as' => 'users.password.email',        'uses' => 'PasswordController@sendResetLinkEmail']);
});


