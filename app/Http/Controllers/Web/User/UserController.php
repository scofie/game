<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
}
