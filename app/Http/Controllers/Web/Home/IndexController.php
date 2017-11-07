<?php

namespace App\Http\Controllers\Web\Home;



use App\Http\Controllers\Web\WebController;

class HomeController extends WebController
{
    public function index()
    {
        return view('users.index');
    }
}
