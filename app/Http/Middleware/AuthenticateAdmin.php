<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Route;

class AuthenticateAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if( !Auth::guard('admin')->user() ){
            return redirect('/admin/login');
        }
        //验证是否是管理员
        if(Auth::guard('admin')->user()->is_super){
            return $next($request);
        }
        if (Auth::guard($guard)->guest()) {
            if($request->ajax() && ($request->getMethod() != 'GET')) {
                return response()->json([
                    'status' => -1,
                    'code' => 403,
                    'msg' => '您没有权限执行此操作'
                ]);
            } else {
                return view('admin.errors.403', compact('previousUrl'));
            }
        }
        return $next($request);
    }
}
