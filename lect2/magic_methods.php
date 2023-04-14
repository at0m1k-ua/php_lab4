<?php

class TestClass {
    public $a = 0;
    private $b = 1;

    public function __get($property) {
        echo "Can't read field '{$property}'";
    }

    public function __set($property, $value) {
        echo "Can't write field '{$property}'";
    }

    public function __call($name, $arguments) {
        echo "Can't call method '{$name}' from object context";
    }

    public static function __callStatic($name, $arguments) {
        echo "Can't call method '{$name}' from static context";
    }
}

$test = new TestClass();

echo $test->a . '<hr>';

echo $test->b . '<hr>';

$test->c = 'whatever';
echo '<hr>';

$test->nonExistentMethod();
echo '<hr>';

TestClass::nonExistentMethod2();
echo '<hr>';