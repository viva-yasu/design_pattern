<?php

namespace classes;

class Singleton
{
    private static $singleton;

    /**
     * Singleton constructor.
     */
    private function __construct()
    {
        echo "インスタンスを生成しました。\n";
    }

    public static function getInstance()
    {
        if (!isset(self::$singleton)) {
            self::$singleton = new Singleton();
        }
        return self::$singleton;
    }
}