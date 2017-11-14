<?php

namespace App\Http\Controllers\Pc\User;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
}
