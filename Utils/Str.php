<?php
/**
 * Created by PhpStorm.
 * User: xu.qinqin
 * Date: 2018/9/29
 * Time: 00:00
 */

namespace Utils;

class Str
{
    private $source = '';
    private $current = '';

    public static function print(string $string)
    {
        print "{$string}\n";
    }

    public function get()
    {
        return $this->current;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function __construct(string $string)
    {
        $this->source = $string;
        $this->current = $string;
    }

    public function toLower()
    {
        $this->current = strtolower($this->source);
        return $this;
    }

    public function equal($string, $isStrict = false)
    {
        $string = $string instanceof self ? $string->get() : $string;
        return $isStrict ? $this->current === $string : $this->current == $string;
    }
}
