<?php

class A {
    protected int $a;

    function __construct($a) {
        $this->a = $a;
    }

    function __toString(): String {
        return $this->a;
    }
}

class B extends A {
    protected int $b;

    function __construct($a, $b) {
        parent::__construct($a);
        $this->b = $b;
    }

    function __toString(): String {
        return "{$this->a} {$this->b}";
    }
}

$a = new A(1);
$b = new B(2, 3);

echo "{$a}<hr>{$b}";
