<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.11.17
 * Time: 23:53
 */
require_once "../vendor/autoload.php";

$controller = new Yarygin\TestController();
$controller->foo();
$controller->phpinfo();