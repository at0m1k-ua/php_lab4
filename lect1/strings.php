<?php

$a = '123';
echo $a.'<hr>';

$b = "abc";
echo $b.'<hr>';

$c = "qwerty{$a}";
echo $c.'<hr>';

$d = 'qwerty{$a}';
echo $d.'<hr>';

$e = $a.$b;
echo $e;