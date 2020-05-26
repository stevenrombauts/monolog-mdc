<?php
namespace Stevenrombauts\MonologMDC;

class MDC
{
    protected static $_store = [];
    protected static $_enabled = true;

    public static function isEmpty()
    {
        return empty(self::$_store);
    }

    public static function put(string $key, $value)
    {
        self::$_store[$key] = $value;
    }

    public static function remove(string $key)
    {
        if (array_key_exists($key, self::$_store)) {
            unset(self::$_store[$key]);
        }
    }

    public static function get($key = null)
    {
        if (array_key_exists($key, self::$_store)) {
            return self::$_store[$key];
        }
        
        return null;
    }

    public static function all()
    {
        return self::$_store;
    }

    public static function clear()
    {
        self::$_store = [];
    }

    public static function enable()
    {
        self::$_enabled = true;
    }

    public static function disable()
    {
        self::$_enabled = false;
    }

    public static function enabled()
    {
        return self::$_enabled === true;
    }
}
