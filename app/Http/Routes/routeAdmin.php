<?php

Route::group(['prefix' => 'admin', 'middleware' => ['web'],'namespace' => 'Admin','domain'=> $domain], function ($router) {
    //后台用户登录注册路由
    $router->get('login',           ['uses' => 'Auth\AuthController@index','as' => 'admin.auth.index']);
    $router->post('loginIn',        ['uses' => 'Auth\AuthController@login','as' => 'admin.auth.login']);
    $router->get('logout',          ['uses' => 'Auth\AuthController@logout','as' => 'admin.auth.logout']);
//    $router->get('register', ['uses' => 'AuthController@getRegister','as' => 'admin.auth.register']);
//    $router->post('register', ['uses' => 'AuthController@postRegister','as' => 'admin.auth.register']);
    //后台用户修改密码路由
    $router->get('password/reset/{token?}', ['uses' => 'Auth\PasswordController@showResetForm','as' => 'admin.password.reset']);
    $router->post('password/reset',         ['uses' => 'Auth\PasswordController@reset','as' => 'admin.password.reset']);
    $router->post('password/email',         ['uses' => 'Auth\PasswordController@sendResetLinkEmail','as' => 'admin.password.email']);

    $router->get('/',                       ['uses' => 'AdminController@index','as' => 'admin.index']);

    $router->resource('index', 'IndexController');

    //目录
    $router->resource('menus', 'MenuController');

    //后台用户
    $router->get('adminuser/ajaxIndex',['uses'=>'Manage\AdminUserController@ajaxIndex','as'=>'admin.adminuser.ajaxIndex']);
    //$router->resource('adminuser', 'AdminUserController');
    $router->resource('adminuser', 'Manage\AdminUserController@index');

    //权限管理
    $router->get('permission/ajaxIndex',['uses'=>'PermissionController@ajaxIndex','as'=>'admin.permission.ajaxIndex']);
    $router->resource('permission', 'PermissionController');

    //角色管理
    $router->get('role/ajaxIndex',['uses'=>'RoleController@ajaxIndex','as'=>'admin.role.ajaxIndex']);
    $router->resource('role', 'RoleController');
});

