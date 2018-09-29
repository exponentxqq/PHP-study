<?php
/**
 * Created by PhpStorm.
 * User: xu.qinqin
 * Date: 2018/9/29
 * Time: 21:04
 */

namespace Enums;

use Exceptions\EnumException;
use ReflectionClass;

abstract class BaseEnums
{
    protected static $__default = null;

    protected $value = null;

    protected static $constants = [];

    public function __construct($initialValue = null)
    {
        if (is_null($initialValue)) {
            $this->value = static::$__default;
        } else {
            if (in_array($initialValue, static::values())) {
                $this->value = $initialValue;
            } else {
                throw new EnumException(0, 'this type is invalid');
            }
        }
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getName()
    {
        return array_search($this->value, static::values());
    }

    /**
     * @return array
     * @throws \ReflectionException
     */
    public static function values(): array
    {
        if (!static::$constants) {
            $constants = (new ReflectionClass(static::class))->getConstants();
            unset($constants['__default']);
            static::$constants = $constants;
        }
        return static::$constants;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
