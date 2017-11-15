<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Auth\PasswordController as Controller;

class PasswordController extends Controller
{
    protected $broker = 'admin';
    protected $redirectTo = 'admin';
}
