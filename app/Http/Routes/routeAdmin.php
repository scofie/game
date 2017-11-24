<?php

Route::group(['prefix' => 'admin', 'middleware' => ['web'],'namespace' => 'Admin','domain'=> $domain], function ($router) {

    $router->get('/',                       ['uses' => 'AdminController@index',             'as' => 'admin.index']);
    //后台用户登录注册路由
    $router->get('login',                   ['uses' => 'Auth\AuthController@index',         'as' => 'admin.auth.index']);
    $router->post('loginIn',                ['uses' => 'Auth\AuthController@login',         'as' => 'admin.auth.login']);
    $router->get('logout',                  ['uses' => 'Auth\AuthController@logout',        'as' => 'admin.auth.logout']);

    //后台用户修改密码路由
    $router->get('password/reset/{token?}', ['uses' => 'Auth\PasswordController@showResetForm','as' => 'admin.password.reset']);
    $router->post('password/reset',         ['uses' => 'Auth\PasswordController@reset',         'as' => 'admin.password.reset']);
    $router->post('password/email',         ['uses' => 'Auth\PasswordController@sendResetLinkEmail','as' => 'admin.password.email']);

    //使用resource
    $router->resource('menus',                'Manage\MenuController');
    $router->resource('adminuser',            'Manage\AdminUserController');
    $router->resource('permission',           'Manage\PermissionController');
    $router->resource('role',                 'Manage\RoleController');



    $router->get('menus',                   ['uses'=>'Manage\MenuController@index','as'=>'admin.menus.index']);

    //后台用户
    $router->get('adminuser',               ['uses'=>'Manage\AdminUserController@ajaxIndex','as'=>'admin.adminuser.index']);

    //权限管理
    $router->get('permission',              ['uses'=>'Manage\PermissionController@ajaxIndex',      'as'=>'admin.permission.index']);

    //角色管理
    $router->get('role',                    ['uses'=>'Manage\RoleController@ajaxIndex',             'as'=>'admin.role.index']);
});

