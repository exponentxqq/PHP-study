<?php
/**
 * Created by PhpStorm.
 * User: xuqinqin
 * Date: 18-10-26
 * Time: 下午12:50
 */

namespace Utils;


class Thunkify
{
    public static function exec($function)
    {
        return function () use ($function) {
            $args = func_get_args();
            return function ($callback) use ($args, $function) {
                $called = false;
                array_push($args, function (...$params) use ($callback, &$called) {
                    if ($called) return null;
                    $called = true;
                    return $callback(...$params);
                });
                return $function(...$args);
            };
        };
    }

    public function demo()
    {

        $printStr = function($p1, $p2, $callback) {
            $callback($p1, $p2);
        };

        $printStrThunkify = Thunkify::exec($printStr);

        $printStrThunkify(...["foo", "bar"])(function (...$p) {
            var_dump($p);
        });

        $echoAndSum = function ($a, $b, $sum) {
            var_dump($a, $b);
            echo $sum($a, $b);
            return 'echoAndSum';
        };

        $echoAndSumThunk = Thunkify::exec($echoAndSum);

        $re = $echoAndSumThunk(1,2)(function ($a, $b) {
            var_dump($a + $b);
            return 'callback';
        });
        var_dump($re);
    }
}
