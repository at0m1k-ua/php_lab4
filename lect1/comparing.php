<?php

$a = 1;
$b = '1';

$res = $a==$b ? 'yes' : 'no';
echo "{$res}<hr>"; //yes

$res = $a===$b ? 'yes' : 'no';
echo "{$res}<hr>"; //no

$res = $a<=>$b;
echo "{$res}<hr>"; //0

$a = 2;
$res = $a<=>$b;
echo "{$res}<hr>"; //1

$a = 0;
$res = $a<=>$b;
echo "{$res}<hr>"; //-1
