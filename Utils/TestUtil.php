<?php
/**
 * Created by PhpStorm.
 * User: xuqinqin
 * Date: 18-10-26
 * Time: 下午2:53
 */

namespace Utils;


class TestUtil
{
    public static function statisticsRuntime(callable $callable, int $count = 100)
    {
        $start = microtime(true);
        while ($count--) {
            $callable();
        }
        return microtime(true) - $start;
    }
}
