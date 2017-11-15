<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Auth\AuthController;

class AdminController extends AuthController
{
    public function index()
    {
        return view('admin.index');
    }
}
