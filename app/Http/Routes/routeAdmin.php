<?php

Route::group(['prefix' => '/', 'namespace' => 'Admin' ,'domain'=> $domain,'middleware' => 'admin'], function () {

    Route::get('/', function() {
            echo 'This is Admin Home';
        });
    Route::get('/login', function() {
        echo 'This is Admin Login Page';
    });
//    Route::get('/', ['uses' => 'AdminController@index','as' => 'admin.index']);
//    //后台用户
//    Route::get('/adminuser/ajaxIndex',['uses'=>'AdminUserController@ajaxIndex','as'=>'admin.adminuser.ajaxIndex']);
//
//    //权限管理
//    Route::get('/permission/ajaxIndex',['uses'=>'PermissionController@ajaxIndex','as'=>'admin.permission.ajaxIndex']);
//
//    //角色管理
//    Route::get('/role/ajaxIndex',['uses'=>'RoleController@ajaxIndex','as'=>'admin.role.ajaxIndex']);
//
//    Route::get('/login', ['uses' => 'AuthController@index','as' => 'admin.auth.index']);
//    Route::post('/login', ['uses' => 'AuthController@login','as' => 'admin.auth.login']);
//    Route::get('/logout', ['uses' => 'AuthController@logout','as' => 'admin.auth.logout']);
//    Route::get('/register', ['uses' => 'AuthController@getRegister','as' => 'admin.auth.register']);
//    Route::post('/register', ['uses' => 'AuthController@postRegister','as' => 'admin.auth.register']);
//    Route::get('/password/reset/{token?}', ['uses' => 'PasswordController@showResetForm','as' => 'admin.password.reset']);
//    Route::post('/password/reset', ['uses' => 'PasswordController@reset','as' => 'admin.password.reset']);
//    Route::post('/password/email', ['uses' => 'PasswordController@sendResetLinkEmail','as' => 'admin.password.email']);

});

