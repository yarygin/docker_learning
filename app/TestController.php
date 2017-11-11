<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.11.17
 * Time: 23:59
 */

namespace Yarygin;


class TestController
{
    public function home()
    {
        $methods = get_class_methods(self::class);
        echo "available methods: " . implode(', ', $methods);
    }

    public function foo()
    {
        echo "foooooo!!!";
    }

    public function phpinfo()
    {
        phpinfo();
    }
}