<?php
/**
 * Created by PhpStorm.
 * User: xuqinqin
 * Date: 18-10-30
 * Time: 下午2:40
 */

namespace Demo\designPattern;


use Demo\Controller;
use DesignPattern\Creational\Factory\Demo\ShapeFactory;
use Enums\ShapeEnum;

class CreationalController extends Controller
{
    public function factory()
    {
        $factory = new ShapeFactory();
        $factory->getShape(new ShapeEnum(ShapeEnum::CIRCLE))->draw();
        $factory->getShape(new ShapeEnum(ShapeEnum::SQUARE))->draw();
    }
}
