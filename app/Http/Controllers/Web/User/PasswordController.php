<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Auth\PasswordController as Controller;

class PasswordController extends Controller
{
    protected $broker = 'users';
    protected $redirectTo = 'user';
}
