<?php
/**
 * Created by PhpStorm.
 * User: xu.qinqin
 * Date: 2018/9/28
 * Time: 23:57
 */

namespace DesignPattern\Creational\Factory\Demo;

use Utils\Str;

class ShapeFactory
{
    public function getShape(string $shareType)
    {
        if (!$shareType) {
            return null;
        }
        $type = new Str($shareType);
        if ($type->toLower()->equal('circle')) {
            return new Circle();
        } elseif ($type->toLower()->equal('square')) {
            return new Square();
        }
        return null;
    }
}
