<?php

namespace App\Http\Controllers\Web\Home;



use App\Http\Controllers\Web\WebController;
use Illuminate\Http\Request;


class IndexController extends WebController
{
    public function index(Request $request)
    {
        return view('web.home.index');
    }
}
