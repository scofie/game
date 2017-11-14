<?php

namespace App\Http\Controllers\Pc\User;

use App\Http\Controllers\Auth\PasswordController as Controller;

class PasswordController extends Controller
{
    protected $broker = 'users';
    protected $redirectTo = 'user';
}
