<?php
include 'vendor/autoload.php';

// php index.php demo/designPattern/CreationalController factory
$controller = $argv[1];
$action = isset($argv[2]) ? $argv[2] : 'index';

$controller = "Demo\\" . str_replace('/', '\\', str_replace('demo/', '', trim($controller, '.php')));
$a = new Demo\designPattern\CreationalController();
if (class_exists($controller)) {
    $controller = new $controller();
}

try {
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        throw new \Exceptions\RuntimeException(
            "method [" . (is_string($controller) ? $controller : get_class($controller)) . "::{$action}] not exists", 0
        );
    }
} catch (Exception $e) {
    \Utils\Str::printLn($e->getMessage());
}