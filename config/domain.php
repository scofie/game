<?php
/**
 * Created by PhpStorm.
 * User: scofie
 * Date: 2017/11/7
 * Time: 14:24
 */

$defaultDomain  =   env ('APP_DOMAIN','');

$hostGroup  =   [
    env ('APP_DOMAIN_WX' ,''),
    env ('APP_DOMAIN_PC',''),
    env ('APP_DOMAIN_ADMIN','')
];

$serverHost = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';

if( $serverHost && in_array ($serverHost , $hostGroup) ) {

    return $serverHost;
}

return $defaultDomain;