<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Config;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $prefix    = '/';


    /**
     * This domain is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */

    protected $domain    =  '';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map( Router $router )
    {
        $router->group(
            ['namespace' => $this->namespace], function ($router) {

            $domain =   Config::get('domain');

            if( strpos($domain, 'wx') !== false ) {

                require app_path('Http/Routes/routeWeChat.php');

            }elseif( strpos($domain, 'admin') !== false){

                require app_path('Http/Routes/routeAdmin.php');

            }elseif( strpos($domain, 'app') !== false){

                $this->mapApiRouter( $router );

            }else{
                require app_path('Http/Routes/routeWeb.php');
//                $this->mapWebRouter ($router);
            }
        });

    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    protected function mapApiRouter(Router $router)
    {
        //暂无API 接口路由
    }
    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    protected function mapWebRouter( Router $router )
    {
        $domain =   Config::get('domain');
        require app_path('Http/Routes/routeWeb.php');
    }
    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    protected function mapAdminRouter( Router $router, $domain)
    {
        $domain =   Config::get('domain');
        require app_path('Http/Routes/routeAdmin.php');
    }
    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    protected function maoWeChatRouter(Router $router, $domain)
    {
        $domain =   Config::get('domain');
        require app_path('Http/Routes/routeWeChat.php');
    }

}
