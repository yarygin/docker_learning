<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.11.17
 * Time: 23:53
 */
require_once "../vendor/autoload.php";

$controller = new Yarygin\TestController();
$uri = ltrim($_SERVER['REQUEST_URI'], '/');
if (method_exists($controller, $uri)) {
    call_user_func([$controller, $uri]);
} else {
    $controller->home();
}
