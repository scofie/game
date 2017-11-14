<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Auth\AuthController as Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
