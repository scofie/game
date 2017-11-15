<?php

Route::group(['middleware' => ['auth:users']], function ($router) {

    $router->get('login', ['uses' => 'AuthController@index', 'as' => 'users.auth.index',]);

    $router->post('login', ['uses' => 'AuthController@login', 'as' => 'users.auth.login',]);

    $router->get('logout', ['uses' => 'AuthController@logout', 'as' => 'users.auth.logout',]);

    $router->get('register', ['uses' => 'AuthController@getRegister', 'as' => 'users.auth.register',]);

    $router->post('register', ['uses' => 'AuthController@postRegister', 'as' => 'users.auth.register',]);

    $router->get('password/reset/{token?}', ['uses' => 'PasswordController@showResetForm', 'as' => 'users.password.reset',]);

    $router->post('password/reset', ['uses' => 'PasswordController@reset', 'as' => 'users.password.reset',]);

    $router->post('password/email', ['uses' => 'PasswordController@sendResetLinkEmail', 'as' => 'users.password.email',]);
    
    $router->get('/', ['uses' => 'UserController@index', 'as' => 'users.index',]);
});

