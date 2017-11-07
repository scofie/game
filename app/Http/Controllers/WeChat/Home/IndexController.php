<?php
namespace App\Http\Controllers\WeChat\Home;
use App\Http\Controllers\WeChat\WeChatController;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: scofie
 * Date: 2017/11/7
 * Time: 15:25
 */
class IndexController extends WeChatController
{
    public function index( Request $request)
    {
        echo 'This is Wap Home Page';
    }
}