<?php
/**
 * Created by PhpStorm.
 * User: xu.qinqin
 * Date: 2018/9/28
 * Time: 23:57
 */

namespace DesignPattern\Creational\Factory\Demo;

use Enums\ShapeEnum;

include "../../../../vendor/autoload.php";

$factory = new ShapeFactory();

$factory->getShape(new ShapeEnum(ShapeEnum::CIRCLE))->draw();
$factory->getShape(new ShapeEnum(ShapeEnum::SQUARE))->draw();

