<?php
/**
 * Created by PhpStorm.
 * User: xu.qinqin
 * Date: 2018/9/28
 * Time: 23:57
 */

namespace DesignPattern\Creational\Factory\Demo;

use Enums\ShapeEnum;

class ShapeFactory
{
    public function getShape(ShapeEnum $shapeEnum)
    {
        switch ($shapeEnum->getValue()) {
            case ShapeEnum::CIRCLE:
                return new Circle();
            case ShapeEnum::SQUARE:
                return new Square();
            default:
                return null;
        }
    }
}
