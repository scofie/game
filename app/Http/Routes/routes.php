<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', ['middleware' => 'web', function () {
    return view('index');
}]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */

//Route::group(['middleware' => ['web']], function () {
//
//    Route::group(['prefix' => '/', 'namespace' => 'Pc'], function () {
//        $domain = \Config::get('domain');
//        require app_path('Http/Routes/routeWeb.php');
//    });
//
//    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
//        $domain = \Config::get('domain');
//        require app_path('Http/Routes/routeAdmin.php');
//    });
//    //加载微信
////    Route::group(['prefix' => '/', 'namespace' => 'Weixin'], function () {
////        require app_path('Http/Routes/routeWeChat.php');
////    });
//});

