<?php
/**
 * Created by PhpStorm.
 * User: xu.qinqin
 * Date: 2018/9/28
 * Time: 22:50
 */

namespace DesignPattern\Creational\Factory\Demo;

use Utils\Str;

class Square implements Shape
{
    public function draw()
    {
        Str::printLn(static::class);
    }
}
