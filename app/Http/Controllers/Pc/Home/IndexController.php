<?php

namespace App\Http\Controllers\Web\Pc;

use App\Http\Controllers\Pc\PcController;
use Illuminate\Http\Request;

class IndexController extends PcController
{
    public function index(Request $request)
    {

        return view('web.home.index');
    }
}
