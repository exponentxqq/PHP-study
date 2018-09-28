<?php
/**
 * Created by PhpStorm.
 * User: xu.qinqin
 * Date: 2018/9/28
 * Time: 23:56
 */

namespace DesignPattern\Creational\Factory\Demo;

use Utils\Str;

class Circle implements Shape
{

    public function draw()
    {
        Str::print(static::class);
    }
}
