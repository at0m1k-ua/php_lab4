<?php

class Singleton {

    private static ?Singleton $instance = null;
    public int $var = 0;

    private function __construct() {
    }

    public static function getInstance(): Singleton {
        if (!Singleton::$instance) {
            Singleton::$instance = new Singleton();
        }
        return Singleton::$instance;
    }
}

$a = Singleton::getInstance();
$a->var = 123;

$b = Singleton::getInstance();
echo $b->var; // 123
