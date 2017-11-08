<?php


Route::group(['prefix' => '/', 'namespace' => 'Web' ,'domain'=> $domain], function ()
{

    Route::get('/',                       'Home\IndexController@index');

    Route::get('login',                   'User\AuthController@index');

    Route::post('login',                  'User\AuthController@login');

    Route::get('logout',                  'User\AuthController@logout');

    Route::get('register',                'User\AuthController@getRegister');

    Route::post('register',               'User\AuthController@postRegister');

    Route::post('password/reset',         'User\PasswordController@reset');

    Route::post('password/email',         'User\PasswordController@sendResetLinkEmail');
});


