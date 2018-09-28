<?php
/**
 * Created by PhpStorm.
 * User: xu.qinqin
 * Date: 2018/9/28
 * Time: 23:57
 */

namespace DesignPattern\Creational\Factory\Demo;

include "../../../../vendor/autoload.php";

$factory = new ShapeFactory();

$factory->getShape('circle')->draw();
$factory->getShape('square')->draw();

